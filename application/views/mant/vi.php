<?php
foreach($vendidas as $vendida){
?>
<div class="col-md-12 vivienda">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 
  <tr> 
    <td width="71" bgcolor="#CCCCCC"><strong><font size="1" face="Arial, Helvetica, sans-serif"> 
      &nbsp;N&ordm;&nbsp; 
      <?=$vendida->Num?>
      </font></strong></td>
    <td width="209" bgcolor="#CCCCCC"> <font size="1" face="Arial, Helvetica, sans-serif"><strong> 
      FECHA: 
      <?=$vendida->Fecha ?>
      </strong></font></td>
    <td width="242" bgcolor="#CCCCCC"><div align="left"> <font size="1" face="Arial, Helvetica, sans-serif"><strong> 
        IP: 
        <?=$vendida->Ip ?>
        </strong></font></div></td>
  </tr>
  <tr> 
    <td colspan="3" bgcolor="#FFFFCC"><div align="left"><font size="1" face="Arial, Helvetica, sans-serif"><strong>Referrer: 
        <a href="<?=$vendida->Referrer ?>"><?=$vendida->Referrer ?></a>
        </strong></font></div></td>
  </tr>
  <tr> 
    <th colspan="3"><div align="left"><font size="1" face="Arial, Helvetica, sans-serif"><strong>Sistema: 
        <?=$vendida->Sistema ?>
        </strong></font></div></th>
  </tr>
 
</table>

<?php } ?>
</div>
<br>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><a href="javascript:window.location.back();">Volver</a></div></td>
  </tr>
</table>
<script type="application/javascript">
var imagenes= ['img/sicon2.jpg'];
var i=0;
for (i = 0; i < imagenes.length; i++){         
     var img = new Image();
     img.src=imagenes[i];
}
</script>






