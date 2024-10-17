fetch('header.html')
.then(response => response.text())
.then(data => {
    document.getElementById('header-container').innerHTML = data;
})
.catch(error => console.log('Error al cargar el header:', error));





//Boton - Icono de la barra
document.addEventListener("DOMContentLoaded", function() {
    const menu = document.getElementById("menu");
    const menuToggle = document.getElementById("barra");

    menuToggle.addEventListener('click', function(e) {
        e.preventDefault();
        menu.classList.toggle('show'); // Alterna la clase 'show' para mostrar/ocultar el menú
    });
});