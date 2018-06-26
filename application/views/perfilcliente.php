<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color px-3 fixed-top">

	<!-- Navbar brand -->
	<a class="navbar-brand" href="#">
		<img src="<?= base_url() ?>/application/assets/images/LogoVeterinaria.png" class="logo">
	</a>

	<!-- Collapse button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<!-- Collapsible content -->
	<div class="collapse navbar-collapse" id="basicExampleNav">

		<!-- Links -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<?= anchor('usuario', '<i class="fa fa-home"></i> Usuario', 'class="nav-link"') ?>
			</li>

			<li class="nav-item">
				<?= anchor("usuario/perfil/$id", '<i class="fa fa-home"></i> Perfil', 'class="nav-link"') ?>
			</li>

			<!-- Dropdown -->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">sesion</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
					<?= anchor('Login/logout', 'Cerrar Sesión', 'class="dropdown-item"') ?>
				</div>
			</li>

		</ul>
		<!-- Links -->

	</div>
	<!-- Collapsible content -->

</nav>
<!--/.Navbar-->

<div class="container">
	<div class="card mb-4 hoverable" style="margin-top: 100px">
		<div class="card-body"> 
			<br>
			<h4>Información de <?= $info[0]->duename ?></h4>
			<br>
			<?php $dueid = $info[0]->dueid ?>
			<?= form_open("actualizar_duenio/$dueid") ?>
	
				<input type="hidden" name="tabla" value="usuarios">
			
				<div class="row">
					<div class="col-sm-2">
						<label for="ced" title="<?= $info[0]->cedula ?>">Cédula:</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-id-card"></i></div>
							</div>
							<input type="text" disabled class="form-control" value="<?= $info[0]->cedula ?>" id="ced">
						</div>
					</div>
					<div class="col">
						<div class="d-flex justify-content-between">
							<label for="nombredenio">Nombre dueño:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="editnombreduenio"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-user"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?= $info[0]->duename ?>" id="nombreduenio" name="nombreduenio">
						</div>
					</div>
					<div class="col">
						<div class="d-flex justify-content-between">
							<label for="apellido">Apellido dueño:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="editapellidoduenio"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-user"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?= $info[0]->apellido ?>" id="apellido" name="apellido">
						</div>
					</div>
					<div class="col">
						<div class="d-flex justify-content-between">
							<label for="tel">Teléfono:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="edittel"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-phone"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?= $info[0]->telefono ?>" id="tel" name="tel">
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col">
						<div class="d-flex justify-content-between">
							<label for="dir">Dirección:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="editdir"></i>
						</div>
						<div class="form-group">
							<textarea id="dir" class="form-control" name="dir" required disabled><?= $info[0]->direccion ?></textarea>
						</div>
					</div>
				</div>
				<br>
				<input type="hidden" value="<?= $info[0]->id ?>" name="id_mascota">
				<button type="submit" class="btn btn-primary float-right">Actualizar</button>
			<!-- ??? -->
			</form>
		</div>
	</div>

	<!-- <div class="card mt-4 mb-4 hoverable">
		<div class="card-body">
			<h4>Información de la Mascota</h4><br>
			<?php $id = $info[0]->id ?>
			<?= form_open("actualizar_mascota/$id") ?>
				<div class="row">
					<div class="col-sm-4">
						<div class="d-flex justify-content-between">
							<label for="nombre">Nombre:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="editnombremascota"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-paw"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?= $info[0]->nombre ?>" id="nombre" name="nombre">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="d-flex justify-content-between">
							<label for="edad">Edad:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="editedad"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-birthday-cake"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?= $info[0]->edad ?>" id="edad" name="edad">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="d-flex justify-content-between">
							<label for="sex">Sexo:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="editsex"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-mars"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?= $info[0]->sexo ?>" id="sex" name="gen">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="d-flex justify-content-between">
							<label for="tipo">Especie:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="edittipo"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-cubes"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?= $info[0]->tipo ?>" id="tipo" name="tipo">
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-3">
						<div class="d-flex justify-content-between">
							<label for="raza">Raza:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="editraza"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-paw"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?= $info[0]->raza ?>" id="raza" name="raza">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="d-flex justify-content-between">
							<label for="color">Color:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="editcolor"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fa fa-paint-brush prefix"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?= $info[0]->color ?>" id="color" name="color">
						</div>
					</div>
					<div class="col">
						<div class="d-flex justify-content-between">
							<label for="vacuna">Vacunas:</label>
							<i class="fa fa-edit" data-toggle="tooltip" title="Editar" id="editvacunas"></i>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="prefix fa fa-medkit"></i></div>
							</div>
							<input type="text" required disabled class="form-control" value="<?php ($info[0]->vacunas === '')? print('No está vacunado') : print($info[0]->vacunas) ?>" id="vacuna" name="vacuna">
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="resumen">Motivo de la consulta:</label>
							<textarea id="resumen" class="form-control" disabled><?= $info[0]->resumen ?></textarea>
						</div>
					</div>
				</div>
				<br>
				<input type="hidden" value="<?= $info[0]->id ?>" name="id_mascota">
				<button type="submit" class="btn btn-primary float-right">Actualizar</button>
			</form>
		</div>
	</div> -->

</div>


<div class="container card mb-4 hoverable">
	<h3 class="my-4 font-weight-normal">Mascotas</h3>
	<!--Accordion wrapper-->
	<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

		<?php foreach ($mascotas->result() as $key => $value): ?>
			<div class="card">
				<div class="card-header" role="tab" id="headingTwo">
					<a class="collapsed" data-toggle="collapse" href="#<?= $key ?>" aria-expanded="false" aria-controls="<?= $key ?>">
						<div class="row">
							<h5 class="d-inline col black-text"><span class="font-weight-normal">Nombre:</span> <?= $value->nombre ?></h5>
							<h5 class="d-inline col black-text"><span class="font-weight-normal">Especie:</span> <?= $value->tipo ?></h5>
							<h5 class="d-inline col black-text"><span class="font-weight-normal">Raza:</span> <?= $value->raza ?> </h5>
							<i class="fa fa-angle-down rotate-icon"></i>
						</div>
					</a>
				</div>

				<div id="<?= $key ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx" >
					<div class="card-body" style="font-size: 15px">
						<div class="row">
							<div class="mb-3 col"><span class="font-weight-normal">Sexo: </span><?= $value->sexo ?></div>
							<div class="mb-3 col"><span class="font-weight-normal">Edad: </span><?= $value->edad ?></div>
							<div class="mb-3 col"><span class="font-weight-normal">Color: </span><?= $value->color ?></div>
						</div>
						<div class="row">
							<div class="mb-3 col-sm-4"><span class="font-weight-normal">Vacunas: </span><?= $value->vacunas ?></div>
							<div class="col"><span class="font-weight-normal">Resumen: </span><?= $value->resumen ?></div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>

	</div>
	<!--/.Accordion wrapper-->
</div>



<div class="modal fade" id="modal-registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h3 class="modal-title w-100">Registrar Mascota</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('registrar', "id='ingresar'") ?>

				<input type="hidden" name="nombre"    value="<?= $info[0]->duename   ?>">
				<input type="hidden" name="apellido"  value="<?= $info[0]->apellido  ?>">
				<input type="hidden" name="cedula"    value="<?= $info[0]->cedula    ?>">
				<input type="hidden" name="telefono"  value="<?= $info[0]->telefono  ?>">
				<input type="hidden" name="direccion" value="<?= $info[0]->direccion ?>">

				<input type="hidden" name="redirect"  value="<?= "usuario/perfil/".$info[0]->id ?>">

				<div class="modal-body mx-3">
					<h4>Datos de la mascota</h4>
					<div class="row">
						<div class="col-sm-4">
							<div class="md-form">
								<i class="fa fa-paw prefix"></i>
								<input type="text" id="nombremascota" class="form-control" name="nombremascota" required>
								<label for="nombremascota">Nombre de la mascota</label>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="md-form">
								<i class="fa fa-cubes prefix"></i>
								<!-- /^([A-Z]{1}[\s]*)+$/ -->
								<input type="text" id="especie" class="form-control validate" name="especie" required>
								<label for="especie">Especie de mascota</label>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="md-form">
								<i class="fa fa-paw prefix"></i>
								<input type="text" id="raza" class="form-control validate" name="raza" required>
								<label for="raza">Raza</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="md-form">
								<i class="fa fa-paint-brush prefix"></i>
								<input type="text" id="color" class="form-control validate" name="color">
								<label for="color">Color</label>
							</div>
						</div>
						<div class="col">
							<div class="md-form">
								<i class="fa fa-birthday-cake prefix"></i>
								<input type="text" id="edad" class="form-control validate" name="edad">
								<label for="edad">Edad</label>
							</div>
						</div>
						<div class="col">
							<div class="md-form">
								<i class="fa fa-mars prefix"></i>
								<input type="text" id="gen" class="form-control validate" name="gen">
								<label for="gen">Género</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="md-form">
								<!-- <i class="fa fa-envelope prefix"></i> -->
								<input type="hidden" name="vacunas" id="vacunas">
								<!-- <label for="vacumas">¿Alguna vacuna?</label> -->
								<div class="chips chips-placeholder"></div>
							</div>
						</div>
						<div class="col">
							<div class="md-form">
								<i class="fa fa-pencil prefix"></i>
								<textarea type="text" id="resumen" class="md-textarea form-control" rows="1" name="resumen" required></textarea>
								<label for="resumen">Motivo de la consulta</label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-end">
					<button class="btn btn-blue">Registrar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="text-center">
	<a href="" class="btn btn-primary btn-floating" data-toggle="modal" data-target="#modal-registro">
		<i class="fa fa-plus"></i>
	</a>
</div>