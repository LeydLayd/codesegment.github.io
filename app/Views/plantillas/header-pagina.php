<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <link rel="icon" href="<?= base_url('images/Logo.ico') ?>" type="image/x-icon">
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de secion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <head>
    <link rel="stylesheet" href="<?= base_url('styles/stylesIndex.css') ?>">
    <link rel="stylesheet" href="<?= base_url('styles/stylesCursos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('styles/styles.css') ?>">

</head>
<body class="py-4 bg-body-tertiary">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                  <img src="<?= base_url('images/home.png') ?>" alt="Logo" width="250" height="80">
                </a>
            </div>

            <!-- <div class="image top-0 start-0">
                
            </div> -->

            <?php
            // Verificar si $current_url está definido antes de utilizarlo
            $current_url = isset($current_url) ? $current_url : '';
            ?>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?= site_url('Controller/index') ?>" class="nav-link px-2 <?= ($current_url == site_url('Controller/index')) ? 'active' : '' ?>">Home</a></li>
                <li><a href="<?= site_url('Controller/cursos') ?>" class="nav-link px-2 <?= ($current_url == site_url('Controller/cursos')) ? 'active' : '' ?>">Cursos</a></li>
                <li><a href="<?= site_url('Controller/progreso') ?>" class="nav-link px-2 <?= ($current_url == site_url('Controller/progreso')) ? 'active' : '' ?>">Progreso</a></li>
                <li><a href="<?= site_url('Controller/noticias') ?>" class="nav-link px-2 <?= ($current_url == site_url('Controller/noticias')) ? 'active' : '' ?>">Noticias</a></li>
                <li><a href="<?= site_url('Controller/acerca') ?>" class="nav-link px-2 <?= ($current_url == site_url('Controller/acerca')) ? 'active' : '' ?>">Acerca de</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <?php
                $session = session();

                $user = $session->ID_usuario;
                if ($user !== null) {
                    echo $this->include('Utileria/Drop');
                } else {
                    echo $this->include('Utileria/ButtonRegister');
                }
                ?>
            </div>  
        </header>
    </div>

    <?php echo $this->include('plantillas/theme') ?>


    