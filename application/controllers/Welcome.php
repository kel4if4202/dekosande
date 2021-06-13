<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('KostModel');
			
		}

		public function index()
		{
			$data['main_view'] = 'HomeView';
			$data['title'] = 'Home';
			$data['kos'] = $this->KostModel->getAllKost();
			$this->load->view('PageView', $data);
		}

		public function login()
		{
			$data['main_view'] = 'LoginView';
			$data['title'] = 'Login';
			$this->load->view('PageView', $data);
		}

		public function logout()
		{
			session_destroy();
			redirect('Welcome');
		}

		public function register()
		{
			$data['main_view'] = 'RegisterView';
			$data['title'] = 'Register';
			$this->load->view('PageView', $data);			
		}

		public function profile()
		{
			$data['main_view'] = 'ProfileView';
			$data['title'] = 'Profile';
			$this->load->view('PageView', $data);			
		}

		public function viewKos()
		{
			$data['main_view'] = 'KosView';
			$data['title'] = 'Kos';
			$this->load->view('PageView', $data);	
		}
		public function inputKos()
		{
			$data['main_view'] = 'inputKosView';
			$data['title'] = 'Input Kos';
			$this->load->view('PageView', $data);
		}

		public function historyBooking()
		{
			$data['main_view'] = 'HistoryBookingView';
			$data['title'] = 'History Booking';
			$this->load->view('PageView', $data);
		}

		public function pembayaran()
		{
			$data['main_view'] = 'PembayaranView';
			$data['title'] = 'Pembayaran';
			$this->load->view('PageView', $data);
		}

		public function edit_kost()
		{
			$data['main_view'] = 'EditKosView';
			$data['title'] = 'Edit Kost';
			$this->load->view('PageView', $data);
		}

		public function list_booking()
		{
			$data['main_view'] = 'ListBookingView';
			$data['title'] = 'List Booking';
			$this->load->view('PageView', $data);
		}

		public function list_kost()
		{
			$data['main_view'] = 'ListKosView';
			$data['title'] = 'List Kost';
			$this->load->view('PageView', $data);
		}
	}