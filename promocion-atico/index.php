<?php
include "header.php";


?>
 <?php
	  $useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
$movil=1;	
}
?>
<?php if($movil!=1){ ?>
<div id="my" class="col-md-12" style="position:absolute;background-color:rgba(255, 255, 255,0); z-index:1001;width:100%; display:none; margin-top:2%; left:5%">

        <!-- Wrapper for carousel items -->
        <div style=" width:100%">
 
                
          
          
          <div style="width:100%" id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
          
                  <div id="photbig" onClick="document.getElementById('my').style.display='none'; document.body.style.background='#FFF';document.getElementById('izq').style.display='block';document.getElementById('carou').style.display='block'">
   					 			X
    			  </div> 
    <!-- Carousel items -->
    <div class="carousel-inner">
        
        
          <? for($i=1; $i<=19; $i++){ ?>
              <? if($i==1){ ?> 
            <div class="active item">
             <? }else{ ?>
             <div class="item">
              <? } ?>
            	<img id="imgslider" src="http://www.pisossantcugat.net/promocionatico/1145-<?=$i?>.jpg" alt="Ático en Sant Cugat del Vallès"  style="width:89%"/>
           </div>    
             <? } ?> 
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control right" href="#carousel" data-slide="prev" style="background-image:none; margin-top:21%; left:-1.5%; font-size:121px; color:#337ab7; opacity:1; background:rgba(255,255,255,0.1); height:189px">&lsaquo;</a>
    <a class="carousel-control left" href="#carousel" data-slide="next" style="background-image:none; left:73%; margin-top:21%; font-size:121px; color:#337ab7; opacity:1; background:rgba(255,255,255,0.1); height:189px">&rsaquo;</a>
    
</div>

        </div>
        
        
      
    </div>
    </div>
    <?php } ?>
   
<script type="text/javascript" src="../assets/js/jquery.sudoSlider.min.js"></script>

    <div  class="col-md-12 izq" id="izq"> 
        <h2 class='tit2'><a class="zona"  href="#"><?=$desctipus?>  <?=$zona?> &nbsp;</a></h2>
    <br><a class="zona"  href="#"> <span class="ref">Ático Dúplex Sant Cugat - Eixample</span> </a>
    
  <img id="loandingDetalle" src='../img/loanding.gif' width='144' style="display:none; margin-top:13px" alt="cargando">
    <div class="descrip">

			Luminoso ático de inmejorables vistas. Emplazado en una de las zonas más cotizadas de Sant Cugat. En una zona residencial tranquila y a la vez, próxima a la estación de los FGC, centros de enseñanza públicos y privados. Al lado del mercado municipal y ESADE. Elegante finca de pocos vecinos. Este práctico ático tiene una superficie de 137m2. En planta se encuentra un luminoso salón comedor con chimenea, y acceso a una agradable terraza de excelentes vistas despejadas hacía la montaña y a la zona ajardinada. Amplia cocina office exterior con cuarto lavadero independiente. Asimismo, dispone de cuatro habitaciones exteriores que también gozan de agradables vistas, tres dobles, una en suite y otra individual. Dos baños completos. En la parte superior se ubica un holgado estudio abuhardillado con diferentes zonas de trabajo. Excelente distribución y orientación. Sol todo el día. Una plaza de aparcamiento con cuarto trastero. Cuidada zona ajardinada con parque infantil y piscina.
            <br><br><p class="preciodetalle">670.000 €</p>
    
<br><br>

      <div>
      <a class="ant" href="../">&larr; Atrás &nbsp;&nbsp;</a>&nbsp;
      <?php
	  $useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
$movil=1;

if(!strpos($_SERVER['HTTP_USER_AGENT'],"webview")){
	
?>

<a data-action="share/whatsapp/share" style="background:#FFF" class="whatsapp" href="whatsapp://send?text=Ático en Sant Cugat http://www.pisossantcugat.net<?=$_SERVER[REQUEST_URI]?>"><span style="font-size:11px"><img style="margin-top:-13px" src="../img/whatsapp.jpg"></span></a>
<?php
}
}
?>
      <a id="buttoncDetalle" class="ant"> Compartir &nbsp; <img style="margin-top:-5px" src="../img/enviaremail.png" alt="email"></a>
      </div> 
 </div>
    <div id="wrap" class="col-md-5">  <br><br>
    	<div id="wrapconct" style=" display:none; width:100%">  
               <strong>Compartir Casa </strong>                            
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
                       <a class="btnemail2" href="#" onClick="runEffectConct(); return false">Cancelar</a>
                  </div>   
       		</div>
      	</div>				
   </div><br><br>
</div>

<div id="carou" class="col-md-12">
<div id="loandingimg" class="col-md-12" style="text-align:center"> <img src='../img/loanding.gif'  alt="actualizando"  style="margin-top:13px; opacity:0.61; width:144px"></div>
        <div id="slider" style="display:none; cursor:pointer" onClick="document.getElementById('b').style.color='#585858';document.getElementById('my').style.display='block';document.getElementById('izq').style.display='none';document.getElementById('carou').style.display='none' ">
        <ul class="slidex">
		      <? for($i=1; $i<=19; $i++){ ?>
            	<li><img id="imgslider" src="http://www.pisossantcugat.net/promocionatico/1145-<?=$i?>.jpg" alt="Ático en Sant Cugat del Vallès"/></li>
             <? } ?> 
             </ul>
        </div>
        <div class="col-md-12" id="fotospeq" style="display:none">
        <ul class="carousel">
   <? for($i=1; $i<=19; $i++){ ?>
			<li><img class="customLink current" data-target="<?=$i?>" src="http://www.pisossantcugat.net/promocionatico/1145-<?=$i?>.jpg" alt="Ático en Sant Cugat del Vallès""></li>   
			<? } ?> 
            </ul>
	  </div>
</div>

 


<div class="col-md-12"> &nbsp; </div>
 <br><br>
</div> 
</div>

 <script type="text/javascript"> 

	if (screen.width>767){  
       $(window).load(function(){
				var sudoSlider = $("#slider").sudoSlider({
					responsive: true,
					customLink:'.customLink',
					prevNext:true,
					continuous: true,
					effect: 'pushOut'
				});
				$("#loandingimg").css("display","none");
				$("#slider").css("display","block");
				$("#fotospeq").fadeIn(1500);
				
        });
	}else{
		$("#loandingimg").css("display","none");
		$(".slidex li").css("text-align","center");
		$(".slidex li").css("margin-bottom","21px");
		
		$("#slider").css("margin-left","-3%");
		$("#slider").css("display","block");
	}
		
</script>     
    
<?php


include "footer.php";
?>