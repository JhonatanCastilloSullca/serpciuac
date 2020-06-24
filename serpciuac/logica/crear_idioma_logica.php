<?php 
session_start();

require_once "../../login/logica/conexion.php";
$conexion=conexion();

$varsesion=$_SESSION['usuario'];
$idioma =$_POST["idioma"];




if (idiomarepetido($idioma)==2) {
	echo'<script type="text/javascript">
    alert("Existe un idioma con el mismo nombre registrado");
    window.location.href="../../serpciuac/director/crear_idioma.php";
    </script>';
}
else{
	
		
	$sql="INSERT into idioma (Nombre_Idioma,Usuario_registrado)
				values ('$idioma','$varsesion')";
	echo $resultado = mysqli_query($conexion,$sql);
	if (!$resultado) {
		echo'<script type="text/javascript">
	    alert("Idioma no ha sido Registrado ");
	    
	    </script>';
		
	}
	else{
		echo'<script type="text/javascript">
    alert("Idioma Registrado con Exito");
    window.location.href="../../serpciuac/director/crear_idioma.php";
    </script>';

	}

	}




function idiomarepetido($idioma){
	$conexion=conexion();

	$sql1="SELECT * FROM idioma where Nombre_Idioma='$idioma'";

	
	$resultado1 = mysqli_query($conexion,$sql1);

	if (mysqli_num_rows($resultado1) >0 ){
		return 2;
	}
	else{
		return 3;
	}
}


/*
function DNIrepetido($DNI){
	$conexion=conexion();

	$sql1="SELECT * FROM usuarios where dniUsuario=$DNI";

	
	$resultado1 = mysqli_query($conexion,$sql1);

	if (mysqli_num_rows($resultado1) >0 ){
		return 2;
	}
	else{
		return 3;
	}
}




function Codigorepetido($DNI){

	$sql2="SELECT * FROM usuarios where Usuario='$codigo'";

	$resultado2 = mysqli_query($conexion,$sql1);

	if (mysqli_num_rows($resultado2) >0 ){
		return 1;
	}
	else{
		return 2;
	}
}
*/

?>