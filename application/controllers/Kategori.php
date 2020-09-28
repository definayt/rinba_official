<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/AUTH_Controller.php");
class Kategori extends AUTH_Controller {

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
		$this->load->model('M_kategori');
		$this->load->model('M_produk');
		
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Kategori";
		$data['data_kategori'] = $this->M_kategori->select_all();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('kategori/list_kategori.php', $data);
		
		$this->load->view('layout/footer.php');	

	}

	public function proses_tambah(){		
		$data 	= $this->input->post();
		
			
		if($this->M_kategori->cek_by_name($data['nama_kategori']) == NULL){
			$result = $this->M_kategori->insert($data);

			if ($result > 0) {
				$this->session->set_flashdata('flash_data', 'Kategori Berhasil disimpan');
				redirect('Kategori');
			} else {
				$this->session->set_flashdata('flash_data', 'Kategori Gagal disimpan');
				redirect('Kategori');
			}
		}else{
			$this->session->set_flashdata('flash_data', 'Kategori '.$data['nama_kategori'].' Sudah Ada');
				redirect('Kategori');
		}
	}

	public function proses_edit(){		
		$data 	= $this->input->post();
		
			
		if($this->M_kategori->cek_by_name_edit($data['nama_kategori'], $data['id_kategori']) == NULL){
			$result = $this->M_kategori->update($data);

			if ($result > 0) {
				$this->session->set_flashdata('flash_data', 'Kategori Berhasil disimpan');
				redirect('Kategori');
			} else {
				$this->session->set_flashdata('flash_data', 'Kategori Gagal disimpan');
				redirect('Kategori');
			}
		}else{
			$this->session->set_flashdata('flash_data', 'Kategori '.$data['nama_kategori'].' Sudah Ada');
				redirect('Kategori');
		}
	}

	public function delete($id_kategori){
		if($this->M_produk->select_by_id_kategori($id_kategori) > 0){
			$this->session->set_flashdata('flash_data', 'Anda Tidak dapat menghapus kategori ini karena kategori ini memiliki produk');
			redirect('Kategori');
		}else{
			$result = $this->M_kategori->delete($id_kategori);
			
			if ($result > 0) {
				$this->session->set_flashdata('flash_data', 'Data Kategori Berhasil dihapus');
				redirect('Kategori');
			} else {
				$this->session->set_flashdata('flash_data', 'Data Kategori Gagal dihapus');
				redirect('Kategori');
			}	
		}
	}
}

