<?php
function EsUsuario(){
	if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
		$simpleql = new Mysql();
		$where = array("email" => $_SESSION["email"],
						"password" => $_SESSION["password"]);
		$result = $simpleql->arreglo("usuarios",$where);
		//var_dump($result);
		if(count($result)==1)
		{
			$_SESSION["nombre"] = $result[0]["nombre"];
			$_SESSION["password"] = $result[0]["password"];
			$_SESSION["email"] = $result[0]["email"];
			$_SESSION["apellidos"] = $result[0]["apellidos"];
		}
		else{
			echo "No tienes permiso para estar aqui 1";
			sleep(10);
			header("Location: /webParalela/login.php");
		}
	}
	else{
		echo $_SESSION["email"];
		echo "No tienes permiso para estar aqui 2";
		sleep(10);
		header("Location: /webParalela/login.php");
	}
	
}
?>
