<style>
.container{ width:100%; padding:0; margin:0;max-width: 100%}
.row{ width:100%; padding:0 21px 0 21px; margin:0; height:100%;max-width: 100%}
img.customLink { width:89px}
.header{ z-index:999; background:rgba(255,255,255,0.5)}
#slider, #slider img{ box-shadow:none;max-height:100%; max-width:100%}
.col-md-12{ width:100%; margin:0; height:100%;max-width: 100%}
body {overflow-x:hidden;}
#fotospeq{ margin-top:-8px}
.carousel-control{background-image:none !important; font-size: 89px;top: 34%;}
.glyphicon-zoom-in{font-size: 34px !important; color:#EEE !important; z-index:333; top: 5%}
.glyphicon-zoom-out{font-size: 34px !important; z-index:333; top: 5%}
.item img{ width:100%}
.current{ border:solid rgba(255,255,255,0)}
.current:hover{animation: myanim 1s;  animation-iteration-count: 1;animation-fill-mode: forwards}
.current2{animation: myanim2 1s;  animation-iteration-count: 1;animation-fill-mode: forwards}
myanim2{ transform-origin: 0 0; transform: scale(1);  }

.closex{opacity:1 !important;}
.glyphicon { font-size: 89px;cursor: pointer;color:#5588CC;}
.glyphicon:hover{opacity:0.8}
.carousel.active {
    border:solid rgba(9,9,9,1)
}
.slider-navigation {
     opacity: 1;
    }
    

    
    .selected .slider-navigation {
		/*transform: scale(2);
		 transform-origin: 0 89px; */
		 border-bottom:solid 2px #5588cc;
		
    }	
	.slider-navigation {
		/*transform: scale(1);
		 transform-origin: 0 0; */
		 
    }
@keyframes myanim {
  0% {
  }
  100% {
	/* transform-origin: 0 45px; */

	 transform: scale(1);   
  }
}
@keyframes myanim2 {
  0% {
	  
  }
  100% {
	/* transform-origin: 0 0; */
		
	 transform: scale(1);   
  }
}
</style>
<?php

if(empty($viviendas)){
    $myurl= $_SERVER['HTTP_HOST'];
	header("Location: http://$myurl");
}
foreach($viviendas as $vivienda){
	$numfotos=$vivienda->NumFotos;
			$Euros=number_format($vivienda->PreuEuros,0,',','.');
				if($vivienda->PreuEuros=="0"){
					  $Euros="Consultar Precio";
				}
				$desctipus=$vivienda->DescTipus;
											
					switch ($desctipus) {
						case "Atico":
							$desctipus="Ático";
							break;
						case "Atico Duplex":
							$desctipus="Ático Dúplex";
							break;
						case "Piso Duplex":
							$desctipus="Piso Dúplex";
							break;
					}
					
					$zona=str_replace("-", " - ", $vivienda->Zona);
	?>
  
    <?php
	
	if($ismobile=="movil"){	
	?>
    
	<div  class="col-md-12 izq" style="top:0px"> 
<? }else{ ?>

    <div id="izq" class="col-md-5 izq">
<? } ?>

	<h2 class='tit2'><a class="zona"  href="#"><?=$desctipus?>  <?=$zona?> &nbsp;</a></h2>
    <br><a class="zona"  href="#"> <span class="ref">Referencia: <?=$vivienda->Ref ?> </span> </a>   
  <img id="loandingDetalle" src="<?=base_url('assets/img/loanding.gif')?>" width='144' style="display:none; margin-top:5%; padding-bottom:13px" alt="cargando">
    <div class="descrip">
		<p><?=$vivienda->DescLarga?></p>
	    <br><br>
        <p class="preciodetalle"><?=$Euros?> €</p> 
        <br><br>
      <a class="ant" href="javascript:history.back(-1);">&larr; Atrás &nbsp;&nbsp;</a>&nbsp;
      <?php $urlDetalle="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
      <?php if($ismobile!="movil"){ ?>
      	<a target="_blank" href="https://web.whatsapp.com/send?text=Pisos Sant Cugat <?="http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>"><span style="font-size:11px">
        	<img src="http://www.pisossantcugat.net/img/whatsapp.jpg" style="margin-top:-13px" alt="compartir whatsapp"></span>
        </a>
      <?php } ?>
      <a id="buttoncDetalle" class="ant"> Compartir &nbsp; <img style="margin-top:-5px" src="<?=base_url('assets/img/enviaremail.png')?>" alt="email"></a>
      <?php if($ismobile=="movil"){ ?>
				<br><br><a style="background:#FFF" class="whatsapp" href="whatsapp://send?text=Pisos Sant Cugat <?="http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>"><span style="font-size:11px">
                <img src="<?=base_url('assets/img/whatsapp.jpg')?>"  alt="compartir whatsapp"></span></a> 
           <? } ?> 
       
 </div>
    <div id="wrap" class="col-md-5">
    	<div id="wrapconct" style=" display:none; width:100%">  
               <strong>Compartir <?=$vivienda->DescTipus?></strong>                            
             <div class="col-md-8"  id="micol2conct"><br>
                  <label for="nombre">Nombre:</label><br>
                  <input class="mailelemet" name="nombre" id="nombre"/><br>
                  <label for="nombre">Email:</label><br>
                  <input class="mailelemet" name="email" id="email" /><br>           
                  <label for="nombre">Asunto:</label><br>
                  <textarea class="mailelemetext"  name="asunto"  id="asunto"></textarea><br>
                  <input type="hidden" id="compartir" name="compartir" value="<?=$urlDetalle?>">
                  <input  type="hidden"  name="telefono" id="telefono" value="" />
                  <div class="divbtnemail">
                       <a class="btnemail1" href="#" onClick="enviarDetalle(); return false"> Enviar </a> 
                       <a class="btnemail2" href="#" onClick="runEffectConctDetalle(); return false">Cancelar</a>
                  </div>   
       		</div>
      	</div>				
   </div><br><br>
   </div>
   <?php

			if($ismobile=="movil"){
			?>
                            <br><br>
                            <? for($i=0; $i<$numfotos; $i++){ ?>							              
                                   <div class="col-md-12" style="text-align:center">                                                                     
                                       <a>                                       
                                           <img src="http://www.pisossantcugat.net/img/fotos/fotosg/<?=$vivienda->Ref?>-<?=$i+1?>.jpg" class="img-responsive"  alt="<?= $vivienda->Zona . " " .  $vivienda->DescTipus?>">
                                       </a><br>
                                   </div> 
                            <? } ?> 
	 <?php
			}
	 ?>


<?php
} 				   
if($ismobile!="movil"){					
?>

<div id="carou" class="col-md-7">
<div id="loandingimg" class="col-md-12" style="text-align:center"> <img src="<?=base_url('assets/img/loanding.gif')?>"  alt="actualizando"  style="margin-top:13px; opacity:0.61; width:144px"><br><br></div>

<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">  
                <? for($i=0; $i<$numfotos; $i++){ ?>
					<?php if($i==0){ ?>
                        <div class="item active"  data-slide-number="<?=$i?>"> <img id="imgitem1" src="http://www.pisossantcugat.net/img/fotos/fotosg/<?=$vivienda->Ref?>-<?=$i+1?>.jpg"   alt="<?= $vivienda->Zona . " " .  $vivienda->DescTipus?>-<?=$i?>"> </div> 
                    <?php }else{ ?>
                    <div class="item" data-slide-number="<?=$i?>"> <img id="imgitem2" src="http://www.pisossantcugat.net/img/fotos/fotosg/<?=$vivienda->Ref?>-<?=$i+1?>.jpg"    alt="<?= $vivienda->Zona . " " .  $vivienda->DescTipus?>-<?=$i?>"></div>
                    <?php } ?>
                <? } ?>                    
           </div>    
                <a style="top:34px"  class="carousel-control right closex"><span onClick="closex()" id="openclose" class="glyphicon glyphicon-zoom-in"></span></a>            
                <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>  
        		<a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
            
            </div>    
             
        
   					<div class="col-md-12" id="fotospeq" style="display:none; text-align:center">
                        <ul  class="carousel">
                            <? for($i=0; $i<$numfotos; $i++){ ?>
                            							              
                                        <li  data-target="#carousel" data-slide-to="<?=$i?>">
                                
                                 <?php if($i==0){ ?>	                                                                  
                                       <a id="carousel-selector-<?=$i?>" class="selected">     
                                  <?php }else{ ?> 
                                         <a id="carousel-selector-<?=$i?>">
                                   <?php } ?> 
                                                                         
                                           <img  class="slider-navigation customLink current" id="img<?=$i?>" onMouseOver="changecls2(this.id)" onClick="changecls(this.id)" src="http://www.pisossantcugat.net/img/fotos/fotosg/<?=$vivienda->Ref?>-<?=$i+1?>.jpg"  alt="<?= $vivienda->Zona . " " .  $vivienda->DescTipus?>">
                                       </a>
                                    </li>   
                            <?php } ?> 
                        </ul>
	         	    </div>  
                  </div>    
      
</div>

<script type="text/javascript"  src="<?=base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
<script type="application/javascript">
$( document ).ready(function() {
	$('#carousel').carousel({
		<? if($ismobile!='tablet'){?>
	  		interval: 3000
	  <? } ?>
	  <? if($ismobile=='tablet'){?>
	  		interval: false
	  <? } ?>
	});
	$('#carousel').on('slid.bs.carousel', function(e) {
	  var id = $('.item.active').data('slide-number');
	  id = parseInt(id);
	  $('[id^=carousel-selector-]').removeClass('selected');
	  $('[id=carousel-selector-' + id + ']').addClass('selected');
	});
});
 
function closex(){
	if( document.getElementById("izq").style.display=="none"){
		location.reload();
	}else{
	    document.getElementById("carou").style.marginTop="-84px";
	    document.getElementById("imgitem1").style.height="130vh";
	    document.getElementById("imgitem2").style.height="130vh";
	    document.getElementById("carou").style.padding="0";
	    document.getElementById("myrow").style.padding="0";
	    document.getElementById("myrow").style.margin="0";
	    document.getElementById("myrow").style.width="100%";
	    document.getElementById("izq").style.display="none";
		document.getElementById("carou").style.width="100%";
		document.getElementById("fotospeq").style.display="none";
		document.getElementById("openclose").classList.remove("glyphicon-zoom-in");
		document.getElementById("openclose").classList.toggle("glyphicon-zoom-out");
	}
		
} 
function changecls(id) {
    var el = eval("document.getElementById('" + id + "')");
	el.classList.remove("current");
	el.style.zIndex="999";
	el.classList.add("current2");	
}
function changecls2(id) {
    var el = eval("document.getElementById('" + id + "')");
	el.classList.remove("current2");
	el.style.zIndex="0";
	el.classList.add("current");	
}

</script>
<? } ?>

