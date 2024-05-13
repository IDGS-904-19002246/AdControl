<div class="modal fade" id="nuevo" tabindex="-1" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">

            <div class="modal-header">
                <h2 id="title">Nueva Sección</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>

            <div class="modal-body py-lg-10 px-lg-10">
                <form class="form" id="insert" method="POST" action="index.php?id=<?php echo $dato['pid']; ?>">
                    <input type="hidden" value="insert" onlyread name="action" />
                    <input type="hidden" value="0" onlyread name="id" />


                        <div class="fv-row mb-10">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Nombre de la seccion</span>
                                <span class="ms-1" data-bs-toggle="tooltip"
                                    title="Nombre del modulo del programa/curso">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <input type="text" class="form-control form-control-lg form-control-solid" name="name" required maxlength="32"/>
                        </div>

                        <div class="fv-row mb-10">
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Descripción</span>
                                <span class="ms-1" data-bs-toggle="tooltip"
                                    title="Descripción del tema del modulo, que se va a aprender">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <input type="text" class="form-control form-control-lg form-control-solid" name="desc" required maxlength="64"/>
                        </div>

                    <div class="d-flex justify-content-center py-5">
                        <button class="btn btn-lg btn-primary" form="nuevo" type="button"
                            id="insert_button">
                            Guardar
                            <i class="ki-duotone ki-save-2"><span class="path1"></span><span class="path2"></span></i>
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<script>
function save() {
    const form = $('#insert')[0];
    form.submit();
}
function start_form() {
    const forms = $('#insert');
    $('#title').text('Nueva Sección');
    forms[0].reset();
    forms.find('input[name="action"]').val('insert');
    forms.find('input[name="id"]').val(0);
    forms.find('input[name="name"]').val('');
    forms.find('input[name="desc"]').val('');
}
function inputData(json) {
    const forms = $('#insert');
    $('#title').text('Editar Sección');
    start_form();
    forms.find('input[name="action"]').val('update');
    forms.find('input[name="id"]').val(json.id);
    forms.find('.form-control[name="name"]').val(json.name);
    forms.find('.form-control[name="desc"]').val(json.desc);
}
</script>