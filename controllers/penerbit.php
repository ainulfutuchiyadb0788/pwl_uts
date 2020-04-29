<?php 

class Penerbit extends CI_Controller 
{
	
	public function index()
	{
		$data['penerbit'] = $this->m_penerbit->tampil_data()->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("penerbit", $data);
		$this->load->view("template/footer");
	}

	public function tambah(){
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("penerbit");
		$this->load->view("template/footer");
	}

	public function tambah_aksi(){
		$id_penerbit		=$this->input->post('id_penerbit');
		$nama_penerbit		=$this->input->post('nama_penerbit');
		$alamat				=$this->input->post('alamat');
		$no_telepon			=$this->input->post('no_telepon');
		
		$data = array(
			'id_penerbit'		=>$id_penerbit,
			'nama_penerbit'		=>$nama_penerbit,
			'alamat'			=>$alamat,
			'no_telepon'		=>$no_telepon,
			
		);

		$this->m_penerbit->input_data($data, 'penerbit'); 
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Ditambahkan
			</div>');
		redirect('penerbit/index');
	}
	public function hapus($id_penerbit)
	{
		$where = array('id_penerbit' => $id_penerbit);
		$this->m_penerbit->hapus_data($where,'penerbit'); 
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Dihapus!
			</div>');
		redirect('penerbit/index');
	}
	
	public function edit_penerbit($id_penerbit){
		$where = array('id_penerbit' =>$id_penerbit);
		$data['penerbit'] = $this->m_penerbit->edit_data($where,'penerbit')->result();
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("edit_penerbit", $data);
		$this->load->view("template/footer");

	}
	public function update(){
		$id_penerbit		=$this->input->post('id_penerbit');
		$nama_penerbit		=$this->input->post('nama_penerbit');
		$alamat				= $this->input->post('alamat'); 
		$no_telepon			= $this->input->post('no_telepon');
		
		$data = array(
			'id_penerbit'		=>$id_penerbit,
			'nama_penerbit'		=>$nama_penerbit,
			'alamat'			=>$alamat,
			'no_telepon'		=>$no_telepon,
		
		);
 
		$where = array(
			'id_penerbit' => $id_penerbit
		);

		$this->m_penerbit->update_data($where,$data,'penerbit');
		$this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  Data Berhasil Diupdate! 
			</div>');
		redirect('penerbit/index');
	}

	public function detail_penerbit($id_penerbit){
		$this->load->model('m_penerbit');
		$detail_anggota = $this->m_penerbit->detail_data($id_penerbit);
		$data['detail_penerbit'] = $detail_anggota;
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("detail_penerbit", $data);
		$this->load->view("template/footer");
	}

	public function print(){
		$data['penerbit'] = $this->m_penerbit->tampil_data("penerbit")->result();
		$this->load->view('print_penerbit', $data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['penerbit']=$this->m_penerbit->get_keyword($keyword);
		$this->load->view("template/header");
		$this->load->view("template/sidebar");
		$this->load->view("penerbit", $data);
		$this->load->view("template/footer");

	}

}  