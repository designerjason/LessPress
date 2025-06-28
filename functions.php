<?php 
/**
* Register nav menus
*
* @return void
*/

function lesspress_register_nav_menus() {
	register_nav_menus([
		'header' => 'Header',
	]);
}
add_action( 'after_setup_theme', 'lesspress_register_nav_menus', 0 );

// custom image sizes
add_theme_support('post-thumbnails');
// add_image_size( 'thm-name', 900, 500, true );

// enqueue styles and scripts
function lesspress_enqueue_scripts() {
	// wp_enqueue_style( 'icons', '//use.fontawesome.com/releases/v5.0.10/css/all.css' );
	wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'lesspress_enqueue_scripts' );


// remove junk
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


// restrict blocks
function restrict_allowed_blocks($allowed_blocks) {
	return [
		//'core/archives',
		//'core/audio',
		//'core/button',
		//'core/buttons',
		//'core/calendar',
		//'core/categories',
		//'core/code',
		//'core/column',
		//'core/columns',
		//'core/cover',
		//'core/embed',
		'core/heading',
		//'core/html',
		'core/image',
		//'core/imagen',
		//'core/latest-posts',
		'core/list',
		'core/media-text',
		//'core/missing',
		//'core/more',
		//'core/nextpage',
		'core/paragraph',
		//'core/preformatted',
		//'core/pullquote',
		'core/quote',
		//'core/rss',
		//'core/search',
		'core/separator',
		'core/shortcode',
		//'core/social-links',
		'core/spacer',
		//'core/subhead',
		//'core/table',
		//'core/tag-cloud',
		//'core/text-columns',
		//'core/verse',
		//'core/video',
	];
}
add_filter('allowed_block_types_all', 'restrict_allowed_blocks', 10, 2);


// remove block patterns
add_action('after_setup_theme', function() {
	remove_theme_support('core-block-patterns');
});
add_filter('should_load_remote_block_patterns', '__return_false');
