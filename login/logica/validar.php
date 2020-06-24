<?php 

session_start();

$usuario=$_POST['username'];
$clave=$_POST['pass'];

$_SESSION['usuario'] = $usuario;
$_SESSION['pass'] = $clave;





$conexion=mysqli_connect("localhost","root","","idiomas");

$consulta ="SELECT * FROM usuarios WHERE Usuario ='$usuario' and Contrasena='$clave'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
  	$tipo = traertipo($usuario,$clave);

  

	if ($tipo=='Administrador') {
    header("Location:../../serpciuac/administracion.php");
	}else if ($tipo=='Estudiante') {
    
		header("Location:../../serpciuac/estudiantes.php");
    
	}else if ($tipo=='Director'){
    
		header("Location:../../serpciuac/director.php");
    
	}
  else if ($tipo=='Administrativo'){
    
    header("Location:../../serpciuac/administrativo.php");
  }
  else if ($tipo=='Docente'){
    
    header("Location:../../serpciuac/docentes.php");
  }
	//-------Aumentar Tipos de Usuario

	
	echo $tipo;
}
else{
	echo'<script type="text/javascript">
      alert("Usuario y Contraseña Invalidos");
      window.location.href="../index.html";
      </script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);



function traertipo($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Tipo_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }

function traerango($usuario,$password){
    $conexion= mysqli_connect("localhost","root","","uac");
    $sql = "SELECT rango FROM usuarios WHERE usuario = '$user' and  clave = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }

  function traerNombre($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Nombre_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }
  function traerApPaterno($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT ApPaterno_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }
  function traerApMaterno($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT ApMaterno_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }


?>