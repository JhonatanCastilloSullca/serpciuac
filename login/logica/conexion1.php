<?php 

class Conexion{
	static public function conectar()
	{
		$link = new PDO("mysql:host-localhost;dbname=idiomas","root","");
		$link ->exec("set names utf8");
		return $link;
	}
}



class Modelos{


static public function traeralumnoss($id){

$stmt = Conexion::conectar()->prepare("SELECT * FROM matriculados Where Id_Curso = $id");
$stmt->execute();

return $stmt->fetchAll();
$stmt->close();
$stmt=null;

}


}


?>