document.querySelectorAll('.btnGuardar').onclick=(event)=>{
    event.preventDefault()//evita recargar la pagina
    document.getElementById("form").classList.add('was-validated')
    document.querySelector("#divAlerta").classList.remove("d-none")
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: " Algo salió mal, Favor de llenar todos los campos",
        //footer: '<a href="#">Por favor llena todos los campos</a>'
      });
}

/*const modal = document.getElementById('modal1-eliminar');
modal.addEventListener('show.bs.modal', () => {
    console.log('Modal está a punto de abrir');
});
modal.addEventListener('shown.bs.modal', () => {
    console.log('Modal se ha abierto');
});
modal.addEventListener('hide.bs.modal', () => {
    console.log('Modal está a punto de cerrar');
});
modal.addEventListener('hidden.bs.modal', () => {
    console.log('Modal se ha cerrado');
});
*/

/*ELIMINAR*/
document.querySelectorAll('.btnEliminar').forEach(button => {
  button.addEventListener('click', function () {
      Swal.fire({
          title: '¿Deseas eliminar este usuario?',
          text: "¡No podrás revertir esta acción!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Eliminar',
          cancelButtonText: 'Cancelar'
      }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire('¡Eliminado!', 'El usuario ha sido eliminado.', 'success');
              // Aquí puedes agregar la lógica para eliminar el elemento
          }
      });
  });
});