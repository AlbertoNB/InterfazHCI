<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3 mode-dark2">
        <div class="row mb-3">
            <div class="col">
                <!--col-8-->
                <h4 class="">Aporte de Investigación</h4>
            </div>
            <div class="col-auto">
                <!--deberia mover los botones a la derecha!-->
                <button class="btn-sm btn-warning" title="Opciones de impresión">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#printer-fill" />
                    </svg>
                </button>
                <button class="btn-sm btn-warning" data-toggle="modal" data-target="#lista-procesos" title="Búsqueda de procesos ">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#search" />
                    </svg>
                </button>
            </div>
        </div>
        <p class="mb-3 la-sm">Esta opción únicamente se encontrará disponible para los investigadores dentro de un Proceso i+.
            Todas las actividades serán sometidas a un flujo de validación/aprobación que influirá directamente en el
            avance total del proceso.
        </p>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <form class="">
                            <label class="my-1">Usuario</label>
                            <input type="text" class="form-control w-100" required>
                            <label class="my-1">Inicia</label>
                            <input type="date" class="form-control w-100" required>
                            <label class="my-1">Estado</label>
                            <input type="text" class="form-control w-100" required>
                        </form>
                    </div>
                    <div class="col-6">
                        <form class="">
                            <label class="my-1">Clasificación</label>
                            <input type="text" class="form-control w-100" required>
                            <label class="my-1">Finaliza</label>
                            <input type="date" class="form-control w-100" required>
                            <label class="my-1">Avance investigador</label>
                            <input type="text" class="form-control w-100" required>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form class="">
                    <label class="my-1">Proceso</label>
                    <textarea class="form-control" rows="4"></textarea>
                </form>

            </div>
        </div>

        <div class="mb-3">
            <h5 class="">
                <svg width="22px" height="22px">
                    <use xlink:href="../svg/bootstrap-icons.svg#slack" />
                </svg>
                Objetivos
            </h5>
            <div class="bg-dark">
                <h6 class="my-0 p-1 text-center text-white-50"> Objetivos específicos </h6>
            </div>
            <ul class="list-group  ">
                <li class="list-group-item"> </li>
                <li class="list-group-item"> </li>
                <li class="list-group-item"> </li>
            </ul>
        </div>
        <div>
            <h5 class="">
                <svg width="22px" height="22px">
                    <use xlink:href="../svg/bootstrap-icons.svg#list-check" />
                </svg>
                Actividades
            </h5>
            <div class="bg-dark">
                <div class="row pt-1 text-center text-white-50">
                    <div class="col">
                        <h6>Actividad</h6>
                    </div>
                    <div class="col">
                        <h6>Periodo</h6>
                    </div>
                    <div class="col">
                        <h6>Avance</h6>
                    </div>
                </div>
            </div>
            <ul class="list-group  ">
                <li class="list-group-item"> </li>
                <li class="list-group-item"> </li>
                <li class="list-group-item"> </li>
            </ul>
        </div>
    </div>
    <!--ventana lista de procesos-->
    <div class="modal fade" id="lista-procesos">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">
                        <svg width="18px" height="18px">
                            <use xlink:href="../svg/bootstrap-icons.svg#folder2-open" />
                        </svg>
                        Lista de procesos
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="bg-dark">
                        <div class="row pt-1 text-center text-white-50">
                            <div class="col">
                                <h6>Proceso</h6>
                            </div>
                            <div class="col">
                                <h6>Tipología</h6>
                            </div>
                            <div class="col">
                                <h6>Titulo</h6>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group  ">
                        <li class="list-group-item"> </li>
                        <li class="list-group-item"> </li>
                        <li class="list-group-item"> </li>
                        <li class="list-group-item"> </li>
                        <li class="list-group-item"> </li>
                        <li class="list-group-item"> </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn-sm btn-primary">
                        <svg width="15px" height="15px">
                            <use xlink:href="../svg/bootstrap-icons.svg#check2-square" />
                        </svg>
                        Seleccionar</button>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include('footer.php') ?>