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
$Telefono = $_POST['BancoMadera_Tel'] ;
$MobTel = $_POST[''] ;
$Fax = $_POST[''] ;
$Sector0 = $_POST['Desplegable_informacion'];

$Id = $_POST[''] ;
$FeUltModFecUltActPersona = date('j, F, Y') ;
$FeTraspasoPersona = $_POST[''] ;
$Activo = $_POST[''] ;
$OfertaInfPersonal = $_POST[''] ;


// $emailempresa = $_POST['BancoMadera_EmailEmpresa'];
$emailempresa = 'ecaubilla@hotmail.com';
$FechaHoy = $FeUltModFecUltActPersona;
$emailcliente = $_POST['BancoMadera_Hip_Email'];

$PaginaWebIndex = 'http://www.sitbasic.com/index.html';
$FormularioWebPaginaRespuestaGracias = 'Location: http://www.sitbasic.com/test/consulta_realizada.html';

//Configuración de email al cliente

$FormularioWeb = 'SITBASIC';

$DatosEmpresa = 'PIMESLU ( Promotora Inmobiliaria y Mercantil SLU )'."\n"."\n";
$DatosEmpresa = $DatosEmpresa. $emailempresa ."\n";
$DatosEmpresa = $DatosEmpresa. 'Calle Teodora Lamadrid 31 '."\n";
$DatosEmpresa = $DatosEmpresa. '08022 BARCELONA'."\n". 'ESPAÑA'."\n";

$subject = $NomPers. ', contacto desde web '. $FormularioWeb ; 

$MessageCliente = 'Barcelona a ' . $FechaHoy . "\n" . "\n";
$MessageCliente = $MessageCliente. 'Hola ' . $NomPers . "\n";
$MessageCliente = $MessageCliente. 'Gracias por visitar la web '. $FormularioWeb."\n";

// if ($ObservacionesInfPersonal != '') {
$MessageCliente = $MessageCliente. 'Has comentado: '.$ObservacionesInfPersonal. "\n". "\n";
// $MessageCliente = $MessageCliente. 'Por seguridad, comprobamos que nadie ha utilizado tu email '.$emailcliente .' en contra de tu voluntad'.'\n'.'\n';
// $MessageCliente = $MessageCliente. 'Necesitamos que respondas con un OK al email... '.$emailempresa .' \n'.' \n';
// $MessageCliente = $MessageCliente. 'Tras recibir el OK nos comunicaremos contigo.'.'\n'.'\n';}
// else
// {$MessageCliente = $MessageCliente. 'Esperamos que indiques tus dudas o comentarios en referencia a '.$PaginaWebIndex.'.\n';
// $MessageCliente = $MessageCliente. 'A la espera de tu interés,'.'\n';
// $MessageCliente = $MessageCliente.'\n';}

$MessageCliente = $MessageCliente. 'Gracias por ponerte en contacto con nosotros. En breve recibirás una respuesta de nuestro equipo.'. "\n";
$MessageCliente = $MessageCliente. 'Un saludo,'. "\n";
$MessageCliente = $MessageCliente. 'Javier Sardá'. "\n";
$MessageCliente = $MessageCliente. $DatosEmpresa. "\n";
$MessageCliente = $MessageCliente. $PaginaWebIndex."\n";

$EmailFrom = 'From: '. $emailempresa. "\n";
$EmailFor = $emailcliente;

mail ($EmailFor, $subject, $MessageCliente, $EmailFrom); 

//Configuración de email al admin

$subject = $NomPers . ' Tel. '. $Telefono . ' Email. '. $emailcliente .' desde FormularioWeb: ' . $FormularioWeb . ' ' . $Sector1 ; 

$message = $FechaHoy . 'comentario: ' . $ObservacionesInfPersonal . ';;' . $NomPers . ';;;;;;;;;'. $RedTipPais . ';;'. $emailcliente . ';'. $Telefono . ';;;18WEB;;;;;;;'. $FechaHoy . ";;;\n\n";

$message = $message. $ObservacionesInfPersonal.';'.$NomCialApePers.';'.$NomPers.';'.$ApePers.';'.$FiscalNom.';'.$NIF.';'.$Dir.';'.$FiscalDir.';'.$CodPostCodPostal.';'.$Poblacion.';'.$Numero.';'.$RedTipPais.';'.$Web.';'.$Email.';'.$Telefono.';'.$MobTel.';'.$Fax.';'.$Sector1.';'.$Sector2.';'.$Sector3.';'.$Sector4.';'.$Sector5.';'.$Sector6.';'.$Id.';'.$FeUltModFecUltActPersona.';'.$FeTraspasoPersona.';'.$Activo.';'.$OfertaInfPersonal;

$message = $message."\n\n El cliente ha recibido: \n\n".$MessageCliente;

$EmailFrom = 'From: '. $emailcliente. "\n";
$EmailFor = $emailempresa;


mail ($EmailFor, $subject, $message, $EmailFrom); 

header($FormularioWebPaginaRespuestaGracias);  

?>
