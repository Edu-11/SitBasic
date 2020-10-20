<html>
<head>
<title>comprar productos SITBASIC mecanismo plegable para asiento, silla o banco</title>
<link href="file:../css/estilo.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

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

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

</script>
<link href="../../css/estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
        .Estilo15 {
	color: #669900;
	font-weight: bold;
}
</style>
		
<body onLoad="MM_preloadImages('../img/AllRightReserved 150p_over.jpg','../../iconos_banners/Icono13_110_over.jpg','../../iconos_banners/Icono12_110_over.jpg','../../iconos_banners/Icono11_110_over.jpg','../../iconos_banners/contact_over.jpg','../../iconos_banners/Icono14_110_over.jpg')">
	<div id="Logotipo"></div>
<div id="CapaTitularSuperior">
		<p class="CssTablaTituloSuperior">PEDIDO - FACTURA PROFORMA </p>
	</div>

</head>

<div id="CapaTextosContenido">
<?php 
require("FirmaDatosEmpresa.php"); 
?>
<p>
  <?php 
		$ObservacionesInfPersonal = $_POST['SitBasic_ObservacionesInfPersonal'];
		$NomCialApePers = $_POST['SitBasic_NomCialApePers'] ;
		$NomPers = $_POST['SitBasic_NomPers'] ;
		$ApePers = $_POST['SitBasic_ApePers'] ;
		$FiscalNom = $_POST['SitBasic_FiscalNom'] ;
		$NIF = $_POST['SitBasic_NIF'] ;
		$Dir = $_POST['SitBasic_Dir'] ;
		$FiscalDir = $_POST['SitBasic_FiscalDir'] ;
		$CodPostCodPostal = $_POST['SitBasic_CodPostCodPostal'] ;
		$Poblacion = $_POST['SitBasic_Poblacion'] ;
		$Numero = $_POST['SitBasic_Numero'] ; //(Provincia)
		$RedTipPais = $_POST['SitBasic_RedTipPais'] ;//(DesTipPais)
		$Web = $_POST['SitBasic_Web'] ;
		$Email = $_POST['SitBasic_Email'] ;
		$Tel = $_POST['SitBasic_Tel'] ;
		$MobTel = $_POST['SitBasic_MobTel'] ;
		$Fax = $_POST['SitBasic_Fax'] ;
    $Sector1 = $_POST['SitBasic_PedidoSector01'] ;
    $Sector2 = $_POST['SitBasic_PedidoSector02'] ;
		$Sector3 = $_POST['SitBasic_Sector03'] ;
		$Sector4 = $_POST['SitBasic_Sector04'] ;
		$Sector5 = $_POST['SitBasic_Sector05'] ;
		$Sector6 = $_POST['SitBasic_Sector06'] ;
		$Id = $_POST['SitBasic_Id'] ;
		$FeTraspasoPersona = $_POST['SitBasic_FeTraspasoPersona'] ;
		$Activo = $_POST['SitBasic_Activo'] ;
		$OfertaInfPersonal = $_POST['SitBasic_OfertaInfPersonal'] ;

    $Formulario = $_POST['SitBasic_PedidoFormulario'];
    $EmailEmpresa = $_POST['SitBasic_PedidoEmailEmpresa'];
    $Precio = $_POST['SitBasic_PedidoPrecio'];
    $ReferenciaLarga = $_POST['SitBasic_PedidoReferenciaLarga'];
    $Unidades = $_POST['SitBasic_PedidoUnidades'];

    $CompraPVP = $Unidades * $Precio;
    $PedidoReferencia = date("j, F, Y");


	// ESCRIBE linea de txt en fichero de visitas EN EL SERVIDOR
	$Contenido = "PRESUPUESTO desde ".$Formulario.", proforma de ".$Unidades." unidad ".$Sector2." ".$ReferenciaLarga." valorados en ".$Precio. " Euros";
	$NombreLibroVisitas = $Sector1;
	$RetrocesoDirectorio = "../../";
	$UsuarioWeb = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	// RECUPERA programaci�n para grabar    $Contenido     en libro de visitas
	$ArchivoLibroVisitas = $RetrocesoDirectorio.'LibroVisitas'.$NombreLibroVisitas.'.txt';
	// linea de texto, FECHA + FICHERO + CONTENIDO
	$LineaLibroVisitas = date('l jS \of F Y h:i:s A').";".$UsuarioWeb.";".$_SERVER['SCRIPT_FILENAME'].";".$Contenido."\n";
	$ficherotxt = fopen($ArchivoLibroVisitas,"a"); //Se abre el archivo .txt
	fwrite($ficherotxt,$LineaLibroVisitas); //Se ponen los datos obtenidos en el archivo
	fclose($ficherotxt); //Se cierra el archivo


//$emailcliente = $_POST['SitBasic_PedidoHip_Email'];

$DatosEmpresa = 'PIMESLU'."\n";
$DatosEmpresa = $DatosEmpresa . $EmailEmpresa ."\n";
$DatosEmpresa = $DatosEmpresa . 'Calle Teodora Lamadrid 31 '."\n";
$DatosEmpresa = $DatosEmpresa . '08022 BARCELONA ESPA�A EUROPA '."\n";

$PaginaWeb = 'www.SitBasic.com';
$PaginaWebIndex = 'http://www.sitbasic.com/index.html';
$DirectorioRaizFormulario = 'http://www.sitbasic.com/01Esp/html/';
$FormularioPedidoPaginaRespuestaError = 'Location: '.$DirectorioRaizFormulario.'FormularioPedidoPaginaRespuestaError.html';
$FormularioPedidoPaginaRespuestaGracias = 'Location: '.$DirectorioRaizFormulario.'FormularioPedidoPaginaRespuestaGracias.html';

echo date("j, F, Y").' ';
?>
ha iniciado su pedido para comprar producto SitBasic.</p>
<form method="post" action="<?php echo $DirectorioRaizFormulario;?>FormularioPedidoControl.php">
<input type="hidden" name="SitBasicPedido_PaginaWeb" value="<?php echo $PaginaWeb;?>" />
<input type="hidden" name="SitBasicPedido_PaginaWebIndex" value="<?php echo $PaginaWebIndex;?>" />
<input type="hidden" name="SitBasicPedido_DirectorioRaizFormulario" value="<?php echo $DirectorioRaizFormulario;?>" />
<input type="hidden" name="SitBasicPedido_FormularioPedidoPaginaRespuestaError" value="<?php echo $FormularioPedidoPaginaRespuestaError;?>" />
<input type="hidden" name="SitBasicPedido_FormularioPedidoPaginaRespuestaGracias" value="<?php echo $FormularioPedidoPaginaRespuestaGracias;?>" />
<input type="hidden" name="SitBasicPedido_Formulario" value="<?php echo $Formulario;?>" />
<input type="hidden" name="SitBasicPedido_DatosEmpresa" value="<?php echo $DatosEmpresa;?>" />
<input type="hidden" name="SitBasicPedido_EmailEmpresa" value="<?php echo $EmailEmpresa;?>" />
<input type="hidden" name="SitBasicPedido_Sector1" value="<?php echo $Sector1;?>" /> 
<input type="hidden" name="SitBasicPedido_Sector2" value="<?php echo $Sector2;?>" />
<input type="hidden" name="SitBasicPedido_Precio" value="<?php echo $Precio;?>" />
<input type="hidden" name="SitBasicPedido_ReferenciaLarga" value="<?php echo $ReferenciaLarga;?>"/>
<input type="hidden" name="SitBasicPedido_ValorAntiMaquina" value="5"/>

<p>
  <input name="SitBasicPedido_Unidades" type="number" class="CampoFormulario" id="SitBasicPedido_Unidades" value="<?php echo $Unidades;?>" size="4" maxlength="4" /> 

  <span class="EstiloNegrita Estilo2">Ref: <?php echo $Sector2;?> de <?php echo $Precio;?> &euro; la unidad, </span><?php echo $ReferenciaLarga;?></p>
  
  
   <p>TOTAL PEDIDO; <strong><span class="EstiloNegrita Estilo2">de <?php echo $CompraPVP;?></span> &euro; <span class="EstiloNegrita Estilo2">PVP</span></strong> (IVA incluido)</p>
  <p>Puede   a&ntilde;adir otros productos en el mismo pedido, indic&aacute;ndolo en la casilla de comentario. Opcionalmente puede hacer un pedido por cada producto. </p>
    <p>Despu&eacute;s de CONFIRMAR  PEDIDO,  consulte el buz&oacute;n de correo electr&oacute;nico,   recibir&aacute; e-mail con  la informaci&oacute;n del  pedido, para FINALIZAR SU COMPRA con el pago.</p>

  <p>Continuar el pedido indicando los datos b&aacute;sicos de contacto.</p>
  <p align="right">Campos obligados a llenar <span class="Estilo15">*</span> </p>
  <table>
    <tr>
      <td width="300" align="right" valign="top" class="EstiloPeque&ntilde;o"> nombre ... </td>
      <td width="50%"><input name="SitBasicPedido_NomPers" type="text" class="CampoFormulario" id="SitBasicPedido_NomPers" size="35" />
        <strong>*</strong></td>
    </tr>
    <tr>
      <td align="right" valign="top" class="EstiloPeque&ntilde;o"> apellido ... </td>
      <td><input name="SitBasicPedido_ApePers" type="text" class="CampoFormulario" id="SitBasicPedido_ApePers" size="35" />
        <strong>*</strong></td>
    </tr>
    <tr>
      <td width="300" align="right" valign="top" class="EstiloPeque&ntilde;o">  e-mail ... </td>
      <td width="50%"><input name="SitBasicPedido_HipEmail" type="email" class="CampoFormulario" id="SitBasicPedido_HipEmail" size="35" />
        <strong>*</strong></td>
    </tr>
    <tr>
      <td align="right" valign="top" class="EstiloPeque&ntilde;o">  tel&eacute;fono ... </td>
      <td><input name="SitBasicPedido_Tel" type="tel" class="CampoFormulario" id="SitBasicPedido_Tel" size="35" />
        <strong>*</strong></td>
    </tr>

    <tr>
      <td align="right" valign="top" class="EstiloPeque&ntilde;o">  pa&iacute;s ... </td>
      <td><font color="#FF0000" size="1" >
        <select name="SitBasicPedido_Pais" class="CampoFormulario" size="1" id="SitBasicPedido_Pais">
          <option value="FALTA INDICAR PAIS">Selecciona PAIS</option>
<?php 
require("OpcionesPaises.php"); 
?>
        </select>
      </font></td>
    </tr>
    <tr>
     <td align="right" valign="top" class="EstiloPeque&ntilde;o">Anti Spam...</td>
     <td><img src="../../iconos_banners/antispam.jpg" />
       <input name="SitBasicPedido_AntiSpam" type="number" class="CampoFormulario" id = "SitBasicPedido_AntiSpam" size="4" />
       <strong>*</strong></td>
    </tr>

    <tr>
      <td width="300" align="right" valign="top" class="EstiloPeque&ntilde;o">   comentario ... </td>
      <td width="50%"><textarea name="SitBasicPedido_Comentario" class="CampoFormulario" cols=41 rows=6 id="SitBasicPedido_Comentario"></textarea></td>
    </tr>
    <tr>
    </tr>
  </table>
  <div align="center">
    <p><br>
        <strong>
        <input type="submit" class="myButton" value="INICIAR PEDIDO" name="pedido" />
        </strong></p>
    <p>&nbsp;</p>
  </div>
  </form> 

</div id="CapaTextosContenido">

</body>
</html>
