<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM petugas";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id_admin) {
		$sql = "SELECT * FROM petugas WHERE id_petugas='{$id_admin}'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function cek_edit($id_admin, $username)
	{
		$sql = "SELECT id_petugas FROM petugas WHERE username ='".$username."' AND id_petugas !='".$id_admin."'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function cek_username($username)
	{
		$sql = "SELECT id_petugas FROM petugas WHERE username ='".$username."'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function insert($data) {
		$sql = "INSERT INTO petugas VALUES('','" .$data['username'] ."','".$data['nama_admin'] ."','".md5($data['password'])."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {

		$sql = "SELECT * FROM petugas WHERE id_petugas ='".$data['id_admin']."'";
		$cek = $this->db->query($sql)->row();
		if($cek->nama_petugas == $data['nama_admin'] AND $cek->username == $data['username']){
			return 1;
		}

		$sql = "UPDATE petugas SET username='" .$data['username'] ."', nama_petugas='" .$data['nama_admin'] ."' WHERE id_petugas='" .$data['id_admin'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_petugas) {
		$sql = "DELETE FROM petugas WHERE id_petugas='" .$id_petugas ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
		
	}

	public function reset($id_admin) {
		$sql = "SELECT password FROM petugas WHERE id_petugas ='".$id_admin."'";
		$cek = $this->db->query($sql)->row();
		if($cek->password == md5('123456')){
			return 1;
		}
		$sql = "UPDATE petugas SET password='" .md5('123456') ."' WHERE id_petugas='" .$id_admin ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	
}