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

</head>
<body>
  <div class="preloader-container">
      <div class="preloader">
          <img src="<?php echo base_url('assets/imagen/inbox.gif'); ?>" alt="Cargando...">
          <div class="content">
              <!-- Contenido de tu página web -->
          </div>
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
        <a href="about.html" class="medium" style="font-size: 20px;" >Clientes</a>
      </li>

      <li class="t-center m-b-13">
        <a href="blog.html" class="medium" style="font-size: 20px;" >Contactanos</a>
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

  <style media="screen">
  .img-responsive {
    max-width: 75%;
    height: auto;
  }

  .custom-class {
    display: block;
    margin: 100px auto; /* Centrar la imagen en dispositivos móviles */
  }

  /* Estilos específicos para pantallas más grandes, como computadoras */
  @media (max-width: 767px) {
      .custom-class {
          margin: 0 59px; /* Ajusta el margen para mover la imagen a la derecha en dispositivos móviles */
      }
  }
  </style>
  <style media="screen">
  /* Estilos generales para el nuevo contenedor */
  .new-container {
    /* Agrega tus estilos específicos para el contenedor si es necesario */
  }

  /* Estilos para los elementos de servicio con fondo blanco */
  .white-bg {
    padding: 20px; /* Espacio interior para los elementos de servicio */
    border: 1px solid #ccc; /* Borde opcional */
    text-align: light;
    transition: transform 0.3s;
    height: 550px; /* Altura fija para todos los cuadros */
    width: 100%; /* Ancho del 100% para que se ajusten al contenedor */
  }

  .white-bg:hover {
    transform: scale(1.05); /* Efecto de escala al pasar el mouse */
  }

  .white-bg i {
    font-size: 3rem;
    color: #007bff;
  }

  .white-bg h5 {
    font-size: 1.5rem;
    margin-top: 1rem;
    margin-bottom: 0.5rem;
  }

  .white-bg p {
    font-size: 1rem;
    color: #777;
  }

  /* Estilos adicionales para los elementos de servicio si es necesario */
  .service-item {
    /* Agrega tus estilos específicos para los elementos de servicio si es necesario */
  }

  /* Estilos para el contenido existente si es necesario */
  .tu-contenido-existente {
    /* Agrega tus estilos para el contenido existente si es necesario */
  }

  /* Estilos para el contenedor de servicios */
  .service-container {
    margin-top: 55rem; /* Espacio superior para separar los elementos de servicio de contenido anterior */
  }

  /* Media Query para hacerlo responsivo en pantallas más pequeñas */
  @media screen and (max-width: 768px) {
    .white-bg {
      height: auto; /* Cambia la altura a automática en pantallas pequeñas */
      margin-bottom: 2rem; /* Agrega margen inferior entre los elementos */
    }
  }

  </style>
  <style>
  /* Estilo para la lista personalizada con icono de "visto" */
  .custom-list {
      list-style: none;
      padding-left: 0;
  }

  .custom-list li {
      margin-bottom: 5px;
      position: relative;
      padding-left: 20px; /* Espacio para el icono de "visto" */
  }

  .custom-list li:before {
      content: "\2713"; /* Código Unicode para el icono de "visto" */
      color: #ff9900; /* Color del icono */
      margin-right: 5px;
      position: absolute;
      left: 0; /* Alineado a la izquierda */
      top: 0;
  }

  </style>
  <style media="screen">
  /* Estilos generales para el nuevo contenedor */
  .new-container {
    /* Agrega tus estilos específicos para el contenedor si es necesario */
  }

  /* Estilos para los elementos de servicio con fondo blanco */
  .white-bg {
    padding: 20px; /* Espacio interior para los elementos de servicio */
    border: 1px solid #ccc; /* Borde opcional */
    text-align: light;
    transition: transform 0.3s;
    height: 550px; /* Altura fija para todos los cuadros */
    width: 100%; /* Ancho del 100% para que se ajusten al contenedor */
  }

  .white-bg:hover {
    transform: scale(1.05); /* Efecto de escala al pasar el mouse */
  }

  .white-bg i {
    font-size: 3rem;
    color: #007bff;
  }

  .white-bg h5 {
    font-size: 1.5rem;
    margin-top: 1rem;
    margin-bottom: 0.5rem;
  }

  .white-bg p {
    font-size: 1rem;
    color: #777;
  }

  /* Estilos adicionales para los elementos de servicio si es necesario */
  .service-item {
    /* Agrega tus estilos específicos para los elementos de servicio si es necesario */
  }

  /* Estilos para el contenido existente si es necesario */
  .tu-contenido-existente {
    /* Agrega tus estilos para el contenido existente si es necesario */
  }

  /* Estilos para el contenedor de servicios */
  .nuevo-container {
    margin-top: 5rem; /* Espacio superior para separar los elementos de servicio de contenido anterior */
  }

  /* Media Query para hacerlo responsivo en pantallas más pequeñas */
  @media screen and (max-width: 768px) {
    .white-bg {
      height: auto; /* Cambia la altura a automática en pantallas pequeñas */
      margin-bottom: 2rem; /* Agrega margen inferior entre los elementos */
    }
  }

  </style>
  <style media="screen">
  /* Estilos personalizados para el elemento */
  .scroll-effect {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s ease, transform 0.5s ease;
  }

  .scroll-effect.active {
      opacity: 1;
      transform: translateY(0);
  }

  </style>

  <div class="content-container">
    <div >
      <div class=" py-5 bg-dark hero-header  mb-5">
          <div class="container my-5 py-5">
              <div class="row align-items-center g-5 ">

                  <div class="col-lg-6 text-center text-lg-start">
                      <h2 class=" animated slideInLeft medium">inbox<span class="black">.agencia</span></h2>
                      <br>
                      <p class="animated slideInLeft mb-4 pb-2 description extrabold" >
                         Abandona lo común,abraza<br>
                         un Estudio de Sueños:<br> web,
                         diseños inigualables
                       </p>
                      <div class="sabermas animated slideInLeft" style="text-align: center;">
                          <a href="#" id="scrollButton" class="saber-mas-button">Saber más <span class="arrow-icon">&#9660;</span></a>
                      </div>
                  </div>
                  <div class="col-lg-6 text-light text-lg-end overflow-hidden ">
                      <img class=" img-responsive custom-class" src="<?php echo base_url(); ?>/assets/plantilla/img/Recurso2.png" alt="">
                  </div>

              </div>
          </div>
      </div>
      <div class="service-container"> <!-- Agregué la clase "new-container" -->
           <div class="container">
             <h1 class="regular" style="color: white; text-align: light;">Soluciones</h1>
             &nbsp;
             &nbsp;
             <h2 class="extrabold"style="color: white; text-align: light;">Utilizamos todas las herramientas de marketing y publicidad para ofrecer un servicio global y eficaz.</h2>
             <br>
               <div class="row g-4">
                   <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                       <div class="service-item rounded pt-3 white-bg"> <!-- Agregué la clase "white-bg" para el fondo blanco -->
                           <div class="p-4">
                               <i class="fa fa-3x bi-pencil-fill bi-vector-pe text-primary mb-4"></i>
                               <h5 class="regular">Branding</h5>
                               <p class="light" style="color: white;">Generamos vínculos tanto conscientes como subconscientes con la audiencia para influir en sus elecciones y alcanzar los objetivos de su organización.</p>
                               <br>
                               <ul class="custom-list">
                                    <li class="light" style="color: white;">Creamos Logos e Isologos</li>
                                    <li class="light" style="color: white;">Manuales de estilos</li>
                                    <li class="light" style="color: white;">Diseño integral</li>
                                    <li class="light" style="color: white;">Motion y video</li>
                                </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                       <div class="service-item rounded pt-3 white-bg"> <!-- Agregué la clase "white-bg" para el fondo blanco -->
                           <div class="p-4">
                               <i class="fa fa-3x fas fa-thumbs-up text-primary mb-4"></i>
                               <h5 class="regular">Social Media</h5>
                               <p class="light" style="color: white;">Conectando Tu Marca con el Mundo a Través de las Redes Sociales</p>
                               <br>
                               <ul class="custom-list">
                                    <li class="light" style="color: white;">Impulsar la presencia de tu marca </li>
                                    <li class="light" style="color: white;">Community Manager</li>
                                    <li class="light" style="color: white;">Diseño y Redacción</li>
                                    <li class="light" style="color: white;">Animación</li>
                                </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                       <div class="service-item rounded pt-3 white-bg"> <!-- Agregué la clase "white-bg" para el fondo blanco -->
                           <div class="p-4">
                               <i class="fa fa-3x fas fa-desktop text-primary mb-4"></i>
                               <h5 class="regular">Diseño Web</h5>
                               <p class="light" style="color: white;">Creando tu presencia en línea: Diseño web personalizado para destacar en la web</p>
                               <br>
                               <ul class="custom-list">
                                    <li class="light" style="color: white;">Diseño web responsivo</li>
                                    <li class="light" style="color: white;">Sitios web personalizados</li>
                                    <li class="light" style="color: white;">Rediseño de sitios web (html, Css, js)</li>
                                    <li class="light" style="color: white;">Integración de redes sociales</li>
                                </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                       <div class="service-item rounded pt-3 white-bg"> <!-- Agregué la clase "white-bg" para el fondo blanco -->
                           <div class="p-4">
                               <i class="fa fa-3x fas fa-line-chart text-primary mb-4"></i>
                               <h5 class="regular">Growth Marketing</h5>
                               <p class="light" style="color: white;"> Impulsando el Crecimiento Sostenible de tu Negocio en la Era Digital</p>
                               <br>
                               <ul class="custom-list">
                                    <li class="light" style="color: white;">Google Ads</li>
                                    <li class="light" style="color: white;">Social Ads</li>
                                    <li class="light" style="color: white;">Analítica web</li>
                                    <li class="light" style="color: white;">Email Marketing</li>
                                </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <br><br><br><br>
       <div style="text-align: center;">
         <img src="<?php echo base_url('assets/icono/avenger.jpg') ?>" alt="" style="filter: grayscale(100%); max-width: 100%; height: auto; width: 90%; max-height: 700px; margin: 0 auto;">
       </div>
       <div class="nuevo-container"> <!-- Agregué la clase "new-container" -->
            <div class="container">
              <!-- About Start -->
                    <div class="container-xxl py-5">
                        <div class="container">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-6">
                                    <div class="row g-3">
                                        <div class="col-6 text-start">
                                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?php echo base_url(); ?>/assets/icono/logo1.jpg">
                                        </div>
                                        <div class="col-6 text-start">
                                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?php echo base_url(); ?>/assets/icono/logo2.jpg" style="margin-top: 25%;">
                                        </div>
                                        <div class="col-6 text-end">
                                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?php echo base_url(); ?>/assets/icono/logo3.jpg">
                                        </div>
                                        <div class="col-6 text-end">
                                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?php echo base_url(); ?>/assets/icono/logo4.jpg">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="section-title ff-secondary text-start text-primary fw-normal regular">Sobre nosotros</h5>
                                    <h1 class="mb-4 extrabold">Bienvenido a <i class="bi-palette-fill text-primary me-2"></i><span class="animated slideInLeft medium">inbox<span class="black">.agencia</span></span></h1>
                                    <p class="mb-4 medium">Nuestro equipo es experto en Diseño Web, Desarrollo Web y Marketing Digital. Impulsamos tu presencia en línea con creatividad y experiencia.</p>
                                    <p class="mb-4 medium">Lideramos proyectos con calidad humana, adaptándonos a las necesidades de emprendedores, PyMes y grandes empresas. Ofrecemos un valioso servicio, fusionando estrategia, diseño y creatividad.</p>
                                    <div class="row g-4 mb-4">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">3</h1>
                                                <div class="ps-4 medium">
                                                    <p class="mb-0 regular">Años de</p>
                                                    <h6 class="text-uppercase mb-0 regular">Experiencia</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">+50</h1>
                                                <div class="ps-4 regular">
                                                    <p class="mb-0 regular">Populares</p>
                                                    <h6 class="text-uppercase mb-0 regular">Diseños</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sabermas animated slideInLeft" style="text-align: center;">
                                      <a href="<?php echo site_url('Portafolios/index'); ?>" class="saber-mas-button">
                                        Portafolio
                                        <i class="fa fa-paint-brush"></i>
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About End -->
            </div>
            &nbsp;



        </div>

    </div>

  </div>

  <footer class="bg1">
      <div class="site-footer-top">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-12 d-flex align-items-center">
                  <img src="<?php echo base_url('assets/imagen/iconoblanco.png'); ?>" alt="Logo" class="me-3" width="45">
                  <h2 class="regular">inbox</h2><h2 class="black">.agencia</h2>

              </div>
          </div>
      </div>
    </div>
  		<div class="container p-t-40 p-b-70">
  			<div class="row">
  				<div class="col-sm-6 col-md-4 p-t-50">
  					<!-- - -->
  					<h4 class="medium m-b-33">
  						Contactanos
  					</h4>

            <ul class="m-b-70">
                <li class="regular m-b-14">
                    <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                    <a href="https://goo.gl/maps/BVQP5cRgqkeUmcEh8" class="regular" target="_blank">Quito-Ecuador</a>
                </li>
                <li class="regular m-b-14">
                    <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                    <a href="https://api.whatsapp.com/send?phone=593997640853&text=Hola%20desde%20Quito!" class="regular" target="_blank">(+593) 997 640 853</a>
                </li>

                <li class="regular m-b-14">
                    <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                    <a href="mailto:gerencia@inboxagencia.com" class="regular">gerencia@inboxagencia.com</a>
                </li>
            </ul>
  					<!-- - -->
  					<h4 class="medium m-b-32">
  						Horarios de apertura
  					</h4>

  					<ul>
  						<li class="regular">
  							08:30 AM – 7:00 PM
  						</li>

  						<li class="regular">
  							Lunes - Viernes
  						</li>
  					</ul>
  				</div>

  				<div class="col-sm-6 col-md-4 p-t-50">
  					<!-- - -->
  					<h4 class="medium m-b-33">
  						Stalkeanos
  					</h4>

  					<div class="m-b-25">
              <li class="social-icon-item">
                  <a href="https://www.instagram.com/inbox.agencia/" class="social-icon-link" target="_blank">
                      <span class="bi-instagram"></span>
                  </a>
              </li>
              <li class="social-icon-item">
                  <a href="#" class="social-icon-link" target="_blank">
                      <span class="bi-behance"></span>
                  </a>
              </li>
              <li class="social-icon-item">
                  <a href="#" class="social-icon-link" target="_blank">
                      <span class="bi-linkedin"></span>
                  </a>
              </li>
              <li class="social-icon-item">
                  <a href="https://www.tiktok.com/@inboxagencia" class="social-icon-link" target="_blank">
                      <span class="bi-tiktok"></span>
                  </a>
              </li>
  					</div>
  				</div>

  				<div class="col-sm-6 col-md-4 p-t-50">
  					<!-- - -->
  					<h4 class="medium m-b-38">
  						Certificados
  					</h4>

  					<!-- Gallery footer -->
  					<div class="wrap-gallery-footer flex-w">
  						<a class="item-gallery-footer wrap-pic-w"  >
  							<img src="<?php echo base_url('assets/imagen/certificado/1.jpg'); ?>" >
  						</a>
  						<a class="item-gallery-footer wrap-pic-w" >
  							<img src="<?php echo base_url('assets/imagen/certificado/2.jpg'); ?>" >
  						</a>
  						<a class="item-gallery-footer wrap-pic-w" >
  							<img src="<?php echo base_url('assets/imagen/certificado/3.jpg'); ?>" >
  						</a>
  					</div>

  				</div>
  			</div>
  		</div>

  		<div class="end-footer bg2">
  			<div class="container">
  				<div class="flex-sb-m flex-w p-t-22 p-b-22">
  					<div class="p-t-5 p-b-5">
  						<a href="https://www.instagram.com/inbox.agencia/" class="fs-15 c-white"><i class="fa bi-instagram" aria-hidden="true" target="_blank"></i></a>
  						<a href="#" class="fs-15 c-white"><i class="fa bi-behance m-l-18" aria-hidden="true" target="_blank"></i></a>
  						<a href="#" class="fs-15 c-white"><i class="fa bi-linkedin m-l-18" aria-hidden="true" target="_blank"></i></a>
              <a href="https://www.tiktok.com/@inboxagencia" class="fs-15 c-white"><i class="bi-tiktok m-l-18" aria-hidden="true" target="_blank"></i></a>
  					</div>

  					<div class="bold p-r-20 p-t-5 p-b-5">
  						Copyright © 2023 | Creado por Inbox.Agencia<i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">inbox.Agencia</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</footer>
  <!-- Back to top -->
  <div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="image-btn-back-to-top">
      <img class="custom-image" src="<?php echo base_url('assets/imagen/Recurso5.png'); ?>" alt="Botón de retorno arriba">
    </span>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/bootstrap/js/popper.js"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/daterangepicker/moment.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/slick/slick.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/js/slick-custom.js"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/parallax100/parallax100.js"></script>
  	<script type="text/javascript">
          $('.parallax100').parallax100();
  	</script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="<?php echo base_url(); ?>/plantilla/vendor/lightbox2/js/lightbox.min.js"></script>
  <!--===============================================================================================-->
  	<script src="<?php echo base_url(); ?>/assets/js/script.js"></script>
    <script src="<?php echo base_url(); ?>/plantilla/js/main.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plantilla/lib/wow/wow.min.js"></script>




    <script src="<?php echo base_url(); ?>/assets/plantilla/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/plantilla/lib/tempusdominus/js/moment-timezone.min.js"></script>

    <script>
       new WOW().init();
    </script>


  <script>
      document.addEventListener('DOMContentLoaded', function () {
          var scrollButton = document.getElementById('scrollButton');

          scrollButton.addEventListener('click', function (e) {
              e.preventDefault();

              // La cantidad de desplazamiento que deseas, por ejemplo, 100 píxeles.
              var scrollAmount = 850;

              // Obtener la posición actual de desplazamiento vertical.
              var currentPosition = window.pageYOffset;

              // Calcular la nueva posición de desplazamiento.
              var targetPosition = currentPosition + scrollAmount;

              // Realizar un desplazamiento suave.
              window.scrollTo({
                  top: targetPosition,
                  behavior: 'smooth'
              });
          });
      });
  </script>
  <script>
    // Espera a que se cargue todo el contenido de la página
    window.addEventListener('load', function () {
      // Oculta el preloader después de un tiempo determinado (por ejemplo, 2 segundos)
      setTimeout(function () {
        var preloaderContainer = document.querySelector('.preloader-container');
        preloaderContainer.style.opacity = '0';
        preloaderContainer.style.transform = 'translateY(-100%)';

        // Muestra el contenido de la página con una transición suave
        var contentToLoad = document.querySelector('.content-to-load');
        contentToLoad.style.opacity = '1';
        contentToLoad.style.visibility = 'visible';
      }, 2000); // Ajusta el tiempo según tus necesidades
    });
  </script>


  </body>

  </html>
