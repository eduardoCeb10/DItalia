<!DOCTYPE html>
<html lang="en">

<body class="dashboard-body">
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
                <a class="nav-link" id="table-tab" data-toggle="tab" href="#table" role="tab" aria-controls="table" aria-selected="false">Inventario</a>
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
            <div class="tab-pane fade" id="table" role="tabpanel" aria-labelledby="table-tab">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Vestidos</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="data-table">
                        <!-- Datos de la tabla -->
                    </tbody>
                </table>
                <div class="action-buttons text-center">
                    <button class="btn btn-primary" onclick="addItem()"><i class="fa fa-plus"></i></button>
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
</body>

</html>