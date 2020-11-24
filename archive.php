<?php
/**
 * The archive template file
 *
 * Used for displaying tags, categories and date based archives.
 *
 * @package PowerSpeed
 */
 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }
 
get_header(); ?>
	<div class="powerspeed-content-area">
		<main>

			<section class="powerspeed-archives">
				<div class="container<?php if(esc_attr(get_theme_mod('powerspeed_section_main_content_fluid', false)) == true) { echo '-fluid'; }?>">
					<div class="row">
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'leftsidebar') { get_sidebar(); } ?>
						<div id="powerspeed-main-content" class="powerspeed-archive powerspeed-main-content <?php if( is_active_sidebar('powerspeed_main_sidebar')  && esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) != 'nosidebar' ) { ?>col-md-9<?php } else {?>col-12<?php } ?>">
              <?php
                echo the_archive_title( '<h1 class="archive-title">'.__('Archive for ', 'powerspeed'), '</h1>' );
                echo the_archive_description( '<span class="archive-description">', '</span>' );

                echo '<br style="clear:both;" />';
                while(have_posts()) {
                  the_post();
                  get_template_part('template-parts/content', 'archive');
                }

                the_posts_pagination( array('prev_text'=>__('Previous', 'powerspeed'), 'next_text'=>__('Next', 'powerspeed') ) );

                ?>
						</div>
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'rightsidebar') { get_sidebar(); } ?>
					</div><!-- end .row div -->
				</div><!-- end .container div -->
			</section>

		</main>

	</div>
<?php get_footer(); ?>
