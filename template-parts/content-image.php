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

	<div class="card powerspeed-content-card powerspeed-main-content-container meta-info clearboth <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>">
		<div class="card-header">
			<?php _e('Published on', 'powerspeed'); ?> <?php echo get_the_date(); ?> - <?php _e('Authored by', 'powerspeed'); ?> <?php the_author_posts_link(); ?>
		</div>
		<?php if ( !is_page() ) { ?>
			<ul class="list-group list-group-flush">
				<?php if ( has_category() ) { ?>
					<li class="list-group-item"><?php _e('Categories', 'powerspeed'); ?>: <?php the_category(' '); ?></li>
				<?php } ?>
				<?php if ( has_tag() ) { ?>
					<li class="list-group-item"><?php the_tags(__('Tags: ', 'powerspeed'), ' '); ?></li>
				<?php } ?>
			</ul>
		<?php } ?>
	</div>

</article>
