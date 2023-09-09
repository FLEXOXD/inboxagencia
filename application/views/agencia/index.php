
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
                                          <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?php echo base_url(); ?>/assets/icono/logo2.jpg">
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
