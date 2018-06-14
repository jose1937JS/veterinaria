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
		// super consulta para traer todo por inner joins
		return $this->db->get();
	}

	public function insertar($data)
	{
		$this->db->insert('mascotas', $data['mascota']);
		$this->db->insert('duenios', $data['duenio']);
	}

	public function eliminar($id)
	{
		$this->db->delete('mascotas', $id);
	}
}