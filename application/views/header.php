<?php

    $sw=0;
    $uri=explode("/",$_SERVER['REQUEST_URI']); 
    $uriserver=$uri;
	
	if(!empty($viviendas)){
		$descripcion=substr(strip_tags($viviendas[0]->DescLarga),0,230);
	}else{
		$descripcion="";	
	}
	$urlDetalle="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
    $uri=explode("-",$uri[1]);

    if(empty($uri[1])){
        $uri[1]= "Pisos en Sant Cugat del Vallès, torres, viviendas, alquileres";
		$keywords="Pisos en Sant Cugat del Vallès, Torres en Sant Cugat del Vallès, Plantas bajas en Sant Cugat del Vallès, Aticos en Sant Cugat del Vallès, Alquileres en Sant Cugat del Vallès";
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
		if(! empty($uri[2])){
        $uri[1]= $uri[2];
		}		
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
    if(!empty($viviendas)){
		$title=$viviendas[0]->Tipus . " en " . str_replace("-"," ", $viviendas[0]->Zona) . ". " .  substr($descripcion,0,25);
        $title=str_replace("Sant Cugat","Sant Cugat del Vallès", $title);
	}else{
		$title=str_replace("-"," ",$uri[1]);
	}

	if($uriserver[1]=="sant-cugat"){
		if($uriserver[2]=="plantas"){
			$uriserver[2]="Plantas bajas";
			$keywords="Plantas bajas";
		}
		if($uriserver[2]=="otras-ciudades"){
			$title=str_replace("-"," ", ucfirst($uriserver[2]) . " en " . ucwords($uriserver[3]));
			$keywords=ucfirst($uriserver[2]);
		}else{
		    $title=str_replace("-"," ", ucfirst($uriserver[2]) . " en Sant Cugat del Vallès");
			$keywords=ucfirst($uriserver[2]);
		}
	}
	$keywords=str_replace("-"," ",$keywords);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title?></title>
    <meta name="keywords" content="<?=$keywords?>">
	<? if($descripcion!=""){ ?>
<meta name="description" content="<?=$descripcion?>.">
    <? 
	}else{ 
		$descripcion=$title . ". Agencia inmobiliaria desde hace más de 15 años";
	?>
<meta name="description" content="<?=$descripcion?>.">
    <? } ?>
<meta name='author' CONTENT='pisos sant cugat'>
    <meta name='copyright' content='pisos sant cugat'>
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="30 days">    
    <link rel="canonical" href="<?=$urlDetalle?>"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?=$title?>"/>
    <meta property="og:description" content="<?=$descripcion?>"/>
    <meta property="og:url" content="<?=$title?>"/>
    <meta property="og:site_name" content="<?=$title?>"/>
    <?php if(!empty($viviendas)){ ?>
<meta property="og:image" content="http://www.pisossantcugat.net/img/fotos/fotosg/<?=$viviendas[0]->Ref?>-1.jpg"/>
    <?php }else{ ?>
<meta property="og:image" content="http://www.pisossantcugat.net/img/pisos-sant-cugat-net.jpg"/>
    <?php } ?>
<meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <link rel="shortcut icon" type="image/x-icon" href="http://www.pisossantcugat.net/favicon.ico" />
    <!--Color aplicación -->
    <meta name="theme-color" content="#FB314E" />
    <!--Optimización para móvil  -->
    <meta name="MobileOptimized" content="width" />
    <meta name="HandhelfFriendly" content="true" />
    <!--Etiquetas PWA para Apple -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="blak-translucent" />
    <link rel="apple-touch-icon" href="<?=base_url('favicon.ico')?>" />
    <link rel="apple-touch-startup-image" href="<?=base_url('favicon.ico')?>" />
    <!--Configuración genneral PWA --> 
    <link rel="manifest" href="<?=base_url('manifest.json')?>" />
    
    
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/css/main.css')?>" />
    <!--[if lt IE 10]>
      <script src="js/html5shiv.min.js"></script>
     <script type="Text/Javascript" src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
      <![endif]-->
      <script type="text/javascript"  src="<?=base_url('assets/js/serviceworker.js')?>"></script>
 <script type="application/ld+json">
	  {
		  "@context" : "http://schema.org/RealEstateAgent",
		  "@type" : "LocalBusiness",
		  "name" : "Pisos Sant Cugat",
		  "address" : {
		  "addressLocality" : "Sant Cugat del Valles",
		  "addressRegion" : "Barcelona",
		  "postalCode" : "08173"
      	  }
	  }
    </script>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-64424019-1', 'auto');
	  ga('send', 'pageview');
</script>  

</head>
<body>
 <div class="container">
    <div id="myrow" class="row">
         <div class="col-md-12 header"> <br>
            <a  class="headermy" href="<?=base_url()?>">  
                     <h1 id="b"> Pisos en Sant Cugat del Vallès</h1> &nbsp;
                     <h2 id="nom"> ANNA PUGET </h2>                    
            </a> <br><br><br><br> 
         </div>