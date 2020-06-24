<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: #fff">
			<div class="wrap-login100registrar p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="../login/logica/registraralumnologica.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-titleh3space login100-form-title p-b-15">
						Sistema ERP
					</span>
					<span class="login100-form-titleh3 p-b-25">
						Centro de Idiomas UAC
					</span>
					<span class="login100-form-titleh4 p-b-25">
						Sistema de Registro de Alumnos
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
						<span class="label-input100">Ingrese su Codigo Universitario</span>
						<input class="input100" type="text" name="codigo" placeholder="Ingrese su Codigo Universitario">
						
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
								Registrar Alumno
							</button>							

						</div>
						
						
					</div>
					<div class="btnregistraralumno p-b-11">
							<a href="../login/index.html">Volver al Login</a>
					</div>
					

					

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/bootstrap/js/popper.js"></script>
	<script src="../login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../login/js/main.js"></script>

</body>
</html>