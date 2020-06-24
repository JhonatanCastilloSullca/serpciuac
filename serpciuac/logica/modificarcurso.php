<?php 
require_once "../../login/logica/conexion.php";
$conexion=conexion();
session_start();   
  error_reporting(0);
  $varsesion=$_SESSION['usuario'];
  $varusuario=$_SESSION['pass'];
$docente=$_POST["docente"];
$aula =$_POST["aula"];
$curso =$_POST["curso"];

    
   $sql="UPDATE curso SET Id_Docente = '$docente', Aula ='$aula' Where Id_Curso = '$curso'"; 
        
  echo $resultado = mysqli_query($conexion,$sql);
    if (!$resultado) {
      echo'<script type="text/javascript">
        alert("Existe un error con el sistema actualize su sesión ");
        window.location.href="cerrar_sesion.php";

        </script>';
      
    }
    else{
      echo'<script type="text/javascript">
      alert("El curso fue actualizado con exito");
      window.location.href="../director/crear_curso.php";
      </script>';

    }