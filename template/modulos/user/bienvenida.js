const Bienvenida = function () {
	const clicButton = function () {

		$(document).on('click','#btnLogin',async function () {
			let correo = $('#correo').val();
			let pass = $('#password').val();
			if(correo !='' && pass !='') {
				const form = new FormData();
				form.append('correo',correo);
				form.append('pass',pass);
				const res = await fetch(`${base_url}welcome/iniciarSesion`,{
					method: 'POST',
					body: form
				});
				const data = await res.json();
				if(data){
					window.location.href=`${base_url}Bienvenido`
					return false;	
				}
				mensaje("error","","Correo o contraseña incorrecta")
				return false;
			}
			mensaje("error","","El correo y contraseña es obligatorio")
		});
	}

	return {
		init: function () {
			clicButton();
		},
		callbacks: {}
	};
}();

$(document).ready(function () {
	Bienvenida.init();
});
