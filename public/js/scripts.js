$(document).ready(function () {
    // Confirmación al eliminar una tarea
    $('a[href*="delete"]').on('click', function (e) {
        const confirmed = confirm("¿Estás seguro de que deseas eliminar esta tarea?");
        if (!confirmed) {
            e.preventDefault();
        }
    });

    // Validación simple en el formulario
    $('form').on('submit', function () {
        const Lunes = $('input[name="Lunes"]').val().trim();
        if (Lunes === "") {
            alert("El título de la tarea no puede estar vacío.");
            return false;
        }
    });
});
