
<div class="content-portafolio ">
  <div class=" py-5 bg-dark hero-headers  mb-5">
      <div class="container my-5 py-5">
          <div class="row align-items-center g-5 ">
              <div class="texto-centrado  ">
                <h4 class=" animated slideInLeft medium">inbox<span class="black">.agencia</span></h4>
                  <p class="  description-port  extrabold" >
                     Casos de Exito
                   </p>
              </div>
          </div>
      </div>
  </div>
  <div class="service-container">
  <div class="col-md-12">
  <div class="cuadros-container">

    <div class="cuadros" data-url="<?php echo site_url('Portafolios/port1'); ?>"> <!-- Reemplaza URL_del_primer_enlace con la URL deseada -->
      <!-- Primer cuadro con imagen -->
      <div class="imagen-container">

        <img src="<?php echo base_url('assets/icono/coopercar/previsualizacionc.jpg'); ?>" alt="Imagen 1" class="imagen-cuadros rounded w-100 wow zoomIn">

        <div class="texto">
          <h3 class="title light">Diseño de logotipo</h3>
          <p class="subtitle medium">Cooper Car</p>
        </div>
      </div>
    </div>
    <div class="cuadros" data-url="<?php echo site_url('Portafolios/port2'); ?>"> <!-- Reemplaza URL_del_primer_enlace con la URL deseada -->
      <!-- Primer cuadro con imagen -->
      <div class="imagen-container">

        <img src="<?php echo base_url('assets/icono/alexmovilex/previalexmovi.jpg'); ?>" alt="Imagen 1" class="imagen-cuadros rounded w-100 wow zoomIn">

        <div class="texto">
          <h3 class="title light">Título 2</h3>
          <p class="subtitle medium">Subtítulo 2</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Rectángulo con imagen que ocupa el ancho de los cuadrados -->
  <div class="rectangulos " data-url="<?php echo site_url('Portafolios/port2'); ?>">
  <div class="imagen-container">
    <img  src="<?php echo base_url('assets/icono/avenger.jpg'); ?>" alt="Imagen 3" class="imagen-rectangulos rounded w-100 wow zoomIn">
    <div class="texto texto-rectangulos"> <!-- Agrega la clase texto-rectangulo -->
      <h3 class="title light">Título 3</h3>
      <p class="subtitle medium">Subtítulo 3</p>
    </div>
  </div>
</div>
  <div class="cuadros-container">
    <div class="cuadros" data-url="<?php echo site_url('Portafolios/port1'); ?>">
      <!-- Primer cuadro con imagen -->
      <div class="imagen-container">
        <img src="<?php echo base_url('assets/icono/logo2.jpg'); ?>" alt="Imagen 1" class="imagen-cuadros rounded w-100 wow zoomIn">
        <div class="texto">
          <h3 class="title light">Título 4</h3>
          <p class="subtitle medium">Subtítulo 4</p>
        </div>
      </div>
    </div>
    <div class="cuadros" data-url="<?php echo site_url('Portafolios/port1'); ?>">
      <!-- Segundo cuadro con imagen -->
      <div class="imagen-container">
        <img src="<?php echo base_url('assets/icono/logo2.jpg'); ?>" alt="Imagen 2" class="imagen-cuadros rounded w-100 wow zoomIn">
        <div class="texto">
          <h3 class="title light">Título 5</h3>
          <p class="subtitle medium">Subtítulo 5</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Rectángulo con imagen que ocupa el ancho de los cuadrados -->
  <div class="rectangulos " data-url="<?php echo site_url('Portafolios/port1'); ?>">
    <div class="imagen-container">
      <img src="<?php echo base_url('assets/icono/avenger.jpg'); ?>" alt="Imagen 3" class="imagen-rectangulos rounded w-100 wow zoomIn">
      <div class="texto texto-rectangulos">
        <h3 class="title light">Título 7</h3>
        <p class="subtitle medium">Subtítulo 7</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const cuadros = document.querySelectorAll('.cuadros , .rectangulos');

    cuadros.forEach((cuadro) => {
      cuadro.style.cursor = 'url("<?php echo base_url(''); ?>") , pointer'; // Cambia la ruta a la ubicación real de tu archivo SVG y establece el tamaño (16x16 en este ejemplo)
      cuadro.addEventListener('click', function () {
        const url = cuadro.getAttribute('data-url');
        if (url) {
          window.location.href = url; // Redirige a la URL especificada
        }
      });
    });
  });
</script>
