<style>
/* Estilos base para pantallas medianas y grandes */
.col-md-11 {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 80%;
    margin: 0 auto;
    margin-top: 15%;
    margin-bottom: 10%;
}

.logo-container-cliente {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    width: 100%;
    margin: 125px;
}

.logo-cliente {
    flex: 1;
    border: 0px;
    max-width: 50%;
    text-align: center;
}

.logo-cliente .imagen-logo {
    width: 40%;
    height: auto;
    transition: transform 0.3s, opacity 0.3s; /* Transición para la opacidad */
    filter: grayscale(100%); /* Aplicar escala de grises al 100% */
   /* Inicialmente, la imagen es completamente visible */
}
/* Estilos para ocultar el texto */
.logo-cliente .logo-texto {
    display: none;
}

/* Estilos para hacerlo responsivo solo en celulares */
@media (max-width: 768px) {
    .col-md-11 {
        max-width: 100%;
        margin-top: 55%;
        margin-bottom: 5%;
    }

    .logo-container-cliente {
        margin: 50px;
        flex-direction: column;
        align-items: center;
    }

    .logo-cliente {
        max-width: 100%;
        text-align: center;
        margin:100px;
    }

    .logo-cliente .imagen-logo {
        width: 100%;
        max-width: 100%;
        height: auto;
        margin: 20px 0;
        filter: grayscale(100%); /* Aplicar escala de grises al 100% */

    }
}


</style>
<style>
    /* Estilos para ocultar el texto */
    .logo-cliente .logo-texto {
        display: none;
        opacity: 0; /* Establecer la opacidad inicial en 0 */
        transform: translateY(-1000px); /* Desplazar el texto hacia arriba al ocultar */
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* Transición de opacidad y transformación */
        font-size: 24px;
    }

    /* Estilo para mostrar el texto en lugar de la imagen */
    .logo-cliente.show-text .imagen-logo {
        display: none;
        pointer-events: none;
    }

    /* Estilo para mostrar el texto con animación */
    .logo-cliente.show-text .logo-texto {
        display: block;
        opacity: 1; /* Establecer la opacidad en 1 al mostrar */
        transform: translateY(0); /* Anular la transformación al mostrar */
    }
</style>


<div class="">
    <div class=" py-5 bg-dark hero-headers  mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5 ">
                <div class="texto-centrado  ">
                    <h4 style="color: black;" class=" animated slideInLeft light">Clie<span class="black">ntes</span>
                    </h4>
                    <p class="description-port medium" style="color: black; line-height: 1;">Los éxitos de nuestros
                        clientes nos respaldan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="col-md-11">
          <div class="logo-container-cliente">
                  <div class="logo-cliente">
                      <img src="<?php echo base_url('assets/imagen/icon/colgate-2.svg'); ?>" class="imagen-logo" alt="Logo 1">
                      <div class="logo-texto animated slideInDown  Light" style="color: gray;">Colgate</div>
                  </div>
                  <div class="logo-cliente">
                      <img src="<?php echo base_url('assets/imagen/icon/team-secret-logo.svg'); ?>" class="imagen-logo" alt="Logo 1">
                      <div class="logo-texto animated slideInDown  Light" style="color: gray;">Colgate</div>
                  </div>
                  <div class="logo-cliente">
                      <img src="<?php echo base_url('assets/imagen/icon/colgate-2.svg'); ?>" class="imagen-logo" alt="Logo 1">
                      <div class="logo-texto animated slideInDown Light"style="color: gray;">Colgate</div>
                  </div>
                  <div class="logo-cliente">
                      <img src="<?php echo base_url('assets/imagen/icon/team-secret-logo.svg'); ?>" class="imagen-logo" alt="Logo 1">
                      <div class="logo-texto animated slideInDown Light" style="color: gray;">Colgate</div>
                  </div>
              </div>
              <div class="logo-container-cliente">
                      <div class="logo-cliente">
                          <img src="<?php echo base_url('assets/imagen/icon/amazon-2.svg'); ?>" class="imagen-logo" alt="Logo 1">
                          <div class="logo-texto animated slideInDown  Light" style="color: gray;">Colgate</div>
                      </div>
                      <div class="logo-cliente">
                          <img src="<?php echo base_url('assets/imagen/icon/amazon-2.svg'); ?>" class="imagen-logo" alt="Logo 1">
                          <div class="logo-texto animated slideInDown  Light" style="color: gray;">Colgate</div>
                      </div>
                      <div class="logo-cliente">
                          <img src="<?php echo base_url('assets/imagen/icon/amazon-2.svg'); ?>" class="imagen-logo" alt="Logo 1">
                          <div class="logo-texto animated slideInDown Light"style="color: gray;">Colgate</div>
                      </div>
                      <div class="logo-cliente">
                          <img src="<?php echo base_url('assets/imagen/icon/amazon-2.svg'); ?>" class="imagen-logo" alt="Logo 1">
                          <div class="logo-texto animated slideInDown Light" style="color: gray;">Colgate</div>
                      </div>
                  </div>
                  <div class="logo-container-cliente">
                          <div class="logo-cliente">
                              <img src="<?php echo base_url('assets/imagen/icon/coca-cola-2021.svg'); ?>" class="imagen-logo" alt="Logo 1">
                              <div class="logo-texto animated slideInDown  Light" style="color: gray;">Colgate</div>
                          </div>
                          <div class="logo-cliente">
                              <img src="<?php echo base_url('assets/imagen/icon/coca-cola-2021.svg'); ?>" class="imagen-logo" alt="Logo 1">
                              <div class="logo-texto animated slideInDown  Light" style="color: gray;">Colgate</div>
                          </div>
                          <div class="logo-cliente">
                              <img src="<?php echo base_url('assets/imagen/icon/coca-cola-2021.svg'); ?>" class="imagen-logo" alt="Logo 1">
                              <div class="logo-texto animated slideInDown Light"style="color: gray;">Colgate</div>
                          </div>
                          <div class="logo-cliente">
                              <img src="<?php echo base_url('assets/imagen/icon/coca-cola-2021.svg'); ?>" class="imagen-logo" alt="Logo 1">
                              <div class="logo-texto animated slideInDown Light" style="color: gray;">Colgate</div>
                          </div>
                      </div>
                      <div class="logo-container-cliente">
                              <div class="logo-cliente">
                                  <img src="<?php echo base_url('assets/imagen/icon/logo-movistar.svg'); ?>" class="imagen-logo" alt="Logo 1">
                                  <div class="logo-texto animated slideInDown  Light" style="color: gray;">Colgate</div>
                              </div>
                              <div class="logo-cliente">
                                  <img src="<?php echo base_url('assets/imagen/icon/logo-movistar.svg'); ?>" class="imagen-logo" alt="Logo 1">
                                  <div class="logo-texto animated slideInDown  Light" style="color: gray;">Colgate</div>
                              </div>
                              <div class="logo-cliente">
                                  <img src="<?php echo base_url('assets/imagen/icon/logo-movistar.svg'); ?>" class="imagen-logo" alt="Logo 1">
                                  <div class="logo-texto animated slideInDown Light"style="color: gray;">Colgate</div>
                              </div>
                              <div class="logo-cliente">
                                  <img src="<?php echo base_url('assets/imagen/icon/logo-movistar.svg'); ?>" class="imagen-logo" alt="Logo 1">
                                  <div class="logo-texto animated slideInDown Light" style="color: gray;">Colgate</div>
                              </div>
                          </div>

    </div>
</div>
<script>
    // Obtén todos los elementos con la clase 'logo-cliente'
    const logoClientes = document.querySelectorAll('.logo-cliente');

    // Función para mostrar u ocultar el texto
    function toggleTexto(event) {
        const logoCliente = event.currentTarget;
        logoCliente.classList.toggle('show-text');
    }

    // Agrega un manejador de eventos para cada elemento
    logoClientes.forEach((logoCliente) => {
        // Manejadores de eventos táctiles para dispositivos móviles y de escritorio
        logoCliente.addEventListener('mouseenter', toggleTexto);
        logoCliente.addEventListener('mouseleave', toggleTexto);
        logoCliente.addEventListener('touchstart', toggleTexto);
        logoCliente.addEventListener('touchend', toggleTexto);
    });
</script>
