<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3">
        <div class=" mx-0 row d-flex align-items-center p-2 bg-secondary text-light shadow-sm rounded-top mode-dark4">
            <div class="col-auto ml-2 pr-1">
                <svg width="25px" height="25px">
                    <use xlink:href="../svg/bootstrap-icons.svg#file-image" />
                </svg>
            </div>
            <div class="col pl-1">
                <div class="d-flex justify-content-between w-100">
                    <h4 class="mb-0 text-small">Grupo #</h4>
                </div>
            </div>
            <div class="col p-0">
                <button class="btn btn-success btn-sm pt-0" href="chat_personal.php" role="button" data-toggle="modal" data-target="#usuariomas">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#person-plus" />
                    </svg>
                </button>
            </div>
            <div class="col-auto p-0">
                <a class="btn btn-success btn-sm pt-0" href="chat_grupal.php" role="button">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#reply" />
                    </svg>
                </a>
            </div>
        </div>
        <!--height: 60vh
                max-height: calc(100vh - 13rem)
            -->
        <div class="p-2 alert-dark shadow-sm mode-dark1 overflow-auto scroll-decor" style="height: calc(100vh - 13rem);">
            <div class="ml-3 text-light mr-2">
                <div class="mb-3">
                    <p class="d-inline p-1 bg-dark rounded-lg">
                        Standing on the frontline when the bombs sklñklñkasd a dasd asdlñlkñtart to fall.
                    </p>
                </div>
                <div class="text-right mb-3">
                    <p class="d-inline p-1 bg-info rounded-lg">
                        Standing on the frontline when the bombsfsd f fsd sdf sd fs start to fall.
                    </p>
                </div>
                <div class="mb-3">
                    <p class="d-inline p-1 bg-dark rounded-lg">
                        Standing on the fro.
                    </p>
                </div>
                <div class="mb-3">
                    <p class="d-inline p-1 bg-dark rounded-lg">
                        to fall.
                    </p>
                </div>
                <div class="mb-3">
                    <p class="d-inline p-1 bg-dark rounded-lg">
                        dasd asdlñlkñtart to fall.
                    </p>
                </div>
                <div class="text-right mb-3">
                    <p class="d-inline p-1 bg-info rounded-lg">
                        Standing sd sdf sd fs start to fall.
                    </p>
                </div>
                <div class="mb-3">
                    <p class="d-inline p-1 bg-dark rounded-lg">
                        S
                </div>
                <div class="text-right mb-3">
                    <p class="d-inline p-1 bg-info rounded-lg">
                        sd sdf sd fs start to fall.
                    </p>
                </div>
                <div class="mb-3">
                    <p class="d-inline p-1 bg-dark rounded-lg">
                        Standing on the frontline when the bombs sklñklñkasd a dasd asdlñlkñtart to fall.
                    </p>
                </div>
                <div class="text-right mb-3">
                    <p class="d-inline p-1 bg-info rounded-lg">
                        start to fall.
                    </p>
                </div>
                <div class="mb-3">
                    <p class="d-inline p-1 bg-dark rounded-lg">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eum cupiditate ratione
                        suscipit aperiam provident eveniet. Aut esse nulla deleniti dignissimos eveniet blanditiis
                        veniam numquam consequatur? Nesciunt sequi obcaecati doloribus?
                    </p>
                </div>
                <div class="text-right mb-3">
                    <p class="d-inline p-1 bg-info rounded-lg">
                        f fsd sdf sd fs
                    </p>
                </div>
                <div class="text-right mb-3">
                    <p class="d-inline p-1 bg-info rounded-lg">
                        St bombsfsd f fsd sdf sd fs start to fall.
                    </p>
                </div>
                <div class="text-right mb-3">
                    <p class="d-inline p-1 bg-info rounded-lg">
                        sd fs start to fall.
                    </p>
                </div>
                <div class="text-right mb-3">
                    <p class="d-inline p-1 bg-info rounded-lg">
                        Standing on the frontline when the bombsfsd f fsd sdf sd fs start to fall.
                    </p>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center p-2 bg-secondary shadow-sm rounded-bottom mode-dark4">
            <div class="row w-100">
                <div class="col">
                    <div class="position-relative">
                        <input type="text" class="form-control w-100" placeholder="Manda el mensaje" required>
                    </div>
                </div>
                <div class="col-auto mx-n4 pr-2">
                    <button class="btn-sm btn-success btn-center">
                        <svg width="26px" height="26px">
                            <use xlink:href="../svg/bootstrap-icons.svg#symmetry-horizontal" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="usuariomas">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
            <div class="modal-content">
                <div class="modal-header py-2">
                    <h6 class="modal-title">
                        Añada estudiante(s)
                    </h6>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-inline position-relative mb-2">
                        <button class="btn-input an-icon-input-r" type="submit">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#search" />
                            </svg>
                        </button>
                        <input type="text" class="form-control w-100" placeholder="Buscar integrante" required>
                    </div>
                    <div class="list-group overflow-auto scroll-decor" style="height: calc(100vh - 18rem);">
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
                        Añadadir</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php') ?>