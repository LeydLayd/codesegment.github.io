    <?php echo $this->include('plantillas/header-login'); ?>
    <?php echo $this->include('plantillas/theme'); ?>

    <main class="form-signin w-100 m-auto">
        <?php
        $session = session();

        echo $session->getFlashdata('Message');

        ?>
        <form action="<?php echo base_url('Login/save') ?>" method="post" autocomplete="off">
            <div class="logo">
                <img src="../../Utl/Logo.png" alt="" width="100" height="100" />
            </div>
            <h1 class="h1 mb-3 fw-normal">Validacion de email</h1>
            <h3 class="h3 mb-3 fw-normal">Ingresa el codigo que enviamos su correo</h3> 

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="Input" placeholder="1234">
                <label for="floatingInput">Codigo ej:1234</label>
            </div>

            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Verificar</button>
            <button cla ss="btn btn-info w-100 py-2 mt-3" type="button" onclick="location.href='ValidateEmail'" id="submitButton" disabled>Reenviar codigo</button>
            <p id="counter"></p>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2024</p>
        </form>
    </main>
    <script>
        var tiempoRestante = 60;

        function actualizarContador() {
            var minutos = Math.floor(tiempoRestante / 60);
            var segundos = tiempoRestante % 60;
            document.getElementById("counter").textContent = "Enviar nuevo codigo en " + minutos + " min " + segundos + " seg";
            if (tiempoRestante > 0) {
                tiempoRestante--;
                setTimeout(actualizarContador, 1000);
            } else {
                document.getElementById("submitButton").disabled = false;
                document.getElementById("counter").textContent = "";
            }
        }

        // Iniciar el contador
        actualizarContador();
    </script>

</body>

</html>