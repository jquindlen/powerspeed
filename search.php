<?php
/**
 * The search template file
 *
 * Used exclusively for displaying the search results
 *
 * @package PowerSpeed
 */

  if ( ! defined( 'ABSPATH' ) ) {
  	exit; // Exit if accessed directly
  }
  
get_header(); ?>
	<div class="powerspeed-content-area">
		<main>

			<section class="powerspeed-search-results">
				<div class="container<?php if(esc_attr(get_theme_mod('powerspeed_section_main_content_fluid', false)) == true) { echo '-fluid'; }?>">
					<div class="row">
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'leftsidebar') { get_sidebar(); } ?>
						<div id="powerspeed-main-content" class="powerspeed-search powerspeed-main-content <?php if( is_active_sidebar('powerspeed_main_sidebar')  && esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) != 'nosidebar' ) { ?>col-md-9<?php } else {?>col-12<?php } ?>">
              <div class="card powerspeed-content-card powerspeed-main-content powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>"><div class="card-body"><h2><?php _e('Search results for:', 'powerspeed'); echo ' '.get_search_query(); ?></h2>
							<?php
                get_search_form();
                echo '</div></div><br style="clear:both;" />';
                while(have_posts()) {
                  the_post();
                  get_template_part('template-parts/content', 'search');
                }

                the_posts_pagination( array('screen_reader_text' => __( 'Posts navigation', 'powerspeed' ), 'type'=>'list', 'prev_text'=> '<div class="'.esc_attr(get_theme_mod('powerspeed_section_blog_pagination_link_type','btn btn-primary')).'">' . __('Previous', 'powerspeed').'</div>', 'next_text'=> '<div class="'.esc_attr(get_theme_mod('powerspeed_section_blog_pagination_link_type','btn btn-primary')).'">'.__('Next', 'powerspeed').'</div>', 'before_page_number' => '<div class="'.esc_attr(get_theme_mod('powerspeed_section_blog_pagination_link_type','btn btn-primary')).'">', 'after_page_number' => '</div>'  ) );

                ?>

						</div>
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'rightsidebar') { get_sidebar(); } ?>
					</div><!-- end .row div -->
				</div><!-- end .container div -->
			</section>

		</main>

	</div>
<?php get_footer(); ?>
