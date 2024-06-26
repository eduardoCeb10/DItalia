<!DOCTYPE html>
<html lang="es">

<body>

    <div class="untree_co-section before-footer-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Imagen</th>
                                    <th class="product-name">Modelo</th>
                                    <th class="product-name">Accesorio</th>
                                    <th class="product-price">Precio</th>
                                    <th class="product-quantity">Cantidad</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="<?php echo $ruta . "/" ?>images/product-1.png" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black mt-2">Mariana</h2>
                                    </td>
                                    <td class="product-name">
                                        <p></p>
                                    </td>
                                    <td class="price">$6,299.90</td>
                                    <td>
                                        <div class="input-group align-items-center quantity-container" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="price">$6,299.90</td>
                                    <td><a href="#"><i class='bx bx-x-circle' title="Eliminar" style="font-size: 34px;"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="<?php echo $ruta . "/" ?>images/product-2.png" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black mt-2">Carolina</h2>
                                    </td>
                                    <td class="product-name">
                                        <p></p>
                                    </td>
                                    <td class="price">$7,399.90</td>
                                    <td>
                                        <div class="input-group d-flex align-items-center quantity-container" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">$7,399.90</td>
                                    <td><a href="#"><i class='bx bx-x-circle' style="font-size: 34px;"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="row justify-content-end pe-2">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Total</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-md-6 text-end">
                                    <strong class="text-black">$13,699.80</strong>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Total</span>
                                </div>
                                <div class="col-md-6 text-end">
                                    <strong class="text-black">$13,699.80</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-secondary btn-lg py-3 btn-block" onclick="window.location='index.php?pagina=verificar'">Proceder a la compra</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>