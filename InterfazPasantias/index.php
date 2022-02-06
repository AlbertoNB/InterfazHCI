<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/utm_bootstrap.css">
    <link rel="stylesheet" href="../css2/detalles.css">
    <link rel="stylesheet" href="../respaldo/navbar-utm.css">
    <link rel="stylesheet" href="../respaldo/boton-dinamico.css">
    <title>index</title>
</head>

<body class="d-flex flex-column h-100 bg-light">
    <?php include('sidebar.php') ?>
    <?php include('bt_ability.php') ?>

    <head>
        <nav class="navbar navbar-expand-md navbar-utm bg-primary shadow-sm fixed-top">
           <!-- <button type="button" class="btn btn-primary sidebarCollapse btn-sm">
                <svg width="20px" height="20px" fill="currentColor">
                    <use xlink:href="../svg/bootstrap-icons.svg#list" />
                </svg>
            </button>-->
            <a class="navbar-brand card mode-dark3 p-0 mr-0" href="index.php">
                <div class="col-auto d-flex align-items-center pr-1">
                    <svg width="53px" height="53px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#sppv" />
                    </svg>
                    <div class="collapse navbar-collapse">
                        <table class="d-inline my-0" style="line-height: 7%;">
                            <tr>
                                <td>
                                    <h4 class="font-weight-bold my-0" style="line-height: 80%; color: #f8ca25;">SPPV</h4>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="font-weight-bold text-primary" style="font-size: 7px;">Sistema de
                                        práctica <br> preprofecional, <br>
                                        pasantía y vinculación</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler bg-warning px-1" type="button" data-toggle="collapse" data-target="#navbarPracticas" aria-controls="navbarPracticas" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="20px" height="20px" fill="currentColor">
                    <use xlink:href="../svg/bootstrap-icons.svg#list" />
                </svg>
            </button>

            <div class="navbar-collapse collapse" id="navbarPracticas">
                <div class="navbar-nav my-1">
                    <button class="btn-sm btn-color1 font-weight-bold m-1" style=" width: 110px" href="" data-toggle="collapse" data-target="#nav-pasantia" aria-expanded="false" title="Módulo de pasantías">
                        Pasantias!
                    </button>
                    <button class="btn-sm btn-color2 font-weight-bold m-1" style=" width: 110px" href="" data-toggle="collapse" data-target="#nav-vinculacion" aria-expanded="true" title="Módulo de vinculación">
                        Vinculación!
                    </button>
                    <div id="pasantiaVinculacionNav">
                        <div class="collapse navbar-nav" id="nav-vinculacion" data-parent="#pasantiaVinculacionNav"><!--show -->
                            <a class="nav-link btn text-left" href="index.php">
                                <svg width="15px" height="15px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#house-fill" />
                                </svg>
                                <b>Inicio</b> 
                            </a>
                            <a class="nav-link btn text-left" href="" data-toggle="collapse" data-target="#inscripcion" aria-expanded="true" title="Inscribirse en vinculación ">
                                <svg width="15px" height="15px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#pencil-square" />
                                </svg>
                                <b>Inscripciones</b>
                            </a>
                            <a class="nav-link btn text-left" href="" data-toggle="collapse" data-target="#gestor" aria-expanded="false" title="Gestor de proyectos">
                                <svg width="15px" height="15px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#journal-text" />
                                </svg>
                                <b>Gestor</b>
                            </a>
                            <a class="nav-link btn text-left" href="" data-toggle="collapse" data-target="#guia" aria-expanded="false" title="Guías de informes (Vinculación)">
                                <svg width="15px" height="15px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#list-ol" />
                                </svg>
                                <b>Guías</b>
                            </a>
                        </div>
                        <div class="collapse navbar-nav" id="nav-pasantia" data-parent="#pasantiaVinculacionNav">
                            <a class="nav-link btn text-left" href="index.php">
                                <svg width="15px" height="15px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#house-fill" />
                                </svg>
                                <b>Inicio</b>
                            </a>
                            <a class="nav-link btn text-left" href="" data-toggle="modal" data-target="#target-solicitar-p" title="Solicitar pasantía">
                                <!--data-toggle="collapse" data-target="#solicitar-p" aria-expanded="true"-->
                                <svg width="15px" height="15px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#pencil-square" />
                                </svg>
                                <b>Solicitar</b>
                            </a>
                            <a class="nav-link btn text-left" href="" data-toggle="collapse" data-target="#gestor-p" aria-expanded="true" title="Gestor de pasantía">
                                <!--aria-expanded="false"-->
                                <svg width="15px" height="15px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#journal-text" />
                                </svg>
                                <b>Gestor</b>
                            </a>
                            <a class="nav-link btn text-left" href="" data-toggle="collapse" data-target="#guia-p" aria-expanded="false" title="Guías de informes (Pasantia)">
                                <svg width="15px" height="15px">
                                    <use xlink:href="../svg/bootstrap-icons.svg#list-ol" />
                                </svg>
                                <b>Guías</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <a class="me-2 text-decoration-none">
                    <button class="switch" title="Modo oscuro">
                        <span>
                            <svg class="mb-1" width="13px" height="13px">
                                <use xlink:href="../svg/bootstrap-icons.svg#sun-fill" />
                            </svg>
                        </span>
                        <span>
                            <svg class="mb-1" width="13px" height="13px">
                                <use xlink:href="../svg/bootstrap-icons.svg#moon-fill" />
                            </svg>
                        </span>
                    </button>
                </a>
                <a class="text-light text-decoration-none me-2" href="" title="Notificaciones">
                    <svg class="bi" width="20px" height="20px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#bell" />
                    </svg>
                </a>
                <a class="text-light text-decoration-none dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Área personal">
                    <svg class="bi" width="40px" height="40px" fill="currentColor">
                        <use xlink:href="../svg/bootstrap-icons.svg#person-circle" />
                    </svg>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ventana_rol">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#person-badge" />
                        </svg>
                        Rol
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#nav-pasantia">
                        <!--aria-expanded="false"-->
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#briefcase" />
                        </svg>
                        Pasantias!
                    </a>
                    <a class="dropdown-item" href="#" data-toggle="collapse" data-target="#nav-vinculacion">
                        <!--aria-expanded="true"-->
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#people" />
                        </svg>
                        Vinculación!
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#journal-medical" />
                        </svg>
                        Manual de usuario
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <svg class="bi" width="20px" height="20px" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#box-arrow-right" />
                        </svg>
                        Cerrar sesión
                    </a>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="ventana_rol">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header pb-1">
                        <h6 class="font-weight-bold ">
                            Cambiar de ROL
                        </h6>
                        <button type="button" class="close pt-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="font-weight-bold">Estimado usuario(a)</h6>
                        <p class="mb-2"> Seleccione uno de los roles que estén asociados a su cuenta,
                            para mostrar las opciones de menú correspondientes. Recuerde
                            que para Coordinadores, Vicedecanos, Decanos y Directores se
                            debe seleccionar la entidad a la que pertence su cargo.
                        </p>
                        <h6 class="font-weight-bold">Iniciar como</h6>
                        <div class="form-group mb-0">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Estudiante</option>
                                <option>Docente</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn-sm btn-primary">
                            <svg width="15px" height="15px">
                                <use xlink:href="../svg/bootstrap-icons.svg#signpost-2-fill" />
                            </svg>
                            Cambiar</button>
                    </div>
                </div>
            </div>
        </div>
    </head>
    <main class="space_body content-right">
        <div id="pasantiaVinculacionCont">
            <?php include('home.php') ?>
            <?php include('vinculacion.php') ?>
            <?php include('pasantia.php') ?>
        </div>
    </main>
    <footer class="mt-auto bg-dark pt-3 content-right">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm">
                    <h5 class="text-white">Mantente en Contacto</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a class="link-secondary text-decoration-none" href="http://utm.edu.ec ">
                                <svg class="bi" width="1rem" height="1rem" fill="currentColor">
                                    <use xlink:href="../svg/bootstrap-icons.svg#globe2" />
                                </svg>
                                http://utm.edu.ec
                            </a>
                        </li>
                        <p class="text-secondary mb-0">
                            <svg class="bi" width="1rem" height="1rem" fill="currentColor">
                                <use xlink:href="../svg/bootstrap-icons.svg#telephone" />
                            </svg>
                            (+593) 984 692 220
                        </p>
                        <p class="text-secondary mb-0">
                            <svg class="bi" width="1rem" height="1rem" fill="currentColor">
                                <use xlink:href="../svg/bootstrap-icons.svg#envelope" />
                            </svg>
                            spca@utm.edu.ec
                        </p>
                    </ul>
                </div>

                <div class="col-sm mb-2">
                    <a class="link-secondary text-decoration-none me-2" href="https://www.facebook.com/utmmanabi" title="facebook">
                        <svg class="bi" width="2rem" height="2rem" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#facebook" />
                        </svg>
                    </a>
                    <a class="link-secondary text-decoration-none me-2" href="https://www.youtube.com/user/UTMManabi" title="youtube">
                        <svg class="bi" width="2rem" height="2rem" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#youtube" />
                        </svg>
                    </a>
                    <a class="link-secondary text-decoration-none me-2" href="https://twitter.com/UTMManabi?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" title="twitter">
                        <svg class="bi" width="2rem" height="2rem" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#twitter" />
                        </svg>
                    </a>
                    <a class="link-secondary text-decoration-none me-2" href="https://www.instagram.com/utmmanabii/?hl=es" title="instagram">
                        <svg class="bi" width="2rem" height="2rem" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#instagram" />
                        </svg>
                    </a>
                    <a class="link-secondary text-decoration-none me-2" href="https://chat.whatsapp.com/Jo4ZtrWQSNK6pXVjsxkrZk" title="whatsapp">
                        <svg class="bi" width="2rem" height="2rem" fill="currentColor">
                            <use xlink:href="../svg/bootstrap-icons.svg#whatsapp" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js2/cambios.js"></script>
</body>

</html>