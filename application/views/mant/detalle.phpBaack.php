<?php foreach($viviendas as $vivienda){ ?>
<form name="form1" id="form1">
 <div class="row" style="max-width:100%">
     <div class="col-md-12">
     	<div class="col-md-2"> 
        	<strong>Ref:</strong> <input name="ref" type="text" id="ref" value="<?=$vivienda->Ref ?>" size="4" maxlength="4">
            <p style="background:#FFFFCC;margin-bottom:13px">Nº de Referencia</p>        
        </div>
        <div class="col-md-2">
        <strong>Tipo:</strong>
        <select name="tipus"  id="tipus">
        	<option value="0"></option>
        	<?php foreach($tipos as $tipo){ ?>
          		<option value="<?=$tipo->Tipus?>"><?=$tipo->Tipus?></option>
          	<? } ?>
        </select>
        <p style="background:#FFFFCC; margin-bottom:13px">Piso, Alquiler, Torre</p>  
        </div>
       
        <div class="col-md-3"> 
        	<strong>Nuevo Tipo:</strong> <input name="nuevoTipo" type="text" id="nuevoTipo" value="" size="13">
            <p style="background:#FFFFCC;margin-bottom:13px">Si és un nuevo Tipo</p> 
        </div>
        <div class="col-md-3"> 
        <strong>Otra Zona:</strong>
            <select name="otrazona"  id="otrazona" onChange="activarlocalitat(this.value);" >
                <option value="1">1</option>
                <option value="0">0</option>
            </select>
            <p style="background:#FFFFCC;margin-bottom:13px">Si és Sant Cugat 1 si no 0 </p> 
        </div>
        <div class="col-md-2"> 
            <strong>Nueva:</strong>
            <select name="nova"  id="nova" >
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
            <p style="background:#FFFFCC;margin-bottom:13px">Obra Nueva 1 </p>   
        </div>
      </div>
     
       <div class="col-md-12">
        <div class="col-md-2"> 
        <strong>Tipo+</strong>
            <select name="DescTipus"  id="DescTipus" >
           		 <option value="0"></option>
            <?php foreach($tiposDetalles as $tipoDetalle){ ?>
          		<option value="<?=$tipoDetalle->DescTipus?>"><?=$tipoDetalle->DescTipus?></option>
          	<? } ?>
                 
            </select>
            <p style="background:#FFFFCC;margin-bottom:13px">Piso, Adosada, Duplex</p>   
        </div>
         <div class="col-md-3">
         <strong>Nuevo Tipo +:</strong> <input name="nuevoTipo+" type="text" id="nuevoTipo+" value="" size="13">
            <p style="background:#FFFFCC;margin-bottom:13px">Si és un nuevo Tipo +</p>
        </div>     
        
        <div class="col-md-3">
        	<strong>Localidad: </strong> <input name="localidad" type="text" id="localidad" value="<?=$vivienda->Localidad?>" disabled="disabled">
            <p style="background:#FFFFCC;margin-bottom:13px">Si és Sant Cugat dejarlo en blanco</p> 
        </div>
        <div class="col-md-2">
            <strong>Video:</strong>
            <select name="video"  id="video" >
                <option value="1">1</option>
                <option value="0">0</option>
            </select>
            <p style="background:#FFFFCC;margin-bottom:13px">Sin Video 1</p> 
        </div>
        <div class="col-md-2">
            <strong>Diseño:</strong>
            <select name="diseny"  id="diseny">
               <option value="no">no</option>
               <option value="si">si</option>
            </select>
            <p style="background:#FFFFCC;margin-bottom:13px">Especial poner si y avisar para hacerlo</p> 
        </div>
     </div>
    

    <div class="col-md-12" style="margin-top:21px">
        <div class="col-md-8">
        	<strong style="background:#ddd; padding:8px">Zona: </strong> &nbsp; <input name="zona" type="text" id="zona" value="<?=$vivienda->Zona?>" size="25" maxlength="25"> 
            &nbsp;&nbsp;&nbsp;&nbsp;<strong style="background:#ddd; padding:8px">Fotos: </strong> &nbsp; <input type="text" name="fotos"  id="fotos" value="0">
        </div>  
        <div class="col-md-4">
        	&nbsp;
        </div>  
    </div>
     <div class="col-md-12" style="margin-top:21px">
        <div class="col-md-8">
        	<strong style="background:#ddd; padding:8px">Descripción Corta: </strong> &nbsp; <input style="max-width:100%" name="descc" type="text" id="descc" value="<?=$vivienda->DescCorta?>" size="65" maxlength="80">
        </div>  
        <div class="col-md-4">
        	&nbsp;
        </div>  
    </div>
    <div class="col-md-12" style="margin-top:21px">
          <div style="width:auto; float:left">
          		&nbsp;&nbsp;&nbsp;&nbsp;<strong style="background:#ddd; padding:8px">Descripción Larga: </strong> &nbsp;&nbsp;
          </div>
          <div class="col-md-8" name="descllarga" id="descllarga" style="border-color:#999999; border-style:solid; border-width:thin;  font-family:Arial, Helvetica, sans-serif; font-size:13px; min-height:144px" contenteditable="true">
          		<?=$vivienda->DescLarga?>
          </div>
         
         <div class="col-md-2">
         		&nbsp;
         </div>
   </div>
    <div class="col-md-12">
    <div class="col-md-2">
    &nbsp;
    </div>
     <div class="col-md-8">
     <p style="background:#FFFFCC;margin-bottom:13px">Para negrita poner negrita:  <strong>&lt;b&gt;xxxx:&lt;/b&gt;</strong> - Para salto de linea poner: <strong> &lt;br&gt;</strong></p>
     </div>
      <div class="col-md-2">
    &nbsp;
    </div>
    </div>
   <div class="col-md-12" style="margin-top:21px">
        <div class="col-md-3">
        	<strong style="background:#ddd; padding:8px">Euros: </strong> &nbsp; <input  type="text" name="euros" id="euros" value="<?=$vivienda->PreuEuros?>">
            <p style="background:#FFFFCC;margin-bottom:13px">Sin punto</p>
        </div>  
        <div class="col-md-9">
        	&nbsp;
        </div>  
  </div>
     
  <div class="col-md-12" style="margin:21px 0 34px 0; text-align:center">
        <div class="col-md-2">
       		<input name="buttonn" id="buttonn" type="button" onClick="nou();" class="botones"  value="Nuevo" style="width:144px">
       </div>
        <div class="col-md-2">
       		<input name="button" type="button" onClick="desar();"  class="botones" value="Guardar" style="width:144px">
       </div>
        <div class="col-md-2">
      		 <input name="buttone" id="buttone" type="button" onClick="eliminar('<?=$vivienda->Ref?>');"  class="botones" value="Eliminar" style="width:144px">
       </div>
        <div class="col-md-2">
      		 <input name="buttonm" id="buttonm" type="button"  class="botones" onClick="fotosModi();"  value="Modificar Fotos" style="width:144px">
       </div>
        <div class="col-md-2">
       		<input name="buttons" id="buttons" type="button" class="botones" onClick="window.location.href='<?=base_url('mant')?>'"  value="Salir" style="width:144px"> 
       </div>
        <div class="col-md-2">
       		 &nbsp;
        </div>   
  </div> 
</div>

  	<input type="hidden" id="ultimo" name="ultimo" value="<?=($ultimo[0]->Ref+1)?>">
  	<input type="hidden" id="accion" name="accion" value="">
  	<input type="hidden" id="num" name="num" value="">
	<input type="hidden" id="tipo" name="tipo" value="">
	<input type="hidden" id="descllarga2" name="descllarga2" value="">
	<input type="hidden" id="desctipo" name="desctipo" value="">
</form>  
<script language="JavaScript">   
	if(document.getElementById("otrazona").value=="1"){
			document.getElementById("localidad").disabled=true;
	}
	document.getElementById("ref").disabled=true;
	
	document.getElementById("fotos").value = "<?=$vivienda->NumFotos?>";
	cont = document.forms[0].tipus.length;
		for(i=0;i<cont;i++){
			  if (document.forms[0].tipus.options[i].value == '<?=$vivienda->Tipus?>') {
				  document.forms[0].tipus.selectedIndex = i;
			  }
		 }
	cont = document.forms[0].nova.length;
		for(i=0;i<cont;i++){
			  if (document.forms[0].nova.options[i].value == '<?=$vivienda->Nova?>') {
				  document.forms[0].nova.selectedIndex = i;
			  }
		 }	
		   
	cont = document.forms[0].DescTipus.length;
		for(i=0;i<cont;i++){
			  if (document.forms[0].DescTipus.options[i].value == '<?=$vivienda->DescTipus?>') {
				  document.forms[0].DescTipus.selectedIndex = i;
			  }
		 }
		 cont = document.forms[0].video.length;
		for(i=0;i<cont;i++){
			  if (document.forms[0].video.options[i].value == '<?=$vivienda->Video?>') {
				  document.forms[0].video.selectedIndex = i;
			  }
		 }
		 cont = document.forms[0].otrazona.length;
		for(i=0;i<cont;i++){
			  if (document.forms[0].otrazona.options[i].value == '<?=$vivienda->OtraZona?>') {
				  document.forms[0].otrazona.selectedIndex = i;
			  }
		 }
		cont = document.forms[0].otrazona.length;
		for(i=0;i<cont;i++){
			  if (document.forms[0].diseny.options[i].value == '<?=$vivienda->Diseny?>') {
				  document.forms[0].diseny.selectedIndex = i;
			  }
		 }		
			
	function activarlocalitat(valor){
		if(valor=="0"){
			document.getElementById("localidad").disabled=false;
			document.getElementById("localidad").focus();
		}else{
			document.getElementById("localidad").value="";
			document.getElementById("localidad").disabled=true;
		}
	}
	
	function veure(){
	window.location.href="../detalle-<?=$vivienda->Tipus?>-<?=$vivienda->Zona?>-" + document.getElementById("ref").value;
	
	}
	function fotosModi(){
		document.getElementById("ref").disabled=false;
		document.forms[0].method="post";
		document.forms[0].action="<?=base_url('mant/fotos')?>";
		document.forms[0].accion.value="fotos";
		document.forms[0].submit();
	//window.location.href="subirimagenes.php?ref=" + document.getElementById('ref').value + "&num=" + document.getElementById('fotos').value;
	}
	function nou(){
		document.getElementById('accion').value="nou";
		tex = document.getElementsByTagName('input'); 
			  for (i=0;i<tex.length;i++) {
					 if(tex[i].getAttribute('type')=='text')
					   tex[i].value="";
			  }
	document.getElementById("descllarga").innerHTML="";
	document.getElementById("ref").value=document.getElementById("ultimo").value;
	document.getElementById("ref").disabled=true;
	document.getElementById("otrazona").value="1";
	document.getElementById("video").value="1";
	document.getElementById("nova").value="0";
	document.getElementById("diseny").value="no";
	document.forms[0].fotos.selectedIndex = 0;
	document.forms[0].tipus.selectedIndex = 0;
	document.forms[0].DescTipus.selectedIndex = 0;
	document.getElementById("buttonn").style.display="none";
	document.getElementById("buttone").style.display="none";
	document.getElementById("buttonm").style.display="none";
	}
	
	function desar(){
	sw=0;
	if(document.getElementById("tipus").value==0 && sw==0 && document.getElementById("nuevoTipo").value==""){
	   alert("Tens que posar un Tipus");
	   document.getElementById("tipus").focus();
	   sw=1;
	}
	
	if(document.getElementById("DescTipus").value==0 && sw==0 && document.getElementById("nuevoTipo+").value==""){
	   alert("Tens que posar una Descripció de Tipus");
	   document.getElementById("DescTipus").focus();
	   sw=1;
	}
	
	if(document.getElementById("video").value=="" && sw==0){
	   alert("Tens que posar un 0 o un 1 a Video");
	   document.getElementById("video").focus();
	   sw=1;
	}
	if(document.getElementById("otrazona").value=="" && sw==0){
	   alert("Tens que posar un 0 o un 1 a AltraZona");
	   document.getElementById("otrazona").focus();
	   sw=1;
	}
	
	if(document.getElementById("zona").value=="" && sw==0){
	   alert("Tens que posar la Zona");
	   document.getElementById("zona").focus();
	   sw=1;
	}
	
	if(document.getElementById("descc").value=="" && sw==0){
	   alert("Tens que posar la Descripció Curta");
	   document.getElementById("descc").focus();
	   sw=1;
	}
	document.getElementById("descllarga").contenteditable="false";
	if(document.getElementById("descllarga").innerHTML=="" && sw==0){
	   alert("Tens que posar la Descripció Llarga");
	   document.getElementById("descllarga").focus();
	   sw=1;
	}
	
	if(document.getElementById("euros").value=="" && sw==0){
	   alert("Tens que posar els Euros");
	   document.getElementById("euros").focus();
	   sw=1;
	}
	if(document.getElementById("euros").value!="0" &&  sw==0){
	   var num=document.getElementById("euros").value;
		   num=num.replace(",",".");
	   if(num/2){
		  sw=0;
	   }else{
		  alert("El Euros tenen que ser un numero");
		  document.getElementById("euros").focus();
		  sw=1;
	   }
	}
	
	
	if(parseInt(document.getElementById("video").value,10)>1  && sw==0){
		alert( "El video te que ser 0 o 1");
		document.getElementById("video").focus();
		sw=1;
	}
	if(parseInt(document.getElementById("otrazona").value,10)>1  && sw==0){
		alert( "Altrazona te que ser 0 o 1");
		document.getElementById("otrazona").focus();
		sw=1;
	}
	if(sw==0){
		document.getElementById("ref").disabled=false;
		document.getElementById("num").value=document.getElementById("ref").value;
		document.getElementById("descllarga2").value=document.getElementById("descllarga").innerHTML;
		document.getElementById("localidad").disabled=false;
		document.forms[0].method="post";
		document.forms[0].action="<?=base_url('mant/oper')?>";
		if(document.forms[0].accion.value!="nou"){
			document.forms[0].accion.value="salvar";
		}
		document.forms[0].submit();
	}
	}
	function eliminar(ref){
	i=confirm("Estas segur d'eliminar la vivenda nº " + ref + "\nles fotos NO s'eliminaran" );
		if (i){			
			document.getElementById("num").value=document.getElementById("ref").value;
			document.getElementById("descllarga2").value=document.getElementById("descllarga").innerHTML;
			document.forms[0].method="post";
			document.forms[0].action="<?=base_url('mant/oper')?>";
		    document.forms[0].accion.value="eliminar";
			document.forms[0].submit();
		}
	}
</script>

<?php } ?>
