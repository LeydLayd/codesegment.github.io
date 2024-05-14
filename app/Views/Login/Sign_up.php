    <?php echo $this->include('plantillas/header-login') ?>

    <?php echo $this->include('plantillas/theme'); ?>

    <main class="form-signin w-100 m-auto">
        <?php helper('form');
        echo validation_list_errors() ?>
        <form action="<?php echo base_url('Login/Registered') ?>" method="post" autocomplete="off">
            <div class="logo">
                <img src="<?= base_url('images/logo.png') ?>" alt="Logo" width="100" height="100">
            </div>
            <h1 class="h3 mb-3 fw-normal">Registrarse</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputNombre" name="Nombre" placeholder="Nombre" value="<?php echo set_value('Nombre'); ?>">
                <label for="floatingInputNombre">Nombre</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputApellidos" name="Apellidos" placeholder="Apellidos" value="<?php echo set_value('Apellidos'); ?>">
                <label for="floatingInputApellidos">Apellidos</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputCorreo" name="Correo" placeholder="usuario@gmail.com" value="<?php echo set_value('Correo'); ?>">
                <label for="floatingInputCorreo">Direccion de correo</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="Password" placeholder="Contraseña" value="<?php echo set_value('Password'); ?>">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingConfirmPassword" name="ConfirmPassword" placeholder="Confirmar Contraseña" value="<?php echo set_value('ConfirmPassword'); ?>">
                <label for="floatingConfirmPassword">Confirmar Contraseña</label>
            </div>

            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Registrarse</button>
            <div class="fw-normal mt-3">
                <p class="mb-0">¿Ya tienes una cuenta? <a href="Log">Inicia sesion</a></p>
            </div>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2024</p>
        </form>
    </main>
</body>

</html>