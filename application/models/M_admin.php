<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	public function update($data, $id) {
		$this->db->where("id", $id);
		$this->db->update("tbl_user", $data);

		return $this->db->affected_rows();
	}

	public function select($id = '') {
		$this->db->select('*');
		$this->db->from('tbl_user');
		
		if ($id != '') {
			$this->db->where('id', $id);
		}

		//$this->db->join('tbl_opd', 'tbl_opd.id_opd = tbl_user.id_opd');
		//$data = $this->db->get('tbl_user');
		$data = $this->db->get();

		return $data->row();
	}
}


/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */