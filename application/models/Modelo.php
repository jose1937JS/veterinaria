<?php

class Modelo extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login($user, $pass)
	{
		return $this->db->get('usuarios');
	}

	public function buscar($param)
	{
		$this->db->where('');
		$this->db->get('')
	}
}