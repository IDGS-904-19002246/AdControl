// INSERT
const section_button1 = $('#section_button1')[0];
const section_button2 = $('#section_button2')[0];
const section_button3 = $('#section_button3')[0];

const section_button_back2 = $('#section_button_back2')[0];
const section_button_back3 = $('#section_button_back3')[0];

const section_form1 = $('#section_form1');
const section_form2 = $('#section_form2');
const section_form3 = $('#section_form3');
section_form2.toggle();
section_form3.toggle();

// symbol-label bg-light-primary
const section_icon = $('span.symbol-label');
const section_icon1 = $('#section_icon1');
const section_icon2 = $('#section_icon2');
const section_icon3 = $('#section_icon3');
section_icon1.removeClass('bg-light-primary').removeClass('text-primary').addClass('bg-primary').addClass('text-light');

section_button1.addEventListener('click', () => {
    if (validator_1() == true) {
        section_form1.toggle(500);
        section_form2.toggle(500);
        section_icon.removeClass('bg-primary').addClass('bg-light-primary').removeClass('text-light').addClass('text-primary');
        section_icon2.removeClass('bg-light-primary').addClass('bg-primary').removeClass('text-primary').addClass('text-light');
    } else {
        Swal.fire({
            title: "Faltan campos por completar",
            icon: "warning"
        });
    }
});
section_button2.addEventListener('click', () => {
    if (validator_2() == true) {
        section_form2.toggle(500);
        section_form3.toggle(500);
        section_icon.removeClass('bg-primary').addClass('bg-light-primary').removeClass('text-light').addClass('text-primary');
        section_icon3.removeClass('bg-light-primary').addClass('bg-primary').removeClass('text-primary').addClass('text-light');
    } else {
        Swal.fire({
            title: "Faltan campos por completar",
            icon: "warning"
        });
    }
});
section_button3.addEventListener('click', () => {
    if (validator_3() == true) {

        Swal.fire({
            title: 'Esta seguro de guardar ?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, Guardar"
        }).then((result) => {
            if (result.isConfirmed) {

                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Estado guardado",
                    showConfirmButton: false,
                    timer: 1500
                  });
                section_form1.toggle(500);
                section_form3.toggle(500);
                section_icon.removeClass('bg-primary').addClass('bg-light-primary').removeClass('text-light').addClass('text-primary');
                section_icon1.removeClass('bg-light-primary').addClass('bg-primary').removeClass('text-primary').addClass('text-light');
                sumbit();
            }
        });
    } else {
        Swal.fire({
            title: "Faltan campos por completar",
            icon: "warning"
        });
    }
});
// ------------------------------------------------------------
section_button_back2.addEventListener('click', () => {
    section_form1.toggle(500);
    section_form2.toggle(500);
    section_icon.removeClass('bg-primary').addClass('bg-light-primary').removeClass('text-light').addClass('text-primary');
    section_icon1.removeClass('bg-light-primary').addClass('bg-primary').removeClass('text-primary').addClass('text-light')
});
section_button_back3.addEventListener('click', () => {
    section_form2.toggle(500);
    section_form3.toggle(500);
    section_icon.removeClass('bg-primary').addClass('bg-light-primary').removeClass('text-light').addClass('text-primary');
    section_icon2.removeClass('bg-light-primary').addClass('bg-primary').removeClass('text-primary').addClass('text-light');
});
// UPDATE 
// -----------------------------------------------------------------------------------------------------------

// btnUpdateModal.forEach(btn => {
//     btn.addEventListener('click', () => {
//         const object = btn.getAttribute('data-to-form');
//         var json = JSON.parse(object);
//         forms.find('input[name="action"]').val('update');
//         // inputData(json);
//         // forms_update.find('.form-control[name="name"]').val(json.pnombre);
//         // forms_update.find('.form-control[name="shortname"]').val(json.pnombrecorto);
//         // forms_update.find('.form-control[name="titlename"]').val(json.pnombrediploma);
//         // forms_update.find('.form-control[name="public"]').val(json.pdirigidoa);
//         // forms_update.find('.form-control[name="slogan"]').val(json.pslogan);
//         // forms_update.find('.form-control[name="level"]').val(
//         //     (json.pnivel != ' ' && json.pnivel != null && json.pnivel != '' ? json.pnivel :
//         //         'BASICO')
//         // );

//         // forms_update.find('.form-control[name="type"]').val(json.ptid);
//         // forms_update.find('.form-control[name="resume"]').val(json.presumen);
//         // forms_update.find('.form-control[name="requeriments"]').val(json.prequisitos);
//         // forms_update.find('input[name="pid"]').val(json.pid);
//     });
// });