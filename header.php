<!doctype html>

<html lang="de">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
	<!-- CUSTOM STYLES -->
	<link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/assets/styles/clr-icons.min.css" rel="stylesheet">
	

	<!--CLARITY ICONS DEPENDENCY: CUSTOM ELEMENTS POLYFILL-->
	<script src="<?php echo get_template_directory_uri() ?>/assets/js/custom-elements.min.js"></script>

	<!--CLARITY ICONS API & ALL ICON SETS-->
	<script src="<?php echo get_template_directory_uri() ?>/assets/js/clr-icons.min.js"></script>

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/assets/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon-16x16.png">
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.ico" />
	<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/assets/images/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/assets/images/safari-pinned-tab.svg" color="#4182e4">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css">
	<meta name="msapplication-TileColor" content="#4182e4">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

<body>

	<div class="main-container  bg-blue">
		<?php require 'includes/navigation.php' ?>

		<div class="content-container">
			<div class="content-area">
