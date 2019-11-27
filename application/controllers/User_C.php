<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_C extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_user');
    }

    public function setting($id)
    {
        if (!isset($id)) show_404();

        $data['data'] = $this->M_user->getById($id);
        $this->load->view('setting', $data);
    }

    public function update()
    {
        $this->M_user->update();
        redirect(site_url('Home'));
    }

    public function daftar($id)
    {
        $this->load->model('Peserta_Model');
        $data['data'] = $this->Peserta_Model->getUser($id);
        $this->load->view('daftar', $data);
    }

    public function delete_p()
    {
        $this->load->model('Peserta_Model');
        $id = $this->uri->segment(3);
        $nim = $this->uri->segment(4);
        $this->Peserta_Model->delete($id, $nim);
        redirect('user_c/daftar/' . $nim);
    }
}
