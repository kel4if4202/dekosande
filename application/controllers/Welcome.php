<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Controllername extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
		}

		public function index()
		{
			session_destroy();
			$content['main_view'] = 'LoginView';
			$content['title'] = 'Login';
			$this->load->view('PageView', $content);
		}

	}