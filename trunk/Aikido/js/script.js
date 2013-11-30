function showHint(opt) {
//	if (str.length==0){ 
//		document.getElementById("txtHint").innerHTML="";
//		return;
//	}
	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.open("GET","gethint.php?q="+opt, true);
	xmlhttp.send();
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("album").innerHTML = xmlhttp.responseText;
			//alert(xmlhttp.responseText);
		}
	};
}


function verFotos(opt){
	var element = document.getElementById("fotos");	
	element.style.display = "block";
	
	document.getElementById("album").focus();
		
	showHint(opt);
}

function cerrar(){
	document.getElementById("album").innerHTML = "";
	
	var element = document.getElementById("fotos");	
	element.style.display = "none";
}

function escape(){
	//alert(event.keyCode);
	if (event.keyCode == 27) { // escape
		cerrar();
	}

}

// *********************	Validar Form Contacto	**********************************************************************

function validar(form){
	var nombre  = form.nombre.value;
	var email   = form.email.value;
	var asunto  = form.asunto.value;
	var mensaje = form.mensaje.value;
	
	if (nombre.length < 3){
		alert("El Nombre debe tener por lo menos tres letras");
		return false;
	}
	
	if (!validarEmail(email)){
		return false;
	}
	
	if (asunto.length < 3){
		alert("El Asunto debe tener por lo menos tres letras");
		return false;
	}
	
	if (mensaje.length < 3){
		alert("Ingresar un mensaje");
		return false;
	}
	
	return true;
}

function validarEmail( email ) {
	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if ( !expr.test(email) ){
		alert("La direcci\u00f3n de correo " + email + " es incorrecta.");
		return false;
	}
	
	return true;
}

//*********************	Seminario Tittarelli	**********************************************************************
function cerrarDivSeminario(acc){
	var obj = document.getElementById("seminario");
	obj.style.display = acc;
}
//***********************************************************************************************************************