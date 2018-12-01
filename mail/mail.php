<meta charset="utf-8">
<?
error_reporting(0);
$nom=$_GET["nom"];
$email=trim($_GET["email"]);
$telefono=trim($_GET["telefono"]);
$validate=filter_var($email, FILTER_VALIDATE_EMAIL);
if ($validate==false) {
	echo "<br><br><div style='background:rgba(255, 255, 255, 0.89);  padding:8px; width:233px'><p style='color:#F00 !important;font-weight:bold'>Falta la dirección email</p></div><br><br> <a class='btnemail2' href='#' onClick='runEffectConct();'> << Volver</a></p><br><br><br><br><br>";
   exit();
}

$asunto=utf8_decode($_GET["asunto"]);
$fecha=time();
//$fecha=strftime("%d-%m-%Y %H:%M:%S",$fecha);
$fecha=strftime("%d-%m-%Y",$fecha);
$f = fopen("pisos.csv","a+");
$separador = ";";

$linea = $nom . $separador . $email . $separador . $telefono . $separador . $asunto. $separador . $fecha . "\r\n";
fwrite($f,$linea);

fclose($f);

 if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
       $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif (isset($_SERVER['HTTP_VIA'])) {
       $ip = $_SERVER['HTTP_VIA'];
    }
    elseif (isset($_SERVER['REMOTE_ADDR'])) {
       $ip = $_SERVER['REMOTE_ADDR'];
    }
    else {
       $ip = "desconocida";
    }

$cuerpo="Fecha :$fecha\r\nNom :$nom\r\nEmail :$email \r\nTelefono :$telefono\r\nAsunto :$asunto\r\nIP :$ip";
$ok =mail("info@pisossantcugat.net","Informacion Pisos Sant Cugat","Solicitud informacion Pisos Sant Cugat \r\n$cuerpo","From:$email");

if($ok){	
	echo "<br><br><div style='background:rgba(255, 255, 255, 0.89);  padding:8px; width:233px'><p style='color:#00C !important'>$nom su mensaje ha sido enviado correctamente.<br>Gracias</p><p></p></div><br><br> <a class='btnemail2' href='#' onClick='runEffectConct();'> << Volver</a></p><br><br><br><br><br>";
}else{
	echo "<br><br><div style='background:rgba(255, 255, 255, 0.89);  padding:8px; width:233px'><p style='color:#00C  !important;'>$nom su mensaje no se ha podido enviar.<br>Error en el servidor.<br />Gracias</p><p></p></div><br><br> <a class='btnemail2' href='#' onClick='runEffectConct();'> << Volver</a><br><br><br><br><br>";
}
?>



