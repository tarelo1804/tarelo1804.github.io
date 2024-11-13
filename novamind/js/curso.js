document.getElementById("btnSave").onclick = (event) => {
  event.preventDefault(); // Evita recargar la página
  
  const form = document.getElementById("form");
  form.classList.add('was-validated'); // Marca el formulario como validado
  
  // Comprobar si el formulario es válido
  if (!form.checkValidity()) {
      // Si el formulario no es válido, muestra la alerta
      document.querySelector("#divAlerta").classList.remove("d-none");
      Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Algo salió mal, favor de llenar todos los campos",
      });
  } else {
      // Si el formulario es válido, puedes proceder con la acción (ocultar alerta si es necesario)
      document.querySelector("#divAlerta").classList.add("d-none");
      // Aquí puedes agregar la lógica para guardar o procesar los datos
  }
};
