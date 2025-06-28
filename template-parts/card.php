<?php 
	$args['postid'] = $args['postid'] ?? 0;
	$args['title'] = $args['title'] ?? '';
	$args['excerpt'] = wp_trim_words($args['excerpt'], 10, '...') ?? '';
	$args['permalink'] = $args['permalink'] ?? '';
	$args['date'] = $args['date'] ?? '';
	$postthm = get_the_post_thumbnail_url($args['postid']);
?>
<div>
	<picture>
		<img src="<?php echo $postthm; ?>" alt="" loading="lazy" />
	</picture>
	<a href="<?php echo $args['permalink']; ?>">
		<p><small><?php echo $args['date']; ?></small></p>
		<h2><?php echo $args['title']; ?></h2>
		<p><?php echo $args['excerpt']; ?></p>
	</a>
</div>
