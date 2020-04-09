<!doctype html>

<html lang="de">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
	<!-- CUSTOM STYLES -->
	<link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/assets/styles/clr-icons.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/sp-1.0.1/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/sp-1.0.1/datatables.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.dataTables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>

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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/brands.min.css">
	
	<meta name="google-site-verification" content="xS8QJX0WlXVwL2mfyQGM-fJE5rYrc5EqonRzcwEql9k" />
	<meta name="google-site-verification" content="google-site-verification=xS8QJX0WlXVwL2mfyQGM-fJE5rYrc5EqonRzcwEql9k" />
	
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@MakervsvirusO">
	<meta name="twitter:creator" content="@htks_de">
	<meta name="twitter:title" content="<?= get_bloginfo("name"); ?>">
	<meta name="twitter:description" content="<?= get_bloginfo("description"); ?>">
	<meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/assets/images/header-card.png">
	<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/images/header-card.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="525">
	<meta property="og:image:height" content="276">

	<meta name="msapplication-TileColor" content="#4182e4">
	<meta name="theme-color" content="#ffffff">

	<meta name="build" content="2020-04-09-23-25">

	<?php wp_head(); ?>
</head>

<body>
	<div class="main-container  bg-blue">
		<?php require 'includes/navigation.php' ?>

		<div class="content-container">
			<div class="content-area">
