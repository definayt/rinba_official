<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/AUTH_Controller.php");
class Dashboard extends AUTH_Controller {

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
		$data['page']="Dashboard";
		$data['data_produk_kosong'] = $this->M_produk->select_stok_kosong();

		$data['total_produk'] = $this->M_produk->count_all();
		$data['total_kategori'] = $this->M_kategori->count_all();
		$data['total_produk_kosong'] = $this->M_produk->count_stok_kosong();

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('layout/footer.php');	


	}
}
