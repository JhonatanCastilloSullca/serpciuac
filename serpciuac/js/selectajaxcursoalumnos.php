<?php 

include '../../login/logica/conexion1.php';

$id = $_POST['id'];

$alumnos = Modelos::traeralumnoss($id);

foreach ($alumnos as $key => $value) {
	echo '<option value=" '.$value["id_matriculados"].'" >'.$value["id_usuario"].'</option>';
}

