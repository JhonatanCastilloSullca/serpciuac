<?php 
session_start();   
  error_reporting(0);
  $varsesion=$_SESSION['usuario'];
  $varusuario=$_SESSION['pass'];

  /*
  
  echo $varsesion;
  echo $varusuario;
  */
  $nombreusuario = traerNombre($varsesion,$varusuario);
  $appaterno = traerApPaterno($varsesion,$varusuario);
  $apmaterno = traerApMaterno($varsesion,$varusuario);

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
                    <a href="registrar_administrativo.php">Registrar Administrativos</a>
                    <a href="registrar_docentes.php">Registrar Docente</a>
                    
                  </div>
              </div> 
              </li>

              <li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Reportes</a>
                  <div class="dropdown-content">
                    <a href="#">Visualizar Reportes</a>
                                        
                  </div>

              </div> 

              </li>

              <li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Cursos</a>
                  <div class="dropdown-content">
                    <a href="crear_idioma.php">Crear Idioma</a>
                    <a href="crear_curso.php">Crear Curso</a>

                                        
                  </div>
              </div> 
              </li>

<li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#" class="dropbtn">Datos</a>
                  <div class="dropdown-content">
                    <a href="datosdirector.php">Visualizar Datos</a>
                                        
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

        <div class="limiter">
		<div class="container-login100" style="background-color: #fff">
			<div class="wrap-login100registrar p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="../logica/registrar_docente_logica" method="POST" class="login100-form validate-form">
					<span class="login100-form-titleh3space login100-form-title p-b-15">
						Sistema ERP <br> Registro de <br> Personal Docente
					</span>
					
					

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Ingrese su Nombre</span>
						<input class="input100" type="text" name="usuario" placeholder="Ingrese su Nombre">
						
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Ingrese su Apellido Paterno</span>
						<input class="input100" type="text" name="apellidop" placeholder="Ingrese su Apellido Paterno">
						
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Ingrese su Apellido Materno</span>
						<input class="input100" type="text" name="apellidom" placeholder="Ingrese su Apellido Paterno">
						
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Ingrese DNI</span>
						<input class="input100" type="text" name="dni" placeholder="Ingrese DNI">
						
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Ingrese su Usuario</span>
						<input class="input100" type="text" name="codigo" placeholder="Ingrese su Usuario">
						
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Ingrese su Contraseña</span>
						<input class="input100" type="password" name="pass" placeholder="Ingrese su Contraseña">
						
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Repita su Contraseña</span>
						<input class="input100" type="password" name="pass1" placeholder="Repita su Contraseña">
						
					</div>
					<div class="p-b-45" ></div>
					
					<!--<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>-->
					
					<div class="container-login100-form-btn p-b-20 ">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn-btn">
								Registrar Personal Docente
							</button>							

						</div>
						
						
					</div>
					

					

					
				</form>
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
