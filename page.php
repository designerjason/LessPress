<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<div>
			<?php if(has_post_thumbnail()): ?>
				<picture>
					<img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="" />
				</picture>
			<?php endif; ?>
	
			<div>
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>

<?php get_footer(); ?>
