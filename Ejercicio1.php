<?php
	$numerosNaturales = array();
	for ($i=0; $i<10; $i++){
		$numerosNaturales[$i] = $i;
	}
	for ($i=0; $i<10; $i++){
		echo($numerosNaturales[$i] . "<br>");
	}
	echo("<br><br>");

	$factoriales = array();
	for ($i=0; $i<10; $i++){
		$factoriales[$i] = 1;
		for ($j=1; $j<=$i; $j++){
			$factoriales[$i] = $factoriales[$i] * $j;
		}

		echo($factoriales[$i] . "<br>");
	}
?>
