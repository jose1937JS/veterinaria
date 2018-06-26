<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDF GENERAL</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/assets/mdb/mdb.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/application/assets/fontawesome/css/font-awesome.min.css">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 border p-2">
				<img src="<?= base_url() ?>/application/assets/images/LogoVeterinaria.png" class="logo img-fluid">
			</div>
			<div class="col border p-2">
				<h3 class="text-center">REPORTE GENERAL</h3>
			</div>
			<div class="col-sm-2 border p-2 text-center">
				<p><?= date('d/m/o') ?></p>
			</div>
		</div>
		<br><br>

		<table class="table">
			<thead>
				<tr>
					<th>DE ALTA</th>
					<th>NOMBRE</th>
					<th>ESPECIE</th>
					<th>EDAD</th>
					<th>COLOR</th>
					<th>DUEÑO</th>
					<th>TELEFONO</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($rango->result() as $v): ?>
					<tr>
						<td class="text-center"><?php ($v->deAlta == 'true')? print('SI'):print('NO'); ?></td>
						<td class="font-weight-normal"><?= $v->nombre ?></td>
						<td class="font-weight-normal"><?= $v->tipo ?></td>
						<td class="font-weight-normal"><?= $v->edad ?></td>
						<td class="font-weight-normal"><?= $v->color ?></td>
						<td class="font-weight-normal"><?= $v->duename ?> <?= $v->apellido ?></td>
						<td class="font-weight-normal"><?= $v->telefono ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>
	
	<script src="<?= base_url() ?>/application/assets/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/application/assets/mdb/mdb.min.js"></script>

	<script>
		$(function(){
			print()

			setTimeout(function(){
				history.back()
			}, 1000)
		})
	</script>
</body>
</html>