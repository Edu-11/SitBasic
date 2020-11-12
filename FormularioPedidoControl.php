<?php
//ini_set('display_errors', 1);
//var_dump($_REQUEST);
$ObservacionesInfPersonal = $_POST['SitBasicPedido_Comentario'] ;
$NomCialApePers = $_POST[''] ;
$NomPers = $_POST['SitBasicPedido_NomPers'] ;
$ApePers = $_POST['SitBasicPedido_ApePers'] ;
$FiscalNom = $_POST[''] ;
$NIF = $_POST[''] ;
$Dir = $_POST[''] ;
$FiscalDir = $_POST[''] ;
$CodPostCodPostal = $_POST[''] ;
$Poblacion = $_POST[''] ;
$Numero = $_POST[''] ; //(Provincia)
$RedTipPais = $_POST['SitBasicPedido_Pais'] ;//(DesTipPais)
$Web = $_POST[''] ;
// $Email = $_POST['SitBasicPedido_HipEmail'] ;
$Email = $_POST['SitBasic_Email'] ;
$Tel = $_POST['SitBasicPedido_Tel'] ;
$MobTel = $_POST[''] ;
$Fax = $_POST[''] ;
$Sector1 = $_POST['SitBasicPedido_Sector1'] ;
$Sector2 = $_POST['SitBasicPedido_Sector2'] ;
$Sector3 = $_POST[''] ;
$Sector4 = $_POST[''] ;
$Sector5 = $_POST[''] ;
$Sector6 = $_POST[''] ;
$Id = $_POST[''] ;
$FeUltModFecUltActPersona = date("j, F, Y") ;
$FeTraspasoPersona = $_POST[''] ;
$Activo = $_POST[''] ;
$OfertaInfPersonal = $_POST[''] ;

//variables ocultas
$PaginaWeb = $_POST['SitBasicPedido_PaginaWeb'] ;
$PaginaWebIndex = $_POST['SitBasicPedido_PaginaWebIndex'] ;
$DirectorioRaizFormulario = $_POST['SitBasicPedido_DirectorioRaizFormulario'] ;
$FormularioPedidoPaginaRespuestaGracias = $_POST['SitBasicPedido_FormularioPedidoPaginaRespuestaGracias'] ;

$Formulario = $_POST['SitBasicPedido_Formulario'];
$DatosEmpresa = $_POST['SitBasicPedido_DatosEmpresa'] ;
$EmailEmpresa = $_POST['SitBasicPedido_EmailEmpresa'] ;
$Sector1 = $_POST['SitBasicPedido_Sector1'] ;
$Sector2 = $_POST['SitBasicPedido_Sector2'] ;
$Precio = $_POST['SitBasicPedido_Precio'] ;
$ReferenciaLarga = $_POST['SitBasicPedido_ReferenciaLarga'] ;
$ValorAntiMaquina = $_POST['SitBasicPedido_ValorAntiMaquina'] ;

$EmailCliente = $Email;
$AntiSpam = $_POST['SitBasicPedido_AntiSpam'];
$Unidades = $_POST['SitBasicPedido_Unidades'];
$CompraPVP = $Unidades * $Precio;
$FechaHoy = $FeUltModFecUltActPersona;

// Configuración de email a cliente

$subject = $Formulario.', desde la web '.$PaginaWeb.', realizado por: ' . $NomPers .' ' . $ApePers ; 

$message = 'Hola ' . $NomPers . ',' . "\n"."\n";

$message = $message . 'Gracias por hacer tu pedido.'."\n"."\n";

$message = $message . 'Estás interesado en '.$Unidades. ' ' . $ReferenciaLarga. ' ' ."\n"."\n";

$message = $message . 'A continuación por favor responde a este correo con tus datos de envío:'. "\n"."\n";

$message = $message . 'Nombre: '. $NomPers .' ' . $ApePers.' (si es un nombre distinto, especificar) :         ' ."\n";
$message = $message . 'Dirección:           ' ."\n";
$message = $message . 'Población:           ' ."\n";
$message = $message . 'Código postal:       ' ."\n";
$message = $message . 'Teléfono: '. $Tel . '          '."\n";
$message = $message . 'Email: '. $EmailCliente . '          '."\n"."\n";

$message = $message . 'Has de realizar una transferencia bancaria de '. $CompraPVP .' euros.'."\n";
$message = $message . 'Cuenta SABADELL ATLÁNTICO ES59 00817082580001094420'. "\n"."\n";

$message = $message . $DatosEmpresa . "\n";
$message = $message . 'Indica en el concepto tu nombre y apellidos; ' . $NomPers .' '.$ApePers . ' - Sitbasic. '. "\n"."\n";

$message = $message . 'Tras realizar el ingreso envía el comprobante a '. $EmailEmpresa . ' o adjúntalo a este mismo correo.'."\n". 'Es válido un documento digital, escaner o foto con móvil.' ."\n"."\n";

$message = $message . 'Si necesitas la factura con datos distintos de los facilitados para el envío por favor especifícalo en tu respuesta a este correo y facilitanos los datos para la factura.'. "\n";

$message = $message . 'Si hay alguna incidencia, contáctanos al teléfono 934184305 o a '.$EmailEmpresa . "\n". "\n";
$message = $message . 'A la espera de tu confirmación de pedido.'."\n"."\n";
$message = $message . 'Un saludo.'. "\n";
$message = $message . 'Javier Sardá'. "\n"."\n";

$message = $message . $PaginaWeb ."\n"."\n";
$message = $message . 'Por motivos de seguridad, has de confirmar tu pedido respondiendo este correo a '.$EmailEmpresa ."\n". "\n";
$TextoBonito = $message;

$headers = 'From: '. $EmailEmpresa. "\n";

mail ($EmailCliente, $subject, $message, $headers);

// Configuración de email a admin

$subject = $Formulario .' '. $Sector1 .' de '. $NomPers . ' '.$ApePers ; 

$message = $FechaHoy . 'comentario: ' . $ObservacionesInfPersonal . ';;' . $NomPers . ';;;;;;;;;'. $RedTipPais . ';;'. $EmailCliente . ';'. $Tel . ';;;18WEB;;;;;;;'. $FechaHoy . ";;;\n\n";

$message = $message. $ObservacionesInfPersonal.';'.$NomCialApePers.';'.$NomPers.';'.$ApePers.';'.$FiscalNom.';'.$NIF.';'.$Dir.';'.$FiscalDir.';'.$CodPostCodPostal.';'.$Poblacion.';'.$Numero.';'.$RedTipPais.';'.$Web.';'.$Email.';'.$Tel.';'.$MobTel.';'.$Fax.';'.$Sector1.';'.$Sector2.';'.$Sector3.';'.$Sector4.';'.$Sector5.';'.$Sector6.';'.$Id.';'.$FeUltModFecUltActPersona.';'.$FeTraspasoPersona.';'.$Activo.';'.$OfertaInfPersonal;

$message = $message . "\n\n\n\n" . $TextoBonito;

$headers = 'From: '. $EmailCliente. "\n";

mail ($EmailEmpresa, $subject, $message, $headers); 

// redirección

header($FormularioPedidoPaginaRespuestaGracias);

?>