<?php 
require_once "../../login/logica/conexion.php";
$conexion=conexion();
session_start();   
  error_reporting(0);
  $varsesion=$_SESSION['usuario'];
  $varusuario=$_SESSION['pass'];

$passw1 =$_POST["pass1"];
$passw2 =$_POST["pass2"];
$passw3 =$_POST["pass3"];


if ($passw1 == $varusuario) {


    
  if ($passw3==$passw2) {
    
   $sql="UPDATE usuarios SET Contrasena = '$passw3' Where Usuario = '$varsesion'"; 
        
  echo $resultado = mysqli_query($conexion,$sql);
    if (!$resultado) {
      echo'<script type="text/javascript">
        alert("Usuario no ha sido Registrado ");

        </script>';
      
    }
    else{
      echo'<script type="text/javascript">
      alert("Registrado con Exito Vuelva a loguearse ");
      window.location.href="cerrarsesion.php";
      </script>';

    }
  }
  else{
    echo'<script type="text/javascript">
      alert("Las contraseñas deben ser iguales ");
      window.location.href="cerrarsesion.php";
      </script>';
  }
  
}
else{
  echo'<script type="text/javascript">
    alert("Contraseña incorrecta sera redirigido al loguin ");
    window.location.href="cerrarsesion.php";
    </script>';
}

    


