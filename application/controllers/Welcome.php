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
			$data['main_view'] = 'LoginView';
			$data['title'] = 'Login';
			$this->load->view('PageView', $data);
		}

		public function login()
		{
			$this->form_validation->set_rules('no_hp', 'No_hp', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			$data['main_view'] = 'LoginView';
			$data['title'] = 'Login';

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('PageView', $data);
			} else {
				$no_hp = $this->input->post('no_hp');
				$password = md5($this->input->post('password'));
	
				$query = $this->db->get_where('user', ['no_hp' => $no_hp])->row_array();

				if ($no_hp == $query['no_hp']) {
					if ($password == $query['password']) {
						$data['main_view'] = 'HomeView';
						$data['title'] = 'Home';
						$this->load->view('PageView', $data);
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
						redirect('Welcome/index');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nomor HP Invalid</div>');
					redirect('Welcome/index');
				}
			}
		}

		public function register()
		{
			$data['main_view'] = 'RegisterView';
			$data['title'] = 'Register';
			$this->load->view('PageView', $data);			
		}

	}