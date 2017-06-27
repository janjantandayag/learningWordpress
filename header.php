<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div class="container">
		<header class="site-header">
			<h1><a href="<?= home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?>  <?php if (is_page('portfolio-2')) {
				echo "- Thank you for viewing our work";				
			} ?> </h5>
			<nav class="site-nav">
				<?php
					$args = [ 
						'theme_location' => 'primary',
						'container' => false
					];
					wp_nav_menu($args);
				?>
			</nav>
		</header>

