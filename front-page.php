<?php get_header();?>
<div id="front">

	<!-- <header class="fake-header">
		<h1>FRONT-PAGE</h1>
	</header> -->

	<section class="from-page">
	<?php
		wp_reset_query(); // necessary to reset query
		while ( have_posts() ) : the_post();
			the_content();
		endwhile; // End of the loop.
	?>
	</section>

</div>

<?php get_footer();?>