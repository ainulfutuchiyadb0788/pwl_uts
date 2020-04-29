<?php

/**
 * 
 */
class M_peminjaman extends CI_Model
{
	
	public function tampil_data()
	{
		return $this->db->get('peminjaman');
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

	public function detail_data($kode_transaksi = NULL){
		$query = $this->db->get_where('peminjaman', array('kode_transaksi' => $kode_transaksi))->row();
		return $query;
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from("peminjaman");
		$this->db->like('kode_transaksi', $keyword);
		$this->db->or_like('id_anggota', $keyword);
		$this->db->or_like('id_buku', $keyword);
		$this->db->or_like('tanggal_pinjam', $keyword);
		$this->db->or_like('tanggal_kembali', $keyword);
		$this->db->or_like('denda', $keyword);
		return $this->db->get()->result();
	}
}