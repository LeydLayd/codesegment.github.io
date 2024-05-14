<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <link rel="icon" href="<?= base_url('images/Logo.ico') ?>" type="image/x-icon">
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de secion</title>s
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .form-signin {
            max-width: 300px;
            padding: 1rem;
        }

        .m-auto {
            margin: auto !important;
        }

        .w-100 {
            width: 100% !important;
        }

        form {
            display: block;
            margin-top: 10em;
            unicode-bidi: isolate;
        }

        .fw-normal {
            font-weight: 400 !important;
            text-align: center;
        }

        .fw-normal {
            font-weight: 400 !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .btn-bd-primary {
            --bd-violet-bg: #011bff;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
        
        .logo{
            text-align: center;
        }

         /* Para que cambie de color la etiqueta de la pagina en la que nos encontramos */       
        .active {
            color: #7F9DB7; /* Cambiar el color del texto del enlace activo */
            /* Otros estilos que desees aplicar */
        }



        /* Inicio del codigo de la pagina de inico de los cursos. */

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

    </style>

</head>
<body class="py-4 bg-body-tertiary">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
            </div>

            <div class="image position-fixed top-0 start-0">
                <img src="<?= base_url('images/logo.png') ?>" alt="Logo" width="80" height="80">
            </div>

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


    