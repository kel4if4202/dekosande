<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('BookingModel');
        $this->load->model('KostModel');
        
        
    }

    public function index()
    {
        $data['main_view'] = 'ListBookingView';
        $data['title'] = 'Booking View';
        $this->load->view('PageView', $data);
    }

    public function data_booking()
    {
        $data = $this->BookingModel->GetBooking();

        echo json_encode($data);
    }

    public function input_booking($idKos) 
    {
        // var_dump($this->session->userdata("data_login")["NIK"]);
        $data['user'] = $this->KostModel->getKostbyId($idKos);
        $data['main_view'] = 'KosView';
        
        $data_booking = [
            "status" => "belum Lunas",
            "tanggal" => date('Y-m-d'),
            "biaya" => $data['user']->hargaKos,
            "NIK" => $this->session->userdata("data_login")['NIK'],
            "idKos" =>  $idKos,
        ];

        $this->BookingModel->addBooking($data_booking);
        $this->session->set_flashdata('message_booking', '<div class="alert alert-success"> <strong>Success!</strong> Kost Berhasil dibooking. </div>');
        redirect('KostController/data_kost_id/'.$idKos);
        // $this->load->view('PageView', $data);
    }

    

}