<?php
	function calcularArea($lado){
		try{
			if ($lado < 0){
				throw new Exception ("El lado del cuadrado no puede ser negativo");
			}else{
				$area = $lado * $lado;
				return($area);
			}
		} catch (Exception $e) {
			echo $e->getMessage(), "\n";
		}
	}
	$numeros = array(-1,1,2,3,4,5,6);
	for ($i = 0; $i < count($numeros); $i++){
		echo(calcularArea($numeros[$i]) . "<br>");
	}
?>
