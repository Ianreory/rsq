<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Look_model extends CI_Model{
    public function get_data()
    {
        return $this->db->get('tbl_look')->result_array();
    }

    public function tambahDatalook()
    {
        $data = [
            "tanggal_pengangkutan" => $this->input->post('tanggal_pengangkutan', true),
            "kuantitas" => $this->input->post('kuantitas', true),
            "satuan" => $this->input->post('satuan', true),
            "manifest" => $this->input->post('manifest', true)

        ];

        $this->db->insert('tbl_look', $data);
    }

    public function hapusDatalook($id_look)
    {
        $this->db->where('id_look', $id_look);
        $this->db->delete('tbl_look');
    }

    public function getLookById($id_look)
    {
        return $this->db->get_where('tbl_look', ['id_look' => $id_look])->row_array();
    }

    public function ubahDataLook($id_look)
    {
        $data = [
            "tanggal_pengangkutan" => $this->input->post('tanggal_pengangkutan', true),
            "kuantitas" => $this->input->post('kuantitas', true),
            "satuan" => $this->input->post('satuan', true),
            "manifest" => $this->input->post('manifest', true)
        ];

        $this->db->where('id_look', $id_look);
        $this->db->update('tbl_look', $data);
    }


}