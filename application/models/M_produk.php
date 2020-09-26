<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori ORDER BY nama_kategori ASC, nama_produk ASC";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function count_all() {
		$sql = "SELECT id_produk FROM produk";
		$data = $this->db->query($sql);

		return $data->num_rows();
	}

	public function select_stok_kosong() {
		$sql = "SELECT nama_produk, nama_kategori, gambar_produk_1 FROM produk JOIN kategori WHERE produk.id_kategori=kategori.id_kategori AND stok=0 ORDER BY nama_kategori ASC, nama_produk ASC";
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

	
}