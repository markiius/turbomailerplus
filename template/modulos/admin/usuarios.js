const usuarios = function () {
	/* var clicButton = function () {
		$('.btn-insertUnidad').click(async () => {
			try {
				let unidadResponsable = $('#unidadResponsable').val()
				let municipio = $('#idMunicipio').val()
				//let periodo = $('.periodos').val();
				const form = new FormData();
				form.append("unidad", unidadResponsable);
				form.append("municipio", municipio);
				//form.append("periodo",periodo);
				if (unidadResponsable && municipio) {
					const res = await fetch(`${base_url}ApiWebSipro/saveUnidad`, {
						method: 'POST',
						body: form
					})
					const data = await res.json();
					if (data > 0) {
						Swal.fire(
							'Guardada correctamente!',
							'',
							'success',
						);
						$("#unidadModal .close").click();
						await cargarDatos();
					}
				} else {
					Swal.fire(
						'Llene todos los campos!',
						'',
						'error',
					);
				}
			} catch (e) {
				console.log(e.message);
			}
		});

		$(".btnActualizar").click(async () => {
			const form = new FormData();
			form.append("idunidad", $("#idEditarUnidad").val());
			form.append("nombreunidad", $("#editarUnidadResponsable").val())
			const res = await fetch(`${base_url}ApiWebSipro/updateUnidad`, {
				method: "POST",
				body: form
			});
			const data = await res.json();
			if (data > 0) {
				Swal.fire(
					'Actualizado correctamente!',
					'',
					'success',
				);
				$('#unidadModalUpdate').modal('hide');
				await cargarDatos();
			}
		});

		$(".btnEliminar").click(async () => {
			Swal.fire({
				title: "CUIDADO",
				text: "¿SEGURO DESEA ELIMINAR ESTE DATO?",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'Ok!'
			}).then(async (result) => {
				if (result.isConfirmed) {

					const res = await fetch(`${base_url}ApiWebSipro/eliminarUnidad/${$("#idEditarUnidad").val()}`, {
						method: "GET"
					});
					const data = await res.json();
					if (data > 0) {
						Swal.fire(
							'Eliminado correctamente!',
							'',
							'success',
						);
						$('#unidadModalUpdate').modal('hide');
						await cargarDatos();
					}
				}
			})
		});

		$(document).on('click', '#btnEditar', async function () {
			var data = tablaUnidades.row($(this).parents('tr')).data();
			var id = data['id'];

			const res = await fetch(`${base_url}ApiWebSipro/getUnidadId/${id}`, {
				method: 'GET',
			});
			const val = await res.json();
			if (val) {
				$("#idEditarUnidad").val(val.id_unidad_responsable);
				$("#editarUnidadResponsable").val(val.nombre_unidad);
				$("#editarMunicipio").val(val.NombreMunicipio);
				$('#editarperiodo').val(val.periodo)
				$('#unidadModalUpdate').modal('show');
			}
		});

	} */

	const cargarDatos = async function () {
		$(".usuarios").dataTable().fnDestroy();
		var columnas = [
			{ "data": "email" },
			{ "data": "nombre" },
            {"data":"numerocelular"},
            {"data":"cedula"},
            {"data":"fechanacimiento"},
            {"data":"codigociudad"},
			{
				"data": null,
				"defaultContent": '<div>' +
					'<button type="button" id="btnEditar" class="btn btn-success mr-1 mb-1"><i class="fa fa-pencil"></i> EDITAR</button>' +
					'</div>'
			},
		];


		var columnalongitud = [
			{ "width": 150, "targets": 0 },
			{ "width": 150, "targets": 1 },
			{ "width": 150, "targets": 2 },
		];

		var datos = {
			'rol': '2'
		};

		tablaUnidades = generarTabla(
			'usuarios',
			'Usuarios/getUsuarios',
			datos,
			columnas,
			columnalongitud
		);

	}

	return {
		init: function () {
			//clicButton();
			cargarDatos();
		},
		callbacks: {}
	};

}();

$(document).ready(function () {
	usuarios.init();
});