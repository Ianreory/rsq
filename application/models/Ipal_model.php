<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ipal_model extends CI_Model{
    public function get_data()
    {
        return $this->db->get('tbl_ipal')->result_array();
    }

    public function tambahDataipal()
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "uv" => $this->input->post('uv', true),
            "water_meter" => $this->input->post('water_meter', true),
            "pompa_air" => $this->input->post('pompa_air', true),
            "aerator" => $this->input->post('aerator', true),
            "aerator_aquarium" => $this->input->post('aerator_aquarium', true),
            "ballast" => $this->input->post('ballast', true),
            "pelampung" => $this->input->post('pelampung', true),
            "pipa" => $this->input->post('pipa', true),
            "biobal" => $this->input->post('biobal', true),
            "tandon_air" => $this->input->post('tandon_air', true),
            "debit_air_m3" => $this->input->post('debit_air_m3', true),
            "selisih_debit_m3" => $this->input->post('selisih_debit_m3', true),
            "petugas_cek" => $this->input->post('petugas_cek', true)
     
        ];

        $this->db->insert('tbl_ipal', $data);
    }

    public function hapusDataipal($id_ipal)
    {
        $this->db->where('id_ipal', $id_ipal);
        $this->db->delete('tbl_ipal');
    }

    public function getIpalById($id_ipal)
    {
        return $this->db->get_where('tbl_ipal', ['id_ipal' => $id_ipal])->row_array();
    }

    public function ubahDataIpal($id_ipal)
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "uv" => $this->input->post('uv', true),
            "water_meter" => $this->input->post('water_meter', true),
            "pompa_air" => $this->input->post('pompa_air', true),
            "aerator" => $this->input->post('aerator', true),
            "aerator_aquarium" => $this->input->post('aerator_aquarium', true),
            "ballast" => $this->input->post('ballast', true),
            "pelampung" => $this->input->post('pelampung', true),
            "pipa" => $this->input->post('pipa', true),
            "biobal" => $this->input->post('biobal', true),
            "tandon_air" => $this->input->post('tandon_air', true),
            "debit_air_m3" => $this->input->post('debit_air_m3', true),
            "selisih_debit_m3" => $this->input->post('selisih_debit_m3', true),
            "petugas_cek" => $this->input->post('petugas_cek', true)
        ];

        $this->db->where('id_ipal', $id_ipal);
        $this->db->update('tbl_ipal', $data);
    }
    public function hitungJumlahAsset()
{   
    $query = $this->db->get('tbl_ipal');
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