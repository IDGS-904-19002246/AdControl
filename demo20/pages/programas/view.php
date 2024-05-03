<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Datos</title>
    <?php include '../../includes/head.html' ?>
    <link href="../" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../../src/MySrc/listas.css">

</head>

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <?php include '../../includes/navbar.html'; ?>

    <!-- BUSCADOR -->
    <div class="container card my-4">
        <div class="row d-flex justify-content-between align-items-center py-3 py-lg-6">
            <form class="col-sm-6 my-0 d-flex justify-content-end" data-select2-id="select2-data-146-sh2u">
                <h3 class="fw-bold my-2">Productos</h3>
                <input type="text" class="form-control form-control-sm form-control-solid mx-2" placeholder="Buscar">
                <button type="submit" class="btn btn-primary me-5">Buscar</button>
            </form>

            <div class="col-sm-6 d-flex justify-content-end align-items-center">
                <ul class="nav nav-pills me-5" role="tablist">
                    <li class="nav-item m-0" role="presentation">
                        <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                            data-bs-toggle="tab" href="#kt_project_targets_card_pane" aria-selected="true" role="tab">
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
                            href="#kt_project_targets_table_pane" aria-selected="false" role="tab" tabindex="-1">
                            <i class="ki-duotone ki-row-horizontal fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                    </li>
                </ul>

                <form class="my-0 d-flex justify-content-end" data-select2-id="select2-data-146-sh2u">
                    <input type="number" class="form-control form-control-sm form-control-solid mx-2" placeholder="Año">
                    <button type="submit"
                        class="btn btn-sm px-2 btn-icon btn-active-primary btn-primary d-inline-block">
                        <i class="ki-duotone ki-magnifier fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i></button>
                </form>

                <button type="submit" class="btn btn-primary mx-5">Añadir Producto</button>
            </div>


        </div>

    </div>
    <!-- VISTA DE CUADRICULA -->
    <div class="d-none flex-column-fluid container h-50" style="padding:0px !important;">
        <div class="" style="overflow: auto;">
            <?php foreach ($datos as $dato): ?>
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
                                    <a href="#" class="menu-link px-3">Editar</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Dar de baja</a>
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
    </div>

    <!-- VISTA DE LISTA -->
    
    <!-- <div id="kt_content_container" class="d-flex flex-column-fluid container h-50 card card-flush" style="padding:0px !important;">
        <div class="card-body pt-0 w-100">

            <div class="table-responsive">
                <table id="kt_profile_overview_table"
                    class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                    <thead class="fs-7 text-gray-500 text-uppercase">
                        <tr>
                            <th class="min-w-250px">Manager</th>
                            <th class="min-w-150px">Date</th>
                            <th class="min-w-90px">Amount</th>
                            <th class="min-w-90px">Status</th>
                            <th class="min-w-50px text-end">Details</th>
                        </tr>
                    </thead>
                    <tbody class="fs-6">
                        <?php foreach ($datos as $dato): ?>
                        <tr>
                            <td><?php echo $dato['pnombre']; ?></td>
                            <td><?php echo $dato['ptdescripcion']; ?></td>
                            <td><?php echo $dato['pinversion']; ?></td>
                            <td><?php echo $dato['phoras']; ?></td>
                            <td></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div> -->


    <hr>
    <div id="kt_project_targets_table_pane" class="tab-pane fade">
        <div class="card card-flush">
            <div class="card-body pt-3">
                <!--begin::Table-->
                <table id="kt_profile_overview_table"
                    class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                    <thead class="fs-7 text-gray-500 text-uppercase">
                        <tr>
                            <th class="min-w-250px">Target</th>
                            <th class="min-w-90px">Section</th>
                            <th class="min-w-150px">Due Date</th>
                            <th class="min-w-90px">Members</th>
                            <th class="min-w-90px">Status</th>
                            <th class="min-w-50px"></th>
                        </tr>
                    </thead>
                    <tbody class="fs-6">
                        <tr>
                            <td class="fw-bold">
                                <a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a>
                            </td>
                            <td>
                                <span class="badge badge-light fw-semibold me-auto">UI Design</span>
                            </td>
                            <td>Dec 15, 2020</td>
                            <td>
                                <div class="symbol-group symbol-hover fs-8">
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Melody Macy">
                                        <img alt="Pic" src="../../assets/media/avatars/300-2.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="John Mixin">
                                        <img alt="Pic" src="../../assets/media/avatars/300-14.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-light-primary fw-bold me-auto">In Progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                <a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a>
                            </td>
                            <td>
                                <span class="badge badge-light fw-semibold me-auto">Phase 2.6 QA</span>
                            </td>
                            <td>Nov 2, 2020</td>
                            <td>
                                <div class="symbol-group symbol-hover fs-8">
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Robin Watterman">
                                        <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-light-success fw-bold me-auto">Completed</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                <a href="#" class="text-gray-900 text-hover-primary">Sales report page</a>
                            </td>
                            <td>
                                <span class="badge badge-light fw-semibold me-auto">QA</span>
                            </td>
                            <td>Dec 15, 2020</td>
                            <td>
                                <div class="symbol-group symbol-hover fs-8">
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Melody Macy">
                                        <img alt="Pic" src="../../assets/media/avatars/300-2.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Kristen Goodwin">
                                        <img alt="Pic" src="../../assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Mikaela Collins">
                                        <span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-light fw-bold me-auto">Yet to start</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                <a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a>
                            </td>
                            <td>
                                <span class="badge badge-light fw-semibold me-auto">Prototype</span>
                            </td>
                            <td>Jan 25, 2020</td>
                            <td>
                                <div class="symbol-group symbol-hover fs-8">
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Robin Watterman">
                                        <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Brian Cox">
                                        <img alt="Pic" src="../../assets/media/avatars/300-5.jpg" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-light-success fw-bold me-auto">Completed</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                <a href="#" class="text-gray-900 text-hover-primary">Design main Dashboard</a>
                            </td>
                            <td>
                                <span class="badge badge-light fw-semibold me-auto">UI Design</span>
                            </td>
                            <td>Jan 28, 2020</td>
                            <td>
                                <div class="symbol-group symbol-hover fs-8">
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Melody Macy">
                                        <img alt="Pic" src="../../assets/media/avatars/300-2.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Emma Smith">
                                        <img alt="Pic" src="../../assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Lucy Matthews">
                                        <img alt="Pic" src="../../assets/media/avatars/300-21.jpg" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-light-success fw-bold me-auto">Completed</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                <a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a>
                            </td>
                            <td>
                                <span class="badge badge-light fw-semibold me-auto">Development</span>
                            </td>
                            <td>Jun 14, 2020</td>
                            <td>
                                <div class="symbol-group symbol-hover fs-8">
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Francis Mitcham">
                                        <img alt="Pic" src="../../assets/media/avatars/300-20.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Deanna Taylor">
                                        <img alt="Pic" src="../../assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Mikaela Collins">
                                        <span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-light-primary fw-bold me-auto">In Progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                <a href="#" class="text-gray-900 text-hover-primary">To check User Management</a>
                            </td>
                            <td>
                                <span class="badge badge-light fw-semibold me-auto">Pahse 3.2</span>
                            </td>
                            <td>May 9, 2020</td>
                            <td>
                                <div class="symbol-group symbol-hover fs-8">
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Lucy Matthews">
                                        <img alt="Pic" src="../../assets/media/avatars/300-21.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Kristen Goodwin">
                                        <img alt="Pic" src="../../assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Michelle Swanston">
                                        <img alt="Pic" src="../../assets/media/avatars/300-7.jpg" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-light fw-bold me-auto">Yet to start</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                <a href="#" class="text-gray-900 text-hover-primary">Create Roles Module</a>
                            </td>
                            <td>
                                <span class="badge badge-light fw-semibold me-auto">Branding</span>
                            </td>
                            <td>Mar 4, 2020</td>
                            <td>
                                <div class="symbol-group symbol-hover fs-8">
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Michelle Swanston">
                                        <img alt="Pic" src="../../assets/media/avatars/300-7.jpg" />
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Robin Watterman">
                                        <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                    </div>
                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip"
                                        title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-light fw-bold me-auto">Yet to start</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
        </div>
    </div>

    <?php include '../../includes/footer.html' ?>
    <?php include '../../includes/scripts.html' ?>
</body>

</html>

<!-- <script src="../../assets/js/scripts.bundle.js"></script>
<script src="../../assets/plugins/global/plugins.bundle.js"></script>

		<script src="../../assets/plugins/custom/datatables/datatables.bundle.js"></script>



<script src="../../assets/js/custom/apps/projects/targets/targets.js"></script>
		<script src="../../assets/js/widgets.bundle.js"></script>
		<script src="../../assets/js/custom/widgets.js"></script>
		<script src="../../assets/js/custom/apps/chat/chat.js"></script>
		<script src="../../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="../../assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="../../assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="../../assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="../../assets/js/custom/utilities/modals/new-target.js"></script> -->