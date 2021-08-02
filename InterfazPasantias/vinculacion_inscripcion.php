<div class="collapse show" id="inscripcion" data-parent="#vinculacion">
    <div class="bg-secondary p-2 mb-2">
        <h5 class="text-white d-flex align-items-center m-0">
            <svg class="mr-1" width="20px" height="20px">
                <use xlink:href="../svg/bootstrap-icons.svg#pencil-square" />
            </svg>
            Inscribirse en proyectos
        </h5>
    </div>
    <div class="form-group mb-2">
        <label class="font-weight-bold ml-3" for="buscarProyecto">Busque el proyecto</label>
        <div class="input-group">
            <input type="text" class="form-control" id="buscarProyecto" placeholder="Tutulo de proyecto a buscar"
                aria-label="" aria-describedby="busPro">
            <div class="input-group-append">
                <button class="btn btn-warning" type="button" id="busPro">
                    <svg class="" width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#search" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <ul class="list-group  ">
        <li class="list-group-item py-1 ">
            <div class="row d-flex align-items-center">
                <div class="col pr-1">
                    <h5 class="mb-1 font-weight-bold text-small">Incumplimiento del syllabusdiseño de un sistema
                        informático para las juntas cantonales de protección de derechos - JCPD</h5>
                    <p class="mb-1"><b>Codigo:</b> FCI-CISI-PROG003-PROY010-2020</p>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#target-convenio">Convenios</button>
                    <button type="button" class="btn btn-info btn-sm">Más detalles</button>
                </div>
                <div class="col-auto px-1">
                    <button type="button" class="mb-1 btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#eye-fill" />
                        </svg>
                    </button> <br>
                    <button type="button" class=" mb-1 btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#check" />
                        </svg>
                    </button> <br>
                    <button type="button" class="btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#info-circle" />
                        </svg>
                    </button>
                </div>
            </div>
        </li>
        <li class="list-group-item py-1 ">
            <div class="row d-flex align-items-center">
                <div class="col pr-1">
                    <h5 class="mb-1 font-weight-bold text-small">Encuesta de empleo portoviejo</h5>
                    <p class="mb-1"><b>Codigo:</b> FCI-CISI-PROG003-PROY001-2021</p>
                    <button type="button" class="btn btn-primary btn-sm">Convenios</button>
                    <button type="button" class="btn btn-info btn-sm">Más detalles</button>
                </div>
                <div class="col-auto px-1">
                    <button type="button" class="mb-1 btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#eye-fill" />
                        </svg>
                    </button> <br>
                    <button type="button" class=" mb-1 btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#check" />
                        </svg>
                    </button> <br>
                    <button type="button" class="btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#info-circle" />
                        </svg>
                    </button>
                </div>
            </div>
        </li>
    </ul>
</div>
<!--Tarjeta convenio-->
<div class="modal fade" id="target-convenio">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-2 bg-primary">
                <h6 class="modal-title text-white">Convenios registrados</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="bg-dark">
                    <div class="row pt-1 text-center text-white-50">
                        <div class="col">
                            <h6>Empresa o sector</h6>
                        </div>
                        <div class="col">
                            <h6>Duracion</h6>
                        </div>
                        <div class="col">
                            <h6>Titulo</h6>
                        </div>
                    </div>
                    <div class="row pt-1 text-center text-white-50">
                        <div class="col">
                            <h6>Proceso</h6>
                        </div>
                        <div class="col">
                            <h6>Tipología</h6>
                        </div>
                        <div class="col">
                            <button type="button" class="mb-1 btn btn-warning btn-sm">
                                <svg class="" width="20px" height="20px" fill="currentColor">
                                    <use xlink:href="../svg/bootstrap-icons.svg#eye-fill" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer py-0">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>