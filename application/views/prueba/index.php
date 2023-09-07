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
  <style >
  .col-md-12 {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 76%; /* Establece un ancho máximo relativo para el contenedor */
    margin: 0 auto; /* Centra el contenedor horizontalmente */
    margin-top: 17%; /* Establece un margen superior relativo */
  }

  .cuadros-container {
    display: flex;
    justify-content: space-between;
    width: 100%;
  }

  .cuadro {
    flex: 1;
    border: 0px;
    max-width: calc(50% - 0%); /* Establece un ancho máximo relativo para los cuadrados */
  }

  .rectangulo {
    width: 100%;
    height: 5%; /* Cambia la altura a un 5% del tamaño original */
    margin-top: 0%; /* Establece un margen superior relativo */
    max-width: 100%; /* Establece un ancho máximo relativo para el rectángulo */
    overflow: hidden;
  }


  /* Estilo para los contenedores de imágenes con efecto de zoom y oscurecimiento */
  .cuadro {
    position: relative;
    overflow: hidden;
  }
  .rectangulo {
    position: relative;
    overflow: hidden;
  }

  /* Estilo para las imágenes */
  .cuadro .imagen-cuadro {
    width: 100%;
    height: auto;
    transition: transform 0.3s;
  }
  .rectangulo .imagen-rectangulo {
    width: 100%;
    height: 100%;
    transition: transform 0.3s;
  }
  /* Estilo para el efecto de oscurecimiento */
  .cuadro::before,
  .rectangulo::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0); /* Fondo inicialmente transparente */
    transition: background 0.3s;
    z-index: 2; /* Coloca la capa de oscurecimiento encima de la imagen */
  }

  /* Aplica un zoom y oscurecimiento al pasar el cursor sobre las imágenes */
  .cuadro:hover .imagen-cuadro,
  .rectangulo:hover .imagen-rectangulo {
    transform: scale(1.1);
  }

  /* Aplica el oscurecimiento al pasar el cursor sobre los contenedores de imágenes */
  .cuadro:hover::before,
  .rectangulo:hover::before {
    background: rgba(0, 0, 0, 0.7); /* Fondo negro transparente al 50% de opacidad */
  }

  /* Estilos para pantallas medianas (por ejemplo, tablets) */
  @media (max-width: 992px) {
    .col-md-12 {
      margin-top: 0px; /* Ajusta el margen superior para pantallas medianas */
    }

    .cuadro {
      max-width: calc(50% - 0px); /* Añade espacio entre los cuadrados para pantallas medianas */
    }
  }

  /* Estilos para pantallas pequeñas (por ejemplo, smartphones) */
  @media (max-width: 768px) {
    .col-md-12 {
      margin-top: 200px; /* Ajusta el margen superior para pantallas pequeñas */
    }

    .cuadros-container {
      flex-direction: column;
      align-items: center;
    }

    .cuadro {
      max-width: 100%; /* Hace que los cuadrados ocupen todo el ancho en pantallas pequeñas */
    }
  }

  </style>
  <style>
  /* ------------------------------
  texto estilo del tituo
  ------------------------------- */
  /* Define una clase personalizada para centrar texto horizontalmente */
  .texto-centrado {
  text-align: center;
  }
  </style>
  <style>
  /* Estilo para los contenedores de imagen con título y subtítulo */
  .imagen-container {
    position: relative;
    overflow: hidden;
  }

  /* Estilo para el texto en el centro de la imagen */
  .texto {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0; /* Inicialmente, el texto es invisible */

    color: white;
    transition: opacity 0.3s;
    z-index: 2;
  }

  /* Aplica el efecto de mostrar el texto al pasar el cursor sobre las imágenes */
  .imagen-container:hover .texto {
    opacity: 1; /* Hace que el texto sea visible */
  }

  /* Estilo para el título */
  .texto h3.title {
    margin: 0;
    font-size: 18px; /* Tamaño del título */
  }

  /* Estilo para el subtítulo */
  .texto p.subtitle {
    margin: 0;
    font-size: 35px; /* Tamaño del subtítulo */
  }

  </style>
  <style >
  /* Estilo para el rectángulo especial con imagen que ocupa el ancho de los cuadrados */
  .rectangulo-especial {
  height: 650px; /* Cambia la altura a un 3% del tamaño original */
  }
  /* Estilos para pantallas pequeñas (por ejemplo, smartphones) */
  @media (max-width: 768px) {
    .rectangulo-especial {
      height: 3%; /* Cambia la altura solo en pantallas pequeñas */
    }
  }

  /* Estilo para el texto en los rectángulos */
  .texto-rectangulo {
    position: absolute;
    top: -250px; /* Ajusta el valor según la posición vertical deseada */
    left: 0;
    right: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    color: white;
    transition: opacity 0.3s;
    z-index: 2;
  }


  </style>
  <div class="content-portafolio ">
    <div class=" py-5 bg-dark hero-headers  mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5 ">
                <div class="texto-centrado  ">
                  <h4 class=" animated slideInLeft medium">inbox<span class="black">.agencia</span></h4>
                    <p class="  description-port texto-centrado extrabold" >
                       Casos de Exito
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class="service-container">
    <div class="col-md-12">
    <div class="cuadros-container">
      <div class="cuadro">
        <!-- Primer cuadro con imagen -->
        <div class="imagen-container">
          <img src="<?php echo base_url('assets/icono/logo1.jpg'); ?>" alt="Imagen 1" class="imagen-cuadro rounded w-100 wow zoomIn">
          <div class="texto">
            <h3 class="title light">Título 1</h3>
            <p class="subtitle medium">Subtítulo 1</p>
          </div>
        </div>
      </div>
      <div class="cuadro">
        <!-- Segundo cuadro con imagen -->
        <div class="imagen-container">
          <img src="<?php echo base_url('assets/icono/logo2.jpg'); ?>" alt="Imagen 2" class="imagen-cuadro rounded w-100 wow zoomIn">
          <div class="texto">
            <h3 class="title light">Título 2</h3>
            <p class="subtitle medium">Subtítulo 2</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Rectángulo con imagen que ocupa el ancho de los cuadrados -->
    <div class="rectangulo rectangulo-especial">
    <div class="imagen-container">
      <img src="<?php echo base_url('assets/icono/avenger.jpg'); ?>" alt="Imagen 3" class="imagen-rectangulo rounded w-100 wow zoomIn">
      <div class="texto texto-rectangulo"> <!-- Agrega la clase texto-rectangulo -->
        <h3 class="title light">Título 3</h3>
        <p class="subtitle medium">Subtítulo 3</p>
      </div>
    </div>
  </div>
    <div class="cuadros-container">
      <div class="cuadro">
        <!-- Primer cuadro con imagen -->
        <div class="imagen-container">
          <img src="<?php echo base_url('assets/icono/logo1.jpg'); ?>" alt="Imagen 1" class="imagen-cuadro rounded w-100 wow zoomIn">
          <div class="texto">
            <h3 class="title light">Título 4</h3>
            <p class="subtitle medium">Subtítulo 4</p>
          </div>
        </div>
      </div>
      <div class="cuadro">
        <!-- Segundo cuadro con imagen -->
        <div class="imagen-container">
          <img src="<?php echo base_url('assets/icono/logo2.jpg'); ?>" alt="Imagen 2" class="imagen-cuadro rounded w-100 wow zoomIn">
          <div class="texto">
            <h3 class="title light">Título 5</h3>
            <p class="subtitle medium">Subtítulo 5</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Rectángulo con imagen que ocupa el ancho de los cuadrados -->
    <div class="rectangulo rectangulo-especial">
      <div class="imagen-container">
        <img src="<?php echo base_url('assets/icono/avenger.jpg'); ?>" alt="Imagen 3" class="imagen-rectangulo rounded w-100 wow zoomIn">
        <div class="texto texto-rectangulo">
          <h3 class="title light">Título 7</h3>
          <p class="subtitle medium">Subtítulo 7</p>
        </div>
      </div>
    </div>
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
