<!DOCTYPE html>
<html lang="es">

<body>
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">

                <!-- Start Product Columns -->
                <div class="col-12 col-md-8 col-lg-9 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/vestido6.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Girasol Amanecer</h3>
                                <strong class="product-price">$ 6,299.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/vestido15.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Esencias Nocturnas</h3>
                                <strong class="product-price">$ 8,499.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/vestido7.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Rojo Amanecer</h3>
                                <strong class="product-price">$ 7,399.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/ramo5.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Ramo de XV años</h3>
                                <strong class="product-price">$ 1,234.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/ultimo-regalo.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Último juguete</h3>
                                <strong class="product-price">$ 1,300</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/vestido-12.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Modelo Carolina</h3>
                                <strong class="product-price">$ 7,399.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <!-- Paginación -->
                        <div class="col-12">
                            <ul class="pagination">
                                <li class="solid"><a href="#">&laquo; Anterior</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="solid"><a href="#">Siguiente &raquo;</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- End Product Columns -->

                <!-- Start Filter Column -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 order-1 order-md-2">
                    <div class="filter-section">
                        <h5 class="filter-title">Buscar Productos</h5>
                        <input type="text" class="form-control mb-3" placeholder="Buscar...">
                        
                        <h5 class="filter-title">Rango de Precios</h5>
                        <div class="price-slider">
                            <input type="range" id="priceMax" min="7000" max="12000" step="100" value="12000" oninput="updatePrice()">
                        </div>
                        <p>Rango de precios: $<span id="priceMinDisplay">7,000</span> - <span id="priceMaxDisplay">12,000</span></p>

                        <h5 class="filter-title">Corte</h5>
                        <select class="form-control mb-3">
                            <option>Completo</option>
                            <option>Desmontable</option>
                        </select>

                        <h5 class="filter-title">Talla</h5>
                
                        <div class="size-option">
                            <input type="checkbox" id="tallaExtraChica">
                            <label class="size-label" for="tallaExtraChica">XS</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="tallaChica">
                            <label class="size-label" for="tallaChica">S</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="tallaMediana">
                            <label class="size-label" for="tallaMediana">M</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="tallaGrande">
                            <label class="size-label" for="tallaGrande">G</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="tallaXL">
                            <label class="size-label" for="tallaXL">XL</label>
                        </div>

                        <br><br>

                        <h5 class="filter-title">Color</h5>
                        <div class="color-option">
                            <input type="checkbox" id="colorAzul">
                            <label class="color-label" for="colorAzul" style="background-color: #0000FF;"></label>
                            <span>Azul</span>
                        </div>
                        <div class="color-option">
                            <input type="checkbox" id="colorGris">
                            <label class="color-label" for="colorGris" style="background-color: #808080;"></label>
                            <span>Gris</span>
                        </div>
                        <div class="color-option">
                            <input type="checkbox" id="colorMarfil">
                            <label class="color-label" for="colorMarfil" style="background-color: #FFFFF0;"></label>
                            <span>Marfil</span>
                        </div>
                        <div class="color-option">
                            <input type="checkbox" id="colorMorado">
                            <label class="color-label" for="colorMorado" style="background-color: #800080;"></label>
                            <span>Morado</span>
                        </div>
                        <div class="color-option">
                            <input type="checkbox" id="colorNegro">
                            <label class="color-label" for="colorNegro" style="background-color: #000000;"></label>
                            <span>Negro</span>
                        </div>
                        <div class="color-option">
                            <input type="checkbox" id="colorOro">
                            <label class="color-label" for="colorOro" style="background-color: #FFD700;"></label>
                            <span>Oro</span>
                        </div>
                        <div class="color-option">
                            <input type="checkbox" id="colorRojo">
                            <label class="color-label" for="colorRojo" style="background-color: #FF0000;"></label>
                            <span>Rojo</span>
                        </div>
                        <div class="color-option">
                            <input type="checkbox" id="colorRosa">
                            <label class="color-label" for="colorRosa" style="background-color: #FFC0CB;"></label>
                            <span>Rosa</span>
                        </div>
                        <div class="color-option">
                            <input type="checkbox" id="colorVerde">
                            <label class="color-label" for="colorVerde" style="background-color: #008000;"></label>
                            <span>Verde</span>
                        </div>
                    </div>
                </div>
                <!-- End Filter Column -->
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const priceMax = document.getElementById('priceMax');
        const priceMaxDisplay = document.getElementById('priceMaxDisplay');

        function updatePrice() {
            priceMaxDisplay.innerText = `$${parseInt(priceMax.value).toLocaleString('en-US')}`;
        }

        priceMax.addEventListener('input', updatePrice);
        updatePrice();
    });

    document.addEventListener("DOMContentLoaded", function() {
    const productos = document.querySelectorAll('.product-item');

        productos.forEach(producto => {
            producto.addEventListener('click', function(event) {
                event.preventDefault();

                const imagenSrc = this.querySelector('img').src;
                const titulo = this.querySelector('.product-title').textContent;
                const precio = this.querySelector('.product-price').textContent;
                const calificacion = '5.0';  // Ejemplo de calificación
                const vendidos = '150';  // Ejemplo de productos vendidos

                // Creamos el overlay y el popup
                const overlay = document.createElement('div');
                overlay.innerHTML = `
                    <div class="overlay">
                        <div class="popup">
                            <div class="close-x">&#10005;</div>
                            <div class="popup-content">
                                <div class="popup-image">
                                    <img src="${imagenSrc}" alt="${titulo}">
                                </div>
                                <div class="popup-details">
                                    <h3>${titulo}</h3>
                                    <p class="price">${precio}</p>
                                    <div class="ratings">
                                        <span class="rating-stars">★★★★★</span> ${calificacion} (${vendidos} vendidos)
                                    </div>
                                    <br>
                                    <p>Talla: M, L, XL</p>
                                    <p>Colores disponibles: Rojo, Azul, Verde</p>
                                    <p>Disponibles: Ultimas Piezas</p>
                                    <br>
                                    <a href="index.php?pagina=carrito" class="btnCatalogo" role="button">Comprar ahora</a>
                                    <a href="index.php?pagina=carrito" class="btnCatalogo" role="button">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                document.body.appendChild(overlay);

                overlay.addEventListener('click', function(e) {
                    if(e.target.classList.contains('close-x') || e.target.classList.contains('overlay')) {
                        overlay.remove();
                    }
                });
            });
        });
    });

    </script>

</body>

</html>
