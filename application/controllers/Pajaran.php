<?php
class Pajaran extends CI_Controller {

public function __construct()
{
    parent ::__construct();
    $this->load->model('Pajaran_model');
    $this->load->library('form_validation');
}

public function index()
{
    $data['title'] = 'Data pajaran';
    $data['tbl_pajaran'] = $this->Pajaran_model->get_pajaran();
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();

    $this->load->view('templates/view_header', $data); 
    $this->load->view('templates/view_sidebar', $data);  
    $this->load->view('view_pajaran', $data); 
    $this->load->view('templates/view_footer'); 
}

public function tambah()

{
    $data['title'] = 'form tambah data pajaran';
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('tanggal_kejadian','Tanggal', 'required');
    $this->form_validation->set_rules('tanggal_terima','Tanggal terima laporan', 'required');
    $this->form_validation->set_rules('kejadian','Kejadian', 'required');
    $this->form_validation->set_rules('tindak','Tindak lanjut', 'required');
    $this->form_validation->set_rules('kondisi','Kondisi pasca terpapar', 'required');

    if( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/view_header', $data); 
        $this->load->view('templates/view_sidebar', $data);  
        $this->load->view('tambah_pajaran', $data); 
        $this->load->view('templates/view_footer');
    } else {
        $this->Pajaran_model->tambahDatapajaran();
        $this->session->set_flashdata('flash1', 'Ditambahkan') ;
        redirect('pajaran');
} 

}
public function hapus($id_pajaran)
{
    $this->Pajaran_model->hapusDatapajaran($id_pajaran);
    $this->session->set_flashdata('flash1', 'Dihapus');
    redirect('pajaran'); 
}

public function ubah($id_pajaran)

{
    $data['title'] = 'form ubah data pajaran';
    $data['pajaran']= $this->Pajaran_model->getPajaranById($id_pajaran);
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('tanggal_kejadian','Tanggal', 'required');
    $this->form_validation->set_rules('tanggal_terima','Tanggal terima laporan', 'required');
    $this->form_validation->set_rules('kejadian','Kejadian', 'required');
    $this->form_validation->set_rules('tindak','Tindak lanjut', 'required');
    $this->form_validation->set_rules('kondisi','Kondisi pasca terpapar', 'required');

    if( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/view_header', $data); 
        $this->load->view('templates/view_sidebar', $data);  
        $this->load->view('ubah_pajaran', $data); 
        $this->load->view('templates/view_footer');
    } else {
        $this->Pajaran_model->ubahDataPajaran($id_pajaran);
        $this->session->set_flashdata('flash1', 'Diubah') ;
        redirect('pajaran');
} 

}
}