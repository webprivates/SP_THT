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
} 

