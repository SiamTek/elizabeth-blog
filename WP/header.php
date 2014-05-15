<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Consistently Inconsistent
 * @since Consistently Inconsistent v0.6
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes('en'); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes('en'); ?>>
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>

    <!-- META BEGIN -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="copyright" content="" />
		<meta name="geo.region" content="" />
		<meta name="geo.placename" content="" />
		<meta name="geo.position" content="" />
		<meta name="ICBM" content="" />
	<!-- META END -->
		
	<!-- FONTS BEGIN -->
		<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
		<!-- <link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'> -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- FONTS END -->

    <!-- PAGE NUMBERS SUPPORT (SEO) -->
    <link rel="profile" href="http://gmpg.org/xfn/11" /><!-- adds support for XFN (http://gmpg.org/xfn/) -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /><!-- Provides links for our pingbacks -->
    <!-- PAGE NUMBERS SUPPORT (SEO) END -->

    <!--[if lt IE 9]> <script src="<?php bloginfo( 'template_url' ); ?>/js/lib/html5shiv.js"></script> <![endif]-->

	<!-- CSS SYLESHEETS BEGIN -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!-- CSS STYLESHEETS END -->

	<!-- SITE SPECIFIC BEGIN-->		
		<title><?php
        /*
        * Print the 'title' tag based on what is being viewed.
        */
        global $page, $paged;
 
        wp_title( '|', true, 'right' );
 
        // Add the blog name.
        bloginfo( 'name' );
 
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'ci_wp' ), max( $paged, $page ) );
 
        ?></title>
	<!-- SITE SPECIFIC END -->
	
    <?php 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
    ?><!-- Required hook. WordPress plugins and other cool things rely on it. -->

</head>
<!-- END HEAD ELEMENT -->

<!-- BEGIN BODY -->
<body <?php body_class(); ?>><!-- adds a bunch of useful CSS classes to the body tag that come in handy when we want to style the theme based on a variety of conditions. (http://codex.wordpress.org/Function_Reference/body_class) -->
	
<div class="container"><!-- BEGIN CONTAINER -->
	<header>
		<div class="hgroup text-center">

            <a href="<?php echo home_url( '/' ); ?>" class="main-title" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><!-- Escape unsafe HTML chars in links; display name of blog on screen and in links; -->
			    <h1 class="site-title">
                    <?php bloginfo( 'name' ); ?>
                </h1>
            </a>
			
			<h5 class="site-description"><?php bloginfo( 'description' ); ?></h5>
		</div>
		<a href="#" id="logo"></a>
		<nav class="mob-nav-bar">

        <!-- Screen Reader Assistive Text -->
            <h1 class="assistive-text"><?php _e( 'Menu', 'ci_wp' ); ?></h1>
            <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', 'ci_wp' ); ?></a></div>
        <!-- Screen Reader Assistive Text END -->

			<a href="#" id="menu-icon"></a>
			<ul class="mob-nav">
				<li class="<?php if ($section == "home") { echo "current"; } ?>"><a href="index.php">Home</a></li>
				<li class="<?php if ($section == "rants") { echo "current"; } ?>" ><a href="rants.php">Rants</a></li>
				<li class="<?php if ($section == "yoga") { echo "current"; } ?>" ><a href="yoga.php">Yoga</a></li>
				<li class="<?php if ($section == "cooking") { echo "current"; } ?>" ><a href="cooking.php">Cooking</a></li>
                <li class="<?php if ($section == "cats") { echo "current"; } ?>" ><a href="cats.php">Kittens</a></li>
				<li class="<?php if ($section == "about") { echo "current"; } ?>" ><a href="about.php">Contact Me</a></li>
			</ul>
		</nav>
			
		<nav class="fancy text-center">
			<a href="rants.php"><span>Rants</span><span>&amp; Raves</span></a>
			<a href="blog.php"><span>Inspiration</span><span>&amp; Zen</span></a>
			<a href="cooking.php"><span>Healthy Living</span><span>&amp; Cooking</span></a>
			<a href="cats.php"><span>Thoughts</span><span>&amp; Cats</span></a>
			<a href="contact.php"><span>About</span><span>&amp; Contact Me </span></a>
		</nav>
	</header>
	
<!-- CONTENT -->
<div class="row">
	<section class="col-sm-8"><!-- BEGIN BLOG SECTION -->