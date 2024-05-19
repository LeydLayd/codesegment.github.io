<?php echo $this->include('plantillas/header-pagina'); ?>

<div class="container">

    <!-- Carusel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active d-item">
            <img src="<?= base_url('images/imagesIndex/progra.jpg') ?>" class="d-block w-100 d-img2" alt="Fondo 1">
            <div class="carousel-caption top-0 mt-4">
              <p class="margen_arriba fs-3 text-uppercase white_color">
                Aprendamos juntos
              </p>
              <h1 class="display-1 fw-bolder text-capitalize order-lg-1 white_color">CodeSegment</h1>
              <p class="font-weight-bold fs-3 text-uppercase">
                <div style="font-size: medium; padding: 4.5%;">
                    <div class="white_color">
                        Programación/Matematicas/Circuitos
                    </div>
                  
                </div>
              </p>
            </div>
          </div>

          <div class="carousel-item d-item">
            <img src="<?= base_url('images/imagesIndex/model2.jpg') ?>" class="d-block w-100 d-img" alt="...">
            <div class="carousel-caption top-0 mt-4">
              <p class="margen_arriba fs-3 text-uppercase white_color">
                Aprendamos juntos
              </p>
              <h1 class="display-1 fw-bolder text-capitalize white_color">CodeSegment</h1>
              <p class="font-weight-bold fs-3 text-uppercase">
                <div style="font-size: medium; padding: 4.5%;">
                    <div class="white_color">
                            Programación/Matematicas/Circuitos
                    </div>
                </div>
              </p>
            </div>
          </div>
          <div class="carousel-item d-item">
            <img src="<?= base_url('images/imagesIndex/fondo_home.jpg') ?>" class="d-block w-100 d-img" alt="...">
            <div class="carousel-caption top-0 mt-4">
              <p class="margen_arriba fs-3 text-uppercase white_color">
                Aprendamos juntos
              </p>
              <h1 class="display-1 fw-bolder text-capitalize white_color">CodeSegment</h1>
              <p class="font-weight-bold fs-3 text-uppercase">
                <div style="font-size: medium; padding: 4.5%;">
                    <div class="white_color">
                        Programación/Matematicas/Circuitos
                    </div>
                </div>
              </p>
            </div>
          </div>
        </div>
    </div>

    <!-- Testimonios -->
    <div class="page_section">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section_title text-center">
                <h1 >
                    <div class="highlight">
                        Testimonios
                    </div>
                  </h1>
              </div>
            </div>
          </div>

          <div class="row testimonios_cajas">

            <div class="col-lg-4 testimonio_caja">
              <div class="card">
                <img class="card-img-top" src="<?= base_url('images/imagesIndex/alexandria.jpg') ?>" alt="">
                <div class="card-body text-center">
                  <div class="card-title black_color">
                    Testimonio de superación e inspiración de Alexandria
                  </div>
                  <div class="card-text black_color">Ha logrado optener un puesto de trabajo rentable, además 
                    de pasar de junior a senior en el ambito de la Programación.
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 testimonio_caja">
              <div class="card">
                <img class="card-img-top" src="<?= base_url('images/imagesIndex/ale.jpeg') ?>" alt="" style="height: 298px;">
                <div class="card-body text-center">
                  <div class="card-title black_color">
                    Testimonio de superación e inspiración de Ale
                  </div>
                  <div class="card-text black_color">Ale acaba de terminar su carrera universitaria en una de las mejores
                    escuelas de su ciudad y ahora ira a Canada.
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 testimonio_caja">
              <div class="card">
                <img class="card-img-top" src="<?= base_url('images/imagesIndex/maria.jpg') ?>" alt="">
                <div class="card-body text-center">
                  <div class="card-title black_color">
                    Testimonio de superación e inspiración de Maria
                  </div>
                  <div class="card-text black_color">Por las noches práctica box dandole con todo al saco de boxeo
                    y por las mañanas enseña Matematicas gracias a CodeSegment.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Fin de testimonios -->

      <!-- Mision/Vision -->
      <section class="showcase">
        <div class="container-fluid p-0">

            <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?= base_url('images/imagesIndex/maria.jpg') ?>');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Misión</h2>
                        <p class="lead mb-0 alinear" >
                        En CodeSegment nos esforzamos por capacitar a individuos de todo el mundo con las habilidades necesarias para prosperar en la economía digital actual. 
                        A través de una plataforma innovadora y recursos educativos interactivos, estamos comprometidos a inspirar el aprendizaje continuo y el desarrollo profesional.
                        </p>
                    </div>
            </div>

            <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('<?= base_url('images/imagesIndex/alexandria.jpg') ?>');"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Visión</h2>
                        <p class="lead mb-0 alinear"> En CodeSegment, aspiramos a ser la principal plataforma global de educación en línea, 
                            destacando por nuestra excelencia académica, innovación tecnológica y dedicación al éxito del estudiante. 
                            Buscamos ser la opción preferida para aquellos que buscan habilidades relevantes en el mercado laboral actual y ser agentes de cambio positivo en la vida de nuestros estudiantes y comunidades</p>
                    </div>
            </div>
        </div>
      </section>
    <!-- Fin de mision/vision -->

    <!-- Profes -->
    <section class="testimonials text-center fondo">
        <div class="profes_container">
            <h1 class="mb-5 black_color">Profesores</h1>
            <div class="row">
               <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="<?= base_url('images/imagesIndex/profe1.jpg') ?>" alt="..." />
                            <h5>
                                <div class="black_color">
                                    Karina Valladolid
                                </div>                            
                            </h5>
                            <p class="font-weight-light mb-0 black_color">"This is fantastic! Thanks so much guys!"</p>
                        </div>
                </div>

                <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="<?= base_url('images/imagesIndex/profe2.jpg') ?>" alt="..." />
                            <h5>
                                <div class="black_color">
                                    Karina Bustamante
                                </div> 
                            </h5>
                            <p class="font-weight-light mb-0 black_color">"This is fantastic! Thanks so much guys!"</p>
                        </div>
                </div>

                <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="<?= base_url('images/imagesIndex/profe3.jpg') ?>" alt="..." />
                            <h5>
                                <div class="black_color">
                                    Dick Grayson
                                </div> 
                            </h5>
                            <p class="font-weight-light mb-0 black_color">"This is fantastic! Thanks so much guys!"</p>
                        </div>
                </div>

            </div>
        </div>
    </section>



<?php echo $this->include('plantillas/footer');?>