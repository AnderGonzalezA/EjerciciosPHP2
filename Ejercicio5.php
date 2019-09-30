<?php
	$meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
	$mesesDias = array();
	for ($i = 0; $i<sizeof($meses); $i++){
		$mesesDias[$meses[$i]]=cal_days_in_month(CAL_GREGORIAN, $i+1, 2019);
	}
	foreach ($mesesDias as $key => $value) {
		echo($key . " : " . $value . "<br>");
	}
?>