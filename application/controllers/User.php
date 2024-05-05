<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function index()
    {
        

        $this->load->view('templates/q_header', $data);
        $this->load->view('templates/q_sidebar', $data);
        $this->load->view('templates/q_topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/q_footer');
    }
} 