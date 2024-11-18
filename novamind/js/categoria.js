/*ELIMINAR*/
document.querySelectorAll('.btnEliminarCategoria').forEach(button => {
    button.addEventListener('click', function () {
        Swal.fire({
            title: '¿Deseas eliminar esta categoría?',
            text: "¡No podrás revertir esta acción!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('¡Eliminado!', 'La categoría ha sido eliminada.', 'success');
                // Aquí puedes agregar la lógica para eliminar el elemento
            }
        });
    });
  });