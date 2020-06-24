<?php 



function conexion()
{
	return $conexion=mysqli_connect("localhost","root","","idiomas");
}
$conexion = conexion();
$conexion -> set_charset("utf8");

if (!$conexion) {
	

	/*
	echo "Error de Conexion";
	header("Location:../../serpciuac/estudiantes.php");*/
}
else{
	
	//echo "Conectado A la Base de datos";
}


?>