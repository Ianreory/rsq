<?php
class Pencahayaan extends CI_Controller {

public function __construct()
{
    parent ::__construct();
    $this->load->model('Pencahayaan_model');
    $this->load->library('form_validation');
}

public function index()
{
    $data['title'] = 'Data pencahayaan';
    $data['tbl_pencahayaan'] = $this->Pencahayaan_model->get_pencahayaan();
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    
    $this->load->view('templates/view_header', $data); 
    $this->load->view('templates/view_sidebar', $data);  
    $this->load->view('view_pencahayaan', $data); 
    $this->load->view('templates/view_footer'); 
}
public function tambah()
{
    $data['title'] = 'form tambah data pencahayaan';
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('tanggal','Tanggal', 'required');
    $this->form_validation->set_rules('lokasi','Lokasi', 'required');
    $this->form_validation->set_rules('hasil','Hasil', 'required');
    $this->form_validation->set_rules('petugas','Petugas', 'required');

    if( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/view_header', $data); 
        $this->load->view('templates/view_sidebar', $data);  
        $this->load->view('tambah_pencahayaan', $data); 
        $this->load->view('templates/view_footer');
    } else {
        $this->Pencahayaan_model->tambahDatapencahayaan();
        $this->session->set_flashdata('flash2', 'Ditambahkan') ;
        redirect('pencahayaan');
} 
}
public function hapus($id_pencahayaan)
{
    $this->Pencahayaan_model->hapusDatapencahayaan($id_pencahayaan);
    $this->session->set_flashdata('flash2', 'Dihapus');
    redirect('pencahayaan'); 
}

public function ubah($id_pencahayaan)

{
    $data['title'] = 'form ubah data pencahayaan';
    $data['pencahayaan']= $this->Pencahayaan_model->getPencahayaanById($id_pencahayaan);
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('tanggal','Tanggal', 'required');
    $this->form_validation->set_rules('lokasi','Lokasi', 'required');
    $this->form_validation->set_rules('hasil','Hasil', 'required');
    $this->form_validation->set_rules('petugas','Petugas', 'required');

    if( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/view_header', $data); 
        $this->load->view('templates/view_sidebar', $data);  
        $this->load->view('ubah_pencahayaan', $data); 
        $this->load->view('templates/view_footer');
    } else {
        $this->Pencahayaan_model->ubahDataPencahayaan($id_pencahayaan);
        $this->session->set_flashdata('flash2', 'Diubah') ;
        redirect('pencahayaan');
} 

}
}