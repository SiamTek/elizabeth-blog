	
<div class="container">
	<header>
		<div class="hgroup text-center">
			<a href="index.php" class="main_title"><h1>Consistently Inconsistent</h1></a>
		</div>
		<a href="#" id="logo"></a>
		<nav class="mob-nav-bar">
			<a href="#" id="menu-icon"></a>
			<ul class="mob-nav">
				<li class="<?php if ($section == "home") { echo "current"; } ?>"><a href="index.php">Home</a></li>
				<li class="<?php if ($section == "cats") { echo "current"; } ?>" ><a href="cats.php">Cats</a></li>
				<li class="<?php if ($section == "zen") { echo "current"; } ?>" ><a href="zen.php">Zen</a></li>
				<li class="<?php if ($section == "rants") { echo "current"; } ?>" ><a href="rants.php">Rants</a></li>
                <li class="<?php if ($section == "cooking") { echo "current"; } ?>" ><a href="cooking.php">Cooking</a></li>
				<li class="<?php if ($section == "about") { echo "current"; } ?>" ><a href="about.php">About</a></li>
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