<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3 mode-dark2">
        <div class="row mb-3">
            <div class="col">
                <h4 class="">
                    <svg width="25px" height="25px">
                        <!--width="90px" height="90px"-->
                        <use xlink:href="../svg/bootstrap-icons.svg#calendar-week" />
                    </svg>
                    Calendario UTM
                </h4>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#evento_calendario">
                    <svg width="25px" height="25px">
                        <!--width="90px" height="90px"-->
                        <use xlink:href="../svg/bootstrap-icons.svg#plus" />
                    </svg>
                    Nuevo evento</button>
            </div>
        </div>
        <div id="calendar"></div>

        <!--Ventana Calendario-->
        <div class="modal fade" id="evento_calendario">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
                <div class="modal-content">
                    <div class="modal-header bg-primary py-1">
                        <h5 class="modal-title text-white font-weight-bold">Nuevo evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="text-white" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="">
                            <div class="mx-1">
                                <div class="form-group row mb-1">
                                    <label class="col-3">Titulo del evento</label>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Obligatorio" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-3">Fecha</label>
                                    <div class="col pr-0">
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="col pl-1">
                                        <select class="custom-select">
                                            <option selected>Tipo de evento</option>
                                            <option style="color: #63d867;" value="1">&#x02605;Evento</option>
                                            <option style="color: #ffc107;" value="2">&#x02605;Día festivo</option>
                                            <option style="color: #3ca8ff;" value="3">&#x02605;Cumpleaños</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-3">Descripción</label>
                                    <div class="col">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <label class="col-3">Dura asta</label>
                                    <div class="col">
                                        <input type="date" class="form-control" required>
                                    </div>
                                </div>
                                <h5 class="font-weight-bold">Repetir evento</h5>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" disabled>
                                    <label class="custom-control-label" for="customRadio1">Por dia</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Por semana</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Por Mes</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">Por año</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn-sm btn-success">
                            <svg width="15px" height="15px">
                                <use xlink:href="../svg/bootstrap-icons.svg#save2" />
                            </svg>
                            Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php') ?>