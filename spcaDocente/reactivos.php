<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3 ">
        <div id="regreso-reactivos">
            <button class="btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#mis-reactivos" aria-expanded="true">
                <svg width="20px" height="20px">
                    <use xlink:href="../svg/bootstrap-icons.svg#archive-fill" />
                </svg>
                Mis reactivos
            </button>
            <button class="btn-sm btn-primary" type="button">
                <svg width="20px" height="20px">
                    <use xlink:href="../svg/bootstrap-icons.svg#archive-fill" />
                </svg>
                Mis revisiones
            </button>
            <?php include('reactivos-reactivos.php') ?>
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm mode-dark1">
            <h6 class="border-bottom pb-2 mb-0 font-weight-bold">Otro tema</h6>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>

                <div class="media-body pb-3 mb-0 small lh-125 border-bottom ">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                </div>
            </div>


            <small class="d-block text-right mt-3">
                <a href="#">All suggestions</a>
            </small>
        </div>
    </div>
</main>

<?php include('footer.php') ?>