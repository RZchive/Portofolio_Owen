<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	 //tampil
	public function index()
	{
		$this->load->view('login');
	}
	// fungsi mengecek akun
	
	public function cek()
	{  
		$this->form_validation->set_rules('email','','required|trim|valid_email');
		$this->form_validation->set_rules('Password','','required|trim');
		
		if($this->form_validation->run() == false){
			$this->load->view('Login');
		} else  { 
			$this->_login();
		}
		
	}	
	// fungsi mengecek akun

    //  fungsi login
	private function _login()
	{
		$email = $this->input->post('email');
		$Password = $this->input->post('Password');
		
		$DU = $this->db->get_where('user',['Email' => $email])->row();
		
		if ($DU) {

			if (password_verify($Password, $DU->Password)) {
				
				$data1 =[
					'Nama' => $DU->Nama,
					'Email'=> $DU->Email,
					'Image'=> $DU->Image,
					'ID'=> $DU->ID,
					'Role_ID'=> $DU->Role_ID
				];
				
				$this->session->set_userdata($data1);
				redirect('Front/Beranda');
			} else {
				$this->session->set_flashdata('message','<div class="alert
				alert-danger" role="alert">Password Salah!</div>');
				redirect('login');
			}
		}else {
			$this->session->set_flashdata('message','<div class="alert
			alert-danger" role="alert">Maaf Email ini belum terdaftar!</div>');
			redirect('login');
		}
	}
	//  fungsi login
	
			//fungsi logout
			public function Logout()
			{
				$this->session->unset_userdata('Nama');
				$this->session->unset_userdata('Email');
				$this->session->unset_userdata('Image');
				$this->session->unset_userdata('ID');
				$this->session->unset_userdata('Role_ID');
				$this->session->set_flashdata('message','<div class="alert
				alert-success" role="alert">Telah Berhasil Keluar!</div>');
				redirect('login');
			}
			//fungsi logout
}

