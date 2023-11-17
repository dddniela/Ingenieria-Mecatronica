<?php
require_once("src/Models/Administrativo.php");
$administrativos = new Administrativo();

$coordinador = $administrativos->getCoordinador();
$jefeDepartamento =  $administrativos->getJefeDepartamento();

$type = pathinfo($jefeDepartamento['imagen'], PATHINFO_EXTENSION);
$imagenJefeDep = $GLOBALS['PATH_DOCENTE'] . $jefeDepartamento['imagen'];
$imagenJefeDep = file_get_contents($imagenJefeDep);
$imagenJefeDep = 'data:image/' . $type . ';base64,' . base64_encode($imagenJefeDep);

$type = pathinfo($coordinador['imagen'], PATHINFO_EXTENSION);
$imagenCoordinador = $GLOBALS['PATH_DOCENTE'] . $coordinador['imagen'];
$imagenCoordinador = file_get_contents($imagenCoordinador);
$imagenCoordinador = 'data:image/' . $type . ';base64,' . base64_encode($imagenCoordinador);
?>
<!-- Portada -->
<div class="row g-0">
  <div class="position-relative w-100 overflow-hidden">
    <img class="w-100 img-fluid" src="img/ITVER-4.webp" alt="" />
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
        <img class="img-fluid rounded" src="img/EdificioX.webp" alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">Departamento de Metal - Mecánica</h2>
            <div class="sectionSeparator"></div>
          </div>
          <div class="col-12" style="text-align: justify;">
            <p style="text-align: justify;"> El año del 2008 en ITV se elaboró un documento
              (SOL DE APERT MECATRONICA-ITV 2008 (DGEST).pdf) para solicitar la creación de la carrera de Ingeniería Mecatrónica con la clave IMCT 2005-284,
              en dicho documento se especifica y justifica la necesidad y pertinencia de apertura de esta carrera.
              Después de un estudio y análisis regional se vio que ninguna institución en el estado de Veracruz la impartía, siendo un área de oportunidad
              para el Instituto Tecnológico de Veracruz. Se pudo concluir que: <br>

            <ul>
              <li>
                El campo de acción de los egresados de la carrera de ingeniería mecatrónica era muy amplio en la región de influencia del Instituto
                Tecnológico de Veracruz, además tiene un futuro asegurado, según la tendencia de industrialización del estado y la región.
              </li>
              <li>
                Los egresados de esta carrera podrían ser fácilmente captados por las medianas y pequeñas industrias para su desarrollo tecnológico.
              </li>
              <li>
                Con la demanda propia de la región y del estado y considerando que el puerto de Veracruz es un polo de captación para estudiantes de
                regiones vecinas, se consideró que la ingeniería mecatrónica es una excelente alternativa para ser ofertada por el Instituto Tecnológico de Veracruz.
              </li>
            </ul>
            Es importante mencionar que a lo largo de 15 años de fundada esta carrera, los planes de estudio han tenido cambios, siendo el ultimo Firmado en agosto de 2010 por el Dr. Rodolfo Tuirán Gutiérrez, Subsecretario de Educación Superior y por el Dr. Carlos Alfonso García Ibarra, Director General de Educación Superior Tecnológica. Actualmente la clave del programa es IMCT-2010-229
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
                echo $jefeDepartamento['nombre'];
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento['nombrePuesto'] . " de Metal - Mecánica";
              }
              ?>
            </h4>
          </div>
          <div class="col-12" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($jefeDepartamento) {
                echo $jefeDepartamento['descripcion'];
              }
              ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-12 p-2 shadow-sm">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <img class="img-fluid rounded" src='<?php if ($jefeDepartamento)  echo $imagenJefeDep; ?>' alt="">
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
        <img class="img-fluid rounded" src='<?php if ($coordinador) echo $imagenCoordinador; ?>' alt="">
      </div>
    </div>

    <div class="col-lg-6 col-12 p-4">
      <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="row g-0">
          <div class="col-12">
            <h2 class="sectionTitle text-center font-bold m-3">
              <?php
              if ($coordinador) {
                echo $coordinador['nombre'];
              }
              ?>
            </h2>
            <div class="sectionSeparator"></div>
            <h4 class="text-center fw-bold fs-3">
              <?php
              if ($coordinador) {
                echo $coordinador['nombrePuesto'] . " de Ingeniería Mecatrónica";
              }
              ?>
            </h4>
          </div>
          <div class="col-12 px-4" style="text-align: center;">
            <p class="" style="text-align: justify">
              <?php
              if ($coordinador) {
                echo $coordinador['descripcion'];
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
<section class="darkSection bg-dark p-2 px-4 col g-0">
  <h2 class="titleDarkSection text-center font-bold m-3">Instalaciones</h2>
  <div class="darkSectionSeparator"></div>
  <div class="col-12">
    <h6 class="text-center text-warning fw-bold fs-6">
      “El verdadero progreso es el que pone la tecnología al alcance de
      todos.”<br>
    </h6>

    <p class="text-light" style="text-align: justify">
      El departamento de Metal-Mecánica cuenta con diversos laboratorios donde los
      estudiantes pueden desarrollar diversos proyectos a lo largo de su trayecto
      estudiantil.
      <br><br>
      Estos laboratorios están diseñados para servir como herramientas de aprendizaje
      y apoyo didáctico tanto para los docentes como para los alumnos. En cada
      laboratorio, hay personal de apoyo y un maestro en turno encargado de
      supervisar y vigilar la realización de las prácticas. También se encargan
      de garantizar que los alumnos cumplan con las normas y reglamentos del
      laboratorio, teniendo la autoridad para reportar cualquier conducta anómala o
      contraria a estas normas al jefe del departamento correspondiente. En caso
      necesario, pueden llevar el asunto al comité académico, que determinará una
      sanción para el alumno, la cual deberá cumplir.
      <br><br>
      Los reglamentos de cada laboratorio son específicos a la naturaleza de ese
      laboratorio en particular. Sin embargo, en términos generales, se enfocan
      en mantener el orden y la limpieza de los equipos, así como en regular la
      conducta de los alumnos en estas instalaciones. En cada laboratorio, los
      jefes y auxiliares son responsables de hacer cumplir estas disposiciones
      para el uso adecuado de las salas del laboratorio y los talleres.
    </p>

    <!-- Galería de imágenes -->
    <div class="row mb-4 px-2 g-0 text-center justify-content-center">

      <div class="col-12 col-sm-6">
        <h2 class="titleDarkSection font-bold m-3">
          Laboratorio UDIM
        </h2>
        <div class="darkSectionSeparator"></div>
        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalUDIM">
          <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/UDIM/UDIM.webp" alt="">
        </a>

        <div tabindex="-1" aria-labelledby="modalUDIM" aria-hidden="true" class="modal fade" id="modalUDIM">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/UDIM/UDIM.webp" alt="">
            </div>
          </div>
        </div>

        <br>
        <a class="btn btn-warning font-bold" href="#!" data-bs-toggle="modal" data-bs-target="#modalReglamentoUDIM">Ver reglamento UDIM</a>

        <div tabindex="-1" aria-labelledby="modalReglamentoUDIM" aria-hidden="true" class="modal fade" id="modalReglamentoUDIM">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/Reglamentos/reglamento-UDIM.webp" alt="">
            </div>
          </div>
        </div>

        <br><br><br>
      </div>

      <h4 class="text-center text-light fw-bold fs-4">
        Laboratorio de Ciencia e Ingeniería de Materiales (LACIMA)
      </h4>

      <h4 class="text-center text-light fw-bold fs-5">
        Laboratorio de Mecánica Experimental
      </h4>
      <div class="row gx-3">
        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLME">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/UDIM/LME.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLME" aria-hidden="true" class="modal fade" id="modalLME">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/UDIM/LME.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLME-1">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/UDIM/LME-1.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLME-1" aria-hidden="true" class="modal fade" id="modalLME-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/UDIM/LME-1.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLME-2">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/UDIM/LME-2.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLME-2" aria-hidden="true" class="modal fade" id="modalLME-2">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/UDIM/LME-2.webp" alt="">
            </div>
          </div>
        </div>
      </div>
      <h4 class="text-center text-light fw-bold fs-5">
        Laboratorio de Metalurgia y Corrosión
      </h4>

      <div class="row gx-3">
        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLMC">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/UDIM/LMC.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLMC" aria-hidden="true" class="modal fade" id="modalLMC">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/UDIM/LMC.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLMC-1">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/UDIM/LMC-1.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLMC-1" aria-hidden="true" class="modal fade" id="modalLMC-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/UDIM/LMC-1.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLMC-2">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/UDIM/LMC-2.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLMC-2" aria-hidden="true" class="modal fade" id="modalLMC-2">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/UDIM/LMC-1.webp" alt="">
            </div>
          </div>
        </div>
      </div>

      <h4 class="text-light fw-bold fs-4">
        Laboratorio de Vibraciones
      </h4>
      <div class="row gx-3">
        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLVM-1">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/UDIM/LVM-1.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLVM-1" aria-hidden="true" class="modal fade" id="modalLVM-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/UDIM/LVM-1.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLVM-2">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/UDIM/LVM-2.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLVM-2" aria-hidden="true" class="modal fade" id="modalLVM-2">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/UDIM/LVM-2.webp" alt="">
            </div>
          </div>
        </div>
      </div>

      <div>
        <h2 class="titleDarkSection font-bold m-3">
          Laboratorios del Edificio X - Alfonso C. García Reynoso
        </h2>
        <div class="darkSectionSeparator"></div>

        <a class="btn btn-warning font-bold" href="#!" data-bs-toggle="modal" data-bs-target="#modalReglamentoAulasLIM">Ver reglamento Aulas LIM</a>

        <div tabindex="-1" aria-labelledby="modalReglamentoAulasLIM" aria-hidden="true" class="modal fade" id="modalReglamentoAulasLIM">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/Reglamentos/reglamento-AulaLIM.webp" alt="">
            </div>
          </div>
        </div>

        <br><br><br>
      </div>

      <h4 class="text-center text-light fw-bold fs-4">
        Laboratorio Institucional de Física
      </h4>

      <div class="row gx-3">
        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLIF-1">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Institucional-Fisica/LIF-1.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLIF-1" aria-hidden="true" class="modal fade" id="modalLIF-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Institucional-Fisica/LIF-1.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLIF-2">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Institucional-Fisica/LIF-2.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLIF-2" aria-hidden="true" class="modal fade" id="modalLIF-2">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Institucional-Fisica/LIF-2.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLIF-3">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Institucional-Fisica/LIF-3.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLIF-3" aria-hidden="true" class="modal fade" id="modalLIF-3">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Institucional-Fisica/LIF-3.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLIF-4">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Institucional-Fisica/LIF-4.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLIF-4" aria-hidden="true" class="modal fade" id="modalLIF-4">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Institucional-Fisica/LIF-4.webp" alt="">
            </div>
          </div>
        </div>
      </div>

      <h4 class="text-center text-light fw-bold fs-4">
        Laboratorio de Automatización Mecatrónica MPS
      </h4>

      <div class="row gx-3">
        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalMPS-1">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/MPS/MPS-1.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalMPS-1" aria-hidden="true" class="modal fade" id="modalMPS-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/MPS/MPS-1.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalMPS-2">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/MPS/MPS-2.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalMPS-2" aria-hidden="true" class="modal fade" id="modalMPS-2">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/MPS/MPS-2.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalMPS-3">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/MPS/MPS-3.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalMPS-3" aria-hidden="true" class="modal fade" id="modalMPS-3">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/MPS/MPS-3.webp" alt="">
            </div>
          </div>
        </div>

      </div>

      <h4 class="text-center text-light fw-bold fs-4">
        Laboratorio de Robótica e Inteligencia Artificial
      </h4>

      <div class="row gx-3">
        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLR-1">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Robotica/LR-1.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLR-1" aria-hidden="true" class="modal fade" id="modalLR-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Robotica/LR-1.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLR-2">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Robotica/LR-2.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLR-2" aria-hidden="true" class="modal fade" id="modalLR-2">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Robotica/LR-2.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLR-3">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Robotica/LR-3.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLR-3" aria-hidden="true" class="modal fade" id="modalLR-3">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Robotica/LR-3.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLR-4">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Robotica/LR-4.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLR-4" aria-hidden="true" class="modal fade" id="modalLR-4">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Robotica/LR-4.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLR-5">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Robotica/LR-5.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLR-5" aria-hidden="true" class="modal fade" id="modalLR-5">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Robotica/LR-5.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLR-6">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Robotica/LR-6.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLR-6" aria-hidden="true" class="modal fade" id="modalLR-6">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Robotica/LR-6.webp" alt="">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLR-7">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Robotica/LR-7.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLR-7" aria-hidden="true" class="modal fade" id="modalLR-7">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Robotica/LR-7.webp" alt="">
            </div>
          </div>
        </div>

        
        <div class="col-md-3">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#modalLR-8">
            <img class="img-fluid w-100 shadow-1-strong rounded mb-4" src="img/laboratorios/Robotica/LR-8.webp" alt="">
          </a>
        </div>

        <div tabindex="-1" aria-labelledby="modalLR-8" aria-hidden="true" class="modal fade" id="modalLR-8">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent text-white text-center">
              <img src="img/laboratorios/Robotica/LR-8.webp" alt="">
            </div>
          </div>
        </div>
        
      </div>
    </div>
</section>
<!-- Fin Instalaciones -->

<!-- <div class="bg-primary pt-5"></div>
<div class="p-4 text-center">
  <h5 class="font-bold">Autores de la página:</h5>
  <p class="font-semibold">Estudiantes de la Generación 2018 - 2023</p>
  <p>Daniela Castro Rodriguez, Nancy Daniela Mendez Arpidez, Marco Gabriel Cortés Toledo,
    Yelitza Magali Rosas Jiménez y Gabriel Escobar Medina</p>
</div>

<div class="p-1 text-center">
  <p class="font-semibold">Agradecimientos</p>
  <p>Fernando Martinez, Eric Manuel Montalvo Cruz e Ivan de Jesús Agame Malpica </p>
</div> -->