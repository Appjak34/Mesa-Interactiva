<?php 

	$server = 'localhost';
	$username = 'root';
	$password= '';
	$database= 'mesa';
	$conexion=mysqli_connect($server,$username,$password)or die("No se ha podido establecer la conexion");
	$sdb=mysqli_select_db($conexion,$database)or die("La base de datos no existe");
	try {
		$conn= new PDO("mysql:host=$server;dbname=$database;", $username, $password);
	} catch (PDOException $e) {

		die('Connection failed: '.$e->getMessage());
	}
 ?>