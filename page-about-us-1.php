<?php
	get_header();
	if(have_posts()) :
		while(have_posts()) : the_post();
?>
	<article class="posts page clearfix">
		<div class="title-column">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="text-column">
			<p><?php the_content(); ?></p>
		</div>
	</article>
<?php
		endwhile;
	endif;
	get_footer();
?>