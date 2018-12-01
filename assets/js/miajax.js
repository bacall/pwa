
	
	$(document).ready(function () {
		function runEffect() {
			var ie8=navigator.userAgent.match(/MSIE\s(?!9.0)/);
 
			if( ie8) { 
				$("wrap").css("display","none");					   
			}
			selectedEffect="drop";
			var options = {};
			$( "#wrap" ).effect( selectedEffect, options, 987, callback );
		};
		
		function runEffect2() {
			var ie8=navigator.userAgent.match(/MSIE\s(?!9.0)/);
 
			if( ie8) { 
				$("wrap").css("display","none");					   
			}
			callback2();
		};
		function callback() {
			$("#wrapconct").fadeIn(1610);
				$("#button").css("display","none");			
				$("#nombre").focus();
				window.scrollTo(0, 600);
		}

		
		function callback2() {
			$("#wrapconct").fadeIn(1610);
				$("#button").css("display","none");			
				$("#nombre").focus();
				window.scrollTo(0, 600);
			
		}
		
		$( "#buttonc" ).click(function() {
			runEffect();
			return false;
		});
		
		$( "#buttoncDetalle" ).click(function() {
			runEffect2();
			return false;
		});
		
		$( "#buttoni" ).click(function() {
			runEffect();
			return false;
		});
	});
	
	function runEffectConct() {
			selectedEffect="drop";
			var options = {};
			$( "#wrapconct" ).effect( selectedEffect, options, 987, callback3 );
			return false;
					
			}

		function callback3() {
			var ie8=navigator.userAgent.match(/MSIE\s(?!9.0)/);
			if( ie8 ) {
				document.location.href="./";				   
			}
			document.getElementById("micol2conct").innerHTML="";
			document.getElementById("micol2conct").innerHTML="<div id='wrapconct' style='width:100%; margin-top:-13px'><div class='col-md-8'  id='micol2conct'><br><label for='nombre'>Nombre:</label><br><input class='mailelemet' name='nombre' id='nombre'/><br><label for='nombre'>Email:</label><br><input class='mailelemet' name='email' id='email' /><br><label for='nombre'>Teléfono:</label><br><input class='mailelemet' name='telefono' id='telefono' /><br><label for='nombre'>Asunto:</label><br><textarea class='mailelemetext'  name='asunto'  id='asunto'></textarea><br><div class='divbtnemail'><a class='btnemail1' href='#' onClick='enviar();return false'> Enviar </a><a class='btnemail2' href='#' onClick='runEffectConct();return false'>Cancelar</a></div></div></div>";
			document.getElementById("wrap").style.display="block"
			window.scrollTo(0, 400);
			$("#button").fadeIn(800);
		
		}
		
		function runEffectConctDetalle() {
			$("#wrap").fadeOut(1610);
		    location.reload();		
			}

		


function enviar(){        
		var sw=0;
		var nom=document.getElementById("nombre").value;
		var email=document.getElementById("email").value;
		var telefono=document.getElementById("telefono").value;
		var asunto=document.getElementById("asunto").value;
		
		nom= nom.replace(/^\s*|\s*$/g,"");
		if(nom==""){
			alert("Por favor, introduce tu nombre");
			sw=1;
			document.getElementById("nombre").focus();
			return false;
		}
		email= email.replace(/^\s*|\s*$/g,"");
		if(email=="" && sw==0){
			alert("Por favor,  introduce tu dirección de correo electrónico");
			sw=1;
			document.getElementById("email").focus();
			return false;
		}
		
		if(email!="" && sw==0){
			var email2=/^.+\@.+\..+$/;
			var emailStr=email;
			var matchArray=emailStr.match(email2)
				if (matchArray==null) {
					alert("El formato del correo electrónico no es correcto");
					document.getElementById("email").focus();
					sw=1;
					return false;
				}
		}
		
		if(telefono=="" && sw==0){
			alert("Necesitamos su teléfono");
			document.getElementById("telefono").value="";
			document.getElementById("telefono").focus();
			sw=1;
			return false;
		}
		if(asunto=="" && sw==0){
			alert("El asunto está vacio");
			document.getElementById("asunto").value="";
			document.getElementById("asunto").focus();
			sw=1;
			return false;
		}
		
		if(sw==0){
			document.getElementById("micol2conct").innerHTML="";
			 window.scrollTo(0, 600);
			 document.getElementById('loanding').style.display="block";
			 window.scrollTo(0, 600);
			 setTimeout(function(){ bodyAjax(nom,email,telefono,asunto); }, 1000);
			
		}
	}
	
function enviarDetalle(){        
		var sw=0;
		var nom=document.getElementById("nombre").value;
		var email=document.getElementById("email").value;
		var compartir=document.getElementById("compartir").value;
		var asunto=document.getElementById("asunto").value;

		
		nom= nom.replace(/^\s*|\s*$/g,"");
		if(nom==""){
			alert("Por favor, introduce tu nombre");
			sw=1;
			document.getElementById("nombre").focus();
			return false;
		}
		email= email.replace(/^\s*|\s*$/g,"");
		if(email=="" && sw==0){
			alert("Por favor,  introduce tu dirección de correo electrónico");
			sw=1;
			document.getElementById("email").focus();
			return false;
		}
		
		if(email!="" && sw==0){
			var email2=/^.+\@.+\..+$/;
			var emailStr=email;
			var matchArray=emailStr.match(email2)
				if (matchArray==null) {
					alert("El formato del correo electrónico no es correcto");
					document.getElementById("email").focus();
					sw=1;
					return false;
				}
		}
		
		if(asunto=="" && sw==0){
			alert("El asunto está vacio");
			document.getElementById("asunto").value="";
			document.getElementById("asunto").focus();
			sw=1;
			return false;
		}
		
		if(sw==0){
			document.getElementById("wrap").innerHTML="";
			 window.scrollTo(0, 600);
			 document.getElementById('loandingDetalle').style.display="block";
			 window.scrollTo(0, 600);
			 setTimeout(function(){ bodyAjaxDetalle(nom,email,compartir,asunto); }, 1000);
			
		}
	}
	
function objetoAjax(){
        var xmlhttp=false;
        try {
               xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
               try {
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
               } catch (E) {
                       xmlhttp = false;
               }
        }

        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
               xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
}



function bodyAjax(nombre,email,telefono,asunto){
		/*nombre=UTF8.encode(nombre); 
		pass=UTF8.encode(pass);*/
		datos="http://www.pisossantcugat.net/mail/mail.php?nom=" + nombre + "&email=" + email + "&telefono=" + telefono + "&asunto=" + asunto;
        ajax=objetoAjax();
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       param=ajax.responseText;
					   document.getElementById('loanding').style.display="none";
					   document.getElementById('micol2conct').innerHTML="";
					   document.getElementById('micol2conct').innerHTML=param;
					   window.scrollTo(0, 600);		
			    }
		}
        ajax.send(null)
		  
}

function bodyAjaxDetalle(nombre,email,compartir,asunto){		/*nombre=UTF8.encode(nombre); 
		pass=UTF8.encode(pass);*/
		datos="http://www.pisossantcugat.net/mail//maildetalle.php?nom=" + nombre + "&email=" + email + "&compartir=" + compartir + "&asunto=" + asunto;
        ajax=objetoAjax();
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       param=ajax.responseText;
					   document.getElementById('loandingDetalle').style.display="none";
					   document.getElementById('wrap').innerHTML="";
					   document.getElementById('wrap').innerHTML=param;
					   window.scrollTo(0, 600);		
			    }
		}
        ajax.send(null)
		  
}

function resolucion(xy){
		/*nombre=UTF8.encode(nombre); 
		pass=UTF8.encode(pass);*/
		datos="http://www.pisossantcugat.net/Datos?resolucion=" + xy;
        ajax=objetoAjax();
        ajax.open("GET", datos);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       param=ajax.responseText;
					  	
			    }
		}
        ajax.send(null)
		  
}