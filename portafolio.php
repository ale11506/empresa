<?php
include('principal.php');
?>
<div class="container">
  <div class="row">
    <div class="col">
      <p>Bienvenidos al portafolio de Galaxy Empire, donde la imaginación se encuentra con la innovación para trazar el futuro de la tecnología.
        Este compendio no es solo una muestra de nuestro trabajo; es un viaje a través de la visión, el esfuerzo y la pasión que impulsan cada uno de nuestros proyectos.
        Desde soluciones disruptivas en inteligencia artificial hasta avances pioneros en la conectividad global, nuestro portafolio refleja el compromiso inquebrantable
        con la excelencia y la innovación que define a Galaxy Empire.</p>

      <p>A través de estas páginas, descubrirán cómo nuestros productos y servicios han transformado industrias, empoderado comunidades y elevado el estándar de lo que es posible en el mundo digital.
        Cada caso de estudio, cada testimonio, cada innovación aquí presentada es una ventana a los valores y las aspiraciones que nos guían: crear tecnología que no solo avance, sino que inspire;
        que no solo facilite, sino que transforme.</p>

      <p>Invitamos a nuestros clientes, socios y a la comunidad tecnológica en general a explorar este portafolio, no solo como una muestra de lo que hemos logrado, sino como una invitación a lo que podemos lograr juntos.
        Bienvenidos al corazón de Galaxy Empire, donde cada proyecto es un paso hacia el futuro que estamos construyendo juntos.</p>
    </div>

    <div class="col">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>

        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./imagene/logo.jpg" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagene/proyecto1.png" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Paginas de Presentación</h5>
              <p class="pro1">La presentacion de cada trabajor con foto e informacion que usted desee agregar</p>
              <a class="btn btn-danger" href="./pagina mencos/html/index.html" role="button">Link</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagene/proyecto2.png" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Paginas para Promociocionar tu Negocio</h5>
              <p class="pro2">Podemos crear la pagina ideal para tu negocio solo dinos como la deseas</p>
              <a class="btn btn-danger" href="./tarea HTML/tarea.html" role="button">Link</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagene/proyecto3.png" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Paginas Informativas</h5>
              <p class="pro3">¿Quieres que las Personas esten al tanto de lo que publicas? nosotros tenemos la pagina para tí</p>
              <a class="btn btn-danger" href="./examen parcial/examen.html" role="button">Link</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagene/proyecto4.png" class="d-block w-100" height="500" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Paginas para el Cliente</h5>
              <p class="pro4">¿Quieres modernizar tu negocio? nosotros tenemos la pagina</p>
              <a class="btn btn-danger" href="./farmacia HTML/farmacia.html/index.html" role="button">Link</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>


  <?php
  include('footer.php');
  ?>