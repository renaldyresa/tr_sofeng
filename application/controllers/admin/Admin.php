<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        // Initialization of class
        parent::__construct();
        $this->load->model('admin/Admin_Model');
        if (!$this->session->userdata('logged_in_admin'))
            redirect('admin/Login_admin');
    }
    public function index()
    {
        $this->load->view('admin/add-admin');
    }

    public function add()
    {
        if ($this->Admin_Model->save() == 1) {
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
            redirect('admin/admin/manage');
        } else {
            $this->session->set_flashdata('info', 'Nim yang di gunakan sudah ada');
            redirect('admin/admin');
        }
    }

    public function manage()
    {
        $data['data'] = $this->Admin_Model->getAllData();
        $this->load->view('admin/manage-admin', $data);
    }

    public function setting($id)
    {
        $data['data'] = $this->Admin_Model->getDataAdmin($id);
        $this->load->view('admin/setting-admin', $data);
    }

    public function update()
    {
        $this->Admin_Model->update();
        redirect(site_url('admin/dashboard'));
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Admin_Model->delete($id)) {
            $this->session->set_flashdata('delete', 'Berhasil Dihapus');
            redirect(site_url('admin/admin/manage'));
        }
    }
}
