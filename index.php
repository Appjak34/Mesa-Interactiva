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
        <section class="data-phones">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum recusandae amet ipsa, iste dolorem veniam, est distinctio consequuntur non eligendi ab ratione eveniet totam aperiam tempora magnam quisquam dolorum praesentium?
            Eaque dolore quam assumenda saepe sapiente harum quod alias et excepturi repudiandae architecto sunt sequi ducimus nemo id quas, praesentium quasi, doloremque, vitae natus obcaecati deserunt. Maxime laboriosam consequatur animi?
            Illum fugiat, ipsam natus expedita autem cum repellat aperiam quae! Aliquid voluptatum cum similique illum labore assumenda repudiandae at quis dicta consequuntur neque, beatae temporibus animi libero ex? Laboriosam, similique.
            Soluta quae commodi temporibus doloremque aliquam quibusdam vitae delectus ullam, tempore nobis, vero nostrum sint alias odio rem, omnis assumenda exercitationem eaque! At provident nesciunt iusto modi quibusdam odit eius?
            Nam, accusamus consectetur sunt veniam ab maxime fugit quasi ad sequi aperiam voluptates eos vero aliquid facere consequuntur perspiciatis quam assumenda nulla recusandae harum dolor ea ex. Ipsum, qui alias!
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
                    $consulta="SELECT * FROM telefono";
                    $query=mysqli_query($conexion,$consulta);

                    while( $data=mysqli_fetch_array($query, MYSQLI_ASSOC) ){
                ?>
                    <div>
                        <li>
                            <img src='./assets/img/<?php echo $data['Imagen'];?>' alt="phone image" class="img-responsive center-block">
                            <p class="text-center"><?php echo $data['Nombre'];?></p>
                        </li>
                    </div>
                <?php } ?>
        </div>
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