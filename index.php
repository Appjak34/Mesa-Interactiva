<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mesa Interactiva</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/styles.css">

</head>
<body>
<div class="container-fluid">
    <div class="drop-zone">
        <!--Dropzone Canvas-->
        <section class="drop-phone">
            <canvas id="canvasAreaOne" class="canvasArea" width="243" height="470">
                <img id="imgPhoneOne" src="img/intro2.jpg" alt="my Image Canvas">
            </canvas>
        </section>
        <section class="drop-phone">
            <canvas id="canvasAreaTwo" class="canvasArea" width="243" height="470">
                <img id="imgPhoneTwo" src="img/intro2.jpg" alt="my Image Canvas">
            </canvas>
        </section>
    </div>

    <!-- list draggable Image -->
<section class="caruosel-phones">
    <ul class="listImg">
        <div class="siema">
               <?php
            include './database/conexion.php';
            $consulta="select * from telefono";
            $query=mysqli_query($conexion,$consulta);
            while($f=mysqli_fetch_array($query,MYSQLI_ASSOC)){
            ?>
            <div>
                <li>
                    <img src='./assets/img/<?php echo $f['Imagen'];?>' alt="phone image" class="img-responsive center-block">
                    <p class="text-center"><?php echo $f['Nombre'];?></p>
                </li>
            </div>
            <?php
            }
            ?>
        </div>

        <div class="clearfix"></div>
    </ul>
</section>

</div>

<!--prueba-->

</body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="./src/js/siema.min.js"></script>
<script src="./src/js/scripts.js"></script> <!-- https://pawelgrzybek.github.io/siema/#api -->

</html>