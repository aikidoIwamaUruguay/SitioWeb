<?php
session_start();

if (!$_SESSION['contador']) {
	$info = array();
	
	$hoy      = $hoy = date("Ymd");
	$esteMes  = date("m");
	$esteAnio = date("Y");
	
	$archivo ="contador".DIRECTORY_SEPARATOR. $esteAnio.".txt";
	
	$fileExists = file_exists($archivo);
	
	if ($fileExists){
		$fp = fopen($archivo, "r+");		
	}else{
		$fp = fopen($archivo, "w+");
	}
	
	if (flock($fp, LOCK_EX)) {
		if ($fileExists){
			$datos = fread($fp, filesize($archivo));
			$info  = explode(" ",$datos);
				
			$info[1] = $info[1] + 1;
				
			$ultimoDia = $info[2];
				
			if ($ultimoDia == $hoy){
				$info[3] = $info[3] + 1;
			}else{
				$info[2] = $hoy;
				$info[3] = 1;
			}
				
			switch ($esteMes){
				case '01': $info[5]  = $info[5]  + 1;	break;
				case '02': $info[7]  = $info[7]  + 1;	break;
				case '03': $info[9]  = $info[9]  + 1;	break;
				case '04': $info[11] = $info[11] + 1;	break;
				case '05': $info[13] = $info[13] + 1;	break;
				case '06': $info[15] = $info[15] + 1;	break;
				case '07': $info[17] = $info[17] + 1;	break;
				case '08': $info[19] = $info[19] + 1;	break;
				case '09': $info[21] = $info[21] + 1;	break;
				case '10': $info[23] = $info[23] + 1;	break;
				case '11': $info[25] = $info[25] + 1;	break;
				case '12': $info[27] = $info[27] + 1;	break;
			}
			
			$info[29] = $info[29] + 1;
		}else{
			$info[0]  = $esteAnio;
			$info[1]  = 1;
			$info[2]  = $hoy;
			$info[3]  = 1;
			$info[4]  = "01";
			$info[5]  = 0;
			$info[6]  = "02";
			$info[7]  = 0;
			$info[8]  = "03";
			$info[9]  = 0;
			$info[10] = "04";
			$info[11] = 0;
			$info[12] = "05";
			$info[13] = 0;
			$info[14] = "06";
			$info[15] = 0;
			$info[16] = "07";
			$info[17] = 0;
			$info[18] = "08";
			$info[19] = 0;
			$info[20] = "09";
			$info[21] = 0;
			$info[22] = "10";
			$info[23] = 0;
			$info[24] = "11";
			$info[25] = 0;
			$info[26] = "12";
			$info[27] = 0;
				
			switch ($esteMes){
				case '01': $info[5]  = 1;	break;
				case '02': $info[7]  = 1;	break;
				case '03': $info[9]  = 1;	break;
				case '04': $info[11] = 1;	break;
				case '05': $info[13] = 1;	break;
				case '06': $info[15] = 1;	break;
				case '07': $info[17] = 1;	break;
				case '08': $info[19] = 1;	break;
				case '09': $info[21] = 1;	break;
				case '10': $info[23] = 1;	break;
				case '11': $info[25] = 1;	break;
				case '12': $info[27] = 1;	break;
			}
			
			$info[28] = "99";
			
			$anioAnterior = $esteAnio - 1;
			$archivoAnt ="contador".DIRECTORY_SEPARATOR. $anioAnterior.".txt";
			
			if (file_exists($archivoAnt)){
				$fpAnt = fopen($archivoAnt, "r+");
				$datosAnt = fread($fpAnt, filesize($archivoAnt));
				$infoAnt  = explode(" ",$datosAnt);
				
				$info[29] = $infoAnt[29] + 1;
				
				fclose($fpAnt);
			}else{
				$info[29] = 1;
			}
		}
		
		$_SESSION['contador'] = $info[29];
		
		//desplegar($info);
		
		$info_nueva = implode(" ",$info);
		
		if ($fileExists){
			ftruncate($fp, 0);
			fseek($fp, 0, SEEK_SET);
		}
		
		fwrite($fp, $info_nueva);
		flock($fp, LOCK_UN); // release the lock
		fclose($fp);
	}else{
		echo 'No se pudo bloquear el archivo';
	}
}
?>
