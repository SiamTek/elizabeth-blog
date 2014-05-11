<!doctype html>
<html lang="en">

<!-- BEGIN HEAD -->
<head>

	<!--[if lt IE 9]> <script src="js/lib/html5shiv.js"></script> <![endif]-->
		
	<!-- FONTS BEGIN -->
		<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- FONTS END -->

	<!-- CSS SYLESHEETS BEGIN -->
		<link rel="stylesheet" href="css/reset.css" media="screen">
		<link rel="stylesheet" href="css/grid.css" media="screen">
		<link rel="stylesheet" href="css/style.css" media="screen">
	<!-- CSS STYLESHEETS END -->
		
	<!-- META BEGIN -->
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta name="copyright" content="" />
		<meta name="geo.region" content="" />
		<meta name="geo.placename" content="" />
		<meta name="geo.position" content="" />
		<meta name="ICBM" content="" />
		<meta charset="UTF-8">
	<!-- META END -->

	<!-- SITE SPECIFIC BEGIN-->		
		<title><?php bloginfo( 'name' ); ?></title>
	<!-- SITE SPECIFIC END -->
	
</head>
<!-- END HEAD ELEMENT -->

<!-- BEGIN BODY -->
<body>
	
<div class="container"><!-- BEGIN CONTAINER -->
	<header>
		<div class="hgroup text-center">
			<a href="index.php" class="main-title"><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
		</div>
		<a href="#" id="logo"></a>
		<nav class="mob-nav-bar">
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