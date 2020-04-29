<?php 

class Buku extends CI_Controller 
{
	
	public function index()
	{
		$data['buku'] = $this->m_buku->tampil_data()->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("buku", $data);
		$this->load->view("template/footer");
	}

	public function tambah(){
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("buku");
		$this->load->view("template/footer");
	}

	public function tambah_aksi(){
		$id_buku				=$this->input->post('id_buku');
		$judul_buku				=$this->input->post('judul_buku');
		$id_penerbit			=$this->input->post('id_penerbit');
		$id_pengarang			=$this->input->post('id_pengarang');
		$tahun_buku				=$this->input->post('judul_buku');
		$jumlah_buku			=$this->input->post('jumlah_buku');
		$tanggal_pengadaan		=$this->input->post('tanggal_pengadaan');
		
		$data = array(
			'id_buku'					=>$id_buku,
			'judul_buku'				=>$judul_buku,
			'id_penerbit'				=>$id_penerbit,
			'id_pengarang'				=>$id_pengarang,
			'tahun_buku'				=>$tahun_buku,
			'jumlah_buku'				=>$jumlah_buku,
			'tanggal_pengadaan'			=>$tanggal_pengadaan
			
		);

		$this->m_buku->input_data($data, 'buku'); 
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Ditambahkan
			</div>');
		redirect('buku/index');
	}
	public function hapus($id_buku)
	{
		$where = array('id_buku' => $id_buku);
		$this->m_buku->hapus_data($where,'buku'); 
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Dihapus!
			</div>');
		redirect('buku/index');
	}
	
	public function edit_buku($id_buku){
		$where = array('id_buku' =>$id_buku);
		$data['buku'] = $this->m_buku->edit_data($where,'buku')->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("edit_buku", $data);
		$this->load->view("template/footer");

	}
	public function update(){
		$id_buku					= $this->input->post('id_buku');
		$judul_buku					= $this->input->post('judul_buku');
		$id_penerbit				= $this->input->post('id_penerbit'); 
		$id_pengarang				= $this->input->post('id_pengarang');
		$tahun_buku					= $this->input->post('tahun_buku');
		$jumlah_buku				= $this->input->post('jumlah_buku'); 
		$tanggal_pengadaan			= $this->input->post('tanggal_pengadaan'); 

		$data = array(
			'id_buku'					=>$id_buku,
			'judul_buku'				=>$judul_buku,
			'id_penerbit'				=>$id_penerbit,
			'id_pengarang'				=>$id_pengarang,
			'tahun_buku'				=>$tahun_buku,
			'jumlah_buku'				=>$jumlah_buku,
			'tanggal_pengadaan'			=>$tanggal_pengadaan
			
		);
 
		$where = array(
			'id_buku' => $id_buku
		);

		$this->m_buku->update_data($where,$data,'buku');
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Diupdate! 
			</div>');
		redirect('buku/index');
	}

	public function detail_buku($id_buku){
		$this->load->model('m_buku');
		$detail_buku = $this->m_buku->detail_data($id_buku);
		$data['detail_buku'] = $detail_buku;
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("detail_buku", $data);
		$this->load->view("template/footer");
	}

	public function print(){
		$data['buku'] = $this->m_buku->tampil_data("buku")->result();
		$this->load->view('print_buku', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['buku']=$this->m_buku->get_keyword($keyword);
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("buku", $data);
		$this->load->view("template/footer");

	}

}  