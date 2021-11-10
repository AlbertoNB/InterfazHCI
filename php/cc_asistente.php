<div class="collapse" id="asistente" data-parent="#regreso">
    <div class="bg-white p-2 mb-3 mode-dark3">
        <h6 class="text-center">FORMULARIO DE PREINSCRIPCIÓN COMO ASISTENTE <br> PUEDE REALIZAR ÚNICAMENTE SU
            PREINSCRIPCIÓN A UN SOLO CONGRESO.</h6>
    </div>
    <div> <!--Cambiar los iconos-->
        <div class="bg-dark">
            <div class="row text-center text-white-50">
                <div class="col-auto">
                    <h6 class="pl-4">#</h6>
                </div>
                <div class="col">
                    <h6>Congreso</h6>
                </div>
            </div>
        </div>
        <div class="list-group">
            <a class="list-group-item list-group-item-action disabled">
                <div class="row d-flex align-items-center">
                    <div class="col-auto">
                        <p class="my-0">1</p>
                    </div>
                    <div class="col-auto px-0">
                        <svg class="text-success" width="50px" height="50px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#cc-informatica" />
                        </svg>
                    </div>
                    <div class="col">
                        <p class="my-0">III CONGRESO INTERNACIONAL DE CIENCIAS INFORMÁTICAS</p>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action disabled">
                <div class="row d-flex align-items-center">
                    <div class="col-auto">
                        <p class="my-0">2</p>
                    </div>
                    <div class="col-auto px-0">
                        <svg class="text-success" width="50px" height="50px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#cc-educacion" />
                        </svg>
                    </div>
                    <div class="col">
                        <p class="my-0">III CONGRESO DE CIENCIAS DE LA EDUCACIÓN</p>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action" data-toggle="modal" data-target="#congreso">
                <div class="row d-flex align-items-center">
                    <div class="col-auto">
                        <p class="my-0">3</p>
                    </div>
                    <div class="col-auto px-0">
                        <svg class="text-success" width="50px" height="50px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#cc-salud" />
                        </svg>
                    </div>
                    <div class="col">
                        <p class="my-0">III CONGRESO INTERNACIONAL DE CIENCIAS DE LA SALUD</p>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action disabled">
                <div class="row d-flex align-items-center">
                    <div class="col-auto">
                        <p class="my-0">4</p>
                    </div>
                    <div class="col-auto px-0">
                        <svg class="text-success" width="50px" height="50px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#ing-aplicada" />
                        </svg>
                    </div>
                    <div class="col">
                        <p class="my-0">III CONGRESO DE INGENIERÍA APLICADA</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>

<div class="modal fade" id="congreso">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable ">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-weight-bold">Congreso</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="font-weight-bold">III CONGRESO INTERNACIONAL DE CIENCIAS DE LA SALUD</h6>
                <p>Evento científico dirigido al personal docente y de investigación, profesionales, estudiantes de
                    grado y posgrado de las áreas de ciencias médicas, optometría, nutrición y dietética, laboratorio
                    clínico, enfermería y afines de instituciones de educación superior, instituciones de salud del
                    sector público y privado, centros y grupos de investigación nacionales e internacionales. Esta
                    edición, se realizará de forma virtual y, dada la emergencia sanitaria mundial, el congreso hará
                    énfasis en los avances y perspectivas de la I+D+i frente a la emergencia generada por la COVID-19.
                </p>
                <div class="row">
                    <div class="col">
                        <h6 class="font-weight-bold"> Areas Temáticas</h6>
                        <p class="my-0"> - Laboratorio clínico</p>
                        <p class="my-0"> - Nutrición y dietética</p>
                        <p class="my-0"> - Optometría</p>
                        <p class="my-0"> - Enfermería</p>
                        <p class="my-0"> - Medicina</p>
                        <p class="my-0"> - Conferencias magistrales</p>
                    </div>
                    <div class="col-auto pl-0">
                        <svg class="text-success" width="200px" height="200px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#cc-salud" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#preinscripcion">
                    <svg width="15px" height="15px">
                        <use xlink:href="../svg/bootstrap-icons.svg#hand-thumbs-up-fill" />
                    </svg>
                    Aplicar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="preinscripcion">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title font-weight-bold">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#person-plus-fill" />
                    </svg>
                    Preinscripción</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="font-weight-bold" for="selector-incide">Filiación (Opcional)</label>
                        <select class="form-control" id="selector-incide">
                            <option>GERTEC EMBRIONES (CORREO)</option>
                            <option>GERTEC EMBRIONES. (GERTEC)</option>
                            <option>HACIENDA ECOS DEL PORVENI (POR CORREO)</option>
                            <option>USIL - UNIVERSIDAD SAN IGNACIO DE LOYOLA (USIL)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="selector-incide">Motivación para participar (Opcional)</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn-sm btn-primary">
                    <svg width="15px" height="15px">
                        <use xlink:href="../svg/bootstrap-icons.svg#person-plus-fill" />
                    </svg>
                    Preinscribirse</button>
            </div>
        </div>
    </div>
</div>