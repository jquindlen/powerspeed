<?php
/**
 * The footer template file
 *
 * Used exclusively for displaying the footer
 *
 * @package PowerSpeed
 */
 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }
?>
<br class="clearboth" />
<footer id="powerspeed-entire-footer">
	<div id="powerspeed-footer" class="container<?php if(esc_attr(get_theme_mod('powerspeed_section_footer_content_fluid', false)) == true) { echo '-fluid'; }?>">

		<?php
		if(esc_attr(get_theme_mod('powerspeed_section_footer_show_widgets', true)) == true) {
			$footer_widget_areas = 0;
			if (is_active_sidebar( 'powerspeed_footer_left_col_sidebar' )) {
				$footer_widget_areas++;
			}
			if (is_active_sidebar( 'powerspeed_footer_center_col_sidebar' )) {
				$footer_widget_areas++;
			}
			if (is_active_sidebar( 'powerspeed_footer_right_col_sidebar' )) {
				$footer_widget_areas++;
			}
			$footer_widget_column_class = '';
			if($footer_widget_areas==1) {
				$footer_widget_column_class = 'col-12';
			} elseif ($footer_widget_areas==2) {
				$footer_widget_column_class = 'col-6';
			} elseif ($footer_widget_areas==3) {
				$footer_widget_column_class = 'col-4';
			}
		?>

		<div class="row">
			<?php if (is_active_sidebar( 'powerspeed_footer_left_col_sidebar' )) { ?>
			<div class="powerspeed-footer-widget-area-left <?php echo $footer_widget_column_class; ?>">
				<?php
						dynamic_sidebar( 'powerspeed_footer_left_col_sidebar' );
				?>
			</div>
			<?php
				}
			 	if (is_active_sidebar( 'powerspeed_footer_center_col_sidebar' )) {
			?>
			<div class="powerspeed-footer-widget-area-center <?php echo $footer_widget_column_class; ?>">
				<?php
						dynamic_sidebar( 'powerspeed_footer_center_col_sidebar' );
				?>
			</div>
			<?php
				}
			 	if (is_active_sidebar( 'powerspeed_footer_right_col_sidebar' )) {
			?>
			<div class="powerspeed-footer-widget-area-right <?php echo $footer_widget_column_class; ?>">
				<?php
						dynamic_sidebar( 'powerspeed_footer_right_col_sidebar' );
				?>
			</div>
			<?php
				}
			?>
		</div>
		<?php } ?>

		<?php
			$powerspeed_footer_align_class = '';
			$powerspeed_footer_copyright_size_class = '';
			$powerspeed_footer_size_class = '';
			if(esc_attr(get_theme_mod('powerspeed_section_footer_copyright_align', 'left')) == 'left') {
				$powerspeed_footer_align_class = ' text-left';
			} elseif(esc_attr(get_theme_mod('powerspeed_section_footer_copyright_align', 'left')) == 'center') {
				$powerspeed_footer_align_class = ' text-center';
			} elseif(esc_attr(get_theme_mod('powerspeed_section_footer_copyright_align', 'left')) == 'right') {
				$powerspeed_footer_align_class = ' text-right';
			}
			if ( has_nav_menu( 'powerspeed_footer' ) ) {
				$powerspeed_footer_copyright_size_class = 'col-sm-7 col-4';
				$powerspeed_footer_size_class = 'col-sm-5 col-8';
			} else {
				$powerspeed_footer_copyright_size_class = 'col-12';
				$powerspeed_footer_size_class = '';
			}
		?>
		<div class="row">
			<div class="powerspeed-copyright <?php echo $powerspeed_footer_copyright_size_class; ?> <?php echo $powerspeed_footer_align_class; ?>">
				<?php echo esc_attr(get_theme_mod('powerspeed_section_footer_copyright', __('Copyright &copy; ', 'powerspeed'). date('Y') . ' '. get_bloginfo( 'name' ) .'. '. __('All rights reserved.', 'powerspeed'))); ?>
			</div>
			<?php if ( has_nav_menu( 'powerspeed_footer' ) ) { ?>
			<nav id="powerspeed-footer-menu" class="<?php echo $powerspeed_footer_size_class; ?> text-right">
				<?php wp_nav_menu( array ('theme_location' => 'powerspeed_footer' ));?>
			</nav>
			<?php } ?>
		</div><!-- end .row div -->
	</div><!-- end .container div -->
</footer>
<?php wp_footer(); ?>
</body>
</html>
