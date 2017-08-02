<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "login" || $enlaces == "home" || $enlaces == "marketing" || $enlaces == "analytics" || $enlaces == "salir"){

			$module =  "views/modules/".$enlaces.".php";
		
		}else if($enlaces == "fallo"){

			$module =  "views/modules/login.php";
		
		}
		
		else{

			$module =  "views/modules/login.php";

		}
		
		return $module;

	}

}

?>