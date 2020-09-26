<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/AUTH_Controller.php");
class Contact extends AUTH_Controller {

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
		$this->load->model('M_contact');
		
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Contact";
		$data['data_contact'] = $this->M_contact->select_all();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('contact/list_contact.php', $data);
		
		$this->load->view('layout/footer.php');	

	}

	public function insert()
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Contact";
		
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('contact/form_tambah_contact.php', $data);
		
		$this->load->view('layout/footer.php');	

	}


	public function proses_tambah(){
		$this->form_validation->set_rules('jenis_contact', 'Jenic Contact', 'trim|required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required');
		
		$data 	= $this->input->post();
		
		if ($this->form_validation->run() == TRUE) {
			
			$result = $this->M_contact->insert($data);

			if ($result > 0) {
				$this->session->set_flashdata('flash_data', 'Contact Berhasil disimpan');
				redirect('Contact');
			} else {
				$this->session->set_flashdata('flash_data', 'Contact Gagal disimpan');
				redirect('Contact');
			}
			
		} else {
			$this->session->set_flashdata('flash_data', 'Seluruh Form Tambah Contact Harus diisi');
			redirect('Contact/insert');
		}
	}

	public function edit($id_contact)
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Contact";
		$data['data_contact'] = $this->M_contact->select_by_id($id_contact);
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('contact/form_edit_contact.php', $data);
		
		$this->load->view('layout/footer.php');	

	}

	public function proses_edit(){		
		$data 	= $this->input->post();
		
		$result = $this->M_contact->update($data);

		if ($result > 0) {
			$this->session->set_flashdata('flash_data', 'Contact Berhasil disimpan');
			redirect('Contact');
		} else {
			$this->session->set_flashdata('flash_data', 'Contact Gagal disimpan');
			redirect('Contact');
		}
		
	}

	public function delete($id_contact){
		$result = $this->M_contact->delete($id_contact);
		
		if ($result > 0) {
			$this->session->set_flashdata('flash_data', 'Data Contact Berhasil dihapus');
			redirect('Contact');
		} else {
			$this->session->set_flashdata('flash_data', 'Data Contact Gagal dihapus');
			redirect('Contact');
		}
	}
}

