<?php
class Registrasi_Model extends CI_Model
{
    private $_table = "users";

    public function cek($nim)
    {
        $this->db->where('Nim', $nim);
        $result = $this->db->get($this->_table, 1);
        return $result->num_rows();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->Nim = $post['nim'];
        if ($this->cek($post['nim']) > 0)
            return 0;
        $this->Nama = $post["nama"];
        $this->Fakultas = $post["fakultas"];
        $this->Progdi = $post["progdi"];
        $this->No_Hp = $post["no_hp"];
        $this->Password = $post["password"];
        $this->db->insert($this->_table, $this);
        return 1;
    }
}
