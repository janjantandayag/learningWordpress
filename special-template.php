<?php
	/*
	Template Name: Special Layout
	*/
	get_header();
	if(have_posts()) :
		while(have_posts()) : the_post();
?>
	<article class="posts page">
		<div class="column-container clearfix">			
			<h2><?php the_title(); ?></h2>
			<div class="info-box">				
				<h4>Disclaimer</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</p>
			</div>
			<?php the_content(); ?>	
		</div>
	</article>
<?php
		endwhile;
	endif;
	get_footer();
?>