 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		$this->load->library('form_validation');
	} 

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		 
		if($this->form_validation->run() == false){
		$data['title'] = 'Login page';
		$this->load->view('templates/auth_footer');
		$this->load->view('auth/login');
		$this->load->view('templates/auth_header', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array(); 
		// juka ada user
		if($user) {
			// jika user aktif
			if($user['is_active'] == 1){
				if(password_verify($password,$user['password'])){
					$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id'] == 1){
						redirect('dashboard');
					}else{
					redirect('dashboard');
					}
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong password</div>');
				redirect('auth');
				}
			}else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email has not been activated</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth');
		}

	}


	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim'); 
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			 'is_unique' => 'this email has ready registered!'
		]);  
		$this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password dont match!',
			'min_length' => 'password too short!'
		]); 
		$this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');


		if ( $this->form_validation->run() == false) {
		$data['title'] = 'Auth registration';
		$this->load->view('templates/auth_footer');
		$this->load->view('auth/registration');
		$this->load->view('templates/auth_header', $data);

		} else {
			$data = [
				'name' => htmlspecialchars ($this->input->post('name', true)),
				'email' => htmlspecialchars ($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];
			
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation your account has been created. please login</div>');
			redirect('auth');

		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out</div>');
			redirect('auth');

	}

	public function pasword()
	{
		$data['title'] = 'Auth pasword';
		$this->load->view('templates/auth_header');
		$this->load->view('auth/pasword');
		$this->load->view('templates/auth_header', $data);
	}
}  