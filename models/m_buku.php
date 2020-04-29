<?php

/**
 * 
 */
class M_buku extends CI_Model
{
	
	public function tampil_data()
	{
		return $this->db->get('buku');
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

	public function detail_data($id_buku = NULL){
		$query = $this->db->get_where('buku', array('id_buku' => $id_buku))->row();
		return $query;
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from("buku");
		$this->db->like('id_buku', $keyword);
		$this->db->or_like('judul_buku', $keyword);
		$this->db->or_like('id_penerbit', $keyword);
		$this->db->or_like('id_pengarang', $keyword);
		$this->db->or_like('tahun_buku', $keyword);
		$this->db->or_like('jumlah_buku', $keyword);
		$this->db->or_like('tanggal_pengadaan', $keyword);
		return $this->db->get()->result();
	}
}