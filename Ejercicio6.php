<?php
	function añadirNombre($nombre,$mes){
		$enero = array("Mikel","Ainara","Xabi");
		$febrero = array("Irati","Ibai");
		$marzo = array("Haizea");
		$mesesCumples = array(
			"enero" => $enero,
			"febrero" => $febrero,
			"marzo" => $marzo
		);
		$numeroCumpleaños = sizeof($mesesCumples[$mes]);
		$mesesCumples[$mes][$numeroCumpleaños]=$nombre;
		return sizeof($mesesCumples[$mes]);
	}
	echo(añadirNombre("Ander","febrero"));
?>