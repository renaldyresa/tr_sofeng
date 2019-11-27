<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Home_Model');
        $data['data'] = $this->Home_Model->getData();
        $this->load->view('home', $data);
    }
    public function about()
    {
        $this->load->view('about');
    }
}
