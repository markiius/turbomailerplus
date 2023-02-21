<?php 

if (!function_exists('plantilla_head')) {
    function plantilla_head($archivos=null) {

    	$resultado = array(
			"template/assets/css/fontawesome.css",
			"template/assets/css/icofont.css",
			"template/assets/css/themify.css",
			"template/assets/css/flag-icon.css",
			"template/assets/css/feather-icon.css",
			"template/assets/css/animate.css",
			"template/assets/css/chartist.css",
			"template/assets/css/date-picker.css",
			"template/assets/css/prism.css",
			"template/assets/css/vector-map.css",
			"template/assets/css/bootstrap.css",
			"template/assets/css/datatables.css",
			"template/assets/css/style.css",
			"template/assets/css/color-1.css",
			"template/assets/css/responsive.css"
		);

    	if ($archivos != null) {
    		foreach ($archivos as $nuevoarchivo) {
				array_push($resultado, $nuevoarchivo);
			}
    	}

		return $resultado;
    }
}

if (!function_exists('plantilla_footer')) {
    function plantilla_footer($archivos=null) {
    	$resultado = array(
			"assets/vendor/jquery/jquery.min.js",
			"assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
			"assets/vendor/jquery-easing/jquery.easing.min.js",
			"assets/js/sb-admin-2.min.js",
			"assets/vendor/datatables/dataTables.bootstrap4.min.js",
			"assets/js/demo/datatables-demo.js",
			"assets/js/form-wizard-three.js",
			"assets/js/jquery.backstretch.min.js",
			//"resources/dropify/js/dropify.js",
			"template/modulos/user/general.js",
			//los nuevos js
			//"template/assets/js/dropify.js",
			"template/assets/js/jquery-3.5.1.min.js",
			"template/assets/js/icons/feather-icon/feather.min.js",
			"template/assets/js/icons/feather-icon/feather-icon.js",
			"template/assets/js/sidebar-menu.js",
			"template/assets/js/config.js",
			"template/assets/js/bootstrap/popper.min.js",
			"template/assets/js/bootstrap/bootstrap.min.js",
			"template/assets/js/chart/chartist/chartist.js",
			"template/assets/js/chart/chartist/chartist-plugin-tooltip.js",
			"template/assets/js/chart/knob/knob.min.js",
			"template/assets/js/chart/knob/knob-chart.js",
			"template/assets/js/chart/apex-chart/apex-chart.js",
			"template/assets/js/chart/apex-chart/stock-prices.js",
			"template/assets/js/prism/prism.min.js",
			"template/assets/js/clipboard/clipboard.min.js",
			"template/assets/js/counter/jquery.waypoints.min.js",
			"template/assets/js/counter/jquery.counterup.min.js",
			"template/assets/js/counter/counter-custom.js",
			"template/assets/js/custom-card/custom-card.js",
			"template/assets/js/notify/bootstrap-notify.min.js",
			"template/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js",
			"template/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js",
			"template/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js",
			"template/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js",
			"template/assets/js/vector-map/map/jquery-jvectormap-au-mill.js",
			"template/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js",
			"template/assets/js/vector-map/map/jquery-jvectormap-in-mill.js",
			"template/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js",
			"template/assets/js/dashboard/default.js",
			"template/assets/js/datepicker/date-picker/datepicker.js",
			"template/assets/js/datepicker/date-picker/datepicker.en.js",
			"template/assets/js/datepicker/date-picker/datepicker.custom.js",
			"template/assets/js/datatable/datatables/jquery.dataTables.min.js",
			"template/assets/js/datatable/datatable-extension/jszip.min.js",
			"template/assets/js/datatable/datatables/datatable.custom.js",
			"template/assets/js/script.js",
			"template/assets/js/sweetalert2.js",
			"template/modulos/user/general.js",
		);

		if ($archivos != null) {
    		foreach ($archivos as $nuevoarchivo) {
				array_push($resultado, $nuevoarchivo);
			}
    	}

		return $resultado;
    }
}