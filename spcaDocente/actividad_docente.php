<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3 ">
        <div class="p-3 mb-3 bg-primary text-white rounded shadow-sm mode-dark5">
            <h5 class="m-0 text-center"><b>Registro de actividades y evidencias</b></h5>
        </div>
        <div class="card p-2 mb-3">
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
        <!--<div class="card p-2">
            <div class="overflow-auto scroll-decor" style="width: 100%; white-space: nowrap; scrollbar-width: thin;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente magnam necessitatibus consequuntur officiis voluptatibus reprehenderit aspernatur consequatur mollitia dolorum quas ad corporis vitae animi, inventore laudantium, debitis excepturi porro dolor?
            </div>
        </div>-->
        <div class="table-responsive scroll-decor">
            <table class="table table-sm table-bordered table-hover">
                <!--table-striped-->
                <thead class=" middle-th thead-dark">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col" style="min-width:300px;">Actividades</th>
                        <th scope="col">Horas asignadas</th>
                        <th scope="col">Horas trabajadas</th>
                        <th scope="col" style="min-width:140px;">Estado</th>
                        <th scope="col">Sis</th>
                        <th scope="col">Url</th>
                        <th scope="col">Evidencia Pdf</th>
                    </tr>
                </thead>
                <tbody class="middle-th middle-td">
                    <tr>
                        <th scope="row">1</th>
                        <td>Docencia</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, sit facilis accusamus non pariatur impedit quos, asperiores laborum</td>
                        <td class="text-center">
                            <span class="card bg-success text-white">
                                32
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="card">
                                36
                            </span>
                        </td>
                        <td>
                            <form action="">
                                <div class="form-group my-0">
                                    <select class="form-control">
                                        <option>Planificado </option>
                                    </select>
                                </div>
                            </form>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#laptop" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#link-45deg" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-block btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-pdf" />
                                </svg>
                            </button>
                        </td>


                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Docencia</td>
                        <td>Dicta, sit facilis accusamus non pariatur impedit quos, asperiores laborum</td>
                        <td class="text-center">
                            <span class="card bg-success text-white">
                                16
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="card">
                                16.0
                            </span>
                        </td>
                        <td>
                            <form action="">
                                <div class="form-group my-0">
                                    <select class="form-control">
                                        <option>Planificado </option>
                                    </select>
                                </div>
                            </form>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#laptop" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#link-45deg" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-block btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-pdf" />
                                </svg>
                            </button>
                        </td>


                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Docencia</td>
                        <td>sit facilis accusamus non pariatur impedit quos, asperiores laborum</td>
                        <td class="text-center">
                            <span class="card bg-success text-white">
                                4
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="card">
                                4.0
                            </span>
                        </td>
                        <td>
                            <form action="">
                                <div class="form-group my-0">
                                    <select class="form-control">
                                        <option>Planificado </option>
                                    </select>
                                </div>
                            </form>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#laptop" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#link-45deg" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-block btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-pdf" />
                                </svg>
                            </button>
                        </td>


                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Docencia</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, sit facilis accusamus non pariatur impedit quos</td>
                        <td class="text-center">
                            <span class="card bg-success text-white">
                                4
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="card">
                                4.0
                            </span>
                        </td>
                        <td>
                            <form action="">
                                <div class="form-group my-0">
                                    <select class="form-control">
                                        <option>Planificado </option>
                                    </select>
                                </div>
                            </form>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#laptop" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#link-45deg" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-block btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-pdf" />
                                </svg>
                            </button>
                        </td>


                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Investigación</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, sit facilis accusamus non pariatur impedit quos, asperiores laborum</td>
                        <td class="text-center">
                            <span class="card bg-success text-white">
                                24
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="card">
                                24
                            </span>
                        </td>
                        <td>
                            <form action="">
                                <div class="form-group my-0">
                                    <select class="form-control">
                                        <option>Planificado </option>
                                    </select>
                                </div>
                            </form>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#laptop" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#link-45deg" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-block btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-pdf" />
                                </svg>
                            </button>
                        </td>


                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Dirección o gestión ---</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, sit facilis accusamus non pariatur impedit quos, asperiores laborum, asperiores</td>
                        <td class="text-center">
                            <span class="card bg-success text-white">
                                80
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="card">
                                84
                            </span>
                        </td>
                        <td>
                            <form action="">
                                <div class="form-group my-0">
                                    <select class="form-control">
                                        <option>Planificado </option>
                                    </select>
                                </div>
                            </form>
                        </td>
                        <td>
                            <button type="button" class="btn-danger btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#laptop" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#link-45deg" />
                                </svg>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn-info btn-block btn-sm">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-pdf" />
                                </svg>
                            </button>
                        </td>


                    </tr>
                    <tr class="text-center">
                        <th colspan="3">Total</th>
                        <td>160</td>
                        <td>168.0</td>
                        <td colspan="4"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4>
            <span class="badge badge-secondary">Horas a declarar : </span>
            <span class="badge badge-success">168.0</span>
        </h4>
    </div>
</main>

<?php include('footer.php') ?>