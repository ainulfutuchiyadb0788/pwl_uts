<?php 

class Anggota extends CI_Controller 
{
	
	public function index()
	{
		$data['anggota'] = $this->m_anggota->tampil_data()->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("anggota", $data);
		$this->load->view("template/footer");
	}

	public function tambah(){
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("anggota");
		$this->load->view("template/footer");
	}

	public function tambah_aksi(){
		$id_anggota		=$this->input->post('id_anggota');
		$nama_anggota	=$this->input->post('nama_anggota');
		$alamat			=$this->input->post('alamat');
		$no_telepon		=$this->input->post('no_telepon');
		$prodi			=$this->input->post('prodi');
		$email			=$this->input->post('email');
		
		$data = array(
			'id_anggota'		=>$id_anggota,
			'nama_anggota'		=>$nama_anggota,
			'alamat'			=>$alamat,
			'no_telepon'		=>$no_telepon,
			'prodi'				=>$prodi,
			'email'				=>$email
		);

		$this->m_anggota->input_data($data, 'anggota'); 
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Ditambahkan
			</div>');
		redirect('anggota/index');
	}
	public function hapus($id_anggota)
	{
		$where = array('id_anggota' => $id_anggota);
		$this->m_anggota->hapus_data($where,'anggota'); 
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Dihapus!
			</div>');
		redirect('anggota/index');
	}
	
	public function edit_anggota($id_anggota){
		$where = array('id_anggota' =>$id_anggota);
		$data['anggota'] = $this->m_anggota->edit_data($where,'anggota')->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("edit_anggota", $data);
		$this->load->view("template/footer");

	}
	public function update(){
		$id_anggota		= $this->input->post('id_anggota');
		$nama_anggota	= $this->input->post('nama_anggota');
		$alamat			= $this->input->post('alamat'); 
		$no_telepon		= $this->input->post('no_telepon');
		$prodi			= $this->input->post('prodi'); 
		$email			= $this->input->post('email'); 

		$data = array(
			'id_anggota'			=>$id_anggota,
			'nama_anggota'			=>$nama_anggota,
			'alamat'				=>$alamat,
			'no_telepon'			=>$no_telepon,
			'prodi'					=>$prodi,
			'email'					=>$email
		);
 
		$where = array(
			'id_anggota' => $id_anggota
		);

		$this->m_anggota->update_data($where,$data,'anggota');
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Diupdate! 
			</div>');
		redirect('anggota/index');
	}

	public function detail_anggota($id_anggota){
		$this->load->model('m_anggota');
		$detail_anggota = $this->m_anggota->detail_data($id_anggota);
		$data['detail_anggota'] = $detail_anggota;
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("detail_anggota", $data);
		$this->load->view("template/footer");
	}

	public function print(){
		$data['anggota'] = $this->m_anggota->tampil_data("anggota")->result();
		$this->load->view('print_anggota', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['anggota']=$this->m_anggota->get_keyword($keyword);
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("anggota", $data);
		$this->load->view("template/footer");

	}

}  