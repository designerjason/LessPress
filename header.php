<!DOCTYPE HTML>
<html class="no-js" lang="en">
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<link rel="dns-prefetch" href="//fonts.googleapis.com" />
		<link rel="preconnect" href="//fonts.googleapis.com">
		<link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
		<link rel="dns-prefetch" href="//www.google-analytics.com" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Mobile viewport optimization -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<style>
			/* rendering here as wp_enqueue has an issue with this particular url formatting */
			@import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Taviraj:wght@200;300;500;600&display=swap');
		</style>
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

	<?php get_template_part('template-parts/navigation'); ?>

