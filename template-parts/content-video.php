<?php
 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }
 ?><article <?php post_class(); ?>>
	<div class="text-center"><a href="<?php the_permalink();?>"><?php the_post_thumbnail( array (1920,220)); ?></a></div>
	<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>

	<figure class="figure">
	  <figcaption class="figure-caption"><?php the_content(); ?>
	  </figcaption>
	</figure>

	<div class="card powerspeed-content-card powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>">
	  <div class="card-body">
		<p class="card-text"><?php _e('Categories', 'powerspeed'); ?>: <?php the_category(''); ?><br /><?php the_tags(__('Tags: ', 'powerspeed'), ','); ?></p>
	  </div>
	</div>

</article>
