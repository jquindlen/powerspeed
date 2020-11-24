<?php
/**
 * PowerSpeed WooCommerce integration for single products
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<div class="container">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="col-9 text-right">
				<?php
					/**
					 * woocommerce_before_main_content hook.
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 */
					do_action( 'woocommerce_before_main_content' );
				?>
			</div>
		</div><!-- end .row div -->
	</div><!-- end .container div -->

	<div class="powerspeed-content-area">
		<main>

			<section class="powerspeed-middle-area">
				<div class="container">
					<div class="row">
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'leftsidebar') { do_action( 'woocommerce_sidebar' ); } ?>
						<div id="powerspeed-main-content" class="powerspeed-single-product powerspeed-index powerspeed-main-content <?php if( esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) != 'nosidebar' ) { ?>col-md-9<?php } else {?>col-12<?php } ?>">
							<?php while ( have_posts() ) : ?>
								<?php the_post(); ?>
								<div class="card powerspeed-content-card powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>">
								  <div class="card-body">
								<?php wc_get_template_part( 'content', 'single-product' ); ?>
									</div>
								</div>
							<?php endwhile; // end of the loop. ?>
						</div>
						<?php if(esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) == 'rightsidebar') { do_action( 'woocommerce_sidebar' ); } ?>
					</div><!-- end .row div -->
				</div><!-- end .container div -->
			</section>

		</main>

	</div>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
