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
        <div class="col-auto bg-dark pl-1 pr-0">
            <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#targetIncid" title="Agregar incidencia">
                <svg width="31px" height="31px" fill="currentColor">
                    <use xlink:href="../svg/bootstrap-icons.svg#plus-circle-fill" />
                </svg>
            </button>
        </div>
    </div>
    <ul class="list-group  ">
        <li class="list-group-item py-1 ">
            <div class="row d-flex align-items-center" title="Incidencia en proceso">
                <div class="col pr-1">
                    <h5 class="mb-1 font-weight-bold text-small">Incumplimiento del syllabus</h5>
                    <p class="mb-1"><b>Incidencia:</b> Adipisicing elit. Ducimus rerum sed necessitatibus accusamus!</p>
                    <small> <b>Fecha:</b> 20-06-01</small>
                </div>
                <div class="col-auto px-1">
                    <svg class="text-primary rounded-lg mode-dark1" width="30px" height="30px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#eye-fill" />
                    </svg>
                </div>
            </div>
        </li>
        <li class="list-group-item py-1 ">
            <div class="row d-flex align-items-center" title="incidencia pendiente ">
                <div class="col pr-1">
                    <h5 class="mb-1 text-small font-weight-bold">Incumplimiento del syllabus</h5>
                    <p class="mb-1"><b>Incidencia:</b> Adipisicing elit. Ducimus rerum sed necessitatibus accusamus!</p>
                    <small> <b>Fecha:</b> 20-06-01</small>
                </div>
                <div class="col-auto px-1">
                    <svg class="text-danger rounded-lg mode-dark1" width="30px" height="30px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#eye-slash-fill" />
                    </svg>
                </div>
            </div>
        </li>

    </ul>
</div>
<!-- ventana Tarjeta Incidencia -->
<div class="modal fade" id="targetIncid">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title text-white" id="exampleModalLabel">Incidencia</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
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