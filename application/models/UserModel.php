<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function tambahUser($data)
    {
        return $this->db->insert('user', $data);
    }
    
}

/* End of file UserModel.php */
