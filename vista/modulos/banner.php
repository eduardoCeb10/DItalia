<?php
$paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 'inicio';

// Definir los títulos y descripciones de las páginas
$banners = [
    "inicio" => [
        "titulo" => "Bienvenido a D'Italia",
        "descripcion" => "Explora nuestra exclusiva colección de vestidos de XV años y encuentra el vestido perfecto para tu celebración."
    ],
    "catalogo" => [
        "titulo" => "Catálogo de productos",
        "descripcion" => "Descubre nuestra amplia selección de vestidos, accesorios y más para hacer tu día especial inolvidable."
    ],
    "citas" => [
        "titulo" => "Agenda tu cita",
        "descripcion" => "¿Tienes dudas sobre algún producto?, podemos atenderte en nuestra tienda fisica, agenda tu cita."
    ],
    "nosotros" => [
        "titulo" => "Nosotros",
        "descripcion" => "Nuestra misión es hacer realidad los sueños de todas las jóvenes al ofrecer vestidos de XV años únicos y deslumbrantes, que las hagan sentir especiales y radiantes en su día tan esperado."
    ],
    "contacto" => [
        "titulo" => "Contacto",
        "descripcion" => "En D'Italia, nos apasiona hacer realidad tus sueños para ese día tan especial. Nuestro equipo está dedicado a ofrecerte la mejor atención y asesoría en cada paso del proceso de elección de tu vestido de XV Años. Si tienes alguna pregunta, necesitas más información sobre nuestros productos o servicios, o deseas programar una cita, no dudes en ponerte en contacto con nosotros."
    ]
];

$titulo = isset($banners[$paginaActual]['titulo']) ? $banners[$paginaActual]['titulo'] : '';
$descripcion = isset($banners[$paginaActual]['descripcion']) ? $banners[$paginaActual]['descripcion'] : '';
?>
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h1><?php echo $titulo; ?></h1>
                <p class="fs-4 lh-base"><?php echo $descripcion; ?></p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo $ruta . "/" ?>images/logo-dItalia.png" class="img-fluid" style="filter: drop-shadow(12px 12px 5px rgba(0, 0, 0, 0.7));">
                <p class="text-center"><img src="<?php echo $ruta . "/" ?>images/logo-sni.png" class="w-25" style="filter: drop-shadow(12px 12px 5px rgba(0, 0, 0, 0.7));"></p>
            </div>
        </div>
    </div>
</div>