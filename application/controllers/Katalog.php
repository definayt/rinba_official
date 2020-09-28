<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Katalog extends CI_Controller {

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
		$this->load->model('M_contact');
		
		$this->load->helper(array('url'));
	}

	public function index()
	{
		// $data['userdata'] = $this->userdata;
		$data['halaman']="Katalog";
		$data['data_produk'] = $this->M_produk->select_all();
		$data['id_kategori'] = "";
		$data['data_kategori'] = $this->M_kategori->select_all();
		$data['whatsapp'] = $this->M_contact->select_whatsapp();

		

		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php', $data);
		$this->load->view('e-commerce/katalog.php', $data);
		$this->load->view('template/footer.php');	
		$this->load->view('template/script.php');
	}

	public function kategori($id_kategori)
	{
		// $data['userdata'] = $this->userdata;
		$data['halaman']="Katalog";
		$data['data_produk'] = $this->M_produk->select_for_id_kategori($id_kategori);
		$data['id_kategori'] = $id_kategori;
		$data['data_kategori'] = $this->M_kategori->select_all();
		$data['whatsapp'] = $this->M_contact->select_whatsapp();

		

		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php', $data);
		$this->load->view('e-commerce/katalog.php', $data);
		$this->load->view('template/footer.php');	
		$this->load->view('template/script.php');
	}

	public function product_detail($id_produk)
	{
		// $data['userdata'] = $this->userdata;
		$data['halaman']="Katalog";
		$data['data_produk'] = $this->M_produk->select_by_id($id_produk);

		$data['data_kategori'] = $this->M_kategori->select_all();
		$data['whatsapp'] = $this->M_contact->select_whatsapp();

		

		$this->load->view('template/header.php');
		$this->load->view('template/navbar.php', $data);
		$this->load->view('e-commerce/product_detail.php', $data);
		$this->load->view('template/footer.php');	
		$this->load->view('template/script.php');
	}

	public function filter()
	{
		$id_kategori = $this->input->post('id_kategori');
		$urutkan = $this->input->post('urutkan');

		if($urutkan == "A-Z"){
			$urutkan = 'ORDER BY nama_produk ASC';
		} else if($urutkan == "Z-A"){
			$urutkan = 'ORDER BY nama_produk DESC';
		} else if($urutkan == "1-10"){
			$urutkan = 'ORDER BY harga ASC';
		} else if($urutkan == "10-1"){
			$urutkan = 'ORDER BY harga DESC';
		}

		
		$data['data_produk'] = $this->M_produk->select_by_id_kategori_filter($id_kategori, $urutkan);

		
		$data['whatsapp'] = $this->M_contact->select_whatsapp();

		

		$this->load->view('template/header.php');
		
		$this->load->view('e-commerce/filter_produk.php', $data);
		$this->load->view('template/script.php');

		
	}


}
