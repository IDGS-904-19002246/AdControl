<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Datos</title>
    <?php include '../includes/head.html' ?>
    <link href="../" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/MySrc/listas.css">

</head>

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <?php include '../includes/navbar.html'; ?>

    <!-- BUSCADOR -->
    <div class="container card my-4">
        <div class="row d-flex justify-content-between align-items-center py-3 py-lg-6">
            <form id="buscador" method="post" action="index.php" class="col-sm-6 my-0 d-flex justify-content-end"
                data-select2-id="select2-data-146-sh2u">
                <input type="hidden" value="search" onlyread name="action">
                <h3 class="fw-bold my-2">Productos </h3>
                <input type="text" class="form-control form-control-sm form-control-solid mx-2" placeholder="Buscar"
                    name="nombre">
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
            <?php foreach ($data as $dato): ?>
                <div class="d-inline-block MyTarjet" style="">

                    <div class="card p-4 pb-0">
                        <div class="d-flex flex-stack mb-3">
                            <div class="badge badge-light"><?php echo $dato['ptdescripcion']; ?></div>
                            <div>
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-element-plus fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Ver detalles</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <span class="menu-link px-3 btn-abrir-modal" data-bs-toggle="modal"
                                            data-bs-target="#editar"
                                            data-to-form='<?php echo json_encode($dato); ?>'>Editar</span>
                                    </div>
                                    <div class="menu-item px-3">
                                        <span class="menu-link px-3 btn-delete-modal"
                                            data-to-form='<?php echo $dato['pid']; ?>'>Dar de baja</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="bg-primary pb-1 mb-4"></div>
                        <h3 class="text-truncate"><?php echo $dato['pnombre']; ?></h3>
                        <div class="fs-6 fw-semibold text-gray-600 mb-5">
                            <span class="MyTextTruncate">
                                <?php echo $dato['presumen']; ?>
                            </span>
                        </div>

                        <div class="d-flex justify-content-end mb-2">
                            <p class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3 m-1"
                                title="Inversion">
                                <i class="ki-duotone ki-paper-clip fs-3"></i>
                                <span class="ms-1 fs-7 fw-bold text-gray-600"><?php echo $dato['pinversion']; ?></span>
                            </p>
                            <p class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3 m-1">
                                <i class="ki-duotone ki-paper-clip fs-3"></i>
                                <span class="ms-1 fs-7 fw-bold text-gray-600"><?php echo $dato['phoras']; ?> Hrs.</span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- VISTA DE LISTA -->

        <div id="kt_project_targets_card_pane" class="tab-pane h-100 fade" style="overflow: auto;">
            <div class="card">
                <div class="card-body pt-0 w-100">

                    <div class="table-responsive">
                        <table id="kt_profile_overview_table"
                            class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                            <thead class="fs-7 text-gray-500 text-uppercase">
                                <tr>
                                    <th class="min-w-250px">Nombre</th>
                                    <th class="min-w-150px">Descripción</th>
                                    <th class="min-w-90px">Inversión</th>
                                    <th class="min-w-90px">Horas</th>
                                    <th class="min-w-50px text-end">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="fs-6">
                                <?php foreach ($data as $dato): ?>
                                    <tr>
                                        <td><?php echo $dato['pnombre']; ?></td>
                                        <td><?php echo $dato['ptdescripcion']; ?></td>
                                        <td><?php echo $dato['pinversion']; ?></td>
                                        <td><?php echo $dato['phoras']; ?></td>
                                        <td>

                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-icon btn-color-light-dark btn-active-light-primary float-end"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-element-plus fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                data-kt-menu="true">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Ver detalles</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <span class="menu-link px-3 btn-abrir-modal" data-bs-toggle="modal"
                                                        data-bs-target="#editar"
                                                        data-to-form='<?php echo json_encode($dato); ?>'>Editar</span>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <span class="menu-link px-3 btn-delete-modal"
                                                        data-to-form='<?php echo $dato['pid']; ?>'>Dar de baja</span>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <hr>

    <?php include '../modals/programas/insert.php' ?>
    <?php include '../modals/programas/update.php' ?>
    <?php include '../includes/footer.html' ?>
    
    <form action="index.php" id="delete" method="POST">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="pid" value="0">
    </form>

    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>

    <script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <script src="../assets/js/custom/apps/projects/targets/targets.js"></script>
    <script src="../assets/js/widgets.bundle.js"></script>
    <script src="../assets/js/custom/widgets.js"></script>
    <script src="../assets/js/custom/apps/chat/chat.js"></script>
    <script src="../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="../assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="../assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="../assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="../assets/js/custom/utilities/modals/new-target.js"></script>
</body>

</html>
<script>
    const btnAbrirModal = document.querySelectorAll('.btn-abrir-modal');
    const btnDeleteModal = document.querySelectorAll('.btn-delete-modal');

    const forms_delete = $('#delete');
    const forms_insert = $('#kt_modal_create_app_form3');
    const insert_button = $('#insert_button')[0];
    const forms_update = $('#kt_modal_create_app_form2');
    const update_button = $('#update_button')[0];

    btnAbrirModal.forEach(btn => {
        btn.addEventListener('click', () => {
            const object = btn.getAttribute('data-to-form');
            var json = JSON.parse(object);

            forms_update.find('.form-control[name="name"]').val(json.pnombre);
            forms_update.find('.form-control[name="shortname"]').val(json.pnombrecorto);
            forms_update.find('.form-control[name="titlename"]').val(json.pnombrediploma);
            forms_update.find('.form-control[name="public"]').val(json.pdirigidoa);
            forms_update.find('.form-control[name="slogan"]').val(json.pslogan);
            forms_update.find('.form-control[name="level"]').val(json.pnivel);
            forms_update.find('.form-control[name="type"]').val(json.ptid);
            forms_update.find('.form-control[name="resume"]').val(json.presumen);
            forms_update.find('.form-control[name="requeriments"]').val(json.prequisitos);
            forms_update.find('input[name="pid"]').val(json.pid);
        });
    });

    btnDeleteModal.forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.getAttribute('data-to-form');
            forms_delete.find('input[name="pid"]').val(id);

            Swal.fire({
                title: "¿Esta seguro de dar de baja este elemento?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar"
            }).then((result) => {

                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Elemento eliminado",
                        icon: "success"
                    });
                    forms_delete.submit();
                }

            });
        });
    });

    insert_button.addEventListener('click', () => {
        Swal.fire({
            title: 'Esta seguro de guardar este programa?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, Guardar"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Elemento guardado",
                    icon: "success"
                });
                forms_insert.submit();
            }
        });
    });
    update_button.addEventListener('click', () => {
        Swal.fire({
            title: 'Esta seguro de guardar los cambios?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, Guardar"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Elemento guardado",
                    icon: "success"
                });
                forms_update.submit();
            }
        });
    });

</script>