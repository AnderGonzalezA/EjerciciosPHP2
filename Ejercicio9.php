<?php
	function calcularArea($lado){
		try{
			if ($lado < 0){
				throw new Exception ("El lado del cuadrado no puede ser negativo");
			}else{
				$area = $lado * $lado;
				return($area);
			}
		}
	}
	$numeros = array(rand(-9,9),rand(-9,9),rand(-1,9),rand(-1,9),rand(-1,9));
	for ($i = 0; $i < count($numeros); $i++){
		//echo($numeros[$i]);
		echo(calcularArea($numeros[$i]) . "<br>");
	}
?>