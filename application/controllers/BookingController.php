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

        if($this->session->userdata('data_login') == False) 
        {
            redirect('Welcome/login');
        } else {
            $this->BookingModel->addBooking($data_booking);
            $this->session->set_flashdata('message_booking', '<div class="alert alert-success"> <strong>Success!</strong> Kost Berhasil dibooking. </div>');
            redirect('KostController/data_kost_id/'.$idKos);
        }

    }

    public function getBookingByNIK()
    {
        $data = $this->BookingModel->getBookingByNIK($this->session->userdata('data_login')['NIK']);

        echo json_encode($data);
    }

    public function list_booking()
    {
        $data = $this->BookingModel->getlistbooking($this->session->userdata('data_login')['NIK']);

        echo json_encode($data);
    }

    public function getBookingById($id)
    {
        $data['data'] = $this->BookingModel->getBookingById($id);

        $data['main_view'] = 'PembayaranView';
        $data['title'] = 'Pembayaran';
        $this->load->view('PageView', $data);
    }

    public function pembayaran($id)
    {
        $data = [
            'status' => 1
        ];

        $this->BookingModel->pembayaran($data, $id);
        redirect('Welcome/historyBooking');
    }

}