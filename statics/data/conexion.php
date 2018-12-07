<?php
	function openConectionBD(){
		$servername = "localhost";
		$database = "mydb";
		$username = "admin_PATO";
		$password = "br@nd0sanchez";
		// Create connection
		$conn = mysqli_connect("127.0.0.1:3306", "root", "Dulc3repdzl$", $database);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}else{
			//echo "CONEXION EXITOSA";
			return $conn;
		}
	}

	function closeConectionBD($conection){
		mysqli_close($conection);
		//echo "CONEXION CERRADA";
	}
?>
