<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_data');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

	}

	function index(){
		$this->load->view('v_admin');
	}
	function rute(){
		$data['rute'] = $this->m_data->tampilreserv();
		$this->load->view('v_rute',$data);
	}
}
?>