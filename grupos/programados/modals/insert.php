<div class="modal fade" id="nuevo" tabindex="-1" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">

            <div class="modal-header">
                <h2>Programas Grupo</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>

            <div class="modal-body py-lg-10 px-lg-10">
                <form class="form" id="kt_modal_create_app_form3" method="POST" action="index.php">
                    <input type="hidden" value="insert" onlyread name="action" />


                    <div class="row">

                        <div class="col-sm-3">

                            <span class="d-flex align-items-center me-2 mt-1">
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-primary" id="section_icon1">1</span>
                                </span>
                                <span class="d-flex flex-column">
                                    <span class="fw-bold fs-6">Detalles</span>
                                </span>
                            </span>
                            <span class="d-flex align-items-center me-2 mt-1">
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-primary" id="section_icon2">2</span>
                                </span>
                                <span class="d-flex flex-column">
                                    <span class="fw-bold fs-6">Fechas</span>
                                </span>
                            </span>
                            <span class="d-flex align-items-center me-2 mt-1">
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-primary" id="section_icon3">3</span>
                                </span>
                                <span class="d-flex flex-column">
                                    <span class="fw-bold fs-6">Pagos</span>
                                </span>
                            </span>

                        </div>
                        <!-- --------------------------------------------------------------------------------------------------------------- -->
                        <div class="col-sm-9">

                            <div id="section_form1" class="section_form">

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Programa/curso</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Curso que tomaría el grupo">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <select name="level" required
                                        class="form-control form-control-lg form-control-solid">
                                        <?php foreach ($programs as $p): ?>
                                            <option value="<?php echo $p['pid']; ?>"><?php echo $p['pnombre']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="p-2">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2" for="gintensivo">
                                            <input type="checkbox" name="gintensivo" id="gintensivo" class="mx-2">
                                            Es intensivo
                                        </label>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Ciudad</span>
                                    </label>
                                    <select name="level" required
                                        class="form-control form-control-lg form-control-solid">
                                        <option value="LEON, GUANAJUATO">LEON, GUANAJUATO</option>
                                    </select>
                                </div>
                                <div class="fv-row mb-10">
                                    <div class="row">
                                        <div class="col-sm-4 pr-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">N. Sesiones</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Es el total de sesiones que tomaría completar el programa">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                name="n_sessions" placeholder="" min="1" />
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Horas por Sesion</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="El tiempo que dura cada sesion en general">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                name="h_sessions" placeholder="" min="1" max="6" />
                                        </div>
                                        <div class="col-sm-4 pl-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Capacidad</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Estimado de personas que pueden formar el grupo">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                name="capacity" placeholder="" min="1" max="100" />
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="d-block fw-semibold fs-6 mb-5">
                                        <span class="required">Imagen/Foto del grupo</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                            title="E.g. Select a logo to represent the company that's running the campaign.">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>

                                    <style>
                                        .image-input-placeholder {
                                            background-image: url('../../../assets/media/svg/files/blank-image.svg');
                                        }

                                        [data-bs-theme="dark"] .image-input-placeholder {
                                            background-image: url('../../../assets/media/svg/files/blank-image-dark.svg');
                                        }
                                    </style>
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder"
                                        data-kt-image-input="true">
                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar">
                                            <i class="ki-duotone ki-pencil fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                        </label>
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            title="Cancel avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            title="Remove avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <div class="form-text">Tipo de formato de imagen: png, jpg, jpeg.</div>
                                </div>

                                <div class="d-flex justify-content-center py-5">
                                    <button class="btn btn-lg btn-primary" type="button" id="section_button1">
                                        Siguiente
                                        <i class="ki-duotone ki-right"></i>
                                    </button>
                                </div>

                            </div>

                            <div id="section_form2" class="section_form">
                                sec 2 
                                <button class="btn btn-lg btn-primary" type="button" id="section_button2">
                                        Siguiente
                                        <i class="ki-duotone ki-right"></i>
                                    </button>
                            </div>
                            <div id="section_form3" class="section_form">
                                sec 3 
                            </div>

                        </div>


                    </div>

                    <!-- <div class="d-flex justify-content-center py-5">
                        <button class="btn btn-lg btn-primary" form="kt_modal_create_app_form3" type="button"
                            id="insert_button">
                            Guardar
                            <i class="ki-duotone ki-save-2"><span class="path1"></span><span class="path2"></span></i>
                        </button>
                    </div> -->

                </form>
            </div>

        </div>
    </div>
</div>
<script>
    const section_button1 = $('#section_button1')[0];
    const section_button2 = $('#section_button2')[0];
    const section_button3 = $('#section_button3')[0];

    console.log(section_button1);
    const section_button_back2 = $('#section_button_back2');
    const section_button_back3 = $('#section_button_back3');

    const section_form1 = $('#section_form1');
    const section_form2 = $('#section_form2');
    section_form2.toggle();
    const section_form3 = $('#section_form3');
    section_form3.toggle();

    // symbol-label bg-light-primary
    const section_icon1 = $('#section_icon1');
    const section_icon2 = $('#section_icon2');
    const section_icon3 = $('#section_icon3');


// section_button1.addEventListener('click',()=>{
//     console.log("click 1");
// section_form1.toggle();
// section_form2.toggle(500);
// section_form3.toggle(500);
// });
// section_button2.addEventListener('click',()=>{

// });
// section_button3.addEventListener('click',()=>{

// });

</script>