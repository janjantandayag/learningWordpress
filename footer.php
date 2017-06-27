	<footer class="site-footer">
		<p><?php bloginfo('name'); ?> - &copy; <?= date('Y'); ?></p>
		<nav class="site-nav">
			<?php
					$args = [
						'theme_location' => 'footer',
						'container'       => false
					];
					wp_nav_menu($args);
				?>
		</nav>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>