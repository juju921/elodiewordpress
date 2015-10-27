<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package elodie
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/elodie//css/font-awesome.css">
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/elodie/js/modernizr-2.6.2.min.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'elodie' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<h1>Actualités</h1>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
