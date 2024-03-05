<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_siswa extends CI_Model 
{
  // Tampil data dari database
  public function Kepala()
  {
    $this->db->order_by('ID','ASC');
    $query = $this->db->get('kepala');
    return $query->result();
  }
  public function Keahlian()
  {
    $this->db->order_by('ID','ASC');
    $query = $this->db->get('keahlian');
    return $query->result();
  }
  public function Kontak()
  {
    $this->db->order_by('ID', 'ASC');
    $query = $this->db->get('kontak');
    return $query->result();
  }
  public function Tentang()
  {
    $this->db->order_by('ID', 'ASC');
    $query = $this->db->get('tentang');
    return $query->result();
  }
  public function Project()
  {
    $this->db->order_by('ID', 'ASC');
    $query = $this->db->get('project');
    return $query->result();
  }
    // Tampil data dari database

     // tambah data ke database
     function Tambah_data()
     {

      $Harga = $this->input->post('Harga');
      $Lama_Rental = $this->input->post('Lama_Rental');
      $Driver = $this->input->post('Driver');
      $hd = 0;
      if($Driver == 'YA'){
        $hd = 100000;
      }
      $total = ($Lama_Rental * $Harga)+($Lama_Rental * $hd);
      
      $data = [
        "Nama_Client" => $this->input->post('Nama_Client'),
        "Tipe_Mobil" => $this->input->post('Tipe_Mobil'),
        "Harga" => $Harga,
        "Lama_Rental" => $Lama_Rental,
        "Driver" =>$this->input->post('Driver'),
        "Total" => $total
        
      ];
      $this->db->insert('transaksi' , $data);
    }
    public function Tambah_data1()
    {
      $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name'] = $_FILES['berkas']['name'];
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
        } 
        $uploadData = $this->upload->data();
          $filename = $uploadData['file_name'];
      $data = [
        "Tipe_Mobil" => $this->input->post('Tipe_Mobil'),
        "Harga" => $this->input->post('Harga'),
        "Deskripsi" => $this->input->post('Deskripsi'),
        "Gambar" => $filename

      ];
      $this->db->insert('mobil' , $data);
    }
    public function Tambah_Kepala()
    {
      $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name'] = $_FILES['berkas']['name'];
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
        } 
        $uploadData = $this->upload->data();
          $filename = $uploadData['file_name'];
      $data = [
        
        "Deskripsi" => $this->input->post('Deskripsi'),
        "Gambar" => $filename

      ];
      $this->db->insert('kepala' , $data);
    }
    public function Tambah_Keahlian()
    {
      
      $data = [
        
        "Keahlian" => $this->input->post('Keahlian'),
        "Deskripsi" => $this->input->post('Deskripsi'),
        

      ];
      $this->db->insert('keahlian' , $data);
    }
    public function Tambah_Kontak()
    {
  
      $data = [
       
        "No_Telp" => $this->input->post('No_Telp'),
        "Email" => $this->input->post('Email'),
        "IG" => $this->input->post('IG'),
        "YT" => $this->input->post('YT'),
        "Twitter" => $this->input->post('Twitter'),
  
      ];
      $this->db->insert('kontak', $data);
    }
    public function Tambah_Tentang()
    {
      
      $data = [
        
        "Deskripsi" => $this->input->post('Deskripsi'),
       

      ];
      $this->db->insert('Tentang' , $data);
    }
    public function Tambah_Project()
    {
      $config['upload_path']          = './gambar/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name'] = $_FILES['berkas']['name'];
      // $config['max_size']             = 100;
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('berkas')) {
          $error = array('error' => $this->upload->display_errors());
      } 
      $uploadData = $this->upload->data();
        $filename = $uploadData['file_name'];
      $data = [
        
        "Nama_Project" => $this->input->post('Nama_Project'),
        "Link" => $this->input->post('Link'),
        "Gambar" => $filename

      ];
      $this->db->insert('project' , $data);
    }
    // tambah data ke database

    // delete data
    public function Delete_data1($where, $mbl)
    {
      $this->db->where($where);
      $this->db->delete($mbl);
    }
    public function Delete_kepala($where, $k)
    {
      $this->db->where($where);
      $this->db->delete($k);
    }
    public function Delete_keahlian($where, $a)
    {
      $this->db->where($where);
      $this->db->delete($a);
    }
    public function Delete_kontak($where, $o)
    {
      $this->db->where($where);
      $this->db->delete($o);
    }
    public function Delete_tentang($where, $e)
    {
      $this->db->where($where);
      $this->db->delete($e);
    }
    public function Delete_project($where, $j)
    {
      $this->db->where($where);
      $this->db->delete($j);
    }
    // delete data
  }