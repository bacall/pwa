<?php
$i=0;
foreach($viviendas as $vivienda){		
	$zona=$vivienda->Zona;	
	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
	$zona=str_replace("-+","-",$zona);
	$zona=str_replace("-"," ",$zona);
	$zona=str_replace(" - "," ",$zona);
	$href=str_replace("---","-",$vivienda->Tipus . "/" . str_replace(" ","-",$zona) . "/" . $vivienda->Ref);
	$href=str_replace(" ","_",$href);
	$href=strtr( $href, $unwanted_array );
	$href=strtolower($href);

?>
<?php
	if($i==0){
		$tipo=ucfirst(basename($_SERVER['REQUEST_URI']));
			   switch ($tipo) {
					case "Plantas":
						$tipo="Plantas Bajas";
						break;
					case "Terreno":
						$tipo="Terrenos";
						break;
					case "Aticos":
						$tipo="Áticos";
						break;
				}
				
				$desctipo=ucfirst($vivienda->DescTipus);
				 switch ($desctipo) {
					case "Atico":
						$desctipo="Ático";
						break;
					case "Atico Duplex":
						$desctipo="Ático Duplex";
						break;
				 }
?>
<div class="col-md-3 viv"><h2 class="tit"><?=$tipo?></h2></div>
<?php
	$i++;
	}
?>
<div class="col-md-12 vivienda">
        <div id="carou" class="col-md-3">
            <a  href="<?=base_url('detalle/') . $href?>">
               <span class="desctipus"><?=$desctipo?></span>
               <ul  class="sant-cugat foto">
                 <?php
				   $lazona= $vivienda->Zona;
				   $lazona=str_replace("Sant Cugat","Sant Cugat del Vallès",$lazona);
				 ?>
                    <li class="desczona"><?= $lazona?></li>
           	   </ul> 
                <img src="http://www.pisossantcugat.net/img/fotos/fotosg/<?=$vivienda->Ref?>-1.jpg" alt=<?=$tipo?> style=" max-width:240px;box-shadow: 8px 3px 13px rgba(144, 144, 144, 0.8);">     	                                	
             </a>               
        </div>
    <?php
    $Euros=number_format($vivienda->PreuEuros,0,',','.');
	if($vivienda->PreuEuros=="0"){
	          $Euros="Consultar Precio";
	}    
    ?>
    <div class="col-md-1">&nbsp;</div>
       <div class="col-md-6">
       		 <a style="text-decoration:underline;text-decoration-color:#5588cc" href="<?=base_url('detalle/') . $href?>">
              <br>
       		  <ul class="sant-cugat corta">
                 <li><?=$vivienda->DescCorta?></li>
             </ul>
           </a>                 
       </div>
       <div class="col-md-1">&nbsp;</div>
       <div class="col-md-1 td">
       		<a href="<?=base_url('detalle/') . $href?>">
                <div class="refsantcugat">ID: <?=$vivienda->Ref ?></div>
                   <div class="precios">
                   <?=$Euros?>&nbsp;€
                   </div>
                </a>    			
       </div>
      
</div>
<div class="col-md-12" style="height:55px">
<hr class="divido" >
</div>

<?php
}
?>
<div class="col-md-12">
    <ul class="pager">
      <li><a href="../"> &larr; Inicio</a></li>
    </ul>
</div>
<div class="col-md-12">&nbsp;</div>