<?php get_header(); ?>
	<div>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php 
				$args = [
					'postid' => $post->ID,
					'title' => get_the_title(),
					'excerpt' => get_the_excerpt(),
					'permalink' => get_the_permalink(),
					'date' => get_the_date('jS F Y'),
				];
				get_template_part('template-parts/card', '', $args)
			?>
		<?php endwhile; ?>
	</div>

	<nav>
		<?php posts_nav_link('|', '<span>Previous Page</span>', '<span>Next Page</span>'); ?>
	</nav>

<?php get_footer(); ?>
 