<?php
class M_user extends CI_Model
{
    private $_table = "users";

    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["Nim" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->Nama = $post["nama"];
        $this->Fakultas = $post["fakultas"];
        $this->Progdi = $post["progdi"];
        $this->No_Hp = $post["kontak"];
        $this->Password = $post["password"];
        $this->db->update($this->_table, $this, array('Nim' => $post['nim']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("Nim" => $id));
    }
}
