<?php
/**
 * The header
 *
 * Used to display the header
 *
 * @package PowerSpeed
 */
 
 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }

?><!DOCTYPE html><html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<a class="screen-reader-text skip-link" href="#powerspeed-main-content"><?php _e('Skip to content', 'powerspeed'); ?></a>

	<?php wp_body_open(); ?>

	<header id="powerspeed-header">
		<?php if(esc_attr(get_theme_mod('powerspeed_section_header_show_header', false)) == true) { ?>
		<section id="powerspeed-top-bar">
			<div class="container<?php if(esc_attr(get_theme_mod('powerspeed_section_header_fluid_header', 'false')) == true) { echo '-fluid'; } ?>">
				<div class="row">
					<?php
						if(esc_attr(get_theme_mod('powerspeed_section_header_show_search', true)) == true) {
							if(esc_attr(get_theme_mod('powerspeed_section_header_alert', false)) == true && esc_attr(get_theme_mod('powerspeed_section_header_compact_alert', false)) == true) {
								$powerspeed_social_media_icons_class = 'col-2';
								$powerspeed_alert_class = 'col-7';
							} else {
								$powerspeed_social_media_icons_class = 'col-9';
							}
						} else {
							if(esc_attr(get_theme_mod('powerspeed_section_header_alert', false)) == true && esc_attr(get_theme_mod('powerspeed_section_header_compact_alert', false)) == true) {
								$powerspeed_social_media_icons_class = 'col-2';
								$powerspeed_alert_class = 'col-10';
							} else {
								$powerspeed_social_media_icons_class = 'col-12';
							}
						}
						?>
					<div class="powerspeed-social-media-icons <?php echo $powerspeed_social_media_icons_class; ?>"><?php powerspeed_social_media_output(esc_attr(get_theme_mod('powerspeed_section_social_media_icon_width')), esc_attr(get_theme_mod('powerspeed_section_social_media_icon_height'))); ?></div>
					<?php
						if(esc_attr(get_theme_mod('powerspeed_section_header_alert', false)) == true && esc_attr(get_theme_mod('powerspeed_section_header_compact_alert', false)) == true) {
							?>
							<div class="<?php if(esc_attr(get_theme_mod('powerspeed_section_header_alert_type', 'primary')) != 'noalert') { ?>alert alert-<?php } ; echo esc_attr(get_theme_mod('powerspeed_section_header_alert_type', 'primary')); echo ' '.$powerspeed_alert_class; ?>" role="alert">
							  <?php
									echo esc_attr(get_theme_mod('powerspeed_section_header_alert_text', __('You can put important notices and alerts here!', 'powerspeed')));
									if (trim(esc_attr(get_theme_mod('powerspeed_section_header_alert_link', '')) ) != '' ) {
										echo ' <a href="'.esc_attr(get_theme_mod('powerspeed_section_header_alert_link', '')).'" class="alert-link">'.esc_attr(get_theme_mod('powerspeed_section_header_alert_link_text', __('Learn more...', 'powerspeed'))).'</a>';
									}

								?>
							</div>
					<?php
					}
						if(esc_attr(get_theme_mod('powerspeed_section_header_show_search', true)) == true) { ?>
					<div class="powerspeed-search col-3 text-left"><?php get_search_form(); ?></div>
					<?php } ?>
				</div>

				<?php
					if(esc_attr(get_theme_mod('powerspeed_section_header_alert', false)) == true && esc_attr(get_theme_mod('powerspeed_section_header_compact_alert', false)) == false) {
						?>

						<div class="<?php if(esc_attr(get_theme_mod('powerspeed_section_header_alert_type', 'primary')) != 'noalert') { ?>alert alert-<?php } ; echo esc_attr(get_theme_mod('powerspeed_section_header_alert_type', 'primary')); ?>" role="alert">

						  <?php
								echo esc_attr(get_theme_mod('powerspeed_section_header_alert_text', __('You can put important notices and alerts here!', 'powerspeed')));
								if (trim(esc_attr(get_theme_mod('powerspeed_section_header_alert_link', '')) ) != '' ) {
									echo ' <a href="'.esc_attr(get_theme_mod('powerspeed_section_header_alert_link', '')).'" class="alert-link">'.esc_attr(get_theme_mod('powerspeed_section_header_alert_link_text', __('Learn more...', 'powerspeed'))).'</a>';
								}

							?>


						</div>
						<?php
					}
				?>

			</div>
		</section>
<?php } ?>

	<?php if (has_header_image()) { ?>
		<section id="powerspeed-header-image">
			<div class="container<?php if(esc_attr(get_theme_mod('powerspeed_section_header_image_fluid_header')) == true) { echo '-fluid'; }?>">
				<div class="row align-self-center">
					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class="mx-auto img-fluid" />
				</div>
			</div>
		</section>
	<?php } ?>

		<section id="powerspeed-menu-area">
			<div class="container<?php if(esc_attr(get_theme_mod('powerspeed_section_header_menu_fluid_header', false)) == true) { echo '-fluid'; }?>">
				<div class="row">

						<div id="powerspeed-logo" class="col-md-3 col-sm-12 col-12 text-center"><?php
							the_custom_logo( );

							if (!has_custom_logo() && display_header_text()==true) {
							    ?>
							    <h2 class="display-4"><?php bloginfo('name'); ?></h2>
							    <?php
							}
						?></div>
							<nav id="powerspeed-main-menu" class="navbar navbar-expand-md navbar-light <?php
								if(esc_attr(get_theme_mod('powerspeed_section_menu_big', false)) == true) {
									echo ' col-12';
								} else {
									echo ' col-md-9 col-sm-12 col-12';
								}
								$powerspeed_menu_align = '';
								$powerspeed_container_align = '';
								if(esc_attr(get_theme_mod('powerspeed_section_menu_align', 'left')) == 'left') {
									$powerspeed_menu_align .= ' mr-auto';
									$powerspeed_container_align = ' justify-content-start';
								} elseif (esc_attr(get_theme_mod('powerspeed_section_menu_align', 'left')) == 'center') {
									$powerspeed_menu_align .= ' mx-auto ';
									$powerspeed_container_align = ' justify-content-center';
								} elseif (esc_attr(get_theme_mod('powerspeed_section_menu_align', 'left')) == 'right') {
									$powerspeed_menu_align .= ' ml-auto ';
									$powerspeed_container_align = ' justify-content-end';
								}

							?>" role="navigation">
							    <button class="navbar-toggler" id="powerspeed-main-menu-toggler" type="button" data-toggle="collapse" data-target="#powerspeed-main-menu-container" aria-controls="powerspeed-main-menu-container" aria-expanded="false" aria-label="<?php _e('Toggle navigation','powerspeed');?>">
							        <span class="navbar-toggler-icon"></span>
							    </button>
					        <?php
					        wp_nav_menu( array(
					            'theme_location'    => 'powerspeed_main_menu',
					            'depth'             => 3,
					            'container'         => 'div',
					            'container_class'   => 'collapse navbar-collapse'.$powerspeed_container_align,
					            'container_id'      => 'powerspeed-main-menu-container',
					            'menu_class' 				=> 'navbar-nav'.$powerspeed_menu_align,
					            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					            'walker'            => new WP_Bootstrap_Navwalker(),
					        ) );
					        ?>
							</nav>

				</div>
			</div>
		</section>

	</header>
