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
		
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		
		$userdb = $this->modelo->login($user)->result();

		if ( ($user == $userdb[0]->usuario && $pass == $userdb[0]->clave) ) {
			$this->session->set_userdata('usuario', $user);

			$path = $this->session->userdata('usuario');
			if ($path == 'admin') {
				redirect("admin");
			}
			else {
				redirect("usuario");
			}
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