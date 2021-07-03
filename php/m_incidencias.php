<!-- Parte de incidencias -->
<div class="collapse" id="incidencias" data-parent="#elemento">
    <div class="row align-items-center mx-0 text-white-50">
        <div class="col bg-dark">
            <h5 class="my-0 p-2">
                <svg class="" width="25px" height="25px" fill="currentColor">
                    <use xlink:href="../svg/bootstrap-icons.svg#exclamation-triangle-fill" />
                </svg>
                Incidencias
            </h5>
        </div>
        <div class="col-auto">
            <a class="navbar-brand mx-0 text-success" role="button" data-toggle="modal" data-target="#targetIncid">
                <svg class="bi" width="35px" height="35px" fill="currentColor">
                    <use xlink:href="../svg/bootstrap-icons.svg#plus-circle-fill" />
                </svg>
            </a>
        </div>
    </div>
    <ul class="list-group  ">
        <li class="list-group-item">
            <div class="row">
                <div class="col-3">
                    <small>Tipo</small>
                </div>
                <div class="col-2">
                    <small>Fecha</small>
                </div>
                <div class="col">
                    <small>Incidencias</small>
                </div>
                <div class="col-auto">
                    <small>Estado</small>
                </div>
            </div>
        </li>
        <li class="list-group-item ">
            <div class="row d-flex align-items-center">
                <div class="col-3 ">
                    <p class="small my-0">Incumplimiento del syllabus</p>
                </div>
                <div class="col-2">
                    <p class="small my-0">20-06-01</p>
                </div>
                <div class="col">
                    <p class="small my-0">adipisicing elit. Ducimus rerum sed necessitatibus accusamus!</p>
                </div>
                <div class="col-auto">
                    <svg class="text-success" width="30px" height="30px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#eye-fill" />
                    </svg>
                </div>
            </div>
        </li>
        <li class="list-group-item ">
            <div class="row d-flex align-items-center">
                <div class="col-3 ">
                    <p class="small my-0">Incumplimiento del syllabus</p>
                </div>
                <div class="col-2">
                    <p class="small my-0">20-06-01</p>
                </div>
                <div class="col">
                    <p class="small my-0">adipisicing elit. Ducimus rerum sed necessitatibus accusamus!</p>
                </div>
                <div class="col-auto">
                    <svg class="text-danger" width="30px" height="30px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#eye-fill" />
                    </svg>
                </div>
            </div>
        </li>

    </ul>
</div>
<!-- ventana Tarjeta Incidencia -->
<div class="modal fade" id="targetIncid">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Incidencia</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="selector-incide">Tipo de Incidencia</label>
                        <select class="form-control" id="selector-incide">
                            <option>Instancia justificada del docente</option>
                            <option>Incumplimiento del syllabus</option>
                        </select>
                    </div>
                    <p>
                        <label for="date">Fecha de incidencia</label>
                        <input type="date" id="date">
                    </p>
                    <div class="form-group">
                        <label for="selector-incide">Tipo de Incidencia</label>
                        <textarea class="form-control" id="message-text" placeholder="Detalle de la incidencia"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn-sm btn-primary">
                    <svg width="15px" height="15px">
                        <use xlink:href="../svg/bootstrap-icons.svg#mailbox2" />
                    </svg>
                    Enviar</button>
            </div>
        </div>
    </div>
</div>