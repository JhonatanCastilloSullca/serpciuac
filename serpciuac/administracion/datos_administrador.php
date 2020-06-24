<?php 
session_start();   
  error_reporting(0);
  $varsesion=$_SESSION['usuario'];
  $varusuario=$_SESSION['pass'];
  $url= $_SERVER["REQUEST_URI"];

  /*
  
  echo $varsesion;
  echo $varusuario;
  */
  $nombreusuario = traerNombre($varsesion,$varusuario);
  $appaterno = traerApPaterno($varsesion,$varusuario);
  $apmaterno = traerApMaterno($varsesion,$varusuario);
  $rago = traerRango($varsesion,$varusuario);
  $DNI = traerDNI($varsesion,$varusuario);
  $usuarioid = traerUsuario($varsesion,$varusuario);

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
    <meta charset="utf-8">
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
                <h1><a href="../director.php" class="logo">Sistema ERP</a></h1>
                <h2 class="h2princ" >Centro de Idiomas UAC</h2>
            <ul class="list-unstyled components mb-5">
              

              
                <li>
                <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Registrar</a>
                  <div class="dropdown-content">
                    <a href="registrar_director.php">Registrar Director</a>
                    
                    
                  </div>
              </div> 
              </li>


<li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#" class="dropbtn">Datos</a>
                  <div class="dropdown-content">
                    <a href="datos_administrador.php">Visualizar Datos</a>
                                        
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
                
                <br>
                <h2 class="mb-4">  <?php echo "Bienvenido Administrador ". $nombreusuario." ".$appaterno." ".$apmaterno; ?> </h2>
                
                 <form class="form-horizontal" method="POST" >
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>Nombre: </b> <?php echo $nombreusuario; ?>  </label>

                                        
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>Apellido Paterno: </b> <?php echo $appaterno; ?>  </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>Apellido Materno: </b> <?php echo $apmaterno; ?>  </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>DNI: </b> <?php echo $DNI; ?>  </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>Tipo de Usuario: </b> <?php echo $rago; ?>  </label>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>Usuario: </b> <?php echo $usuarioid; ?>  </label>
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>Contraseña: </b> <?php echo $varusuario; ?>  </label>
                    <input class="nodisplay" type="text" name="pass1" value="<?php echo $nombreusuario ?>" >
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="submitform btn btn-default" data-toggle="modal" data-target='#exampleModal'>Modificar Datos</button>
                    </div>
                  </div>

                  
                  
                </form>
              </div>     



              <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="form-horizontal" action="../logica/modificardatos.php" method = "post" >
                  
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>Contraseña Actual:  </label>
                    <input class="form-control" type="password" name="pass1"  >
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>Nueva Contraseña:  </label>
                    <input class="form-control" type="password" name="pass2"  >
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-6" for="email"><b>Repita Contraseña:  </label>
                    <input class="form-control" type="password" name="pass3"  >
                  </div>
                  

                    <td><button class="btn btn-primary" type="submit" name="btn_inscribir">Guardar datos</button></td>
                  
                </form>

        
      </div>
      
    </div>
  </div>
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


  function traerRango($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Tipo_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }

  function traerDNI($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT dniUsuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }
    function traerUsuario($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
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
