<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('login');
		$this->load->view('includes/footer');
	}

	public function login()
	{
		$this->load->model('modelo');
		
		$usersdb = $this->modelo->login();
		$result  = $usersdb->result();

		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		if ( ($user == $result[0]->usuario && $pass == $result[0]->clave) ) {
			$this->session->set_userdata('usuario', $user);

			$path = $this->session->userdata('usuario');
			redirect("$path");
		}
		else {
			redirect('');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('usuario');
		redirect('');
	}
}