<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('BookingModel');
        
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

}