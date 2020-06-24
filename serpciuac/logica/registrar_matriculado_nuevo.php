<?php 
session_start();   
  //error_reporting(0);
  $varsesion=$_SESSION['usuario'];
  $varusuario=$_SESSION['pass'];
require_once "../../login/logica/conexion.php";


$conexion=conexion();

$id_usuario = traeIDUSUARIo($varsesion,$varusuario);
$idioma =$_POST["idiomaenviar"];
$horario =$_POST["horario"];
$grado =$_POST["grado"];
$nota = '0';
$codigovoucher =$_POST["codigo_voucher"];
$linkfoto =$_POST["link_foto_voucher"];
$fecha = date("Y-m-d");
$idcurso = traeridCurso($idioma,$horario);
			




			
$sql = " INSERT into matriculados (id_usuario,Id_Idioma,Id_Curso,Id_Horario,Id_Grado,Nota,N_Voucher,imagen_Vouches,Fecha)
			values ('$id_usuario','$idioma','$idcurso','$horario','$grado','$nota','$codigovoucher','$linkfoto','$fecha')";

						
			echo $resultado = mysqli_query($conexion,$sql);
			
			if (!$resultado) {

				echo'<script type="text/javascript">
			    alert("No ha sido Registrado como alumno Nuevo ");
			    window.location.href="../estudiantes.php";

			    
			    </script>';
				
			}
			else{
				$sql1="INSERT into notas (Id_Alumno, Id_Docente,Id_Curso,Nota1,Nota2,Nota3,Nota4,Promedio) VALUES('$id_usuario','0','$idcurso','0','0','0','0','0')";
	echo $resultado1 = mysqli_query($conexion,$sql1);
				echo'<script type="text/javascript">
		    alert("Registrado con Exito");
		    window.location.href="../estudiantes/revisar_matricula.php";
		    
		    </script>';

			}

	
	


function traeIDUSUARIo($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Id_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
}

function traeridCurso($Id_Idioma,$Id_Horario){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Id_Curso FROM curso WHERE Id_Idioma = '$Id_Idioma' and  Id_Horario = '$Id_Horario'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
}


function Idiomarepetido($usuari){
	$conexion=conexion();

	$sql1="SELECT * FROM matriculados where id_usuario=$usuari";

	
	$resultado1 = mysqli_query($conexion,$sql1);

	if (mysqli_num_rows($resultado1) >0 ){
		return 2;
	}
	else{
		return 3;
	}
}
function Idrepetido($usuari){
	$conexion=conexion();

	$sql1="SELECT * FROM matriculados where id_usuario=$usuari";

	
	$resultado1 = mysqli_query($conexion,$sql1);

	if (mysqli_num_rows($resultado1) >0 ){
		return 2;
	}
	else{
		return 3;
	}
}


function Usuariorepetido($codigo){
	$conexion=conexion();

	$sql1="SELECT * FROM usuarios where Usuario=$codigo";

	
	$resultado1 = mysqli_query($conexion,$sql1);

	if (mysqli_num_rows($resultado1) >0 ){
		return 2;
	}
	else{
		return 3;
	}
}

/*
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