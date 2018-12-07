<?php
include("statics/data/conexion.php");
$active = 0;
$idUsuario = 0;
function login($conn){
	$user = $_POST["usuario"];
	$clave = $_POST["password"];

	$consulta = "select holaMundo(\"" . $user . "\",\"" . $clave . "\")";
	$login = mysqli_query($conn, $consulta);

	if (!$login) {
		die('Consulta no válida: ' . mysqli_error($conn));
	}
	else{
		while ($row = mysqli_fetch_array($login)) {
			$idUsuario = getIdActive($user, $conn);
			return $row[0];
		}
	}
}

function getIdActive($user, $conn){
	$consulta = "select getIdUser(\"" . $user . "\")";
	$resultado = mysqli_query($conn, $consulta);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error($conn));
	}
	else{
		while ($row = mysqli_fetch_array($resultado)) {
			//echo "id: " . $row[0];
			return $row[0];
		}
	}
}

function getRowById($id, $conn, $row, $table){
	$consulta = "select " . $row . " from " . $table . " where idUsuario = " . $id;
	$resultado = mysqli_query($conn, $consulta);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error($conn));
	}
	else{
		while ($row = mysqli_fetch_array($resultado)) {
			//echo "id: " . $row[0];
			return $row[0];
		}
	}
}
$conn = openConectionBD();
$active = login($conn);

if ($active) {
	//echo "BIENVENIDO ";

	$name = $_POST['usuario'];
	//$name = getRowById($idUsuario, $conn, "username", "Usuario");
	echo "<script>alert('BIENVENIDO " . $name . "');window.location='index.php';</script>;";

	//header('Location: index.php');

	//closeConectionBD($conn);
}

else{
	header('Location: login.html');
}


?>
