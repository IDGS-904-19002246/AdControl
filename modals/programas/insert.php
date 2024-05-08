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
                <form class="form" id="kt_modal_create_app_form3" method="POST" action="index.php">
                    <input type="hidden" value="insert" onlyread name="action" />


                    <div class="row">

                        <div class="fv-row mb-10">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Nombre</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Nombre completo del programa/curso">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <input type="text" class="form-control form-control-lg form-control-solid" name="name"
                                placeholder="" value="f" required />
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
                            <input type="text" class="form-control form-control-lg form-control-solid" name="public"
                                placeholder="" value="f" required />
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
                                placeholder="Descripción del equipo/marerial/programas necesarios para el curso"
                                value="" required>f</textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center py-5">
                        <button class="btn btn-lg btn-primary" form="kt_modal_create_app_form3" type="button" id="insert_button">
                            Guardar
                            <i class="ki-duotone ki-save-2"><span class="path1"></span><span class="path2"></span></i>
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>