<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  <head>
    <!-- Required meta tags -->
    <jdoc:include type="head" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <title>Cuernavaca vive</title>
  </head>
  <body>
  <jdoc:include type="message" />

  <header> 
  
    <!-- Container header -->
    <div class="header-container" id="header-content">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="encabezado-header">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo_blanco.png" alt="logo">
                    <h1>CUERNAVACA</h1>          
                    <ul class="redes-header list-inline text-xs-right">
                      <li class="list-inline-item">
                        <a href="https://www.facebook.com/cuernavacagob/"><i class="fab fa-facebook fa-2x"></i></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="https://twitter.com/CuernavacaGob"><i class="fab fa-twitter fa-2x"></i></a>
                      </li>
                      <li class ="list-inline-item">
                          <a data-bs-toggle="modal" data-bs-target="#modalContacto"><i class="fas fa-envelope fa-2x"></i></a>
                      </li>
                      <li class="list-inline-item">
                          <a data-bs-toggle="modal" data-bs-target="#modalSearch"><i class="fas fa-search fa-2x"></i></a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
  </header>

  <div id="main"> 
    <!-- Contenido navbar -->
        <div class="nav-bar-container" id="navbar">
            <div class="container">
              <div class="nav-bar-container-items">
                <!--<a href="#">INICIO</a>
                <a href="#">GOBIERNO</a>
                <a href="#">TRAMITES Y SERVICIOS</a>
                <a href="#">TRANSPARENCIA</a>-->
                <jdoc:include type="modules" name="menu" />
              </div>
              <div class="menu-btn" onclick="openNav()">
                      <i class="fas fa-bars"></i>
              </div>
            </div>
          </div>       
        </div>
        <div id="Sidebar-responsive" class="sidebar">
          <div class="sidebar-menu">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo_blanco.png" alt="logo">
            <div class="sidebar-items">
              <!--<a href="#">INICIO</a>
              <a href="#">GOBIERNO</a>
              <a href="#">TRAMITES Y SERVICIOS</a>
              <a href="#">TRANSPARENCIA</a>-->
              <jdoc:include type="modules" name="menu" />
            </div>
          </div>

          <div class="sidebar-redes">
            <ul class="sidebar-redes-items">
              <li class="sidebar-redes-item">
                <a href="https://www.facebook.com/cuernavacagob/"><i class="fab fa-facebook fa-2x"></i></a>
              </li>
              <li class="sidebar-redes-item">
                <a href="https://twitter.com/CuernavacaGob"><i class="fab fa-twitter fa-2x"></i></a>
              </li>
              <li class ="sidebar-redes-item">
                <a data-bs-toggle="modal" data-bs-target="#modalContacto"><i class="fas fa-envelope fa-2x"></i></a>
              </li>
              <li class="sidebar-redes-item">
                <a data-bs-toggle="modal" data-bs-target="#modalSearch"><i class="fas fa-search fa-2x"></i></a>
              </li>
            </ul>
          </div>
        </div>

    <!-- Container clima y carrucel -->
      <div class="container">
        <div class="destacados">
          <div class="row">
            <div class="col-md-4">
              <!-- clima -->
              <div class="clima">
                  <ul class="clima-contenidos">
                    <li class="titulos-clima">HOY</li>
                    <li class="Fecha-clima">
                        <?php
                          
                          setlocale(LC_ALL, '');
                          echo strftime("%d de %B de %Y");
                          
                        ?>
                    </li>
                    <li class="titulos-clima">SEMAFORO EPIDEMIOLOGICO</li>
                    <jdoc:include type="modules" name="semaforo" />
                    <!--
                    <li class="Color-semaforo-clima"><div id="square"></div></li>
                    <li class="texto-semaforo-clima">AMARILLO</li>
                    -->
                    <li class="titulos-clima">CLIMA</li>
                    <li class="weather-widget-clima">
                      <div class="widget-clima-actual">
                        <a class="weatherwidget-io" href="https://forecast7.com/es/18d92n99d22/cuernavaca/" data-font="Roboto" data-icons="Climacons" data-mode="Current" data-theme="dark" data-basecolor="#a13048" >Cuernavaca, Morelos, Mexico</a>
                      </div>
                    </li>
                  </ul>
              </div>
            </div>
            <div class="clima-responsive">
              <div class="clima-contenidos-small">
                <div class="clima-responsive-semaforo">
                  <p>SEMAFORO EPIDEMIOLOGICO</p>
                  <jdoc:include type="modules" name="semaforo" />
                  <!--
                  <div id="square"></div>
                  <p>AMARILLO</p>
                  -->
                </div>
                <div class="clima-responsive-clima">
                  <p>CLIMA</p>
                  <div class="widget-clima-actual">
                    <a class="weatherwidget-io" href="https://forecast7.com/es/18d92n99d22/cuernavaca/" data-font="Roboto" data-icons="Climacons" data-mode="Current" data-theme="dark" data-basecolor="#a13048" >Cuernavaca, Morelos, Mexico</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <!-- carrusel -->
              <div class="carrusel">
                <div id="carouselNoticias" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselNoticias" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselNoticias" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselNoticias" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselNoticias" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselNoticias" data-bs-slide-to="4" aria-label="Slide 5"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                    <jdoc:include type="modules" name="destacados1-img" />
                      <div class="carousel-caption d-none d-md-block">
                        <jdoc:include type="modules" name="destacados1" />
                      </div>
                    </div>
                    <div class="carousel-item">
                    <jdoc:include type="modules" name="destacados2-img" />
                      <div class="carousel-caption d-none d-md-block">
                        <jdoc:include type="modules" name="destacados2" />
                      </div>
                    </div>
                    <div class="carousel-item">
                    <jdoc:include type="modules" name="destacados3-img" />
                      <div class="carousel-caption d-none d-md-block">
                        <jdoc:include type="modules" name="destacados3" />
                      </div>
                    </div>
                    <div class="carousel-item">
                    <jdoc:include type="modules" name="destacados4-img" />
                      <div class="carousel-caption d-none d-md-block">
                        <jdoc:include type="modules" name="destacados4" />
                      </div>
                    </div>
                    <div class="carousel-item">
                    <jdoc:include type="modules" name="destacados5-img" />
                      <div class="carousel-caption d-none d-md-block">
                        <jdoc:include type="modules" name="destacados5" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Container enlaces -->
      <!-- slider tramites y servicios -->
        <div class="container">
          <h2>TRAMITES Y SERVICIOS</h2> 
          <div class="container-slider">
            <div class="slider-botones" id="slider">
              <div class="slider-section">
                  <a href="#" class="slider-item">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-1.jpg" alt="directorio.jpg" class="slider-img">
                  </a>
              </div>
              <div class="slider-section">
                  <a href="#" class="slider-item">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-2.jpg" alt="directorio.jpg" class="slider-img">
                  </a>
              </div>
              <div class="slider-section">
                  <a href="#" class="slider-item">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-3.jpg" alt="directorio.jpg" class="slider-img">
                  </a>
              </div>
              <div class="slider-section">
                  <a href="#" class="slider-item">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-4.png" alt="directorio.jpg" class="slider-img">
                  </a>
              </div>
              <div class="slider-section">
                  <a href="#" class="slider-item">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-5.jpg" alt="directorio.jpg" class="slider-img">
                  </a>
              </div>
              <div class="slider-section">
                  <a href="#" class="slider-item">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-6.jpg" alt="directorio.jpg" class="slider-img"> 
                  </a>
              </div>
              <div class="slider-section">
                  <a href="#" class="slider-item">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-5.jpg" alt="directorio.jpg" class="slider-img"> 
                  </a>
              </div>
              <div class="slider-section">
                  <a href="#" class="slider-item">
                    <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-3.jpg" alt="directorio.jpg" class="slider-img"> 
                  </a>
              </div>
            </div>
            <div class="btn-slider btn-slider-right" id="btn-right"><i class="fas fa-chevron-right"></i></div>
            <div class="btn-slider btn-slider-left" id="btn-left"><i class="fas fa-chevron-left"></i></div>
          </div>
        </div>
      <!-- slider programas sociales -->
        <div class="container">
            <h2>PROGRAMAS SOCIALES</h2> 
            <div class="container-slider2">
              <div class="slider-botones2" id="slider2">
                <div class="slider-section2">
                    <a href="#" class="slider-item2">
                      <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-1.jpg" alt="directorio.jpg" class="slider-img2">
                    </a>
                </div>
                <div class="slider-section2">
                    <a href="#" class="slider-item2">
                      <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-2.jpg" alt="directorio.jpg" class="slider-img2">
                    </a>
                </div>
                <div class="slider-section2">
                    <a href="#" class="slider-item2">
                      <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-3.jpg" alt="directorio.jpg" class="slider-img2">
                    </a>
                </div>
                <div class="slider-section2">
                    <a href="#" class="slider-item2">
                      <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-4.png" alt="directorio.jpg" class="slider-img2">
                    </a>
                </div>
                <div class="slider-section2">
                    <a href="#" class="slider-item2">
                      <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-5.jpg" alt="directorio.jpg" class="slider-img2">
                    </a>
                </div>
                <div class="slider-section2">
                    <a href="#" class="slider-item2">
                      <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-6.jpg" alt="directorio.jpg" class="slider-img2"> 
                    </a>
                </div>
                <div class="slider-section2">
                    <a href="#" class="slider-item2">
                      <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-5.jpg" alt="directorio.jpg" class="slider-img2"> 
                    </a>
                </div>
                <div class="slider-section2">
                    <a href="#" class="slider-item2">
                      <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/btn-slider-3.jpg" alt="directorio.jpg" class="slider-img2"> 
                    </a>
                </div>
              </div>
              <div class="btn-slider2 btn-slider-right2" id="btn-right2"><i class="fas fa-chevron-right"></i></div>
              <div class="btn-slider2 btn-slider-left2" id="btn-left2"><i class="fas fa-chevron-left"></i></div>
            </div>
          </div>
    <!-- CONTAINER noticias -->
      <div class="container">
        <h2>NOTICIAS</h2>
        <div class="noticias">
            <div class="news-cards">
              <div class="card-notice">
                <jdoc:include type="modules" name="noticia1-img" />
                <jdoc:include type="modules" name="noticia1-info" />
              </div>
              <div class="card-notice">
                <jdoc:include type="modules" name="noticia2-img" />
                <jdoc:include type="modules" name="noticia2-info" />
              </div>
              <div class="card-notice">
                <jdoc:include type="modules" name="noticia3-img" />
                <jdoc:include type="modules" name="noticia3-info" />
              </div>
            </div>
        </div>
        <div class="view-notice-section">
          <a href="#"><h3>Más noticias <i class="fas fa-angle-double-right"></i></h3></a>
        </div>
      </div>

    <!-- Container conocenos -->
      <!--<div class="container">-->
      <?php if($this->countModules('banner')): ?>
        <jdoc:include type="modules" name="banner"/>
        <!--<div class="banner-cuernavaca">
          <h1>CUERNAVACA VIVE</h1>
          <div class="box-info-cuernavaca">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, dolorum ut neque et exercitationem quaerat facilis soluta quisquam, cum necessitatibus mollitia libero aliquid eveniet asperiores dolor facere pariatur quidem distinctio.</p>
            <a href="#">Visitanos  <i class="fas fa-sign-in-alt"></i></a>
          </div>
        </div>-->
      <?php endif; ?>  
      <!--</div>-->
    <!-- Container mapa -->
    <?php if($this->countModules('encuentranos')): ?>
      <jdoc:include type="modules" name="encuentranos"/>
      <!--
      <div class="container" id="mapa">
        <h2>ENCUENTRANOS</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1122.116014252056!2d-99.23593507646443!3d18.91663416901197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdde536a947b6f%3A0xcea7caf3d69e0ae0!2sAyuntamiento%20de%20Cuernavaca!5e0!3m2!1ses!2smx!4v1634656161956!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      -->
      <?php endif; ?>      
  </div>
  <!-- Modal search-->
    <div class="modal fade" id="modalSearch" tabindex="-1" aria-labelledby="modalSearchLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" id="modalSearchHeader">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="modalSearchBody">
            <div class="search-container">
              <form action="#">
                <input type="text" placeholder="¿Que necesitas?">
                <button type="submit" data-bs-dismiss="modal"><i class="fas fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Modal contacto-->
    <div class="modal fade" id="modalContacto" tabindex="-1" aria-labelledby="modalContactoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header" id="modalContactoHeader">
          <h5 class="modal-title" id="modalContactoLabel">Contacto.</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modalContactoBody">
          <h6>La información aquí capturada será registrada en nuestro Sistema Integral de Atención Ciudadana</h6>
          <div class="form-contacto-container">
            <form action="#">
              <label for="nombre">Nombre</label>
              <input type="text" id="fname" name="firstname" placeholder="Introduce tu nombre">

              <label for="apellidos">Apellidos</label>
              <input type="text" id="lname" name="lastname" placeholder="Introduce tus apellidos">

              <label for="asunto">Asunto</label>
              <input type="text" id="asunto" name="asunto" placeholder="Introduce el motivo de tu mensaje">

              <label for="mensaje">Mensaje</label>
              <textarea id="mensaje" name="mensaje" placeholder="" style="height:200px"></textarea>

              <input type="submit" value="Enviar">

            </form>
          </div>
        </div>
        <div class="modal-footer" id="modalContactoFooter">
          <button type="button" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
    </div>

  <footer> 
  
        <!-- Container principal -->
        <div class="container">
          <div class="footer-container">
              <!-- Columna logo -->
                <div class="col-logo">
                  <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="logo.png">
                </div>
              <!-- Columna contacto -->
                <div class="col-contacto">
                  <H1>Contacto</H1>
                  <p>Motolinía 2, Cuernavaca Centro, Centro, 62000 Cuernavaca, Mor.</p>
                  <p>C.P. 62000</p>
                  <p>Tel: (+52) 01 777 329 5500</p>
                </div>
              <!-- Columna numeros de emergencia -->
                <div class="col-emergencias">
                  <h5>911</h5>
                  <p>Atencion a emergencias</p>
                  <h5>066</h5>
                  <p>policia emergencias</p>
                  <h5>071</h5>
                  <p>reportes en fallas de luz</p>
                </div>
              <!-- Columna redes -->
                <div class="col-acercate"> 
                  <h1>Acercate</h1>
                  <ul class="footer-redes">
                    <li class="footer-redes-facebook">
                      <a href="https://www.facebook.com/cuernavacagob/"><i class="fab fa-facebook-square"></i><h5>Municipio de Cuernavaca</h5></a>
                    </li>
                    <li class="footer-redes-twitter">
                      <a href="https://twitter.com/CuernavacaGob"><i class="fab fa-twitter-square"></i><h5>@CuernavacaGob</h5></a>
                    </li>
                    <li class="footer-redes-contacto">
                      <a id="link-modal-contacto"data-bs-toggle="modal" data-bs-target="#modalContacto"><i class="fas fa-envelope-square"></i><h5>Contactanos</h5></a>
                    </li>
                  </ul>
                </div>
              <!-- Columna legal -->
                <div class="col-legales">
                  <ul class="footer-legales">
                    <li class="footer-legales-r">
                      <h5>©2021 Gobierno de Cuernavaca.</h5>
                    </li>
                    <li class="footer-legales-aviso">
                      <a href="#"><h5>Aviso de privacidad.</h5></a>
                    </li>
                    <li class="footer-legales-etica">
                      <a href="#"><h5>Codigo de etica.</h5></a>
                    </li>
                  </ul>
                </div>
          </div>
        </div>
  </footer>

  <!-- Script -->
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/cc21ad482c.js" crossorigin="anonymous"></script>
  <!-- b5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- widget -->
  <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
  </script>
  <!-- custom jst -->
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/slider.js"></script>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/navbar.js"></script>
  </body>
</html>