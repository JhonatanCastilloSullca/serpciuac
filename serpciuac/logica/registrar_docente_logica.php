<?php 

require_once "../../login/logica/conexion.php";
error_reporting(0);
$conexion=conexion();


$nombre =$_POST["usuario"];
$APaterno =$_POST["apellidop"];
$AMaterno =$_POST["apellidom"];
$DNI =$_POST["dni"];
$codigo =$_POST["codigo"];
$pass =$_POST["pass"];
$pass1 =$_POST["pass1"];
$tipo="Docente";

if (Usuariorepetido($codigo)==2) {
	echo'<script type="text/javascript">
    alert("El Usuario ya existe");
    window.location.href="../director/registrar_docente.php";
    </script>';
}
else{


if (DNIrepetido($DNI)==2) {
	echo'<script type="text/javascript">
    alert("Existe un usuario con el mismo DNI registrado");
    window.location.href="../director/registrar_docente.php";
    </script>';
}
else{

	if ($pass != $pass1) {
		 echo'<script type="text/javascript">
	    alert("las contraseñas deben coincidir");
	    window.location.href="../director/registrar_docente.php";
	    </script>';
	}
	else{

		
		
	$sql="INSERT into usuarios (Nombre_Usuario,ApPaterno_Usuario,ApMaterno_Usuario,dniUsuario,Tipo_Usuario,Usuario, Contrasena)
				values ('$nombre','$APaterno','$AMaterno','$DNI','$tipo','$codigo','$pass')";
				
	echo $resultado = mysqli_query($conexion,$sql);
	if (!$resultado) {
		echo'<script type="text/javascript">
	    alert("Usuario no ha sido Registrado ");
	    window.location.href="../director/registrar_docente.php";
	    </script>';
		
	}
	else{
		echo'<script type="text/javascript">
    alert("Registrado con Exito");
    window.location.href="../director/registrar_docente.php";
    </script>';

	}
	

	}

}	

}



function DNIrepetido($DNI){
	$conexion=conexion();

	$sql1="SELECT * FROM usuarios where dniUsuario=$DNI";

	
	$resultado1 = mysqli_query($conexion,$sql1);

	if (mysqli_num_rows($resultado1) >0 ){
		return 2;
	}
	else{
		return 3;
	}
}


function Usuariorepetido($codigo){
	$conexion=conexion();

	$sql1="SELECT * FROM usuarios where Usuario=$codigo";

	
	$resultado1 = mysqli_query($conexion,$sql1);

	if (mysqli_num_rows($resultado1) >0 ){
		return 2;
	}
	else{
		return 3;
	}
}

/*
function Codigorepetido($DNI){

	$sql2="SELECT * FROM usuarios where Usuario='$codigo'";

	$resultado2 = mysqli_query($conexion,$sql1);

	if (mysqli_num_rows($resultado2) >0 ){
		return 1;
	}
	else{
		return 2;
	}
}
*/

?>