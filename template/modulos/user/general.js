var mensaje = function (icon, titulo, texto) {
	Swal.fire({
		title: titulo,
		text: texto,
		icon: icon,
		// showCancelButton: true,
		confirmButtonColor: '#3085d6',
		confirmButtonText: 'Ok!'
	})
}

$(document).on('click', '#btn-cerrar-sesion', function () {
	Swal.fire({
		title: "CERRAR SESIÓN",
		text: "¿SEGURO DESEA CERRAR SESIÓN?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		confirmButtonText: 'Aceptar'
	}).then(async (result) => {
		if (result.isConfirmed) {
			window.location = base_url + "Welcome/destruir";
		}
	})
});

var generarTabla = function (contenedor, urlpeticion, datos, columnas, columnalongitud) {
    var tabla = $('.' + contenedor).DataTable({
        language: {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        fixedColumns: { leftColumns: 1 },
        //dom: 'lBtip',
        buttons: [
            { text: 'Copiar', extend: 'copyHtml5', exportOptions: { columns: [0, ':visible'] } },
            { text: 'PDF', extend: 'pdfHtml5', exportOptions: { columns: ':visible' } },
            { text: 'Imprimir', extend: 'print', exportOptions: { columns: ':visible' } },
            { text: 'Excel', extend: 'csv', exportOptions: { columns: [0, ':visible'] } }
        ],
        "ajax": {
            url: base_url + urlpeticion,
            type: "POST",
            data: datos,
            dataType: 'json'
        },
        "columns": columnas,
        "columnDefs": columnalongitud
    });

    return tabla;
}