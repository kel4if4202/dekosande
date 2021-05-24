<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class BookingModel extends CI_Model {

    public function GetBooking()
    {
        $query = $this->db->query('SELECT * FROM booking');

        return $query->result();
    }

}

/* End of file ModelName.php */