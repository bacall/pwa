<style>
table{ width:100%}
.col-md-12{ padding-bottom:21px}
td{padding:3px}
.img-responsive{    width: 233px;float: right; padding:0; margin:0; border:none}
#volver{ background:#EEE; color:#C00; padding:8px}
</style>
<div  class="col-md-12" align="center"><a id="volver" href="<?=base_url('mant')?>"> &larr; Volver</a></div><br>
<?php
$euros="";
foreach($vendidas as $vendida){
?>
<div class="col-md-12">

<table class="table-responsive" id="index"  align="center" cellpadding="0" cellspacing="0"  style="padding:13px">
   <tr> 
    <td><font size="3" face="Arial, Helvetica, sans-serif"><strong> 
      <?= $vendida->DescTipus ?>
      </strong></font>
    </td>
    <td> </td>
    <td ><div align="left"></div></td>
    <td></td>
    <td><div align="right"></div></td>
    <td></td>
    <td colspan="2"><div align="right"><font color="#FF0000" size="3" face="Arial, Helvetica, sans-serif"> 
        <strong> 
        <?= $vendida->Ref ?>
        </strong> </font></div></td>
   
  </tr>
  <tr> 
    <td width="233" bgcolor="#FFFFFF"><a href="#" onClick="recu('<?= $vendida->Ref ?>');"> 
      <font size="3" face="Arial, Helvetica, sans-serif"> 
      <?= $vendida->Zona ?>
      </font></a></td>
    <td></td>
    <td bgcolor="#FFFFFF" align="left"><div align="left"><a href="#" onClick="recu('<?= $vendida->Ref ?>');"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?= $vendida->DescCorta ?>
        </font></a></div></td>
    <td></td>
    <?
    $euros=number_format( $vendida->PreuEuros,0,',','.')
    ?>
    <td bgcolor="#FFFFFF"><div align="right"><a href="#" onClick="recu('<?= $vendida->Ref ?>');"><font size="3" face="Arial, Helvetica, sans-serif"> 
        <?= $euros ?>
        &euro;</font></a></div></td>
    <td></td>
    <?
      $preu=  $vendida->PreuPesetas . $vendida->Pesetas ;
    ?>
    <td bgcolor="#FFFFFF"><div align="right"><a href="#" onClick="recu('<?= $vendida->Ref ?>');"> 
        <font size="3" face="Arial, Helvetica, sans-serif"> 
        <?=$preu?>
        </font> </a></div></td>
        <td><img class="img-responsive" src="http://www.pisossantcugat.net/img/fotos/fotosg/<?= $vendida->Ref ?>-1.jpg"></td>
    <td align="right">&nbsp;<img src="<?=base_url()?>assets/img/eliminar.png" width="16" height="16" alt="eliminar <?= $vendida->Ref ?>" onClick="eliminar('<?= $vendida->Ref ?>');" onMouseOver="this.src='<?=base_url()?>assets/img//eliminar2.png'" onMouseOut="this.src='<?=base_url()?>assets/img//eliminar.png'"></td>
  </tr>
 
</table>
</div>
<?php } ?>
<br>

<div class="col-md-12" align="center"><a  id="volver" href="<?=base_url('mant')?>"> &larr; Volver</a></div>
<script type="application/javascript">
function recu(ref){
i=confirm("Quieres recuperar la vivenda con referencia " + ref );
	if(i){
	window.location.href="<?=base_url('mant')?>/vendidas/recuperarvendida?ref=" + ref;
	}
}

function eliminar(ref){
i=confirm("Quieres eliminar definitivament la vivienda con referencia " + ref);
	if(i){
		x=confirm("Estas seguro de eliminar definitivamente la vivenda con referencia " + ref);
			if(x){
			   window.location.href="<?=base_url('mant')?>/vendidas/eliminarvendida?ref=" + ref;
			}
	}
}
</script>






