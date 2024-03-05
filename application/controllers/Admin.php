<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	

	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('Data_siswa');
	 }
	 

      //fungsi tampil data
	
	 public function Kepala()
	 {
		 
		$data['Title'] = 'WEB-SPP';
		$data['Kepala'] = $this->Data_siswa->Kepala();
		$this->load->view('Menu2/Header', $data);
		$this->load->view('Admin/Kepala', $data);
		$this->load->view('Menu2/Footer');
        
	}
	 public function Keahlian()
	 {
		 
		$data['Title'] = 'WEB-SPP';
		$data['Keahlian'] = $this->Data_siswa->Keahlian();
		$this->load->view('Menu2/Header', $data);
		$this->load->view('Admin/Keahlian', $data);
		$this->load->view('Menu2/Footer');
        
	}
	 public function Tentang()
	 {
		 
		$data['Title'] = 'WEB-SPP';
		$data['Tentang'] = $this->Data_siswa->Tentang();
		$this->load->view('Menu2/Header', $data);
		$this->load->view('Admin/Tentang', $data);
		$this->load->view('Menu2/Footer');
        
	}
	 public function Project()
	 {
		 
		$data['Title'] = 'WEB-SPP';
		$data['Project'] = $this->Data_siswa->Project();
		$this->load->view('Menu2/Header', $data);
		$this->load->view('Admin/Project', $data);
		$this->load->view('Menu2/Footer');
        
	}
	

	// fungsi tambah data
		public function Tambah_data()
		{
			 $this->Data_siswa->Tambah_Data();
			redirect('Admin/Receipt');
		}
		public function Tambah_Kepala()
		{
			 $this->Data_siswa->Tambah_Kepala();
			redirect('Admin/Kepala');
		}
		public function Tambah_Keahlian()
		{
			 $this->Data_siswa->Tambah_Keahlian();
			redirect('Admin/Keahlian');
		}
		public function Tambah_Tentang()
		{
			 $this->Data_siswa->Tambah_Tentang();
			redirect('Admin/Tentang');
		}
		public function Tambah_Project()
		{
			 $this->Data_siswa->Tambah_Project();
			redirect('Admin/Project');
		}
		public function Tambah_data1()
		{
			 $this->Data_siswa->Tambah_Data1();
			$this->session->set_flashdata('message','<div class="alert
			alert-success" role="alert">Telah Berhasil Ditambahkan!</div>');
			redirect('Admin/Data_Mobil');
		}
	// fungsi tambah data

		//fungsi delete data
		public function delete_siswa($ID_tipe)
	{
		$where = array('ID_tipe' => $ID_tipe);
		$this->Data_siswa->Delete_data1($where, 'mobil');
		redirect('Admin/Data_Mobil');
	}
		public function delete_kepala($ID)
	{
		$where = array('ID' => $ID);
		$this->Data_siswa->Delete_kepala($where, 'kepala');
		redirect('Admin/Kepala');
	}
		public function delete_keahlian($ID)
	{
		$where = array('ID' => $ID);
		$this->Data_siswa->Delete_keahlian($where, 'keahlian');
		redirect('Admin/Keahlian');
	}
		public function delete_project($ID)
	{
		$where = array('ID' => $ID);
		$this->Data_siswa->Delete_project($where, 'project');
		redirect('Admin/Project');
	}
	   //fungsi delete data

	  //fungsi edit data
	public function Edit_data1()
	{
	
			$ID_tipe = $this->input->post('ID_tipe');
			$Tipe_Mobil = $this->input->post('TIpe_Mobil');
			$Harga = $this->input->post('Harga');
			$Deskripsi = $this->input->post('Deskripsi');
			
            $data = array(
				'Tipe_Mobil' => $Tipe_Mobil,
				'Harga' => $Harga,
				'Deskripsi' => $Deskripsi,
			);
			$this->db->where('ID_tipe',$ID_tipe);
			$this->db->Update('mobil', $data);
			redirect('Admin/Data_Mobil');
		
	}
	public function Edit_Kepala()
	{
	
			$ID = $this->input->post('ID');
			$Deskripsi = $this->input->post('Deskripsi');
			
            $data = array(
				
				'Deskripsi' => $Deskripsi,
			);
			$this->db->where('ID',$ID);
			$this->db->Update('kepala', $data);
			redirect('Admin/Kepala');
		
	}
	public function Edit_Keahlian()
	{
	
			$ID = $this->input->post('ID');
			$Keahlian = $this->input->post('Keahlian');
			$Deskripsi = $this->input->post('Deskripsi');
			
            $data = array(
				
				'Deskripsi' => $Deskripsi,
				'Keahlian' => $Keahlian,
			);
			$this->db->where('ID',$ID);
			$this->db->Update('keahlian', $data);
			redirect('Admin/Keahlian');
		
	}
	public function Edit_Project()
	{
	
			$ID = $this->input->post('ID');
			$Nama_Project = $this->input->post('Nama_Project');
			$Link = $this->input->post('Link');
			
            $data = array(
				
				'Nama_Project' => $Nama_Project,
				'Link' => $Link,
			);
			$this->db->where('ID',$ID);
			$this->db->Update('Project', $data);
			redirect('Admin/Project');
		
	}
	public function Kontak()
	{
		
		$data['Title'] = 'WEB-DATA';
	   $data['Kontak'] = $this->Data_siswa->Kontak();
	   $this->load->view('Menu2/Header', $data);
	   $this->load->view('Admin/Kontak', $data);
	   $this->load->view('Menu2/Footer');
	   
   }
	   public function Tambah_Kontak()
	   {
		   $this->Data_siswa->Tambah_Kontak();
		   redirect('Admin/Kontak');
		}
		public function delete_kontak($ID)
		{
	   $where = array('ID' => $ID);
	   $this->Data_siswa->Delete_kontak($where, 'kontak');
	   redirect('Admin/Kontak');
	}
	   public function Edit_Kontak()
	   {
		   
		   $ID = $this->input->post('ID');
		   
		   $No_Telp = $this->input->post('No_Telp');
		   $Email = $this->input->post('Email');
		   $IG = $this->input->post('IG');
		   $YT = $this->input->post('YT');
		   $Twitter = $this->input->post('Twitter');
		   $data = array(
			   
			   'No_Telp' => $No_Telp,	
			   'Email' => $Email,		
			   'IG' => $IG,	
			   'YT' => $YT,	
			   'Twitter' => $Twitter,	

			);
		   $this->db->where('ID',$ID);
		   $this->db->Update('kontak', $data);
		   redirect('Admin/Kontak');
	   
		}
		public function Edit_Tentang()
		{
		
				$ID = $this->input->post('ID');
				$Deskripsi = $this->input->post('Deskripsi');
				
				$data = array(
					
					'Deskripsi' => $Deskripsi,
					
				);
				$this->db->where('ID',$ID);
				$this->db->Update('tentang', $data);
				redirect('Admin/Tentang');
			
		}
		public function delete_tentang($ID)
		{
	   $where = array('ID' => $ID);
	   $this->Data_siswa->Delete_tentang($where, 'tentang');
	   redirect('Admin/Tentang');
	}
      //fungsi edit data
	}

	
