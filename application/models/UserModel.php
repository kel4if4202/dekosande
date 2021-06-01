<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function tambahUser($data)
    {
        return $this->db->insert('user', $data);
    }

    public function getUser($no_hp)
    {
        $this->db->where('no_hp', $no_hp);
        return $this->db->get('user')->row();   
    }
    
}

/* End of file UserModel.php */
