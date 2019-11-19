<?php
	$enero = array("Mikel","Ainara","Xabi");
	$febrero = array("Irati","Ibai");
	$marzo = array("Haizea");
	$mesesCumples = array(
		"enero" => $enero,
		"febrero" => $febrero,
		"marzo" => $marzo
	);
	function añadirNombre($nombre,$mes){
		array_push($mesesCumples[$mes],$nombre);
		return sizeof($mesesCumples[$mes]);
	}
	echo(añadirNombre("Ander","febrero"));
?>
