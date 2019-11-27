<?php
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Login_Model');
  }

  function index()
  {
    $this->load->view('login_view');
  }

  function register()
  {
    $this->load->view('register_view');
  }

  function auth()
  {
    $dt_nim    = $this->input->post('nim', TRUE);
    $password = $this->input->post('password', TRUE);
    $validate = $this->Login_Model->validate($dt_nim, $password);
    if ($validate->num_rows() > 0) {
      $data  = $validate->row_array();
      $nim  = $data['Nim'];
      $nama = $data['Nama'];
      $sesdata = array(
        'nim' => $nim,
        'nama'  => $nama,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($sesdata);
      redirect('Home');
    } else {
      echo $this->session->set_flashdata('msg', 'Nim or Password is Wrong');
      redirect('Login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('Home');
  }
}
