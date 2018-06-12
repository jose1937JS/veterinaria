<div class="container">
	<table class="table table-bordered">
		<thead>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			
		</tbody>
	</table>
</div>

<div class="modal fade" id="modal-registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Registrar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
	        <form id="ingresar">
	            <div class="modal-body mx-3">
	            	<div class="row">
	            		<div class="col-sm-4">
	            			<div class="md-form">
	            				<i class="fa fa-envelope prefix"></i>
	            				<input type="text" id="nombremascota" class="form-control">
	            				<label for="nombremascota">Nombre de la mascota</label>
	            			</div>
	            		</div>
	            		<div class="col-sm-4">
	            			<select class="mdb-select colorful-select dropdown-primary">
	            				<option value="Perro">Perro</option>
	            				<option value="Gato">Gato</option>
	            				<option value="Leon">Leó</option>
	            				<option value="Mariposa">Mariposa</option>
	            				<option value="Dinosaurio">Dinosaurio</option>
	            			</select>
	            			<label>Selecciona la especie</label>
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
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modal-registro">Launch Modal Register Form</a>
</div>