<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_perpus');
	}

	public function index(){
		$this->dashboard();
	}

	public function dashboard(){
		$data['koleksi'] = $this->M_perpus->count_koleksi();
		$data['buku'] = $this->M_perpus->count_buku();
		$data['majalah'] = $this->M_perpus->count_majalah();
		$data['users'] = $this->M_perpus->count_users();
		$this->load->view('template/head.php');
		$this->load->view('template/navbar.php');
		$this->load->view('template/sidebar.php');
		$this->load->view('v_dashboard.php', $data);
		$this->load->view('template/footer.php');
	}

	public function koleksi(){
		// $data['buku'] = $this->M_perpus->get_buku();
		// $data['majalah'] = $this->M_perpus->get_majalah();
		$data['buku'] = $this->M_perpus->get_all_koleksi();
		$this->load->view('template/head.php');
		$this->load->view('template/navbar.php');
		$this->load->view('template/sidebar.php');
		$this->load->view('v_koleksi.php',$data);
		$this->load->view('template/footer.php');
	}
	
	public function add_koleksi(){
		$this->form_validation->set_rules('judul_koleksi','judul_koleksi','required');
		$this->form_validation->set_rules('penulis','penulis','required');
		$this->form_validation->set_rules('penerbit','penerbit','required');
		$this->form_validation->set_rules('pencipta','pencipta','required');
		$this->form_validation->set_rules('jenis_koleksi','jenis_koleksi','required');
		$this->form_validation->set_rules('tahun_terbit','tahun_terbit','required');
		if ($this->form_validation->run()==true)
        {
			$data['judul_koleksi'] = $this->input->post('judul_koleksi');
			$data['penulis'] = $this->input->post('penulis');
			$data['pencipta'] = $this->input->post('pencipta');
			$data['penerbit'] = $this->input->post('penerbit');
			$data['jenis_koleksi'] = $this->input->post('jenis_koleksi');
			$data['tahun_terbit'] = $this->input->post('tahun_terbit');
			$this->M_perpus->add_koleksi($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun sudah terdaftar</div>');
            // $this->index();
			redirect('perpus/koleksi');
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun sudah terdaftar</div>');
			$this->index();
			// echo "gagal";
		}
	}

	public function edit_koleksi(){
		$this->form_validation->set_rules('judul_koleksi','judul_koleksi','required');
		$this->form_validation->set_rules('penulis','penulis','required');
		$this->form_validation->set_rules('penerbit','penerbit','required');
		$this->form_validation->set_rules('pencipta','pencipta','required');
		$this->form_validation->set_rules('jenis_koleksi','jenis_koleksi','required');
		$this->form_validation->set_rules('tahun_terbit','tahun_terbit','required');
		if ($this->form_validation->run()==true)
        {
			$id = $this->input->post('id');
            $data['judul_koleksi'] = $this->input->post('judul_koleksi');
			$data['penulis'] = $this->input->post('penulis');
			$data['pencipta'] = $this->input->post('pencipta');
			$data['penerbit'] = $this->input->post('penerbit');
			$data['jenis_koleksi'] = $this->input->post('jenis_koleksi');
			$data['tahun_terbit'] = $this->input->post('tahun_terbit');
			$data['update_at'] = date('d-M-Y');
            $this->M_perpus->edit_koleksi($data,$id);
			redirect('Perpus/koleksi');
		}
		else
		{
			redirect('perpus/koleksi');
		}
	}

	public function delete_koleksi($id){
		$this->M_perpus->delete_koleksi($id);
		redirect('Perpus/koleksi');
	}

	public function users(){
		$data['data'] = $this->M_perpus->get_users();
		$this->load->view('template/head.php');
		$this->load->view('template/navbar.php');
		$this->load->view('template/sidebar.php');
		$this->load->view('v_users.php',$data);
		$this->load->view('template/footer.php');
	}

	public function about(){
		$this->load->view('template/head.php');
		$this->load->view('template/navbar.php');
		$this->load->view('template/sidebar.php');
		$this->load->view('v_about.php');
		$this->load->view('template/footer.php');
	}
}
