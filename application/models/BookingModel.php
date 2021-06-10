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

    public function getBookingByNIK($nik)
    {
        return $this->db->query('SELECT `booking`.`tanggal` as `tanggal`, `kos`.`namaKos`, `booking`.`status` FROM `booking` LEFT JOIN `kos` ON `kos`.`idKos` = `booking`.`idKos` WHERE `booking`.`NIK` = '.$nik.';')->result_array();
    }

    public function getlistbooking($nik){
        return $this->db->query('SELECT `booking`.`tanggal` as `tanggal`, `kos`.`namaKos`, `booking`.`status` FROM `booking` LEFT JOIN `kos` ON `kos`.`idKos` = `booking`.`idKos` WHERE `kos`.`NIK` = '.$nik.';')->result_array();
    }

}

/* End of file ModelName.php */