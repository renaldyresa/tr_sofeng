<?php
class Daftar_Model extends CI_Model
{
    private $_table = "peserta";

    function add($id, $nim)
    {
        if ($this->cek($id, $nim)->num_rows() == 0) {
            date_default_timezone_set('Asia/Jakarta');
            $this->Id_Event = $id;
            $this->Nim = $nim;
            $this->Tanggal = date('Y-m-d H:i:s');
            if ($this->db->insert($this->_table, $this)) {
                return "1";
            } else {
                return "3";
            }
        }
        return '2';
    }

    function cek($id, $nim)
    {
        $this->db->where('Id_Event', $id);
        $this->db->where('Nim', $nim);
        $result = $this->db->get($this->_table, 1);
        return $result;
    }
}
