
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Productos Vivero Happy Green</title>
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
                <a class="activo" href="productos" alt="Nuestros productos"><span>PRODUCTOS</span></a>
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
          <h2>Nombre Producto</h2>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 demo">
          <div class="col-xs-12" id="main_image"></div>
            <ul class="gallery_demo_unstyled col-xs-12">
              <li class="active col-xs-3">
                <img src="imagenes/galeria/1.jpg" alt="nombre">
              </li>
              <li class="col-xs-3">
                <img src="imagenes/galeria/2.jpg" alt="nombre">
              </li>
              <li class="col-xs-3">
                <img src="imagenes/galeria/1.jpg" alt="nombre">
              </li>
              
              <li class="col-xs-3">
                <img src="imagenes/galeria/2.jpg" alt="nombre">
              </li>
              <li class="col-xs-3">
                <img src="imagenes/galeria/1.jpg" alt="nombre">
              </li>
              <li class="col-xs-3">
                <img src="imagenes/galeria/2.jpg" alt="nombre">
              </li>
              <li class="col-xs-3">
                <img src="imagenes/galeria/1.jpg" alt="nombre">
              </li>
              <li class="col-xs-3">
                <img src="imagenes/galeria/2.jpg" alt="nombre">
              </li>
          </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 ">
        <div class="col-xs-12 cont-info2">

          <div class="col-xs-12 text-left texto">
            <h3 class="col-xs-5 col-sm-6 col-md-5">Nombre Científico</h3>
            <p class="col-xs-7 col-sm-6 col-md-7">Quercus Suber</p>
          </div>

          <div class="col-xs-12 text-left texto">
            <h3 class="col-xs-5 col-sm-6 col-md-5">Clasificación</h3>
            <p class="col-xs-7 col-sm-6 col-md-7">Árbol Perenne</p>
          </div>

          <div class="col-xs-12 text-left texto">
            <h3 class="col-xs-5 col-sm-6 col-md-5">Clima</h3>
            <p class="col-xs-7 col-sm-6 col-md-7">Luz intensa de sol, aunque no prospera en climas secos</p>
          </div>

          <div class="col-xs-12 text-left texto">
            <h3 class="col-xs-5 col-sm-6 col-md-5">Altura Promedio</h3>
            <p class="col-xs-7 col-sm-6 col-md-7">15 metros</p>
          </div>

          <div class="col-xs-12 text-left texto">
            <h3 class="col-xs-5 col-sm-6 col-md-5">Riego</h3>
            <p class="col-xs-7 col-sm-6 col-md-7">Moderado</p>
          </div>

          <div class="col-xs-12 text-left texto">
            <h3 class="col-xs-5 col-sm-6 col-md-5">Suelo</h3>
            <p class="col-xs-7 col-sm-6 col-md-7">Drenado, poco exigente</p>
          </div>

          <div class="col-xs-12 text-left texto">
            <h3 class="col-xs-5 col-sm-6 col-md-5">Uso</h3>
            <p class="col-xs-7 col-sm-6 col-md-7">De su corteza se obtiene el corcho</p>
          </div>

          <div class="col-xs-12 text-left texto">
            <h3 class="col-xs-5 col-sm-6 col-md-5">Notas</h3>
            <p class="col-xs-7 col-sm-6 col-md-7">Su fruto es una bellota que madura durante el otoño y parte del invierno</p>
          </div>

          <div class="col-xs-12 text-left texto">
            <h3 class="col-xs-5 col-sm-6 col-md-5">Venta</h3>
            <p class="col-xs-7 col-sm-6 col-md-7">Solo Empresas - Todo Público</p>
          </div>

        </div>

        <div class="col-xs-6 compartir-sociales">
          <div class="fb-share-button btnred" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count">
          </div>
        </div>
        <div class="col-xs-6 compartir-sociales">
          <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        </div>

        <a class="volver" href="productos">Volver</a>
        <a class="volver" href="#" alt="Agregar a Cotización">Agregar a Cotización</a>
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
            <a class="activo" href="productos" alt="Nuestros productos">Productos</a>
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
<!--script galeria-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.galleria.js"></script>
  <script type="text/javascript">
  
  $(document).ready(function(){
    $('.gallery_demo_unstyled').addClass('gallery_demo'); // adds new class name to maintain degradability
    $('ul.gallery_demo').galleria({
      history   : true, // activates the history object for bookmarking, back-button etc.
      clickNext : true, // helper for making the image clickable
      insert    : '#main_image', // the containing selector for our main image
      onImage   : function(image,caption,thumb) { // let's add some image effects for demonstration purposes
        // fade in the image & caption
        image.css('display','none').fadeIn(1000);
        caption.css('display','none').fadeIn(1000);
        // fetch the thumbnail container
        var _li = thumb.parents('li');
        // fade out inactive thumbnail
        _li.siblings().children('img.selected').fadeTo(500,0.6);
        // fade in active thumbnail
        thumb.fadeTo('fast',1).addClass('selected');
        // add a title for the clickable image
        image.attr('title','Next image >>');
      },
      onThumb : function(thumb) { // thumbnail effects goes here
        // fetch the thumbnail container
        var _li = thumb.parents('li');
        // if thumbnail is active, fade all the way.
        var _fadeTo = _li.is('.active') ? '1' : '0.6';
        // fade in the thumbnail when finnished loading
        thumb.css({display:'none',opacity:_fadeTo}).fadeIn(1500);
        // hover effects
        thumb.hover(
          function() { thumb.fadeTo('fast',1); },
          function() { _li.not('.active').children('img').fadeTo('fast',0.6); } // don't fade out if the parent is active
        )
      }
    });
  });
  </script>
  <!--script galeria-->
  <!-- menu responsive -->
  <script src="js/classie.js"></script>
  <script src="js/main.js"></script>
  <!-- fin menu responsive -->
  <script>
    // For Demo purposes only (show hover effect on mobile devices)
    [].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
      el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
    } );
  </script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</body>
</html>