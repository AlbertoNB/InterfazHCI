<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3 ">
        <div id="regreso-gp">
            <div class="row mb-3">
                <div class="col-auto">
                    <div class="dropdown">
                        <button class="btn-sm btn-primary dropdown-toggle" type="button" id="menuGrupo" data-toggle="dropdown" aria-expanded="false">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#people-fill" />
                            </svg>
                            Grupos
                        </button>
                        <div class="dropdown-menu" aria-labelledby="menuGrupo">
                            <a class="dropdown-item" href="#">---</a>
                            <a class="dropdown-item" href="#">---</a>
                            <a class="dropdown-item" href="#">---</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="dropdown">
                        <button class="btn-sm btn-primary dropdown-toggle" type="button" id="menuProyectos" data-toggle="dropdown" aria-expanded="false">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#easel-fill" />
                            </svg>
                            Proyectos
                        </button>
                        <div class="dropdown-menu" aria-labelledby="menuProyectos">
                            <a class="dropdown-item" data-toggle="collapse" data-target="#proyectos-DBE" aria-expanded="true">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#list-task" />
                                </svg>
                                Proyectos varios (Doctorales, Becas, Externos)</a>
                            <a class="dropdown-item" data-toggle="collapse" data-target="#proyectos-convocatoria" aria-expanded="true">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#list-task" />
                                </svg>
                                Proyectos convocatoria</a>
                            <a class="dropdown-item" data-toggle="collapse" data-target="#programas" aria-expanded="true">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#list-task" />
                                </svg>
                                Programas</a>
                            <a class="dropdown-item" data-toggle="collapse" data-target="#informe-de-actividades" aria-expanded="true">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#list-task" />
                                </svg>
                                Informe de actividades</a>
                            <a class="dropdown-item" data-toggle="collapse" data-target="#direccion-de-proyectos" aria-expanded="true">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#list-task" />
                                </svg>
                                Dirección de proyectos (informe)</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('investigacion_pr_otros.php') ?>
            <?php include('investigacion_pr_informe_actividad.php') ?>
            <?php include('investigacion_pr_direccion_proyecto.php') ?>
        </div>

        <div class="my-3 p-3 bg-white rounded shadow-sm mode-dark1">
            <h6 class="border-bottom pb-2 mb-0 font-weight-bold">Otro tema</h6>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>

                <div class="media-body pb-3 mb-0 small lh-125 border-bottom ">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                </div>
            </div>


            <small class="d-block text-right mt-3">
                <a href="#">All suggestions</a>
            </small>
        </div>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.1527257020302!2d-80.4551499!3d-1.046579!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902bf2aaa191509f%3A0xea77daf8eff9574!2sUNIVERSIDAD%20T%C3%89CNICA%20DE%20MANAB%C3%8D!5e0!3m2!1ses!2sec!4v1625647736152!5m2!1ses!2sec" width="100%" height="400" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</main>

<?php include('footer.php') ?>