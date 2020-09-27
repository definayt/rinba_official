<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM contact ORDER BY jenis_contact";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id_contact) {
		$sql = "SELECT * FROM contact WHERE id_contact='{$id_contact}'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function insert($data) {
		$sql = "INSERT INTO contact VALUES('','" .$data['jenis_contact'] ."','".$data['contact'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "SELECT * FROM contact WHERE id_contact ='".$data['id_contact']."'";
		$cek = $this->db->query($sql)->row();
		if($cek->jenis_contact == $data['jenis_contact'] AND $cek->contact == $data['contact']){
			return 1;
		}
		$sql = "UPDATE contact SET jenis_contact='" .$data['jenis_contact'] ."', contact='" .$data['contact'] ."' WHERE id_contact='" .$data['id_contact'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id_contact) {
		$sql = "DELETE FROM contact WHERE id_contact='" .$id_contact ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
		
	}

	public function select_whatsapp() {
		$sql = "SELECT * FROM contact WHERE  LOWER(jenis_contact)='whatsapp'";
		$data = $this->db->query($sql);

		return $data->row();
	}

	
}