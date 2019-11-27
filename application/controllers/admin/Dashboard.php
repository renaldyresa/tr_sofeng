<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        // Initialization of class
        parent::__construct();
        if (!$this->session->userdata('logged_in_admin'))
            redirect('admin/Login_admin');
    }
    public function index()
    {
        $this->load->view('admin/dashboard');
    }
}
