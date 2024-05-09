const btnDeleteModal = document.querySelectorAll('.btn-delete-modal');
const btnUpdateStatus = document.querySelectorAll('.btn-update-status');

btnDeleteModal.forEach(btn => {
    btn.addEventListener('click', () => {
        const id = btn.getAttribute('data-to-form');
        const forms_delete = $('#delete');
        forms_delete.find('input[name="id"]').val(id);

        Swal.fire({
            title: "¿Esta seguro de eliminar/cancelar este elemento?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, eliminar/cancelar"
        }).then((result) => {

            if (result.isConfirmed) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Estado eliminado",
                    showConfirmButton: false,
                    timer: 1500
                  });
                forms_delete.submit();
            }

        });
    });
});
btnUpdateStatus.forEach(btn => {
    btn.addEventListener('click', () => {
        const id = btn.getAttribute('data-to-form');
        const status = btn.getAttribute('status-to-form');
        const forms_update = $('#update_status');
        forms_update.find('input[name="id"]').val(id);
        forms_update.find('input[name="status"]').val(status);

        Swal.fire({
            title: "¿Esta seguro de cambiar el estado de este elemento?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, cambiar"
        }).then((result) => {

            if (result.isConfirmed) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Estado actualizado",
                    showConfirmButton: false,
                    timer: 1500
                  });
                forms_update.submit();
            }
        });
    });
});