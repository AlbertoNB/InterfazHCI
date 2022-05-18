<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3">
        <div class=" mx-0 row d-flex align-items-center p-2 bg-secondary text-light shadow-sm rounded-top mode-dark4">
            <div class="col pl-1">
                <div class="d-flex justify-content-between w-100">
                    <h4 class="mb-0 text-small">Tema del foro #</h4>
                </div>
            </div>
            <div class="col p-0">
                <button class="btn btn-success btn-sm pt-0" href="#" role="button" data-toggle="modal" data-target="#ventanaforo-t">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#badge-tm" />
                    </svg>
                </button>
            </div>
            <div class="col-auto p-0">
                <a class="btn btn-success btn-sm pt-0" href="chat_academico.php" role="button">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#reply" />
                    </svg>
                </a>
            </div>
        </div>
        <!--height: 60vh
                max-height: calc(100vh - 13rem)
            -->
        <div class="p-2 alert-dark shadow-sm rounded-bottom mode-dark1 overflow-auto scroll-decor" style="height: calc(100vh - 9.8rem);">
            <div class="ml-3 mr-2">
                <div class="media">
                    <img src="..." class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="">Media heading</h5>
                        <p class="p-0 m-0">Standing on the frontline when the bombs start to fall. Heaven is jealous of our love, angels are
                            crying from up above. Can't replace you with a million rings. Boy, when you're with me I'll give
                            you a taste. There’s no going back. Before you met me I was alright but things were kinda heavy.
                            Heavy is the head that wears the crown.
                            <a class="text-right d-block small" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                Responder
                            </a>
                        </p>
                        <div class="collapse p-0 m-0" id="collapse1">
                            <div class="card card-body">
                                <form class="">
                                    <div class=" mb-1 form-group">
                                        <!--<label class="text-dark">temade</label>-->
                                        <input type="text" class="form-control" placeholder="Tema del comentario">
                                    </div>
                                    <div class="row">
                                        <div class="col pr-1">
                                            <div class="mb-0 form-group">
                                                <textarea class="form-control" rows="3" placeholder="Contexto del comentario"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-auto pl-1 d-flex align-items-end">
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <svg width="26px" height="26px">
                                                    <use xlink:href="../svg/bootstrap-icons.svg#symmetry-horizontal" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="overflow-auto mb-0 scroll-decor" style="height: 250px; scrollbar-width: thin;">
                            <div class="media mt-3">
                                <a class="mr-3" href="#">
                                    <img src="..." alt="...">
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    <p>Greetings loved ones let's take a journey. Yes, we make angels cry, raining down on
                                        earth
                                        from up above. Give you something good to celebrate. I used to bite my tongue and
                                        hold
                                        my breath. I'm ma get your heart racing in my skin-tight jeans.
                                        <a class="text-right d-block small" data-toggle="collapse" href="#collapse2" aria-expanded="false">
                                            Responder
                                        </a>
                                    </p>
                                    <div class="collapse p-0 m-0" id="collapse2">
                                        <div class="card card-body">
                                            <form class="">
                                                <div class=" mb-1 form-group">
                                                    <!--<label class="text-dark">temade</label>-->
                                                    <input type="text" class="form-control" placeholder="Tema del comentario">
                                                </div>
                                                <div class="row">
                                                    <div class="col pr-1">
                                                        <div class="mb-0 form-group">
                                                            <textarea class="form-control" rows="3" placeholder="Contexto del comentario"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto pl-1 d-flex align-items-end">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            <svg width="26px" height="26px">
                                                                <use xlink:href="../svg/bootstrap-icons.svg#symmetry-horizontal" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mt-0">
                                <a class="mr-3" href="#">
                                    <img src="..." alt="...">
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    <p>Greetings loved ones let's take a journey. Yes, we make angels cry, raining down on
                                        earth
                                        from up above. Give you something good to celebrate. I used to bite my tongue and
                                        hold
                                        my breath. I'm ma get your heart racing in my skin-tight jeans.
                                        <a class="text-right d-block small" data-toggle="collapse" href="#collapse3" aria-expanded="false">
                                            Responder
                                        </a>
                                    </p>
                                    <div class="collapse p-0 m-0" id="collapse3">
                                        <div class="card card-body">
                                            <form class="">
                                                <div class=" mb-1 form-group">
                                                    <!--<label class="text-dark">temade</label>-->
                                                    <input type="text" class="form-control" placeholder="Tema del comentario">
                                                </div>
                                                <div class="row">
                                                    <div class="col pr-1">
                                                        <div class="mb-0 form-group">
                                                            <textarea class="form-control" rows="3" placeholder="Contexto del comentario"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto pl-1 d-flex align-items-end">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            <svg width="26px" height="26px">
                                                                <use xlink:href="../svg/bootstrap-icons.svg#symmetry-horizontal" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <img src="..." class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="">Media heading</h5>
                        <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's
                            beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me.
                            Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.
                            <a class="text-right d-block small" data-toggle="collapse" href="#collapse5" aria-expanded="false">
                                Responder
                            </a>
                        </p>
                        <div class="collapse p-0 m-0" id="collapse5">
                            <div class="card card-body">
                                <form class="">
                                    <div class=" mb-1 form-group">
                                        <!--<label class="text-dark">temade</label>-->
                                        <input type="text" class="form-control" placeholder="Tema del comentario">
                                    </div>
                                    <div class="row">
                                        <div class="col pr-1">
                                            <div class="mb-0 form-group">
                                                <textarea class="form-control" rows="3" placeholder="Contexto del comentario"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-auto pl-1 d-flex align-items-end">
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <svg width="26px" height="26px">
                                                    <use xlink:href="../svg/bootstrap-icons.svg#symmetry-horizontal" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <img src="..." class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's
                            beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me.
                            Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.
                            <a class="text-right d-block small" data-toggle="collapse" href="#collapse6" aria-expanded="false">
                                Responder
                            </a>
                        </p>
                        <div class="collapse p-0 m-0" id="collapse6">
                            <div class="card card-body">
                                <form class="">
                                    <div class=" mb-1 form-group">
                                        <!--<label class="text-dark">temade</label>-->
                                        <input type="text" class="form-control" placeholder="Tema del comentario">
                                    </div>
                                    <div class="row">
                                        <div class="col pr-1">
                                            <div class="mb-0 form-group">
                                                <textarea class="form-control" rows="3" placeholder="Contexto del comentario"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-auto pl-1 d-flex align-items-end">
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <svg width="26px" height="26px">
                                                    <use xlink:href="../svg/bootstrap-icons.svg#symmetry-horizontal" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <img src="..." class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0">Media heading</h5>
                        <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's
                            beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me.
                            Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.
                            <a class="text-right d-block small" data-toggle="collapse" href="#collapse7" aria-expanded="false">
                                Responder
                            </a>
                        </p>
                        <div class="collapse p-0 m-0" id="collapse7">
                            <div class="card card-body">
                                <form class="">
                                    <div class=" mb-1 form-group">
                                        <!--<label class="text-dark">temade</label>-->
                                        <input type="text" class="form-control" placeholder="Tema del comentario">
                                    </div>
                                    <div class="row">
                                        <div class="col pr-1">
                                            <div class="mb-0 form-group">
                                                <textarea class="form-control" rows="3" placeholder="Contexto del comentario"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-auto pl-1 d-flex align-items-end">
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <svg width="26px" height="26px">
                                                    <use xlink:href="../svg/bootstrap-icons.svg#symmetry-horizontal" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Ventana de respuestas a foro-->
    <div class="modal fade" id="ventanaforo-t">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-primary py-2">
                    <h6 class="modal-title text-white">
                        Subtema de foro
                    </h6>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Crear subtema de foro</label>
                            <input type="email" class="form-control" placeholder="Subtema de foro">
                        </div>
                        <div class="form-group">
                            <label>Contexto del subtema</label>
                            <textarea class="form-control" placeholder="Contexto" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer py-0">
                    <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn-sm btn-primary">Crear subtema</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php') ?>