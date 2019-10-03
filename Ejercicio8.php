<?php
	function comprobarConfig(){
		if (!file_exists("config.php")){
			throw new Exception ("El archivo 'config.php' no existe");
		}
	}
?>