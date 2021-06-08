<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class BookingModel extends CI_Model {

    public function GetBooking()
    {
        $query = $this->db->query('SELECT * FROM booking');

        return $query->result();
    }

    public function addBooking($data_booking)
    {
        return $this->db->insert('booking', $data_booking);
    }

}

/* End of file ModelName.php */