
<?php
/**
 * The single Portfolio page
 *
 * Used for displaying single portfolios
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

						<div id="powerspeed-main-content" class="powerspeed-single powerspeed-main-content col-12">
							<?php
                while(have_posts()) {
                  the_post();
                  get_template_part('template-parts/content', 'powerspeed-portfolio');
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
					</div><!-- end .row div -->
				</div><!-- end .container div -->
			</section>

		</main>

	</div>
<?php get_footer(); ?>
