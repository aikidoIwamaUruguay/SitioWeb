<div class="infoContacto">
	<h1><a id="indice" style="color: #000;">Contacto</a></h1>

	<div id="contacto">
		<form action="index.php?pag=contacto" method="post" onsubmit="return validar(this);">
			<table>
				<tr>
					<td>Nombre</td>
					<td><input type="text" name="nombre" id="inputText"/></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="inputText"/></td>
				</tr>
				<tr>
					<td>Asunto</td>
					<td><input type="text" name="asunto" id="inputText"/></td>
				</tr>
				<tr>
					<td>Mensaje</td>
					<td><textArea name="mensaje" id="inputTextArea"></textArea></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Enviar" name="enviar" id="botones"/></td>
				</tr>				
			</table>
		</form>
		
<?php
if (isset ($_POST['enviar'])) {
	$mail_to = 'aikidoiwamauruguay@gmail.com';
	$asunto  = $_POST['asunto'];
	$mensaje = "Nombre: ".$_POST['nombre']."\n Asunto: ".stripcslashes ($_POST['asunto'])."\n Mensaje:\n ".stripcslashes ($_POST['mensaje']);
	$headers = "From: ".$_POST['email']."\r\n".
			   "Reply-To: ".$_POST['email']."\r\n".
			   'X-Mailer: PHP/'. phpversion();
	
	//bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )	
 	if ( mail (	$mail_to, $asunto, $mensaje, $headers ))
		echo '<strong style="color: #08c;">Su mensaje ha sido enviado correctamente.<br>Gracias por ponerse en contacto.</strong>';
 	else 
 		echo '<strong style="color: red;">Error al enviar el formulario.<br>Por favor, int&eacute;nte de nuevo m&aacute;s tarde.</strong>'; 
} 
?>		
		
	</div>
</div>


