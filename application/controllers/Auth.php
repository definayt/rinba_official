<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('M_petugas');
		
		$this->load->helper(array('url'));
	}

	public function index()
	{
		if ($this->session->userdata('status') == '') {
			$this->load->view('login');
		}else{
			redirect('Dashboard');	
		}


	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE){
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->M_petugas->login($username, $password);

			if ($data == false) {
				$this->session->set_flashdata('flash_data', 'Username / Password Anda Salah.');
				redirect('Auth');
			} else {
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				$this->session->set_userdata($session);
				redirect('Dashboard');

			}
		} else {
			$this->session->set_flashdata('flash_data', 'Username dan Password harus diisi!');
			redirect('Auth');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Auth');
	}
}
