<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori ORDER BY  nama_produk ASC";
		$data = $this->db->query($sql);

		return $data->result();
	}


	public function count_all() {
		$sql = "SELECT id_produk FROM produk";
		$data = $this->db->query($sql);

		return $data->num_rows();
	}

	public function select_stok_kosong() {
		$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori AND stok=0 ORDER BY nama_kategori ASC, nama_produk ASC";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function count_stok_kosong() {
		$sql = "SELECT id_produk FROM produk  WHERE  stok=0 ";
		$data = $this->db->query($sql);

		return $data->num_rows();
	}


	public function select_by_id($id_produk) {
		$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori AND id_produk='{$id_produk}'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_id_kategori($id_kategori) {
		$sql = "SELECT id_produk FROM produk  WHERE id_kategori='{$id_kategori}'";
		$data = $this->db->query($sql);

		return $data->num_rows();
	}

	public function select_for_id_kategori($id_kategori) {
		
		
		$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori AND produk.id_kategori=".$id_kategori." ORDER BY nama_produk ASC";
		
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_kata_kunci($kata_kunci, $id_kategori, $urutkan) {
		if($id_kategori == ""){
			$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori AND nama_produk LIKE '%".$kata_kunci."%' ".$urutkan;
		}else{
			$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori AND nama_produk LIKE '%".$kata_kunci."%' AND produk.id_kategori=".$id_kategori." ".$urutkan;
		}

		
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id_kategori_filter($id_kategori, $urutkan) {
		if($id_kategori == ""){
			$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori ".$urutkan;
		}else{
			$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori AND produk.id_kategori=".$id_kategori." ".$urutkan;
		}
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
		$sql = "INSERT INTO produk VALUES('','" .$data['id_kategori'] ."','" .$data['nama_produk'] ."','" .$data['deskripsi_produk'] ."','" .$data['gambar_produk_1'] ."','" .$data['gambar_produk_2'] ."','" .$data['harga'] ."','" .$data['stok'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE produk SET nama_produk='" .$data['nama_produk'] ."', id_kategori='" .$data['id_kategori'] ."', deskripsi_produk='" .$data['deskripsi_produk'] ."', harga='" .$data['harga'] ."', stok='" .$data['stok'] ."', gambar_produk_1='" .$data['gambar_produk_1'] ."', gambar_produk_2='" .$data['gambar_produk_2'] ."' WHERE id_produk='" .$data['id_produk'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_produk) {
		$sql = "DELETE FROM produk WHERE id_produk='" .$id_produk ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
		
	}

	public function select_new() {
		$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori ORDER BY id_produk DESC LIMIT 6";
		$data = $this->db->query($sql);

		return $data->result();
	}

	
}