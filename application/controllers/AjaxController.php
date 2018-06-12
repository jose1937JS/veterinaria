<?php

class AjaxController extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
		$this->load->model('modelo');
	}

	public function login()
	{
		$user = $this->input->post('user');
		$user = $this->input->post('pass');

		$data = $this->modelo->login($user, $pass);
	
		$this->load->view('');
	}

	public function index()
	{

		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('inicio');
		$this->load->view('includes/footer');
	}


}