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
  margin-top: 14%; /* Establece un margen superior relativo */
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
    margin-top: 300px; /* Ajusta el margen superior para pantallas medianas */
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
height: 700px; /* Cambia la altura a un 3% del tamaño original */
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
  <div class="col-md-12">
  <div class="cuadros-container">
    <div class="cuadro">
      <!-- Primer cuadro con imagen -->
      <div class="imagen-container">
        <img src="<?php echo base_url('assets/icono/logo1.jpg'); ?>" alt="Imagen 1" class="imagen-cuadro">
        <div class="texto">
          <h3 class="title light">Título 1</h3>
          <p class="subtitle medium">Subtítulo 1</p>
        </div>
      </div>
    </div>
    <div class="cuadro">
      <!-- Segundo cuadro con imagen -->
      <div class="imagen-container">
        <img src="<?php echo base_url('assets/icono/logo2.jpg'); ?>" alt="Imagen 2" class="imagen-cuadro">
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
    <img src="<?php echo base_url('assets/icono/avenger.jpg'); ?>" alt="Imagen 3" class="imagen-rectangulo">
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
        <img src="<?php echo base_url('assets/icono/logo1.jpg'); ?>" alt="Imagen 1" class="imagen-cuadro">
        <div class="texto">
          <h3 class="title light">Título 4</h3>
          <p class="subtitle medium">Subtítulo 4</p>
        </div>
      </div>
    </div>
    <div class="cuadro">
      <!-- Segundo cuadro con imagen -->
      <div class="imagen-container">
        <img src="<?php echo base_url('assets/icono/logo2.jpg'); ?>" alt="Imagen 2" class="imagen-cuadro">
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
      <img src="<?php echo base_url('assets/icono/avenger.jpg'); ?>" alt="Imagen 3" class="imagen-rectangulo">
      <div class="texto texto-rectangulo">
        <h3 class="title light">Título 7</h3>
        <p class="subtitle medium">Subtítulo 7</p>
      </div>
    </div>
  </div>
</div>

</div>
