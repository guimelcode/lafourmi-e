<?php get_header(); ?>
	<!-- <h1>PAGE</h1> -->
	<section class="from-page">
	<?php
		wp_reset_query(); // necessary to reset query
		while ( have_posts() ) : the_post();
			the_content();
		endwhile; // End of the loop.
	?>
	</section>
<?php get_footer(); ?>