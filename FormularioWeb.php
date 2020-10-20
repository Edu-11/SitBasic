<html>

<head>
  <title>Javier Sarda CONTACT</title>
  <link href="../../css/estilo.css" rel="stylesheet" type="text/css" />

  <script type="text/JavaScript">
    <!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
  </script>


<body
  onLoad="MM_preloadImages('../img/AllRightReserved 150p_over.jpg','../img/email_over.jpg','../../iconos_banners/contact_over.jpg','../../iconos_banners/Icono13_110_over.jpg','../../iconos_banners/Icono12_110_over.jpg','../../iconos_banners/Icono11_110_over.jpg','../../iconos_banners/Icono14_110_over.jpg')">
  <div id="Logotipo">
  </div>

  <div id="CapaTitularSuperior">
  </div>

  <div id="Telefono" style="padding-left:200">
    <p class="myButtonContacto">
      <a href="callto://+34934184305" style="font-size:40px">Tel&eacute;fono... 934184305</a>
    </p>
  </div Telefono>

  <div id="CapaTextosContenido">

    <?php //fichero de action post - control formulario ?>
    <?php $FormularioWebControl = "http://www.sitbasic.com/01Esp/html/FormularioWebControl.php" ?>
    <?php $EmailWeb = "banco@pimeslu.com" ?>

    <tr>
      <td>
        <p>tus datos...
          <form method="post" action="<?php echo($FormularioWebControl)?>">
            <input type="hidden" name="BancoMadera_EmailEmpresa" value="<?php echo($EmailWeb)?>" />
            <input type="hidden" name="BancoMadera_Sector01" value="BANCO_FRM" />
            <input type="hidden" name="BancoMadera_ValorAntiMaquina" value="5" />
            <table>
              <tr>
                <td width="300" align="right" valign="top" class="EstiloPeque&ntilde;o">tu nombre ... </td>
                <td width="50%">
                  <div align="right">
                    <input type="text" name="BancoMadera_NomPers" class="CampoFormulario" id="BancoMadera_NomPers"
                      size="44" />
                  </div>
                </td>
              </tr>
              <tr>
                <td align="right" valign="top" class="EstiloPeque&ntilde;o">tu apellido ... </td>
                <td>
                  <div align="right"><input type="text" name="BancoMadera_ApePers" class="CampoFormulario"
                      id="BancoMadera_ApePers" size="44" />
                  </div>
                </td>
              </tr>
              <tr>
                <td width="300" align="right" valign="top" class="EstiloPeque&ntilde;o"> tu e-mail ... </td>
                <td width="50%">
                  <div align="right">
                    <input type="Email" name="BancoMadera_Hip_Email" class="CampoFormulario" id="BancoMadera_Hip_Email"
                      size="44" />
                  </div>
                </td>
              </tr>
              <tr>
                <td width="300" align="right" valign="top" class="EstiloPeque&ntilde;o"> tu tel&eacute;fono ... </td>
                <td width="50%">
                  <div align="right">
                    <input type="Tel" name="BancoMadera_Tel" class="CampoFormulario" id="BancoMadera_Tel_Principal"
                      size="44" />
                  </div>
                </td>
              </tr>
              <tr>
                <td align="right" valign="top" class="EstiloPeque&ntilde;o">
                  tu pa&iacute;s ...
                </td>
                <td align="right">
                  <select name="BancoMadera_Pais" class="CampoFormulario" id="BancoMadera_Pais">
                    <option value="FALTA INDICAR PAIS">Selecciona PAIS</option>
                    <?php 
				require("OpcionesPaises.php"); 
				?>
                  </select>
                </td>
              </tr>
            </table>
            interesado en ...
            <table>
              <tr>
                <td align="right" valign="top" class="EstiloPeque&ntilde;o">informaci&oacute;n ... </td>
                <td>
                  <div align="right">
                    <select type="text" name="BancoMadera_Sector02" id="BancoMadera_sector04" class="CampoFormulario">
                      <option value="BANCOINO">selecciona INFORMACI&Oacute;N</option>
                      <option value="BANCOIP">nota de prensa - ART&Iacute;CULO</option>
                      <option value="BANCOIA">informaci&oacute;n ACABADOS</option>
                      <option value="BANCOIPVP">informaci&oacute;n PVP BANCO ESTANDART</option>
                      <option value="BANCOIPVEH">informaci&oacute;n PVP ESTRUCTURA+HERRAJES (sin maderas)</option>
                      <option value="BANCOIPVM">informaci&oacute;n PVP MADERA </option>
                      <option value="BANCOPERS">presupuesto BANCO PERSONALIZADO</option>
                      <option value="BANCOSICE">plano MEDIDAS T�CNICAS</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="right" valign="top" class="EstiloPeque&ntilde;o">comprar ... </td>
                <td>
                  <div align="right">
                    <select type="text" name="BancoMadera_Sector03" id="BancoMadera_sector02" class="CampoFormulario">
                      <option value="BANCOCNO">Selecciona COMPRA</option>
                      <option value="BANCOCB">Comprar BANCO COMPLETO ( madera + estructura + herrajes )</option>
                      <option value="BANCOCM">Comprar MADERA (recambio)</option>
                      <option value="BANCOCE">Comprar ESTRUCTURA HIERRO (recambio)</option>
                      <option value="BANCOCH">Comprar HERRAJES FERRETER&Iacute;A (recambio)</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="right" valign="top" class="EstiloPeque&ntilde;o">distribuir ... </td>
                <td>
                  <div align="right">
                    <select type="text" name="BancoMadera_Sector04" id="BancoMadera_sector03" class="CampoFormulario">
                      <option value="BANCODNO">Selecciona DISTRIBUCI&Oacute;N</option>
                      <option value="BANCODBTP">Distribuir BANCOS EN TIENDAS PROPIAS</option>
                      <option value="BANCODBMP">Distribuir BANCOS EN MI PA&Iacute;S</option>
                      <option value="BANCODETP">Distribuir ESTRUCTURAS ( recambio ) en TIENDAS PROPIAS</option>
                      <option value="BANCODEMP">Distribuir ESTRUCTURAS ( recambio ) en MI PA&Iacute;S</option>
                      <option value="BANCODMTP">Distribuir MADERAS ( recambio ) en TIENDAS PROPIAS</option>
                      <option value="BANCODMMP">Distribuir MADERAS ( recambio ) en MI PA&Iacute;S</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="right" valign="top" class="EstiloPeque&ntilde;o">fabricaci&oacute;n ...<img
                    src="../../img/SBCOPY100.jpg" width="100" height=""></td>
                <td>
                  <div align="right">
                    <select type="text" name="BancoMadera_Sector05" id="BancoMadera_sector05" class="CampoFormulario">
                      <option value="BANCOFNO">Selecciona LICENCIA</option>
                      <option value="BANCOFMA">Fabricaci&oacuten MADERAS asiento y respaldo</option>
                      <option value="BANCOFHE">Fabricaci&oacuten PIEZAS FERRETERIA</option>
                      <option value="BANCOFEM">Fabricaci&oacuten ESTRUCTURA MET&Aacute;LICA</option>
                      <option value="BANCOFET">Fabricaci&oacuten EMBALAJE TRANSPORTE</option>
                      <option value="BANCOFTODO">Fabricaci&oacuten BANCO COMPLETO</option>
                    </select>
                  </div>
                </td>
              </tr>

              <tr>
                <td width="300" align="right" valign="top" class="EstiloPeque&ntilde;o"> tu comentario ... </td>
                <td width="50%">
                  <div align="right">
                    <textarea name="BancoMadera_Comentario" cols=41 rows=6 id="BancoMadera_Comentario"
                      class="CampoFormulario"></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td align="right" valign="top" class="EstiloPeque&ntilde;o">Anti Spam...</td>
                <td><img src="../../iconos_banners/antispam.jpg" />
                  <input name="BancoMadera_AntiSpam" type="number" class="CampoFormulario" id="BancoMadera_AntiSpam"
                    size="4" />
                  <strong>*</strong></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" class="myButton" value="enviar - send" />
                </td>
              </tr>
            </table>
          </form>



        </p>
      </td>
    </tr>
    <div class="Firma">
      <table width="100%" border="0" cellpadding="10" cellspacing="0">
        <tr>
          <td>
            <p><span class="EstiloNegrita"><a href="FormularioWeb.html"
                  onMouseOver="MM_swapImage('contact','','../../iconos_banners/contact_over.jpg',1)"
                  onMouseOut="MM_swapImgRestore()"></a> <a href="mecanismo.html"
                  onMouseOver="MM_swapImage('Icono13_110','','../../iconos_banners/Icono13_110_over.jpg',1)"
                  onMouseOut="MM_swapImgRestore()"> <img src="../../iconos_banners/Icono13_110.jpg" name="Icono13_110"
                    id="Icono13_110" alt="Icono" width="110" height="110" border="0" /></a> <a href="tuning.html"
                  onMouseOver="MM_swapImage('Icono12_110','','../../iconos_banners/Icono12_110_over.jpg',1)"
                  onMouseOut="MM_swapImgRestore()"><img src="../../iconos_banners/Icono12_110.jpg" name="Icono12_110"
                    id="Icono12_110" alt="Icono" width="110" height="110" border="0" /></a> <a href="historia.html"
                  onMouseOver="MM_swapImage('Icono11_110','','../../iconos_banners/Icono11_110_over.jpg',1)"
                  onMouseOut="MM_swapImgRestore()"><img src="../../iconos_banners/Icono11_110.jpg" name="Icono11_110"
                    id="Icono11_110" alt="Icono" width="110" height="110" border="0" /></a> <a href="catalogo.html"
                  onMouseOver="MM_swapImage('Icono14_110','','../../iconos_banners/Icono14_110_over.jpg',1)"
                  onMouseOut="MM_swapImgRestore()"><img src="../../iconos_banners/Icono14_110.jpg" name="Icono14_110"
                    id="Icono14_110" alt="Icono" width="110" height="110" border="0" /></a></span></p>



            <div align="right"> <span class="EstiloNegrita ">PIMESLU</span><br />
              B08448300<br />
              <span class="EstiloPeque&ntilde;o">C/ Teodora Lamadrid 31 pral 2&ordf;<br />
                08022 - BARCELONA<br />
                CATALUNYA ESPA&Ntilde;A</span> </div>
          </td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>

  </div>

</body>

</html>