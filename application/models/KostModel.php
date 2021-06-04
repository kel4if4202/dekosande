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
    public function tambahKos($data)
    {
        return $this->db->insert('kos', $data);
    }

}

/* End of file ModelName.php */


