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

    public function data_kost()
    {
        $data = $this->KostModel->GetKost();

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

