<?php
	get_header();
	if(have_posts()) :
		while(have_posts()) : the_post();
?>
	<article class="posts <?php if(has_post_thumbnail()) : ?> has-thumbnail <?php endif; ?>">
		<div class="post-thumbnail">			
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		</div>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | by <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php getCategories(); ?>
		</p>
		<?php if($post->post_excerpt): ?>
			<p><?php echo get_the_excerpt(); ?>
				
			<a href="<?php the_permalink(); ?>">Read more &raquo;</a>
			</p>
		<?php else : ?>
			<p><?php the_content(); ?></p>
		<?php 

		endif; ?>
	</article>
<?php
		endwhile;
	endif;
	get_footer();
?>

