
	<div>
		<h2>Articles</h2>
		<?php
		$args = [
			'post_type' => 'post',
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'DESC',
		];
		$query = new WP_Query($args);

		if ($query->have_posts()) :
			echo '<div>';
			while ($query->have_posts()) : $query->the_post();
				$card = [
					'postid' => $post->ID,
					'title' => get_the_title(),
					'excerpt' => get_the_excerpt(),
					'permalink' => get_the_permalink(),
					'date' => get_the_date('jS F Y'),
				];
				get_template_part('template-parts/card', '', $card);
			endwhile;
			wp_reset_postdata();
			echo '</div>';
		else :
			echo '<p>No recent articles found.</p>';
		endif; ?>
	</div>
