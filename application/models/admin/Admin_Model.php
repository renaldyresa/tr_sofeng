<?php
class Admin_Model extends CI_Model
{
    private $_table = "admin";
    function validate($id, $password)
    {
        $this->db->where('Id', $id);
        $this->db->or_where('Nim', $id);
        $this->db->where('Password', $password);
        $result = $this->db->get('admin', 1);
        return $result;
    }

    public function cek($nim)
    {
        $this->db->where('Nim', $nim);
        $result = $this->db->get('admin', 1);
        return $result->num_rows();
    }
    public function save()
    {
        $post = $this->input->post();
        if ($this->cek($post['nim']) > 0)
            return 0;
        $this->Nim = $post['nim'];
        $this->Nama = $post["nama"];
        $this->Password = $post["password"];
        $this->db->insert($this->_table, $this);
        return 1;
    }

    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getDataAdmin($id)
    {
        return $this->db->get_where($this->_table, ["Id" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->Nama = $post["nama"];
        $this->Nim = $post["nim"];
        $this->Password = $post["password"];
        $this->db->update($this->_table, $this, array('Id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("Id" => $id));
    }
}
