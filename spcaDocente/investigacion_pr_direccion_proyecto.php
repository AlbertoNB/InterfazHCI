<!-- agregar la class "show" para que inicie con esta interfaz-->
<div class="collapse" id="direccion-de-proyectos" data-parent="#regreso-gp">
    <div class="container-md my-3 mode-dark2">
        <div class="row mb-3">
            <div class="col">
                <div class="card bg-warning table-primary p-2">
                    <h4 class="m-0">Dirección de proyectos</h4>
                </div>
            </div>
            <div class="col-auto">
                <!--deberia mover los botones a la derecha!-->
                <button class="btn-sm btn-primary" title="Opciones de impresión">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#printer-fill" />
                    </svg>
                </button>
                <button class="btn-sm btn-primary" data-toggle="modal" data-target="#lista-procesos-dp" title="Búsqueda de procesos ">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#search" />
                    </svg>
                </button>
                <button class="btn-sm btn-primary">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#people" />
                    </svg>
                </button>
            </div>
        </div>
        <p class="mb-3 la-sm">Esta opción únicamente se encontrará disponible para los Directores de proyectos.
            Todas las actividades serán sometidas a un flujo de validación/aprobación que influirá directamente en el
            avance total del proceso.
        </p>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <form class="">
                            <label class="my-1">Tipo</label>
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
                            <label class="my-1">Avance %</label>
                            <input type="text" class="form-control w-100" required>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form class="">
                    <label class="my-1">Proceso</label>
                    <textarea class="form-control"></textarea>
                </form>
            </div>
        </div>

        <div class="mb-3">
            <h5 class="">
                <svg width="22px" height="22px">
                    <use xlink:href="../svg/bootstrap-icons.svg#slack" />
                </svg>
                Monitoreo y evaluación
            </h5>
            <div class="table-responsive scroll-decor">
                <table class="table table-sm table-bordered table-hover mb-0">
                    <!--table-striped-->
                    <thead class=" middle-th thead-dark">
                        <tr class="text-center">
                            <th scope="col">Objetivos específicos</th>
                            <th scope="col">Avances</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody class="middle-th middle-td">
                        <tr>
                            <td colspan="3">-</td>
                        </tr>
                        <tr>
                            <td colspan="3">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mb-3">
            <h5 class="">
                <svg width="22px" height="22px">
                    <use xlink:href="../svg/bootstrap-icons.svg#activity" />
                </svg>
                Actividades
            </h5>
            <div class="table-responsive scroll-decor">
                <table class="table table-sm table-bordered table-hover mb-0">
                    <!--table-striped-->
                    <thead class=" middle-th thead-dark">
                        <tr class="text-center">
                            <th scope="col">Actividad</th>
                            <th scope="col">Resultado esperado</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">Periodo</th>
                            <th scope="col">Lugar de ejecución</th>
                            <th scope="col">Avance</th>
                        </tr>
                    </thead>
                    <tbody class="middle-th middle-td">
                        <tr>
                            <td colspan="6">-</td>
                        </tr>
                        <tr>
                            <td colspan="6">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mb-3">
            <h5 class="">
                <svg width="22px" height="22px">
                    <use xlink:href="../svg/bootstrap-icons.svg#list-check" />
                </svg>
                Tareas especificas
            </h5>
            <div class="table-responsive scroll-decor">
                <table class="table table-sm table-bordered table-hover mb-0">
                    <!--table-striped-->
                    <thead class=" middle-th thead-dark">
                        <tr class="text-center">
                            <th scope="col">Tareas realizadas</th>
                            <th scope="col">Observación</th>
                            <th scope="col">Periodo</th>
                            <th scope="col">Finalización</th>
                            <th scope="col">Comprometido</th>
                        </tr>
                    </thead>
                    <tbody class="middle-th middle-td">
                        <tr>
                            <td colspan="5">-</td>
                        </tr>
                        <tr>
                            <td colspan="5">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mb-3">
            <h5 class="">
                <svg width="22px" height="22px">
                    <use xlink:href="../svg/bootstrap-icons.svg#list-check" />
                </svg>
                Resultados del proyecto
            </h5>
            <div class=" alert-secondary p-2">
                <button type="button" class="btn-sm btn-primary">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-plus" />
                    </svg>
                </button>
                <button type="button" class="btn-sm btn-danger">
                    <svg width="22px" height="22px">
                        <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-x" />
                    </svg>
                </button>
                <button type="button" class="btn-sm btn-secondary">
                    <svg width="22px" height="22px">
                        <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-text" />
                    </svg>
                </button>
            </div>
            <div class="table-responsive scroll-decor">
                <table class="table table-sm table-bordered table-hover mb-0">
                    <!--table-striped-->
                    <thead class=" middle-th thead-dark">
                        <tr class="text-center">
                            <th scope="col">Tipo</th>
                            <th scope="col">Tema</th>
                            <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody class="middle-th middle-td">
                        <tr>
                            <td colspan="3">-</td>
                        </tr>
                        <tr>
                            <td colspan="3">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--ventana lista de procesos-->
    <div class="modal fade" id="lista-procesos-dp">
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
                    <form action="">
                        <div class="form-group mb-1">
                            <label class="font-weight-bold" for="spa">Tipo</label>
                            <select class="form-control" id="spa">
                                <option>Proyecto de convocatoria</option>
                                <option>Proyectos doctorales</option>
                                <option>Proyectos financiados con becas de titulación</option>
                                <option>Proyecto con financiamiento externo</option>
                                <option>Proyecto autogestión</option>
                                <option>Proyecto de colaboración interinstitucional</option>
                            </select>
                        </div>
                    </form>
                    <div class="bg-dark">
                        <div class="row pt-1 text-center text-white-50">
                            <div class="col">
                                <h6>Director</h6>
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

</div>