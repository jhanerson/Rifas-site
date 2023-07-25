window.onload = function () {

    $('#onload').fadeOut();
    $('body').removeClass('no-scroll')
}

// Esperar a que el DOM termine de cargar
document.addEventListener("DOMContentLoaded", function () {
    // Obtener el formulario de venta por su ID
    var ventaForm = document.getElementById("ventaForm");

    // Agregar un evento de escucha para el evento de envío del formulario
    ventaForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe

        // Obtener los valores de los campos del formulario
        var producto = document.getElementById("producto").value;
        var cantidad = document.getElementById("cantidad").value;
        var precio = document.getElementById("precio").value;

        // Calcular el total de la venta
        var total = cantidad * precio;

        // Obtener la fecha actual
        var fecha = new Date().toLocaleDateString();

        // Crear una nueva fila para la tabla de ventas
        var fila = document.createElement("tr");

        // Crear celdas para cada dato de la venta
        var celdaProducto = document.createElement("td");
        celdaProducto.textContent = producto;
        var celdaCantidad = document.createElement("td");
        celdaCantidad.textContent = cantidad;
        var celdaPrecio = document.createElement("td");
        celdaPrecio.textContent = precio;
        var celdaTotal = document.createElement("td");
        celdaTotal.textContent = total;
        var celdaFecha = document.createElement("td");
        celdaFecha.textContent = fecha;

        // Agregar las celdas a la fila
        fila.appendChild(celdaProducto);
        fila.appendChild(celdaCantidad);
        fila.appendChild(celdaPrecio);
        fila.appendChild(celdaTotal);
        fila.appendChild(celdaFecha);

        // Obtener la tabla de ventas por su clase
        var tablaVentas = document.querySelector(".table");

        // Agregar la fila a la tabla
        tablaVentas.appendChild(fila);

        // Limpiar los campos del formulario
        ventaForm.reset();
    });

    // Obtener el botón de "Eliminar producto" por su tipo
    var eliminarProductoBtn = document.querySelector("button[type='button']");

    // Agregar un evento de escucha para el evento de clic en el botón
    eliminarProductoBtn.addEventListener("click", function () {
        // Obtener la última fila de la tabla de ventas
        var ultimaFila = document.querySelector(".table tr:last-child");

        // Verificar si hay filas en la tabla
        if (ultimaFila) {
            // Eliminar la última fila de la tabla
            ultimaFila.remove();
        }
    });
});


// Espera a que la página se cargue completamente
window.addEventListener('load', function () {
    // Obtiene el botón de exportar
    var exportButton = document.getElementById('exportButton');

    // Agrega un evento de clic al botón de exportar
    exportButton.addEventListener('click', function () {
        // Obtiene el elemento de la tabla
        var table = document.querySelector('.table');

        // Convierte la tabla a una imagen utilizando html2canvas
        html2canvas(table).then(function (canvas) {
            // Crea un elemento de enlace
            var link = document.createElement('a');
            link.download = 'tabla_ventas.png'; // Nombre del archivo de imagen descargado

            // Convierte el lienzo a una URL de datos
            link.href = canvas.toDataURL('image/png');

            // Activa el clic en el enlace para iniciar la descarga
            link.click();
        });
    });
});
