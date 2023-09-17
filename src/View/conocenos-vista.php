<?php
require_once("src/Models/Administrativo.php");
$administrativos = new Administrativo();
$administrativos->setConnection($conn->getDB());

$coordinador = $administrativos->getCoordinador();
$jefeDepartamento =  $administrativos->getJefeDepartamento();
?>
<!-- Portada -->
<div class="row g-0">
  <div class="position-relative w-100 overflow-hidden">
    <img class="w-100 img-fluid" src="img/Venus-4.webp" alt="" />
    <div class="position-absolute top-50 start-50 translate-middle w-100">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="fw-bold text-warning shadow-text">Conócenos</h1>
        <h1 class="fw-bold text-light d-md-flex d-none shadow-text">
          Ingeniería Mecatrónica
        </h1>
      </div>
    </div>
  </div>
</div>
<!-- Fin Portada-->

<!-- Departamento de Sistemas -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src="img/edificio-X.JPG" alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">Departamento de Metal - Mecánica</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: center;">
            <p style="text-align: justify;"> La carrera de Ingeniería Mecatrónica pertenece al
              departamento de Metal - Mecánica, el objetivo principal del
              departamento es poner al alcance de los estudiantes diferentes
              laboratorios de cómputo para el desarrollo de sus materias
              prácticas y la orientación en los diversos trámites requeridos a
              lo largo de su plan de estudios, como pueden ser la liberación de
              créditos complementarios, servicio social, residencias
              profesionales.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Departamento de Sistemas -->

<!-- Descripción Jefa/e del departamento -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">
    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->nombre;
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->nombrePuesto . " de Metal - Mecánica";
              }
              ?>
            </h4>
          </div>
          <div class="col-12" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento->descripcion;
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src='img\Docentes\<?php if ($jefeDepartamento)  echo $jefeDepartamento->imagen; ?>' alt="">
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Jefa/e del departamento -->

<!-- Descripción Coordinador -->
<div class="bg-primary pt-5"></div>
<section class="lightSection bg-light">
  <div class="row px-2 g-0">

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src='img\Docentes\<?php if ($coordinador) echo $coordinador->imagen; ?>' alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($coordinador) {
                echo $coordinador->nombre;
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($coordinador) {
                echo $coordinador->nombrePuesto . " de " . $coordinador->nombreCarrera;
              }
              ?>
            </h4>
          </div>
          <div class="col-12 px-4" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($coordinador) {
                echo $coordinador->descripcion;
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--Fin Descripción Coordinador -->


<!-- Instalaciones -->
<div class="bg-primary pt-5"></div>
<section class="seccionInstalaciones bg-dark p-3">
  <div class="row p-4 g-0">
    <h2 class="tituloSeccionOscura text-center font-bold m-3">
      Instalaciones
    </h2>
    <div class="separadorSeccionOscura"></div>
    <h4 class="text-center text-light fw-bold fs-3">
      Laboratorios de cómputo
    </h4>
  </div>
  <div class="col-12">
    <h6 class="text-center text-warning fw-bold fs-6">
      “El verdadero progreso es el que pone la tecnología al alcance de
      todos.”<br />
    </h6>

    <p class="text-light" style="text-align: justify">
      El departamento de Metal - Mecánica cuenta con diversos
      laboratorios de equipo de cómputo en dónde los estudiantes podrán
      desempañarse en desarrollar diversos proyectos a lo largo de su trayecto estudiantil. <br /><br />
      Los laboratorios están orientados a servir como
      herramientas de aprendizaje y apoyo didáctico tanto para los
      docentes como los alumnos.
    </p>
    <div class="justify-content-center text-center">
      <p><a class="btn-warning btn font-bold" target="_blank" href="https://bit.ly/3ZrhDeQ">
          Reglamento de Laboratorio</a></p>
    </div>

    <!-- Galeria de imagenes -->
    <div class="row mb-4 px-2 g-0">
      <div class="col-12">
        <div class="galleryContainer bg-dark">
          <div class="row g-0">
            <div class="col-md-4 px-2">
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage1">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-1.jpg" alt="">
              </a>
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage2">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-2.jpg" alt="">
              </a>
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage3">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-3.jpg" alt="">
              </a>
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage4">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-4.jpg" alt="">
              </a>
            </div>

            <div class="col-md-4 px-2">
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage5">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-5.jpg" alt="">
              </a>
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage6">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-6.jpg" alt="">
              </a>
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage7">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-7.jpg" alt="">
              </a>
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage8">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-8.jpg" alt="">
              </a>
            </div>

            <div class="col-md-4 px-2">
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage9">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-9.jpg" alt="">
              </a>
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage10">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-10.jpg" alt="">
              </a>
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage11">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-11.jpg" alt="">
              </a>
              <a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage12">
                <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/Galeria/img-12.jpg" alt="">
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
</section>
<!-- Fin Galeria de imagenes -->


<!-- Modals de la galería-->
<div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-1.jpg" alt="">
      <!-- <p>Logo del Instituto Tecnológico de México Veracruz</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage2" aria-hidden="true" class="modal fade" id="modalImage2">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-2.jpg" alt="">
      <!-- <p>Estatua Venus</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage3" aria-hidden="true" class="modal fade" id="modalImage3">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-3.jpg" alt="">
      <!-- <p>Letras del Instituto Tecnológico de México Veracruz</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage4" aria-hidden="true" class="modal fade" id="modalImage4">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-4.jpg" alt="">
      <!-- <p>Áreas recreativas</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage5" aria-hidden="true" class="modal fade" id="modalImage5">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-5.jpg" alt="">
      <!-- <p>Áreas recreativas</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage6" aria-hidden="true" class="modal fade" id="modalImage6">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-6.jpg" alt="">
      <!-- <p>Edificio E</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage7" aria-hidden="true" class="modal fade" id="modalImage7">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-7.jpg" alt="">
      <!-- <p>Clúster del Laboratorio de Cómputo Intensivo</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage8" aria-hidden="true" class="modal fade" id="modalImage8">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-8.jpg" alt="">
      <!-- <p>Laboratorio de Cómputo Intensivo</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage9" aria-hidden="true" class="modal fade" id="modalImage9">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-9.jpg" alt="">
      <!-- <p>Laboratorio de cómputo</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage10" aria-hidden="true" class="modal fade" id="modalImage10">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-10.jpg" alt="">
      <!-- <p>Edificio U: Sistemas</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage11" aria-hidden="true" class="modal fade" id="modalImage11">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-11.jpg" alt="">
      <!-- <p>Laboratorio de cómputo</p> -->
    </div>
  </div>
</div>

<div tabindex="-1" aria-labelledby="modalImage12" aria-hidden="true" class="modal fade" id="modalImage12">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content bg-transparent text-white text-center">
      <img src="img/Galeria/img-12.jpg" alt="">
      <!-- <p>Laboratorio de cómputo</p> -->
    </div>
  </div>
</div>
</section>
<!-- Fin Modals de la galería-->

<div class="bg-primary pt-5"></div>
<div class="p-4 text-center">
  <h5 class="font-bold">Autores de la página:</h5>
  <p class="font-semibold">Estudiantes de la Generación 2018 - 2023</p>
  <p>Daniela Castro Rodriguez, Nancy Daniela Mendez Arpidez, Marco Gabriel Cortés Toledo,
    Yelitza Magali Rosas Jiménez, Eric Manuel Montalvo Cruz y Gabriel Escobar Medina</p>
</div>

<div class="p-1 text-center">
  <p class="font-semibold">Agradecimientos</p>
  <p>Fernando Martinez, Eric Manuel Montalvo Cruz e Ivan Agame Malpica </p>
</div>
<!-- Fin Laboratorio de cómputo intensivo -->