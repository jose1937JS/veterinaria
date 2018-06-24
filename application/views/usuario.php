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
            <?php ($cant == 0)? $cant='': $cant ?>
            <li class="nav-item">
                <?= anchor('usuario', "<i class='fa fa-home'></i> Usuario <span class='badge badge-danger'>$cant</span>", 'class="nav-link"') ?>
            </li>

             <li class="nav-item">
                <?= anchor("usuario/perfil/$idusu", '<i class="fa fa-home"></i> Perfil', 'class="nav-link"') ?>
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

<div class="card container"  style="margin-top: 100px">
	<div class="card-body">
		<?php foreach ($mensajes->result() as $value): ?>
			<div class="container">
				<div class="card mb-4">
					<div class="card-body">
						<div class="d-flex justify-content-between">
                            <h5 class="card-title"><?= $value->nombre.' '.$value->apellido ?></h5>
                            <?= anchor("eliminar_mensaje/$value->id",'<i class="fa fa-times red-text"></i>') ?> 
                        </div>
                        <hr>
						<?= $value->mensaje ?>
					</div>
					<div class="rounded-bottom grey lighten-2 p-3">
						<p><b>Respuesta del veterinario</b></p><p><?= $value->respuesta ?></p>
					</div>
				</div>

			</div>
		<?php endforeach ?>
	</div>
</div>


<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Nuevo Mensaje</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <?php var_dump($mensajes->result()[0]->id_usuario);  ?> -->
	        <?= form_open('AjaxController/enviarmensaje') ?>
	        	<input type="hidden" name="idusu" value="<?= $idusu ?>">
	            <div class="modal-body mx-3">
	                <div class="md-form mb-5">
	                    <i class="fa fa-envelope prefix grey-text"></i>
	                    <textarea class="form-control md-textarea" name="msg"></textarea>
	                    <label data-error="wrong" data-success="right" for="defaultForm-email">Tu mensaje</label>
	                </div>
	            </div>
	            <div class="modal-footer d-flex justify-content-center">
	                <button class="btn btn-danger">Enviar</button>
	            </div>
	        </form>
        </div>
    </div>
</div>

<div class="text-center">
    <button class="btn btn-danger btn-floating mb-4" data-toggle="modal" data-target="#modalLoginForm" title="Enviar mensaje al veterinario">
    	<i class="fa fa-plus"></i>
    </button>
</div>