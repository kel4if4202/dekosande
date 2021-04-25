<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index()
    {
        // $content['main_view'] = '';
		// $content['title'] = 'User';

		// $this->load->view('PageView', $content);
    }

    public function tambahUser()
    {
        $jk = $this->input->post('jeniskelamin', true);
        if ($jk == "Perempuan") {
            $jenis_k = 0;
        } elseif ($jk == "Laki-Laki") {
            $jenis_k = 1;
        }

        $prn = $this->input->post('peran', true);
        if ($prn == "Pencari") {
            $peran = 0;
        } elseif ($prn == "Penjual") {
            $peran = 1;
        }

        $data = [
            "NIK" => $this->input->post('nik', true),
			"no_hp" => $this->input->POST('no_hp', true),
			"password" => md5($this->input->post('password', true)),
			"nama" => $this->input->post('nama', true),
            "jenis_kelamin" => $jenis_k,
			"email" => $this->input->post('email', true),
			"tlahir" => $this->input->post('tgl_lahir', true),
            "peran" => $peran
		];

		$this->UserModel->tambahUser($data);
		redirect('Welcome/login','refresh');
    }

}

/* End of file Controllername.php */
