<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3 mode-dark2">
        <div class="row mb-1">
            <div class="col">
                <h5 class="my-0"> Mis notas </h5>
            </div>
            <div class="col-auto">
                <!--El mismo boton enciende y apaga el micrófono (Para que escuche debe mantener precionado el boton).-->
                <button type="button" class="besc-on-off btn btn-sm btn-primary mr-2" title="De voz a texto">
                    <svg class="px-0" width="20px" height="20px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#mic-fill" />
                    </svg>
                </button>
                
                <!--Un boton de encendido y uno de apagado (el micrófono). Debe activar esta acción en el .js, codigo refenencia: 7711-->
                <!--
                <div class="btn-group" role="group">
                    <button type="button" class="bt-escr btn btn-sm btn-primary" title="De voz a texto">
                        <svg class="px-0" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#mic-fill" />
                        </svg>
                    </button>
                    <button type="button" class="bt-nescr btn btn-sm btn-primary" title="Aapagar micrófono">
                        <svg class="px-0" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#mic-mute-fill" />
                        </svg>
                    </button>
                </div>
                -->
                <div class="btn-group" role="group">
                    <button type="button" class="b-play btn btn-sm btn-primary" title="Auto lectura de mis notas">
                        <svg class="px-0" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#volume-up" />
                        </svg>
                    </button>
                    <button type="button" class="b-pause btn btn-sm btn-primary" title="Auto lectura de mis notas">
                        <svg class="px-0" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#pause-circle-fill" />
                        </svg>
                    </button>
                    <button type="button" class="b-stop btn btn-sm btn-primary" title="Auto lectura de mis notas">
                        <svg class="px-0" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#stop-circle-fill" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <textarea class="txt-escr form-control mb-3" rows="5"></textarea>

        <h5 class="my-0"> Notificaciones del SPCA </h5>
        <ul class="list-group mb-3 ">
            <li class="list-group-item"> </li>
            <li class="list-group-item"> </li>
            <li class="list-group-item"> </li>
            <li class="list-group-item"> </li>
        </ul>
        <h5 class="my-0"> Notificaciones del SPCA </h5>
        <ul class="list-group  ">
            <li class="list-group-item"> </li>
            <li class="list-group-item"> </li>
            <li class="list-group-item"> </li>
            <li class="list-group-item"> </li>
        </ul>
    </div>
</main>
<?php include('footer.php') ?>