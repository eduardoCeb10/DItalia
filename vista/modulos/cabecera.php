<?php
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'inicio';
?>

<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark sticky-top" arial-label="Furni navigation bar">

    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?pagina=inicio">D'Italia<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0 fs-5">
                <li class="nav-item <?php echo $pagina == 'inicio' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'catalogo' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=catalogo">Catálogo</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'citas' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=citas">Agenda tu cita</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'nosotros' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=nosotros">Nosotros</a>
                </li>
                <li class="nav-item <?php echo $pagina == 'contacto' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php?pagina=contacto">Contacto</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav icons-nav">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tooltip" title="Iniciar Sesión/Registrarse" href="index.php?pagina=iniciarSesion"><i class='bx bx-cab bx-user <?php echo $pagina == 'iniciarSesion' ? 'bx bx-nos-tada' : ''; ?>'></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Carrito" href="index.php?pagina=carrito"> <i class='bx bx-cab bx-cart <?php echo in_array($pagina, ['carrito', 'verificar', 'gracias']) ? 'bx bx-nos-tada' : ''; ?>'></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</nav>