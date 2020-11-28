
<?php
/**
 * The single post page
 *
 * Used for displaying single posts and custom types
 *
 * @package PowerSpeed
 */

  if ( ! defined( 'ABSPATH' ) ) {
  	exit; // Exit if accessed directly
  }

get_header(); ?>
	<div class="powerspeed-content-area">
		<main>

			<section class="powerspeed-singles">
				<div class="container<?php if(esc_attr(get_theme_mod('powerspeed_section_main_content_fluid', false)) == true) { echo '-fluid'; }?>">
					<div class="row">
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'leftsidebar') { get_sidebar(); } ?>
						<div id="powerspeed-main-content" class="powerspeed-single powerspeed-main-content <?php if( is_active_sidebar('powerspeed_main_sidebar')  && esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) != 'nosidebar' ) { ?>col-md-9<?php } else {?>col-12<?php } ?>">
							<?php
                while(have_posts()) {
                  the_post();
                  get_template_part('template-parts/content', 'single');
                  ?>
									<br class="clearboth" />
										<div class="row">
											<div class="pages col-12">
												<?php
													wp_link_pages(array(
											        'before'           => '<nav class="Page navigation"><ul class="pagination justify-content-left"><li class="page-item"><span class="page-link">' . esc_attr(__( 'Pages:', 'powerspeed' )) . '</span></li>',
											        'after'            => '</ul></nav><hr>',
											        'link_before'      => '<span class="page-link">',
											        'link_after'       => '</span>',
											        'next_or_number'   => 'number',
											        'separator'        => '',
											        'nextpagelink'     => __( 'Next', 'powerspeed'),
											        'previouspagelink' => __( 'Previous', 'powerspeed' ),
											        'pagelink'         => '%',
											        'echo'             => 1
											    ));
												?>
											</div>
										</div>
										<div class="row">
											<div class="pages col-6 text-left"> <?php previous_post_link(); ?></div>
											<div class="pages col-6 text-right"> <?php next_post_link(); ?></div>
										</div>
									<?php

                  if( comments_open() || get_comments_number() ) {
                    comments_template();
                  }
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
