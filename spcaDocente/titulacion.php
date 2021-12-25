<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3 ">
        <div class="p-2 mb-3 bg-warning text-white rounded shadow-sm mode-dark5 text-dark">
            <h5 class="m-0 text-center border-bottom"><b>Trabajo de titulación</b></h5>
            <h5 class="m-0 text-center">Reg. De informe de titulación </h5>
        </div>

        <div class="alert-secondary p-1">
            <button type="button" class="btn-sm btn-primary">
                <svg width="20px" height="20px">
                    <use xlink:href="../svg/bootstrap-icons.svg#file-earmark-medical" />
                </svg>
            </button>
        </div>
        <div class="card p-2 mb-3">
            <div class="row">
                <div class="col-auto">
                    <form action="">
                        <div class="form-group mb-1">
                            <label class="font-weight-bold" for="spa">Estado</label>
                            <select class="form-control" id="spa">
                                <option>Todos</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <form action="">
                        <label class="form-label font-weight-bold">Búsqueda</label>
                        <div class="form-inline position-relative">
                            <button class="btn-input an-icon-input" type="submit">
                                <svg width="20px" height="20px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#search" />
                                </svg>
                            </button>
                            <input type="text" class="form-control w-100" id="formGroupExampleInput2" placeholder="Ingrese el nombre del trabajo" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive scroll-decor">
            <table class="table table-sm table-bordered table-hover mb-0">
                <!--table-striped-->
                <thead class=" middle-th thead-dark">
                    <tr class="text-center">
                        <th scope="col">Trabajos de titulación</th>
                        <th scope="col">Estudiantes y docentes</th>
                        <th scope="col">Informes</th>
                        <th scope="col">Observaciones</th>
                    </tr>
                </thead>
                <tbody class="middle-th middle-td">
                    <tr>
                        <td colspan="4">-</td>
                    </tr>
                    <tr>
                        <td colspan="4">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

<?php include('footer.php') ?>