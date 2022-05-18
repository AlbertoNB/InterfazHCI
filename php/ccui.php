<?php include('head.php') ?>
<main class="space_body content-right">
    <div class="container-md my-3">
        <div id="regreso">
            <div class="mb-3" >
                <button class="btn-sm btn-primary" data-toggle="collapse" data-target="#ponente" aria-expanded="true">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#file-person" />
                    </svg>
                    Ponente
                </button>
                <button class="btn-sm btn-primary" data-toggle="collapse" data-target="#asistente" aria-expanded="true">
                    <svg width="20px" height="20px">
                        <use xlink:href="../svg/bootstrap-icons.svg#person-plus-fill" />
                    </svg>
                    Asistente
                </button>
            </div>
            <div class="bg-white p-2 mb-3 rounded-lg mode-dark1">
                <div class="row d-flex align-items-center">
                    <!-- d-flex align-items-center = centra verticalmente la imagen -->
                    <div class="col-auto pr-0">
                        <svg width="8vw" height="8vw"><!--width="90px" height="90px"-->
                            <use xlink:href="../svg/bootstrap-icons.svg#spca2" />
                        </svg>
                    </div>
                    <div class="col">
                        <h6 class="my-0 py-2 text-center font-weight-bold border-bottom">CONVENCIÓN CIENTÍFICA INTERNACIONAL
                            UTM 202- (CCI-UTM202-)</h6>
                        <h6 class="my-0 py-2 text-center">POR UNA UNIVERSIDAD INCLUSIVA Y SOSTENIBLE <br> DEL
                            -- AL -- DE --------</h6>
                    </div>
                    <div class="col-auto pl-0"> 
                        <img src="../img/Logo_utm.png" style="max-width: 8vw;"/><!--width="90px" height="90px"--> <!--style="height: calc(100vh - 9.8rem);-->
                    </div>
                </div>
            </div>
            <?php include('cc_ponente.php') ?>
            <?php include('cc_asistente.php') ?>

        </div>
        
    </div>
</main>
<?php include('footer.php') ?>