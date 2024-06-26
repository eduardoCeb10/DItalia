<!DOCTYPE html>
<html lang="es">

<body>
    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="border p-4 rounded" role="alert">
                        ¿Ya eres cliente? <a href="#">Click aquí</a> para entrar
                    </div>
                </div>
            </div>
            <form method="post" action="index.php?pagina=gracias">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="h3 mb-3 text-black text-center">Detalles de facturación</h2>
                        <div class="p-3 p-lg-5 border bg-white">

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <label class="text-black">Nombre(s) <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required autofocus>
                                </div>

                                <div class="col-md-6">
                                    <label class="text-black">Apellido(s) <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label class="text-black">RFC <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-uppercase" id="rfc" name="rfc" maxlength="13" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label class="text-black">Dirección <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Calle, número ext e int" required>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <label class="text-black">Municipio <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio de residencia" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="text-black">C.P.<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="cp" name="cp" placeholder="Código postal" required>
                                </div>

                            </div>

                            <div class="form-group row mb-3">

                                <div class="col-md-6">
                                    <label class="text-black">Correo electrónico <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="text-black">Teléfono <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Número teléfonico" required>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="text-black">Notas de la orden</label>
                                <textarea class="form-control" id="notas" name="notas" cols="30" rows="5" placeholder="Escribe tus notas aquí..."></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black text-center">Detalles de la orden</h2>
                                <div class="p-3 p-lg-5 border bg-white">
                                    <table class="table site-block-order-table mb-5">
                                        <thead>
                                            <th>Producto</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mariana <strong class="mx-2">x</strong> 1</td>
                                                <td>$6,299.90</td>
                                            </tr>
                                            <tr>
                                                <td>Carolina <strong class="mx-2">x</strong> 1</td>
                                                <td>$7,399.90</td>
                                            </tr>
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
                                                <td class="text-black">$13,699.80</td>
                                            </tr>
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Total</strong></td>
                                                <td class="text-black font-weight-bold"><strong>$13,699.80</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="form-group text-center">
                                        <button class="btn btn-secondary btn-lg py-3 btn-block" type="submit">Realizar pedido</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>