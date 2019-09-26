<?php
	function crearTabla($numeroFilas,$numerocolumnas){
		echo("<table border='5'>");
		for ($i = 0; $i<$numeroFilas; $i++){
			echo("<tr>");
			for ($j = 0; $j<$numerocolumnas; $j++){
				echo("<td>kaixo</td>");
			}
			echo("</tr>");
		}
		echo("</table>");
	}
	crearTabla(4,5);
?>