<?php
	get_header();
	if(have_posts()) :
		while(have_posts()) : the_post();
?>
	<article class="posts">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | by <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php getCategories(); ?>
		</p>		
		<?php the_post_thumbnail('banner-image'); ?>
		<p><?php the_content(); ?></p>
	</article>
<?php
		endwhile;
	endif;
	get_footer();
?>

