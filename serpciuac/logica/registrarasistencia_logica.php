<?php 

session_start();   
  $varsesion=$_SESSION['usuario']; 
  $varusuario=$_SESSION['pass'];
$var =$varsesion;

  $conexion = mysqli_connect('localhost','root','','idiomas');
  error_reporting(0);

  
  

  
$idusuarioa = traerIdUsuario($varsesion,$varusuario);	
$idselectcursos = $_POST['idselectcursos'];
$alumnoslista = $_POST['alumnoslista'];
$fecha= $_POST['fecha'];
$radio1= $_POST['radio1'];


$idmatriculado= traeralumnoMatriculado($alumnoslista,$idselectcursos);




$sql="INSERT into asistencia (Id_Alumno,Id_Matriculado,Id_Curso,Id_Docente,Tipo_Asistencia,fecha)
				values ('$alumnoslista','$idmatriculado','$idselectcursos','$idusuarioa','$radio1','$fecha') ";
echo mysqli_query($conexion,$sql);



function traeralumnoMatriculado($Id_Usuario,$Id_Curso){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT id_matriculados FROM matriculados WHERE id_usuario = '$Id_Usuario' and  Id_Curso = '$Id_Curso'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }

 function traerIdUsuario($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Id_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }



 ?>
