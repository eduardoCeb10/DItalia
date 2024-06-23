<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="dashboard-body">
    <div class="container dashboard-container mt-5">
        <h1 class="text-center">Dashboard Administrativo</h1>
        <ul class="nav nav-tabs" id="dashboardTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="chart-tab" data-toggle="tab" href="#chart" role="tab" aria-controls="chart" aria-selected="true">Gráfica de Pastel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="bar-chart-tab" data-toggle="tab" href="#bar-chart" role="tab" aria-controls="bar-chart" aria-selected="false">Gráfica de Barras</a>
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
                            <th>Item</th>
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
                            <th>Stock</th>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
