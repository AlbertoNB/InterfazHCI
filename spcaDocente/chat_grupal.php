<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3">
        <div class="text-center p-2 mb-3 bg-primary rounded shadow-sm mode-dark5">
            <h4 class="mb-0 text-white">Chat grupal</h4>
        </div>
        <div class="row">
            <div class="col-auto">
                <a class="btn mb-2 btn-success" href="chat_personal.php" role="button">
                    <img width="20px" height="20px" src="../svg/chat.svg">
                    Chat personal
                </a>
                <a class="btn mb-2 btn-success" href="chat_academico.php" role="button">
                    <img width="20px" height="20px" src="../svg/synergy.svg">
                    Chat academico
                </a>
            </div>
            <div class="col-lg mb-2">
                <div class="row">
                    <div class="col">
                        <div class="form-inline position-relative">
                            <button class="btn-input an-icon-input-r" type="submit">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#search" />
                                </svg>
                            </button>
                            <input type="text" class="form-control w-100" placeholder="Buscar grupo" required>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn-sm btn-info" data-toggle="modal" data-target="#grupomas"
                            data-toggle="tooltip" data-placement="bottom" title="Crear nuevo grupo">
                            <img width="25px" height="25px" src="../svg/add-group.svg">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-group mb-3">
            <a href="chat_grupal_n.php" class="list-group-item list-group-item-action py-1">
                <div class="row">
                    <div class="col-auto px-1">
                        <svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#file-image" />
                        </svg>
                    </div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Grupo #1</h5>
                            <small>....</small>
                        </div>
                        <small>Desarrollo de Temario de Tesis: A .</small><small> Integrantes: ----, ----, ----</small>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1" data-toggle="modal" data-target="#ventanasolicitud">
                <div class="row">
                    <div class="col-auto px-1">
                        <svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#file-image" />
                        </svg>
                    </div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Grupo #2</h5>
                            <small>....</small>
                        </div>
                        <small>Desarrollo de Temario de Tesis: A .</small><small> Integrantes: ----, ----, ----</small>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1" data-toggle="modal" data-target="#ventanasolicitud-no">
                <div class="row">
                    <div class="col-auto px-1">
                        <svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#file-image" />
                        </svg>
                    </div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Grupo #3</h5>
                            <small>....</small>
                        </div>
                        <small>Desarrollo de Temario de Tesis: A .</small><small> Integrantes: ----, ----, ----</small>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1" data-toggle="modal" data-target="#ventanasolicitud">
                <div class="row">
                    <div class="col-auto px-1">
                        <svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#file-image" />
                        </svg>
                    </div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Grupo #4</h5>
                            <small>....</small>
                        </div>
                        <small>Desarrollo de Temario de Tesis: A .</small><small> Integrantes: ----, ----, ----</small>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1" data-toggle="modal" data-target="#ventanasolicitud">
                <div class="row">
                    <div class="col-auto px-1">
                        <svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#file-image" />
                        </svg>
                    </div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Grupo #5</h5>
                            <small>....</small>
                        </div>
                        <small>Desarrollo de Temario de Tesis: A .</small><small> Integrantes: ----, ----, ----</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--ventana Grupal-->
    <div class="modal fade" id="grupomas">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary py-2">
                    <h6 class="modal-title text-white">
                        Crear nuevo grupo
                    </h6>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="border-bottom mb-2">
                        <div class="form-group mb-2">
                            <input type="email" class="form-control" placeholder="Nombre del grupo">
                        </div>
                        <div class="row">
                            <div class="col pr-1">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        placeholder="Buscar grupo">
                                        <option>Escoga la materia</option>
                                        <option>Materia #</option>
                                        <option>Materia #</option>
                                        <option>Materia #</option>
                                        <option>Materia #</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-auto pl-1">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        placeholder="Buscar grupo">
                                        <option>Curso</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="form-inline position-relative mb-2">
                        <button class="btn-input an-icon-input-r" type="submit">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#search" />
                            </svg>
                        </button>
                        <input type="text" class="form-control w-100" placeholder="Buscar integrante" required>
                    </div>
                    <div class="list-group overflow-auto scroll-decor" style="height: calc(100vh - 21rem);">
                        <div class="list-group-item py-1">
                            <div class="row">
                                <div class="col-auto d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input ">
                                    <svg width="25px" height="25px">
                                        <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                                    </svg>
                                </div>
                                <div class="col pl-0">
                                    <div class="d-flex w-100 ">
                                        <h5 class="mb-0">Estudiante #1</h5>
                                        <small>....</small>
                                    </div>
                                    <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item py-1">
                            <div class="row">
                                <div class="col-auto d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input ">
                                    <svg width="25px" height="25px">
                                        <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                                    </svg>
                                </div>
                                <div class="col pl-0">
                                    <div class="d-flex w-100 ">
                                        <h5 class="mb-0">Estudiante #1</h5>
                                        <small>....</small>
                                    </div>
                                    <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item py-1">
                            <div class="row">
                                <div class="col-auto d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input ">
                                    <svg width="25px" height="25px">
                                        <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                                    </svg>
                                </div>
                                <div class="col pl-0">
                                    <div class="d-flex w-100 ">
                                        <h5 class="mb-0">Estudiante #1</h5>
                                        <small>....</small>
                                    </div>
                                    <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item py-1">
                            <div class="row">
                                <div class="col-auto d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input ">
                                    <svg width="25px" height="25px">
                                        <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                                    </svg>
                                </div>
                                <div class="col pl-0">
                                    <div class="d-flex w-100 ">
                                        <h5 class="mb-0">Estudiante #1</h5>
                                        <small>....</small>
                                    </div>
                                    <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item py-1">
                            <div class="row">
                                <div class="col-auto d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input ">
                                    <svg width="25px" height="25px">
                                        <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                                    </svg>
                                </div>
                                <div class="col pl-0">
                                    <div class="d-flex w-100 ">
                                        <h5 class="mb-0">Estudiante #1</h5>
                                        <small>....</small>
                                    </div>
                                    <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item py-1">
                            <div class="row">
                                <div class="col-auto d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input ">
                                    <svg width="25px" height="25px">
                                        <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                                    </svg>
                                </div>
                                <div class="col pl-0">
                                    <div class="d-flex w-100 ">
                                        <h5 class="mb-0">Estudiante #1</h5>
                                        <small>....</small>
                                    </div>
                                    <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer py-0">
                    <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn-sm btn-primary">
                        <svg width="15px" height="15px">
                            <use xlink:href="../svg/bootstrap-icons.svg#check2-square" />
                        </svg>
                        Crear grupo</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ventanasolicitud">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary py-2">
                    <h6 class="modal-title text-white">
                        No eres miembro de este grupo 
                    </h6>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h6>Desea mandar solicitud de ingreso a este grupo?</h6>
                    <button type="button" class="btn btn-success">Enviar solicitud</button>
                </div>
                <div class="modal-footer py-0">
                    <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ventanasolicitud-no">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary py-2">
                    <h6 class="modal-title text-white">
                        Solicitud de ingreso ya enviada 
                    </h6>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h6>Desea anular la solicitud de ingreso a este grupo?</h6>
                    <button type="button" class="btn btn-success">Anular solicitud</button>
                </div>
                <div class="modal-footer py-0">
                    <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php') ?>