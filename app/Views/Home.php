<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .btn-bd-primary {
            --bd-violet-bg: #011bff;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #1830bb;
            --bs-btn-hover-border-color: #1830bb;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #1830bb;
            --bs-btn-active-border-color: #1830bb;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>
</head>

<body>
    <?php echo $this->include('Login/theme');?>
    
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
                <img src="../Utl/home.png" alt="" width="358" height="59" />
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2">Cursos</a></li>
                <li><a href="#" class="nav-link px-2">Progreso</a></li>
                <li><a href="#" class="nav-link px-2">Noticias</a></li>
                <li><a href="#" class="nav-link px-2">Acerca de</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button onclick="location.href='Login/Sign'" type="button" class="btn btn-outline-primary me-2">Registrarse</button>
                <button type="button" onclick="location.href='Login/Log'" class="btn btn-primary">Ingresar</button>
            </div>
        </header>
    </div>
</body>

</html>