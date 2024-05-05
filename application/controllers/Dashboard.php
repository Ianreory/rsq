<?php

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();

		

		$this->load->view('templates/view_sidebar', $data); 
		$this->load->view('templates/view_header', $data); 
		$this->load->view('dashboard', $data); 
		$this->load->view('templates/view_footer'); 
         
	}
}