<?php get_header(); ?>
<div id="archive">

	<header class="fake-header">
		<h1>ARCHIVE</h1>
	</header>

	<!-- <ul class="tab-list">
	<?php if (have_posts()): while (have_posts()): the_post()?>
			<li class="tab-list-item">
				<?php var_dump(the_ID()) ?> 
				<h2><?php the_title()?></h2>
				<?php the_post_thumbnail(); /* Trouver l'image */ ?> 
				<p class="post-meta"> |  <?php the_time(get_option('date_format'));?></p>
				<p>
					<a href="<?php the_permalink();?>" class="post__link">Lire la suite</a>
				</p>
			</li>
	<?php endwhile;endif;?>

	</ul> -->
	
	<div class="archive-section segment bg-vert-25">

		<table class="archive-table">
		<?php if (have_posts()): while (have_posts()): the_post()?>
			<tr data-id="<?php the_ID() ?>">
				<td>
					<a href="<?php the_permalink();?>"><?php the_title()?></a>
				</td>
				<td>
					<a href="<?php the_permalink();?>"><?php the_time('d/m/Y');?></a>
				</td>
			</tr>
			<?php endwhile;endif;?>
		</table>
		<div class="archive-img">
		<?php if (have_posts()): while (have_posts()): the_post()?>
			<div class="archive-img-wrap" data-id="<?php the_ID() ?>">
			<?php the_post_thumbnail(); /* Trouver l'image */ ?> 
			</div>	
		<?php endwhile;endif;?>
		</div>
	</div>
</div>
<?php get_footer(); ?>