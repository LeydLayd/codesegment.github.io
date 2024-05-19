<?php echo $this->include('plantillas/header-pagina'); ?>





<main>
  <div class="container py-5" id="custom-cards">
    <!-- Carusel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active d-item">
              <img src="<?= base_url('images/imagesCursos/cursos.jpg') ?>" class="d-block w-100 d-img2" alt="Fondo 1">
              <div class="carousel-caption top-0 mt-4">
                <p class="margen_arriba fs-3 text-uppercase white_color">
                  ¡Vamos!
                </p>
                <h1 class="display-1 fw-bolder text-capitalize order-lg-1 white_color">CURSOS</h1>
                <p class="font-weight-bold fs-3 text-uppercase">
                  <div style="font-size: 2vw; padding: 4.5% font-weight: bold;">
                      <div class="white_color">
                          Programacion
                      </div> 
                  </div>
                </p>
              </div>
            </div>

            <div class="carousel-item d-item">
              <img src="<?= base_url('images/imagesCursos/model2.jpg') ?>" class="d-block w-100 d-img" alt="...">
              <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase white_color">
                ¡Vamos!
                </p>
                <h1 class="display-1 fw-bolder text-capitalize white_color">CodeSegment</h1>
                <p class="font-weight-bold fs-3 text-uppercase">
                <div style="font-size: 2vw; padding: 4.5% font-weight: bold;">
                  <div class="white_color">
                    Matematicas
                  </div>                
                </div>
                </p>
              </div>
            </div>
            <div class="carousel-item d-item">
              <img src="<?= base_url('images/imagesCursos/cursos1.jpg') ?>" class="d-block w-100 d-img" alt="...">
              <div class="carousel-caption top-0 mt-4">
                <p class="mt-5 fs-3 text-uppercase white_color">
                ¡Vamos!
                </p>
                <h1 class="display-1 fw-bolder text-capitalize white_color">CodeSegment</h1>
                <p class="font-weight-bold fs-3 text-uppercase">
                <div style="font-size: 2vw; padding: 4.5% font-weight: bold;">
                  <div class="white_color">
                        Circuitos
                      </div>                
              </div>
                </p>
              </div>
            </div>
          </div>
      </div>

      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?= base_url('images/imagesCursos/matematicas.jpeg') ?>');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Curos de Matemáticas</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <!-- <li class="me-auto">
                  <img src="<?= base_url('images/logo.png') ?>" alt="Logo" width="32" height="32" class="rounded-circle border border-white">
                </li> -->
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                  <a href="#Matematicas">Ver</a>
                </li>
<!--                 <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                  <small>3d</small>
                </li> -->
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?= base_url('images/imagesCursos/programacion.jpg') ?>');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Cursos de Programación</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <!-- <li class="me-auto">
                  <img src="<?= base_url('images/logo.png') ?>" alt="Logo" width="32" height="32" class="rounded-circle border border-white">
                </li> -->
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                  <a href="#Programacion">Ver</a>
                </li>
                <!-- <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                  <small>4d</small>
                </li> -->
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?= base_url('images/imagesCursos/circuitos.jpg') ?>');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Cursos de Circuitos</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <!-- <li class="me-auto">
                  <img src="<?= base_url('images/logo.png') ?>" alt="Logo" width="32" height="32" class="rounded-circle border border-white">
                </li> -->
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                  <a href="#Circuitos">Ver</a>
                </li>
                <!-- <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                  <small>5d</small>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Es recomendable cambiar el icono qeu aparece en cada circulo,
      yo puse el logo, pero es mejor poner uno acorde al curso. -->
    <!-- Cursos de matematicas -->   
    <div class="page_section">

      <div class="bd-cheatsheet container-fluid bg-body">
        <section id="content">
          <h2 class="fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Contenido</h2>

          <article class="my-3" id="typography">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                  <h3>Matemáticas</h3>
                  <a class="d-flex align-items-center" href="#Programacion">Programación</a>
                  <a class="d-flex align-items-center" href="#Circuitos">Circuitos</a>
                </div>

            <div class="container">

                <!-- Aquí iban los botones -->

                <section id="Matematicas">
                  <div class="row testimonios_cajas">

                    <div class="col-lg-4 testimonio_caja">
                        <div class="card">
                          <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/mate.jpg') ?>" alt="">
                          <div class="card-body text-center">
                            <div class="card-title black_color">
                              Matematicas capitulo 1
                            </div>
                            <div class="card-text black_color">Suma, resta, multiplicación y división.
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-4 testimonio_caja">
                        <div class="card">
                          <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/mate2.jpg') ?>" alt="">
                          <div class="card-body text-center">
                            <div class="card-title black_color">
                              Matematicas capitulo 2
                            </div>
                            <div class="card-text black_color">Integrales, derivadas y más.
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 testimonio_caja">
                        <div class="card">
                          <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/mate3.jpg') ?>" alt="">
                          <div class="card-body text-center">
                            <div class="card-title  black_color" style="text-align: center;">
                              Matematicas capitulo 3
                            </div>
                            <div class="card-text black_color" style="text-align: center;">
                              Fracciones
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 testimonio_caja">
                        <div class="card">
                          <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/mate4.jpg') ?>" alt="">
                          <div class="card-body text-center">
                            <div class="card-title  black_color" style="text-align: center;">
                              Matematicas capitulo 4
                            </div>
                            <div class="card-text black_color" style="text-align: center;">
                              Probabilidad y estadistica
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 testimonio_caja">
                        <div class="card">
                          <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/mate5.jpg') ?>" alt="">
                          <div class="card-body text-center">
                            <div class="card-title  black_color" style="text-align: center;">
                              Matematicas capitulo 5
                            </div>
                            <div class="card-text black_color" style="text-align: center;">
                              Geometría
                            </div>
                          </div>
                        </div>
                      </div>

                  </div><!-- Fin de row de matematicas-->
                </section>
              
            </div>

          </article>  <!-- Fin article matematicas -->
        
          <article class="my-3" id="typography">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                  <h3>Programación</h3>
                  <a class="d-flex align-items-center" href="#Matematicas">Matemáticas</a>
                  <a class="d-flex align-items-center" href="#Circuitos">Circuitos</a>
                </div>

            <div class="container">

                <!-- Aquí iban los botones -->

                
                <section id="Programacion">
                <div class="row testimonios_cajas">

                  <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/progra3.jpg') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title black_color">
                            Programación capitulo 1
                          </div>
                          <div class="card-text black_color">Programación orientada a objetos.
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/progra4.jpg') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title black_color">
                            Programación capitulo 2
                          </div>
                          <div class="card-text black_color">Estructura de datos.
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/progra6.jpg') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title  black_color" style="text-align: center;">
                            Programación capitulo 3
                          </div>
                          <div class="card-text black_color" style="text-align: center;">
                            Algoritmos de busqueda
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/progra7.jpg') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title  black_color" style="text-align: center;">
                            Programación capitulo 4
                          </div>
                          <div class="card-text black_color" style="text-align: center;">
                            Desarrollo de aplicaciones moviles
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/progra3.jpg') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title  black_color" style="text-align: center;">
                            Programación capitulo 5
                          </div>
                          <div class="card-text black_color" style="text-align: center;">
                            Ciberseguridad
                          </div>
                        </div>
                      </div>
                    </div>

                </div><!-- Fin de row testimonios-->
                </section>
            </div>
          </article> <!-- Fin article programación -->
            
            <!-- Aquí iban los botones -->


          <article class="my-3" id="typography">
              <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                <h3>Circuitos</h3>
                  <a class="d-flex align-items-center" href="#Matematicas">Matemáticas</a>
                  <a class="d-flex align-items-center" href="#Programacion">Programación</a>
              </div>
            <div class="container">  
                <section id="Circuitos">
                <div class="row testimonios_cajas">

                  <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/circui.png') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title black_color">
                            Circuitos capitulo 1
                          </div>
                          <div class="card-text black_color">Mallas, voltaje, corriente y resistencias.
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/circui2.png') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title black_color">
                            Circuitos capitulo 2
                          </div>
                          <div class="card-text black_color">
                            Circuitos abiertos y cerrados.
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/circui3.png') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title  black_color" style="text-align: center;">
                            Circuitos capitulo 3
                          </div>
                          <div class="card-text black_color" style="text-align: center;">
                            Teoría de control
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/circui2.png') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title  black_color" style="text-align: center;">
                            Circuitos capitulo 4
                          </div>
                          <div class="card-text black_color" style="text-align: center;">
                            Arduino 
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 testimonio_caja">
                      <div class="card">
                      <img class="card-img-top w-100" src="<?= base_url('images/imagesCursos/circui.png') ?>" alt="">
                        <div class="card-body text-center">
                          <div class="card-title  black_color" style="text-align: center;">
                            Circuitos capitulo 5
                          </div>
                          <div class="card-text black_color" style="text-align: center;">
                            Introducción a Proteus
                          </div>
                        </div>
                      </div>
                    </div>

                </div><!-- Fin de row testimonios-->
                </section>
              </div>              
            </div><!-- Fin de container -->
          </article>  <!-- Fin article circuitos -->
        </section> <!-- Fin del contenido de la barra lateral -->
      </div><!-- Fin de page section -->
    </div>
</main>
  <?php echo $this->include('plantillas/footer');?>