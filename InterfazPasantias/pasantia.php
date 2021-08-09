<div class="collapse" id="nav-pasantia" data-parent="#pasantiaVinculacionCont">
    <div class="m-2">
        <div class="p-2 mb-2 bg-primary shadow-sm mode-dark5">
            <h4 class="font-weight-bold text-warning text-center">Sistema de prácticas pre profesionales y pasantías
            </h4>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Seleccione la carrera</option>
                <option>Ingeniería de sistemas informáticos</option>
            </select>
        </div>
        <div id="pasantia">
            <div class="collapse show" id="" data-parent="#pasantia"><!--show-->
                <h4 class="font-weight-bold text-center">Aviso</h4>
                <div class="alert alert-info rounded-0" role="alert">
                    Una vez terminada su pasantía tendrá que registrar y presentar su respectivo informe final, caso contrario la pasantía puede ser anulada.
                </div>
                <div class="alert alert-info rounded-0" role="alert">
                    Recuerde que todas sus acciones en el sistema son registradas con fines de auditorías..
                </div>
            </div>
            <!--<?php include('pasantia_solicitar.php') ?>-->
            <?php include('pasantia_gestor.php') ?>
            <?php include('pasantia_guia.php') ?>
            <?php include('pasantia_ayuda_video.php') ?>
        </div>
        <?php include('pasantia_solicitar.php') ?>
    </div>
</div>