<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Datos</title>
    <?php include '../../includes/head_sub.html' ?>
    <link rel="stylesheet" type="text/css" href="../../src/MySrc/listas.css">
</head>

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <?php include '../../includes/navbar.html'; ?>
    <!-- BUSCADOR -->
    <div class="container card my-4">
        <div class="row d-flex justify-content-between align-items-center py-3 py-lg-6">
            <form id="buscador" method="post" action="index.php" class="col-sm-12 my-0"
                data-select2-id="select2-data-146-sh2u">
                <input type="hidden" value="search" onlyread name="action">

                <h3 class="fw-bold my-2">Administrador de Grupos Terminados</h3>

                <div class="d-flex justify-content-end">
                    <input type="text" class="form-control form-control-sm form-control-solid"
                        placeholder="Nombre a buscar/id . . ." name="nombre">
                    <button form="buscador" type="submit" class="btn btn-primary mx-4">Buscar</button>
                </div>
            </form>

        </div>
    </div>
    <!-- CONTAINER DATATABLE -->
    <div class="tab-content container h-75" style="padding:0px !important;">

        <div class="card h-100">

            <div class="card-header mt-5 ">
                <div class="card-toolbar w-100 my-1">
                    <div class="d-none">
                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true"
                            class="w-125px form-select form-select-solid form-select-sm">
                        </select>
                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true"
                            class="w-125px form-select form-select-solid form-select-sm"></select>
                    </div>

                    <!-- <h3 class="fw-bold my-2">Administrador de Grupos</h3> -->

                    <div class="d-flex align-items-center position-relative my-1 w-100">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" id="kt_filter_search"
                            class="form-control form-control-solid form-select-sm w-100 ps-9"
                            placeholder="Busqueda rapida . . ." />
                    </div>
                </div>
            </div>

            <div class="card-body pt-0 h-75">
                <div class="table-responsive h-100">
                    <!-- DATATABLE -->
                    <table id="kt_profile_overview_table"
                        class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                        <thead class="fs-7 text-gray-500 text-uppercase">
                            <tr class="align-middle">
                                <th class="min-w-200px">Nombre</th>
                                <th class="text-center min-w-50px">Capacidad</th>
                                <th class="text-center">Sesiones</th>
                                <th class="text-center">Horas por sesion</th>
                                <th class="text-center">Intensivo</th>
                                <th class="text-center min-w-150px">Fechas</th>
                                <th class="text-center min-w-100px">Pagos</th>
                                <th class="text-center min-w-100px">Acciones</th>
                            </tr>
                        </thead>

                        <tbody class="fs-6" style="overflow: auto;">
                            <?php foreach ($data as $dato): ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-5 position-relative">
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="../../assets/img/gfoto_grupo/<?php echo ($dato['gfoto_grupo'] != '' ? $dato['gfoto_grupo'] : 'group_icon.png' ); ?>" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <span
                                                class="fs-6 text-gray-800 text-hover-primary"><?php echo $dato['pnombre']; ?>

                                            </span>
                                            <div class="fw-semibold text-gray-500"><?php echo $dato['gciudad']; ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-light fw-semibold me-auto">
                                        <?php echo $dato['gcapacidad']; ?> Personas
                                    </span>
                                </td>
                                <td class="text-center">
                                    <?php echo $dato['gsesionesimpartidas'].'/'.$dato['gsesiones']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $dato['ghrs_sesion']; ?> Hrs.
                                </td>
                                <td class="text-center">
                                    <span
                                        class="badge badge-light fw-semibold me-auto"><?php echo ($dato['gintensivo'] == 1 ?'Sí':'No'); ?></span>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm btn-color-light-dark btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Ver Fechas
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-400px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3"><span class="menu-link px-3">Inicio:
                                                <?php echo ($dato['gf_inicio']??'Sin Fecha'); ?></span></div>
                                        <div class="menu-item px-3"><span class="menu-link px-3">Inicio publicidad:
                                                <?php echo ($dato['gf_inicio_publicidad']??'Sin Fecha'); ?></span></div>
                                        <div class="menu-item px-3"><span class="menu-link px-3">Termino publicidad:
                                                <?php echo ($dato['gf_termino_publicidad']??'Sin Fecha'); ?></span>
                                        </div>
                                        <div class="menu-item px-3"><span class="menu-link px-3">Inicio venta:
                                                <?php echo ($dato['gf_inicio_venta']??'Sin Fecha'); ?></span></div>
                                        <div class="menu-item px-3"><span class="menu-link px-3">Inicio cierre:
                                                <?php echo ($dato['gf_inicio_cierre']??'Sin Fecha'); ?></span></div>
                                        <div class="menu-item px-3"><span class="menu-link px-3">Termino:
                                                <?php echo ($dato['gf_termino']??'Sin Fecha'); ?></span></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm btn-color-light-dark btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Ver Info
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-400px py-3"
                                        data-kt-menu="true">

                                        <div class="menu-item px-3"><span class="menu-link px-3">Precio:
                                                $<?php echo ($dato['gprecio'] ?? '0'); ?></span></div>
                                        <div class="menu-item px-3"><span class="menu-link px-3">Precio con tarjeta:
                                                $<?php echo ($dato['gpreciotarjeta']??'0'); ?></span></div>
                                        <div class="menu-item px-3"><span class="menu-link px-3">Precio al contado:
                                                $<?php echo ($dato['gpreciocontado']??'0'); ?></span></div>
                                        <?php if($dato['gcuantospagos'] != 0):?>
                                        <hr>
                                        <div class="menu-item px-3"><span
                                                class="menu-link px-3"><?php echo $dato['gcuantospagos']; ?> Pagos de
                                                $<?php echo $dato['gmontopagos']; ?></span></div>
                                        <div class="menu-item px-3"><span class="menu-link px-3">Pago inicial:
                                                $<?php echo ($dato['gpagoinicial']??'0'); ?></span></div>
                                        <?php endif ?>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-primary mx-5 btn-insert-modal"
                                    data-bs-toggle="modal"
                                                data-bs-target="#nuevo"
                                        data-to-form='<?php echo $dato['gid']; ?>'>
                                        Ver Alumnos
                                    </button>
                                </td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <form action="index.php" id="delete" method="POST">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="id" value="0">
    </form>
    <form action="index.php" id="update_status" method="POST">
        <input type="hidden" name="action" value="update_status">
        <input type="hidden" name="status" value="0">
        <input type="hidden" name="id" value="0">
    </form>
    <hr>
    <?php include '../../includes/footer.html' ?>
    <?php include 'modals/insert.php' ?>


    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>

    <script src="../../assets/plugins/custom/datatables/datatables.bundle.js"></script>


    <script src="../../assets/js/custom/apps/projects/project/project.js"></script>
    <script src="../../assets/js/widgets.bundle.js"></script>
    <script src="../../assets/js/custom/widgets.js"></script>
    <script src="../../assets/js/custom/apps/chat/chat.js"></script>
    <script src="../../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="../../assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="../../assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="../../assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="../../assets/js/custom/utilities/modals/new-target.js"></script>

    <!-- ?php include 'modals/update.php' ?> -->
</body>

</html>
<script src="../../src/MySrc/update.status.js"></script>