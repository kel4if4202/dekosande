<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			
		}

		public function index()
		{
			session_destroy();
			$data['main_view'] = 'HomeView';
			$data['title'] = 'Home';
			$this->load->view('PageView', $data);
		}

		public function login()
		{
			$data['main_view'] = 'LoginView';
			$data['title'] = 'Login';
			$this->load->view('PageView', $data);
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

	}