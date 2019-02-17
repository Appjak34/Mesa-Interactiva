<?php 

class Conexion{
	
	private $server = 'localhost';
	private $username = 'root';
	private $password = 'root';
	private $database = 'mesa';


	public function conectarBD()
	{
		$conexion = new mysqli($this->server, $this->username, $this->password, $this->database);
    
        /* verificar la conexión */
		if (mysqli_connect_errno()) {
			printf("Falla de la conexión : %s\n", $mysqli->connect_error);
			exit();
		} else {
			return $conexion;
            /* liberar la serie de resultados */
			$resultado->free();
            /* cerrar la conexión */
			$mysqli->close();
		}
	}

	public function getData(){
		$conexion = $this->conectarBD();
		$conexion->set_charset("utf8"); // corrige el problema de caracteres de la consulta
		$consulta = "SELECT * FROM telefono";
		$resultado = $conexion->query($consulta);
		return $resultado;
	}

}

 ?>