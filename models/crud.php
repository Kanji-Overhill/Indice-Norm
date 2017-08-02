<?php
require_once "conexion.php";

class Datos extends Conexion{
	public function loginUsuarioModel($datosModel, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT name, password FROM $tabla WHERE name = :name");

		$stmt->bindParam(":name", $datosModel["name"], PDO::PARAM_STR);
		$stmt->execute(); 

		return $stmt->fetch();

		$stmt->close();
	}

}

?>