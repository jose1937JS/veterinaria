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
            <li class="nav-item">
                <?= anchor('admin', '<i class="fa fa-home"></i> Inicio', 'class="nav-link"') ?>
            </li>
            <?php ($cant == 0)? $cant='' : $cant ?>
            <li class="nav-item">
                <?= anchor('mensajes', "<i class='fa fa-envelope'></i> Mensajes <span class='badge badge-danger'>$cant</span>", 'class="nav-link"') ?>
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