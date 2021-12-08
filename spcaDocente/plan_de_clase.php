<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3 ">
        <div class="p-3 mb-3 bg-primary text-white rounded shadow-sm mode-dark5">
            <h5 class="m-0 text-center"><b>Mis planes de actividades de aprendizaje</b></h5>
        </div>

        <div class="row mb-3">
            <div class="col-12">
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
                        <div class="col-lg">
                            <div class="row ">
                                <div class="col pr-1">
                                    <form action="">
                                        <div class="form-group mb-1">
                                            <label class="font-weight-bold">Syllabus</label>
                                            <select class="form-control">
                                                <option>Sistema operativo (*******)</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-auto px-1">
                                    <form action="">
                                        <div class="form-group mb-1">
                                            <label class="font-weight-bold">Paralelo</label>
                                            <select class="form-control">
                                                <option>A</option>
                                                <option>B</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-auto d-flex align-items-end pl-1">
                                    <a class="navbar-brand mx-0 text-danger" role="button">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="../svg/bootstrap-icons.svg#dash-circle-fill" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-2">
                <div class="card p-2">
                    <div class="row ">
                        <div class="col pr-1">
                            <form action="">
                                <label class="font-weight-bold">Filtro</label>
                                <div class="form-inline position-relative">
                                    <svg class="bi an-icon-input" width="20px" height="20px" fill="currentColor">
                                        <use xlink:href="../svg/bootstrap-icons.svg#search" />
                                    </svg>
                                    <input type="text" class="form-control w-100" placeholder="Nombre de la Clase u Objetivos" required>
                                </div>
                            </form>
                        </div>
                        <div class="col-auto px-1">
                            <form action="">
                                <div class="form-group mb-1">
                                    <label class="font-weight-bold">Estados</label>
                                    <select class="form-control">
                                        <option>Todos</option>
                                        <option>....</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-auto d-flex align-items-end pl-1">
                            <a class="navbar-brand mx-0" role="button">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#search" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-2">
                <div class=" border rounded-sm bg-white p-2">
                    <label class="font-weight-bold">Opciones generales</label> <br>
                    <button type="button" class="btn bg-info mt-1">
                        <svg width="20px" height="20px">
                            <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-plus"/>
                        </svg>
                    </button>
                    <button type="button" class="btn bg-info mt-1">
                        <svg width="20px" height="20px">
                            <use xlink:href="../svg/bootstrap-icons.svg#download"/>
                        </svg>
                    </button>
                    <button type="button" class="btn bg-info mt-1">
                        <svg width="20px" height="20px">
                            <use xlink:href="../svg/bootstrap-icons.svg#chat-left-dots"/>
                        </svg>
                    </button>
                    <button type="button" class="btn bg-info mt-1">
                        <svg width="20px" height="20px">
                            <use xlink:href="../svg/bootstrap-icons.svg#printer"/>
                        </svg>
                    </button>
                    <button type="button" class="btn bg-info mt-1">
                        <svg width="20px" height="20px">
                            <use xlink:href="../svg/bootstrap-icons.svg#clipboard"/>
                        </svg>
                    </button>
                    <button type="button" class="btn bg-info mt-1">
                        <svg width="20px" height="20px">
                            <use xlink:href="../svg/bootstrap-icons.svg#bell"/>
                        </svg>
                    </button>
                    <button type="button" class="btn bg-info mt-1">
                        <svg width="20px" height="20px">
                            <use xlink:href="../svg/bootstrap-icons.svg#flag"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="bg-dark">
                <div class="row pt-1 text-center text-white-50">
                    <div class="col">
                        <h6>...</h6>
                    </div>
                    <div class="col">
                        <h6>...</h6>
                    </div>
                    <div class="col">
                        <h6>...</h6>
                    </div>
                    <div class="col">
                        <h6>...</h6>
                    </div>
                    <div class="col">
                        <h6>...</h6>
                    </div>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item"> </li>
                <li class="list-group-item"> </li>
                <li class="list-group-item"> </li>
            </ul>
    </div>
    
</main>

<?php include('footer.php') ?>