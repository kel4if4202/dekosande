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
        $config['upload_path']          = './asset/upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
            redirect('Welcome/inputKos','refresh');
        } else {
            $data_upload = array('upload_data' => $this->upload->data());
            
            $nik = $this->session->userdata('data_login');
            $data = [
                "namaKos" => $this->input->post('namaKos', true),
                "jenisKos" => $this->input->POST('jenisKos', true),
                "hargaKos" => $this->input->post('hargaKos', true),
                "alamatKos" => $this->input->post('alamatKos', true),
                "deskripsi" => $this->input->post('deskripsi', true),
                "nama_file" => $data_upload['upload_data']['file_name'],
                "NIK" => $nik['NIK']
            ];

            $this->KostModel->tambahKos($data);
            redirect('Welcome','refresh');
        }

        
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
        $data['kos'] = $this->KostModel->getAllKost();
        $this->load->view('PageView', $data);
        
    }

    public function getKostbyId($idKos)
    {
        $data['data'] = $this->KostModel->getKostbyId($idKos);
        $data['main_view'] = 'EditKosView';
        $data['title'] = 'Edit Kos';
        $this->load->view('PageView', $data);
    }
    public function editKos($idKos)
    {
        $data = [
            "namaKos" => $this->input->post('namaKos', true),
            "hargaKos" => $this->input->post('hargaKos', true),
            "alamatKos" => $this->input->post('alamatKos', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];
        // $config['upload_path']          = './asset/upload/';
        // $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 10240;
        // $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
            // redirect('Welcome/inputKos','refresh');
        } else {
            $data_upload = array('upload_data' => $this->upload->data());
            
            $nik = $this->session->userdata('data_login');
            $data = [
                "namaKos" => $this->input->post('namaKos', true),
                "jenisKos" => $this->input->POST('jenisKos', true),
                "hargaKos" => $this->input->post('hargaKos', true),
                "alamatKos" => $this->input->post('alamatKos', true),
                "deskripsi" => $this->input->post('deskripsi', true),
                "nama_file" => $data_upload['upload_data']['file_name'],
                "NIK" => $nik['NIK']
            ];

            $this->KostModel->tambahKos($data);
            // redirect('Welcome','refresh');
        }
        $this->KostModel->editKos($data, $idKos);
        // redirect('KostController');
    }
    public function do_upload()
    {
        $config['upload_path']          = './asset/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
                    $this->load->view('upload_form', $error);
            }
        else
            {
                $data = array('upload_data' => $this->upload->data());
                    $this->load->view('upload_success', $data);
            }
    }

    
    

}

/* End of file Controllername.php */

