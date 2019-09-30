<?php
	$str = ("manzana pera limon sandia melon");
	$palabras = array();
	$inicioPalabra = 0;
	$numeroLetras = 1;
	for ($i = 0; $i<strlen($str); $i++){
		if (substr($str,$i,1) == " "){
			$finalPalabra = $i-1;
			$indice = substr($str,$inicioPalabra,$numeroLetras-1);
			$palabras[$indice] = strlen($indice);
			$espacioEncontrado = false;
			$inicioPalabra = $i+1;
			$numeroLetras = 1;
		}else{
			$numeroLetras++;
		}
		/*if ($i==0){
			$inicioPalabra = 0;
			$indicePalabra = $inicioPalabra;
			$numeroLetras = 1;
			$espacioEncontrado = false;
			while (!$espacioEncontrado){
				if (substr($str,$indicePalabra,1) == " "){
					$espacioEncontrado = true;
					$indice = substr($str,$inicioPalabra,$numeroLetras-1);
					$palabras[$indice] = strlen($indice);
					$espacioEncontrado = true;
				}
				else{
					$indicePalabra = $indicePalabra+1;
					$numeroLetras = $numeroLetras+1;
				}
			}
		}
		else if (substr($str,$i,1) == " "){
			$inicioPalabra = $i+1;
			$indicePalabra = $inicioPalabra;
			$numeroLetras = 1;
			$espacioEncontrado = false;
			while (!$espacioEncontrado && $indicePalabra<strlen($str)){
				if (substr($str,$indicePalabra,1) == " "){
					$espacioEncontrado = true;
					$indice = substr($str,$inicioPalabra,$numeroLetras-1);
					$palabras[$indice] = strlen($indice);
					$espacioEncontrado = true;
				}
				else{
					$indicePalabra = $indicePalabra+1;
					$numeroLetras = $numeroLetras+1;
				}
			}
		}*/
	}
	
	foreach ($palabras as $key => $value) {
		echo($key . " : " . $value . "<br>");
	}
?>