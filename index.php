<?php
/**
 * The main template file
 *
 * Used exclusively for displaying the blog
 *
 * @package PowerSpeed
 */
 
 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }

get_header(); ?>
	<div class="powerspeed-content-area">
		<main>

			<section class="powerspeed-middle-area">
				<div class="container<?php if(esc_attr(get_theme_mod('powerspeed_section_main_content_fluid', false)) == true) { echo '-fluid'; }?>">
					<div class="row">
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'leftsidebar') { get_sidebar(); } ?>
						<div id="powerspeed-main-content" class="powerspeed-index powerspeed-main-content <?php if( is_active_sidebar('powerspeed_main_sidebar') && esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) != 'nosidebar' ) { ?>col-md-9<?php } else {?>col-12<?php } ?>">
							<?php
								// If we have post, lets loop
								if ( have_posts() ) {
									while ( have_posts() ) {
										the_post();
										get_template_part('template-parts/content', get_post_format() );
									}
									?>
										<div class="row">
											<div class="pages col-6 text-left">  <?php previous_posts_link('<< '.__('Newer Posts','powerspeed') ); ?></div>
											<div class="pages col-6 text-right">  <?php next_posts_link(__('Older Posts','powerspeed').' >>' ); ?></div>
										</div>
									<?php
								} else { //No posts
									?><p><?php _e('There are no posts to display.', 'powerspeed'); ?></p><?php
								}
							?>
						</div>
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'rightsidebar') { get_sidebar(); } ?>
					</div><!-- end .row div -->
				</div><!-- end .container div -->
			</section>

		</main>

	</div>
<?php get_footer(); ?>
