<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model {
	public function login($username, $password) {
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));

		$data = $this->db->get();


		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}

	public function updatePassword($data, $id) {
		$sql = "UPDATE petugas SET password='" .$data['password'] ."' WHERE id_petugas='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	
}