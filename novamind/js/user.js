document.getElementById("btnGuardar").onclick=(event)=>{
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

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

document.getElementById("btnGuardarAgregar").onclick=(event)=>{
    event.preventDefault()//evita recargar la pagina
    document.getElementById("formAgregar").classList.add('was-validated')
    document.querySelector("#alerta").classList.remove("d-none")
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: " Algo salió mal, Favor de llenar todos los campos",
        //footer: '<a href="#">Por favor llena todos los campos</a>'
      });
}

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