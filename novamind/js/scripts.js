fetch('header.html')
.then(response => response.text())
.then(data => {
    document.getElementById('header-container').innerHTML = data;
})
.catch(error => console.log('Error al cargar el header:', error));


