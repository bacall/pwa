<?php

/*
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
header('Location: http://www.pisossantcugat.net');
exit();
}
*/


    if(empty($uri[1])){
        $uri[1]= "Pisos en Sant Cugat";
		$keywords="Pisos en Sant Cugat";
		$sw=1;
	}
	if(! empty($uri[2]))
    if($uri[2]=="plantas" && $sw==0){
        $uri[1]="Plantas bajas";
		$keywords="Plantas bajas";
		$sw=1;
	}
	if(! empty($uri[0]))
    if($uri[0]=="sant" && $sw==0){
        $uri[1]= $uri[2];
		$uri[1]=ucfirst($uri[1]);
		$keywords=$uri[1];
		$sw=1;
	}


if(isset($uri[3])){
		//$uri[3]=str_replace("%c3%a0","à",$uri[3]);
		//$uri[3]=str_replace("%c3%b3","ó",$uri[3]);	
        $uri[3]=utf8_encode(utf8_decode(urldecode($uri[3])));
		$uri[1]=$uri[1] . " ";
		$keywords=$uri[1];
	}

	$title=str_replace("+"," ",$uri[1]) . " en Sant Cugat";
	$keywords=str_replace("+"," ",$keywords) . " en Sant Cugat";
?>
<!DOCTYPE html>
<html lang="es" xml:lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Promoción pisossantcugat.net Anna Puget</title>
<meta name="description" content="<?=$title?>. Promoción Ático en Sant Cugat | Pisos Sant Cugat">
<link rel="canonical" href="http://www.pisossantcugat.net/promocionatico/" />
<meta name="description" content="Promoción Ático en Sant Cugat" />
<meta property="og:title" content="Promoción pisossantcugat.net Anna Puget" />
<meta property="og:url" content="http://www.pisossantcugat.net/promocionatico/" />
<meta property="og:description" content="Promoción Ático en Sant Cugat | Pisos Sant Cugat" />
<meta property="og:image" content="http://www.pisossantcugat.net/promocionatico/share.jpg" />
<meta property="og:image:width" content="630" />
<meta property="og:image:height" content="473" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="pisossantcugat.net" />
<meta name='author' CONTENT='pisos sant cugat'>
<meta name='copyright' content='pisos sant cugat'>
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="30 days">
<meta name="keywords" content="<?=$keywords?>">
<link rel="shortcut icon" type="image/x-icon" href="http://www.pisossantcugat.net/favicon.ico" />
 <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <script type="Text/Javascript" src="../assets/js/jquery-1.11.3.min.js"></script>
    <script type="Text/Javascript" src="../assets/js/prefixfree.min.js"></script>
    <!--[if lt IE 10]>
      <script src="../assetsjs/html5shiv.min.js"></script>
     <script type="Text/Javascript" src="../assetsjs/modernizr-2.6.2-respond-1.1.0.min.js"></script>
      <![endif]-->
	 
    </script>
<style>
.nextBtn{left:99%}
</style>
</head>
<body> 
 <div class="container">

        <div class="row">
       
        <div class="col-md-12 header"> 
    <!-- logo -->
  <a  class="headermy" href="<?="http://$_SERVER[HTTP_HOST]"?>">  
      <h1 id="nom">
            ANNA PUGET<span class="nam"></span>
            <span class="r">P<span id="b" class="b">isos</span></span> <span class="g">Sa<span class="r">n<span class="g">t</span></span></span> <span class="g">Cuga<span class="r">t</span></span>
      </h1>
   </a> 
     <a data-action="share/whatsapp/share" href="https://web.whatsapp.com/send?text=Pisos Sant Cugat http://www.pisossantcugat.net/promocionatico/" target="_blank" title="Comparte a Whatsapp"><br><br>
     <span style="font-size:11px; float:left">
   <img src="http://www.pisossantcugat.net/img/whatsapp.jpg" style="margin-top:-13px"></span></a> 
   </div>
    

 

   