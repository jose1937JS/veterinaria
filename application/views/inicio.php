<div class="container">
	<div class="card mb-4">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-4">
					<form class="md-form" id="buscarform">
						<i class="fa fa-search prefix"></i>
						<input type="text" name="" id="search" class="form-control" data-toggle="tooltip" title="enter para enviar">
						<label for="search">Buscar mascota</label>
					</form>
				</div>
				<div class="col offset-sm-6">
					<button class="btn btn-danger mt-4" data-toggle="tooltip" title="Generar reporte PDF">
						<i class="fa fa-file-pdf-o"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<table class="table table-hoverable">
				<thead>
					<th>Mascota</th>
					<th>Dueño</th>
					<th>Enfermedad</th>
					<th>lo q sea</th>
					<th>sdadad</th>
				</thead>
				<tbody>
					<tr>
						<td>asdasd</td>
						<td>asdsd</td>
						<td>sadasdasdas</td>
						<td>asdsadasda</td>
						<td>asdsasdaaaaasds</td>
					</tr>
					<tr>
						<td>asdasd</td>
						<td>asdsd</td>
						<td>sadasdasdas</td>
						<td>asdsadasda</td>
						<td>asdsasdaaaaasds</td>
					</tr>
					<tr>
						<td>asdasd</td>
						<td>asdsd</td>
						<td>sadasdasdas</td>
						<td>asdsadasda</td>
						<td>asdsasdaaaaasds</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Registrar Mascota</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
	        <form id="ingresar">
	            <div class="modal-body mx-3">
	            	<h4>Datos de la mascota</h4>
	            	<div class="row">
	            		<div class="col-sm-4">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="nombremascota" class="form-control">
	            				<label for="nombremascota">Nombre de la mascota</label>
	            			</div>
	            		</div>
	            		<div class="col-sm-4">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="especie" class="form-control">
	            				<label for="especie">Especie de mascota</label>
	            			</div>
	            		</div>
	            		<div class="col-sm-4">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="raza" class="form-control">
	            				<label for="raza">Raza</label>
	            			</div>
	            		</div>
	            	</div>
	            	<div class="row">
	            		<div class="col-sm-4">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="peso" class="form-control">
	            				<label for="peso">Peso</label>
	            			</div>
	            		</div>
	            		<div class="col">
            				<div class="md-form">
            					<i class="fa fa-pencil prefix"></i>
            					<textarea type="text" id="resumen" class="md-textarea form-control" rows="1"></textarea>
            					<label for="resumen">Resumen del animal</label>
            				</div>
            			</div>
	            	</div>
	            	<h4>Datos del dueño</h4>
	            	<div class="row">
	            		<div class="col">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="cedula" class="form-control">
	            				<label for="cedula">Cédula Dueño</label>
	            			</div>
	            		</div>
	            		<div class="col">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="nombreduño" class="form-control">
	            				<label for="nombreduño">Nombre Dueño</label>
	            			</div>
	            		</div>
	            		<div class="col">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="apellidodueño" class="form-control">
	            				<label for="apellidodueño">Apellido Dueño</label>
	            			</div>
	            		</div>
	            	</div>
	            	<div class="row">
	            		<div class="col-sm-4">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="telefono" class="form-control">
	            				<label for="telefono">Teléfono Dueño</label>
	            			</div>
	            		</div>
	            		<div class="col">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="direccion" class="form-control">
	            				<label for="direccion">Dirección Dueño</label>
	            			</div>
	            		</div>
	            	</div>
	            </div>
	            <div class="modal-footer d-flex justify-content-center">
	                <button class="btn btn-deep-orange">Sign up</button>
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