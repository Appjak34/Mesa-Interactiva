<?php
session_start();
include "./database/conexion.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mesa Interactiva</title>
    <link rel="icon" type="image/png" href="./assets/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/styles.css">
    <link rel="stylesheet" href="./src/css/style-form.css">
    <!--web-fonts-->

    <!--web-fonts-->
</head>
<body>
<div class="main mesa-interactiva">
    <div class="main-section">
        <div class="agregar-mobil-form" n>
            <h2>Registro de productos</h2>
            <p>Proceda a llenar los datos del telefono</p>
            <span></span>
            <form action="altadispositivo.php" method="post" enctype="multipart/form-data">
                <div class="input-container">
                    <i class="fas fa-signature"></i>
                    <input type="text" class="nombre" placeholder="Nombre" required="" name="nombre">
                </div>
                <div class="input-container">
                    <i class="fas fa-dollar-sign"></i>
                    <input type="text" class="precio" placeholder="Precio" required="" name="precio">
                </div>
                <div class="input-container">
                    <i class="fas fa-mobile-alt"></i>
                    <input type="text" class="marca" placeholder="Marca" required="" name="marca">
                </div>
                <div class="input-container">
                    <i class="fas fa-mobile"></i>
                    <input type="text" class="modelo" placeholder="Modelo" required="" name="modelo">
                </div>
                <div class="input-container">
                    <i class="fas fa-info"></i>
                    <input type="text" class="color" placeholder="Color" required="" name="color">
                </div>
                <div class="input-container">
                    <i class="fas fa-palette"></i>
                    <textarea class="descripcion" placeholder="Descripción" required="" name="descripcion"></textarea>
                </div>
                <h4>Imagen</h4>
                <input type="file" name="file" style="float: left;"> <!--Corregir -->
                <br>
                <br>
                <input type="submit" name="accion" value="Agregar telefono">
            </form>
        </div>
    </div>
</div>

</body>
</html>