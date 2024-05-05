<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pajaran_model extends CI_Model{
    public function get_pajaran()
    {
        return $this->db->get('tbl_pajaran')->result_array();
    }

    public function tambahDatapajaran()
    {
        $data = [
            "tanggal_kejadian" => $this->input->post('tanggal_kejadian', true),
            "tanggal_terima" => $this->input->post('tanggal_terima', true),
            "kejadian" => $this->input->post('kejadian', true),
            "tindak" => $this->input->post('tindak', true),
            "kondisi" => $this->input->post('kondisi', true)

        ];

        $this->db->insert('tbl_pajaran', $data);
    }
    public function hapusDatapajaran($id_pajaran)
    {
        $this->db->where('id_pajaran', $id_pajaran);
        $this->db->delete('tbl_pajaran');
    }

    public function getPajaranById($id_pajaran)
    {
        return $this->db->get_where('tbl_pajaran', ['id_pajaran' => $id_pajaran])->row_array();
    }

    public function ubahDataPajaran($id_pajaran)
    {
        $data = [
            "tanggal_kejadian" => $this->input->post('tanggal_kejadian', true),
            "tanggal_terima" => $this->input->post('tanggal_terima', true),
            "kejadian" => $this->input->post('kejadian', true),
            "tindak" => $this->input->post('tindak', true),
            "kondisi" => $this->input->post('kondisi', true)

        ];

        $this->db->where('id_pajaran', $id_pajaran);
        $this->db->update('tbl_pajaran', $data);
    }
    public function hitungJumlahAsset()
{   
    $query = $this->db->get('tbl_pajaran');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

}