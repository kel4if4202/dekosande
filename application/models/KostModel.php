<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class KostModel extends CI_Model {

    public function GetKost()
    {
        $query = $this->db->query('SELECT * FROM kos');

        return $query->result();
    }

    public function getAllKost()
    {
        return $this->db->select('*')
                        ->from('kos')
                        ->get()->result_array();
        
    }

}

/* End of file ModelName.php */


