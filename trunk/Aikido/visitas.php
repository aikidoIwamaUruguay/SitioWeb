<div class="infoContador">
<?php
$info = array();
$esteAnio = date("Y");
$archivo ="contador".DIRECTORY_SEPARATOR. $esteAnio.".txt";

if (file_exists($archivo)){
	$fp    = fopen($archivo, "r+");
	$datos = fread($fp, filesize($archivo));
	$info  = explode(" ",$datos);
	
	desplegar($info);
}else{
	echo 'No se pudo bloquear el archivo';
}

function desplegar($info){
	$indice = 0;
	
	echo "<table>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th><h1>Total de visitas<h1></th>";
	echo "		<th>".$info[29]."</th>";
	echo "	</tr>";
	
	$indice = totalAniosAnteriores($info[0], $indice);
	
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th><h2>".$info[0]."</h2></th>";
	echo "		<th>".$info[1]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th><h3>Hoy</h3></th>";
	echo "		<th>".$info[3]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Enero</th>";
	echo "		<th>".$info[5]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Febrero</th>";
	echo "		<th>".$info[7]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Marzo</th>";
	echo "		<th>".$info[9]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Abril</th>";
	echo "		<th>".$info[11]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Mayo</th>";
	echo "		<th>".$info[13]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Junio</th>";
	echo "		<th>".$info[15]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Julio</th>";
	echo "		<th>".$info[17]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Agosto</th>";
	echo "		<th>".$info[19]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Setiembre</th>";
	echo "		<th>".$info[21]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Octubre</th>";
	echo "		<th>".$info[23]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Noviembre</th>";
	echo "		<th>".$info[25]."</th>";
	echo "	</tr>";
	echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";	$indice++;
	echo "		<th>Diciembre</th>";
	echo "		<th>".$info[27]."</th>";
	echo "	</tr>";
	echo "</table>";		
}

function totalAniosAnteriores($anio, $indice){
	$anioComienzo = 2013;
	
	while ($anioComienzo != $anio){
		desplegarTotalAnio($anioComienzo, $indice);
		$indice++;
		$anioComienzo++;
	}
	
	return $indice;
}

function desplegarTotalAnio($anioDes, $indice){
	
	$archivoDes ="contador".DIRECTORY_SEPARATOR . $anioDes . ".txt";

	if (file_exists($archivoDes)){
		$fpDes    = fopen($archivoDes, "r");
		$datosDes = fread($fpDes, filesize($archivoDes));
		$infoDes  = explode(" ",$datosDes);

		echo "	<tr class='".((fmod($indice, 2) == 0) ? "par" : "impar")."'>";
		echo "		<th><h2>".$infoDes[0]."</h2></th>";
		echo "		<th>".$infoDes[1]."</th>";
		echo "	</tr>";

		fclose($fpDes);
	}else{
		return;
	}
}
?>
</div>