<?php 
session_start();

require_once "../../login/logica/conexion.php";
$conexion=conexion();

$varsesion=$_SESSION['usuario'];
$nombrehorario =$_POST["nombrehorario"];
$horarioini =$_POST["horarioini"];
$horariofin =$_POST["horariofin"];




if (horariorepetido($nombrehorario)==2) {
	echo'<script type="text/javascript">
    alert("Existe un Horario con el mismo nombre registrado");
    window.location.href="../../serpciuac/director/crear_idioma.php";
    </script>';
}
else{
	
		
	$sql="INSERT into horario (Nombre_Horario,Hora_Inicio,Hora_Fin)
				values ('$nombrehorario','$horarioini','$horariofin')";
	echo $resultado = mysqli_query($conexion,$sql);
	if (!$resultado) {
		echo'<script type="text/javascript">
	    alert("Horario no ha sido Registrado ");
	    
	    </script>';
		
	}
	else{
		echo'<script type="text/javascript">
    alert("Horario Registrado con Exito");
    window.location.href="../../serpciuac/director/crear_idioma.php";
    </script>';

	}

	}




function horariorepetido($idioma){
	$conexion=conexion();

	$sql1="SELECT * FROM horario where Nombre_Horario='$idioma'";

	
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