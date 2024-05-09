<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
            margin-top: 0em;
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

        .logo {
            text-align: center;
        }
    </style>

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <?php echo $this->include('Login/theme'); ?>

    <main class="form-signin w-100 m-auto">
        <?php helper('form');
        echo validation_list_errors() ?>
        <form action="<?php echo base_url('Login/Registered') ?>" method="post" autocomplete="off">
            <div class="logo">
                <img src="../../Utl/Logo.png" alt="" width="100" height="100" />
            </div>
            <h1 class="h3 mb-3 fw-normal">Registrarse</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputNombre" name="Nombre" placeholder="Nombre">
                <label for="floatingInputNombre">Nombre</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputApellidos" name="Apellidos" placeholder="Apellidos">
                <label for="floatingInputApellidos">Apellidos</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputCorreo" name="Correo" placeholder="usuario@gmail.com">
                <label for="floatingInputCorreo">Direccion de correo</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="Password" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingConfirmPassword" name="ConfirmPassword" placeholder="Confirmar Contraseña">
                <label for="floatingConfirmPassword">Confirmar Contraseña</label>
            </div>

            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Registrarse</button>
            <div class="fw-normal mt-3">
                <p class="mb-0">¿YA tienes una cuenta? <a href="Log">Inicia sesion</a></p>
            </div>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2024</p>
        </form>
    </main>
</body>

</html>