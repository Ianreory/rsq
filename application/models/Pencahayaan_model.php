<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencahayaan_model extends CI_Model{


    public function get_pencahayaan()
    {
        return $this->db->get('tbl_pencahayaan')->result_array();
    }

    public function tambahDatapencahayaan()
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "lokasi" => $this->input->post('lokasi', true),
            "hasil" => $this->input->post('hasil', true),
            "petugas" => $this->input->post('petugas', true)

        ];

        $this->db->insert('tbl_pencahayaan', $data);
    }
    public function hapusDatapencahayaan($id_pencahayaan)
    {
        $this->db->where('id_pencahayaan', $id_pencahayaan);
        $this->db->delete('tbl_pencahayaan');
    }

    public function getPencahayaanById($id_pencahayaan)
    {
        return $this->db->get_where('tbl_pencahayaan', ['id_pencahayaan' => $id_pencahayaan])->row_array();
    }

    public function ubahDataPencahayaan($id_pencahayaan)
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "lokasi" => $this->input->post('lokasi', true),
            "hasil" => $this->input->post('hasil', true),
            "petugas" => $this->input->post('petugas', true)

        ];

        $this->db->where('id_pencahayaan', $id_pencahayaan);
        $this->db->update('tbl_pencahayaan', $data);
    }
}