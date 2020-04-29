<?php 

class Peminjaman extends CI_Controller 
{
	
	public function index()
	{
		$data['peminjaman'] = $this->m_peminjaman->tampil_data()->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("peminjaman", $data);
		$this->load->view("template/footer");
	}

	public function tambah(){
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("peminjaman");
		$this->load->view("template/footer");
	}

	public function tambah_aksi(){
		$kode_transaksi		=$this->input->post('kode_transaksi');
		$id_anggota			=$this->input->post('id_anggota');
		$id_buku			=$this->input->post('id_buku');
		$tanggal_pinjam		=$this->input->post('tanggal_pinjam');
		$tanggal_kembali	=$this->input->post('tanggal_kembali');
		$denda				=$this->input->post('denda');
		
		$data = array(
			'kode_transaksi'		=>$kode_transaksi,
			'id_anggota'			=>$id_anggota,
			'id_buku'				=>$id_buku,
			'tanggal_pinjam'		=>$tanggal_pinjam,
			'tanggal_kembali'		=>$tanggal_kembali,
			'denda'					=>$denda
		);

		$this->m_peminjaman->input_data($data, 'peminjaman'); 
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Ditambahkan
			</div>');
		redirect('peminjaman/index');
	}
	public function hapus($kode_transaksi)
	{
		$where = array('kode_transaksi' => $kode_transaksi);
		$this->m_peminjaman->hapus_data($where,'peminjaman'); 
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Dihapus!
			</div>');
		redirect('peminjaman/index');
	}
	
	public function edit_peminjaman($kode_transaksi){
		$where = array('kode_transaksi' =>$kode_transaksi);
		$data['peminjaman'] = $this->m_peminjaman->edit_data($where,'peminjaman')->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("edit_peminjaman", $data);
		$this->load->view("template/footer");

	}
	public function update(){
		$kode_transaksi				= $this->input->post('kode_transaksi');
		$id_anggota					= $this->input->post('id_anggota');
		$id_buku					= $this->input->post('id_buku'); 
		$tanggal_pinjam				= $this->input->post('tanggal_pinjam');
		$tanggal_kembali			= $this->input->post('tanggal_kembali'); 
		$denda						= $this->input->post('denda'); 

		$data = array(
			'kode_transaksi'		=>$kode_transaksi,
			'id_anggota'			=>$id_anggota,
			'id_buku'				=>$id_buku,
			'tanggal_pinjam'		=>$tanggal_pinjam,
			'tanggal_kembali'		=>$tanggal_kembali,
			'denda'					=>$denda
		);
 
		$where = array(
			'kode_transaksi' => $kode_transaksi
		);

		$this->m_peminjaman->update_data($where,$data,'peminjaman');
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Diupdate! 
			</div>');
		redirect('peminjaman/index');
	}

	public function detail_peminjaman($kode_transaksi){
		$this->load->model('m_peminjaman');
		$detail_peminjaman = $this->m_peminjaman->detail_data($kode_transaksi);
		$data['detail_peminjaman'] = $detail_peminjaman;
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("detail_peminjaman", $data);
		$this->load->view("template/footer");
	}

	public function print(){
		$data['peminjaman'] = $this->m_peminjaman->tampil_data("peminjaman")->result();
		$this->load->view('print_peminjaman', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['peminjaman']=$this->m_anggota->get_keyword($keyword);
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("peminjaman", $data);
		$this->load->view("template/footer");

	}

}  