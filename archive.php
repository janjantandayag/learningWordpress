<?php
	get_header();
	if(have_posts()) :
?>
	<h2>
		<?php
			if(is_category()){
				single_cat_title();
			} elseif(is_tag()){
				single_tag_title();
			} elseif(is_author()){
				the_post();
				echo 'Author Archives: ' . get_the_author();		
				rewind_posts();
			} elseif(is_day()){
				echo 'Daily Archives: ' . get_the_date();
			} elseif(is_month()){
				echo 'Monthly Archives: ' . get_the_date('F Y');
			} elseif(is_year()){
				echo 'Yearly Archives: ' . get_the_date('Y');
			} else{
				echo 'This is archive';		
			}
		?>
	</h2>
	<?php
		while(have_posts()) : the_post();
	?>
	<article class="posts">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | by <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php getCategories(); ?>
		</p>
		<p><?php the_excerpt(); ?></p>
	</article>
<?php
		endwhile;
	endif;
	get_footer();
?>

