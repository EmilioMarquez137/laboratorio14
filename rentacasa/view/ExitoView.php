<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 
    </head>
    <body>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../resources/images/banner1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../resources/images/banner2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../resources/images/banner3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <div class="container">
            <h1 class="display-4">Reservación creada</h1>
            <table class="table table-striped table-bordered">
            <tr>
                <th>FOLIO:</th>
                <td><?php echo $nuevareservacion['idreservacion']; ?></td>
            </tr>
            <tr>
                <th>ANFITRIÓN:</th>
                <td><?php echo $nuevareservacion['f_nombre']; ?></td>
            </tr>
            <tr>
                <th>DIRECCIÓN DE LA CASA:</th>
                <td><?php echo $nuevareservacion['c_direccion']; ?></td>
            </tr>
            <tr>
                <th>HUÉSPED:</th>
                <td><?php echo $nuevareservacion['p_nombre']; ?></td>
            </tr>
            <tr>
                <th>FECHA DE ENTRADA:</th>
                <td><?php echo $nuevareservacion['ingreso']; ?></td>
            </tr>
            <tr>
                <th>FECHA DE SALIDA:</th>
                <td><?php echo $nuevareservacion['salida']; ?></td>
            </tr>
            <tr>
                <th>COSTO:</th>
                <td><?php echo $nuevareservacion['costo']; ?></td>
            </tr>
        </table>

            <a href="../index.php" class="btn btn-outline-primary">Regresar al inicio</a>
        </div>

        <script src="../js/jquery-3.4.1.min.js"></script>

        <script src="../js/bootstrap.min.js"></script>


    </body>
</html>
