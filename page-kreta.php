<?php get_header(); ?>

<div id="gallery">

          <div class="gallery-title">
            <h1>Kreta</h1>
          </div>


      <div class="masonry">

<?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => 'attachment',
				'post_mime_type' => 'image',
				'orderby' => 'post_date',
				'order' => 'asc',
				'posts_per_page' => '30',
				'post_status'    => 'inherit',
				'category_name' => 'kreta',
        'paged' => $paged
			 );
			$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post();
			$image = wp_get_attachment_image_src( get_the_ID(), 'full' ); // Full sized image
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); // Thumbnail size
      ?>

			<a href="<?php echo $image[0]; ?>" data-fancybox><img src="<?php echo $thumb[0]; ?>" class="item"></a>

			<?php endwhile; ?>

    </div>
    <div class="paginate-links-wrapper">
              <?php
            $loop;

            $big = 999999999; // need an unlikely integer
            echo '<div class="paginate-links">';
              echo paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?paged=%#%',
              'prev_text' => __('<i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i>'),
              'next_text' => __('<i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i>'),
              'current' => max( 1, get_query_var('paged') ),
              'total' => $loop->max_num_pages
              ) );
            echo '</div>';
          ?>
        </div>
  </div>

<?php get_footer(); ?>
