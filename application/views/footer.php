	</div>
    
</div>
</body>
<script type="text/javascript"  src="<?=base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
<?php if(basename($_SERVER['REQUEST_URI'])!="mant"){ ?>
<script type="text/javascript"  src="<?=base_url('assets/js/miajax.js')?>"></script>
<?php } ?>
<script type="text/javascript"  src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script type="text/javascript"   src="<?=base_url('assets/js/prefixfree.min.js')?>"></script>
<script type="text/javascript"  src="<?=base_url('assets/js/ui/minified/jquery.ui.effect.min.js')?>"></script>
<script type="text/javascript"  src="<?=base_url('assets/js/ui/minified/jquery.ui.effect-drop.min.js')?>"></script>
<script type="text/javascript"  src="<?=base_url('assets/js/jquery.sudoSlider.js')?>"></script>
<!--
<script type="text/javascript"  src="<?=base_url('assets/js/main.js')?>"></script>     
-->
<script type="text/javascript"> 
if($("#carousel").carousel){
	if (screen.width>767){  
       $(window).load(function(){
				
				$("#loandingimg").css("display","none");
				
				
        });
	}else{
		$("#loandingimg").css("display","none");
	
	}
}
</script>     
</html>
