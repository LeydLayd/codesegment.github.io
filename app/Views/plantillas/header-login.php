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
    </style>

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

<?php echo $this->include('plantillas/theme');?>
