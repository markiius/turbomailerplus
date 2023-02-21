<!DOCTYPE html>
<html class="loading" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="G&G">
	<meta name="keywords" content="">
	<meta name="author" content="G&G">
	<title>
		<?php if (isset($titulo)) : ?>
			<?php echo $titulo ?>
		<?php else : ?>
			SIPRO
		<?php endif ?>
	</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
	<?php foreach ($estiloscss as $estilo) : ?>
		<link rel="stylesheet" href="<?php echo base_url() . $estilo; ?>">
	<?php endforeach ?>
	<style>
		#WindowLoad {
			position: fixed;
			top: 0px;
			left: 0px;
			z-index: 3200;
			filter: alpha(opacity=65);
			-moz-opacity: 65;
			opacity: 0.65;
			background: #999;
		}
	</style>
</head>
<body>
	<div class="loader-wrapper">
		<div class="theme-loader">
			<div class="loader-p"></div>
		</div>
	</div>
	<div class="page-wrapper compact-wrapper" id="pageWrapper">