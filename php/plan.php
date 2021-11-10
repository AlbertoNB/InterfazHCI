<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3">
        <div class="row">
            <!--Corregir auto tal ves funcione col-sm-auto-->
            <div class="col">
                <form action="">
                    <div class="form-group">
                        <select class="form-control">
                            <option>Mayo 2020 hasta: Octubre del 2020</option>
                            <option>Enero 2020 hasta: Junio del 2020</option>
                            <option>Junio 2020 hasta: Diciembre del 2020</option>
                            <option>Diciembre 2020 hasta: Octubre del 2020</option>
                            <option>Octubre 2020 hasta: Abril del 2020</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-auto">
                <button class="btn-sm btn-warning" title="Imprimir conglomerado de asistencias">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#printer-fill" />
                    </svg>
                </button>
            </div>

        </div>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action disabled"> <!--disabled evita que se active-->
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Administración de centros de informacion</h5>
                    <small>Paralelo: A</small>
                </div>
                <p class="mb-1">Docente: Zambrano Zambrano Dannyll Michelle</p>
                <small>Créditos: 3 </small><small> RPT: --</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action disabled">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Aplicaciones Informá ticas</h5>
                    <small>Paralelo: A</small>
                </div>
                <p class="mb-1">Docente: Cobeña Macias Tatiana Elizabeth</p>
                <small>Créditos: 4 </small><small> RPT: --</small>
            </a>
            <a href="materia.php" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Desarrollo de Temario de Tesis</h5>
                    <small>Paralelo: A</small>
                </div>
                <p class="mb-1">Docente: Zambrano Zambrano Dannyll Michelle</p>
                <small>Créditos: 3 </small><small> RPT: --</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action disabled">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Sistemas de información gerencial</h5>
                    <small>Paralelo: C</small>
                </div>
                <p class="mb-1">Docente: Flores Cedeño Pablo Ramon</p>
                <small>Créditos: 3 </small><small> RPT: --</small>
            </a>

        </div>
    </div>
</main>
<?php include('footer.php') ?>