<div class="modal fade" id="nuevo" tabindex="-1" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">

            <div class="modal-header">
                <h2>Programas Grupo <?php echo $students?></h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>

            <div class="modal-body py-lg-10 px-lg-10">
                <form class="form" id="insert" method="POST" action="index.php" enctype="multipart/form-data">
                    <input type="hidden" value="insert" onlyread name="action" />
                    <input type="hidden" name="id" value="0">

                    <div class="row">

                        <div class="col-sm-3">

                            <span class="d-flex align-items-center me-2 mt-1">
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-primary text-primary"
                                        id="section_icon1"><b>1</b></span>
                                </span>
                                <span class="d-flex flex-column">
                                    <span class="fw-bold fs-6">Detalles</span>
                                </span>
                            </span>
                            <span class="d-flex align-items-center me-2 mt-1">
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-primary text-primary"
                                        id="section_icon2"><b>2</b></span>
                                </span>
                                <span class="d-flex flex-column">
                                    <span class="fw-bold fs-6">Fechas</span>
                                </span>
                            </span>
                            <span class="d-flex align-items-center me-2 mt-1">
                                <span class="symbol symbol-50px me-6">
                                    <span class="symbol-label bg-light-primary text-primary"
                                        id="section_icon3"><b>3</b></span>
                                </span>
                                <span class="d-flex flex-column">
                                    <span class="fw-bold fs-6">Pagos</span>
                                </span>
                            </span>

                        </div>
                        <!-- --------------------------------------------------------------------------------------------------------------- -->
                        <div class="col-sm-9">

                            <div id="section_form1" class="section_form">

                                <div class="fv-row mb-5">
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
                                    <select name="program" required
                                        class="form-control form-control-lg form-control-solid">
                                        <!-- ?php foreach ($programs as $p): ?>
                                        <option value="?php echo $p['pid']; ?>">?php echo $p['pnombre']; ?></option>
                                        ?php endforeach; ?> -->
                                    </select>
                                    <div class="row p-2">
                                        <label class="col-sm-3 d-flex align-items-center fs-5 fw-semibold mb-2"
                                            for="intensive">
                                            <input type="checkbox" name="intensive" class="mx-2">
                                            Es intensivo
                                        </label>
                                        <label class="col-sm-3 d-flex align-items-center fs-5 fw-semibold mb-2"
                                            for="special">
                                            <input type="checkbox" name="special" class="mx-2">
                                            Es Especial
                                        </label>
                                        <label class="col-sm-3 d-flex align-items-center fs-5 fw-semibold mb-2"
                                            for="certification">
                                            <input type="checkbox" name="certification" class="mx-2">
                                            Lleva certificación
                                        </label>
                                        <label class="col-sm-3 d-flex align-items-center fs-5 fw-semibold mb-2"
                                            for="web">
                                            <input type="checkbox" name="web" class="mx-2">
                                            Ver en web
                                        </label>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Contraseña (opcional)</span>
                                    </label>
                                    <input type="password" class="form-control form-control-lg form-control-solid"
                                        name="pass" />
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Ciudad</span>
                                    </label>
                                    <select name="city" required
                                        class="form-control form-control-lg form-control-solid">
                                        <option value="LEON, GUANAJUATO">LEON, GUANAJUATO</option>
                                    </select>
                                </div>

                                <div class="fv-row mb-10">
                                    <div class="row">
                                        <div class="col-sm-6 pr-2">
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
                                        <div class="col-sm-6 pl-2">
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
                                    <div class="row">
                                        <div class="col-sm-6 pr-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Dias para horarios</span>
                                            </label>
                                            <select name="hoid" required
                                                class="form-control form-control-lg form-control-solid">
                                                <?php foreach ($days as $d): ?>
                                                <option value="<?php echo $d['hoid']; ?>"><?php echo $d['hodesc']; ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 pr-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Horarios por Sesion</span>
                                            </label>
                                            <select name="hohid" required
                                                class="form-control form-control-lg form-control-solid">
                                                <?php foreach ($hours as $h): ?>
                                                <option value="<?php echo $h['hohid']; ?>">
                                                    <?php echo ($h['hohdesc'].' ('.$h['hohoras'].') Hrs'); ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="d-flex justify-content-center py-5">
                                    <button class="btn btn-lg btn-primary" type="button" id="section_button1">
                                        Siguiente
                                        <i class="ki-duotone ki-right"></i>
                                    </button>
                                </div>

                            </div>
                            <!-- --------------------------------------------------------------------------------------------------------------- -->
                            <div id="section_form2" class="section_form">
                                <div class="fv-row mb-10">
                                    <div class="row">
                                        <div class="col-sm-6 pr-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Fecha Inicio</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Fecha en la que inician las sesiones del curso">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="date" class="form-control form-control-lg form-control-solid"
                                                name="date_start" placeholder="" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Fecha Final</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Fecha en la que finalizan las sesiones del curso">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <input type="date" class="form-control form-control-lg form-control-solid"
                                                name="date_end" placeholder="" required />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 pr-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Fecha Inicio de Publicidad</span>
                                            </label>
                                            <input type="date" class="form-control form-control-lg form-control-solid"
                                                name="date_start_advertising" placeholder="" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Fecha Final de Publicidad</span>
                                            </label>
                                            <input type="date" class="form-control form-control-lg form-control-solid"
                                                name="date_end_advertising" placeholder="" required />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 pr-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Fecha Inicio de Venta</span>
                                            </label>
                                            <input type="date" class="form-control form-control-lg form-control-solid"
                                                name="date_start_2" placeholder="" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Fecha Inicio de Cierre</span>
                                            </label>
                                            <input type="date" class="form-control form-control-lg form-control-solid"
                                                name="date_end_2" placeholder="" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between py-5">
                                    <button class="btn btn-lg btn-primary" type="button" id="section_button_back2">
                                        <i class="ki-duotone ki-left"></i>Atras
                                    </button>
                                    <button class="btn btn-lg btn-primary" type="button" id="section_button2">
                                        Siguiente
                                        <i class="ki-duotone ki-right"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- --------------------------------------------------------------------------------------------------------------- -->

                            <div id="section_form3" class="section_form">
                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Precio</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Costo del curso">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <input type="number" class="form-control form-control-lg form-control-solid"
                                        name="price" placeholder="" required min="1" />
                                </div>
                                <div class="fv-row mb-10">
                                    <div class="row">
                                        <div class="col-sm-6 p-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Precio (tarjeta credito)</span>
                                            </label>
                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                name="price_card" placeholder="" required min="1" />
                                        </div>
                                        <div class="col-sm-6 p-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Precio (al contado)</span>
                                            </label>
                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                name="price_spot" placeholder="" required min="1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <div class="p-2">
                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2" for="pays">
                                            <input type="checkbox" name="pays" id="pays" class="mx-2">
                                            Se puede comprar en pagos
                                        </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 p-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Inscripción</span>
                                            </label>
                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                name="n_pays0" placeholder="" required min="1" />
                                        </div>
                                        <div class="col-sm-4 p-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Número de pagos</span>
                                            </label>
                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                name="n_pays" placeholder="" required min="1" />
                                        </div>
                                        <div class="col-sm-4 p-2">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">Monto de cada pago</span>
                                            </label>
                                            <input type="number" class="form-control form-control-lg form-control-solid"
                                                name="n_price" placeholder="" required min="1" />
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between py-5">
                                    <button class="btn btn-lg btn-primary" type="button" id="section_button_back3">
                                        <i class="ki-duotone ki-left"></i>Atras
                                    </button>
                                    <button class="btn btn-lg btn-primary" type="button" id="section_button3">
                                        Guardar
                                        <i class="ki-duotone ki-save-2"></i>
                                    </button>
                                </div>
                            </div>

                        </div>


                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<script>
</script>
