<html>
<head>
	<title>Aikido</title>
</head>
<body bgcolor="#008800">

Texto html <br>

<br>

<a href="conect.php">Ir a la página de prueba de conexión a base de datos</a>

<br><br>

<?php echo "hello word!"; ?>

<br>

<?php echo '<p>Hola Mundo</p>'; ?>


<?php 
$cadena     = "hola"; 
$otracadena = "hola-mundo"; 

$longitud = strlen($cadena); //devuelve 4 

$partes = explode("-",$otracadena); //genera el array $partes con $partes[0]="hola" y $partes[1]="mundo"; 

$chop = chop($cadena."\n"); //agregamos un \n para probar, pero chop lo elimina 

$reemplaza = str_replace("-"," ",$otracadena); //$reemplaza contiene Hola Mundo. Notese que cambiamos el - por un espacio 


echo $cadena;
echo '<br>';
echo $otracadena;
echo '<br>';
?>

<? echo  $PHP_SELF ?><br>

<H1> En esta página se muestran los datos de la conexión:</H1>
<br> Ahora está en la página <? echo  $PHP_SELF ?><br>
Los documentos HTML en este servidor albergado en <? echo  $HTTP_HOST ?>
 (con IP <? echo $SERVER_ADDR ?>), están a partir
del directorio <? echo  $DOCUMENT_ROOT  ?>, y se reconocen <? echo  $HTTP_ACCEPT  ?>.<br>
<p>
En nombre oficial de este servidor es <? echo $SERVER_NAME ?>  que funciona
bajo  <? echo $SERVER_SOFTWARE ?><br>
<A HREF="mailto:<? echo $SERVER_ADMIN ?>"> Aquí</A> puede contactar con nuestro administrador.
<p>
Viene de la página <? echo  $HTTP_REFERER  ?> y está usando  <? echo  $HTTP_USER_AGENT  ?>
 como programa cliente.
<p>
Usted se está conectando desde el equipo
<? $a=`nslookup $REMOTE_ADDR |grep "Name"|cut -f2 -d:`;echo $a; ?>
con una dirección IP <? echo $REMOTE_ADDR  ?> a nuestro puerto
<? echo  $SERVER_PORT   ?> desde su puerto <? echo $REMOTE_PORT ?>
<br>
Ha solicitado la página <? echo $REQUEST_URI ?>
<p>
Otros datos disponibles son
<p>
<?
   echo "HTTP_ACCEPT_CHARSET $HTTP_ACCEPT_CHARSET<BR>";
   echo "HTTP_ACCEPT_ENCODING $HTTP_ACCEPT_ENCODING<BR>";
   echo "HTTP_ACCEPT_LANGUAGE $HTTP_ACCEPT_LANGUAGE<BR>";
   echo "HTTP_CONNECTION $HTTP_CONNECTION<BR>";
   echo "HTTP_PRAGMA $HTTP_PRAGMA<BR>";
 echo "PATH $PATH  <BR>";
   echo "SCRIPT_FILENAME $SCRIPT_FILENAME <BR>";
   echo "SERVER_SIGNATURE $SERVER_SIGNATURE <BR>";
   echo "GATEWAY_INTERFACE $GATEWAY_INTERFACE <BR>";
   echo "SERVER_PROTOCOL $SERVER_PROTOCOL <BR>";
   echo "REQUEST_METHOD $REQUEST_METHOD <BR>";
   echo "QUERY_STRING $QUERY_STRING <BR>";
   echo "SCRIPT_NAME $SCRIPT_NAME <BR>";
?>

</body>
</html>