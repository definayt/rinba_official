<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/AUTH_Controller.php");
class Produk extends AUTH_Controller {

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
		$this->load->model('M_produk');
		$this->load->model('M_kategori');
		
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Produk";
		$data['data_produk'] = $this->M_produk->select_all();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('produk/list_produk.php', $data);
		
		$this->load->view('layout/footer.php');	

	}

	public function insert()
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Produk";
		
		$data['data_kategori'] = $this->M_kategori->select_all();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('produk/form_tambah_produk.php', $data);
		
		$this->load->view('layout/footer.php');	

	}

	public function proses_tambah(){		
		$data 	= $this->input->post();

		$data['gambar_produk_1'] = 'no_image.jpg';
		$data['gambar_produk_2'] = 'no_image.jpg';
		
		$config['upload_path'] = './assets/dist/img/';
		$config['allowed_types'] = 'jpg|png';
		$config['overwrite'] = false;
			
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('uploadgambar1')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data_foto = $this->upload->data();
			$data['gambar_produk_1'] = $data_foto['file_name'];
		}

		if (!$this->upload->do_upload('uploadgambar2')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data_foto = $this->upload->data();
			$data['gambar_produk_2'] = $data_foto['file_name'];
		}

		$result = $this->M_produk->insert($data);

		if ($result > 0) {
			$this->session->set_flashdata('flash_data', 'Produk Berhasil disimpan');
			redirect('Produk');
		} else {
			$this->session->set_flashdata('flash_data', 'Produk Gagal disimpan');
			redirect('Produk');
		}
		
	}

	public function edit($id_produk)
	{
		$data['userdata'] = $this->userdata;
		$data['page']="Produk";
		$data['data_produk'] = $this->M_produk->select_by_id($id_produk);
		$data['data_kategori'] = $this->M_kategori->select_all();
		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('produk/form_edit_produk.php', $data);
		
		$this->load->view('layout/footer.php');	

	}

	public function proses_edit(){		
		$data 	= $this->input->post();

		$data['gambar_produk_1'] = $data['foto_lama_1'];
		$data['gambar_produk_2'] = $data['foto_lama_2'];

		$config['upload_path'] = './assets/dist/img/';
		$config['allowed_types'] = 'jpg|png';
		$config['overwrite'] = false;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('uploadgambar1')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data_foto = $this->upload->data();
			$data['gambar_produk_1'] = $data_foto['file_name'];
		}

		if (!$this->upload->do_upload('uploadgambar2')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data_foto = $this->upload->data();
			$data['gambar_produk_2'] = $data_foto['file_name'];
		}
		
		$result = $this->M_produk->update($data);

		if ($result > 0) {
			$this->session->set_flashdata('flash_data', 'Produk Berhasil disimpan');
			redirect('Produk');
		} else {
			$this->session->set_flashdata('flash_data', 'Produk Gagal disimpan');
			redirect('Produk');
		}
		
	}

	public function delete($id_produk){
		$result = $this->M_produk->delete($id_produk);
		
		if ($result > 0) {
			$this->session->set_flashdata('flash_data', 'Data Produk Berhasil dihapus');
			redirect('Produk');
		} else {
			$this->session->set_flashdata('flash_data', 'Data Produk Gagal dihapus');
			redirect('Produk');
		}
	}
}

