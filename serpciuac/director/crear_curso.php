<?php 
session_start();   
  //error_reporting(0);
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
                    <a href="registrar_docente.php">Registrar Docente</a>
                    
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
                    <a href="crear_horario.php">Crear Horario</a>

                                        
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
              

              <div id="content" class="p-4 p-md-5 pt-5">
                <h2 class="mb-4">  <?php echo "Bienvenido Director ". $nombreusuario." ".$appaterno." ".$apmaterno; ?> </h2>
                
                 <form class="form-horizontal" method="POST" action="../logica/crear_curso_logica.php">
                  
                  <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Asigne Nombre al Curso:</label>
                    <div class="col-sm-10">
                      <input type="text" id="letrablanco" class="form-control" id="inputform" placeholder="Ingrese Nuevo Idioma" name="nombrecurso">
                    </div>
                    
                  </div>

                  <div class="form-group col-sm-10">
                    <label class="control-label col-sm-20" for="email">Seleccione Idioma:</label>                    
                    <br>
                    <select class="control-label col-sm-20 selesctcss "  name="idioma">                      
                      <?php 
                        include '../../login/logica/conexion.php';
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

                  <div class="form-group col-sm-10">
                    <label class="control-label col-sm-20" for="email">Seleccione Docente:</label>                    
                    <br>
                    <select class="control-label col-sm-20 selesctcss "  name="docente">                      
                      <option value="0"> Docente por definir </option>
                      <?php 
                        
                        $consulta ="SELECT * FROM usuarios WHERE Tipo_Usuario = 'Docente'";
                        $resultado = mysqli_query($conexion,$consulta);
                      ?>
                      <option> Seleccione el Docente</option>
                      <?php foreach ($resultado as $opciones):  ?>
                        
                        <option value="<?php echo $opciones['Id_Usuario']?>"> <?php echo $opciones['Nombre_Usuario']; ?>  </option>
                      <?php endforeach ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Asigne el Aula:</label>
                    <div class="col-sm-10">
                      <input type="text" id="letrablanco" class="form-control" id="inputform" value="0" placeholder="Ingrese Nuevo Idioma" name="aula">
                    </div>
                    
                  </div>

                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="submitform btn btn-default">Registar Nuevo Curso</button>
                    </div>
                  </div>


                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="submitform btn btn-default" data-toggle="modal" data-target='#exampleModal'>Registrar Docente y Aula</button>
                    </div>
                  </div>

                </form>
              </div>



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

        <form class="form-horizontal" action="../logica/modificarcurso.php" method = "post" >
                  
                  
                  <div class="form-group col-sm-10">
                    <label class="control-label col-sm-20" for="email">Seleccione Curso:</label>                    
                    <br>
                    <select class="control-label col-sm-20 selesctcss "  name="curso">                      
                      <option value="0"> Cursos Inscritos </option>
                      <?php 
                        
                        $consulta ="SELECT * FROM curso";
                        $resultado = mysqli_query($conexion,$consulta);
                      ?>
                      
                      <?php foreach ($resultado as $opciones):  ?>
                        
                        <option value="<?php echo $opciones['Id_Curso']?>"> <?php echo $opciones['Nombre_Curso']; ?>  </option>
                      <?php endforeach ?>
                    </select>
                  </div>

                  <div class="form-group col-sm-10">
                    <label class="control-label col-sm-20" for="email">Seleccione Docente:</label>                    
                    <br>
                    <select class="control-label col-sm-20 selesctcss "  name="docente">                      
                      
                      <?php 
                        
                        $consulta ="SELECT * FROM usuarios WHERE Tipo_Usuario = 'Docente'";
                        $resultado = mysqli_query($conexion,$consulta);
                      ?>
                      <option> Seleccione el Docente</option>
                      <?php foreach ($resultado as $opciones):  ?>
                        
                        <option value="<?php echo $opciones['Id_Usuario']?>"> <?php echo $opciones['Nombre_Usuario']; ?>  </option>
                      <?php endforeach ?>
                    </select>
                  </div>

                  <div class="form-group col-sm-10">
                    <label class="control-label col-sm-20" for="email">Ingrese Aula:</label>                    
                    <br>
                    <input class="control-label col-sm-20 selesctcss" type="text" name="aula">
                    
                  </div>
                  

                    <td><button class="btn btn-primary" type="submit" name="btn_inscribir">Guardar datos</button></td>
                  
                </form>

        
      </div>
      
    </div>
  </div>
</div>

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
