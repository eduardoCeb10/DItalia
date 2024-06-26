<!DOCTYPE html>
<html lang="es">

<body>
    <!--Inicio seccion ¿Quienes somos?-->
    <div class="quienes">
        <div class="container">
            <div class="row d-flex align-items-center">
                <!-- Columna para la tarjeta -->
                <div class="col-12 col-lg-6 mb-lg-0 d-flex justify-content-center">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5 class="card-title">¿Qué somos?</h5>
                            <p class="card-text">D'Italia es mucho más que una tienda de vestidos, somos un símbolo de elegancia, tradición y belleza en el mundo de las quinceañeras. Con una trayectoria de más de una década en el mercado, nos hemos especializado en la confección y venta de vestidos de XV años, ofreciendo una amplia gama de opciones que combinan calidad, estilo y precios accesibles.</p>
                        </div>
                    </div>
                </div>
                <!-- Columna para la imagen (o párrafo)-->
                <div class="col-12 col-lg-6 mt-2 d-flex justify-content-center">
                    <div class="img-wrap">
                        <img src="<?php echo $ruta . '/' ?>images/quienes.jpg" class="img-fluid somos" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Fin seccion ¿Quienes somos?-->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section contenedor">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">¿Por qué elegirnos?</h2>
                    <p class="fs-5">Elegirnos significa optar por calidad, exclusividad y atención personalizada. Nuestros vestidos están confeccionados con materiales de excelente calidad, garantizando comodidad y un acabado impecable. Nos dedicamos a realzar tu belleza y estilo, ofreciendo diseños únicos que se adaptan a tu personalidad.</p>
                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <i class='bx bx-nos bx-time'></i>
                                </div>
                                <h3 class="fs-5">Horario de atención</h3>
                                <p class="fs-6">Nuestro horario de atención es de 11:00 a 18:00. Visítanos y encuentra el vestido perfecto para tu quinceañera.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <i class='bx bx-nos bx-calendar'></i>
                                </div>
                                <h3 class="fs-5">Sistema de apartado</h3>
                                <p class="fs-6">Puedes apartar tu vestido con un mínimo de $1000. Asegura el vestido de tus sueños para tu gran día.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <i class='bx bx-nos bx-brush'></i>
                                </div>
                                <h3 class="fs-5">Diseños personalizados</h3>
                                <p class="fs-6">Si tienes un diseño en mente, tráelo y haremos realidad el vestido de tus sueños adaptandolo a un precio justo.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <i class='bx bx-nos bx-timer'></i>
                                </div>
                                <h3 class="fs-5">Entrega puntual</h3>
                                <p class="fs-6">Nos comprometemos a entregar los vestidos puntualmente antes del evento, asegurando que todo esté perfecto para tu celebración.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="<?php echo $ruta . "/" ?>images/nosotros-1.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start Team Section -->
    <div class="container mb-5 pt-5">
        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center">
                <h2 class="section-title">Nuestro Equipo</h2>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="card mb-5" style="width: 25rem; border:none;">
                <img src="<?php echo $ruta . "/" ?>images/equipo.jpeg" class="img-fluid card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">
                    <h5>Eduardo Ceballos</h5>Encargado, vendedor.
                    <hr>
                    <h5>Ericka Vazquez</h5>Dueña.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Section -->
    <div class="mt-5 mb-5"></div>

</body>

</html>