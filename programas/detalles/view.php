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

    <div class="container card my-4">
        <?php foreach ($data as $dato): ?>
            <div class="row">
                <div class="col-sm-10">
                    <h1 class="fw-bold pt-4"><?php echo $dato['pnombre']; ?></h1>
                    <h4 class="fw-bold d-flex align-items-center">
                        <?php echo $dato['pnombrediploma']; ?> -
                        <?php echo $dato['pslogan']; ?>
                    </h4>
                </div>
                <div class="col-sm-2">
                    <div class="d-flex align-items-end p-4">
                        <span class="badge badge-light fw-semibold me-auto">
                            <?php echo $dato['phoras']; ?> Hrs.
                        </span>
                        <span class="badge badge-light fw-semibold me-auto">
                            <?php echo ($dato['pnivel'] != '' ? $dato['pnivel'] : 'BASICO'); ?>
                        </span>
                    </div>
                </div>
            </div>

            <hr>
            <h2 class="fw-bold pt-4">Publico objetivo</h2>
            <span class="fs-6 text-gray-800 text-hover-primary"><?php echo $dato['pdirigidoa']; ?></span>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="fw-bold pt-4">Resumen</h2>
                    <span class="fs-6 text-gray-800 text-hover-primary"><?php echo $dato['presumen']; ?></span>
                </div>
                <div class="col-sm-6">
                    <h2 class="fw-bold pt-4">Requisitos</h2>
                    <span class="fs-6 text-gray-800 text-hover-primary"><?php echo $dato['prequisitos']; ?></span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <label class="d-flex align-items-center fs-5 fw-semibold">
                        <span class="required">Tipo</span>
                    </label>
                    <select name="types" disabled class="form-control form-control-lg form-control-solid">
                        <?php foreach ($programs_types as $t): ?>
                            <option value="<?php echo $t['ptid']; ?>" <?php if ($t['ptid'] == $dato['ptid'])
                                   echo 'selected'; ?>>
                                <?php echo $t['ptdescripcion']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label class="d-flex align-items-center fs-5 fw-semibold">
                        <span class="required">Certificación</span>
                    </label>
                    <select name="certification" disabled class="form-control form-control-lg form-control-solid">
                        <?php foreach ($programs_certification as $pc): ?>
                            <option value="<?php echo $pc['id']; ?>">
                                <?php echo $pc['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row d-flex align-items-center">
                <div class="col-sm-8">
                    <h4 class="fw-bold py-2">Secciones</h4>
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-sm btn-primary btn-insert-modal" data-bs-toggle="modal"
                        data-bs-target="#nuevo">Añadir
                        Sección</button>
                </div>
            </div>
            <div class="table-responsive">

            </div>
            <table class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                <thead class="fs-7 text-gray-500 text-uppercase">
                    <th class="min-w-100px">Nombre</th>
                    <th class="min-w-250px">Descripción</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php $secciones = json_decode($dato['section'], true);
                    foreach ($secciones as $s): ?>
                        <tr>
                            <td><?php echo $s['name'] ?></td>
                            <td><?php echo $s['desc'] ?></td>
                            <td><button class="btn btn-sm btn-primary btn-update-modal" data-bs-toggle="modal"
                                    data-bs-target="#nuevo" data-to-form='<?php echo json_encode($s); ?>'>Editar</button></td>
                            <td><button class="btn btn-sm btn-primary btn-delete-modal btn-delete-modal"
                                    data-to-form='<?php echo $s['id']; ?>'>Eliminar</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


            <form action="index.php?id=<?php echo $dato['pid']; ?>" id="delete" method="POST">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="0">
            </form>
            <?php include 'modals/insert.php' ?>
        <?php endforeach; ?>
    </div>
    <hr>

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
<script>
    const btnInsertModal = document.querySelectorAll('.btn-insert-modal');
    const btnUpdateModal = document.querySelectorAll('.btn-update-modal');
    const btnDeleteModal = document.querySelectorAll('.btn-delete-modal');
    btnInsertModal.forEach(btn => {
        btn.addEventListener('click', () => {
            start_form();
        });
    });
    btnUpdateModal.forEach(btn => {
        btn.addEventListener('click', () => {
            const object = btn.getAttribute('data-to-form');
            var json = JSON.parse(object);
            inputData(json);
        });
    });
    btnDeleteModal.forEach(btn => {
        btn.addEventListener('click', () => {
            const forms_delete = $('#delete');
            const id = btn.getAttribute('data-to-form');
            forms_delete.find('input[name="id"]').val(id);

            Swal.fire({
                title: "¿Esta seguro de borrar este elemento?",
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
    $('#insert_button')[0].addEventListener('click', () => {

        Swal.fire({
            title: "¿Esta seguro de guardar estos datos?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, guardar"
        }).then((result) => {

            if (result.isConfirmed) {
                Swal.fire({
                    title: "Elemento guardado",
                    icon: "success"
                });
                save();
            }

        });
    });
</script>