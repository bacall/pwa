<style>
table{ width:100%}
.col-md-12{ padding-bottom:21px}
.img-responsive{    width: 233px;float: right; padding:0; margin:0; border:none}
#volver{ background:#EEE; color:#C00; padding:8px}
td{ margin-left:5px}
</style>
<div align="center"><a  id="volver" href="<?=base_url('mant')?>"> &larr; Volver</a></div><br><br>
<?php

foreach($visitas as $visita){
?>
<div class="col-md-12">
<table class="table-responsive" id="index"  align="center" cellpadding="0" cellspacing="0"  style="padding:13px">
   <tr> 
    <td width="144" bgcolor="#CCCCCC"><strong><font size="2" face="Arial, Helvetica, sans-serif"> 
      &nbsp;&nbsp;N&ordm;&nbsp; 
      <?= $visita->Num ?>
      </font></strong></td>
      <td>&nbsp;</td>
    <td width="209" bgcolor="#CCCCCC"> <font size="2" face="Arial, Helvetica, sans-serif"><strong> 
      &nbsp;&nbsp;FECHA: 
      <?= $visita->Fecha ?>
      </strong></font></td>
      <td>&nbsp;</td>
    <td width="242" bgcolor="#CCCCCC"><div align="left"> <font size="2" face="Arial, Helvetica, sans-serif"><strong> 
       &nbsp;&nbsp;IP: 
        <?= $visita->Ip ?>
        </strong></font></div></td>
        <td>&nbsp;</td>
        <td  bgcolor="#CCCCCC"><div align="left"><font size="2" face="Arial, Helvetica, sans-serif"><strong>&nbsp;&nbsp;Resolución: 
        <?= $visita->Resolucion ?>
        </strong></font></div></td>
  </tr>
  <tr> 
    <td colspan="7"><div align="left"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Referrer: 
        <a href="<?= $visita->Referrer ?>"><?= $visita->Referrer ?></a>
        </strong></font></div></td>
  </tr>
  <tr> 
    <th colspan="7" bgcolor="#FFFFCC"><div align="left"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Sistema: 
        <?= $visita->Sistema ?>
        </strong></font></div></th>
  </tr>
   <tr> 
    
  </tr>
 
</table>
</div>
<?php } ?>

<br>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><a  id="volver" href="<?=base_url('mant')?>"> &larr; Volver</a></div></td>
  </tr>
</table>