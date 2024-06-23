<!DOCTYPE html>
<html lang="en">

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
                                    <label for="c_fname" class="text-black">Nombre(s) <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_fname" name="c_fname" required autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label for="c_lname" class="text-black">Apellido(s) <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_lname" name="c_lname" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Calle, número ext e int" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_state_country" class="text-black">Municipio <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_state_country" name="c_state_country" placeholder="Municipio de residencia" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="c_postal_zip" class="text-black">C.P.<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip" placeholder="Código postal" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-6">
                                    <label for="c_email_address" class="text-black">Correo electrónico <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_email_address" name="c_email_address" placeholder="Correo electrónico" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="c_phone" class="text-black">Teléfono <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="c_phone" name="c_phone" placeholder="Número teléfonico" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="c_order_notes" class="text-black">Notas de la orden</label>
                                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Escribe tus notas aquí..."></textarea>
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
            <!-- </form> -->
        </div>
    </div>
</body>

</html>