<?php
	include ("./database/conexion2.php");
	if(!isset($_POST['nombre']) &&  !isset($_POST['precio']) && !isset($_POST['marca']) &&  !isset($_POST['modelo']) &&  !isset($_POST['descripcion']) &&  !isset($_POST['color'])){
		header("Location: agregardispositivo.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("./assets/img/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"./assets/img/" .$random.'_'.$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "./assets/img/" .$random.'_'. $_FILES["file"]["name"];
		      		$nombre=$_POST['nombre'];
		      		$precio=$_POST['precio'];
		      		$marca=$_POST['marca'];
		      		$modelo=$_POST['modelo'];
					$descripcion=$_POST['descripcion'];
					$color=$_POST['color'];
					$Sql="insert into telefono (Imagen,Nombre,Precio, Marca,Modelo,Descripcion,color) values(
							'".$imagen."',
							'".$nombre."',
							'".$precio."',
							'".$marca."',
							'".$modelo."',
							'".$descripcion."',
							'".$color."')";
					mysqli_query($conexion,$Sql);
					header ("Location: agregardispositivo.php");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>