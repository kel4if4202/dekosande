<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class KostController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('KostModel');
        
        
    }

    public function index()
    {
        $data['main_view'] = 'ListKosView';
        $data['title'] = 'Kost View';
        $this->load->view('PageView', $data);
    }
    public function inputKos()
    {
        $nik = $this->session->userdata('data_login');
        $data = [
            "namaKos" => $this->input->post('namaKos', true),
			"jenisKos" => $this->input->POST('jenisKos', true),
			"hargaKos" => $this->input->post('hargaKos', true),
			"alamatKos" => $this->input->post('alamatKos', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "NIK" => $nik['NIK']
		];

		$this->KostModel->tambahKos($data);
		redirect('Welcome','refresh');
    }

    public function data_kost()
    {
        $data = $this->KostModel->getKostbyNIK($this->session->userdata('data_login')['NIK']);

        echo json_encode($data);
    }

    public function data_kost_id($idKos) 
    {
        $data['main_view'] = 'KosView';
        $data['user'] = $this->KostModel->getKostbyId($idKos);
        $this->load->view('PageView', $data);
        
    }

    
    

}

/* End of file Controllername.php */

