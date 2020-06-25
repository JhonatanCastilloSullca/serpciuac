<?php 
session_start();   
  //error_reporting(0);
  $varsesion=$_SESSION['usuario']; 
  $varusuario=$_SESSION['pass'];

function conexion()
{
  return $conexion=mysqli_connect("localhost","root","","idiomas");
}
$conexion = conexion();
$conexion -> set_charset("utf8");

$idioma=$_POST['idioma'];




$sql="SELECT Id_Asistencia, fecha FROM asistencia Where Id_Curso='$idioma' ";
$result=mysqli_query($conexion,$sql);

$cadena ="<label class='control-label col-sm-20' for='email'>Seleccione Alumno:</label> <select class='control-label col-sm-20 selesctcss ' id='alumnoslista' name='alumnoslista'>";


while ($ver=mysqli_fetch_row($result)) {
  $nombre =traerNombre($ver[1]);
  $cadena = $cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
  
}

echo $cadena."</select>";


function traerNombre($idalumno){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Nombre_Usuario FROM usuarios WHERE Id_Usuario = '$idalumno' ";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }

 ?>

