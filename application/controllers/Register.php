<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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

	//   public function __constructor()
	//   {
	// 	parent::__constructor();
	// 	$this->load->library(form_validation);
	//   }
	public function index()
	{
		$this->load->view('register');
	}
 
	// fungsi untuk menyimpan akun yang di buat
	public function simpan()
	{  
		$this->form_validation->set_rules('Nama','','required|trim');
        $this->form_validation->set_rules('email','','required|trim|valid_email');
		$this->form_validation->set_rules('Password','','required|trim');
		
		if($this->form_validation->run() == false){
			$this->load->view('Register');
		} else {
			$this->load->model('M_admin');
			$this->M_admin->tambah_user();
			
			redirect('login');
		}
	// fungsi untuk menyimpan akun yang di buat
	}
}
