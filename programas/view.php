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
            <form id="buscador" method="post" action="index.php?search=active"
                class="col-sm-6 my-0 d-flex justify-content-end" data-select2-id="select2-data-146-sh2u">
                <input type="hidden" value="action" onlyread name="action">
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

                <!-- <form class="my-0 d-flex justify-content-end" data-select2-id="select2-data-146-sh2u">
                    <input type="number" class="form-control form-control-sm form-control-solid mx-2" placeholder="Año">
                    <button type="submit"
                        class="btn btn-sm px-2 btn-icon btn-active-primary btn-primary d-inline-block">
                        <i class="ki-duotone ki-magnifier fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i></button>
                </form> -->

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
                                    <span class="menu-link px-3 btn-abrir-modal"
                                        data-bs-toggle="modal" data-bs-target="#editar"
                                        data-to-form='<?php echo json_encode($dato); ?>'>Editar</span>
                                    
                                    <!-- <a href="#" class="menu-link px-3">Editar</a> -->
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

        <!-- VISTA DE LISTA -->

        <div id="kt_project_targets_card_pane" class="tab-pane h-100 fade" style="overflow: auto;">
            <div class="card">
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
                                <?php foreach ($data as $dato): ?>
                                <tr>
                                    <td><?php echo $dato['pnombre']; ?></td>
                                    <td><?php echo $dato['ptdescripcion']; ?></td>
                                    <td><?php echo $dato['pinversion']; ?></td>
                                    <td><?php echo $dato['phoras']; ?></td>
                                    <td><button>
                                            <a href=""></a>
                                            <i class="ki-duotone ki-trash                        ">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button></td>
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

    <!-- INSERT -->
    <div class="modal fade" id="nuevo" tabindex="-1" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">

                <div class="modal-header">
                    <h2>Nuevo Programa</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>

                <div class="modal-body py-lg-10 px-lg-10">

                    <form class="form" id="kt_modal_create_app_form" method="POST" action="index.php">
                        <input type="hidden" value="insert" onlyread name="action">
                        <div class="current" data-kt-stepper-element="content">
                            <div class="row">

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Nombre</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="Nombre completo del programa/curso">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                        name="name" placeholder="" value="f" required />
                                </div>

                                <div class="fv-row mb-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Nombre Corto</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Nombre corto del programa/curso">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="shortname" placeholder="" value="f" required />
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Nombre de Diploma</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Nombre que tiene el certificado/área de trabajo">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="titlename" placeholder="" value="f" required />
                                        </div>

                                    </div>
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Público objetivo</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="Descripción de a qué tipo de persona está dirigido el curso">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                        name="public" placeholder="" value="f" required />
                                </div>

                                <div class="fv-row mb-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Slogan</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Una breve frase o lema que represente su marca, producto o idea">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="slogan" placeholder="" value="f" />
                                        </div>

                                        <div class="col-sm-3">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Nivel</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Grado de habilidad o competencia">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <select name="level" required
                                                class="form-control form-control-lg form-control-solid">
                                                <option value="BASICO" select>BASICO</option>
                                                <option value="INTERMEDIO">INTERMEDIO</option>
                                                <option value="AVANZADO">AVANZADO</option>
                                                <option value="EXPERTO">EXPERTO</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Tipo</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Grado de habilidad o competencia">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <select name="type" required
                                                class="form-control form-control-lg form-control-solid">
                                                <?php foreach ($programs_types as $types): ?>
                                                <option value="<?php echo $types['ptid']; ?>">
                                                    <?php echo $types['ptdescripcion']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Resumen</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="Descripción del contenido del programa/curso">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <textarea name="resume" class="form-control form-control-lg form-control-solid"
                                        placeholder="Descripción del contenido del programa/curso" value=""
                                        required>f</textarea>
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Requisitos</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="Descripción del equipo/marerial/programas necesarios para el curso">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <textarea name="requeriments" class="form-control form-control-lg form-control-solid"
                                        placeholder="Descripción del equipo/marerial/programas necesarios para el curso" value=""
                                        required>f</textarea>
                                </div>
                            </div>

                            <div class="d-flex flex-stack pt-10">

                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous">
                                        <i class="ki-duotone ki-arrow-left fs-3 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Back</button>
                                </div>
                                <div>
                                    <button type="sumbit" class="btn btn-lg btn-primary" data-kt-stepper-action="submit"
                                        form="kt_modal_create_app_form">
                                        <span class="indicator-label">Submit
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i></span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="next">Continue
                                        <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i></button>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
    <!-- UPDATE -->
    <div class="modal fade" id="editar" tabindex="-1" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">

                <div class="modal-header">
                    <h2>Editar Programa</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>

                <div class="modal-body py-lg-10 px-lg-10 modal_update">

                    <form class="form" id="modal_update" method="POST" action="index.php">
                        <input type="hidden" value="update" onlyread name="action">
                        <input type="hidden" value="update" onlyread name="id">
                        <div class="current" data-kt-stepper-element="content">
                            <div class="row">

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Nombre</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="Nombre completo del programa/curso">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                        name="name" placeholder="" value="f" required />
                                </div>

                                <div class="fv-row mb-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Nombre Corto</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Nombre corto del programa/curso">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="shortname" placeholder="" value="f" required />
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Nombre de Diploma</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Nombre que tiene el certificado/área de trabajo">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="titlename" placeholder="" value="f" required />
                                        </div>

                                    </div>
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Público objetivo</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="Descripción de a qué tipo de persona está dirigido el curso">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                        name="public" placeholder="" value="f" required />
                                </div>

                                <div class="fv-row mb-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Slogan</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Una breve frase o lema que represente su marca, producto o idea">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="slogan" placeholder="" value="f" />
                                        </div>

                                        <div class="col-sm-3">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Nivel</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Grado de habilidad o competencia">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <select name="level" required
                                                class="form-control form-control-lg form-control-solid">
                                                <option value="BASICO" select>BASICO</option>
                                                <option value="INTERMEDIO">INTERMEDIO</option>
                                                <option value="AVANZADO">AVANZADO</option>
                                                <option value="EXPERTO">EXPERTO</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Tipo</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Grado de habilidad o competencia">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <select name="type" required
                                                class="form-control form-control-lg form-control-solid">
                                                <?php foreach ($programs_types as $types): ?>
                                                <option value="<?php echo $types['ptid']; ?>">
                                                    <?php echo $types['ptdescripcion']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Resumen</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="Descripción del contenido del programa/curso">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <textarea name="resume" class="form-control form-control-lg form-control-solid"
                                        placeholder="Descripción del contenido del programa/curso" value=""
                                        required>f</textarea>
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Requisitos</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="Descripción del equipo/marerial/programas necesarios para el curso">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <textarea name="requeriments" class="form-control form-control-lg form-control-solid"
                                        placeholder="Descripción del equipo/marerial/programas necesarios para el curso" value=""
                                        required>f</textarea>
                                </div>
                            </div>

                            <div class="d-flex flex-stack pt-10">

                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous">
                                        <i class="ki-duotone ki-arrow-left fs-3 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Back</button>
                                </div>
                                <div>
                                    <button type="sumbit" class="btn btn-lg btn-primary" data-kt-stepper-action="submit"
                                        form="modal_update">
                                        <span class="indicator-label">Submit
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i></span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="next">Continue
                                        <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i></button>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
    <?php include '../includes/footer.html' ?>
    <?php include '../includes/scripts.html' ?>
</body>

</html>
<script>
    const btnAbrirModal = document.querySelectorAll('.btn-abrir-modal');
    const forms_update = $('.modal-body.modal_update');
    btnAbrirModal.forEach(btn => {
        btn.addEventListener('click', () => {
            const object = btn.getAttribute('data-to-form');
            var json = JSON.parse(object);  

            forms_update.find('.form-control[name="name"]').val(json.pnombre);

        });
    });
</script>