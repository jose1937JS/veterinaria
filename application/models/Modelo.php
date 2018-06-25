<?php

class Modelo extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login($user)
	{
		return $this->db->get_where('usuarios', ['usuario' => $user]);
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
		return $this->db->select('mascotas.id as mascoid, mascotas.nombre, mascotas.deAlta, mascotas.sexo, mascotas.edad, mascotas.tipo, mascotas.color, mascotas.vacunas, mascotas.raza, mascotas.resumen, mascotas.id_duenio, duenios.id as dueid, duenios.nombre as duename, duenios.apellido, duenios.cedula, duenios.telefono, duenios.direccion, historial.id as histoid, historial.fecha_entrada, historial.fecha_salida, historial.veterinario, historial.pulso, historial.peso, historial.temperatura, historial.actitud, historial.cond_corporal, historial.hidratacion, historial.observacion')
					->from('historial')
						->join('mascotas', 'mascotas.id = historial.id_mascota')
						->join('duenios', 'duenios.id = mascotas.id_duenio')
					->where('historial.id_mascota', $id)
			->get();
	}

	public function get_mensajes_admin()
	{
		return $this->db->select('mensajes.id, mensajes.mensaje, mensajes.respuesta, mensajes.id_usuario, usuarios.nombre, usuarios.apellido')
					->join('usuarios', 'id_usuario = usuarios.id')
					->order_by('id', 'desc')
					->get('mensajes');
	}

	public function get_mensajes_user($id)
	{
		return $this->db->select('mensajes.id, mensajes.mensaje, mensajes.respuesta, mensajes.id_usuario, usuarios.nombre, usuarios.apellido, usuarios.cedula')
					->join('usuarios', 'id_usuario = usuarios.id')
					->order_by('id', 'desc')
					->get_where('mensajes', ['usuarios.id' => $id]);
	}

	public function buscar($param)
	{
		return $this->db->select('mascotas.id, mascotas.deAlta, mascotas.nombre, mascotas.tipo, mascotas.edad, mascotas.raza, mascotas.color, duenios.nombre as duename, duenios.apellido, duenios.cedula, duenios.telefono')
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

		$existDuenio = $this->db->get_where('duenios', ['cedula' => $data['duenio']['cedula']])->result();

		if ( !empty($existDuenio[0]) )
		{
			$data['mascota'] = array(
				'nombre'    => $this->input->post('nombremascota'),
				'edad'		=> $this->input->post('edad'),
				'tipo'      => $this->input->post('especie'),
				'sexo'		=> $this->input->post('gen'),
				'color'     => $this->input->post('color'),
				'raza'      => $this->input->post('raza'),
				'vacunas'   => $this->input->post('vacunas'),
				'resumen'   => $this->input->post('resumen'),
				'id_duenio' => $existDuenio[0]->id
			);

			$this->db->insert('mascotas', $data['mascota']);
			$id_mascota = $this->db->query('select @@identity as id')->result()[0]->id;
		}
		else
		{
			$this->db->insert('duenios', $data['duenio']);
			$id_duenio  = $this->db->query('select @@identity as id')->result()[0]->id;

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

			$this->db->insert('mascotas', $data['mascota']);
			$id_mascota = $this->db->query('select @@identity as id')->result()[0]->id;
			
		}
		
		$this->db->insert('historial', [
			'fecha_entrada' => date('d/m/o'),
			'id_mascota'	=> $id_mascota
		]);
	}

	public function aniadir_user($data)
	{
		$this->db->insert('usuarios', $data);
	}

	public function historial($data)
	{
		$this->db->update('historial', $data);
	}

	public function eliminar($id)
	{
		// $iduenio = $this->db->query("select id_duenio from mascotas where id = $id")->result()[0]->id_duenio

		$this->db->where('id_mascota', $id);
		$this->db->delete('historial');

		$this->db->where('id' , $id);
		$this->db->delete('mascotas');

		redirect('admin');

	}

	public function perfil($id)
	{
		return $this->db->select('mascotas.id, mascotas.nombre, mascotas.sexo, mascotas.edad, mascotas.tipo, mascotas.color, mascotas.raza, mascotas.vacunas, mascotas.resumen, mascotas.id_duenio, duenios.id as dueid, duenios.nombre as duename, duenios.apellido, duenios.cedula, duenios.telefono, duenios.direccion')
					->from('mascotas')
					->join('duenios', 'duenios.id = mascotas.id_duenio')
			->where("mascotas.id", $id)
			->get();
	}

	public function getAllMascotas($idd)
	{
		return $this->db->select('mascotas.id, mascotas.nombre, mascotas.sexo, mascotas.edad, mascotas.tipo, mascotas.color, mascotas.raza, mascotas.vacunas, mascotas.resumen, mascotas.id_duenio, duenios.id as dueid, duenios.nombre as duename, duenios.apellido, duenios.cedula, duenios.telefono, duenios.direccion')
					->from('mascotas')
					->join('duenios', 'duenios.id = mascotas.id_duenio')
			->where("mascotas.id_duenio", $idd)
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
			
		}
	}

	public function eliminar_mensajes_user($id)
	{
		$this->db->delete('mensajes', ['id' => $id]);
	}

	public function get_cant_msg($who)
	{
		$num = $this->db->query("SELECT COUNT(*) as num FROM mensajes WHERE $who = 0");
		return $num->result()[0]->num;
		// return $this->db->where($who, '0')->count_all_results('mensajes');
	}

	public function actualizarmsg($who)
	{
		$this->db->update('mensajes', [$who => 1]);
	}

	public function get_users($id)
	{
		return $this->db->get_where('usuarios', ['id' => $id]);
	}
}