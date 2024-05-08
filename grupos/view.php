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

    <div class="tab-content container h-75" style="padding:0px !important;">

        <!-- VISTA DE CUADRICULA -->
    </div>

    <hr>
    <div class="card card-flush mt-6 mt-xl-9">

        <div class="card-header mt-5">
            <div class="card-toolbar w-100 my-1">
                <div class="d-none">
                    <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true"
                        class="w-125px form-select form-select-solid form-select-sm">
                    </select>
                    <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true"
                        class="w-125px form-select form-select-solid form-select-sm"></select>
                </div>

                <div class="d-flex align-items-center position-relative my-1 w-100">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" id="kt_filter_search"
                        class="form-control form-control-solid form-select-sm w-100 ps-9" placeholder="Search Order" />
                </div>
            </div>
        </div>


        <div class="card-body pt-0">
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

                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="me-5 position-relative">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                        <div class="fw-semibold text-gray-500">smith@kpmg.com</div>
                                    </div>
                                </div>
                            </td>

                            <td>May 05, 2024</td>
                            <td>$538.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <button
                                    class="btn btn-primary btn-sm btn-color-light-dark btn-active-light-primary float-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    Acciones
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
                                        <span class="menu-link px-3 btn-abrir-modal" data-bs-toggle="modal"
                                            data-bs-target="#editar"
                                            data-to-form=''>Editar</span>
                                    </div>
                                    <div class="menu-item px-3">
                                        <span class="menu-link px-3 btn-delete-modal"
                                            data-to-form=''>Dar de baja</span>
                                    </div>
                                </div>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <?php include '../includes/footer.html' ?>
    <!-- ?php include '../includes/scripts.html' ?> -->
    
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
		<script src="../assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="../assets/js/custom/apps/projects/project/project.js"></script>
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