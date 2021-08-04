<?php get_header();?>
<div id="single">
	<!-- <header class="fake-header">
		<h1>SINGLE</h1>
	</header> -->
	<?php if (have_posts()): while (have_posts()): the_post();?>
		<article class="post">
			<header class="post-header segment">
				<?php if(get_the_post_thumbnail( )): ?>
					<div class="post-header-image">
						<?php the_post_thumbnail(); /* Trouver l'image */?>
					</div>
				<?php endif; ?>
				<h1 class="post-header-title">
					<?php the_title()?>
				</h1>
				<div class="post-header-meta">
					<ul>
						<?php if( get_the_date() !== null): ?>
							<li> <?php the_date();  ?> </li>
						<?php endif; ?>
						<?php if( get_the_category()): ?>
							<li><?php the_category();  ?></li>
						<?php endif; ?>
						<?php if( get_the_tags()): ?>
							<li><?php the_tags();  ?></li>
						<?php endif; ?>
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