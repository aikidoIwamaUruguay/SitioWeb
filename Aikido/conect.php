<?php

$conexion = mysql_connect("localhost", "root", "lavie");

if ($conexion != null) {
	$db_name = "BASE1";
	
	if (mysql_select_db($db_name, $conexion)){
		$query = "select * from empresas";

		
		$result = mysql_query($query, $conexion);
		
		if ($result){
			$totEmp = mysql_num_rows($result);
			
			if ($totEmp> 0) {
				echo "Cantidad de empresas ingresadas: " . $totEmp . "<br><br>";
					
				while ($rowEmp = mysql_fetch_assoc($result)) {
					echo "<strong>".$rowEmp['nombre']."</strong><br>";
					echo "Télefono: ".$rowEmp['tel']."<br><br>";
				}
			}	
		}else {
			die("Error al hacer la consulta");
		}
		
	}else{
		die("No encontró la base de datos");
	}
	
}else {
	echo "No se pudo establecer la conexión";
}



