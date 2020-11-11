<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitbasic | Banco de Caballeria</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,600,800&display=swap" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="style_producto.css">

    <!----- Favicon ------>
    <link rel="icon" type="image/vnd.microsoft.icon" href="/images/IconoSitBasic.ico" sizes="16x16 32x32">

    
</head>
    
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
    
    //$FormularioPedidoPaginaRespuestaError = 'Location: http://www.sitbasic.com/test/FormularioPedidoPaginaRespuestaError.html';
    $FormularioPedidoPaginaRespuestaGracias = 'Location: http://www.sitbasic.com/test/pedido_realizado.html';

    $PaginaWeb = 'www.SitBasic.com';
    $PaginaWebIndex = 'http://www.sitbasic.com/index.html';
    $DirectorioRaizFormulario = 'http://www.sitbasic.com/01Esp/html/';
    //$FormularioPedidoPaginaRespuestaError = 'Location: '.$DirectorioRaizFormulario.'FormularioPedidoPaginaRespuestaError.html';
    //$FormularioPedidoPaginaRespuestaGracias = 'Location: '.$DirectorioRaizFormulario.'FormularioPedidoPaginaRespuestaGracias.html';


    $Formulario = $_POST['SitBasic_PedidoFormulario'];
    //$EmailEmpresa = $_POST['SitBasic_PedidoEmailEmpresa'];
    $EmailEmpresa = 'ecaubilla@hotmail.com';
    $Precio001 = $_POST['SitBasic_PedidoPrecio']; 
    $ReferenciaLarga = $_POST['SitBasic_PedidoReferenciaLarga'];
    $Unidades = $_COOKIE["ud"];

    $CompraPVP = $Unidades * $Precio001;
    $PedidoReferencia = date("j, F, Y");
  ?>

<body>
    <header id="header" class="sticky">
        <nav class="nav-bar">
            <a class="navbar-brand" href="index.html"><img id="header-img" src="./images/LogoSitBasicOK.png"
                    type="image/png" alt="logo" /></a>

            <ul class="nav-links">
                <li class="nav-item">
                    <a href="index.html#Galeria">GALERÍA</a>
                </li>
                <li class="nav-item">
                    <a href="index.html#Disegno">DISEÑO</a>
                </li>
                <li class="nav-item">
                    <a href="index.html#Catalogo">CATÁLOGO</a>
                </li>
                <li class="nav-item">
                    <a href="index.html#Contacto">CONTACTO</a>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

        </nav>
    </header>
    <main>
        <section id="producto" class="producto_Banco_Caballeria">
            <a data-smooth class="link_formulario" href="#formulario_compra">
                <div class="ficha_producto">
                    <div class="ficha_producto_Banco_Caballeria">
                        <div class="ficha_imagen">
                            <img src="./images/Sitbasic_08_prodBanco.jpg"
                                alt="Banco de Caballeria">
                        </div>
                        <div class="ficha_texto">
                            <div class="ficha_titulo">
                                <h1>Banco de Caballería</h1>
                            </div>
                            <div class="ficha_cuerpo">
                                <p> Acabado circular en sus extremos con un ancho de 140 cms que incluye el mecanismo
                                    plegable SitBasic de hierro zincado negro y madera de IROCO acabada con aceite de
                                    linaza. Apto para tres personas. Soporta un peso de unos 300 kilos.
                            </div>
                        </div>
                    </div>
                    <div class="producto_precio">
                        <h2 class="ficha_precio">
                          <?php echo $Precio001 ?> €
                        </h2>
                        <p class="ficha_iva">(IVA incluido)</p>
                        <div class="producto_txt">
                            <div class="ficha_sub">
                                <p>Para realizar el pedido rellene el formulario a continuación.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </section>

        <section id="formulario_compra">
            <h2 class="titulo_formulario">Formulario de pedido</h2>
            <p class="ficha_instrucciones">
                Los gastos de envío no están incluidos en el precio.
                <br>
                Puede añadir otros productos en el mismo pedido, indicándolo en la casilla de comentario.
                <br>
                <b>Después de confirmar pedido, consulte el buzón de correo electrónico, recibirá e-mail con
                    la información del pedido
                    para finalizar su compra.</b>
            </p>

            <div class="Intro_datos">
              <form id="form" name="BancoCaballeria_form" class="formulario" method="post" action="FormularioPedidoControl.php">
                  <input type="hidden" name="SitBasicPedido_PaginaWeb" value="<?php echo $PaginaWeb;?>" />
                  <input type="hidden" name="SitBasicPedido_PaginaWebIndex" value="<?php echo $PaginaWebIndex;?>" />
                  <input type="hidden" name="SitBasicPedido_DirectorioRaizFormulario"
                      value="<?php echo $DirectorioRaizFormulario;?>" />
                  <input type="hidden" name="SitBasicPedido_FormularioPedidoPaginaRespuestaError"
                      value="<?php echo $FormularioPedidoPaginaRespuestaError;?>" />
                  <input type="hidden" name="SitBasicPedido_FormularioPedidoPaginaRespuestaGracias"
                      value="<?php echo $FormularioPedidoPaginaRespuestaGracias;?>" />
                  <input type="hidden" name="SitBasicPedido_Formulario" value="<?php echo $Formulario;?>" />
                  <input type="hidden" name="SitBasicPedido_DatosEmpresa" value="<?php echo $DatosEmpresa;?>" />
                  <input type="hidden" name="SitBasicPedido_EmailEmpresa" value="ecaubilla@hotmail.com" />
                  <input type="hidden" name="SitBasicPedido_Sector1" value="<?php echo $Sector1;?>" />
                  <input type="hidden" name="SitBasicPedido_Sector2" value="<?php echo $Sector2;?>" />
                  <input type="hidden" name="SitBasicPedido_Precio" value="<?php echo $Precio001;?>" />
                  <input type="hidden" name="SitBasicPedido_ReferenciaLarga" value="<?php echo $ReferenciaLarga;?>" />

                  <!-- Datos principales -->
                      <label id="name-label" for="SitBasicPedido_NomPers">*Nombre</label>
                      <input id="SitBasicPedido_NomPers" class="CampoFormulario" type="text" name="SitBasicPedido_NomPers"
                          placeholder="Escribe tu nombre" required=""><br>
                      <label id="surname-label" for="SitBasicPedido_ApePers">*Apellido</label>
                      <input id="SitBasicPedido_ApePers" class="CampoFormulario" type="text" name="SitBasicPedido_ApePers"
                          placeholder="Escribe tu apellido" required=""><br>
                      <label id="email-label" for="SitBasic_Email">*Email</label>
                      <input id="SitBasic_Email" class="CampoFormulario" type="email" name="SitBasic_Email"
                          placeholder="Escribe un correo válido" required=""><br>
                      <sub id="mensajeEmail" class="mensaje">Parece que este correo es incorrecto. Por favor compruébelo.</sub>
                      <label id="phone-label" for="SitBasicPedido_Tel">Teléfono</label>
                      <input id="SitBasicPedido_Tel" class="CampoFormulario" type="text" name="SitBasicPedido_Tel"
                          placeholder="Escribe tu número de teléfono"><br>
                      <label id="pais-label" for="SitBasic_RedTipPais">País</label>
                      <select name="SitBasic_RedTipPais" class="CampoFormulario" id="SitBasic_RedTipPais">
                          <option value="FALTA INDICAR PAIS">Selecciona PAIS</option>
                          <?php include "opcionesPaises.php"
                          ?>
                      </select><br>
                      <label id="desplegable_pedido" for="SitBasicPedido_Unidades">Unidades</label>
                      <input name="SitBasicPedido_Unidades" type="number" class="CampoFormulario"
                          id="SitBasicPedido_Unidades" value="1" size="2" maxlength="2" onchange="setPrice(event)"/>
                      <br>
                      <p>El precio total del pedido es de <br> 
                      <strong><span id="precioCompra" class="EstiloNegrita"><?php echo $Precio001;?></span>
                      &euro;</strong> (IVA incluido)</p>
                      <br>
                  <!-- Comentarios -->
                  <div class="Comentarios">
                      <label for="Comentarios" class="titulo_comentarios">
                      </label>
                      <textarea id="SitBasicPedido_Comentario" name="SitBasicPedido_Comentario" class="CampoFormulario"
                          placeholder="Dinos si tienes algún comentario o sugerencia.." rows="10" cols="40"></textarea>
                  </div>
                  <!-- Botón de envío-->
                  <input id="submit" type="submit" value="Confirmar pedido" class="boton_enviar"></input>
              </form>
            </div>
        </section>

        <section id="Catalogo" class="Catalogo">
            <div class="Catalogo_Cabecera">
                <h2 class="titular_cat">Otros Productos</h2>
            </div>
            <div class="Catalogo_Linea">
                <div class="Tabla_Herrajes_B">
                    <div class="Imagen_tabla">
                        <img src="./images/Sitbasic_09_ProdEstrBanco.jpg"/>
                    </div>
                    <div class="Contenido_tabla">
                        <div class="Titulo_tabla">
                            <h1>Mecanismo para Banco Plegable</h1>
                        </div>
                        <ul>
                            <li>Estructura plegable de hierro natural</li>
                            <li>Ancho de 100 cm.</li>
                            <li>Para Bancos de entre 120 y 160 cm. de ancho</li>
                            <li>Para anchuras menores, se puede cortar tubos y varillas a medida</li>
                        </ul>

                        <form id="producto_MecanismoBanco" method="post" action="producto_MecanismoBanco.php">
                          <?php
                          include "valoresForm.php";
                          ?>
                          <input type="hidden" name="SitBasic_PedidoSector02" value="SB100H6NAT140" />
                          <input type="hidden" name="SitBasic_PedidoPrecio" value="215" />
                          <input type="hidden" name="SitBasic_PedidoReferenciaLarga" value="MECANISMO plegable SITBASIC de hierro natural para banco de 120 a 160 cms de ancho" />
                          <input name="SitBasic_PedidoSubmit" type="submit" href="./producto_MecanismoBanco.php"
                            class="Boton_Herrajes_B" value="Ver Producto" />
                        </form>
                    </div>
                </div>
                <div class="Tabla_Herrajes_S">
                    <div class="Imagen_tabla">
                        <img src="./images/Sitbasic_10_ProdEstrSilla.jpg" />
                    </div>
                    <div class="Contenido_tabla">
                        <div class="Titulo_tabla">
                            <h1>Mecanismo para Silla Plegable</h1>
                        </div>
                        <ul>
                            <li>Estructura plegable de hierro natural</li>
                            <li>Ancho de 30 cm.</li>
                            <li>Para Silla de entre 40 y 60 cm. de ancho</li>
                        </ul>

                        <form id="producto_MecanismoSilla" method="post" action="producto_MecanismoSilla.php">
                          <?php
                          include "valoresForm.php";
                          ?>
                          <input type="hidden" name="SitBasic_PedidoSector02" value="SB030H6NAT045" />
                          <input type="hidden" name="SitBasic_PedidoPrecio" value="209" />
                          <input type="hidden" name="SitBasic_PedidoReferenciaLarga"
                            value="MECANISMO plegable SITBASIC de hierro natural para SILLA de 45 cms de ancho" />
                          <input name="SitBasic_PedidoSubmit" type="submit" href="./producto_MecanismoSilla.php" class="Boton_Herrajes_S"
                            value="Ver Producto" />
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="container_footer container-fluid">
            <div class="footer-links">
                <a class="aviso-legal ft" href="/aviso_legal.html">Aviso Legal</a>
            </div>
            <div class="Sitbasic">
                <p class="empresa_footer">&reg; Sitbasic 2020. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <?php

    // ESCRIBE linea de txt en fichero de visitas EN EL SERVIDOR

    $Unidades = $_COOKIE["ud"];
    
    $Contenido = "PRESUPUESTO desde ".$Formulario.", proforma de ".$Unidades." unidad ".$Sector2." ".$ReferenciaLarga." valorados en ".$Precio001. " Euros";
    $NombreLibroVisitas = $Sector1;
    // $RetrocesoDirectorio = "../../";
    $RetrocesoDirectorio = "../";
    $UsuarioWeb = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    
	  // RECUPERA programaci�n para grabar $Contenido en libro de visitas
    $ArchivoLibroVisitas = $RetrocesoDirectorio.'LibroVisitas'.$NombreLibroVisitas.'.txt';
    
    // linea de texto, FECHA + FICHERO + CONTENIDO
    $LineaLibroVisitas = date('l jS \of F Y h:i:s A')." ; ".$UsuarioWeb." ; ".$_SERVER['SCRIPT_FILENAME']." ; ".$Contenido."\n";
    $ficherotxt = fopen($ArchivoLibroVisitas,"a"); //Se abre el archivo .txt
    fwrite($ficherotxt,$LineaLibroVisitas); //Se ponen los datos obtenidos en el archivo
    fclose($ficherotxt); //Se cierra el archivo


    //$emailcliente = $_POST['SitBasic_PedidoHip_Email'];

    $DatosEmpresa = 'PIMESLU ( Promotora Inmobiliaria y Mercantil SLU )'."\n"."\n";
    $DatosEmpresa = $DatosEmpresa. $emailempresa ."\n";
    $DatosEmpresa = $DatosEmpresa. 'Calle Teodora Lamadrid 31 '."\n";
    $DatosEmpresa = $DatosEmpresa. '08022 BARCELONA'."\n". 'ESPAÑA'."\n";

    ?>

    <script>

      //Funcionalidad de contador de unidades y cokkie para almacenar el número
      var unidades = 1;
      function setPrice(event) {
      const precioCompra = document.getElementById('precioCompra');
      const precio = <?php echo $Precio001 ?>;
      unidades = event.target.value;
      let compra = precio * unidades;
      precioCompra.innerText = compra;
      setCookie("ud", unidades, 5)
      }

      function setCookie(name, value, days){
        var expires;
        if(days){
          var date = new Date();
          date.setTime(date.getTime() + (days*24*60*60*1000));
          expires = "expires=" + date.toGMTString()
        } else {
          expires = "";
        }

        document.cookie = `${name}=${encodeURIComponent(value)};${expires}; path=/; SameSite=Lax`
      }

      document.onload = setCookie("ud", unidades, 5);
 
    </script>
    <script src="app.js"></script>

</body>

</html>