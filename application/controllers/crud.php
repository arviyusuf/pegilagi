<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_user',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$nama = $this->input->post('username');
		$pwd = $this->input->post('password');
		$pekerjaan = $this->input->post('pekerjaan');
 
		$data = array(
			'username' => $nama,
			'password' => $pwd
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}

	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->m_data->edit_data($where,'user')->result();
	$this->load->view('v_edit',$data);
	}

	function update(){
	$nama = $this->input->post('username');
	$pwd = $this->input->post('password');

	$data = array(
		'username' => $nama,
		'password' => $pwd
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index');
	}

	function tambah_r(){
		$this->load->view('v_inputr');
	}

	function indexr(){
		$data['rute'] = $this->m_data->tampilreserv();
		$this->load->view('v_rute',$data);
	}

	function tambah_aksi_r(){
		$departat = $this->input->post('depart_at');
		$arrivalat = $this->input->post('arrival_at');
		$ruteform = $this->input->post('rute_form');
		$ruteto = $this->input->post('rute_to');
		$transitplace = $this ->input ->post('transit_place');
		$price = $this->input->post('price');
		$transportid = $this->input->post('transportation_id');
 
		$data = array(
			'departat' => $depart_at,
			'arrivalat' => $arrival_at,
			'ruteform' => $rute_form,
			'ruteto' => $rute_to,
			'transitplace' => $transit_place,
			'price' => $price,
			'transportationid' => $transport_id
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/indexr');
	}


}