<?php

ob_start(); //mala practica
include("index.php");
require_once("./database/conexion.php");

class NuevoDispositivo{
	
	private $conexion;
	private $imagen;
	private $nombre;
	private $marca;
	private $modelo;
	private $precio;
	private $color;
	private $descripcion;

	function __construct(){
		$nuevaConexion = new Conexion();
		$this->conexion = $nuevaConexion->conectarBD();
		$this->conexion->set_charset("utf8");
	}

	public function insertaData(){

			if (!isset($_POST['nombre']) && !isset($_POST['precio']) && !isset($_POST['marca']) && !isset($_POST['modelo']) && !isset($_POST['descripcion']) && !isset($_POST['color'])) {
				header("Location: agregardispositivo.php");
			} else {
				$allowedExts = array("gif", "jpeg", "jpg", "png");
				$temp = explode(".", $_FILES["file"]["name"]);
				$extension = end($temp);
				//$imagen = "";
				$random = rand(1, 999999);
				if ((($_FILES["file"]["type"] == "image/gif")
					|| ($_FILES["file"]["type"] == "image/jpeg")
					|| ($_FILES["file"]["type"] == "image/jpg")
					|| ($_FILES["file"]["type"] == "image/pjpeg")
					|| ($_FILES["file"]["type"] == "image/x-png")
					|| ($_FILES["file"]["type"] == "image/png"))) {
					//Verificamos que sea una imagen
					if ($_FILES["file"]["error"] > 0) {
					//verificamos que venga algo en el input file
						echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
					} else {
					//subimos la imagen

						$this->imagen = $random . '_' . $_FILES["file"]["name"];
							if (file_exists("./assets/img/" . $random . '_' . $_FILES["file"]["name"])) {
								echo $_FILES["file"]["name"] . " Ya existe. ";
							} else {
								move_uploaded_file(
									$_FILES["file"]["tmp_name"],
									"./assets/img/" . $random . '_' . $_FILES["file"]["name"]
								);
							echo "Archivo guardado en " . "./assets/img/" . $random . '_' . $_FILES["file"]["name"];
							$this->nombre = $_POST['nombre'];
							$this->precio = $_POST['precio'];
							$this->marca = $_POST['marca'];
							$this->modelo = $_POST['modelo'];
							$this->descripcion = $_POST['descripcion'];
							$this->color = $_POST['color'];

							$consulta = "INSERT INTO `telefono`(`id`,`Imagen`,  `Nombre`,  `Precio`,  `Marca`,  `Modelo`,  `Descripcion` , `Color`) 
										VALUES(NULL,
												'$this->imagen',
												'$this->nombre',
												'$this->precio',
												'$this->marca',
												'$this->modelo',
												'$this->descripcion',
												'$this->color')";

						if ($this->conexion->query($consulta) == true) {
							echo "Telefono insertado ! ";
							$this->conexion->close();
						} else {
							echo "Error: " . $consulta . "<br>" . mysqli_error($this->conexion);
						}
							header("Location: agregardispositivo.php");
						}
					}
				} else {
					echo "Formato no soportado";
				}

		}
	}

}
	$nuevoDispositivo = new NuevoDispositivo;
	$nuevoDispositivo->insertaData();
?>