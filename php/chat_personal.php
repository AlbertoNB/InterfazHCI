<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3">
        <div class="row">
            <div class="col-auto mb-2">
                <a class="btn btn-primary" href="chat_grupal.php" role="button">
                    <img width="20px" height="20px" src="../svg/conversation.svg">
                    Chat grupal
                </a>
                <a class="btn btn-primary" href="#" role="button">
                    <img width="20px" height="20px" src="../svg/synergy.svg">
                    Chat academico
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-inline position-relative">
                    <button class="btn-input an-icon-input-r" type="submit">
                        <svg width="20px" height="20px">
                            <use xlink:href="../svg/bootstrap-icons.svg#search" />
                        </svg>
                    </button>
                    <input type="text" class="form-control w-100" placeholder="Buscar estudiante"
                        required>
                </div>
            </div>
        </div>

        <div class="list-group mb-3">
            <a href="chat_personal_n.php" class="list-group-item list-group-item-action py-1">
                <div class="row">
                    <div class="col-auto"><svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                        </svg></div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Estudiante #1</h5>
                            <small>....</small>
                        </div>
                        <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1">
                <div class="row">
                    <div class="col-auto"><svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                        </svg></div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Estudiante #2</h5>
                            <small>....</small>
                        </div>
                        <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1">
                <div class="row">
                    <div class="col-auto"><svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                        </svg></div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Estudiante #3</h5>
                            <small>....</small>
                        </div>
                        <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1">
                <div class="row">
                    <div class="col-auto">
                        <svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                        </svg></div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Estudiante #4</h5>
                            <small>....</small>
                        </div>
                        <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-1">
                <div class="row">
                    <div class="col-auto"><svg width="25px" height="25px">
                            <use xlink:href="../svg/bootstrap-icons.svg#person-bounding-box" />
                        </svg></div>
                    <div class="col pl-0">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Estudiante #5</h5>
                            <small>....</small>
                        </div>
                        <small>Nivel: 4 </small><small> Compañero en: --, ----, ----</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
</main>

<?php include('footer.php') ?>