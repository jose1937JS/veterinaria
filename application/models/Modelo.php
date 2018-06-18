<?php

class Modelo extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login()
	{
		return $this->db->get('usuarios');
	}

	public function get_all()
	{
		return $this->db->select('mascotas.id, mascotas.deAlta, mascotas.nombre,mascotas.sexo, mascotas.edad, mascotas.tipo, mascotas.color, mascotas.raza, mascotas.resumen, mascotas.id_duenio, duenios.id as dueid, duenios.nombre as duename, duenios.apellido, duenios.cedula, duenios.telefono, duenios.direccion')
					->from('mascotas')
						->join('duenios', 'duenios.id = mascotas.id_duenio')
					->order_by('mascotas.id', 'DESC')
			->get();

	}

	public function get_historial($id)
	{
		$this->db->where('id', $id);
		$this->db->update('mascotas', ['deAlta' => 'true']);

		return $this->db->select('mascotas.id as mascoid, mascotas.nombre, mascotas.sexo, mascotas.edad, mascotas.tipo, mascotas.color, mascotas.vacunas, mascotas.raza, mascotas.resumen, mascotas.id_duenio, duenios.id as dueid, duenios.nombre as duename, duenios.apellido, duenios.cedula, duenios.telefono, duenios.direccion, historial.id as histoid, historial.fecha_entrada, historial.fecha_salida, historial.veterinario, historial.pulso, historial.peso, historial.temperatura, historial.actitud, historial.cond_corporal, historial.hidratacion, historial.observacion')
					->from('historial')
						->join('mascotas', 'mascotas.id = historial.id_mascota')
						->join('duenios', 'duenios.id = mascotas.id_duenio')
					->where('historial.id_mascota', $id)
			->get();
	}

	public function buscar($param)
	{
		return $this->db->select('mascotas.id, mascotas.deALta, mascotas.nombre, mascotas.tipo, mascotas.edad, mascotas.raza, mascotas.color, duenios.nombre as duename, duenios.apellido, duenios.cedula, duenios.telefono')
			->from('mascotas')
				->join('duenios', 'mascotas.id_duenio = duenios.id')
					->like('duenios.cedula', $param)
						->or_like('mascotas.nombre', $param)
						->or_like('mascotas.raza', $param)
						->or_like('mascotas.tipo', $param)
						->or_like('duenios.nombre', $param)
			->get();
	}

	public function insertar()
	{
		$data['duenio'] = array(
			'cedula'    => $this->input->post('cedula'),
			'nombre'    => $this->input->post('nombre'),
			'apellido'  => $this->input->post('apellido'),
			'telefono'  => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion')
		);

		$this->db->insert('duenios', $data['duenio']);

		$id_duenio = $this->db->query('select @@identity as id')->result()[0]->id;

		$data['mascota'] = array(
			'nombre'    => $this->input->post('nombremascota'),
			'edad'		=> $this->input->post('edad'),
			'tipo'      => $this->input->post('especie'),
			'sexo'		=> $this->input->post('gen'),
			'color'     => $this->input->post('color'),
			'raza'      => $this->input->post('raza'),
			'vacunas'   => $this->input->post('vacunas'),
			'resumen'   => $this->input->post('resumen'),
			'id_duenio' => $id_duenio
		);

		$id_mascota = $this->db->query('select @@identity as id')->result()[0]->id;

		$this->db->insert('mascotas', $data['mascota']);
		$this->db->insert('historial', [
			'fecha_entrada' => date("l d F o (H - 1):i:s"), // Sunday 17 June 2018 14:28:20
			'id_mascota'	=> $id_mascota
		]);
	}

	public function historial($data)
	{
		$this->db->update('historial', $data);
	}

	public function eliminar($id)
	{
		$iduenio = $this->db->query("select id_duenio from mascotas where id = $id")->result()[0]->id_duenio;

		$this->db->where('id' , $id);
		$this->db->delete('mascotas');

		$this->db->where('id', $iduenio);
		$this->db->delete('duenios');
	}

	public function perfil($id)
	{
		return $this->db->select('mascotas.id, mascotas.nombre, mascotas.sexo, mascotas.edad, mascotas.tipo, mascotas.color, mascotas.raza, mascotas.vacunas, mascotas.resumen, mascotas.id_duenio, duenios.id as dueid, duenios.nombre as duename, duenios.apellido, duenios.cedula, duenios.telefono, duenios.direccion')
					->from('mascotas')
					->join('duenios', 'duenios.id = mascotas.id_duenio')
			->where("mascotas.id", $id)
			->get();
	}

	public function actualizar($formdata, $id, $id_mascota, $tabla)
	{
		foreach ($formdata as $key => $value)
			if (empty($value)) unset($formdata[$key]);

		$formdata = array_merge($formdata);

		if( !empty($formdata) )
		{
			$this->db->where('id', $id);
			$this->db->update($tabla, $formdata);
			redirect("http://127.0.0.1/JFLO/veterinaria/index.php/informacion/$id_mascota");
		}
		else {
			redirect("http://127.0.0.1/JFLO/veterinaria/index.php/informacion/$id_mascota");
		}
	}
}