<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/AUTH_Controller.php");
class Admin extends AUTH_Controller {

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
		$this->load->model('M_admin');
		
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Admin";
		$data['data_admin'] = $this->M_admin->select_all();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('admin/list_admin.php', $data);
		
		$this->load->view('layout/footer.php');	

	}

	public function insert()
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Admin";
		
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('admin/form_tambah_admin.php', $data);
		
		$this->load->view('layout/footer.php');	

	}

	public function proses_tambah(){		
		$data 	= $this->input->post();
			
		if($this->M_admin->cek_username($data['username']) == NULL){
			$result = $this->M_admin->insert($data);

			if ($result > 0) {
				$this->session->set_flashdata('flash_data', 'Admin Berhasil disimpan');
				redirect('Admin');
			} else {
				$this->session->set_flashdata('flash_data', 'Admin Gagal disimpan');
				redirect('Admin');
			}
		}else{
			$this->session->set_flashdata('flash_data', 'Username '.$data['username'].' sudah digunakan oleh Admin yang Lain!');
				redirect('Admin/insert');
		}
	}

	public function edit($id_admin)
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Admin";
		$data['data_admin'] = $this->M_admin->select_by_id($id_admin);
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('admin/form_edit_admin.php', $data);
		
		$this->load->view('layout/footer.php');	

	}

	public function proses_edit(){		
		$data 	= $this->input->post();
		
		if($this->M_admin->cek_edit($data['id_admin'], $data['username']) == NULL){
			$result = $this->M_admin->update($data);

			if ($result > 0) {
				$this->session->set_flashdata('flash_data', 'Admin Berhasil disimpan');
				$this->updateProfil();
				redirect('Admin');
			} else {
				$this->session->set_flashdata('flash_data', 'Admin Gagal disimpan');
				redirect('Admin');
			}
		} else{
			$this->session->set_flashdata('flash_data', 'Username '.$data['username'].' sudah digunakan oleh Admin yang Lain!');
			redirect('Admin/edit/'.$data['id_admin']);
		}
		
	}

	public function delete($id_admin){
		if($id_admin !=  $this->userdata->id_petugas){
			$result = $this->M_admin->delete($id_admin);
		
			if ($result > 0) {
				$this->session->set_flashdata('flash_data', 'Data Admin Berhasil dihapus');
				redirect('Admin');
			} else {
				$this->session->set_flashdata('flash_data', 'Data Admin Gagal dihapus');
				redirect('Admin');
			}
		}else{
			$this->session->set_flashdata('flash_data', 'Anda Tidak Dapat Menghapus Akun Anda Sendiri!');
			redirect('Admin');
		}
		
	}

	public function reset($id_admin){
		$result = $this->M_admin->reset($id_admin);
		
		if ($result > 0) {
			$this->session->set_flashdata('flash_data', 'Password Admin Berhasil direset');
			redirect('Admin');
		} else {
			$this->session->set_flashdata('flash_data', 'Password Admin Gagal direset');
			redirect('Admin');
		}
	}
}

