<?php
foreach($viviendas as $vivienda){		
	$zona=$vivienda->Zona;	
	$zona=str_replace("-+","-",$zona);
	$zona=str_replace("-"," ",$zona);
	$zona=str_replace(" - "," ",$zona);
	$href=str_replace("---","-",$vivienda->Tipus . "/" . str_replace(" ","-",$zona) . "/" . $vivienda->Ref);
	$href=str_replace(" ","_",$href);
?>
<div class="col-md-12 vivienda">
        <div id="carou" class="col-md-3">
             <a  href="<?=base_url('detalle/') . $href?>">
               <span class="desctipus"><?= ucfirst($vivienda->DescTipus)?></span>
               <ul  class="sant-cugat foto">
                    <li><?= $vivienda->Zona?></li>
           	   </ul> 
               <img src="http://www.pisossantcugat.net/img/fotos/fotosg/<?=$vivienda->Ref?>-1.jpg" style=" max-width:240px;box-shadow: 8px 3px 13px rgba(144, 144, 144, 0.8);">     	
             </a>     
              
        </div>
    <?
    $Euros=number_format($vivienda->PreuEuros,0,',','.');
	if($vivienda->PreuEuros=="0"){
	          $Euros="Consultar Precio";
	}    
    ?>
    <div class="col-md-1">&nbsp;</div>
       <div class="col-md-6">
       		<a href="<?=base_url('detalle/') . $href?>">
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