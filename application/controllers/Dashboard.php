<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Penyakit_model');
		if($this->session->userdata('is_login')==FALSE){redirect('admin');}
	}
	

	public function index()
	{
		$data['contents'] = 'admin/dashboard';
		$this->load->view('templates/index',$data);		
	}


}

