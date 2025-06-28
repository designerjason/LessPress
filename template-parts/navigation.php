<header>
	<?php bloginfo( 'name' ); ?>
	
	<div>
		<?php wp_nav_menu([
			'container' => false,
			'depth' => 1,
			'theme_location' => 'header',
		]); ?>
	</div>
</header>