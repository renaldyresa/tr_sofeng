<?php
class Peserta_Model extends CI_Model
{

    private $_table = 'peserta';
    public function getAll($id)
    {
        $this->db->select("ps.Id_Event, ps.Nim ,ps.Tanggal, us.Nama, us.No_Hp, us.Fakultas, us.Progdi");
        $this->db->from('peserta as ps');
        $this->db->join('users as us', 'us.Nim = ps.Nim');
        $this->db->where('ps.Id_Event', $id);
        $data = $this->db->get();
        return $data->result();
    }

    public function getCount($id)
    {
        $this->db->select("ps.Id_Event, ps.Nim ,ps.Tanggal, us.Nama, us.No_Hp, us.Fakultas, us.Progdi");
        $this->db->from('peserta as ps');
        $this->db->join('users as us', 'us.Nim = ps.Nim');
        $this->db->where('ps.Id_Event', $id);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function delete($id, $nim)
    {
        $this->db->delete($this->_table, array("Id_Event" => $id, "Nim" => $nim));
    }

    public function getUser($id)
    {
        $this->db->select("ps.Id_Event, ev.Nama_Event");
        $this->db->from('peserta as ps');
        $this->db->join('events as ev', 'ev.Id_Event = ps.Id_Event');
        $this->db->where('ps.Nim', $id);
        $this->db->where('ev.Status', "1");
        $data = $this->db->get();
        return $data->result();
    }
}
