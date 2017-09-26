<?php get_header(); ?>

<div id="gallery">
      <div class="masonry">

<?php
			$args = array(
				'post_type' => 'attachment',
				'post_mime_type' => 'image',
				'orderby' => 'post_date',
				'order' => 'asc',
				'posts_per_page' => '60',
				'post_status'    => 'inherit',
				'category_name' => 'northernmeeting'
			 );
			$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post();
			$image = wp_get_attachment_image_src( get_the_ID(), 'full' ); // Full sized image
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); // Thumbnail size
      ?>

			<a href="<?php echo $image[0]; ?>" data-fancybox><img src="<?php echo $thumb[0]; ?>" class="item"></a>

			<?php endwhile; ?>

    </div>
  </div>

<?php get_footer(); ?>
