<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Penyakit_model');
	}

	public function index()
	{
		///$data['penyakit_data'] =  $this-> Penyakit_model->get_penyakit();
		$data['contents'] = 'admin/dashboard';
		$this->load->view('templates/index',$data);
		$data ['penyakit_data'] = $this->Penyakit_model->get_penyakit();
		$this->load->view('penyakit_list', $data);
		
	}

	public function create(){
		if (isset($_POST['submit'])) {
			$this->Penyakit_model->Insert_penyakit();
			redirect('Penyakit/index');
		}
		$this->load->view('penyakit_tambah');
	
	}

	public function edit(){
		if (isset($_POST['submit'])) {
			$this->Penyakit_model->edit_penyakit();
			redirect('Penyakit/index');
		}
		$id = $this->uri->segment(3);
		$data['Penyakit'] = $this->Penyakit_model->getById($id);
		$this->load->view('penyakit_edit', $data);
	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Penyakit_model->hapus_penyakit($id);
		redirect('Penyakit/index');

	}


}

