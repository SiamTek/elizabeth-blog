<!doctype html>
<html lang="en">
<head>
	<?php include 'includes/head-inc.php'; ?>
	<title>Consistently | Inconsistent: Contact Page</title>
</head>
<body>
		<?php include 'includes/header-inc.php'; ?>

		<?php include 'includes/nav-inc.php'; ?>
		
		<div class="row">
			<section class="col-sm-8 text-center">
			<h3 class="text-center">About Me</h3>
				<p class="lead">Hello lovely people, thank you for checking out my blog! My name is Elizabeth Joy (nice to meet you). I'm a twenty-something living in Madison, Wisconsin still trying to figure out what I'm doing with my life. I call it a quarter-life crisis, but we will get through this together, right? Anywho, here is a few tid-bits about me:</p>
					<ul id="aboutList" class="text-center">
						<li>I take few things seriously</li>
						<li>I love, love (seriously, I do)</li>
						<li>I'm a HUGE fan of comedy</li>
						<li>I'm pretty hard to offend, yep, come at me trolls!</li>
						<li>I F*#@KING love my cat Henry, oh and my fiance, Seth...I guess :)</li>
						<li>I can't wait to get you know you all of you out there, and again thanks for stopping by <a href="#">Consistently Inconsistent</a>!</li>
					</ul>
				<p>xoxo</p>
                <p>Ms. Joy</p>
			</section>
            <?php include 'includes/sidebar-inc.php'; ?>
		</div><!-- row close -->

		<div class="row">
			<section id="contact" class="col-sm-8">
				<form action="#">
					<h2 class="text-center">Contact Me</h2>
						<label for="name">Name</label>
							<input type="text" name="name" placeholder="Please Enter Your Name...">
						<label for="email">Email</label>
							<input type="email" name="email" placeholder="Please Enter Your Email...">
						<label for="message">Message</label>
							<textarea name="message" placeholder="Please Enter Your Message"></textarea>
								<input type="submit" value="Send Message">
				</form>
			</section>

			
		</div><!-- row close -->

		<?php include 'includes/foot-inc.php'; ?>

</body>
</html>