<?php
		get_header();
		if(have_posts()) :
			while(have_posts()) : the_post();
?>
	<article class="posts page">
		<nav class="site-nav children-links clearfix">
			<span class="parent-link"><a href="<?= get_the_permalink(get_top_ancestor_id()) ?>"><?= get_the_title(get_top_ancestor_id()) ?></a></span>
			<?php
				$args = [
					'child_of' => get_top_ancestor_id(),
					'title_li' =>''
				];
				?>
			<ul>
			<?php
				wp_list_pages($args);
			?>
			<ul></ul>
		</nav>
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
	</article>
<?php
		endwhile;
	endif;
	get_footer();
?>