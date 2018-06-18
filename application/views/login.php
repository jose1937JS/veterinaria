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