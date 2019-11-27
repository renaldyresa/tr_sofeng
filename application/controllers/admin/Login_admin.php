<?php
class Login_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Admin_Model');
    }

    function index()
    {
        $this->load->view('admin/login-admin');
    }

    function auth()
    {
        $id    = $this->input->post('id', TRUE);
        $password = $this->input->post('password', TRUE);
        $validate = $this->Admin_Model->validate($id, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $id = $data['Id'];
            $nim  = $data['Nim'];
            $nama = $data['Nama'];
            $sesdata = array(
                'id' => $id,
                'nim' => $nim,
                'nama'  => $nama,
                'logged_in_admin' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('admin/dashboard');
        } else {
            echo $this->session->set_flashdata('msg', 'Id or Password is Wrong');
            redirect('admin/Login_admin');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Home');
    }
}
