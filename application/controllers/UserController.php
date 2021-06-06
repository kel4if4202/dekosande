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
        $content['main_view'] = '';
		$content['title'] = 'User';

		$this->load->view('PageView', $content);
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

    public function getUser()
    {
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // $data['main_view'] = 'LoginView';
        // $data['title'] = 'Login';
        
        if ($this->form_validation->run() == FALSE) {
            redirect('Welcome/login', 'refresh');
        } else {
            $no_hp = $this->input->post('no_hp');
            $password = md5($this->input->post('password'));

            $query = $this->UserModel->getUser($no_hp);

            if ($no_hp == $query->no_hp) {
                if ($password == $query->password) {
                    $data_login = [
                        'NIK' => $query->NIK,
                        'no_hp' => $query->no_hp,
                        'nama' => $query->nama,
                        'jenis_kelamin' => $query->jenis_kelamin,
                        'email' => $query->email,
                        'tlahir' => $query->tlahir,
                        'peran' => $query->peran,
                    ];
                    $this->session->set_userdata('data_login', $data_login);

                    redirect('Welcome');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
                    redirect('Welcome/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nomor HP Invalid</div>');
                redirect('Welcome/login');
            }
        }
    }

    public function updateUser() {
        $this->form_validation->set_rules('NIK', 'NIK', 'required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('tlahir', 'Tlahir', 'required');   

        // foreach ($_POST as $key => $value) {
        //     $data[$key] = $value;
        // }
        
        if ($this->form_validation->run() == FALSE) {
            redirect('Welcome/login', 'refresh');
        } else {
            $NIK = $this->input->post('NIK');
            $data_update = [
                // 'NIK' => $this->input->post('NIK'),
                'no_hp' => $this->input->post('no_hp'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'email' => $this->input->post('email'),
                'tlahir' => $this->input->post('tlahir')
            ];
            $this->UserModel->updateUser($data_update, $NIK);
            $data_update['NIK'] = $NIK;
            $this->session->set_userdata('data_login',$data_update);

            redirect('Welcome/profile');
        }
    }

}

/* End of file Controllername.php */
