<?php 
    $ref=$fotosPisos['ref'];
    $numFotos=(int)$fotosPisos['numFotos'];
	$zona=$fotosPisos['zona'];
    $tipo=$fotosPisos['tipo'];
	$scroll=$fotosPisos["scroll"];

	$i=0;
	while($i < $numFotos){
      $i++;
?>
<form name="form1" method="post" id="form1" enctype="multipart/form-data">
<br><strong style="background:#F00; color:#FFF; padding:8px"><?=$tipo?>-<?=$ref?></strong> <br>
<div class="col-md-12" style="margin-top:21px">
<span>
   <div class="col-md-1">
    	<strong style="background:#F00; color:#FFF; padding:8px"><?=$i?></strong> 
    </div>
    <div class="col-md-4">
       <input name="filex<?=$i?>" type="file" id="filex<?=$i?>" onChange="load('<?=$i?>')"><br>
       <?php 
		$zona=str_replace("-+","-",$zona);
		$zona=str_replace("-"," ",$zona);
		$zona=str_replace(" - "," ",$zona);
		$href=str_replace("---","-","mant/detalle/". $tipo . "/" . str_replace(" ","-",$zona) . "/" . $ref);
		$href=str_replace(" ","_",$href);
	   ?>
       <input type="button" name="enviar<?=$i?>"  id="enviar<?=$i?>" value="Subir imágen" onClick="validarJpg(<?=$i?>);" style="width:144px; background:#0181C8; color:#FFF">
       <input type="button" onClick="window.location.href='<?=base_url($href)?>'" value="Salir" style="width:144px; background:#0181C8; color:#FFF">
    </div>
    <div class="col-md-1">
       &nbsp;
    </div>
    <div class="col-md-6">
        <img class="img-responsive" id="imagen<?=$i?>"  src="http://www.pisossantcugat.net/img/fotos/fotosg/<?=$ref?>-<?=$i?>.jpg?id=<?=time()?>" alt="fotos pisos sant cugat"  name="imagen<?=$i?>"> 
    </div>
</div>


<?php } ?>
<input type="hidden" name="num" id="num" value="">
<input type="hidden" name="ref" id="ref" value="<?=$ref?>">
<input type="hidden" name="numFotos" id="numFotos" value="<?=$numFotos?>">
<input type="hidden" name="zona" id="zona" value="<?=$zona?>">
<input type="hidden" name="tipo" id="tipo" value="<?=$tipo?>">
<input type="hidden" name="scroll" id="scroll" value="<?=$scroll?>">
<div id="capa" style="position:absolute; width:200px; height:115px; z-index:1; left: 382px; top: 117px; display:none">

        <img  id="espera" name="espera" galleryimg="no" src="" width='144' style="display:none; margin-top:13px" alt="cargando">
 
  </div>       
</form>
<div class="col-md-12" style="margin-top:21px">
	&nbsp;
</div>

<script type="application/javascript">
function load(i){
	if( ! window.FileReader ) {
		return false; 
	}
	var file = eval("document.getElementById('filex" + i + "').files[0]");
	var reader = new FileReader();
	reader.onload = function (e) {
		var newimg=eval("document.getElementById('imagen" + i + "')");
		newimg.src= e.target.result;
	}
	reader.readAsDataURL(file); 
}

if (document.documentElement && !document.documentElement.scrollTop){
	document.body.scrollTop=<?=$scroll?>;
}
else if (document.documentElement && document.documentElement.scrollTop){
	document.body.scrollTop=<?=$scroll?>;
}
else if (document.body && document.body.scrollTop){
	document.body.scrollTop=<?=$scroll?>;
}

function validarJpg(numImg){
	if (eval("document.forms[0].filex" + numImg + ".value==''")){
			alert("Falta el archivo imágen .jpg");
            eval("document.forms[0].filex" + numImg + ".focus()");
			return false;
		}
		var nomimg=eval("document.forms[0].filex" + numImg + ".value");
		var miarray=nomimg.split(".");
		var i=0;
		var x=miarray.length;
		while (i < miarray.length){
			if(i==x-1){
				var compara=miarray[i]
				
			}
			i+=1;
		}
		
		if ("jpg"==compara || "JPG"==compara){
            document.getElementById("espera").src="../assets/img/loanding.gif";
			document.getElementById("espera").style.display="block";
            document.getElementById("capa").style.top=document.body.scrollTop + 115;
            document.getElementById("capa").style.display="block";
            document.getElementById("capa").focus();
            document.getElementById("espera").focus();
            document.getElementById("scroll").value=document.body.scrollTop + 75;
            document.forms[0].num.value=numImg;
			document.forms[0].action="<?=base_url('mant/SubirImagen')?>";
			document.forms[0].submit();
		}else{
			 alert("Tiene que ser un fichero .jpg");		
		}
	}
</script>