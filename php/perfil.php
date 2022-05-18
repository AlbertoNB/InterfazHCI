<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3">
        <div class="row bg-secondary mb-3 mx-0 mode-dark5">
            <div class="col-auto p-2">
                <svg class="text-light" width="50px" height="50px">
                    <use xlink:href="../svg/bootstrap-icons.svg#person-circle" />
                </svg>
            </div>

            <div class="col">
                <h4 class="mt-2 text-light">
                    Aberto Alejandro Naula Bone
                </h4>
            </div>
            <div class="col-auto d-flex align-items-center">
                <a class="text-decoration-none dropdown-toggle" href="#" id="editar-usuario" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!--aria-haspopup="true" aria-expanded="false"-->
                    <svg width="25px" height="25px">
                        <use xlink:href="../svg/bootstrap-icons.svg#gear-fill" />
                    </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="editar-usuario">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editar-perfil">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#pencil-fill" />
                        </svg>
                        Editar perfil
                    </a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#cambio-contras">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#pencil-fill" />
                        </svg>
                        Cambiar contraseña
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#pencil-fill" />
                        </svg>
                        Idioma preferido
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#pencil-fill" />
                        </svg>
                        Manual de usuario
                    </a>
                </div>
            </div>
        </div>
        <div class="row mx-0 mode-dark2">
            <div class="col-md-6">
                <h5 class="text-secondary font-weight-bold">Detalle de usuario</h5>
                <h6 class="my-0 font-weight-bold">Dirección de correo</h6>
                <p class="">anaula649@utm.edu.ec</p>
                <h6 class="my-0 font-weight-bold">Pais</h6>
                <p class="">Ecuador</p>
                <div class="row">
                    <div class="col">
                        <h6 class="my-0 font-weight-bold">Ciudad</h6>
                        <p class="">Portoviejo</p>
                    </div>
                    <div class="col-auto ">
                        <button class="btn-sm btn-secondary" data-toggle="modal" data-target="#editar-perfil">
                            <svg width="20px" height="20px">
                                <use xlink:href="../svg/bootstrap-icons.svg#question-octagon" />
                            </svg>
                            Editar perfil
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <h5 class="text-secondary font-weight-bold">Accesos previos</h5>
                <h6 class="my-0 font-weight-bold">Actividad anterior</h6>
                <p class="">viernes, 12 de junio de 202X, 12:20 (169 dias 4 horas)</p>
                <h6 class="my-0 font-weight-bold">Actividad resiente</h6>
                <p class="">sábado, 28 de noviembre de 202X, 17:03 (6 segundos)</p>
            </div>
            <div class="col-md-6">
                <h5 class="text-secondary font-weight-bold">Miselaneas</h5>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis vero quibusdam consequatur odit!
                    Atque, consequatur omnis autem deserunt ipsum magnam nulla quasi necessitatibus beatae inventore
                    exercitationem similique, rem unde veniam.</p>
            </div>
        </div>
        <!--ventana Editar perfil-->
        <div class="modal fade" id="editar-perfil">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body mb-2">
                        <div class="border-bottom">
                            <form>
                                <p class="font-weight-bold my-0 ">General</p>
                                <div class="mx-1">
                                    <div class="form-group row mb-1">
                                        <label class="col-3">Nombre(s)</label>
                                        <div class="col-auto">
                                            <input type="text" class="form-control" placeholder="Alberto Alejandro"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-3">Apellido(s)</label>
                                        <div class="col-auto">
                                            <input type="text" class="form-control" placeholder="Naula Bone" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-3">Correo</label>
                                        <div class="col-auto">
                                            <input type="text" class="form-control" placeholder="anaula8277@utm.edu.ec"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-3">Numero ID</label>
                                        <div class="col-auto">
                                            <input type="text" class="form-control" placeholder="1316488277" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-3">Ciudad</label>
                                        <div class="col-auto">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-3">Pais</label>
                                        <div class="col-auto ">
                                            <select class="custom-select">
                                                <option selected>Ecuador</option>
                                                <option value="1">Brasil</option>
                                                <option value="2">México</option>
                                                <option value="3">EEUU</option>
                                                <option value="3">etc</option>
                                                <option value="3">otros</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-3">Descripción</label>
                                        <div class="col">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div>
                            <h6 class="font-weight-bold">Imagen del usuario</h6>
                            <div class="row px-1">
                                <div class="col">
                                    <h6>Imagen</h6>
                                    <p>Formatos de imagen aceptados: .gif .jpe .jpeg .jpg .png .svg .svgz</p>
                                </div>
                                <div class="col-auto d-flex align-items-end pl-0">
                                    <svg width="100px" height="100px">
                                        <use xlink:href="../svg/bootstrap-icons.svg#person-badge" />
                                    </svg>
                                    <button class="btn-sm btn-success" data-toggle="collapse" data-target="#ponente"
                                        aria-expanded="true">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="../svg/bootstrap-icons.svg#download" />
                                        </svg>
                                        Renobar
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer py-0">
                        <button type="button" class="btn-sm btn-primary">
                            <svg width="15px" height="15px">
                                <use xlink:href="../svg/bootstrap-icons.svg#arrow-counterclockwise" />
                            </svg>
                            Actualizar información
                        </button>
                        <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">
                            <svg width="15px" height="15px">
                                <use xlink:href="../svg/bootstrap-icons.svg#x-square" />
                            </svg>
                            Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--ventana cambio contraseña-->
        <div class="modal fade" id="cambio-contras">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h6 class="modal-title text-white font-weight-bold">Cambio de contraseña</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="text-white" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group pb-3 border-bottom">
                                <label>Contraseña Actual</label>
                                <div class="form-inline position-relative">
                                    <button class="btn-input an-icon-input-r" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="../svg/bootstrap-icons.svg#eye" />
                                        </svg>
                                    </button>
                                    <input type="text" class="form-control w-100">
                                </div>
                            </div>
                            <p class="pt-0">La contraseña debería tener al menos 8 caracter(es), al menos 1 dígito(s),
                                al menos 1
                                minúscula(s), al menos 1 mayúscula(s), al menos 1 caracter(es) no alfanuméricos como
                                *,-, o # </p>
                            <div class="form-group">
                                <label>Nueva contraseña</label>
                                <div class="form-inline position-relative">
                                    <button class="btn-input an-icon-input-r" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="../svg/bootstrap-icons.svg#eye" />
                                        </svg>
                                    </button>
                                    <input type="password" class="form-control w-100">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Repita la nueva contraseña</label>
                                <div class="form-inline position-relative">
                                    <button class="btn-input an-icon-input-r" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="../svg/bootstrap-icons.svg#eye" />
                                        </svg>
                                    </button>
                                    <input type="password" class="form-control w-100">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-sm btn-primary">
                            <svg width="15px" height="15px">
                                <use xlink:href="../svg/bootstrap-icons.svg#arrow-counterclockwise" />
                            </svg>
                            Cambiar contraseña
                        </button>
                        <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">
                            <svg width="15px" height="15px">
                                <use xlink:href="../svg/bootstrap-icons.svg#x-square" />
                            </svg>
                            Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php') ?>