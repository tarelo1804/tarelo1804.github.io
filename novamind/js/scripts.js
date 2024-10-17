document.addEventListener("DOMContentLoaded", function() {
    const nav = document.getElementById('nav');
    const abrir = document.getElementById('open-menu');
    const cerrar = document.getElementById('close-menu');

    if (abrir) {
        abrir.addEventListener('click', () => {
            nav.classList.add("visible");
        });
    } else {
        console.log("El elemento con id 'open-menu' no se encontró.");
    }

    if (cerrar) {
        cerrar.addEventListener('click', () => {
            nav.classList.remove("visible");
        });
    } else {
        console.log("El elemento con id 'close-menu' no se encontró.");
    }
});



/*MOSTRAR Y OCULTAR CONTRASEÑA*/
document.addEventListener("DOMContentLoaded", function () {
    // Toggle para la contraseña
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", function () {
        // Cambiar el tipo de input
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);
        
        // Cambiar el ícono según el estado de visibilidad
        this.innerHTML = type === "password" ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
    });

    // Toggle para confirmar contraseña
    const toggleConfirmPassword = document.getElementById("toggleConfirmPassword");
    const confirmPasswordInput = document.getElementById("confirmPassword");

    toggleConfirmPassword.addEventListener("click", function () {
        // Cambiar el tipo de input
        const type = confirmPasswordInput.getAttribute("type") === "password" ? "text" : "password";
        confirmPasswordInput.setAttribute("type", type);
        
        // Cambiar el ícono según el estado de visibilidad
        this.innerHTML = type === "password" ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
    });
});




/*SCRIPT FECHA DE NACIMIENTO-*/

    // Rellenar el select de días (1 al 31)
    const daySelect = document.getElementById("day");
    for (let day = 1; day <= 31; day++) {
        let option = document.createElement("option");
        option.value = day;
        option.textContent = day;
        daySelect.appendChild(option);
    }

    // Rellenar el select de meses (1 al 12)
    const monthSelect = document.getElementById("month");
    const months = [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];
    for (let month = 1; month <= 12; month++) {
        let option = document.createElement("option");
        option.value = month;
        option.textContent = months[month - 1]; // Los meses son indexados desde 0
        monthSelect.appendChild(option);
    }

    // Rellenar el select de años (desde el año actual hasta 1930)
    const yearSelect = document.getElementById("year");
    const currentYear = new Date().getFullYear();
    const startYear = 1930; // Puedes ajustar este valor si necesitas un año mínimo diferente
    for (let year = currentYear; year >= startYear; year--) {
        let option = document.createElement("option");
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
    }

