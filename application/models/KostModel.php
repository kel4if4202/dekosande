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

    public function getKostbyId($idKos) 
    {
        $query = $this->db->query("SELECT * FROM kos WHERE idKos= '$idKos' ");

        return $query->row();
    }

    public function getKostbyNIK($NIK) 
    {
        $query = $this->db->query("SELECT * FROM kos WHERE NIK = '$NIK' ");

        return $query->result_array();
    }
    public function editKos($data, $id)
    {
        $this->db->where('idKos', $id);
        return $this->db->update('kos', $data);
    }
    
    public function deleteKos($idKos)
    {
        $this->db->where('idKos', $idKos);
        $this->db->delete('kos');
    }
}

/* End of file ModelName.php */


