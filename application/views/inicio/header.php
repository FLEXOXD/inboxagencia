<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>InboxAgencia</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/imagen/logo.png'); ?>"/>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/plantilla/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/plantilla/css/bootstrap-icons.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/plantilla/css/templatemo-festava-live.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/estilo.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/agenciaestilo.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/plantilla/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/plantilla/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/plantilla/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->


    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/plantilla/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/portafolio.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/plantilla/css/bootstrap.min.css" rel="stylesheet">


  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plantilla/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plantilla/fonts/themify/themify-icons.css">

  <!--===============================================================================================-->

  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plantilla/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plantilla/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plantilla/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plantilla/vendor/slick/slick.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plantilla/vendor/lightbox2/css/lightbox.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plantilla/css/util.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/plantilla/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/custom.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--===============================================================================================-->
    <style>
      .social-icon-link:hover {
          color: purple;
      }
  </style>

  <style >
  .texto-invisible {
  color: transparent; /* Hace el texto transparente */
  }

  </style>
  <style>
  .other-section {
    background-image: url('<?php echo base_url('assets/imagen/negrofondo.png'); ?>'); /* Cambia la ruta a la ubicación de tu imagen */
    background-size: cover; /* Ajusta el tamaño de la imagen para cubrir todo el fondo */
    background-position: center center; /* Posición de la imagen en el centro del fondo */
  }
</style>
<style>
  .article {
    position: relative;
    width: 1000px; /* Ancho aumentado para imágenes más grandes */
    margin: 0 auto; /* Centrar el artículo */
    transition: all 0.3s ease;
  }

  .article img:first-child {
    box-shadow: 0 60px -60px rgba(0, 30, 255, 0.5);
    border-radius: 4px;
    object-fit: cover;
    width: 100%;
  }

  .article img:last-child {
    position: absolute;
    width: 940px; /* Ancho aumentado para imágenes más grandes */
    left: 50%;
    bottom: 0;
    transform: translateX(-50%) translateY(25%); /* Centrar la imagen horizontalmente y ajustar la posición vertical */
    transition: 0.3s ease;
    opacity: 0;
  }

  .article:hover {
    transform: perspective(250px) rotateX(10deg) translateY(-5%) translateZ(0);
  }

  .article::before {
    content: '';
    position: absolute;
    bottom: 0;
    height: 100%;
    width: 100%;
    background-image: linear-gradient(to bottom, transparent 10%, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0) 95%);
    opacity: 0;
    transition: all 0.3s ease;
  }

  .article:hover::before {
    opacity: 1;
  }

  .article:hover img:last-child {
    opacity: 1;
    transform: translateX(-50%) translateY(10%);
  }
</style>

<style>

.saber-mas-button {
    display: block;
    margin: 0 auto;
    padding: 8px 20px;
    width: 180px; /* Remueve el ancho fijo para que el botón se ajuste automáticamente */
    border: none;
    border-radius: 18px;
    font-size: 14px;
    cursor: pointer;
    background-color: #252525;
    color: #fff;
    transition: background-color 0.3s, color 0.3s;
    overflow: hidden;
}


/* Cambio de color al pasar el cursor */
.saber-mas-button:hover {
    background: linear-gradient(to bottom, #3F50E9, #621ED0);
    color: #fff;
}

.arrow-icon {
    position: relative;
    font-size: 12px;
    margin-left: 5px;
    animation: arrowMove 4s infinite;
}

/* Animación de movimiento hacia abajo */
@keyframes arrowMove {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(10px);
    }
}
</style>
<style>
/* Contenedor de la lista de iconos */
.custom-social-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex; /* Hace que los elementos se alineen horizontalmente */
    gap: 10px; /* Espacio entre los iconos */
    justify-content: center; /* Centra horizontalmente los elementos en el contenedor */
    align-items: center; /* Centra verticalmente los elementos en el contenedor */
}

/* Estilo predeterminado para los iconos */
.custom-social-link span {
    color: black; /* Iconos negros */
    border-radius: 25%; /* Forma completamente circular */
    display: inline-block; /* Para que el border-radius funcione */
    padding: 10px; /* Ajusta el tamaño del círculo según tus preferencias */
    background-color: white; /* Fondo blanco para los círculos */
}

/* Aumenta el tamaño de los íconos */
.custom-social-link span.bi-instagram,
.custom-social-link span.bi-behance,
.custom-social-link span.bi-linkedin,
.custom-social-link span.bi-tiktok {
    font-size: 12px; /* Ajusta el tamaño del ícono según tus preferencias */
}

/* Estilo al pasar el cursor sobre los iconos */
.custom-social-link:hover span {
    color: purple; /* Iconos morados al pasar el cursor */
}

</style>
<style>

.preloader-container {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: #000000;
display: flex;
justify-content: center;
align-items: center;
z-index: 9999;
opacity: 1; /* Inicialmente visible */
transition: opacity 1s ease, transform 1s ease; /* Transición de opacidad y transformación */
transform: translateY(0%); /* Desplazado hacia abajo inicialmente */
}

.preloader {
background: transparent;
display: flex;
flex-direction: column;
align-items: center;
}

.preloader img {
max-width: 100px;
max-height: 100px;
}

.content {
display: none;
}
</style>
<style media="screen">
.content-to-load {
opacity: 0;
visibility: hidden;
transition: opacity 0.5s, visibility 0.5s;
}

</style>
<script>
setTimeout(function () {
  var preloaderContainer = document.querySelector('.preloader-container');
  preloaderContainer.style.opacity = '0';
  preloaderContainer.style.transform = 'translateY(-100%)';

  // Muestra el contenido de la página con una transición suave
  var contentToLoad = document.querySelector('.content-to-load');
  contentToLoad.style.opacity = '1';
  contentToLoad.style.visibility = 'visible';
}, 1); // Cambia este valor a 4000 para 4 segundos

</script>

</head>
<body>
  <div class="preloader-container">
  <div class="preloader">
    <img src="<?php echo base_url('assets/imagen/inbox.gif'); ?>" alt="Cargando...">
  </div>
</div>


  <!-- Header -->
  <header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4" >
      <div class="container h-full">
        <div class="wrap_header trans-0-3">

          <!-- Logo -->
          <div class="logo">
            <a href="<?php echo site_url(); ?>">
              <img src="<?php echo base_url('assets/imagen/imagotipo_1.png'); ?>" alt="IMG-LOGO" data-logofixed="<?php echo base_url('assets/imagen/imagotipo_1.png'); ?>">
            </a>
          </div>
          <!-- Social -->
          <div class="social flex-w flex-l-m p-r-20">

            <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Sidebar -->
  <aside class="sidebar trans-0-4" style="display: flex; flex-direction: column; align-items: center;">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar bi-x-square-fill color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
      <li class="t-center m-b-13">
        <a href="<?php echo site_url(); ?>" class="medium" style="font-size: 20px;" >Inicio</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo site_url('Agencias/index'); ?>" class="medium" style="font-size: 20px;" >Agencia</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo site_url('Portafolios/index'); ?>" class="medium" style="font-size: 20px;" >Portafolio</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo site_url('Clientes/index'); ?>" class="medium" style="font-size: 20px;" >Clientes</a>
      </li>

      <li class="t-center m-b-13">
        <a href="<?php echo site_url('Contactos/index'); ?>" class="medium" style="font-size: 20px;" >Contactanos</a>
      </li>

      <li class="t-center">
        <!-- Button3 -->
        <a href="reservation.html" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
          Muy pronto Cursos
        </a>

      </li>
    </ul>

    <!-- - -->
    <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
      <!-- - -->
      <h4 class="extrabold" style="font-size: 20px;">
        Stalkeanos
      </h4>
      <br>

      <!-- REDES SOCIALES  -->
      <div class="social-share">
          <div class="custom-social-share">
              <ul class="custom-social-list">
                  <li class="custom-social-item">
                      <a href="https://www.instagram.com/inbox.agencia/" class="custom-social-link" target="_blank">
                          <span class="bi-instagram"></span>
                      </a>
                  </li>
                  <li class="custom-social-item">
                      <a href="#" class="custom-social-link" target="_blank">
                          <span class="bi-behance"></span>
                      </a>
                  </li>
                  <li class="custom-social-item">
                      <a href="#" class="custom-social-link" target="_blank">
                          <span class="bi-linkedin"></span>
                      </a>
                  </li>
                  <li class="custom-social-item">
                      <a href="https://www.tiktok.com/@inboxagencia" class="custom-social-link" target="_blank">
                          <span class="bi-tiktok"></span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>


  </aside>
