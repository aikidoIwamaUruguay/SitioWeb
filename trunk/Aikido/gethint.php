<?php
//get the q parameter from URL
$q = $_GET["q"];

switch ($q){
	case "seminarioTitt":	$response = '<embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="100%" height="100%" flashvars="host=picasaweb.google.com&hl=es&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F108183168386730317207%2Falbumid%2F5925801617575199841%3Falt%3Drss%26kind%3Dphoto%26hl%3Des" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>';
							break;
	case "seminarioMont":	$response = '<embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="100%" height="100%" flashvars="host=picasaweb.google.com&hl=es&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F108183168386730317207%2Falbumid%2F5886197143867684465%3Falt%3Drss%26kind%3Dphoto%26hl%3Des" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>';
							break;
	case "seminarioMald":	$response = '<embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="100%" height="100%" flashvars="host=picasaweb.google.com&hl=es&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F108183168386730317207%2Falbumid%2F5900579388247682017%3Falt%3Drss%26kind%3Dphoto%26hl%3Des" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>';
							break;
	case "misc":			$response = '<embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="100%" height="100%" flashvars="host=picasaweb.google.com&hl=es&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F108183168386730317207%2Falbumid%2F5905095102780046417%3Falt%3Drss%26kind%3Dphoto%26hl%3Des" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>';
							break;
	case "seminarioChile":	$response = '<embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="100%" height="100%" flashvars="host=picasaweb.google.com&hl=es&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F108183168386730317207%2Falbumid%2F5952177213290129617%3Falt%3Drss%26kind%3Dphoto%26hl%3Des" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>';
							break;
	case "hs-suburi": 		$response = "<iframe id='video' src='http://www.youtube.com/embed/VPUi94xSCLE?autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>";
							break;
	case "hs-kata31": 		$response = "<iframe id='video' src='http://www.youtube.com/embed/ywePqfgOlFc?autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>";
							break;
	case "ken7":	 		$response = "<iframe id='video' src='http://www.youtube.com/embed/9h3z8bnEuws?autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>";
							break;
	case "jo20":			$response = '<iframe id="video" src="http://www.youtube.com/embed/8R9XqrT8UMA?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>';
							break;
	case "cata31":			$response = '<iframe id="video" src="http://www.youtube.com/embed/pCWpvAD1Dzk?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>';
							break;
	case "cata13":			$response = '<iframe id="video" src="http://www.youtube.com/embed/NdHlPwGK6xU?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>';
							break;
	case "kumiTachi123":	$response = '<iframe id="video" src="http://www.youtube.com/embed/51xsumatrJw?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>';
							break;
	case "kumiJo1-5":		$response = '<iframe id="video" src="http://www.youtube.com/embed/f7IQf6kqxMk?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>';
							break;
	case "kumiJo6-10":		$response = '<iframe id="video" src="http://www.youtube.com/embed/pJolX8mVyEk?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>';
							break;
}
//output the response
echo $response;

?>