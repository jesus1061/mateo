<?php
include_once "application/controllers/select_controller.php";
$instancia = new Select_controller();
$peticion_select = $instancia -> listar_banners();
$peticion_select_talento = $instancia ->listar_personal();
$peticion_select_publicaciones = $instancia ->listar_publicaciones();
$peticion_select_programas = $instancia -> listar_programas();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Fundación Mateo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700|Anton" rel="stylesheet">


  <link rel="stylesheet" href="plantilla_front/fonts/icomoon/style.css">

  <link rel="stylesheet" href="plantilla_front/css/bootstrap.min.css">
  <link rel="stylesheet" href="plantilla_front/css/magnific-popup.css">
  <link rel="stylesheet" href="plantilla_front/css/jquery-ui.css">
  <link rel="stylesheet" href="plantilla_front/css/owl.carousel.min.css">
  <link rel="stylesheet" href="plantilla_front/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="plantilla_front/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="plantilla_front/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="plantilla_front/css/aos.css">

  <link rel="stylesheet" href="plantilla_front/css/style.css">
  <link rel="stylesheet" href="plantilla_front/css/mateo.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">


          <div class="site-logo">
            <a href="index.html" class="text-black"><img src="plantilla_front/images/logo1.png" class="img-logo" alt=""></a>
          </div>

          <nav class="site-navigation text-center ml-auto" role="navigation">

            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
              <li><a href="#home-section" class="enlace-hover" >Inicio</a></li>
              <li><a href="#about-section" class="enlace-hover" >Nosotros</a></li>
              <li><a href="#discover-section"  class="enlace-hover">Programas</a></li>
              <li><a href="#donate-section" class="enlace-hover" >Donaciones</a></li>
              <li><a href="#blog-section" class="enlace-hover" >Noticias</a></li>
              <li><a href="#contact-section" class="enlace-hover" >Contactanos</a></li>
            </ul>
          </nav>



          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>

    <div class="owl-carousel slide-one-item">
      <?php
      foreach ($peticion_select as $slider) {
       echo '<a href="#"><img src="'.$slider['banner_imagen'].'" alt="Image" class="img-fluid img-slider"></a>';
     }
     ?>


   </div>

   <div class="d-block d-md-flex intro-engage fichas">
    <div class="">
      <h2 style="color: rgb(255 , 180 , 29)">Trabajo social</h2>
      <p style="color: white; font-weight: 900;">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
    </div>
    <div>
      <h2 style="color:rgb(31 ,133 , 151);">Infraestructural</h2>
      <p style="color: black;">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
    </div>
    <div>
      <h2 style="color:white;">Educación</h2>
      <p style="color:white; font-weight: 900;">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
    </div>

  </div>
  <div class="d-block d-md-flex intro-engage fichas">
    <div class="">
      <h2 style="color: rgb(255 , 180 , 29)" >Trabajo social</h2>
      <p style="color: white; font-weight: 900;">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
    </div>
    <div>
      <h2 style="color:rgb(31 ,133 , 151);">Infraestructural</h2>
      <p style="color: black;">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
    </div>
    <div>
      <h2 style="color: white;">Educación</h2>
      <p style="color:white; font-weight: 900;" >Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
    </div>

  </div>
<div class="d-block d-md-flex intro-engage fichas">
    <div class="">
      <h2 style="color: rgb(255 , 180 , 29)" >Trabajo social</h2>
      <p style="color: white; font-weight: 900;">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
    </div>
    <div>
      <h2 style="color:rgb(31 ,133 , 151);">Infraestructural</h2>
      <p style="color: black;">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
    </div>
    <div>
      <h2 style="color: white;">Educación</h2>
      <p style="color:white; font-weight: 900;" >Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut praesentium magnam</p>
    </div>

  </div>

  <div class="site-section bg-image overlay counter" style="background-color: rgb(255 ,255 , 255 , 0.8)" id="nosotros">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6 mb-4">
          <figure class="block-img-video-1" data-aos="fade">
            <a href="https://vimeo.com/45830194" class="popup-vimeo">
              <span class="icon"><span class="icon-play"></span></span>
              <img src="plantilla_front/images/hero_1_no-text.jpg" alt="Image" class="img-fluid">
            </a>
          </figure>
        </div>
        <div class="col-lg-5 ml-auto align-self-lg-center"  >
          <h2 class="text-black mb-4 text-uppercase section-title">Nosotros</h2>
          <p class="text-black">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut, praesentium magnam, pariatur quae, necessitatibus</p>
          <p class="text-black">Dolor, eligendi voluptate ducimus itaque esse autem perspiciatis sint! Recusandae dolor aliquid inventore sit,</p>
        </div>
      </div>

    </div>
  </div>


  <div class="site-section bg-image overlay counter" style="" id="mision" style="background-color: rgb(255 , 255 , 255 , 0.8);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6 mb-4">
          <figure class="block-img-video-1" data-aos="fade">
            <a href="https://vimeo.com/45830194" class="popup-vimeo">
              <span class="icon"><span class="icon-play"></span></span>
              <img src="plantilla_front/images/hero_1_no-text.jpg" alt="Image" class="img-fluid">
            </a>
          </figure>
        </div>
        <div class="col-lg-5 ml-auto align-self-lg-center">
          <h2 class="text-black mb-4 text-uppercase section-title">Misión</h2>
          <p class="text-black">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut, praesentium magnam, pariatur quae, necessitatibus</p>
          <p class="text-black">Dolor, eligendi voluptate ducimus itaque esse autem perspiciatis sint! Recusandae dolor aliquid inventore sit,</p>
        </div>
      </div>

    </div>
  </div>


  <div class="site-section bg-image overlay counter" style="background-color: rgb(255 ,255 , 255 , 0.8)" id="vision">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6 mb-4">
          <figure class="block-img-video-1" data-aos="fade">
            <a href="https://vimeo.com/45830194" class="popup-vimeo">
              <span class="icon"><span class="icon-play"></span></span>
              <img src="plantilla_front/images/hero_1_no-text.jpg" alt="Image" class="img-fluid">
            </a>
          </figure>
        </div>
        <div class="col-lg-5 ml-auto align-self-lg-center">
          <h2 class="text-black mb-4 text-uppercase section-title">Visión</h2>
          <p class="text-black">Accusantium dignissimos voluptas rem consequatur blanditiis error ratione illo sit quasi ut, praesentium magnam, pariatur quae, necessitatibus</p>
          <p class="text-black">Dolor, eligendi voluptate ducimus itaque esse autem perspiciatis sint! Recusandae dolor aliquid inventore sit,</p>
        </div>
      </div>

    </div>
  </div>



  <div class="site-section" id="team-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="text-black text-uppercase section-title">Talento</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis, eius, eos consectetur consequuntur sit. Aut, perspiciatis, reprehenderit.</p>
        </div>
      </div>
      <div class="row">

        <?php
        foreach($peticion_select_talento as $talento){

          echo '  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="block-team-member-1 text-center rounded">
          <figure>
          <img src="'.$talento['personal_foto'].'" alt="Image" class="img-fluid rounded-circle">
          </figure>
          <h3 class="font-size-20 nombre-talento" >'.$talento['personal_nombre'].'</h3>
          <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">'.$talento['personal_cargo'].'</span>
          <p class="px-3 mb-3">'.$talento['perfil_profesional'].'</p>
          <div class="block-social-1">
          <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
          <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
          <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
          </div>
          </div>
          </div>';

        }
        ?>



      </div>
    </div>
  </div>


  <div class="site-section" id="programas">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="text-black text-uppercase section-title">Programas</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis, eius, eos consectetur consequuntur sit. Aut, perspiciatis, reprehenderit.</p>
        </div>
      </div>
      <div class="row">

        <?php
        foreach($peticion_select_programas as $programa){

          echo '  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="block-team-member-1 text-center">
          <figure>
          <img src="'.$programa['portada_programa'].'" alt="Image" class="img-programa">
          </figure>

          <span class="d-block  letter-spacing-1 text-uppercase font-size-15 titulo-programa " style="color:rgb(31 ,133 , 151)">'.$programa['titulo_programa'].'</span>
          <p class="contenido-programa" style="color:black;" >'.$programa['contenido_programa'].'</p>
          <br>
          <a href="#" style="color:black; font-weight:bolder; text-decoration:underline ">Ver Programa</a>

          </div>
          </div>';

        }
        ?>



      </div>
    </div>
  </div>



  <div class="site-section bg-image overlay" style="background-image: url('plantilla_front/images/hero_1_no-text.jpg');" id="donate-section">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 text-center">
          <h2 class="text-white mb-4">Contribuyenos con tu donación</h2>
          <button class="btn-donar">Dona ahora</button>
        </div>
      </div>
    </div>
  </div>
















  <div class="site-section" id="blog-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-7 text-center mb-5 text-center">
          <h2 class="text-black text-uppercase section-title">Blog de noticias</h2>
          <p>Aqui encontraras todas las noticias relacionadas con la fundación mateo</p>
        </div>
      </div>
      <div class="row">

       <?php
       foreach($peticion_select_publicaciones as $publicacion){
        echo ' <div class="col-lg-6">
        <div>
        <a href="single.html" class="mb-4 d-block"><img src="'.$publicacion['portada_pub'].'" alt="Image" class="img-fluid rounded"></a>
        <h2><a href="#" style="color:black; font-weigth:900;">'.$publicacion['titulo_pub'].'</a></h2>
        <p class="text-muted mb-3 text-uppercase small"><span class="mr-2" style="color:black">'.$publicacion['fecha_pub'].'</span> <span style="color:black">Por</span> <a href="single.html" class="administrador">Administrador</a></p>
        <p style="color:black; font-weigth:900;" class="contenido-publicacion">'.$publicacion['contenido_pub'].'</p>
        <p><a href="single.html" class="ver-mas">Ver mas</a></p>
        </div>
        </div>';
      }
      ?>

    </div>
  </div>
</div>


<div class="site-section" id="contact-section" style="background-color: rgb(255 , 180 , 29);">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="text-white section-title text-uppercase" style="color:white;">Contactanos</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-6 mb-5">
        <form action="#" method="post">
          <div class="form-group row">
            <div class="col-md-6 mb-4 mb-lg-0">
              <input type="text" class="form-control" placeholder="Nombre*">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Apellido*">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Correo electronico*">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <textarea name="" id="" class="form-control" placeholder="Escribe tu mensaje*" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 ml-auto">
              <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Enviar" style="background-color: rgb(31 ,133 , 151); border:none; color: white;">
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<footer class="site-footer" style="background-color: rgb(31 ,133 , 151);">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-8">
            <h2 class="footer-heading mb-4">Nosotros</h2>
            <p>Pequeña descripcion de nosotros</p>
          </div>
          <div class="col-md-4 ml-auto">
            <h2 class="footer-heading mb-4">Mapa del sitio</h2>
            <ul class="list-unstyled">
              <li><a href="#">Nosotros</a></li>
              <li><a href="#">Programas</a></li>
              <li><a href="#">Donaciones</a></li>
              <li><a href="#">Noticias</a></li>
              <li><a href="#">Privacidad</a></li>
            </ul>
          </div>

        </div>
      </div>
      <div class="col-md-4 ml-auto">

        <div class="mb-5">

          <h2 class="footer-heading mb-4">Subscribete a nuestro boletín de noticias</h2>
          <form action="#" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary text-white" type="button" id="button-addon2" style="background-color: rgb(255 , 180 , 29); border: none;">Subscribirse</button>
              </div>
            </div>
          </div>


          <h2 class="footer-heading mb-4">Siguenos</h2>
          <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
        </form>
      </div>
    </div>

  </div>
</footer>

</div>

<script src="plantilla_front/js/jquery-3.3.1.min.js"></script>
<script src="plantilla_front/js/jquery-ui.js"></script>
<script src="plantilla_front/js/popper.min.js"></script>
<script src="plantilla_front/js/bootstrap.min.js"></script>
<script src="plantilla_front/js/owl.carousel.min.js"></script>
<script src="plantilla_front/js/jquery.magnific-popup.min.js"></script>
<script src="plantilla_front/js/jquery.sticky.js"></script>
<script src="plantilla_front/js/jquery.waypoints.min.js"></script>
<script src="plantilla_front/js/jquery.animateNumber.min.js"></script>
<script src="plantilla_front/js/aos.js"></script>

<script src="plantilla_front/js/main.js"></script>
<script src="plantilla_front/js/mateo.js"></script>

</body>
</html>