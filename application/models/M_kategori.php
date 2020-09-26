<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM kategori ORDER BY nama_kategori";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function count_all() {
		$sql = "SELECT id_kategori FROM kategori";
		$data = $this->db->query($sql);

		return $data->num_rows();
	}

	public function cek_by_name($nama_kategori) {
		$sql = "SELECT id_kategori FROM kategori WHERE nama_kategori = '{$nama_kategori}'";
		$data = $this->db->query($sql);

		return $data->row();
	}
	
	public function cek_by_name_edit($nama_kategori, $id_kategori) {
		$sql = "SELECT nama_kategori FROM kategori WHERE nama_kategori = '{$nama_kategori}' AND id_kategori != '{$id_kategori}'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function insert($data) {
		$sql = "INSERT INTO kategori VALUES('','" .$data['nama_kategori'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "SELECT nama_kategori FROM kategori WHERE id_kategori ='".$data['id_kategori']."'";
		$cek = $this->db->query($sql)->row();
		if($cek->nama_kategori == $data['nama_kategori']){
			return 1;
		}
		$sql = "UPDATE kategori SET nama_kategori='" .$data['nama_kategori'] ."' WHERE id_kategori='" .$data['id_kategori'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_kategori) {
		$sql = "DELETE FROM kategori WHERE id_kategori='" .$id_kategori ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
		
	}

	
}