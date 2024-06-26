<div class="container dashboard-container mt-5">
        <h1 class="text-center">Panel de Control Administrativo</h1>
        <ul class="nav nav-tabs" id="dashboardTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="chart-tab" data-toggle="tab" href="#chart" role="tab" aria-controls="chart" aria-selected="true">Modelos más vendidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="bar-chart-tab" data-toggle="tab" href="#bar-chart" role="tab" aria-controls="bar-chart" aria-selected="false">Reporte de ventas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="table-tab" data-toggle="tab" href="#table" role="tab" aria-controls="table" aria-selected="false">Vestidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="table-tab2" data-toggle="tab" href="#table2" role="tab" aria-controls="table2" aria-selected="false">Accesorios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="appointments-tab" data-toggle="tab" href="#appointments" role="tab" aria-controls="appointments" aria-selected="false">Citas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="products-tab" data-toggle="tab" href="#products" role="tab" aria-controls="products" aria-selected="false">Productos en Venta</a>
            </li>
        </ul>
        <div class="tab-content" id="dashboardTabContent">
            <div class="tab-pane fade show active" id="chart" role="tabpanel" aria-labelledby="chart-tab">
                <div class="chart-container">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
            <div class="tab-pane fade" id="bar-chart" role="tabpanel" aria-labelledby="bar-chart-tab">
                <div class="chart-container">
                    <canvas id="myBarChart"></canvas>
                </div>
            </div>
            <!-- Tabla de Vestidos -->
            <div class="tab-pane fade" id="table" role="tabpanel" aria-labelledby="table-tab">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Vestidos</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="data-table-vestidos">
                        <!-- Datos de la tabla de Vestidos -->
                    </tbody>
                </table>
                <div class="action-buttons text-center">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregarVestido">Agregar vestido <i class="fa fa-plus"></i></button>
                </div>
            </div>

            <!-- Tabla de Accesorios -->
            <div class="tab-pane fade" id="table2" role="tabpanel" aria-labelledby="table-tab2">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Accesorios</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="data-table-accesorios">
                        <!-- Datos de la tabla de Accesorios -->
                    </tbody>
                </table>
                <div class="action-buttons text-center">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregarAccesorio">Agregar accesorio <i class="fa fa-plus"></i></button>
                </div>
            </div>

            <div class="tab-pane fade" id="appointments" role="tabpanel" aria-labelledby="appointments-tab">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="appointments-table">
                        <!-- Datos de las citas -->
                    </tbody>
                </table>
                <div class="action-buttons text-center">
                    <button class="btn btn-primary" onclick="addAppointment()"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad en existencia</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="products-table">
                        <!-- Datos de los productos -->
                    </tbody>
                </table>
                <div class="action-buttons text-center">
                    <button class="btn btn-primary" onclick="addProduct()"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->
<div class="modal fade" id="ModalAgregarVestido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <center>
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                </center>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Titulo</span>
                        </div>
                        <input type="text" class="form-control" placeholder="titulo" id="titulo" name="titulo" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <label class="input-group-text" for="inputGroupSelect02">Categoria</label>
                        </div>
                        <select class="custom-select categoria " id="categoria" name="categoria">
                            <option selected>Escoger...</option>
                            <option value="1">uno</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Descripcion</span>
                        </div>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Detalles</span>
                        </div>
                        <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Detalles" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon3">precio</span>
                        </div>
                        <input type="number" class="form-control" name="precio" id="precio" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Imagen</span>
                        </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input foto" id="foto" name="foto">
                        <label class="custom-file-label" for="inputGroupFile01" id="imagen" name="imagen">Choose file</label>
                    </div>
                    <input type="hidden" class="antiguaFoto">
                    </div>
                <p class="help-block">Tamaño recomendado 400px * 450px <br> Peso máximo de la foto 2MB</p>
                <img src="vistas/img/productos/default/default.jpg" class="img-thumbnail previsualizar" width="200px">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary guardarProducto" id="guardarProducto">Guardar</button>
            </div>
        </div>
    </div>
</div>