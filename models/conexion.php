<?php
class Conexion{
	public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=norm_indice","root","");
		return $link;
	}
}
?>