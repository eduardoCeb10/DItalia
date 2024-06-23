<?php

$ruta = Plantilla::ctrlRuta();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Blue Cloud">
    <link rel="shortcut icon" href="<?php echo $ruta . "/" ?>/images/faviconn.png">

    <meta name="description" content="Sitio Web de comercio electronico acerca de una tienda de vestidos para XV años" />
    <meta name="keywords" content="vestidos, XV" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo $ruta . "/" ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/cabecera.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/pie.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/login.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/tienda.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/dashboard.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/galeria.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/tiny-slider.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/carrusel.css" rel="stylesheet">
    <link href="<?php echo $ruta . "/" ?>css/masVendido.css" rel="stylesheet">
    <title>D'Italia</title>
</head>

<body>
    <!-- Inicio Navigation -->
    <?php include "vista/modulos/cabecera.php"; ?>
    <!-- Final Navigation -->

    <!-- Inicio Banner & Breadcrumb -->
    <?php
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] != "inicio" && $_GET["pagina"] != "carrito" && $_GET["pagina"] != "iniciarSesion" && $_GET["pagina"] != "panelControl" && $_GET["pagina"] != "verificar" && $_GET["pagina"] != "gracias") {
            include "vista/modulos/banner.php";
            include "vista/modulos/breadcrumb.php";
        } elseif ($_GET["pagina"] == "carrito" || $_GET["pagina"] == "iniciarSesion" || $_GET["pagina"] == "panelControl" || $_GET["pagina"] == "verificar" || $_GET["pagina"] == "gracias") {
            include "vista/modulos/breadcrumb.php";
        } else {
            include "vista/modulos/carrusel.php";
        }
    } else {
        include "vista/modulos/carrusel.php";
    }
    ?>
    <!-- Final Banner & Breadcrumb -->

    <!-- Inicio Contenido de la Página -->
    <?php
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == "inicio" || $_GET["pagina"] == "catalogo" || $_GET["pagina"] == "citas" || $_GET["pagina"] == "nosotros" || $_GET["pagina"] == "contacto" || $_GET["pagina"] == "iniciarSesion" || $_GET["pagina"] == "panelControl" || $_GET["pagina"] == "carrito" || $_GET["pagina"] == "verificar" || $_GET["pagina"] == "gracias") {
            include "modulos/" . $_GET["pagina"] . ".php";
        }
    } else {
        include "modulos/inicio.php";
    }
    ?>
    <!-- Final Contenido de la Página -->

    <!-- Inicio Footer -->
    <?php include "vista/modulos/pie.php"; ?>
    <!-- Final Footer -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/carrusel.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/tiny-slider.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/custom.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/main.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/lightbox.js"></script>
    <script src="<?php echo $ruta . "/" ?>js/dashboard.js"></script>
</body>

</html>