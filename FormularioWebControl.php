<? 

//ini_set('display_errors', 1);
//var_dump($_REQUEST);
$ObservacionesInfPersonal = $_POST['BancoMadera_Comentario'] ;
$NomCialApePers = $_POST[''] ;
$NomPers = $_POST['BancoMadera_NomPers'] ;
$ApePers = $_POST['BancoMadera_ApePers'] ;
$FiscalNom = $_POST[''] ;
$NIF = $_POST[''] ;
$Dir = $_POST[''] ;
$FiscalDir = $_POST[''] ;
$CodPostCodPostal = $_POST[''] ;
$Poblacion = $_POST[''] ;
$Numero = $_POST[''] ; //(Provincia)
$RedTipPais = $_POST['BancoMadera_Pais'] ;//(DesTipPais)
$Web = $_POST[''] ;
$Email = $_POST['BancoMadera_Hip_Email'] ;
$Tel = $_POST['BancoMadera_Tel'] ;
$MobTel = $_POST[''] ;
$Fax = $_POST[''] ;
$Sector0 = $_POST['Desplegable_Informacion'];

switch($Sector0){
	case 'Informacion':
	$Sector1 = $Sector0;
	break;

	case 'Compra':
	$Sector2 = $Sector0;
	break;

	case 'Distribuir':
	$Sector3 = $Sector0;
	break;

	case 'Fabricar':
	$Sector4 = $Sector0;
	break;

	case 'Licencia':
	$Sector5 = $Sector0;
	break;

  case 'Otros':
  $Sector6 = $Sector0;
}

// $Sector1 = $_POST['BancoMadera_Sector01'] ;
// $Sector2 = $_POST['BancoMadera_Sector02'] ;
// $Sector3 = $_POST['BancoMadera_Sector03'] ;
// $Sector4 = $_POST['BancoMadera_Sector04'] ;
// $Sector5 = $_POST['BancoMadera_Sector05'] ;
$Sector6 = $_POST[''] ;
$Id = $_POST[''] ;
$FeUltModFecUltActPersona = date("j, F, Y") ;
$FeTraspasoPersona = $_POST[''] ;
$Activo = $_POST[''] ;
$OfertaInfPersonal = $_POST[''] ;

// $emailempresa = $_POST['BancoMadera_EmailEmpresa'];

$emailempresa = 'ecaubilla@hotmail.com, javier@pimeslu.com';
$ValorAntiMaquina = $_POST['BancoMadera_ValorAntiMaquina'];
$AntiSpam = $_POST['BancoMadera_AntiSpam'];
$FechaHoy = $FeUltModFecUltActPersona;
$emailcliente = $_POST['BancoMadera_Hip_Email'];
$PaginaWebIndex = 'http://www.sitbasic.com/index.html';
$FormularioWebPaginaRespuestaError = 'Location: http://www.sitbasic.com/01Esp/html/FormularioWebPaginaRespuestaError.html';
$FormularioWebPaginaRespuestaGracias = 'Location: http://www.sitbasic.com/01Esp/html/FormularioWebPaginaRespuestaGracias.html';
$FormularioWeb = 'SITBASIC';

$DatosEmpresa = 'PIMESLU ( Promotora Inmobiliaria y Mercantil SLU )'."\n"."\n";
$DatosEmpresa = $DatosEmpresa. $emailempresa ."\n";
$DatosEmpresa = $DatosEmpresa. 'Calle Teodora Lamadrid 31 '."\n";
$DatosEmpresa = $DatosEmpresa. '08022 BARCELONA ESPA�A EUROPA '."\n";


//comprueva que existan correo electr�nicos
//if($AntiSpam<>$ValorAntiSpam){ header($FormularioWebPaginaRespuestaError) }; 
// $MensajeError="";
// if($AntiSpam<>$ValorAntiMaquina){
// 	$MensajeError="Coloque valor suma en la casilla ANTI SPAM"."\n";
// 	} 
// if($Email==' ' || $Email==''){
// 	$MensajeError = $MensajeError."Introduzca su correo electr�nico en la casilla E-MAIL"."\n";
// 	} 
// if($NomPers==' ' || $NomPers==''){
// 	$MensajeError = $MensajeError."Introduzca su correo electr�nico en la casilla E-MAIL"."\n";
// 	} 
// if($Tel==' ' || $Tel==''){
// 	$MensajeError = $MensajeError."Introduzca su correo electr�nico en la casilla E-MAIL"."\n";
// 	} 
// if($MensajeError<>''){
// header($FormularioWebPaginaRespuestaError); 
// die('Debe completar todos los campos');
// }

$subject = $NomPers.', contacto desde web ' . $FormularioWeb ; 

$MessageCliente = 'Barcelona a ' . $FechaHoy . "\n" . "\n";
$MessageCliente = $MessageCliente.  'Hola ' . $NomPers . "\n";
$MessageCliente = $MessageCliente.  'Gracias por visitar la web '. $FormularioWeb."\n";

if ($ObservacionesInfPersonal<>""){$MessageCliente = $MessageCliente. "Has comentado: ".$ObservacionesInfPersonal." \n"." \n";
$MessageCliente = $MessageCliente. "Por seguridad, comprobamos que nadie ha utilizado tu email ".$emailcliente ." en contra de tu voluntad"."\n"."\n";
$MessageCliente = $MessageCliente. 'Necesitamos que respondas con un OK al email... '.$emailempresa ." \n"." \n";
$MessageCliente = $MessageCliente. 'Tras recibir el OK nos comunicaremos contigo.'."\n"."\n";}
else
{$MessageCliente = $MessageCliente. "Esperamos que indiques tus dudas o comentarios en referencia a ".$PaginaWebIndex.".\n";
$MessageCliente = $MessageCliente. "A la espera de tu inter�s,"."\n";
$MessageCliente = $MessageCliente."\n";}


$MessageCliente = $MessageCliente. 'Un saludo,'. "\n";
$MessageCliente = $MessageCliente. 'Javier Sard�'. "\n";
$MessageCliente = $MessageCliente. $DatosEmpresa. "\n";
$MessageCliente = $MessageCliente. $PaginaWebIndex."\n";


// $headers = 'From: '. $emailempresa . '\nBcc:'.$emailempresa."\n";
$EmailFrom = 'From: '. $emailempresa. "\n";
$EmailFor = $emailcliente;

mail ($EmailFor, $subject, $MessageCliente, $EmailFrom); 

$subject = $NomPers . " Tel. ". $Tel  . " Email. ". $Tel ." desde FormularioWeb: " . $FormularioWeb . ' ' . $Sector1 ; 

$message = $FechaHoy . 'comentario: ' . $ObservacionesInfPersonal . ';;' . $NomPers . ';;;;;;;;;'. $RedTipPais . ';;'. $emailcliente . ';'. $Tel . ';;;18WEB;;;;;;;'. $FechaHoy . ";;;\n\n";

$message = $message. $ObservacionesInfPersonal.';'.$NomCialApePers.';'.$NomPers.';'.$ApePers.';'.$FiscalNom.';'.$NIF.';'.$Dir.';'.$FiscalDir.';'.$CodPostCodPostal.';'.$Poblacion.';'.$Numero.';'.$RedTipPais.';'.$Web.';'.$Email.';'.$Tel.';'.$MobTel.';'.$Fax.';'.$Sector1.';'.$Sector2.';'.$Sector3.';'.$Sector4.';'.$Sector5.';'.$Sector6.';'.$Id.';'.$FeUltModFecUltActPersona.';'.$FeTraspasoPersona.';'.$Activo.';'.$OfertaInfPersonal;

$message = $message."\n\n El cliente ha recibido: \n\n".$MessageCliente;

$EmailFrom = 'From: '. $emailcliente. "\n";
$EmailFor = $emailempresa;


mail ($EmailFor, $subject, $message, $EmailFrom); 

//header('Location: http://www.usadoynuevo.com/BancoMadera/html/FormularioWebPaginaRespuestaGracias.htm');
header($FormularioWebPaginaRespuestaGracias);  

?>
