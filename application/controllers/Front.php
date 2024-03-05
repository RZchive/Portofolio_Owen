<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

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
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('Data_siswa');
	}
	
    public function Portofolio()
    {
        
       $data['Title'] = 'WEB-SPP';
	   $data['Kepala'] = $this->Data_siswa->Kepala();
	   $data['Keahlian'] = $this->Data_siswa->Keahlian();
	   $data['Tentang'] = $this->Data_siswa->Tentang();
	   $data['Project'] = $this->Data_siswa->Project();
	   $data['Kontak'] = $this->Data_siswa->Kontak();
       $this->load->view('Menu/Header', $data);
       $this->load->view('Front/Portofolio', $data);
       $this->load->view('Menu/Footer');
       
   }
//     public function Listing()
//     {
        
//        $data['Title'] = 'WEB-SPP';
// 	   $data['Mobil'] = $this->Data_siswa->Data_Mobil();
//        $this->load->view('Menu2/Header2', $data);
//        $this->load->view('Front/Listing', $data);
//        $this->load->view('Menu2/Footer2');
       
//    }
//     public function Rent()
//     {
        
//        $data['Title'] = 'WEB-SPP';
// 	   $data['Mobil'] = $this->Data_siswa->Data_Mobil();
//        $this->load->view('Menu2/Header2', $data);
//        $this->load->view('Front/Rent');
//        $this->load->view('Menu2/Footer2');
       
//    }
//     public function Testimonial()
//     {
        
//        $data['Title'] = 'WEB-SPP';
// 	   $data['Mobil'] = $this->Data_siswa->Data_Mobil();
//        $this->load->view('Menu2/Header2', $data);
//        $this->load->view('Front/Testimonial');
//        $this->load->view('Menu2/Footer2');
       
//    }
//     public function Contact()
//     {
        
//        $data['Title'] = 'WEB-SPP';
// 	   $data['Mobil'] = $this->Data_siswa->Data_Mobil();
//        $this->load->view('Menu2/Header2', $data);
//        $this->load->view('Front/Contact');
//        $this->load->view('Menu2/Footer2');
       
//    }
//    public function Tambah_data()
// 		{
// 			 $this->Data_siswa->Tambah_Data();
// 			redirect('Front/Beranda');
// 		}
	
}	