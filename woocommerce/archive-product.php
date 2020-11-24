<?php
/**
 * PowerSpeed WooCommerce integration  for product archives
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>
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
						<div id="powerspeed-main-content" class="powerspeed-archive-product powerspeed-index powerspeed-main-content <?php if( esc_attr(get_theme_mod('powerspeed_default_template_type', 'rightsidebar')) != 'nosidebar' ) { ?>col-md-9<?php } else {?>col-12<?php } ?>">
							<div class="card powerspeed-content-card powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>">
								<div class="card-body">
							<header class="woocommerce-products-header">
								<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
									<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
								<?php endif; ?>

								<?php
								/**
								 * Hook: woocommerce_archive_description.
								 *
								 * @hooked woocommerce_taxonomy_archive_description - 10
								 * @hooked woocommerce_product_archive_description - 10
								 */
								do_action( 'woocommerce_archive_description' );
								?>
							</header>
							<?php
							if ( woocommerce_product_loop() ) {

								/**
								 * Hook: woocommerce_before_shop_loop.
								 *
								 * @hooked woocommerce_output_all_notices - 10
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								do_action( 'woocommerce_before_shop_loop' );

								woocommerce_product_loop_start();

								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();

										/**
										 * Hook: woocommerce_shop_loop.
										 */
										do_action( 'woocommerce_shop_loop' );

										wc_get_template_part( 'content', 'product' );
									}
								}

								woocommerce_product_loop_end();

								/**
								 * Hook: woocommerce_after_shop_loop.
								 *
								 * @hooked woocommerce_pagination - 10
								 */
								do_action( 'woocommerce_after_shop_loop' );
							} else {
								/**
								 * Hook: woocommerce_no_products_found.
								 *
								 * @hooked wc_no_products_found - 10
								 */
								do_action( 'woocommerce_no_products_found' );
							}
		?>
		</div></div></div>
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
