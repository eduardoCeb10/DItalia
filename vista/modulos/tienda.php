<!DOCTYPE html>
<html lang="en">

<body>
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">

                <!-- Start Product Columns -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/product-3.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Rebecca</h3>
                                <strong class="product-price">$ 8,499.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/product-1.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Mariana</h3>
                                <strong class="product-price">$ 6,299.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/product-2.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Carolina</h3>
                                <strong class="product-price">$ 7,399.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/product-4.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Beatriz</h3>
                                <strong class="product-price">$ 11,499.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/product-3.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Rebecca</h3>
                                <strong class="product-price">$ 8,499.90</strong>
                                <span class="icon-cross">
                                    <img src="<?php echo $ruta . "/" ?>images/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <a class="product-item" href="#">
                                <img src="<?php echo $ruta . "/" ?>images/product-1.png" class="img-fluid product-thumbnail">
                                <h3 class="product-title">Mariana</h3>
                                <strong class="product-price">$ 6,299.90</strong>
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
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <div class="filter-section">
                        <h5 class="filter-title">Buscar Productos</h5>
                        <input type="text" class="form-control mb-3" placeholder="Buscar...">
                        
                        <h5 class="filter-title">Rango de Precios</h5>
                        <div class="price-slider">
                        <input type="range" id="priceMin" min="5000" max="20000" step="100" value="5000" oninput="updatePrice()">
                        <input type="range" id="priceMax" min="5000" max="20000" step="100" value="20000" oninput="updatePrice()">
                        </div>
                        <p>Rango de precios: $<span id="priceMinDisplay">5,000</span> - $<span id="priceMaxDisplay">20,000</span></p>

                        <h5 class="filter-title">Corte</h5>
                        <select class="form-control mb-3">
                            <option>Todos</option>
                            <option>Regular</option>
                            <option>Fit</option>
                        </select>

                        <h5 class="filter-title">Talla</h5>
                        <div class="size-option">
                            <input type="checkbox" id="talla0">
                            <label class="size-label" for="talla0">0</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="talla2">
                            <label class="size-label" for="talla2">2</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="talla4">
                            <label class="size-label" for="talla4">4</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="talla6">
                            <label class="size-label" for="talla6">6</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="talla8">
                            <label class="size-label" for="talla8">8</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="talla10">
                            <label class="size-label" for="talla10">10</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="talla12">
                            <label class="size-label" for="talla12">12</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="tallaChica">
                            <label class="size-label" for="tallaChica">CHICA</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="tallaMediana">
                            <label class="size-label" for="tallaMediana">MEDIANA</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="tallaGrande">
                            <label class="size-label" for="tallaGrande">GRANDE</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="tallaXL">
                            <label class="size-label" for="tallaXL">EXTRA GRANDE</label>
                        </div>
                        <div class="size-option">
                            <input type="checkbox" id="tallaUnica">
                            <label class="size-label" for="tallaUnica">UNICA</label>
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
        function updatePrice() {
            const min = document.getElementById('priceMin').value;
            const max = document.getElementById('priceMax').value;
            document.getElementById('priceMinDisplay').innerText = formatPrice(min);
            document.getElementById('priceMaxDisplay').innerText = formatPrice(max);
        }

        function formatPrice(value) {
            return parseInt(value).toLocaleString('en-US');
        }

        // Ensure the min slider does not go above the max slider value
        document.getElementById('priceMin').addEventListener('input', function () {
            const min = parseInt(this.value);
            const max = parseInt(document.getElementById('priceMax').value);
            if (min > max - 100) {
                this.value = max - 100;
            }
            updatePrice();
        });

        // Ensure the max slider does not go below the min slider value
        document.getElementById('priceMax').addEventListener('input', function () {
            const max = parseInt(this.value);
            const min = parseInt(document.getElementById('priceMin').value);
            if (max < min + 100) {
                this.value = min + 100;
            }
            updatePrice();
        });

        updatePrice();
    </script>
</body>

</html>
