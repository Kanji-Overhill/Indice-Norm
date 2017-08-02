<?php 

class MvcController{

	public function pagina(){	
		
		include "views/template.php";
	} 
	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			$enlaces = $_GET['action'];
		}
		else{
			$enlaces = "index?action=login";
		}
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}
	public function loginUsuarioController(){
		if (isset($_POST["nameLogin"])) {
			$datosController = array('name'=>$_POST["nameLogin"], 'password'=>$_POST["passwordLogin"]);
			$respuesta = Datos::loginUsuarioModel($datosController, "usuarios");

			if($respuesta["name"] == $_POST["nameLogin"] && $respuesta["password"] == $_POST["passwordLogin"]){
				session_start();
				$_SESSION["user"]=true;
				header("location:home");
			}else{
				header("location:fallo");
			}

		}
	}
}

?>

