<?php

class AjaxController extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->library('session');
		$this->load->model('modelo');
	}

	public function index()
	{
		if( $this->session->userdata('usuario') )
		{
			$data['mascotas'] = $this->modelo->get_all();
			
			$this->load->view('includes/header');
			$this->load->view('includes/navbar');
			$this->load->view('inicio', $data);
			$this->load->view('includes/footer');
		}
		else {
			redirect('');
		}
	}

	public function insertar()
	{
		$this->modelo->insertar();
		redirect('admin');
	}

	public function editar_mascota($id)
	{
		$formdatamascota = [
			'nombre'  => $this->input->post('nombre'),
			'edad'    => $this->input->post('edad'),
			'tipo'	  => $this->input->post('tipo'),
			'sexo'	  => $this->input->post('gen'),
			'raza'	  => $this->input->post('raza'),
			'color'	  => $this->input->post('color'),
			'vacunas' => $this->input->post('vacuna')
		];

		$id_mascota = $this->input->post('id_mascota');

		$this->modelo->actualizar($formdatamascota, $id, $id_mascota, 'mascotas');
	}

	public function editar_duenio($id)
	{
		$formdataduenio = [
			'nombre'    => $this->input->post('nombreduenio'),
			'apellido'  => $this->input->post('apellido'),
			'telefono'  => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion')
		];

		$id_mascota = $this->input->post('id_mascota');

		$this->modelo->actualizar($formdataduenio, $id, $id_mascota, 'duenios');
	}

	public function buscar()
	{
		if ($this->session->userdata('usuario'))
		{
			$param = $this->input->post('search');

			$result['mascotas'] = $this->modelo->buscar($param);

			// var_dump($result['mascotas']->result());exit();

			$this->load->view('includes/header');
			$this->load->view('includes/navbar');
			$this->load->view('inicio', $result);
			$this->load->view('includes/footer');
		}
		else {
			redirect('');
		}
	}

	public function informacion($id)
	{
		if ($this->session->userdata('usuario'))
		{
			$data['info'] = $this->modelo->perfil($id)->result();

			$this->load->view('includes/header');
			$this->load->view('includes/navbar');
			$this->load->view('perfil', $data);
			$this->load->view('includes/footer');
		}
		else {
			redirect('');
		}
	}

	public function eliminar($id)
	{
		$this->modelo->eliminar($id);
	}

	public function historial($id)
	{
		$data = [
			'fecha_salida'  => date("l d F o H:i:s"), // Sunday 17 June 2018 14:28:20
			'veterinario'   => $this->input->post('veterinario'),
			'pulso'		    => $this->input->post('pulso'),
			'temperatura'   => $this->input->post('temp'),
			'peso'		    => $this->input->post('peso'),
			'actitud'	    => $this->input->post('act'),
			'cond_corporal' => $this->input->post('condcorp'),
			'hidratacion'   => $this->input->post('edohid'),
			'observacion'	=> $this->input->post('obs')
		];
	
		$this->modelo->historial($data);

		$infor['info'] = $this->modelo->get_historial($id)->result();

		$this->load->view('includes/header');
		$this->load->view('pdf', $infor);
		$this->load->view('includes/footer');
	}
}