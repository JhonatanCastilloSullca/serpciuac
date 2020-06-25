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
  $IdUser = traerID($varsesion,$varusuario);
  $IdIdioma = traerIdIdioma($varsesion,$varusuario,$IdUser);
  $Nombre_Idioma = traerNombreIdioma($IdIdioma);

 if($varsesion == null || $varsesion=''){

  echo'<script type="text/javascript">
    alert("Usted no tiene acceso a este sitio");
    window.location.href="../login/index.html";
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
                <h1><a href="estudiantes.php" class="logo">Sistema ERP</a></h1>
                <h2 class="h2princ" >Centro de Idiomas UAC</h2>
            <ul class="list-unstyled components mb-5">
              
  <li>
                <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Matricula</a>
                  <div class="dropdown-content">
                    <a href="revisar_matricula.php">Constancia de Matricula</a>
                    <a href="registrar_matricula.php">Registrar Matricula</a>
                    
                  </div>
              </div> 
              </li>

              <li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Notas</a>
                  <div class="dropdown-content">
                    <a href="visualizarnotas.php">Visualizar Notas</a>
                                        
                  </div>

              </div> 

              </li>

              <li>
              <div class="dropdown" id="padingbtn1" >
                <a href="#"  class="dropbtn">Asistencia</a>
                  <div class="dropdown-content">
                    <a href="visualizarasistencia.php">Visualizar Asistencia</a>
                                        
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
                

                <form class="form-horizontal" method="POST" action="../logica/registrar_matriculado_nuevo.php">
                  
                  

                  <div class="form-group col-sm-10">
                    <label class="control-label col-sm-20" for="email">Seleccione Idioma:</label>                    
                    <br>
                    <select class="control-label col-sm-20 selesctcss "  name="idiomaenviar">                      
                      <?php 
                        include '../../login/logica/conexion.php';
                  /*$consulta ="SELECT * FROM idioma WHERE Id_idioma = (SELECT Id_idioma FROM matriculados WHERE id_usuario = ".$IdUser.")";*/
                  $consulta ="SELECT * FROM idioma";
                        $resultado = mysqli_query($conexion,$consulta);
                      ?>
                      <option> Seleccione el Idioma</option>
                      <?php foreach ($resultado as $opciones):  ?>

                        <option value="<?php echo $opciones['Id_idioma']?>"> <?php echo $opciones['Nombre_Idioma']; ?>  </option>
                      <?php endforeach ?>
                    </select>
                  </div>



                  <div class="form-group col-sm-10">
                    <label class="control-label col-sm-20" for="email">Seleccione Grado:</label>                    
                    <br>
                    <select class="control-label col-sm-20 selesctcss "  name="grado">                      
                      <?php 
                        
                /*$consulta ="SELECT * FROM grados WHERE Id_Grado = (SELECT Id_Grado FROM matriculados WHERE id_usuario = ".$IdUser.")+1";*/
                $consulta ="SELECT * FROM grados";
                        $resultado = mysqli_query($conexion,$consulta);
                      ?>
                      <option> Seleccione el Idioma</option>
                      <?php foreach ($resultado as $opciones):  ?>

                        <!--<option value="<?php echo $opciones['Id_Grado']?>"> <?php echo $opciones['nombre_grado']; ?>  </option>-->
                        
                      <?php endforeach ?>
                      <option value="1">Basico I</option>
                    </select>
                  </div>




                  <div class="form-group col-sm-10">
                    <label class="control-label col-sm-20" for="email">Seleccione Horario:</label>                    
                    <br>
                    <select class="control-label col-sm-20 selesctcss "  name="horario">                      
                      <?php 
                        
                        $consulta ="SELECT * FROM horario";
                        $resultado = mysqli_query($conexion,$consulta);
                      ?>
                      <option> Seleccione el Horario</option>
                      <?php foreach ($resultado as $opciones):  ?>
                        
                        <option value="<?php echo $opciones['Id_Horario']?>"> <?php echo $opciones['Nombre_Horario']; ?>  </option>
                      <?php endforeach ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Ingrese el Codigo de Voucher:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputform" placeholder="Ingrese Nuevo Idioma" name="codigo_voucher">
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Subir Foto de Voucher:</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputform" placeholder="Ingrese Nuevo Idioma" name="link_foto_voucher">
                    </div>
                    
                  </div>



                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="submitform btn btn-default">Realizar Matricula</button>
                    </div>
                  </div>
                </form>
              

              </div>
        <!-- Page Content  -->
        </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>



  </body>
</html>
<?php 

function traerango($usuario,$password){
    $conexion= mysqli_connect("localhost","root","","uac");
    $sql = "SELECT rango FROM usuarios WHERE usuario = '$user' and  clave = '$clave'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }
  
  function traerNombreIdioma($IdIdioma){
    $conexion= mysqli_connect("localhost","root","","uac");
    $sql = "SELECT Nombre_Idioma FROM idioma WHERE Id_idioma = '$IdIdioma'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }


  function traerIdIdioma($usuario,$password,$id){
    $conexion= mysqli_connect("localhost","root","","uac");
    $sql = "SELECT rango FROM matriculados WHERE id_usuario = '$id'";
      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_row($result)[0];
  }
  function traerID($usuario,$clave){
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
