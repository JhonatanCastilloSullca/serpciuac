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


$sql="SELECT * FROM notas Where Id_Curso='$idioma'";
$result=mysqli_query($conexion,$sql);




//$sql="SELECT id_matriculados, id_usuario FROM matriculados Where Id_Curso='$idioma' ";
//$result=mysqli_query($conexion,$sql);

$cadena ="<table class='table table-striped '> <thead class='thead-dark'><tr><td scope='col'>Alumno</td><td scope='col'>Nota 1</td><td scope='col'>Nota 2</td><td scope='col'>Nota 3</td><td scope='col'>Nota 4</td><td scope='col'>Promedio</td></tr> </thead>";

while ($mostrar =mysqli_fetch_array($result)) {
//while ($ver=mysqli_fetch_row($result)) {
	$nombre =traerNombre($mostrar['Id_Alumno']);
	$cadena = $cadena.'<tr><td>'.$nombre.'</td> <td>'.$mostrar['Nota1'].'</td> <td>'.$mostrar['Nota2'].'</td> <td>'.$mostrar['Nota3'].'</td> <td>'.$mostrar['Nota4'].'</td> <td>'.$mostrar['Promedio'].'</td></tr>';


}

echo $cadena."</table>";


function traerNombre($idalumno){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Nombre_Usuario FROM usuarios WHERE Id_Usuario = '$idalumno' ";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }

 ?>

