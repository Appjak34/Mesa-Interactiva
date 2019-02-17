<!--php-Block-Code-->
<?php
include './database/conexion.php';
    $conectarDB = new Conexion;
    $resultado = $conectarDB->getData();
?>
<!--endl php-Block-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mesa Interactiva</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/animate.css">
    <link rel="stylesheet" href="./src/css/styles.css">

</head>

<body>
<div class="container-fluid mesa-interactiva">
    <div class="drop-zone">
        <!--Dropzone Canvas-->
        <section class="drop-phone">
            <canvas id="canvasAreaOne" class="canvasArea" width="243" height="470">
                <img id="imgPhoneOne" src="img/intro2.jpg" alt="my Image Canvas">
            </canvas>
        </section>


        <section class="data-phones">

            <div class="content-phone-one">
                <div class="nombre"></div>
                <div class="precio"></div>
                <div class="marca"></div>
                <div class="modelo"></div>
                <div class="descripcion"></div>
                <div class="color"></div>
            </div>

            <div class="content-phone-two">
                <div class="nombre"></div>
                <div class="precio"></div>
                <div class="marca"></div>
                <div class="modelo"></div>
                <div class="descripcion"></div>
                <div class="color"></div>
            </div>

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
            <div class="slider" id="style-scroll">
                <?php while ($data = $resultado->fetch_assoc()) { ?>
                    <div class="slide">
                        <li>
                            <img src='./assets/img/<?php echo $data['Imagen']; ?>'
                                 data-name='<?php echo 'Nobre: '. $data['Nombre'] ?>'
                                 data-price='<?php echo 'Precio: '.$data['Precio'] ?>'
                                 data-company='<?php echo 'Marca: ' .$data['Marca'] ?>'
                                 data-model='<?php echo 'Modelo: ' .$data['Modelo'] ?>'
                                 data-description='<?php echo 'Descripción: '. "<p>{$data["Descripcion"]}</p>"; ?>'
                                 data-color='<?php echo 'Color: '.$data['Color'] ?>'
                                 alt="phone image" class="img-responsive center-block">
                            <p class="text-center"><?php echo $data['Nombre']; ?></p>
                        </li>
                    </div>
                <?php } ?>
            </div>

        </ul>
    </section>

</div>


</body>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script src="./src/js/Telefono.class.js"></script>
<script src="./src/js/MesaInteractiva.class.js"></script>
<script src="./src/js/scripts.js"></script>

</html>