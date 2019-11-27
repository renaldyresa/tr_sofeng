<?php
class Login_model extends CI_Model
{

  function validate($nim, $password)
  {
    $this->db->where('Nim', $nim);
    $this->db->where('Password', $password);
    $result = $this->db->get('users', 1);
    return $result;
  }
}
