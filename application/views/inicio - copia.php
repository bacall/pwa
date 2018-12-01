			<?php
				$num_pisos=$pisos[0]->numpisos;
				$num_plantas=$plantas[0]->numplantas;
				$num_aticos=$aticos[0]->numaticos;
				$num_torres=$torres[0]->numtorres;
				$num_obranueva=$obranueva[0]->numobranueva;
				$otraszonas=$otrazona;
				$num_terrenos=$terrenos[0]->numterrenos;
				$num_locales=$locales[0]->numlocales;
				$num_alquileres=$alquileres[0]->numalquileres;
				$text_fecha=$fecha[0]->fecha;
                
              
	        ?>

    <div class="col-md-12">
		<div class="col-xs-1 col-sm-2">&nbsp;</div>
                    <div class="col-xs-12 col-sm-12" style="text-align:justify"> 
                        <table class="table-responsive" id="index"  align="center" cellpadding="0" cellspacing="0"  style="padding:13px">
                          <tr>
                            <td><table  align="center" cellpadding="0" cellspacing="0">
                                <tr> 
                                  <td>
                                  <div id="wrap">
                                          <table  cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td colspan="2" rowspan="2">
                                      <div class="anchox">
                                      <a href="sant-cugat/pisos"> Pisos <?=$num_pisos?></a><br>
                                        <a href="sant-cugat/plantas"> Plantas bajas <?=$num_plantas?></a><br>
                                        <a href="sant-cugat/aticos"> Áticos <?=$num_aticos?></a><br>
                                        <a href="sant-cugat/torres"> Torres <?=$num_torres?></a> <br>
                                           <?php if($num_obranueva>0){ ?>
                                        <a href="sant-cugat/nuevas" > Obra Nueva  <?=$num_obranueva?></a><br> 
                                           <?php } ?>
                                           
                                       </div> 
                                      </td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td align="right" valign="bottom"><img class="img-responsive" src="http://www.pisossantcugat.net/img/portada/001.jpg" alt="piso sant cugat"></td>
                                      <td rowspan="2" valign="middle"><br><br><img class="img-responsive" src="http://www.pisossantcugat.net/img/portada/002.jpg" alt="casa sant cugat"  ></td>
                                      <td colspan="2" rowspan="2" valign="middle">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td rowspan="2" align="right" valign="middle"><img class="img-responsive" src="http://www.pisossantcugat.net/img/portada/004.jpg" alt="casa sant cugat"  ></td>
                                      <td colspan="2"><img id="ancha" class="img-responsive" src="http://www.pisossantcugat.net/img/portada/005.jpg" alt="vivienda sant cugat" ></td>
                                    </tr>
                                    <tr>
                                      <td valign="top"><img class="img-responsive" src="http://www.pisossantcugat.net/img/portada/003.jpg" alt="vivienda sant cugat"   ></td>
                                      <td colspan="2">
                                      &nbsp;<br>
                                      <a id="buttonc" href="#" class="contactar"> Contactar</a>
                                      <br>&nbsp;
                                      <div class="sep"><a  href="#"> <img id="buttoni" src="assets/img/mail.jpg" style="border:none;position:absolute; max-width:100%" alt="email"></a></div>
                                      
                                      </td>
                                      <td id="mycolor" colspan="2" rowspan="2" style="background-color:#959394; width:18px !important">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2">
                                        
                                        <?php if($num_terrenos>0){ ?>
                                        
                                        <a href="sant-cugat/terrenos"> Terrenos 
                                          <?=$num_terrenos?>
                                          </a>
                                        <?php } ?>
                                        
										<?php if($num_locales>0){ ?>                                     
                                        <br><a href="sant-cugat/locales"> Locales 
                                          <?=$num_locales?>
                                          </a>
                                        <?php } ?>
                                        
                                        <?php 
										$i=0;
										foreach($otraszonas as $otrazona){ 
										$localidad=str_replace("-", " " ,$otrazona->Localidad);
										$localidad=str_replace("Sant Quirze del Valles", "Sant Quirze" ,$localidad);
										?>
                                         <br><a href="sant-cugat/otras-ciudades/<?=$otrazona->Localidad?>"> <?=$localidad?> <?=$cuantas[$i][0]->contador?></a>
                                           <?php 
										   	$i++; 
										   } 										   
										   ?>
                                        <?php if($num_alquileres>0){ ?>
                                        <br>
                                        <a href="sant-cugat/alquileres"> Alquileres <?=$num_alquileres?></a><br>                                       
                                        <?php } ?>
                                        
                                      </td>
                                      <td colspan="2">
                                          <div  class="col-md-12 teladress" style="font-size:15px">
                                              <a href="tel:93616474298"> Tel: 616 47 42 98</a>
                                              <br> <a href="tel:93616474298"> Carrer Escoles, 22</a>
                                          </div>
                                      </td>
                                      </tr>
                                    <tr>
                                      <td colspan="4"  align="center">&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2">&nbsp;</td>
                                      <td id="mycolor" colspan="2"  style="background-color:#959394; height:18px !important">&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td align="right" valign="top"><img id="mycolorimg" src="assets/img/decor.jpg" alt="element deco" style="border:none"></td>
                                    </tr>
                                    <tr>
                                      <td colspan="4">&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td align="right" valign="top">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td colspan="4" align="center" class="actualizacion"><?=$text_fecha?><br><span style="font-size:11px">
                                      registre d'agents immobiliaris:</span> <span style="color:#00C; font-size:13px">aicat3245</span><br>
                                      <a style="font-size:10px; color:#CCC !important" href="http://www.webprogramadorbarcelona.com/" target="_blank">Programador web freelance Barcelona</a>
                                      </td>
                                      <td>&nbsp;</td>
                                      <td align="right" valign="top">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table>
                                </div>
                              <div id="wrapconct" style=" display:none; width:100%; margin-top:-13px">
                              <img id="loanding" src='assets/img/loanding.gif' width='144' style="display:none; margin-top:13px"  alt="actualizando">
                                  <div class="col-md-8"  id="micol2conct"><br>
                                      <label for="nombre">Nombre:</label><br>
                                      <input class="mailelemet" name="nombre" id="nombre"/><br>
                                      <label for="nombre">Email:</label><br>
                                      <input class="mailelemet" name="email" id="email" /><br>
                                      <label for="nombre">Teléfono:</label><br>
                                      <input class="mailelemet" name="telefono" id="telefono" /><br>
                                      <label for="nombre">Asunto:</label><br>
                                      <textarea class="mailelemetext"  name="asunto"  id="asunto"></textarea>
                                     <br>
                                     <div class="divbtnemail">
                                       <a class="btnemail1" href="#" onClick="enviar(); return false"> Enviar </a>
                                       <a class="btnemail2" href="#" onClick="runEffectConct(); return false">Cancelar</a>
                                    </div>   
       							</div>
      				 		</div>
                  </td>
                  </tr>
                    </table></td>
        </tr>  
      </table>
        <table class="table-responsive" width="100%"  cellspacing="0" cellpadding="3">
          <tr> 
            <td  valign="top">&nbsp;</td>
            <td valign="middle">&nbsp;</td>
          </tr>
        </table>
      </td>
  </tr>
</table>
<br>
</div>
    </div>

