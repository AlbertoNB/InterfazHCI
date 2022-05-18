<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3">
        <div class="d-flex align-items-center p-3 mb-3 alert alert-secondary rounded shadow-sm mode-dark5">
            <h4 class="mb-0 text-primary">Desarrollo de temario de tesis</h4>
        </div>
        <div class="row mb-3">
            <div class="col mode-dark2">
                <!--col-auto-->
                <h6 class="mt-2 my-0 mx-3">Meza Hormaza Jaime Alcides</h6>
            </div>
            <div class="col-auto">
                <button class="btn-sm" title="Plan de clase en PDF">
                    <svg width="15px" height="15px">
                        <use xlink:href="../svg/bootstrap-icons.svg#download" />
                    </svg>
                    Syllabus
                </button>
            </div>
        </div>
        <div id="elemento">
            <div class="btn-group mb-3" role="group">
                <button class="btn btn-secondary" data-toggle="collapse" data-target="#clases" aria-expanded="true" role="button" title="Asistencia a las clases">
                    <svg width="15px" height="15px">
                        <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-easel" />
                    </svg>
                    Clases
                </button>

                <button class="btn btn-secondary" data-toggle="collapse" data-target="#evaluacion" aria-expanded="false" role="button" title="Evaluar al docente">
                    <svg width="15px" height="15px">
                        <use xlink:href="../svg/bootstrap-icons.svg#card-checklist" />
                    </svg>
                    Evaluación
                </button>

                <button class="btn btn-secondary" data-toggle="collapse" data-target="#incidencias" aria-expanded="false" role="button" title="Inconvenientes en clases ">
                    <svg width="15px" height="15px">
                        <use xlink:href="../svg/bootstrap-icons.svg#exclamation-triangle-fill" />
                    </svg>
                    Incidencias
                </button>
            </div>
            <?php include('m_clases.php') ?>
            <?php include('m_evaluacion.php') ?>
            <?php include('m_incidencias.php') ?>
        </div>

    </div>
</main>

<?php include('footer.php') ?>