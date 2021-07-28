<?php get_header();?>
<div id="single">
	<header class="fake-header">
		<h1>SINGLE</h1>
	</header>
	<?php if (have_posts()): while (have_posts()): the_post();?>
		<article class="post">
			<header class="post-header">
				<?php the_post_thumbnail(); /* Trouver l'image */?>
				<h2 class="post-header-title">
					<?php the_title()?>
				</h2>
				<div class="post-header-meta">
					<ul>
						<li><?php the_date();?></li>
						<li><?php the_category();?></li>
						<li><?php the_tags();?></li>
					</ul>
				</div>
			</header>
			<section class="post-content">
				<?php the_content();?>
			</section>
		</article>
	<?php endwhile;endif;?>
</div>
<?php get_footer();?>