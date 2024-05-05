<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model{


    public function jml_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->num_rows();
    }
}