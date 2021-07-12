<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3">
        <div class="text-center p-2 mb-3 bg-primary rounded shadow-sm mode-dark5">
            <h4 class="mb-0 text-white">Chat academico</h4>
        </div>
        <div class="row">
            <div class="col-auto mb-2">
                <a class="btn btn-success" href="chat_personal.php" role="button">
                    <img width="20px" height="20px" src="../svg/chat.svg">
                    Chat personal
                </a>
                <a class="btn btn-success" href="chat_grupal.php" role="button">
                    <img width="20px" height="20px" src="../svg/conversation.svg">
                    Chat grupal
                </a>
            </div>
            <div class="col-lg mb-3">
                <div class="row">
                    <div class="col">
                        <div class="form-inline position-relative">
                            <button class="btn-input an-icon-input-r" type="submit">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#search" />
                                </svg>
                            </button>
                            <input type="text" class="form-control w-100" placeholder="Buscar foro academico" required>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" disabled data-target="#ventanaforomas" data-toggle="tooltip" data-placement="bottom" title="Solo para docentes">
                            <img width="28px" height="28px" src="../svg/add-group.svg">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-group mb-3">
            <a href="chat_academico_n.php" class="list-group-item list-group-item-action py-1">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-0">Tema del foro #1</h5>
                    <small>....</small>
                </div>
                <small>Desarrollo de Temario de Tesis: A .</small><small> Docente: -------------</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-0">Tema del foro #2</h5>
                    <small>....</small>
                </div>
                <small>Desarrollo de Temario de Tesis: A .</small><small> Docente: -------------</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-0">Tema del foro #3</h5>
                    <small>....</small>
                </div>
                <small>Desarrollo de Temario de Tesis: A .</small><small> Docente: -------------</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-0">Tema del foro #4</h5>
                    <small>....</small>
                </div>
                <small>Desarrollo de Temario de Tesis: A .</small><small> Docente: -------------</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-0">Tema del foro #5</h5>
                    <small>....</small>
                </div>
                <small>Desarrollo de Temario de Tesis: A .</small><small> Docente: -------------</small>
            </a>
        </div>
    </div>
    <div class="modal fade" id="ventanaforomas">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
            <div class="modal-content">
                <div class="modal-header py-2 ">
                    <h6 class="modal-title">
                        Crear nuevo tema de foro
                    </h6>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-2">
                    <form class="mb-2">
                        <label>Materia relevante</label>
                        <div class="row border-bottom">
                            <div class="col pr-1">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" placeholder="Buscar grupo">
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
                                    <select class="form-control" id="exampleFormControlSelect1" placeholder="Buscar grupo">
                                        <option>Curso</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nuevo tema de foro</label>
                            <input type="email" class="form-control" placeholder="Ingrese tema de foro">
                        </div>
                        <div class="form-group">
                            <label>Contexto del foro</label>
                            <textarea class="form-control" placeholder="Ingrese contexto del foro" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer py-0">
                    <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn-sm btn-primary">
                        Crear foro</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php') ?>