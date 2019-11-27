<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{
    public function index()
    {
        $this->load->model('admin/M_add_post');
        $data['data'] = $this->M_add_post->getall();
        $this->load->view('event', $data);
    }

    public function detail($id)
    {
        $this->load->model('admin/M_add_post');
        $data['data'] = $this->M_add_post->getById($id);
        $this->load->model('Peserta_Model');
        $jml = $this->Peserta_Model->getCount($id);
        $data['jumlah'] = count($jml);
        $this->load->view('detail', $data);
    }

    public function daftar()
    {
        $this->load->model('Daftar_Model');
        $id = $this->uri->segment(3);
        $nim = $this->uri->segment(4);
        $result = $this->Daftar_Model->add($id, $nim);
        if ($result == '1') {
            $this->session->set_flashdata('info', '1');
        } else if ($result == '2') {
            $this->session->set_flashdata('info', '2');
        } else {
            $this->session->set_flashdata('info', '3');
        }
        redirect('Event/detail/' . $id);
    }
}
