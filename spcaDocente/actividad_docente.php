<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3 ">
        <div class="p-3 mb-3 bg-primary text-white rounded shadow-sm mode-dark5">
            <h5 class="m-0 text-center"><b>Registro de actividades y evidencias</b></h5>
        </div>
        <div class="card p-2">
            <div class="row">
                <div class="col-lg">
                    <form action="">
                        <div class="form-group mb-1">
                            <label class="font-weight-bold" for="spa">Seleccione periodo académico</label>
                            <select class="form-control" id="spa">
                                <option>Mayo 2020 hasta: Octubre del 2020</option>
                                <option>Enero 2020 hasta: Junio del 2020</option>
                                <option>Junio 2020 hasta: Diciembre del 2020</option>
                                <option>Diciembre 2020 hasta: Octubre del 2020</option>
                                <option>Octubre 2020 hasta: Abril del 2020</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-auto pr-1">
                    <form action="">
                        <div class="form-group mb-1">
                            <label class="font-weight-bold">Mes</label>
                            <select class="form-control">
                                <option>Enero</option>
                                <option>Febrero</option>
                                <option>Marzo</option>
                                <option>Abril</option>
                                <option>Mayo</option>
                                <option>Junio</option>
                                <option>Julio</option>
                                <option>Agosto</option>
                                <option>Septiembre </option>
                                <option>Octubre</option>
                                <option>Noviembre</option>
                                <option>Diciembre</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-auto pl-1 d-flex align-items-end pb-1">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#save" />
                            </svg>
                            Guardar</button>
                        <button type="button" class="btn btn-secondary">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#symmetry-horizontal" />
                            </svg>
                            Enviar</button>
                        <button type="button" class="btn btn-secondary">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#printer-fill" />
                            </svg>
                            Reporte</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php') ?>