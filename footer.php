	</div>
	<!-- Main Row -->
	
	<!-- Footer -->
	<footer class="row">
	
		<div class="twelve columns"><hr></div>
	
			<div class="row">
			
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
					<?php endif; ?>
				
			</div>
			<div class="row">
				<div class="six columns">
					<p>&#169; Copyright <?php the_date('Y'); ?> <?php bloginfo('name') ?></p>
				</div>
				<div class="six columns">
					<p class="right">Website By: <a href="http://www.emptyhead.com.au">Emptyhead</a></p>
				</div>
			</div>
	</footer>
	<!-- Footer -->

	</div>
	<!-- container -->

	<!-- Included JS Files -->	

	<?php wp_footer(); ?>
	
</body>
</html>