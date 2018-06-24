<div style="margin-top: 100px"></div>

<?php foreach ($mensajes->result() as $value): ?>
	<div class="container">
		
		<div class="card mb-4">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<h5 class="card-title"><?= $value->nombre.' '.$value->apellido ?><small> - Te ha ecrito un mensaje</small></h5>
					<?= anchor("eliminar_mensaje_admin/$value->id",'<i class="fa fa-times red-text"></i>') ?> 
				</div>
				<hr>
				<?= $value->mensaje ?>
			</div>
			<div class=" blue lighten-3 p-3">
				Respondistes: <?= $value->respuesta ?>
			</div>
			<div class="rounded-bottom grey lighten-2 text-center">
				<?= form_open('AjaxController/respuesta') ?>
					<input type="hidden" name="id" value="<?= $value->id ?>">
					<div class="modal-body mx-3">
						<div class="md-form mb-5">
							<i class="fa fa-envelope prefix grey-text"></i>
							<input type="text" name="respuesta" >
							<label data-error="wrong" data-success="right" for="defaultForm-email">Responder mensaje</label>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
<?php endforeach ?>