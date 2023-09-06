// Código JavaScript para la funcionalidad del formulario y búsqueda por apellido

document.getElementById("guardar").addEventListener("click", function () {
    // Implementar la lógica de guardar el registro en la base de datos
    alert("Registro guardado correctamente.");
});

document.getElementById("limpiar").addEventListener("click", function () {
    // Limpiar los campos del formulario
    document.getElementById("medicalForm").reset();
});

document.getElementById("cerrar").addEventListener("click", function () {
    // Cerrar el formulario
    window.close();
});

document.getElementById("buscar").addEventListener("click", function () {
    // Implementar la lógica de búsqueda por apellido y mostrar resultados en #resultadoBusqueda
    var apellido = document.getElementById("buscarApellido").value;
    // Realizar la búsqueda y mostrar resultados
    // Ejemplo: document.getElementById("resultadoBusqueda").innerText = "Resultados de búsqueda para " + apellido;
});
