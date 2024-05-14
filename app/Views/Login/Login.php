    <?php echo $this->include('plantillas/header-login'); ?>

    <main class="form-signin w-100 m-auto">
    <?php helper('form');
        echo validation_list_errors() ?>
        <form action="<?php echo base_url('Login/Logear') ?>" method="post" autocomplete="off">
            <div class="logo">
                <!-- <img src="../../Utl/Logo.png" alt="" width="100" height="100" /> -->
                <img src="<?= base_url('images/logo.png') ?>" alt="Logo" width="100" height="100">

            </div>
            <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="Input" placeholder="usuario@gmail.com" value="<?php echo set_value('Input'); ?>">
                <label for="floatingInput">Direccion de correo</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="Password" placeholder="Contraseña" value="<?php echo set_value('Password'); ?>">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Iniciar sesión</button>
            <div class="fw-normal mt-3">
                <p class="mb-0">¿No tienes una cuenta? <a href="Sign">Registrarse</a></p>
            </div>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2024</p>
        </form>
    </main>
</body>

</html>