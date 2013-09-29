<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">

		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/assets/js/default.js"></script>
	</head>
<body>

	<header>
		<nav><!-- 
			<h1><?php echo get_option('admin_email'); ?></h1> -->
			<a href="<?php bloginfo( 'url' ); ?>"><?php echo bloginfo( 'name' ); ?></a>
			<br />
			<small>
				<a href="mailto:<?php echo get_option('admin_email'); ?>">Contact Me</a>
			</small>
		</nav>
	</header>


	<section>

	