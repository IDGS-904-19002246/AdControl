<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Datos</title>
    <?php include '../../includes/head_sub.html' ?>
    <link href="../../" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../../src/MySrc/listas.css">

</head>

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <?php include '../../includes/navbar.html'; ?>

    <!-- BUSCADOR -->
    <div class="container card my-4">
        <div class="row d-flex justify-content-between align-items-center py-3 py-lg-6">
            <form id="buscador" method="post" action="index.php" class="col-sm-6 my-0 d-flex justify-content-end"
                data-select2-id="select2-data-146-sh2u">
                <input type="hidden" value="search" onlyread name="action">
                <h3 class="fw-bold my-2">Productos </h3>
                <input type="text" class="form-control form-control-sm form-control-solid mx-2"
                    placeholder="Nombre a buscar . . ." name="nombre">
                <button form="buscador" type="submit" class="btn btn-primary me-5">Buscar</button>
            </form>

            <div class="col-sm-6 d-flex justify-content-end align-items-center">
                <ul class="nav nav-pills me-5" role="tablist">
                    <li class="nav-item m-0" role="presentation">
                        <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                            data-bs-toggle="tab" href="#kt_project_targets_table_pane" aria-selected="true" role="tab">
                            <i class="ki-duotone ki-element-plus fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab"
                            href="#kt_project_targets_card_pane" aria-selected="false" role="tab" tabindex="-1">
                            <i class="ki-duotone ki-row-horizontal fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                    </li>
                </ul>

                <button type="button" class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#nuevo">Añadir
                    Producto</button>
            </div>


        </div>
    </div>
    <div class="tab-content container h-75" style="padding:0px !important;">

        <!-- VISTA DE CUADRICULA -->
        <div id="kt_project_targets_table_pane" class="tab-pane h-100 fade show active" style="overflow: auto;">
            <span>Detalles UWU</span>
        </div>

    </div>
    <hr>
    <!-- ?php include 'modals/insert.php' ?>
    ?php include 'modals/update.php' ?> -->
    <?php include '../../includes/footer.html' ?>

    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>

    <script src="../../assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <script src="../../assets/js/custom/apps/projects/targets/targets.js"></script>
    <script src="../../assets/js/widgets.bundle.js"></script>
    <script src="../../assets/js/custom/widgets.js"></script>
    <script src="../../assets/js/custom/apps/chat/chat.js"></script>
    <script src="../../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="../../assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="../../assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="../../assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="../../assets/js/custom/utilities/modals/new-target.js"></script>
</body>
</html>