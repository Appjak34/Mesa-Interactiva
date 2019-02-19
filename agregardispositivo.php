<?php
session_start();
	include "./database/conexion.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Flat Flash Contact Form Responsive Widget Template | Home :: w3layouts</title>
 <link rel="stylesheet" href="./src/css/style-form.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,300,600,700' rel='stylesheet' type='text/css'>

<!--web-fonts-->
</head>
<body>
		<!---header--->
		<div class="header">
			<h1>Agregar Dispositivo</h1>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
				<div class="main-section">
				<div class="agregar-mobil-form"n>
					<h2>Registro de productos</h2>
					<p>Proceda a llenar los datos del telefono</p>
						<span></span>
					<form action="altadispositivo.php" method = "post" enctype="multipart/form-data">
						<h4>Nombre</h4>
						<input type="text" class="nombre" placeholder="Moto x4" required="" name="nombre">
						<h4>Precio</h4>
						<input type="text" class="precio" placeholder="" name="precio">
						<h4>Marca</h4>
						<input type="text" class="marca" placeholder="Motorola" name="marca">
						<h4>Modelo</h4>
						<input type="text" class="modelo" placeholder="Modelo" name = "modelo">
						<h4>Color</h4>
						<input type="text" class="color" placeholder="Negro" name = "color">
						<h4>Agrega una descripción</h4>
						<textarea class="descripcion" placeholder="Message" name="descripcion"></textarea>
						<h4>Imagen</h4>
						<input type="file" name="file" style="float: left;">
						<br>
						<br>
						<input type="submit" name= "accion" value="Agregar telefono" >
					</form>
				</div>
				</div>
			</div>
			<div class="footer">
			<p>All rights reserved | Mesa Interactiva <a href="!#"></a></p>
		</div>
	
	
</body>
</html>