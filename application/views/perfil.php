<div class="container" style="margin-top: 100px">
	<div class="card hoverable">
		<div class="card-body">
			<div class="d-flex justify-content-between">
				<h3>Información de la mascota</h3>
				<button type="button" id="historialpdf" class="btn blue-gradient btn-rounded" data-toggle="modal" data-target="#exampleModal">
					historial
				</button>
			</div>
			<br>
			<?php $id = $info[0]->id ?>
			<?= form_open("actualizar-mascota/$id") ?>
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
							<label for="color" title="<?= $info[0]->color ?>">Color:</label>
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
							<label for="vacuna" title="<?php ($info[0]->vacunas === '')? print('No está vacunado') : print($info[0]->vacunas) ?>">Vacunas:</label>
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
				<div class="ro">
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
	</div>

	<div class="card mt-4 px-3 hoverable">
		<div class="card-body">
			<div class="d-flex justify-content-between">
				<h3>Información del Examen</h3>
				<?= anchor("pdf/$id", '<i class="fa fa-file-pdf-o mr-2"></i> PDF' , 'class="btn blue-gradient btn-rounded"') ?>
			</div>
			<br>
			<div class="row">
				<div class="col grey lighten-5 p-2 border">
					CONSTANTES FISIOLOGICAS
				</div>
			</div>
			<div class="row">
				<div class="col p-2 border border-top-0">
					<span class="font-weight-bold">PULSO: </span>
					<?= $infor[0]->pulso ?> pulsaciones/min
				</div>
				<div class="col p-2 border border-top-0 border-left-0">
					<span class="font-weight-bold">TEMPERATURA: </span>
					<?= $infor[0]->temperatura ?> C°
				</div>
				<div class="col p-2 border border-top-0 border-left-0">
					<span class="font-weight-bold">PESO: </span>
					<?= $infor[0]->peso ?> Kg
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col grey lighten-5 p-2 border">
					EXAMEN CLINICO
				</div>
			</div>
			<div class="row">
				<div class="col p-2 border border-top-0">
					<span class="font-weight-bold">ACTITUD: </span>
					<?= $infor[0]->actitud ?>
				</div>
				<div class="col p-2 border border-top-0 border-left-0">
					<span class="font-weight-bold">CONDICION CORPORAL: </span>
					<?= $infor[0]->cond_corporal ?>
				</div>
				<div class="col p-2 border border-top-0 border-left-0">
					<span class="font-weight-bold">HIDRATACION: </span>
					<?= $infor[0]->hidratacion ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col grey lighten-5 p-2 border">
					OBSERVACION DEL VETERINARIO
				</div>
			</div>
			<div class="row">
				<div class="col p-2 border border-top-0">
					<?= $infor[0]->observacion ?>
				</div>
			</div>
		</div>
	</div>

	<div class="card mt-4 mb-3 hoverable">
		<div class="card-body">
			<h3>Información del dueño de la mascota</h3>
			<br>
			<?php $dueid = $info[0]->dueid ?>
			<?= form_open("actualizar-duenio/$dueid") ?>
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
			</form>
		</div>
	</div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Generar Historial Médico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php $idd = $info[0]->id ?>
            <?= form_open("historial/$idd") ?>
	            <div class="modal-body">

					<div class="row">
						<div class="col-sm-4">
							<div class="md-form">
								<i class="fa fa-user-md prefix"></i>
								<input type="text" class="form-control validate" name="veterinario">
								<label>Veterinario responsable</label>
							</div>
						</div>
						<div class="col-sm">
							<div class="md-form">
								<i class="fa fa-heartbeat prefix"></i>
								<input type="text" class="form-control validate" name="pulso" id="pulso">
								<label for="pulso">Pulso puls/min</label>
							</div>
						</div>
						<div class="col-sm">
							<div class="md-form">
								<i class="fa fa-thermometer-2 prefix"></i>
								<input type="text" class="form-control validate" name="temp" id="temp">
								<label for="temp">Temp C°</label>
							</div>
						</div>
						<div class="col-sm">
							<div class="md-form">
								<i class="fa fa-balance-scale prefix"></i>
								<input type="text" class="form-control validate" name="peso" id="peso">
								<label for="peso">Peso Kg</label>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<h5>Actitud</h5>
							<div class="form-check">
								<input name="act" type="radio" value="Asténico" class="form-check-input with-gap" id="ast">
								<label class="form-check-label" for="ast">Asténico</label>
							</div>
							<div class="form-check">
								<input name="act" type="radio" value="Apoplético" class="form-check-input with-gap" id="apo">
								<label class="form-check-label" for="apo">Apoplético</label>
							</div>
							<div class="form-check">
								<input name="act" type="radio" value="Linfático" class="form-check-input with-gap" id="lin">
								<label class="form-check-label" for="lin">Linfático</label>
							</div>
						</div>
						<div class="col">
							<h5>Condición corporal</h5>
							<div class="form-check">
								<input name="condcorp" type="radio" value="Caquéctico" class="form-check-input with-gap" id="caq">
								<label class="form-check-label" for="caq">Caquéctico</label>
							</div>
							<div class="form-check">
								<input name="condcorp" type="radio" value="Delgado" class="form-check-input with-gap" id="del">
								<label class="form-check-label" for="del">Delgado</label>
							</div>
							<div class="form-check">
								<input name="condcorp" type="radio" value="Normal" class="form-check-input with-gap" id="nor">
								<label class="form-check-label" for="nor">Normal</label>
							</div>
							<div class="form-check">
								<input name="condcorp" type="radio" value="Obeso" class="form-check-input with-gap" id="obe">
								<label class="form-check-label" for="obe">Obeso</label>
							</div>
							<div class="form-check">
								<input name="condcorp" type="radio" value="Sobrepeso" class="form-check-input with-gap" id="sobre">
								<label class="form-check-label" for="sobre">Sobrepeso</label>
							</div>
						</div>
						<div class="col">
							<h5>Estado de hidratación</h5>
							<div class="form-check">
								<input name="edohid" type="radio" value="Normal" class="form-check-input with-gap" id="hnor">
								<label class="form-check-label" for="hnor">Normal</label>
							</div>
							<div class="form-check">
								<input name="edohid" type="radio" value="Deshidratación" class="form-check-input with-gap" id="des">
								<label class="form-check-label" for="des">Deshidratación</label>
							</div>
							<div class="form-check">
								<input name="edohid" type="radio" value="0-5%" class="form-check-input with-gap" id="05">
								<label class="form-check-label" for="05">0-5%</label>
							</div>
							<div class="form-check">
								<input name="edohid" type="radio" value="6-7%" class="form-check-input with-gap" id="67">
								<label class="form-check-label" for="67">6-7%</label>
							</div>
							<div class="form-check">
								<input name="edohid" type="radio" value="8-9%" class="form-check-input with-gap" id="89">
								<label class="form-check-label" for="89">8-9%</label>
							</div>
							<div class="form-check">
								<input name="edohid" type="radio" value="+10%" class="form-check-input with-gap" id="10">
								<label class="form-check-label" for="10">+10%</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="md-form">
								<textarea class="form-control md-textarea" name="obs"></textarea>
								<label>Observacion del veterinario</label>
							</div>
						</div>
					</div>
	            
	            </div>
	            <div class="modal-footer">
	                <button class="btn btn-primary" type="submit">guardar</button>
	            </div>
	        </form>
        </div>
    </div>
</div>