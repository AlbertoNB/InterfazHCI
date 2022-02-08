<div class="collapse" id="nav-vinculacion" data-parent="#pasantiaVinculacionCont">
    <div class="m-2">
        <div class="p-2 mb-2 bg-pistachio shadow-sm mode-dark5">
            <h4 class="font-weight-bold text-primary text-center">Sistema de proyectos de vinculación
            </h4>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Seleccione la carrera</option>
                <option>Ingeniería de sistemas informáticos</option>
            </select>
        </div>
        <div id="vinculacion">
            <div class="collapse show" id="" data-parent="#vinculacion">
                <h4 class="font-weight-bold text-center">Aviso</h4>
                <div class="alert alert-info rounded-0" role="alert">
                    Recuerde que todas sus acciones en el sistema son registradas con fines de auditorías..
                </div>
            </div>
            <?php include('vinculacion_inscripcion.php') ?>
            <?php include('vinculacion_gestor.php') ?>
            <?php include('vinculacion_guia.php') ?>
            <?php include('vinculacion_ayuda_video.php') ?>
        </div>
    </div>
</div>