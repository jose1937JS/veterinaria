<?php

/* Perfi para el cliente v/
 * Eliminar los mensajes v/
 * Notificacion cunado llega un mensaje v/
 * Que los datos del historial se guarden en la bd v/
 * QUe el cliente puda Aadir una mascota v/
 * Generar reporte pdf genera - Reporte por rango v/
 *
*/

class AjaxController extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->library('session');
		$this->load->model('modelo');
		$this->load->database();
	}

	public function index()
	{
		if( $this->session->userdata('usuario') )
		{
			$data['mascotas'] = $this->modelo->get_all();
			$cant['cant']	  = $this->modelo->get_cant_msg('visto_admin');

			$this->load->view('includes/header');
			$this->load->view('includes/navbar', $cant);
			$this->load->view('inicio', $data);
			$this->load->view('includes/footer');
		}
		else {
			redirect('');
		}
	}

	public function insertar()
	{
		$redirect = $this->input->post('redirect');

		$this->modelo->insertar();
		redirect($redirect);
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

		$this->modelo->actualizar($formdatamascota, $id, 'mascotas');
		redirect("informacion/$id");
	}

	public function editar_mascota_perfil($id)
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

		$this->modelo->actualizar($formdatamascota, $id, 'mascotas');
		redirect("http://127.0.0.1/JFLO/veterinaria/index.php/usuario/perfil/$id_mascota");
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

		$this->modelo->actualizar($formdataduenio, $id, 'duenios');
		redirect("http://127.0.0.1/JFLO/veterinaria/index.php/informacion/$id_mascota");
	}

	public function editar_duenio_perfil($id)
	{
		$formdataduenio = [
			'nombre'    => $this->input->post('nombreduenio'),
			'apellido'  => $this->input->post('apellido'),
			'telefono'  => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion')
		];

		$tabla = $this->input->post('tabla');

		$id_mascota = $this->input->post('id_mascota');

		$this->modelo->actualizar($formdataduenio, $id, $tabla);
		redirect("http://127.0.0.1/JFLO/veterinaria/index.php/usuario/perfil/$id_mascota");
	}

	public function buscar()
	{
		if ($this->session->userdata('usuario'))
		{
			$param = $this->input->post('search');

			$result['mascotas'] = $this->modelo->buscar($param);
			$cant['cant']	    = $this->modelo->get_cant_msg('visto_admin');

			$this->load->view('includes/header');
			$this->load->view('includes/navbar', $cant);
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
			$data['info']  = $this->modelo->perfil($id)->result();
			$data['infor'] = $this->modelo->get_historial($id)->result();
			$cant['cant']  = $this->modelo->get_cant_msg('visto_admin');

			// var_dump($data['info']);exit();

			$this->load->view('includes/header');
			$this->load->view('includes/navbar', $cant);
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

	public function usuario()
	{
		if ($this->session->userdata('usuario'))
		{
			$usuario = $this->session->userdata('usuario');

			$ced = $this->db->select('cedula')
							->get_where('usuarios', ['usuario' => $usuario]);

			$dat['idusu'] = $this->db->select('id')
							->get_where('usuarios', ['cedula' => $ced->result()[0]->cedula]);


			$data['mensajes'] = $this->modelo->get_mensajes_user($dat['idusu']->result()[0]->id);
			$data['idusu'] 	  = $dat['idusu']->result()[0]->id;

			$data['cant']	  = $this->modelo->get_cant_msg('visto_usuario');

			$this->modelo->actualizarmsg('visto_usuario');

			$this->load->view('includes/header');
			$this->load->view('usuario', $data);
			$this->load->view('includes/footer');
		}
		else {
			redirect('');
		}
	}
	public function aniadir_usuario()
	{
		$data = [
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'cedula' => $this->input->post('cedula'),
			'telefono' => $this->input->post('telefono'),
			'direccion' => $this->input->post('direccion'),
			'usuario' => $this->input->post('usuario'),
			'clave' => $this->input->post('clave')
		];

		$this->modelo->aniadir_user($data);
		redirect('');
	}

	public function historial($id_mascota)
	{
		$data = [
			'veterinario'   => $this->input->post('veterinario'),
			'pulso'		    => $this->input->post('pulso'),
			'temperatura'   => $this->input->post('temp'),
			'peso'		    => $this->input->post('peso'),
			'actitud'	    => $this->input->post('act'),
			'cond_corporal' => $this->input->post('condcorp'),
			'hidratacion'   => $this->input->post('edohid'),
			'observacion'	=> $this->input->post('obs')
		];
	
		$this->modelo->historial($data, $id_mascota);

		redirect("informacion/$id_mascota");
	}

	public function pdf($id) // id de la mascota
	{
		$infor['info'] = $this->modelo->get_historial($id)->result();
		
		$this->db->where('id', $id)
				->update('mascotas', ['deAlta' => 'true']);
		
		$this->db->where('id_mascota', $id)
				->update('historial', ['fecha_salida' => date('d/m/o')]);

		$this->load->view('includes/header');
		$this->load->view('pdf', $infor);
		$this->load->view('includes/footer');
	}

	public function pdfgeneral()
	{
		$fechain  	   = $this->input->post('fechain');
		$fechaout 	   = $this->input->post('fechaout');

		$data['rango'] = $this->modelo->rangofechapdf($fechain, $fechaout);

		$this->load->view('pdfgeneral', $data);
	}

	public function mensajes()
	{
		if ($this->session->userdata('usuario') == 'admin')
		{
			$msg['mensajes'] = $this->modelo->get_mensajes_admin();
			$cant['cant']	 = $this->modelo->get_cant_msg('visto_admin');

			$this->modelo->actualizarmsg('visto_admin');

			$this->load->view('includes/header');
			$this->load->view('includes/navbar', $cant);
			$this->load->view('mensajes', $msg);
			$this->load->view('includes/footer');
		}
		else {
			redirect('');
		}
	}

	public function enviarmensaje()
	{
		$mensaje = [
			'mensaje'	 => $this->input->post('msg'),
			'id_usuario' => $this->input->post('idusu')
		];

		$this->db->insert('mensajes', $mensaje);
		redirect('usuario');
	}

	public function respuesta()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$this->db->update('mensajes', ['respuesta' => $this->input->post('respuesta')]);

		redirect('mensajes');
	}

	public function perfil($id)
	{
		$data['info'] = $this->modelo->perfil($id)->result();
		$data['id']   = $id;

		if ( !empty($data['info']) )
		{
			$this->load->view('includes/header');
			$this->load->view('perfilcliente', $data);
			$this->load->view('includes/footer');
		}
		else {

 			$d 	   = $this->modelo->get_users($id)->result();

			$dueid = $this->db->get_where('duenios', ['cedula' => $d[0]->cedula])->result();
 	
 			if (empty($dueid)) {
 				$dueid = $this->db->get_where('usuarios', ['cedula' => $d[0]->cedula])->result();
 			}

 			$data['mascotas'] = $this->modelo->getAllMascotas($dueid[0]->id);

			$data['info'] = [(object)[
				'id' => $d[0]->id,
				'dueid' => $id,
				'duename' => $d[0]->nombre,
				'apellido' => $d[0]->apellido,
				'cedula' => $d[0]->cedula,
				'telefono' => $d[0]->telefono,
				'direccion' => $d[0]->direccion
 			]];


			$this->load->view('includes/header');
			$this->load->view('perfilcliente', $data);
			$this->load->view('includes/footer');
		}
		
	}

	function eliminar_mensajes_user($id)
	{
		$this->modelo->eliminar_mensajes_user($id);
		redirect('usuario');
	}

	function eliminar_mensajes_admin($id)
	{
		$this->modelo->eliminar_mensajes_user($id);
		redirect('mensajes');
	}

}