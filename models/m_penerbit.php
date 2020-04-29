<?php

/**
 * 
 */
class M_penerbit extends CI_Model
{
	
	public function tampil_data()
	{
		return $this->db->get('penerbit');
	}

	public function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function detail_data($id_penerbit = NULL){
		$query = $this->db->get_where('penerbit', array('id_penerbit' => $id_penerbit))->row();
		return $query;
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from("penerbit");
		$this->db->like('id_penerbit', $keyword);
		$this->db->or_like('nama_penerbit', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('no_telepon', $keyword);
		return $this->db->get()->result();
	}
}