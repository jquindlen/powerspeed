<?php
/**
 * The 404 template file
 *
 * Used exclusively for displaying 404 error pages
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
						<div id="powerspeed-main-content" class="powerspeed-error-404 powerspeed-main-content <?php if( is_active_sidebar('powerspeed_main_sidebar')  && esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) != 'nosidebar' ) { ?>col-md-9<?php } else {?>col-12<?php } ?>">
              <h2><?php _e('404 Error.  Page not found!', 'powerspeed'); ?></h2>
              <p><?php _e('Unfortunately the page you requested could not be found.  You can try searching the site to see if you can find what you are looking for.', 'powerspeed'); ?></p>
              <?php get_search_form(); ?>
						</div>
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'rightsidebar') { get_sidebar(); } ?>
					</div><!-- end .row div -->
				</div><!-- end .container div -->
			</section>

		</main>

	</div>
<?php get_footer(); ?>
