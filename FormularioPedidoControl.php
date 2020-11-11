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
//$FormularioPedidoPaginaRespuestaError = $_POST['SitBasicPedido_FormularioPedidoPaginaRespuestaError'] ;
$FormularioPedidoPaginaRespuestaGracias = $_POST['SitBasicPedido_FormularioPedidoPaginaRespuestaGracias'] ;
//$FormularioWebPaginaRespuestaError = 'Location: http://www.sitbasic.com/01Esp/html/FormularioWebPaginaRespuestaError.html';
//$FormularioWebPaginaRespuestaGracias = 'Location: http://www.sitbasic.com/01Esp/html/FormularioWebPaginaRespuestaGracias.html';

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

/*
//comprueba que existan correo electr�nicos
if($Email=='' || $Email==' '  || $EmailCliente==''|| $EmailCliente==' ' || $EmailEmpresa==''|| $EmailEmpresa==' ' || $NomPers=='' || $NomPers==' ' || $ApePers=='' ||$ApePers==' ' ){
header($FormularioPedidoPaginaRespuestaError); 
die('Debe completar todos los campos');
}
*/

// Configuración de email a cliente

$subject = $Formulario.', desde la web '.$PaginaWeb.', realizado por: ' . $NomPers .' ' . $ApePers ; 


$message = 'Hola ' . $NomPers . "\n". 'Barcelona ' . $FechaHoy ."\n"."\n";

$message = $message . 'Gracias por hacer tu PEDIDO.'."\n"."\n";

$message = $message . 'Estás interesado en '.$Unidades.' Ref.: '. $Sector2 .' : '.$ReferenciaLarga."\n"."\n";
$message = $message . 'Estará preparado en 24 horas.'."\n"."\n";
$message = $message . ' EMPRESA DIRECCION DE PEDIDO: _'. $NomPers .' '.$ApePers . "\n";
$message = $message . ' EMPRESA TELEFONO  DE PEDIDO: _'. $Tel . "\n";
$message = $message . ' EMPRESA REF.PRODUCTO PEDIDO: _'. $Sector2 ."\n";
$message = $message . ' COMENTARIO DE PEDIDO: _'. $ObservacionesInfPersonal ."\n"."\n";
$message = $message . ' Mientras preparamos el envío del producto, esperamos el ingreso por transferencia bancaria.' ."\n";
$message = $message . ' Cta.Banco ...  en la cta SABADELL ATLÁNTICO ES59 00817082580001094420' . "\n"."\n"; 
$message = $message . ' INGRESO ..... '. $CompraPVP . ' euros' . "\n"."\n";
$message = $message . 'Tras recibir el ingreso, EL PEDIDO ESTARÁ COMPLETADO.    ' ."\n";
$message = $message . 'Recibirás tu compra en plazo no inferior a 48 horas siguiendo tus INDICACIONES DE ENV�O:    ' ."\n"."\n";

$message = $message . 'EMPRESA NOMBRE PARA  ENV�O: (mismo NOMBRE que PEDIDO)______________________' ."\n"."\n";
$message = $message . 'EMPRESA DIRECCIÓN DE ENV�O: _________________________________________' ."\n"."\n";
$message = $message . 'EMPRESA POBLACIÓN DE ENV�O: _________________________________________' ."\n"."\n";
$message = $message . 'EMPRESA COD.POST. DE ENV�O: __________' ."\n"."\n";

$message = $message . 'EMPRESA/NOMBRE PARA  FACTURACI�N: (mismo NOMBRE que PEDIDO)______________________' ."\n"."\n";
$message = $message . 'EMPRESA/PERSONA NIF  FACTURACI�N: __________________' ."\n"."\n";
$message = $message . 'EMPRESA DIRECCIÓN DE FACTURACI�N: _________________________________________' ."\n"."\n";
$message = $message . 'EMPRESA POBLACIÓN DE FACTURACI�N: _________________________________________' ."\n"."\n";
$message = $message . 'EMPRESA COD.POST. DE FACTURACI�N: __________' ."\n"."\n";

$message = $message . 'Para agilizar el proceso, una vez ingresado el importe del PEDIDO.   ' ."\n";
$message = $message . 'Responde a este e-mail adjuntando el comprobante de pago (doc digital, escaner o foto con m�vil)' ."\n"."\n";
$message = $message . 'Si hay alguna incidencia, Tel. 934184305 o '.$EmailEmpresa . "\n". "\n";
$message = $message . 'A la espera de tu confirmaci�n de pedido.'."\n"."\n";
$message = $message . 'Un saludo.'. "\n";
$message = $message . 'Javier Sardá'. "\n";
$message = $message . $DatosEmpresa . "\n";
$message = $message . $DirectorioRaizFormulario.'/index.html' ."\n";
$message = $message . 'Por motivos de seguridad, has de confirmar tu contacto respondiendo este correo a '.$EmailEmpresa ."\n". "\n";
$TextoBonito = $message;

$headers = 'From: '. $EmailEmpresa. "\n";

// system.out.print($EmailCliente, ' - ' , $subject, ' - ', $message, ' - ', $headers, ' - ', $EmailEmpresa);

mail ($EmailCliente, $subject, $message, $headers);

// Configuración de email a admin

$subject = $Formulario .' '. $Sector1 .' de '. $NomPers . ' '.$ApePers ; 

$message = $FechaHoy . 'comentario: ' . $ObservacionesInfPersonal . ';;' . $NomPers . ';;;;;;;;;'. $RedTipPais . ';;'. $EmailCliente . ';'. $Tel . ';;;18WEB;;;;;;;'. $FechaHoy . ";;;\n\n";

$message = $message. $ObservacionesInfPersonal.';'.$NomCialApePers.';'.$NomPers.';'.$ApePers.';'.$FiscalNom.';'.$NIF.';'.$Dir.';'.$FiscalDir.';'.$CodPostCodPostal.';'.$Poblacion.';'.$Numero.';'.$RedTipPais.';'.$Web.';'.$Email.';'.$Tel.';'.$MobTel.';'.$Fax.';'.$Sector1.';'.$Sector2.';'.$Sector3.';'.$Sector4.';'.$Sector5.';'.$Sector6.';'.$Id.';'.$FeUltModFecUltActPersona.';'.$FeTraspasoPersona.';'.$Activo.';'.$OfertaInfPersonal;

$message = $message . "\n\n\n\n" . $TextoBonito;

$headers = 'From: '. $EmailCliente. "\n";

mail ($EmailEmpresa, $subject, $message, $headers); 

// Copia de email a admin

//$Copia = "javiers@pimeslu.com";
//$Copia = "javier@fotosarda.com";
//mail ($Copia, $subject, $message, $headers);

// redirección

header($FormularioPedidoPaginaRespuestaGracias);

//var_dump("Llega hasta el final.")

?>