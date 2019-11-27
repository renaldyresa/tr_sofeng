<?php
class M_add_post extends CI_Model
{
  private $_table = "events";

  public $Id_Event;
  public $Nama_Event;
  public $Kapasitas;
  public $Gambar = "default.jpg";
  public $Detail_Event;

  public function getall()
  {
    $this->db->select('*');
    $this->db->from($this->_table);
    $this->db->order_by('Tgl_Publikasi', 'DESC');
    return $this->db->get()->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ["Id_Event" => $id])->row();
  }

  public function save()
  {
    date_default_timezone_set('Asia/Jakarta');
    $post = $this->input->post();
    $this->Id_Event = uniqid();
    $this->Nama_Event = $post["judul"];
    $this->Tgl_Publikasi = date('Y-m-d H:i:s');
    $this->Kapasitas = $post["kapasitas"];
    $this->Tgl_Mulai = $post["mulai"];
    $this->Tgl_Berakhir = $post["akhir"];
    $this->Harga = $post["harga"];
    $this->Gambar = $this->_uploadImage();
    $this->Detail_Event = $post["detail"];
    $this->Status = $post["status"];
    $this->db->insert($this->_table, $this);
  }

  private function _uploadImage()
  {
    $config['upload_path']          = './upload/gambar/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->Id_Event;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
      return $this->upload->data("file_name");
    }
    return "default.jpg";
  }

  public function update($id)
  {
    date_default_timezone_set('Asia/Jakarta');
    $post = $this->input->post();
    $this->Id_Event = $id;
    $this->Nama_Event = $post["judul"];
    $this->Tgl_Publikasi = $post["publikasi"];
    $this->Tgl_Pembaharuan = date('Y-m-d H:i:s');
    $this->Kapasitas = $post["kapasitas"];
    $this->Tgl_Mulai = $post["mulai"];
    $this->Tgl_Berakhir = $post["akhir"];
    $this->Harga = $post["harga"];
    $this->Detail_Event = $post["detail"];
    $this->Status = $post["status"];
    if (!empty($_FILES["gambar"]["name"])) {
      $this->_deleteImage($id);
      $this->Gambar = $this->_uploadImage();
    } else {
      $this->Gambar = $post["old_image"];
    }
    $this->db->update($this->_table, $this, array('Id_Event' => $id));
  }


  public function delete($id)
  {
    $this->_deleteImage($id);
    return $this->db->delete($this->_table, array("Id_Event" => $id));
  }

  private function _deleteImage($id)
  {
    $event = $this->getById($id);
    if ($event->Gambar != "default.jpg") {
      $filename = explode(".", $event->Gambar)[0];
      return array_map('unlink', glob(FCPATH . "upload/gambar/$filename.*"));
    }
  }
}
