<?php

class Petugas extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Petugas';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

		$this->load->view('templates/view_sidebar', $data); 
		$this->load->view('templates/view_header', $data); 
		$this->load->view('petugas', $data); 
		$this->load->view('templates/view_footer'); 
         
	}
}