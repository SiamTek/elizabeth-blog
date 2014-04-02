<footer class="text-center">
	<div class="row">
		<section class="col-sm-4">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">Inspiration</a></li>
				<li><a href="blog.html">Healthy Living</a></li>
				<li><a href="contact.html">Thoughts</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</section>
		<section class="col-sm-4">
			<h4>&copy; <?php echo date('Y'); ?> Design by Siam Tek.</h4>
		</section>
		<section class="col-sm-4">
			Back to top Icon
		</section>
	</div><!-- row close -->
</footer>
</div><!-- container close -->

<script src="js/lib/jquery.1.10.2.js"></script>
<script>
	window.onload = function() {
	    if (window.jQuery) {  
	        // jQuery is loaded  
	        console.log("jQuery Loaded");
	    } else {
	        // jQuery is not loaded
	        console.log("jQuery NOT Loaded");
	    }
	}
</script>