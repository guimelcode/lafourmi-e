<?php get_header(); ?>
<div id="archive">

	<header class="fake-header">
		<h1>ARCHIVE</h1>
	</header>

	<ul class="tab-list">
	<?php if (have_posts()): while (have_posts()): the_post()?>
			<li class="tab-list-item">
				<h2><?php the_title()?></h2>
				<?php the_post_thumbnail(); /* Trouver l'image */ ?> 
				<p class="post-meta"> |  <?php the_time(get_option('date_format'));?></p>
				<p>
					<a href="<?php the_permalink();?>" class="post__link">Lire la suite</a>
				</p>
			</li>
	<?php endwhile;endif;?>
	</ul>
</div>
<?php get_footer(); ?>