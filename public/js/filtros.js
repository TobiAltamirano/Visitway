document.addEventListener('DOMContentLoaded', function () {
    const checkboxAceptaMascotas = document.getElementById('acepta-mascotas');

    checkboxAceptaMascotas.addEventListener('change', function () {
        const isChecked = this.checked;

        // Obtener el token CSRF si existe
        const csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
        const csrfToken = csrfTokenElement ? csrfTokenElement.getAttribute('content') : null;

        // Enviar solicitud AJAX al controlador de filtros
        fetch('/filtrar-alojamientos', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({
                acepta_mascotas: isChecked
            })
        })
        .then(response => response.json())
        .then(data => {
            // Actualizar la lista de alojamientos en la página
            const alojamientosList = document.getElementById('alojamientos-list');
            alojamientosList.innerHTML = '';

            data.forEach(alojamiento => {
                const alojamientoItem = document.createElement('li');
                alojamientoItem.textContent = alojamiento.nombre_alojamiento;
                alojamientosList.appendChild(alojamientoItem);
            });
        })
        .catch(error => console.error('Error:', error));
    });
});
