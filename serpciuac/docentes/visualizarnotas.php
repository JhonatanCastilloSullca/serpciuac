<?php 

require_once "../../login/logica/conexion.php";
$conexion=conexion();
session_start();   
  //error_reporting(0);
  $varsesion=$_SESSION['usuario']; 
  $varusuario=$_SESSION['pass'];

  $usuarioid = traerIdUsuario($varsesion,$varusuario);
  $idcursos = traerIDCursos($varsesion);

/*


  echo $varsesion;
  echo $varusuario;
*/
  $nombreusuario = traerNombre($varsesion,$varusuario);
  $appaterno = traerApPaterno($varsesion,$varusuario);
  $apmaterno = traerApMaterno($varsesion,$varusuario);
  $rago = traerRango($varsesion,$varusuario);
  $DNI = traerDNI($varsesion,$varusuario);
  

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

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>


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
                <a href="#"  class="dropbtn">Notas</a>
                  <div class="dropdown-content">
                    <a href="visualizarnotas.php">Visualizar Notas</a>
                    <a href="registrarnotas.php">Registrar Notas</a>

                                        
                  </div>

              </div> 

              </li>

              <li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Asistencia</a>
                  <div class="dropdown-content">
                    <a href="registrarasistencia.php">Registrar Asistencia</a>
                    <a href="visualizarasistencia.php">Visualizar Asistencia</a>
                                        
                  </div>
              </div> 
              </li>

<li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#" class="dropbtn">Datos</a>
                  <div class="dropdown-content">
                    <a href="docentes/datosdocentes.php">Visualizar Datos</a>
                                        
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
                

                <form class="form-horizontal" action="../logica/registrarnotas_logica.php" method = "post" >
                  
                  <div class="form-group col-sm-10">
                    <label class="control-label col-sm-20" for="email">Seleccione Idioma:</label>                    
                    <br>
                    <select class="control-label col-sm-20 selesctcss " id="idselectcursos"  name="idselectcursos" >                      
                      <?php 
                        
                  /*$consulta ="SELECT * FROM idioma WHERE Id_idioma = (SELECT Id_idioma FROM matriculados WHERE id_usuario = ".$IdUser.")";*/
                  $consulta ="SELECT * FROM curso WHERE Id_Docente='$usuarioid'";
                        $resultado = mysqli_query($conexion,$consulta);
                      ?>
                      <option value="0"> Seleccione el Idioma</option>
                      <?php foreach ($resultado as $opciones):  ?>

                        <option value="<?php echo $opciones['Id_Curso']?>"> <?php echo $opciones['Nombre_Curso']; ?>  </option>
                      <?php endforeach ?>
                    </select>

                  </div>

                  

                  <div id="alumnoslista" name="alumnoslista"  class="form-group col-sm-10"></div>

                </form>
                
        





          </div>
          <!--Page Content Final-->

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

<script type="text/javascript">
  $(document).ready(function(){
    recargarlista();

    $('#idselectcursos').change(function(){
        recargarlista();
    });
  })

</script>

<script type="text/javascript">
  function recargarlista(){
    $.ajax({
      type:"POST",
      url:"../logica/datos1.php",
      data:"idioma=" + $('#idselectcursos').val(),
        success:function(r){
          $('#alumnoslista').html(r);
        }
    });
  }
</script>

<?php 



  function traerRango($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Tipo_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }


  function traerIDCursos($usuario){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Id_Curso FROM curso WHERE Id_Docente = '$usuario'";
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
  function traerIdUsuario($usuario,$clave){
    $conexion= mysqli_connect("localhost","root","","idiomas");
    $sql = "SELECT Id_Usuario FROM usuarios WHERE Usuario = '$usuario' and  Contrasena = '$clave'";
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
