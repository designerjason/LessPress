<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<div>
			<?php if(has_post_thumbnail()): ?>
				<picture>
					<img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="" />
				</picture>
			<?php endif; ?>

			<p><?php echo get_the_date('jS F Y'); ?> - Written by <?php the_author(); ?></p>

			<div>
				<?php the_content(); ?>
			</div>

			<?php
				$posttags = get_the_tags();
				if ($posttags) {
					echo '<ul>';
					echo '<h4>Tags</h4>';
					foreach($posttags as $tag) {
						$link = get_tag_link($tag->term_id);
						echo "<li><a href='$link'>$tag->name</a></li>";
					}
					echo '</ul>';
				}
			?>

			<?php
				$postcats = get_the_category();
				if ($postcats) {
					echo '<ul>';
					echo '<h4>Categories</h4>';
					foreach($postcats as $cat) {
						$link = get_category_link($cat->term_id);
						echo "<li><a href='$link'>$cat->name</a></li>";
					}
					echo '</ul>';
				}
			?>
		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>
