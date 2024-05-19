<?php echo $this->include('plantillas/header-pagina'); ?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">Tu progreso</h1>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-md-6">
                <div class="d-flex flex-column h-100 justify-content-between">
                    <div class="mb-4">
                        <div class="d-flex justify-content-between">
                            <span>Matemáticas</span>
                            <span>10%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" style="width: 10%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between">
                            <span>Programación</span>
                            <span>25%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" style="width: 25%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between">
                            <span>Circuitos</span>
                            <span>50%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php echo $this->include('plantillas/footer');?>