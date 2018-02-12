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

	function update($id) {
		$sql = "UPDATE catatan
				SET catatan = ?
				WHERE id = ?";
		return $this->db->query($sql, array($id))->result();
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