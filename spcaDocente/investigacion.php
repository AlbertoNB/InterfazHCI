<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3 ">
        <div id="regreso-gp">
            <div class="row mb-3">
                <div class="col-auto">
                    <div class="dropdown">
                        <button class="btn-sm btn-secondary dropdown-toggle" type="button" id="menuGrupo" data-toggle="dropdown" aria-expanded="false">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#people-fill" />
                            </svg>
                            Grupos
                        </button>
                        <div class="dropdown-menu" aria-labelledby="menuGrupo">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="dropdown">
                        <button class="btn-sm btn-secondary dropdown-toggle" type="button" id="menuProyectos" data-toggle="dropdown" aria-expanded="false">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#easel-fill" />
                            </svg>
                            Proyectos
                        </button>
                        <div class="dropdown-menu" aria-labelledby="menuProyectos">
                            <a class="dropdown-item" href="#">Proyectos varios (Doctorales, Becas, Externos)</a>
                            <a class="dropdown-item" href="#">Proyectos convocatoria</a>
                            <a class="dropdown-item" href="#">Programas </a>
                            <a class="dropdown-item" data-toggle="collapse" data-target="#informe-de-actividades" aria-expanded="true">Informe de actividades</a>
                            <a class="dropdown-item" href="#">Dirección de proyectos (informe)</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('investigacion_proyectos.php') ?>
        </div>
    </div>
</main>

<?php include('footer.php') ?>