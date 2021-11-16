<?php
include("db.php");

if(isset($_POST['registro'])){
	if(strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 ){
		$name = trim($_POST['name']);
		$apellido = trim($_POST['apellido']);
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO datos( nombre, apellido, fecha) VALUES ('$name','$apellido','$fechareg')";
		$resultado = mysqli_query($conex,$consulta);
	}
}
?>