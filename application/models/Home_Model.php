<?php
class Home_Model extends CI_Model
{
    private $_table = 'Events';
    public function getData()
    {
        $this->db->select('Id_Event, Nama_Event, Gambar');
        $this->db->from($this->_table);
        $this->db->order_by('Tgl_Publikasi', 'DESC');
        $this->db->limit(8);
        return $this->db->get()->result();
    }
}
