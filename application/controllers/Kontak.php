<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontak extends CI_Controller {

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
		// $this->load->model('M_produk');
		$this->load->model('M_kategori');
		$this->load->model('M_contact');
		
		$this->load->helper(array('url'));
	}

	public function index()
	{
		// $data['userdata'] = $this->userdata;
		$data['halaman']="Kontak";
		// $data['data_produk_new'] = $this->M_produk->select_new();

		// $data['total_produk'] = $this->M_produk->count_all();
		$data['data_kategori'] = $this->M_kategori->select_all();
		$data['data_contact'] = $this->M_contact->select_all();
		// $data['total_produk_kosong'] = $this->M_produk->count_stok_kosong();

		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php', $data);
		$this->load->view('e-commerce/kontak.php', $data);
		$this->load->view('template/footer.php');	
		$this->load->view('template/script.php');
	}
}
