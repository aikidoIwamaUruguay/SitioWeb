<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>Shin-shin aikishurenkai Uruguay</title>

		<link href="css/estilo.css" media="screen" rel="stylesheet" type="text/css" />

		<script type="text/javascript" language="JavaScript" src="js/script.js"></script>
		<script type="text/javascript" language="JavaScript" src="js/curvycorners.js"></script>
	</head>

	<body>
		<img src="img/iwama.jpg" class="bg" />

<?php
$page = ($_GET["pag"] != null) ? $_GET["pag"] : null;  
$selOn = "class='selOn'";
?>
		<div id="lienzo">
			<div id="cabezal">
				<img src="img/cabezalCompleto.png"/>
			</div>
 
			<div id="contenido">
				<div id="menu">
					<ul class="miNav">
						<li <?php echo ($page == "inicio")     ? $selOn : "" ?>><a href="index.php?pag=inicio">Inicio</a></li>
						<li <?php echo ($page == "osensei")    ? $selOn : "" ?>><a href="index.php?pag=osensei">O Sensei</a></li>
						<li <?php echo ($page == "morihiro")   ? $selOn : "" ?>><a href="index.php?pag=morihiro">Morihiro Saito</a></li>
						<li <?php echo ($page == "hitohira")   ? $selOn : "" ?>><a href="index.php?pag=hitohira">Hitohira Saito</a></li>
						<li <?php echo ($page == "filosofia")  ? $selOn : "" ?>><a href="index.php?pag=filosofia">Filosof&iacute;a</a></li>
						<li <?php echo ($page == "galeria")    ? $selOn : "" ?>><a href="index.php?pag=galeria">Galer&iacute;a</a></li>
						<li <?php echo ($page == "info")       ? $selOn : "" ?>><a href="index.php?pag=info">Informaci&oacute;n</a></li>
						<li <?php echo ($page == "contacto")   ? $selOn : "" ?>><a href="index.php?pag=contacto">Contacto</a></li>
					</ul>
				</div>

				<div id="datos">
				<?php
					switch ($page) {
    					case "inicio":		include("inicio.php"); 		break;
    					case "osensei":		include("osensei.php"); 	break;
    					case "morihiro":	include("morihiro.php"); 	break;
    					case "hitohira":	include("hitohira.php"); 	break;
    					case "filosofia":	include("filosofia.php"); 	break;
    					case "dojos":		include("dojos.php"); 		break;
    					case "seminarios":	include("seminarios.php"); 	break;
    					case "galeria":		include("galeria.php"); 	break;
    					case "info":		include("info.php"); 		break;
						case "contacto":	include("contacto.php");	break;
						case "contador":	include("contador.php");	break;
						default:			include("inicio.php"); 		break;
					}
				?>					
				</div>
				
				<div id="pie">shin shin aikishurenkai uruguay</div>
			</div>
		</div>
		
		<div id="fotos" onkeydown="escape()" >		
			<a href="#" onclick="cerrar()" class="cerrar"></a>
			<div id="album" onkeydown="escape()" ></div>
		</div>

	</body>
</html>
