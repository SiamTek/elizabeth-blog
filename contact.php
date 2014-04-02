<!doctype html>
<html lang="en">
<head>
	<?php include 'includes/head-inc.php'; ?>
	<title>Consistently Inconsistent | A Blog for Elizabeth Richter</title>
</head>
<body>

		<?php include 'includes/nav-inc.php'; ?>
		
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

			<aside class="col-sm-4">
				<h3>This Is Me</h3>
					<img src="http://lorempixel.com/output/abstract-q-c-640-480-1.jpg" alt="">

				<h3>Social Media</h3>
					<ul>
						<li><a href="#" class="icon-facebook"></a></li>
						<li><a href="#" class="icon-twitter"></a></li>
						<li><a href="#" class="icon-pinterest"></a></li>
						<li><a href="#" class="icon-googleplus"></a></li>
						<li><a href="#" class="icon-mail"></a></li>
					</ul>
			</aside>
		</div><!-- row close -->

		<?php include 'includes/foot-inc.php'; ?>

</body>
</html>