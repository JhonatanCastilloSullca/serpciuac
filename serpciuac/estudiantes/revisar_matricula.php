<?php 

session_start();   
  //error_reporting(0);
  $varsesion=$_SESSION['usuario'];
  $varusuario=$_SESSION['pass'];

  $usuario =$varsesion;
  $pass =$varusuario;
  $idiomas='a';
  
  $idiomas = Traer_Idioma($usuario);
  $grado = Traer_Curso($usuario);
  $horario = Traer_Horario($usuario);


  $nombreusuario = nombre($usuario);
  $appaterno = apellidop($usuario);
  $apmaterno = apellidom($usuario);
 

  /*
  
  echo $varsesion;
  echo $varusuario;
  */



 if($varsesion == null || $varsesion=''){

  echo'<script type="text/javascript">
    alert("Usted no tiene acceso a este sitio");
    window.location.href="../../login/index.html";
    </script>';

  
  die();
 }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistema ERP Centro de Idiomas</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/styleindex.css">



        <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../login/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../../login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="../../login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../../login/css/util.css">
  <link rel="stylesheet" type="text/css" href="../../login/css/main.css">
<!--===============================================================================================-->


  </head>
  <body>
        
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar" class="active">
                <div class="custom-menu">
            
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              
            </button>
                </div>
            <div class="p-4">
                <h1><a href="../estudiantes.php" class="logo">Sistema ERP</a></h1>
                <h2 class="h2princ" >Centro de Idiomas UAC</h2>
            <ul class="list-unstyled components mb-5">
              

              
                <li>
                <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Matricula</a>
                  <div class="dropdown-content">
                    <a href="revisar_matricula.php">Constancia de Matricula</a>
                    <a href="../estudiantes/registrar_matricula.php">Registrar Matricula</a>
                    
                  </div>
              </div> 
              </li>

              <li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Notas</a>
                  <div class="dropdown-content">
                    <a href="#">Visualizar Notas</a>
                                        
                  </div>

              </div> 

              </li>

              <li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Asistencia</a>
                  <div class="dropdown-content">
                    <a href="#">Visualizar Asistencia</a>
                                        
                  </div>
              </div> 
              </li>

<li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#" class="dropbtn">Datos</a>
                  <div class="dropdown-content">
                    <a href="datosestudiantes.php">Visualizar Datos</a>
                                        
                  </div>
              </div> 
              </li>
              
<!--
              <li>
                #-- class="active" 
                <a href="#"><span class="mr-3"></span> Datos</a>

              </li>
              <li>

              </li>
               
              
              <li>
              <a href="#"><span class="mr-3"></span> Notas</a>
              </li>
            -->

              
              

             
            </ul>

            

            <div class="footer">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <b class="h2princ">Pig'Software</b><i class="icon-heart" aria-hidden="true"></i>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                <a href="../../serpciuac/logica/cerrarsesion.php" >Cerrar Sesión</a>
            </div>

          </div>
        </nav>

        <!-- Page Content  -->
         
         <div id="content" class="p-4 p-md-5 pt-5">
                <h2 class="mb-4">  <?php echo "Bienvenido Estudiante ". $nombreusuario." ".$appaterno." ".$apmaterno; ?> </h2>
                

                <form class="form-horizontal" method="POST" action="../logica/crear_matricula.php">

                  
                  <div class="form-group">        
                    <div class=" col-sm-10">
                      <label class="col-sm-10">Idioma: <?php echo $idiomas; ?> </label><br>
                      <label class="col-sm-10">Nivel: <?php echo $grado; ?> </label><br>
                      <label class="col-sm-10">Horario: <?php echo $horario; ?> </label><br>
                        
                      
                       
                      
                    </div>
                  </div>
                 
                </form>

              

              </div>

        <!--Page Content Final-->





        </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>

    <!--===============================================================================================-->
  <script src="../../login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="../../login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="../../login/vendor/bootstrap/js/popper.js"></script>
  <script src="../../login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="../../login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="../../login/vendor/daterangepicker/moment.min.js"></script>
  <script src="../../login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="../../login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="../../login/js/main.js"></script>



  </body>
</html>
<?php 

 function traerIdUsuario($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Id_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }


   function Traer_Idioma($usuario){
    $conexion= mysqli_connect("localhost","root","","idiomas");

    $sql = "SELECT Nombre_Idioma FROM idioma WHERE Id_idioma =(SELECT Id_idioma FROM matriculados WHERE id_usuario =(SELECT Id_Usuario FROM usuarios WHERE Usuario = '$usuario' ))";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }
  function Traer_Horario($usuario){

    $conexion= mysqli_connect("localhost","root","","idiomas");
    $aa = $conexion->query("SET NAMES 'utf8'");
    
    
    $sql = "SELECT Nombre_Horario FROM horario WHERE Id_Horario =(SELECT Id_Horario FROM matriculados WHERE id_usuario =(SELECT Id_Usuario FROM usuarios WHERE Usuario = '$usuario' ))";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }

  function Traer_Curso($usuario){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Nombre_Curso FROM curso WHERE Id_Curso =(SELECT Id_Curso FROM matriculados WHERE id_usuario =(SELECT Id_Usuario FROM usuarios WHERE Usuario = '$usuario' ))";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }

  function nombre($usuario){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Nombre_Usuario FROM usuarios WHERE Usuario = '$usuario' ";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }
  function apellidop($usuario){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT ApPaterno_Usuario FROM usuarios WHERE Usuario = '$usuario' ";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }
  function apellidom($usuario){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT ApMaterno_Usuario FROM usuarios WHERE Usuario = '$usuario' ";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }
  
?>
