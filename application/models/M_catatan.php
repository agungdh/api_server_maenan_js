<?php
class M_catatan extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function hapus($id) {
		$sql = "DELETE FROM catatan
				WHERE id = ?";
		$this->db->query($sql, array($id));
	}
	
	function tambah($id_user, $catatan) {
		$sql = "INSERT INTO catatan
				SET id_user = ?,
				catatan = ?";
		$this->db->query($sql, array($id_user, $catatan));
	}

	function update($catatan, $id) {
		$sql = "UPDATE catatan
				SET catatan = ?
				WHERE id = ?";
		$this->db->query($sql, array($catatan, $id));
	}

	function read_id($id) {
		$sql = "SELECT *
				FROM catatan
				WHERE id = ?";
		return $this->db->query($sql, array($id))->row();
	}

	function read_id_user($id_user) {
		$sql = "SELECT *
				FROM catatan
				WHERE id_user = ?";
		return $this->db->query($sql, array($id_user))->result();
	}

	function read() {
		$sql = "SELECT *
				FROM catatan";
		return $this->db->query($sql, array())->result();
	}

}
?>