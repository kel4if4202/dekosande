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

    public function getKostbyId($idKos) 
    {
        $query = $this->db->query("SELECT * FROM kos WHERE idKos= '$idKos' ");

        return $query->row();
    }

}

/* End of file ModelName.php */


