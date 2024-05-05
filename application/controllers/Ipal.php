<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ipal extends CI_Controller {
    public function __construct()
	{
		parent ::__construct();
        $this->load->model('Ipal_model');
        $this->load->library('form_validation');
	}


public function index()
{
    $data['title'] = 'Data Ipal';
    $data['tbl_ipal'] = $this->Ipal_model->get_data();
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();

    $this->load->view('templates/view_header', $data); 
    $this->load->view('templates/view_sidebar', $data);  
    $this->load->view('view_ipal', $data); 
    $this->load->view('templates/view_footer'); 
}

public function tambah()
{
    $data['title'] = 'form tambah data ipal';
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    
    $this->form_validation->set_rules('tanggal','Tanggal', 'required');
    $this->form_validation->set_rules('uv','uv', 'required');
    $this->form_validation->set_rules('water_meter','water_meter', 'required');
    $this->form_validation->set_rules('pompa_air','pompa_air', 'required');
    $this->form_validation->set_rules('aerator','aerator', 'required');
    $this->form_validation->set_rules('aerator_aquarium','aerator_aquarium', 'required');
    $this->form_validation->set_rules('ballast','ballast', 'required');
    $this->form_validation->set_rules('pelampung','pelampung', 'required');
    $this->form_validation->set_rules('pipa','pipa', 'required');
    $this->form_validation->set_rules('biobal','biobal', 'required');
    $this->form_validation->set_rules('tandon_air','tandon_air', 'required');
    $this->form_validation->set_rules('debit_air_m3','debit_air_m3', 'required');
    $this->form_validation->set_rules('selisih_debit_m3','selisih_debit_m3', 'required');
    $this->form_validation->set_rules('petugas_cek','petugas_cek', 'required');

    if( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/view_header', $data ); 
        $this->load->view('templates/view_sidebar', $data);  
        $this->load->view('tambah_ipal', $data); 
        $this->load->view('templates/view_footer');
    }else {
        $this->Ipal_model->tambahDataipal();
        $this->session->set_flashdata('flash4', 'Ditambahkan') ;
        redirect('ipal');
} 
}
public function hapus($id_ipal)
{
    $this->Ipal_model->hapusDataipal($id_ipal);
    $this->session->set_flashdata('flash3', 'Dihapus');
    redirect('ipal'); 
}

public function ubah($id_ipal)

{
    $data['title'] = 'form ubah data ipal book';
    $data['ipal']= $this->Ipal_model->getipalById($id_ipal);
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('tanggal','Tanggal', 'required');
    $this->form_validation->set_rules('uv','uv', 'required');
    $this->form_validation->set_rules('water_meter','water_meter', 'required');
    $this->form_validation->set_rules('pompa_air','pompa_air', 'required');
    $this->form_validation->set_rules('aerator','aerator', 'required');
    $this->form_validation->set_rules('aerator_aquarium','aerator_aquarium', 'required');
    $this->form_validation->set_rules('ballast','ballast', 'required');
    $this->form_validation->set_rules('pelampung','pelampung', 'required');
    $this->form_validation->set_rules('pipa','pipa', 'required');
    $this->form_validation->set_rules('biobal','biobal', 'required');
    $this->form_validation->set_rules('tandon_air','tandon_air', 'required');
    $this->form_validation->set_rules('debit_air_m3','debit_air_m3', 'required');
    $this->form_validation->set_rules('selisih_debit_m3','selisih_debit_m3', 'required');
    $this->form_validation->set_rules('petugas_cek','petugas_cek', 'required');

    if( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/view_header', $data); 
        $this->load->view('templates/view_sidebar', $data);  
        $this->load->view('ubah_ipal', $data); 
        $this->load->view('templates/view_footer');
    } else {
        $this->Ipal_model->ubahDataipal($id_ipal);
        $this->session->set_flashdata('flash4', 'Diubah') ;
        redirect('ipal');
} 

}
}