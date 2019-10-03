<?php
	function calcularPotencia($base,$exponente=2){
		$potencia = $base;
		for ($i = 0; $i<$exponente-1; $i++){
			$potencia = $potencia * $base;
		}
		return $potencia;
	}
	echo(calcularPotencia(3,3));
?>