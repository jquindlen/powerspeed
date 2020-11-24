<?php
 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }
 ?><article <?php post_class(); ?>>
	<div class="card powerspeed-content-card powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail('full',  'thumbnail', array( 'class' => 'card-img-top' )); ?></a>
	  <div class="card-body">
			<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>

			<p><?php the_excerpt(); ?></p>

			<?php
			global $wp_query;

			$powerspeed_section_blog_show_metabox = true;
			$powerspeed_section_blog_show_author = true;
			$powerspeed_section_blog_show_categories = true;
			$powerspeed_section_blog_show_tags = true;


	    if(esc_attr(get_theme_mod('powerspeed_section_blog_show_metabox', true)) == false) {
				$powerspeed_section_blog_show_metabox = false;
			}
			if(esc_attr(get_theme_mod('powerspeed_section_blog_show_author', true)) == false) {
				$powerspeed_section_blog_show_author = false;
			}
			if(esc_attr(get_theme_mod('powerspeed_section_blog_show_categories', true)) == false) {
				$powerspeed_section_blog_show_categories = false;
			}
			if(esc_attr(get_theme_mod('powerspeed_section_blog_show_tags', true)) == false) {
				$powerspeed_section_blog_show_tags = false;
			}


			if($powerspeed_section_blog_show_metabox) {
			?>
				<div class="card-footer meta-info clearboth<?php if(is_sticky()) { echo ' bg-light';} ?>">
					<?php if($powerspeed_section_blog_show_author) { ?><div class="">
						<?php _e('Published on', 'powerspeed'); ?> <?php echo get_the_date(); ?> - <?php _e('Authored by', 'powerspeed'); ?> <?php the_author_posts_link(); ?>
					</div><?php } ?>
					<?php if ( !is_page() ) { ?>
						<?php if ( $powerspeed_section_blog_show_categories || $powerspeed_section_blog_show_tags ) { ?>
							<ul class="list-group list-group-flush">
								<?php if ( has_tag() && $powerspeed_section_blog_show_categories ) { ?>
									<li class="list-group-item<?php if(is_sticky()) { echo ' bg-light';} ?>"><?php _e('Categories', 'powerspeed'); ?>: <?php the_category(' '); ?></li>
								<?php } ?>
								<?php if ( has_tag() && $powerspeed_section_blog_show_tags ) { ?>
									<li class="list-group-item<?php if(is_sticky()) { echo ' bg-light';} ?>"><?php the_tags(__('Tags: ', 'powerspeed'), ' '); ?></li>
								<?php } ?>
							</ul>
						<?php } ?>
					<?php } ?>
				</div>
			<?php } ?>


		</div>
	</div>
</article>
<br />
