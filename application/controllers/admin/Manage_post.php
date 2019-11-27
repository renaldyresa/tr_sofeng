<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_post extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_add_post');
        if (!$this->session->userdata('logged_in_admin'))
            redirect('admin/Login_admin');
    }
    public function index()
    {
        $data['data'] = $this->M_add_post->getall();
        $this->load->view('admin/manage-post', $data);
    }

    public function formedit($id)
    {
        if (!isset($id)) show_404();

        $data['data'] = $this->M_add_post->getById($id);
        $this->load->view('admin/edit-post', $data);
    }

    public function update($id)
    {
        if (!isset($id)) show_404();

        $this->M_add_post->update($id);
        redirect(site_url('admin/manage_post'));
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_add_post->delete($id)) {
            redirect(site_url('admin/manage_post'));
        }
    }

    public function detail($id)
    {
        if (!isset($id)) show_404();
        $this->load->model('Peserta_Model');
        $data['data'] = $this->M_add_post->getById($id);
        $data['data1'] = $this->Peserta_Model->getAll($id);
        $this->load->view('admin/detail-post', $data);
    }

    public function delete_p()
    {
        $this->load->model('Peserta_Model');
        $id = $this->uri->segment(4);
        $nim = $this->uri->segment(5);
        $this->Peserta_Model->delete($id, $nim);
        redirect('admin/manage_post/detail/' . $id);
    }
}
