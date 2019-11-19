<?php
	$numerosAleatorios = array();
	for ($i = 0; $i<20; $i++){
		$numerosAleatorios[$i] = rand(0,100);
	}
	$indice = 0;
	/*while ($indice<20){
		if ($indice != 0){
			if ($numerosAleatorios[$indice]<$numerosAleatorios[$indice-1]){
				$ayuda = $numerosAleatorios[$indice];
				$numerosAleatorios[$indice] = $numerosAleatorios[$indice-1];
				$numerosAleatorios[$indice-1]= $ayuda;
				$indice=0;
			}
		}
		$indice++;
	}*/

	for ($i = 1; $i<sizeof($numerosAleatorios); $i++){
		if ($numerosAleatorios[$i]<$numerosAleatorios[$i-1]){
			$ayuda = $numerosAleatorios[$i];
			$numerosAleatorios[$i] = $numerosAleatorios[$i-1];
			$numerosAleatorios[$i-1]= $ayuda;
			$i=0;
		}
	}
	$suma = 0;
	for ($i = 0; $i<count($numerosAleatorios); $i++){
		$suma = $suma + $numerosAleatorios[$i];
		if ($i == 0){
			echo("<span style='color:blue;'>" . $numerosAleatorios[$i] . "</span> ");
		}else if($i == count($numerosAleatorios)-1){
			echo("<span style='color:green;'>" . $numerosAleatorios[$i] . "</span> ");
		}else{
			echo($numerosAleatorios[$i] . " ");
		}
	}
	echo("Suma: " . $suma . " Media: " . number_format($suma/20, 2));
?>
