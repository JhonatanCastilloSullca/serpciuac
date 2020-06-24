<?php 
session_start();

require_once "../../login/logica/conexion.php";
$conexion=conexion();

$varsesion=$_SESSION['usuario'];
$nombrecurso =$_POST["nombrecurso"];
$idioma =$_POST["idioma"];
$horario =$_POST["horario"];
$docente =$_POST["docente"];
$aula =$_POST["aula"];






if (Cursorepetido($nombrecurso)==2) {
	echo'<script type="text/javascript">
    alert("Existe un Curso con el mismo nombre registrado");
    window.location.href="../../serpciuac/director/crear_curso.php";
    </script>';
}
else{
	

	$sql="INSERT into curso (Nombre_Curso,Id_Idioma,Id_Horario,Id_Docente,Aula,Usuario_registrado)
				values ('$nombrecurso','$idioma','$horario','$docente','$aula','$varsesion')";
	echo $resultado = mysqli_query($conexion,$sql);
	if (!$resultado) {
		echo'<script type="text/javascript">
	    alert("Idioma no ha sido Registrado ");
	    window.location.href="../../serpciuac/director/crear_curso.php";
	    </script>';/*
	    echo $nombrecurso;
	    echo $idioma;
	    echo $horario;
	    echo $docente;
	    echo $aula;
	    echo $varsesion;
*/
		
	}
	else{
		echo'<script type="text/javascript">
    alert("Idioma Registrado con Exito");
    window.location.href="../../serpciuac/director/crear_curso.php";
    </script>';

	}

	}




function Cursorepetido($nombrecurso){
	$conexion=conexion();

	$sql1="SELECT * FROM curso where Nombre_Curso='$nombrecurso'";

	
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