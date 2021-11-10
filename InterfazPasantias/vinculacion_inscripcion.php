<div class="collapse" id="inscripcion" data-parent="#vinculacion">
    <div class="bg-secondary p-2 mb-2">
        <h5 class="text-white d-flex align-items-center text-small m-0">
            <svg class="mr-1" width="20px" height="20px">
                <use xlink:href="../svg/bootstrap-icons.svg#pencil-square" />
            </svg>
            Inscribirse en proyectos
        </h5>
    </div>
    <div class="form-group mb-2">
        <label class="font-weight-bold ml-3" for="buscarProyecto">Busque el proyecto</label>
        <div class="input-group">
            <input type="text" class="form-control" id="buscarProyecto" placeholder="Titulo de proyecto a buscar"
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
    <ul class="list-group">
        <li class="list-group-item py-1">
            <div class="row d-flex align-items-center">
                <div class="col pr-1">
                    <h5 class="mb-1 font-weight-bold text-small">Incumplimiento del syllabusdiseño de un sistema
                        informático para las juntas cantonales de protección de derechos - JCPD</h5>
                    <p class="mb-1"><b>Codigo:</b> FCI-CISI-PROG003-PROY010-2020</p>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#target-convenio">Convenios</button>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                        data-target="#target-detalles">Más detalles</button>
                </div>
                <div class="col-auto px-1">
                    <button type="button" class="mb-1 btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-post" />
                        </svg>
                    </button> <br>
                    <button type="button" class=" mb-1 btn btn-warning btn-sm" data-toggle="modal"
                        data-target="#target-atencion">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#info-circle" />
                        </svg>
                    </button> <br>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                    data-target="#target-inscripcion">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#check" />
                        </svg>
                    </button>
                </div>
            </div>
        </li>
        <li class="list-group-item py-1">
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
                            <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-post" />
                        </svg>
                    </button> <br>
                    <button type="button" class=" mb-1 btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#info-circle" />
                        </svg>
                    </button> <br>
                    <button type="button" class="btn btn-primary btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#check" />
                        </svg>
                    </button>
                </div>
            </div>
        </li>
        <li class="list-group-item py-1">
            <div class="row d-flex align-items-center">
                <div class="col pr-1">
                    <h5 class="mb-1 font-weight-bold text-small">---------------------------------------</h5>
                    <p class="mb-1"><b>Codigo:</b> FCI-CISI-----------------------</p>
                    <button type="button" class="btn btn-primary btn-sm">Convenios</button>
                    <button type="button" class="btn btn-info btn-sm">Más detalles</button>
                </div>
                <div class="col-auto px-1">
                    <button type="button" class="mb-1 btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-post" />
                        </svg>
                    </button> <br>
                    <button type="button" class=" mb-1 btn btn-warning btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#info-circle" />
                        </svg>
                    </button> <br>
                    <button type="button" class="btn btn-primary btn-sm">
                        <svg class="" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#check" />
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
                        <div class="col-6">
                            <h6>Empresa o sector</h6>
                        </div>
                        <div class="col-6">
                            <h6>Duración</h6>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center border-bottom mx-1">
                    <div class="col px-0">
                        <p class="mb-1">Juntas cantonales de protección de derechos empresa</p>
                    </div>
                    <div class="col-auto px-2">
                        <p class="mb-1">2020-07-06-<br>2020-12-31</p>
                    </div>
                    <div class="col-auto px-0">
                        <button type="button" class=" btn pt-0 pb-1 btn-warning btn-sm">
                            <svg class="" width="20px" height="20px" fill="currentColor">
                                <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-post" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="row d-flex align-items-center border-bottom mx-1">
                    <div class="col px-0">
                        <p class="mb-1">Universidad Técnica de Manabí empresa</p>
                    </div>
                    <div class="col-auto px-2">
                        <p class="mb-1">2020-07-06-<br>2020-12-31</p>
                    </div>
                    <div class="col-auto px-0">
                        <button type="button" class=" btn pt-0 pb-1 btn-warning btn-sm">
                            <svg class="" width="20px" height="20px" fill="currentColor">
                                <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-post" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-footer py-0">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Tarjeta más detalles-->
<div class="modal fade" id="target-detalles">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-2 bg-primary">
                <h6 class="modal-title text-white">Detalles del proyecto</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b>Creado por:</b> Zambrano Solorzano Elba Tatiana</p>
                <p><b>Fecha de creación: </b> 2020-09-02 15:58:17</p>
                <h6 class="font-weight-bold">Capacidad de inscripción</h6>
                <p>Capacidad: 17 <br>
                    Inscritos: 14 <br>
                    Nivel Minimo: 10 <br>
                    Nivel Maximo: 10
                </p>
                <h6 class="font-weight-bold">Duración del proyecto</h6>
                <p>Del 2020-09-21 hasta 2021-03-31 <br> <b>80 horas</b></p>
            </div>
            <div class="modal-footer py-0">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Tarjeta de atención-->
<div class="modal fade" id="target-atencion">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-2 bg-primary">
                <h6 class="modal-title text-white">Atención brindada</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="bg-dark">
                    <div class="row pt-1 text-center text-white-50">
                        <div class="col">
                            <h6>Responsable</h6>
                        </div>
                        <div class="col-auto">
                            <h6 class="mr-3">Atención</h6>
                        </div>
                    </div>
                </div>
                <ul class="list-group  ">
                    <li class="list-group-item py-1 ">
                        <div class="row d-flex align-items-center">
                            <div class="col pr-1">
                                <h5 class="mb-1 font-weight-bold text-small">Zambrano Montenegro David Fernando</h5>
                                <p class="mb-1"><b>Observación:</b> Aprobado sin novedad</p>
                                <small> <b>Fecha: </b>2021-07-05 16:00:30</small>
                            </div>
                            <div class="col-auto px-1">
                                <span class="badge badge-pill badge-success">Aprobado</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer py-0">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Tarjeta de inscripción-->
<div class="modal fade" id="target-inscripcion">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header py-2 bg-primary">
                <h6 class="modal-title text-white">Inscripción</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>¿Desea inscribirse en este proyecto?</h5>
            </div>
            <div class="modal-footer py-0">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn-sm btn-primary">
                    <svg width="15px" height="15px">
                        <use xlink:href="../svg/bootstrap-icons.svg#pencil-square" />
                    </svg>
                    Aceptar
                </button>
            </div>
        </div>
    </div>
</div>