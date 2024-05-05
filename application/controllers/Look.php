<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Look extends CI_Controller {
    public function __construct()
	{
		parent ::__construct();
        $this->load->model('Look_model');
        $this->load->library('form_validation');

       if( $this->input->post('submit')){
        $data['keyword']= $this->input->post('keyword');
       } 
	}


public function index()
{
    $data['title'] = 'Data look book';
    $data['tbl_look'] = $this->Look_model->get_data();
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    $data['keyword']= $this->input->post('keyword');
    
    
    $this->load->view('templates/view_header', $data); 
    $this->load->view('templates/view_sidebar', $data);  
    $this->load->view('view_look', $data); 
    $this->load->view('templates/view_footer'); 
}

public function tambah()
{
    $data['title'] = 'form tambah data look';
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();
    
    $this->form_validation->set_rules('tanggal_pengangkutan','Tanggal', 'required');
    $this->form_validation->set_rules('kuantitas','kuantitas', 'required');
    $this->form_validation->set_rules('satuan','satuan', 'required');
    $this->form_validation->set_rules('manifest','manifest', 'required');

    if( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/view_header', $data ); 
        $this->load->view('templates/view_sidebar', $data);  
        $this->load->view('tambah', $data); 
        $this->load->view('templates/view_footer');
    }else {
        $this->Look_model->tambahDatalook();
        $this->session->set_flashdata('flash3', 'Ditambahkan') ;
        redirect('look');
} 
}
public function hapus($id_look)
{
    $this->Look_model->hapusDatalook($id_look);
    $this->session->set_flashdata('flash3', 'Dihapus');
    redirect('look'); 
}

public function ubah($id_look)

{
    $data['title'] = 'form ubah data Look book';
    $data['look']= $this->Look_model->getLookById($id_look);
    $data['user'] = $this->db->get_where('user', ['email' => 
    $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('tanggal_pengangkutan','Tanggal', 'required');
    $this->form_validation->set_rules('kuantitas','kuantitas', 'required');
    $this->form_validation->set_rules('satuan','satuan', 'required');
    $this->form_validation->set_rules('manifest','manifest', 'required');

    if( $this->form_validation->run() == FALSE ){
        $this->load->view('templates/view_header', $data); 
        $this->load->view('templates/view_sidebar', $data);  
        $this->load->view('ubah_look', $data); 
        $this->load->view('templates/view_footer');
    } else {
        $this->Look_model->ubahDataLook($id_look);
        $this->session->set_flashdata('flash3', 'Diubah') ;
        redirect('look');
} 

}

}