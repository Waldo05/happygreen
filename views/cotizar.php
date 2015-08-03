
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Cotizar Productos de Vivero Happy Green</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <!-- Custom Fonts -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>
 
<body>
  <header>
    <div class="overlay">
      <div class="superior">
        <figure class="logotipo">
          <a href="index">
            <img src="imagenes/logo.png" alt="Happy Green">
          </a>
        </figure>
        <div class="container">
          <div class="menu-wrap">
            <nav class="menu">
              <div class="icon-list">
                <a href="inicio" alt="Bienvenidos a Happy Green">INICIO</a>
                <a href="nosotros" alt="Más de nosotros"><span>NOSOTROS</span></a>
                <a href="productos" alt="Nuestros productos"><span>PRODUCTOS</span></a>
                <a href="empresas" alt="Productos solo para empresas"><span>EMPRESAS</span></a>
                <a href="contacto" alt="Ponte en contacto con nosotros"><span>CONTACTO</span></a>
              </div>
            </nav>
            <button class="close-button" id="close-button">Close Menu</button>
          </div>
          <button class="menu-button" id="open-button">Open Menu</button>
        </div>
        <!-- /container -->
        <div class="container-sociales">
          <div class="sociales">
            <a class="face" href="https://www.facebook.com/pages/Vivero-Happy-Green/1419047848348953?fref=ts" target="new" alt="facebook"><i class="fa fa-facebook"></i></a>
          </div>
          <div class="sociales">
            <a class="twit" href="https://twitter.com/" target="new" alt="twitter"><i class="fa fa-twitter"></i></a>
          </div>
          <div class="sociales">
            <a class="cotiza" href="cotizar" alt="cotizaciones"><i class="fa fa-leaf"></i>
              <span class="label">1</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- inicio slide -->
    <div id="carousel-example-generic" class="carousel slide slider" data-ride="carousel">
      <div class="col-xs-12 slide-secciones">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>    
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="fondo" src="imagenes/slide/1.jpg" alt="vivero">
            <div class=" carousel-caption info">
              <div class="col-xs-12 btn-slide">
                <a href="noticias" alt="noticias" >Noticias</a>
              </div>
              <div class="col-xs-12 info-int">
                <p class="hidden-xs fono">Correo: ventas@viverohappygreen.cl - Fono: 09 9162 8586</p>
              </div>
            </div>
          </div> 

          <div class="item">
            <img class="fondo" src="imagenes/slide/2.jpg" alt="vivero">
            <div class=" carousel-caption info">
              <div class="col-xs-12 btn-slide">
                <a href="noticias" alt="noticias" >Noticias</a>
              </div>
              <div class="col-xs-12 info-int">
                <p class="hidden-xs  fono">Correo: ventas@viverohappygreen.cl - Fono: 09 9162 8586</p>
              </div>
            </div>
          </div>

          <div class="item">
            <img class="fondo" src="imagenes/slide/3.jpg" alt="vivero">
            <div class=" carousel-caption info">
              <div class="col-xs-12 btn-slide">
                <a href="noticias" alt="noticias" >Noticias</a>
              </div>
              <div class="col-xs-12 info-int">
                <p class="hidden-xs fono">Correo: ventas@viverohappygreen.cl - Fono: 09 9162 8586</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- fin slide -->

  <article class="container">
    <div class="row contenido-nosotros">
      <div class="col-xs-12 cont-titulos">
          <h2>Cotizar</h2>
      </div>

      <div class="col-xs-12 col-md-4 col-lg-5 cont-contacto">
        <form class="col-xs-12 form" method="post" action="cotizar">
        <!-- Compra-->

          <div class="col-xs-12 cont-form">
            <div class="col-xs-12 compra">
              <p>Nombre del producto a cotizar</p>
            </div>

            <div class="col-xs-12 text-left texto">
              <h3 class="col-xs-5 col-sm-6 col-md-5">Cantidad:</h3>
              <input name="cantidad" type="text" id="cantidad" value="0000" size="7">
            </div>

            <div class="col-xs-12 text-left texto">
              <h3 class="col-xs-5 col-sm-6 col-md-5">Valor:</h3>
              <p class="col-xs-7 col-sm-6 col-md-7">$0.000</p>
            </div>

            <div class="col-xs-12 text-left texto">
              <h3 class="col-xs-5 col-sm-6 col-md-5">Total:</h3>
              <p class="col-xs-7 col-sm-6 col-md-7">$0.000</p>
            </div>

            <div class="col-xs-6 eliminar">
              <a href="#" >Eliminar</a>
            </div>
          </div>
        </form>
        <!-- Compra-->

        <div class="col-xs-12">
          <div class="col-xs-12 totalcompra">
            <p>Total pedido: <span>$00.000</span></p>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-8 col-lg-7 cont-contacto">
        <form class="col-xs-12" action="envio" method="post" onsubmit=" ">
          <p>Formulario de Cotización</p>
          <div class="col-xs-12">
            <input name="rut" type="text" class="input" id="rut" placeholder="R.U.T.:">
          </div>
          <div class="col-xs-12">
            <input name="Nombre" type="text" class="input" id="Nombre" placeholder="Nombre:">
          </div>
          <div class="col-xs-12">
            <input name="Direccion" type="text" class="input" id="Direccion" placeholder="Dirección:">
          </div>
          <div class="col-xs-12">
            <input name="Ciudad" type="text" class="input" id="Ciudad" placeholder="Ciudad:">
          </div>
          <div class="col-xs-12">
            <input name="Comuna" type="text" class="input" id="Comuna" placeholder="Comuna:">
          </div>
          <div class="col-xs-12">
            <input name="Giro" type="text" class="input" id="Giro" placeholder="Giro:">
          </div>
          <div class="col-xs-12">
            <input name="Telefono" type="text" class="input" id="Telefono" placeholder="Telefono:">
          </div>
          <div class="col-xs-12">
            <input name="Mail" type="text" class="input" id="Mail" placeholder="E-mail:">
          </div>
          <div class="col-xs-12">
            <input name="Telefono" type="text" class="input" id="Telefono" placeholder="Teléfono:">
          </div>

                
          <div class="cont-enviar col-xs-12">
           <input class="enviar" name="Solicitar" type="submit" value="Solicitar Cotización">
          </div>
      </form>
      </div>
    </div>
  </article>

    <div class="row fondo-nov">
      <div class="container container-nov">
        <div class="col-xs-12 col-sm-4 col-lg-3">
          <div class="col-xs-12 btn-nov">
            <a href="detalleproducto" alt="detalle del producto">
              <h4>Nativos</h4>
              <p>Consulta y conoce los arboles
                nativos, algunos desconocidos.
              </p>
            </a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-lg-6">
          <div class="col-xs-12 cont-nov">
            <a href="detalleproducto" alt="detalle del producto">
              <h4>Flores de Temporada</h4>
              <p>Encuentra una amplia gama de flores de temporada que le
              darán color y vida a tu casa, te invitamos a disfrutar el jardín.
              </p>
            </a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-lg-3">
          <div class="col-xs-12 btn-nov2">
            <a href="detalleproducto" alt="detalle del producto">
              <h4>Enredaderas</h4>
              <p>Podrás encontrar más de 15
                variedades de enredaderas.
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>


    <footer class="row footer">
      <div class="container container-footer">
        <div class="col-xs-12 col-sm-4 col-md-4 contacto">
          <div class="contacto-pie">
            <h4>Menú</h4>
            <a href="index" alt="Bienvenidos a Happy Green">Inicio</a>
            <a href="nosotros" alt="Más de nosotros">Nosotros</a>
            <a href="productos" alt="Nuestros productos">Productos</a>
            <a href="empresas" alt="Productos solo para empresas">Empresas</a>
            <a href="noticias" alt="Noticias">Noticias</a>
            <a href="contacto" alt="Ponte en contacto con nosotros">Contacto</a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 text-center info">
          <figure>
            <img src="imagenes/logo.png" alt="Happy Green">
          </figure>
          <div class="info-pie">
            <p><span>Horario:</span> Lunes a Domindo de 09:00 hrs. hasta 18:00 hrs.</p>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 contacto">
          <div class="contacto-pie">
            <h4>Contacto</h4>
            <p><span>Correo:</span> ventas@viverohappygreen.cl</p>
            <p><span>Fono:</span> 09 9162 8586</p>
            <p><span>Dirección:</span> Carretera 5 sur km 96,5,<br>
                Sector Las Mercedes  - Requinoa 
            </p>
          </div>
        </div>
      </div>
      <div class="container container-footer2">
        <div class="col-xs-12 col-sm-5 col-md-4 text-center">
          <p>Todos los Derechos Rservados a Mundo de los Arboles S.A.</p>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-4">
        </div>
        <div class="col-xs-12 col-sm-5 col-md-4 text-center">
          <a href="https://www.emagenic.cl/" target="new" atl="desarrollo de sitios web">Sitio Web Desarrollado Por Emagenic Ltda.</a>
        </div>
      </div>
    </footer>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"> </script>

  <!-- menu responsive -->
  <script src="js/classie.js"></script>
  <script src="js/main.js"></script>
  <!-- fin menu responsive -->
  <!-- efecto hover en la foto -->
  <script>
    // For Demo purposes only (show hover effect on mobile devices)
    [].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
      el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
    } );
  </script>
  <!-- efecto hover en la foto -->
</body>
</html>