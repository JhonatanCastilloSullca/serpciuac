<?php 
require_once "../../login/logica/conexion.php";
$conexion=conexion();
session_start();   
  error_reporting(0);
  $varsesion=$_SESSION['usuario'];
  $varusuario=$_SESSION['pass'];

$cursoid =$_POST["idselectcursos"];
$alumnoslista =$_POST["alumnoslista"];
$iddocente=traerIdUsuario($varsesion,$varusuario);




$nota1 =$_POST["n1"];
$nota2 =$_POST["n2"];
$nota3 =$_POST["n3"];
$nota4 =$_POST["n4"];


if ($nota1=="") {
	$nota1=0;
}
if ($nota2=="") {
	$nota2=0;
}
if ($nota3=="") {
	$nota3=0;
}
if ($nota4=="") {
	$nota4=0;
}

$promedio=($nota1+$nota2+$nota3+$nota4)/4;
    
   $sql="UPDATE notas SET Promedio = $promedio, Id_Docente=$iddocente, Nota1 = '$nota1',Nota2 = '$nota2',Nota3 = '$nota3',Nota4 = '$nota4' Where Id_Curso=$cursoid and Id_Alumno='$alumnoslista'"; 
        
  echo $resultado = mysqli_query($conexion,$sql);
    if (!$resultado) {
      echo'<script type="text/javascript">
        alert("Usuario no ha sido Registrado ");

        </script>';
      
    }
    else{
      echo'<script type="text/javascript">
      alert("Registrado con Exito Vuelva a loguearse ");
      window.location.href="../docentes/registrarnotas.php";
      </script>';

    }
    

 function traerIdUsuario($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Id_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }