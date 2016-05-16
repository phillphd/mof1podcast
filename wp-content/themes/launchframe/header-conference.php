<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Launchframe
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@whiteboardis">
 
<meta name="twitter:title" content="<?php the_title(); ?>">
<meta name="twitter:description" content="">
<meta name="twitter:image:src" content="<?php bloginfo('template_directory');?>/assets/dist/img/share-img.jpg">
 
<meta name="og:image" content="<?php bloginfo('template_directory');?>/assets/dist/img/og-share.jpg">
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:site_name" content="<?php the_title(); ?>">
<meta property="og:type" content="blog">
<meta property="og:description" content="">

<link href='https://fonts.googleapis.com/css?family=Cardo:400italic' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class('page-conference'); ?> data-vide-bg="<?php bloginfo('template_directory');?>/assets/conference/video/drone">
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'launchframe' ); ?></a>

	<header id="masthead" class="site-header" role="banner"></header><!-- #masthead -->

	<div id="content" class="site-content">
