<?php
session_start();
	include "./database/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Nuevo Dispositivo</title>
</head>
<body>

	<<h1>Agregar un Nuevo Dispositivo</h1>
	<form action="altadispositivo.php" method = "post" enctype="multipart/form-data">
		<fieldset>
			Imagen<br>
			<input type="file" name="file">
		</fieldset>
				<fieldset>
			Nombre<br>
			<input type="text" name="nombre">
		</fieldset>
		<fieldset>
			Precio<br>
			<input type="text" name="precio">
		</fieldset>
		<fieldset>
			Marca<br>
			<input type="text" name="marca">
		</fieldset>
		<fieldset>
			Modelo<br>
			<input type="text" name="modelo">
		</fieldset>
		<fieldset>
			Descripción<br>
			<input type="text" name="descripcion">
		</fieldset>
		<fieldset>
			Color<br>
			<input type="text" name="color">
		</fieldset>
		<input type="submit" name="accion" value="Enviar" class="aceptar">
	</form>	
	
	
</body>
</html>