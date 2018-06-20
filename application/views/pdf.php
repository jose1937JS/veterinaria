<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HISTORIAL</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/assets/mdb/mdb.min.css">
</head>
<body>

	<div class="container">

		<div class="row">
			<div class="col-sm-3 border p-2">
				<img src="<?= base_url() ?>/application/assets/images/LogoVeterinaria.png" class="logo img-fluid">
			</div>
			<div class="col border p-2">
				<h3 class="text-center">HISTORIAL CLINICO VETERINARIO</h3>
			</div>
			<div class="col-sm-2 border p-2 text-center">
				<p><?= date('d/m/o') ?></p>
			</div>
		</div>
		<br><br>
		<div class="row border">
			<div class="col-sm-1 border-right p-2"><span class="font-weight-bold">Fecha admisión</span></div>
			<div class="col border-right p-2">
				<p class="text-center"><?= $info[0]->fecha_entrada ?></p>
			</div>
			<div class="col-sm-1 border-right p-2"><span class="font-weight-bold ">Fecha salida</span></div>
			<div class="col border-right p-2">
				<p class="text-center"><?= $info[0]->fecha_salida ?></p>
			</div>
			<div class="col-sm-2 p-2"><span class="font-weight-bold">Médico Veterinario</span></div>
			<div class="col border-left">
				<p><?= $info[0]->veterinario ?></p>	
			</div>
		</div>
		<br>
		<div class="row ">
			<div class="col border grey lighten-5 p-2">
				RESEÑA DEL PACIENTE
			</div>
		</div>
		<div class="row">
			<div class="col border border-top-0 p-2">
				<span class="font-weight-bold">NOMBRE: </span>
				<?= $info[0]->nombre ?>
			</div>
			<div class="col border border-top-0 border-left-0 p-2">
				<span class="font-weight-bold">ESPECIE: </span>
				<?= $info[0]->tipo ?>
			</div>
			<div class="col border border-top-0 border-left-0 p-2">
				<span class="font-weight-bold">RAZA: </span>
				<?= $info[0]->raza ?>
			</div>
			<div class="col border p-2 border-top-0 border-left-0">
				<span class="font-weight-bold">COLOR: </span>
				<?= $info[0]->color ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 border p-2 border-top-0">
				<span class="font-weight-bold">SEXO: </span>
				<?= $info[0]->sexo ?>
			</div>
			<div class="col-sm-3 border p-2 border-top-0 border-left-0">
				<span class="font-weight-bold">EDAD: </span>
				<?= $info[0]->edad ?>
			</div>
			<div class="col border p-2 border-top-0 border-left-0">
				<span class="font-weight-bold">VACUNAS: </span>
				<?= $info[0]->vacunas ?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col grey lighten-5 p-2 border">
				DATOS DEL PROPIETARIO
			</div>
		</div>
		<div class="row">
			<div class="col border border-top-0 p-2">
				<span class="font-weight-bold">CEDULA: </span>
				<?= $info[0]->cedula ?>
			</div>
			<div class="col border border-top-0 p-2">
				<span class="font-weight-bold">NOMBRE: </span>
				<?= $info[0]->duename ?>
			</div>
			<div class="col border border-top-0 border-left-0 p-2">
				<span class="font-weight-bold">APELLIDO: </span>
				<?= $info[0]->apellido ?>
			</div>
			<div class="col border border-top-0 border-left-0 p-2">
				<span class="font-weight-bold">TELEFONO: </span>
				<?= $info[0]->telefono ?>
			</div>
		</div>
		<div class="row">
			<div class="col border border-top-0 p-2">
				<span class="font-weight-bold">DIRECCION: </span>
				<?= $info[0]->direccion ?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col grey lighten-5 p-2 border">
				MOTIVO DE LA CONSULTA
			</div>
		</div>
		<div class="row">
			<div class="col p-2 border border-top-0">
				<?= $info[0]->resumen ?>
			</div>
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
				<?= $info[0]->pulso ?> pulsaciones/min
			</div>
			<div class="col p-2 border border-top-0 border-left-0">
				<span class="font-weight-bold">TEMPERATURA: </span>
				<?= $info[0]->temperatura ?> C°
			</div>
			<div class="col p-2 border border-top-0 border-left-0">
				<span class="font-weight-bold">PESO: </span>
				<?= $info[0]->peso ?> Kg
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
				<?= $info[0]->actitud ?>
			</div>
			<div class="col p-2 border border-top-0 border-left-0">
				<span class="font-weight-bold">CONDICION CORPORAL: </span>
				<?= $info[0]->cond_corporal ?>
			</div>
			<div class="col p-2 border border-top-0 border-left-0">
				<span class="font-weight-bold">HIDRATACION: </span>
				<?= $info[0]->hidratacion ?>
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
				<?= $info[0]->observacion ?>
			</div>
		</div>
	</div>

	<script src="<?= base_url() ?>/application/assets/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/application/assets/mdb/mdb.min.js"></script>

	<script>
		$(function(){
			print()
		})
	</script>
</body>
</html>
