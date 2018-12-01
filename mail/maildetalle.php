<?
error_reporting(0);
$nom=$_GET["nom"];
$email=trim($_GET["email"]);
$validate=filter_var($email, FILTER_VALIDATE_EMAIL);
if ($validate==false) {
	echo "<br><br><div style='background:rgba(255, 255, 255, 0.89);  padding:8px; width:233px'><p style='color:#F00 !important;font-weight:bold'>Falta la dirección email</p></div><br><br> <a class='btnemail2' href='#' onClick='runEffectConct();'> << Volver</a></p><br><br><br><br><br>";
   exit();
}
     $asunto=$_GET["asunto"];
	 $_GET["compartir"]=utf8_decode($_GET["compartir"]);
	 $compartir=" Link < " . str_replace(" ", "+" ,$_GET["compartir"]) . " >\r\n\r\n";
	


$fecha=time();
$fecha=strftime("%d-%m-%Y %H:%M:%S",$fecha);
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
$asunto=utf8_decode($_GET["asunto"]);
$cuerpo="Fecha :$fecha \r\nNom :$nom\r\nEmail :$email \r\nAsunto :$asunto";
$to = "$email,info@pisossantcugat.net";
$ok =mail($to,"Compartir vivienda de www.pisossantcugat.net","Envio para compartir vivienda  \r\n $cuerpo\r\n $compartir","From:$email");

if($ok){	
	echo "<br><br><div style='background:rgba(255, 255, 255, 0.89);  padding:8px; width:233px'><p style='color:#00C !important'>$nom su mensaje ha sido enviado correctamente.<br>Gracias</p><p></p></div><br><br> <a class='btnemail2' href='#' onClick='runEffectConctDetalle();'> << Volver</a></p><br><br><br><br><br>";
}else{
	echo "<br><br><div style='background:rgba(255, 255, 255, 0.89);  padding:8px; width:233px'><p style='color:#00C  !important;'>$nom su mensaje no se ha podido enviar.<br>Error en el servidor.<br />Gracias</p><p></p></div><br><br> <a class='btnemail2' href='#' onClick='runEffectConctDetalle();'> << Volver</a><br><br><br><br><br>";
}
?>



