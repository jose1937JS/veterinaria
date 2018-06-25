<div class="container" style="margin-top: 100px">
	<div class="card mb-4 ">
		<div class="card-body">
			<div class="row d-flex justify-content-between" >
				<div class="col-md-8">
					<?= form_open('busqueda', 'class="md-form" id="buscarform"') ?>
						<i class="fa fa-search prefix"></i>
						<input type="text" name="search" id="search" class="form-control" data-toggle="tooltip" title="enter para enviar">
						<label for="search">Filtrar por nombre de la mascota, especie, dueño, raza o cédula del dueño</label>
					</form>
				</div>
				<div class="col offset-2">
					<button class="btn btn-primary" data-toggle="modal" data-target="#rangof"><i class="fa fa-file-pdf-o"></i></button>
				</div>
				
				<div class="modal fade" id="rangof">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								adasdasdasd
							</div>
							<div class="modal-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quam repellat fuga atque sequi. Quis, iste sequi provident sapiente omnis facere dignissimos quaerat eligendi. Voluptate odio quia accusamus iusto amet!
								
							</div>
						</div>
					</div>
				</div>	
			
			</div>
		</div>
	</div>
	<div class="card mb-4">
		<div class="card-body">
			<table class="table table-hover">
				<thead class="blue darken-1">
					<tr class="text-white">
						<th>DE ALTA</th>
						<th>NOMBRE</th>
						<th>ESPECIE</th>
						<th>EDAD</th>
						<th>COLOR</th>
						<th>DUEÑO</th>
						<th>TELEFONO</th>
						<th class="text-center">ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($mascotas->result() as $v): ?>
						<tr>
							<td class="text-center"><?php ($v->deAlta == 'true')? print('<i class="fa fa-check green-text fa-2x"></i>'):print('<i class="fa fa-times red-text fa-2x"></i>'); ?></td>
							<td class="font-weight-normal"><?= $v->nombre ?></td>
							<td class="font-weight-normal"><?= $v->tipo ?></td>
							<td class="font-weight-normal"><?= $v->edad ?></td>
							<td class="font-weight-normal"><?= $v->color ?></td>
							<td class="font-weight-normal"><?= $v->duename ?> <?= $v->apellido ?></td>
							<td class="font-weight-normal"><?= $v->telefono ?></td>
							<td class="text-center">
								<?= anchor("informacion/$v->id","<i class='fa fa-info'></i>", 'class="btn btn-info px-3 py-2" data-toggle="tooltip" title="Información"') ?>
								<?= anchor("eliminar/$v->id","<i class='fa fa-trash'></i>", 'class="btn btn-danger px-3 py-2" data-toggle="tooltip" title="Eliminar"') ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
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
	        <?= form_open('registrar', 'id="ingresar"') ?>

				<input type="hidden" value="admin" name="redirect">

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
	            	<h4>Datos del dueño</h4>
	            	<div class="row">
	            		<div class="col">
	            			<div class="md-form">
	            				<i class="fa fa-id-card prefix"></i>
	            				<input type="text" id="cedula" class="form-control validate" name="cedula" pattern="[0-9]{7,9}$" required>
	            				<label for="cedula">Cédula Dueño</label>
	            			</div>
	            		</div>
	            		<div class="col">
	            			<div class="md-form">
	            				<i class="fa fa-male prefix"></i>
	            				<input type="text" id="nombreduño" name="nombre" class="form-control validate" required>
	            				<label for="nombreduño">Nombre Dueño</label>
	            			</div>
	            		</div>
	            		<div class="col">
	            			<div class="md-form">
	            				<i class="fa fa-male prefix"></i>
	            				<input type="text" id="apellidodueño" name="apellido" class="form-control validate" required>
	            				<label for="apellidodueño">Apellido Dueño</label>
	            			</div>
	            		</div>
	            	</div>
	            	<div class="row">
	            		<div class="col-sm-4">
	            			<div class="md-form">
	            				<i class="fa fa-phone prefix"></i>
	            				<input type="text" id="telefono" class="form-control validate" name="telefono">
	            				<label for="telefono">Teléfono Dueño</label>
	            			</div>
	            		</div>
	            		<div class="col">
	            			<div class="md-form">
	            				<i class="fa fa-map prefix"></i>
	            				<input type="text" id="direccion" class="form-control validate" name="direccion">
	            				<label for="direccion">Dirección Dueño</label>
	            			</div>
	            		</div>
	            	</div>
	            </div>
	            <div class="modal-footer d-flex justify-content-end">
	                <button class="btn btn-blue">Registrar Mascota</button>
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