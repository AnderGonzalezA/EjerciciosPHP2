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
	for ($i = 0; $i<sizeof($numerosAleatorios); $i++){
		if ($i != 0){
			if ($numerosAleatorios[$i]<$numerosAleatorios[$i-1]){
				$ayuda = $numerosAleatorios[$i];
				$numerosAleatorios[$i] = $numerosAleatorios[$i-1];
				$numerosAleatorios[$i-1]= $ayuda;
				$i=0;
			}
		}
	}
	for ($i = 0; $i<count($numerosAleatorios); $i++){
		if ($i == 0){
			echo("<p style='color:blue;'>" . $numerosAleatorios[$i] . "</p> ");
		}else if($i == count($numerosAleatorios)-1){
			echo("<p style='color:green;'>" . $numerosAleatorios[$i] . "</p> ");
		}else{
			echo($numerosAleatorios[$i] . " ");
		}
	}
?>