<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Registrasi_Model');
    }
    public function add()
    {
        if ($this->Registrasi_Model->save() == 1) {
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
            redirect('Login');
        } else {
            $this->session->set_flashdata('info', 'Nim yang di gunakan sudah ada');
            redirect('login/register');
        }
    }
}
