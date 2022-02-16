<?php get_header();?>
<div id="single">
	<!-- <header class="fake-header">
		<h1>SINGLE</h1>
	</header> -->
	<?php if (have_posts()): while (have_posts()): the_post();?>
			<article class="post">


				<header class="post-header  bg-">
					<?php if (get_the_post_thumbnail()): ?>
						<div class="post-header-image">
							<?php the_post_thumbnail(); /* Trouver l'image */?>
						</div>
					<?php endif;?>
					<div class="conteneurs-wrap segment">

						<div class="post-header-title conteneur col-24 col-lg-21-start-4 col-xl-19-start-6 bg-turquoise-base">
	
							<h1 >
								<?php the_title()?>
							</h1>
						</div>
						<div class="post-header-meta conteneur col-24 col-md-21-start-4 col-lg-19-start-6 col-xl-17-start-8 bg-turquoise-highlight">
	
							<?php if (get_the_date() !== null): ?>
								<h4 class="meta-date"> <?php the_date();?> </h4>
							<?php endif;?>
							<?php if (get_the_tags()): ?>
								<?php the_tags('<ul class="meta-tags"><li><h4> ', ', </h4></li><li><h4> ', '</h4></li></ul>');?>
							<?php endif;?>
	
						</div>
					</div>
				</header>


				<section class="post-content">
					<?php the_content();?>
				</section>
		</article>
	<?php endwhile;endif;?>
</div>
<?php get_footer();?>