<?php
$paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 'inicio';

// Definir las rutas y nombres de las páginas
$pages = [
    "inicio" => "Inicio",
    "catalogo" => "Catálogo",
    "citas" => "Agenda tu cita",
    "nosotros" => "Nosotros",
    "contacto" => "Contacto",
    "carrito" => "Carrito",
    "verificar" => "Verificar",
    "gracias" => "Gracias",
    "iniciarSesion" => "Iniciar Sesión",
    "registrarse" => "Registrarse",
    "panelControl" => "Panel de Control",
];
?>

<div class="container mt-2">
    <nav>
        <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item"><a href="index.php?pagina=inicio" style="text-decoration: none;">Inicio</a></li>
            <?php
            if ($paginaActual == 'carrito' || $paginaActual == 'verificar' || $paginaActual == 'gracias') {
                echo "<i class='bx bx-chevron-right bx-fade-left fs-3 ms-3 me-n1 text-black'></i>";
                echo "<li class='breadcrumb-item'><a href='index.php?pagina=carrito' style='text-decoration: none;'>Carrito</a></li>";

                if ($paginaActual == 'verificar' || $paginaActual == 'gracias') {
                    echo "<i class='bx bx-chevron-right bx-fade-left fs-3 ms-3 me-n1 text-black'></i>";
                    echo "<li class='breadcrumb-item'><a href='index.php?pagina=verificar' style='text-decoration: none;'>Verificar</a></li>";

                    if ($paginaActual == 'gracias') {
                        echo "<i class='bx bx-chevron-right bx-fade-left fs-3 ms-3 me-n1 text-black'></i>";
                        echo "<li class='breadcrumb-item active'>Gracias</li>";
                    }
                }
            } elseif ($paginaActual != 'inicio') {
                echo "<i class='bx bx-chevron-right bx-fade-left fs-3 ms-3 me-n1 text-black'></i>";
                echo "<li class='breadcrumb-item active'>{$pages[$paginaActual]}</li>";
            }
            ?>
        </ol>
    </nav>
</div>