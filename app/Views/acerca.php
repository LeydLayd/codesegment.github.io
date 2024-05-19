<?php echo $this->include('plantillas/header-pagina') ?>
<main>
    <section class="hero-section d-flex align-items-center text-white text-center py-5" style="background: url('<?= base_url('images/imagesAcerca/aprende.jpg') ?>'); no-repeat center center; background-size: cover; height: 60vh;">
        <div class="container">
            <h1 class="display-1 fw-bolder text-capitalize order-lg-1 white_color">Acerca de Nosotros</h1>
            <h4 class="white_color">Conoce nuestra misión, visión y los cursos que ofrecemos.</h4>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>Nuestra Misión y Visión</h2>
                    <p class="lead">Impulsando la educación para un futuro mejor.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Misión</h3>
                    <p>Proporcionar educación de alta calidad en matemáticas, programación y circuitos a estudiantes de todo el mundo, ayudándoles a alcanzar sus metas académicas y profesionales.</p>
                </div>
                <div class="col-md-6">
                    <h3>Visión</h3>
                    <p>Ser una institución líder en la educación en línea, reconocida por nuestro enfoque innovador, accesibilidad y compromiso con la excelencia educativa.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="text-uppercase">Nuestros Cursos</h2>
                    <p class="lead">Ofrecemos una variedad de cursos diseñados para impulsar tu carrera.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="course-icon mb-3">
                        <i class="bi bi-calculator" style="font-size: 2rem; color: white;"></i>
                    </div>
                    <h4>Matemáticas</h4>
                    <p>Desarrolla tus habilidades en matemáticas, desde lo básico hasta niveles avanzados, con nuestros cursos estructurados y fáciles de seguir.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="course-icon mb-3">
                        <i class="bi bi-code-slash" style="font-size: 2rem; color: white;"></i>
                    </div>
                    <h4>Programación</h4>
                    <p>Aprende a programar en diferentes lenguajes y plataformas, con cursos diseñados para principiantes y expertos.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="course-icon mb-3">
                        <i class="bi bi-battery-half" style="font-size: 2rem; color: white;"></i>
                    </div>
                    <h4>Circuitos</h4>
                    <p>Explora el mundo de la electrónica y los circuitos, desde los conceptos básicos hasta los proyectos más avanzados.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>Nuestro Equipo</h2>
                    <p class="lead">Conoce a los profesionales que hacen todo esto posible.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="<?= base_url('images/imagesAcerca/per3.jpg') ?>" class="rounded-circle mb-3" alt="Team Member">
                    <h5>Juan Pérez</h5>
                    <p>Fundador y CEO</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="<?= base_url('images/imagesAcerca/per2.jpg') ?>" class="rounded-circle mb-3" alt="Team Member">
                    <h5>María González</h5>
                    <p>Directora de Educación</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="<?= base_url('images/imagesAcerca/per1.jpeg') ?>" class="rounded-circle mb-3" alt="Team Member">
                    <h5>Carlos López</h5>
                    <p>Jefe de Tecnología</p>
                </div>
            </div>
        </div>
    </section>
</main>


<?php echo $this->include('plantillas/footer');?>