<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
	<link rel="stylesheet" href="<?= base_url() ?>/application/assets/mdb/mdb.min.css">
	<style>
		
		body {
			background: url('<?= base_url() ?>/application/assets/images/fondologin.jpg') !important;
			background-position: center !important; 
			background-attachment: fixed !important;
			background-size: 125% !important; 
		}
	</style>
</head>
<body>
	
	<div class="login">

        <div class="card">
            <div class="card-body">

                <!--Header-->
                <?= form_open('Login/login') ?>
                    <div class="form-header info-color">
                        <h3><i class="fa fa-lock"></i> Inicio de Sesión</h3>
                    </div>

                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="usuario" name="user" class="form-control" required>
                        <label for="usuario">Usuario</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="clave" name="pass" class="form-control" required>
                        <label for="clave">Contraseña</label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Login</button>
                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#modalRegisterForm">Nuevo</buton>
                    </div>
                </form>
            </div>
        </div>

    </div>



    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Registrarse</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open('aniadir_usuario') ?>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fa fa-id-card prefix grey-text"></i>
                            <input type="text" id="cedula" name="cedula" class="form-control validate" pattern="[0-9]{7,9}$">
                            <label data-error="wrong" data-success="right" for="cedula">Cédula</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="orangeForm-name" class="form-control validate" name="nombre">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="orangeForm-apellido" class="form-control validate" name="apellido">
                            <label data-error="wrong" data-success="right" for="orangeForm-apellido">Apellido</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="orangeForm-phone" class="form-control validate" name="telefono">
                            <label data-error="wrong" data-success="right" for="orangeForm-phone">Teléfono</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-map prefix grey-text"></i>
                            <input type="text" id="orangeForm-dir" class="form-control validate" name="direccion">
                            <label data-error="wrong" data-success="right" for="orangeForm-dir">Dirección</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="orangeForm-user" class="form-control validate" name="usuario">
                            <label data-error="wrong" data-success="right" for="orangeForm-user">Usuario</label>
                        </div>

                        <div class="md-form mb-4">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="clave">
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Clave</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-deep-orange">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

	<script src="<?= base_url() ?>/application/assets/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/application/assets/mdb/mdb.min.js"></script>
	<script src="<?= base_url() ?>/application/assets/app.js"></script>
</body>
</html>