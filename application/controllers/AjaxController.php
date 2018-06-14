<?php

class AjaxController extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
		$this->load->model('modelo');
	}

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('inicio');
		$this->load->view('includes/footer');
	}

	public function login()
	{
		$user = $this->input->post('user');
		$user = $this->input->post('pass');

		$data = $this->modelo->login($user, $pass);
	
		$this->load->view('');
	}

	public function insertar()
	{
		$data['mascota'] = array(

		);

		$data['duenio'] = array(

		);
		
		$this->modelo->insertar($data);
	}

	public function buscar($param)
	{
		$result['busqueda'] = $this->modelo->buscar($param);

		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('incio', $result);
		$this->load->view('includes/footer');
	}
}