
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

    <div class="cuadro" data-url="<?php echo site_url(); ?>"> <!-- Reemplaza URL_del_primer_enlace con la URL deseada -->
      <!-- Primer cuadro con imagen -->
      <div class="imagen-container">

        <img src="<?php echo base_url('assets/icono/logo1.jpg'); ?>" alt="Imagen 1" class="imagen-cuadro rounded w-100 wow zoomIn">

        <div class="texto">
          <h3 class="title light">Título 1</h3>
          <p class="subtitle medium">Subtítulo 1</p>
        </div>
      </div>
    </div>
    <div class="cuadro" data-url="<?php echo site_url(); ?>">
          <!-- Primer cuadro con imagen y enlace -->

            <div class="imagen-container">
              <img src="<?php echo base_url('assets/icono/logo1.jpg'); ?>" alt="Imagen 1" class="imagen-cuadro rounded w-100 wow zoomIn">
            </div>
            <div class="texto">
              <h3 class="title light">Título 1</h3>
              <p class="subtitle medium">Subtítulo 1</p>
            </div>

        </div>
  </div>
  <!-- Rectángulo con imagen que ocupa el ancho de los cuadrados -->
  <div class="rectangulo " data-url="<?php echo site_url(); ?>">
  <div class="imagen-container">
    <img  src="<?php echo base_url('assets/icono/avenger.jpg'); ?>" alt="Imagen 3" class="imagen-rectangulo rounded w-100 wow zoomIn">
    <div class="texto texto-rectangulo"> <!-- Agrega la clase texto-rectangulo -->
      <h3 class="title light">Título 3</h3>
      <p class="subtitle medium">Subtítulo 3</p>
    </div>
  </div>
</div>
  <div class="cuadros-container">
    <div class="cuadro" data-url="<?php echo site_url(); ?>">
      <!-- Primer cuadro con imagen -->
      <div class="imagen-container">
        <img src="<?php echo base_url('assets/icono/logo1.jpg'); ?>" alt="Imagen 1" class="imagen-cuadro rounded w-100 wow zoomIn">
        <div class="texto">
          <h3 class="title light">Título 4</h3>
          <p class="subtitle medium">Subtítulo 4</p>
        </div>
      </div>
    </div>
    <div class="cuadro" data-url="<?php echo site_url(); ?>">
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
  <div class="rectangulo " data-url="<?php echo site_url(); ?>">
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

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const cuadros = document.querySelectorAll('.cuadro , .rectangulo');

    cuadros.forEach((cuadro) => {
      cuadro.style.cursor = 'url("<?php echo base_url('assets/imagen/icon/cursor54.svg'); ?>") , pointer'; // Cambia la ruta a la ubicación real de tu archivo SVG y establece el tamaño (16x16 en este ejemplo)
      cuadro.addEventListener('click', function () {
        const url = cuadro.getAttribute('data-url');
        if (url) {
          window.location.href = url; // Redirige a la URL especificada
        }
      });
    });
  });
</script>
