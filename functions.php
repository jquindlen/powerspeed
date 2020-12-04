<?php
/**
 * The functions file for PowerSpeed
 *
 * The magic file that provides core and extra theme functionality
 *
 * @package PowerSpeed
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }

/*
 * powerspeed_load_footer_scripts
 * Styles and scripts should go in the footer unless absolutely necessary
 */
function powerspeed_load_footer_scripts() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.5.0', 'all' );
	wp_enqueue_script( 'bootstrap-js',  get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
	wp_enqueue_style('powerspeed', get_template_directory_uri().'/css/powerspeed.css', array(), wp_get_theme()->get('Version'), 'all' );
}
add_action( 'get_footer', 'powerspeed_load_footer_scripts', 1);

/*
 * powerspeed_custom_font
 * Loads custom font settings that are fed to it
 *
 * @var string $font_to_load One of the approved fonts. Using one not on the approved list will result in no output
 * @var string $css_selector The CSS selector that is targetted to use the custom font.  Tag, class or ID
 */
function powerspeed_custom_font($font_to_load, $css_selector='') {
	$output = '';
	$ttf_font_name = '';
	$websafe_output = '';

  $font_to_load_trusted = false;  // If this remains false then this function outputs nothing

	switch ($font_to_load) {
			case 'arial':
				$websafe_output = 'Arial, Helvetica, sans-serif';
        $font_to_load_trusted = true;
			break;
			case 'arialblack':
				$websafe_output = '"Arial Black", Gadget, sans-serif';
        $font_to_load_trusted = true;
			break;
			case 'comicsans':
				$websafe_output = '"Comic Sans MS", cursive, sans-serif';
        $font_to_load_trusted = true;
			break;
			case 'courier':
				$websafe_output = '"Courier New", Courier, monospace';
        $font_to_load_trusted = true;
			break;
			case 'georgia':
				$websafe_output = 'Georgia, serif';
        $font_to_load_trusted = true;
			break;
			case 'impact':
				$websafe_output = 'Impact, Charcoal, sans-serif';
        $font_to_load_trusted = true;
			break;
			case 'lucidaconsole':
				$websafe_output = '"Lucida Console", Monaco, monospace';
        $font_to_load_trusted = true;
			break;
			case 'lucida':
				$websafe_output = '"Lucida Sans Unicode", "Lucida Grande", sans-serif';
        $font_to_load_trusted = true;
			break;
			case 'palatino':
				$websafe_output = '"Palatino Linotype", "Book Antiqua", Palatino, serif';
        $font_to_load_trusted = true;
			break;
			case 'tahoma':
				$websafe_output = 'Tahoma, Geneva, sans-serif';
        $font_to_load_trusted = true;
			break;
			case 'times':
				$websafe_output = '"Times New Roman", Times, serif';
        $font_to_load_trusted = true;
			break;
			case 'trebuchet':
				$websafe_output = '"Trebuchet MS", Helvetica, sans-serif';
        $font_to_load_trusted = true;
			break;
			case 'verdana':
				$websafe_output = 'Verdana, Geneva, sans-serif';
        $font_to_load_trusted = true;
			break;
			case '0xa000':
				$ttf_font_name = '0xA000-Regular';
        $font_to_load_trusted = true;
			break;
			case 'aardvark':
				$ttf_font_name = 'aardvark-fixed-regular';
        $font_to_load_trusted = true;
			break;
			case 'abibas':
				$ttf_font_name = 'Abibas';
        $font_to_load_trusted = true;
			break;
			case 'acarisans':
				$ttf_font_name = 'AcariSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'amaranth':
				$ttf_font_name = 'Amaranth-Regular';
        $font_to_load_trusted = true;
			break;
			case 'amaticsc':
				$ttf_font_name = 'AmaticSC-Bold';
        $font_to_load_trusted = true;
			break;
			case 'amburegul':
				$ttf_font_name = 'Amburegul';
        $font_to_load_trusted = true;
			break;
			case 'anonymouspro':
				$ttf_font_name = 'Anonymous Pro';
        $font_to_load_trusted = true;
			break;
			case 'bretan':
				$ttf_font_name = 'Bretan';
        $font_to_load_trusted = true;
			break;
			case 'cabin':
				$ttf_font_name = 'Cabin-Regular-TTF';
        $font_to_load_trusted = true;
			break;
			case 'cambay':
				$ttf_font_name = 'CambayDevanagari-Regular.AH';
        $font_to_load_trusted = true;
			break;
			case 'carlito':
				$ttf_font_name = 'Carlito-Regular';
        $font_to_load_trusted = true;
			break;
			case 'clickuper':
				$ttf_font_name = 'Clickuper';
        $font_to_load_trusted = true;
			break;
			case 'comfortaa':
				$ttf_font_name = 'Comfortaa-Regular';
        $font_to_load_trusted = true;
			break;
			case 'comicrelief':
				$ttf_font_name = 'ComicRelief';
        $font_to_load_trusted = true;
			break;
			case 'constructium':
				$ttf_font_name = 'Constructium';
        $font_to_load_trusted = true;
			break;
			case 'cormorant':
				$ttf_font_name = 'Cormorant-Regular';
        $font_to_load_trusted = true;
			break;
			case 'coval':
				$ttf_font_name = 'Coval-Regular';
        $font_to_load_trusted = true;
			break;
			case 'crimson':
				$ttf_font_name = 'Crimson-Roman';
        $font_to_load_trusted = true;
			break;
			case 'crosterian':
				$ttf_font_name = 'Crosterian';
        $font_to_load_trusted = true;
			break;
			case 'crusoetext':
				$ttf_font_name = 'CrusoeText-Regular';
        $font_to_load_trusted = true;
			break;
			case 'didactgothic':
				$ttf_font_name = 'DidactGothic';
        $font_to_load_trusted = true;
			break;
			case 'elmessiri':
				$ttf_font_name = 'ElMessiri-Regular';
        $font_to_load_trusted = true;
			break;
			case 'evolventa':
				$ttf_font_name = 'Evolventa-Regular';
        $font_to_load_trusted = true;
			break;
			case 'ezarion':
				$ttf_font_name = 'Ezarion-Regular';
        $font_to_load_trusted = true;
			break;
			case 'fairfaxhd':
				$ttf_font_name = 'FairfaxHD';
        $font_to_load_trusted = true;
			break;
			case 'fantasquesansmono':
				$ttf_font_name = 'FantasqueSansMono-Regular';
        $font_to_load_trusted = true;
			break;
			case 'firacode':
				$ttf_font_name = 'FiraCode-Regular';
        $font_to_load_trusted = true;
			break;
			case 'firamono':
				$ttf_font_name = 'FiraMono-Regular';
        $font_to_load_trusted = true;
			break;
			case 'fyodor':
				$ttf_font_name = 'Fyodor-Bold';
        $font_to_load_trusted = true;
			break;
			case 'gapsans':
				$ttf_font_name = 'GapSans';
        $font_to_load_trusted = true;
			break;
			case 'gentium':
				$ttf_font_name = 'Gentium-R';
        $font_to_load_trusted = true;
			break;
			case 'gfsartemisia':
				$ttf_font_name = 'GFSArtemisia';
        $font_to_load_trusted = true;
			break;
			case 'gfsdidot':
				$ttf_font_name = 'GFSDidot';
        $font_to_load_trusted = true;
			break;
			case 'gfsneohellenic':
				$ttf_font_name = 'GFSNeohellenic';
        $font_to_load_trusted = true;
			break;
			case 'go':
				$ttf_font_name = 'Go-Regular';
        $font_to_load_trusted = true;
			break;
			case 'granapadano':
				$ttf_font_name = 'GranaPadano';
        $font_to_load_trusted = true;
			break;
			case 'gratiasans':
				$ttf_font_name = 'GratiaSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'hebertsans':
				$ttf_font_name = 'HebertSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'helvetiaverbundene':
				$ttf_font_name = 'helvetia-verbundene';
        $font_to_load_trusted = true;
			break;
			case 'heraclito':
				$ttf_font_name = 'Heraclito-Regular';
        $font_to_load_trusted = true;
			break;
			case 'hussar':
				$ttf_font_name = 'hussarbd-web';
        $font_to_load_trusted = true;
			break;
			case 'inconsolata':
				$ttf_font_name = 'Inconsolata-Regular';
        $font_to_load_trusted = true;
			break;
			case 'indictionunicode':
				$ttf_font_name = 'IndictionUnicode';
        $font_to_load_trusted = true;
			break;
			case 'iosevka':
				$ttf_font_name = 'iosevka-extended-regular';
        $font_to_load_trusted = true;
			break;
			case 'isabellasans':
				$ttf_font_name = 'IsabellaSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'iunito':
				$ttf_font_name = 'Iunito-Regular';
        $font_to_load_trusted = true;
			break;
			case 'jost':
				$ttf_font_name = 'Jost-Regular';
        $font_to_load_trusted = true;
			break;
			case 'jozsika':
				$ttf_font_name = 'jozsika-regular';
        $font_to_load_trusted = true;
			break;
			case 'jura':
				$ttf_font_name = 'Jura-Book';
        $font_to_load_trusted = true;
			break;
			case 'kawkabmono':
				$ttf_font_name = 'KawkabMono-Regular';
        $font_to_load_trusted = true;
			break;
			case 'lato':
				$ttf_font_name = 'Lato-Regular';
        $font_to_load_trusted = true;
			break;
			case 'liberationmono':
				$ttf_font_name = 'LiberationMono-Regular';
        $font_to_load_trusted = true;
			break;
			case 'liberationsans':
				$ttf_font_name = 'LiberationSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'liberationserif':
				$ttf_font_name = 'LiberationSerif-Regular';
        $font_to_load_trusted = true;
			break;
			case 'libertinage':
				$ttf_font_name = 'Libertinage';
        $font_to_load_trusted = true;
			break;
			case 'lierasans':
				$ttf_font_name = 'LieraSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'lmcv2mono':
				$ttf_font_name = 'LMCV2Mono';
        $font_to_load_trusted = true;
			break;
			case 'lobster':
				$ttf_font_name = 'Lobster';
        $font_to_load_trusted = true;
			break;
			case 'luculent':
				$ttf_font_name = 'luculent';
        $font_to_load_trusted = true;
			break;
			case 'marapfhont':
				$ttf_font_name = 'Marapfhont';
        $font_to_load_trusted = true;
			break;
			case 'miamanueva':
				$ttf_font_name = 'miamanueva';
        $font_to_load_trusted = true;
			break;
			case 'monoid':
				$ttf_font_name = 'Monoid-Regular';
        $font_to_load_trusted = true;
			break;
			case 'naturalmono':
				$ttf_font_name = 'Natural Mono-Regular';
        $font_to_load_trusted = true;
			break;
			case 'neocyr':
				$ttf_font_name = 'Neocyr';
        $font_to_load_trusted = true;
			break;
			case 'newscycle':
				$ttf_font_name = 'newscycle-regular';
        $font_to_load_trusted = true;
			break;
			case 'oldstandard':
				$ttf_font_name = 'OldStandard-Regular';
        $font_to_load_trusted = true;
			break;
			case 'osifont':
				$ttf_font_name = 'osifont';
        $font_to_load_trusted = true;
			break;
			case 'petrasans':
				$ttf_font_name = 'PetraSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'piazzolla':
				$ttf_font_name = 'Piazzolla-Regular';
        $font_to_load_trusted = true;
			break;
			case 'playfairdisplay':
				$ttf_font_name = 'PlayfairDisplay-Regular';
        $font_to_load_trusted = true;
			break;
			case 'prata':
				$ttf_font_name = 'Prata-Regular';
        $font_to_load_trusted = true;
			break;
			case 'raleway':
				$ttf_font_name = 'Raleway-Regular';
        $font_to_load_trusted = true;
			break;
			case 'risingsun':
				$ttf_font_name = 'RisingSun-Regular';
        $font_to_load_trusted = true;
			break;
			case 'rubik':
				$ttf_font_name = 'Rubik-Regular';
        $font_to_load_trusted = true;
			break;
			case 'russischsans':
				$ttf_font_name = 'RussischSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'sanitrixiesans':
				$ttf_font_name = 'SaniTrixieSans';
        $font_to_load_trusted = true;
			break;
			case 'semyonsoviet':
				$ttf_font_name = 'Semyon Soviet';
        $font_to_load_trusted = true;
			break;
			case 'sourcecodepro':
				$ttf_font_name = 'SourceCodePro-Regular';
        $font_to_load_trusted = true;
			break;
			case 'taylorsans':
				$ttf_font_name = 'TaylorSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'tipotype':
				$ttf_font_name = 'Tipotype';
        $font_to_load_trusted = true;
			break;
			case 'trujillo':
				$ttf_font_name = 'Trujillo-Regular';
        $font_to_load_trusted = true;
			break;
			case 'tt2020base':
				$ttf_font_name = 'TT2020Base-Regular';
        $font_to_load_trusted = true;
			break;
			case 'vds':
				$ttf_font_name = 'VDS_New';
        $font_to_load_trusted = true;
			break;
			case 'venrynsans':
				$ttf_font_name = 'VenrynSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'veranosans':
				$ttf_font_name = 'VeranoSans-Regular';
        $font_to_load_trusted = true;
			break;
			case 'vollkorn':
				$ttf_font_name = 'Vollkorn-Regular';
        $font_to_load_trusted = true;
			break;
			case 'winston':
				$ttf_font_name = 'Winston-Regular';
        $font_to_load_trusted = true;
			break;
			case 'xolonium':
				$ttf_font_name = 'Xolonium-Regular';
        $font_to_load_trusted = true;
			break;
			case 'zapussans':
				$ttf_font_name = 'ZapusSans-Regular';
        $font_to_load_trusted = true;
			break;
		}

		if ($ttf_font_name!='') {
			$output .= "
					@font-face {
					    font-family: '".$font_to_load."';
					    src: url('".get_template_directory_uri()."/fonts/".$ttf_font_name.".ttf') format('truetype');
					    font-weight: normal;
					    font-style: normal;
					}
					";
		}

		if($css_selector!='') {
			$output .= $css_selector .' { ';
			if($websafe_output!='') {
				$output .= '	font-family: '.$websafe_output.';';
			} else {
				$output .= '	font-family: '.$font_to_load.';';
			}
			$output .= ' } ';
		}

    if($font_to_load_trusted) {
  		echo "
  		";
  		echo $output;
  		echo "
  		";
    }
}

/*
 * CSS Customization stuff gets output here:
 */
function powerspeed_footer_css() {
	?><style type="text/css">

	body {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_text_color', '#000000')); ?>;
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_body_bg_color', '#FFFFFF')); ?>;
		<?php
			if( esc_url_raw(get_theme_mod('powerspeed_background_image_body', '')) != '' ) {
				echo "background-image: url('".esc_url_raw(get_theme_mod('powerspeed_background_image_body', ''))."'); ";
				echo 'background-repeat: '.esc_attr(get_theme_mod('powerspeed_background_image_body_repeat', 'no-repeat')).'; ';
				echo 'background-attachment: '.esc_attr(get_theme_mod('powerspeed_background_image_body_attachment', 'fixed')).'; ';
				echo 'background-position: '.esc_attr(get_theme_mod('powerspeed_background_image_body_position', 'center')).'; ';
			}
		?>
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_heading_tag_color', '#000000')); ?>;
	}

	.widget-wrapper h1,
	.widget-wrapper h2,
	.widget-wrapper h3,
	.widget-wrapper h4,
	.widget-wrapper h5,
	.widget-wrapper h6 {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_widget_heading_tag_color','#000000')); ?>;
	}

	.footer-widget-wrapper h1,
	.footer-widget-wrapper h2,
	.footer-widget-wrapper h3,
	.footer-widget-wrapper h4,
	.footer-widget-wrapper h5,
	.footer-widget-wrapper h6 {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_footer_widget_heading_tag_color','#000000')); ?>;
	}

	.powerspeed-content-card a:link,
	.powerspeed-content-card a:visited,
  .powerspeed-main-content-container a:link,
  .powerspeed-main-content-container a:visited {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_link_color', '#007bff')); ?>;
	}

	.powerspeed-content-card a:hover,
	.powerspeed-content-card a:active,
  .powerspeed-main-content-container a:link,
  .powerspeed-main-content-container a:visited {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_link_hover_color', '#004ea3'));?>;
	}

	#powerspeed-header {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_header_bg_color', '#FFFFFF'));?>;
		<?php
			if( esc_url_raw(get_theme_mod('powerspeed_background_image_header', '')) != '' ) {
				echo "background-image: url('".esc_url_raw(get_theme_mod('powerspeed_background_image_header', ''))."'); ";
				echo 'background-repeat: '.esc_attr(get_theme_mod('powerspeed_background_image_header_repeat', 'no-repeat')).'; ';
				echo 'background-attachment: '.esc_attr(get_theme_mod('powerspeed_background_image_header_attachment', 'fixed')).'; ';
				echo 'background-position: '.esc_attr(get_theme_mod('powerspeed_background_image_header_position', 'center')).'; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_header_top', 0)) != 0 ){
				echo 'margin-top:'.esc_attr(get_theme_mod('powerspeed_margin_header_top', 0)).'px; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_header_bottom', 0)) != 0 ){
				echo 'margin-bottom:'.esc_attr(get_theme_mod('powerspeed_margin_header_bottom', 0)).'px; ';
			}
		?>
	}

	#powerspeed-menu-area {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_bg_color', '#FFFFFF'));?>;
		<?php
			if( esc_url_raw(get_theme_mod('powerspeed_background_image_menu', '')) != '' ) {
				echo "background-image: url('".esc_url_raw(get_theme_mod('powerspeed_background_image_menu', ''))."'); ";
				echo 'background-repeat: '.esc_attr(get_theme_mod('powerspeed_background_image_menu_repeat', 'no-repeat')).'; ';
				echo 'background-attachment: '.esc_attr(get_theme_mod('powerspeed_background_image_menu_attachment', 'fixed')).'; ';
				echo 'background-position: '.esc_attr(get_theme_mod('powerspeed_background_image_menu_position', 'center')).'; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_menu_top', 0)) != 0 ){
				echo 'margin-top:'.esc_attr(get_theme_mod('powerspeed_margin_menu_top', 0)).'px; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_menu_bottom', 0)) != 0 ){
				echo 'margin-bottom:'.esc_attr(get_theme_mod('powerspeed_margin_menu_bottom', 0)).'px; ';
			}
		?>
	}

	<?php
	if( esc_attr(get_theme_mod('powerspeed_margin_main_content_top', 0)) != 0 ){
		echo 'article { margin-top:'.esc_attr(get_theme_mod('powerspeed_margin_main_content_top', 0)).'px; } ';
	}
	if( esc_attr(get_theme_mod('powerspeed_margin_main_content_bottom', 0)) != 0 ){
		echo 'article { margin-bottom:'.esc_attr(get_theme_mod('powerspeed_margin_main_content_bottom', 0)).'px; } ';
	}
	?>

	#powerspeed-main-menu ul li, .show {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_bg_color', '#FFFFFF'));?>;
		border-color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_border_color', '#FFFFFF'));?>;
	}

	#powerspeed-main-menu ul li a, .powerspeed-site-title-text {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_link_color', '#007bff')); ?>;
	}

	#powerspeed-main-menu ul li a:hover {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_hover_color', '#AAAAAA')); ?>;
	}

	.navbar-light .navbar-toggler {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_link_color', '#007bff')); ?>;
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_bg_color', '#FFFFFF'));?>;
		border-color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_border_color', '#FFFFFF'));?>;
	}

	.navbar-toggler:hover {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_hover_color', '#AAAAAA')); ?>;
	}

	#powerspeed-top-bar {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_topbar_color', '#FFFFFF'));?>;
		color:<?php echo esc_attr(get_theme_mod('powerspeed_topbar_text_color', '#000000'));?>;
		<?php
			if( esc_url_raw(get_theme_mod('powerspeed_background_image_topbar', '')) != '' ) {
				echo "background-image: url('".esc_url_raw(get_theme_mod('powerspeed_background_image_topbar', ''))."'); ";
				echo 'background-repeat: '.esc_attr(get_theme_mod('powerspeed_background_image_topbar_repeat', 'no-repeat')).'; ';
				echo 'background-attachment: '.esc_attr(get_theme_mod('powerspeed_background_image_topbar_attachment', 'fixed')).'; ';
				echo 'background-position: '.esc_attr(get_theme_mod('powerspeed_background_image_topbar_position', 'center')).'; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_topbar_top', 0)) != 0 ){
				echo 'margin-top:'.esc_attr(get_theme_mod('powerspeed_margin_topbar_top', 0)).'px; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_topbar_bottom', 0)) != 0 ){
				echo 'margin-bottom:'.esc_attr(get_theme_mod('powerspeed_margin_topbar_bottom', 0)).'px; ';
			}
		?>
	}

	#powerspeed-top-bar a {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_topbar_link_color', '#000000'));?>;
	}

	<?php
		if( esc_url_raw(get_theme_mod('powerspeed_background_image_maincontent', '')) != '' ) {
			echo ".powerspeed-content-card { background-image: url('".esc_url_raw(get_theme_mod('powerspeed_background_image_maincontent', ''))."'); ";
			echo 'background-repeat: '.esc_attr(get_theme_mod('powerspeed_background_image_maincontent_repeat', 'no-repeat')).'; ';
			echo 'background-attachment: '.esc_attr(get_theme_mod('powerspeed_background_image_maincontent_attachment', 'fixed')).'; ';
			echo 'background-position: '.esc_attr(get_theme_mod('powerspeed_background_image_maincontent_position', 'center')).'; }';
		}
	?>

	#powerspeed-entire-footer {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_footer_color', '#FFFFFF'));?>;
		color:<?php echo esc_attr(get_theme_mod('powerspeed_footer_text_color', '#000000'));?>;
		<?php
			if( esc_url_raw(get_theme_mod('powerspeed_background_image_footer', '')) != '' ) {
				echo "background-image: url('".esc_url_raw(get_theme_mod('powerspeed_background_image_footer', ''))."'); ";
				echo 'background-repeat: '.esc_attr(get_theme_mod('powerspeed_background_image_footer_repeat', 'no-repeat')).'; ';
				echo 'background-attachment: '.esc_attr(get_theme_mod('powerspeed_background_image_footer_attachment', 'fixed')).'; ';
				echo 'background-position: '.esc_attr(get_theme_mod('powerspeed_background_image_footer_position', 'center')).'; ';
			}
		?>
	}

	.widget-wrapper {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_widget_bg_color', '#FFFFFF'));?>;
		color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_widget_text_color', '#FFFFFF'));?>;
		<?php
			if( esc_url_raw(get_theme_mod('powerspeed_background_image_sidebar', '')) != '' ) {
				echo "background-image: url('".esc_url_raw(get_theme_mod('powerspeed_background_image_sidebar', ''))."'); ";
				echo 'background-repeat: '.esc_attr(get_theme_mod('powerspeed_background_image_sidebar_repeat', 'no-repeat')).'; ';
				echo 'background-attachment: '.esc_attr(get_theme_mod('powerspeed_background_image_sidebar_attachment', 'fixed')).'; ';
				echo 'background-position: '.esc_attr(get_theme_mod('powerspeed_background_image_sidebar_position', 'center')).'; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_sidebar_top', 0)) != 0 ){
				echo 'margin-top:'.esc_attr(get_theme_mod('powerspeed_margin_sidebar_top', 0)).'px; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_sidebar_bottom', 0)) != 0 ){
				echo 'margin-bottom:'.esc_attr(get_theme_mod('powerspeed_margin_sidebar_bottom', 0)).'px; ';
			}
		?>
	}

	.widget-wrapper a{
		color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_widget_link_color', '#007bff'));?> !important;
	}

	.footer-widget-wrapper {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_footer_widget_bg_color', '#FFFFFF'));?>;
		color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_footer_widget_text_color', '#FFFFFF'));?>;
		<?php
			if( esc_url_raw(get_theme_mod('powerspeed_background_image_footerwidget', '')) != '' ) {
				echo "background-image: url('".esc_url_raw(get_theme_mod('powerspeed_background_image_footerwidget', ''))."'); ";
				echo 'background-repeat: '.esc_attr(get_theme_mod('powerspeed_background_image_footerwidget_repeat', 'no-repeat')).'; ';
				echo 'background-attachment: '.esc_attr(get_theme_mod('powerspeed_background_image_footerwidget_attachment', 'fixed')).'; ';
				echo 'background-position: '.esc_attr(get_theme_mod('powerspeed_background_image_footerwidget_position', 'center')).'; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_footer_top', 0)) != 0 ){
				echo 'margin-top:'.esc_attr(get_theme_mod('powerspeed_margin_footer_top', 0)).'px; ';
			}
			if( esc_attr(get_theme_mod('powerspeed_margin_footer_bottom', 0)) != 0 ){
				echo 'margin-bottom:'.esc_attr(get_theme_mod('powerspeed_margin_footer_bottom', 0)).'px; ';
			}
		?>
	}

	.footer-widget-wrapper a {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_mainmenu_footer_widget_link_color', '#007bff'));?> !important;
	}

	.powerspeed-category {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_categories_bg_color', '#000000'));?>;
	}

	a.powerspeed-category,
	a:link.powerspeed-category,
	a:visited.powerspeed-category {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_categories_link_color', '#FFFFFF'));?> !important;
	}

	.powerspeed-tag {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_tags_bg_color', '#000000'));?>;
	}

	a.powerspeed-tag,
	a:link.powerspeed-tag,
	a:visited.powerspeed-tag {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_tags_link_color', '#FFFFFF'));?> !important;
	}


	<?php
		if( esc_url_raw(get_theme_mod('powerspeed_background_image_jumbotron', '')) != '' ) {
			echo ".jumbotron { background-image: url('".esc_url_raw(get_theme_mod('powerspeed_background_image_jumbotron', ''))."'); ";
			echo 'background-repeat: '.esc_attr(get_theme_mod('powerspeed_background_image_jumbotron_repeat', 'no-repeat')).'; ';
			echo 'background-attachment: '.esc_attr(get_theme_mod('powerspeed_background_image_jumbotron_attachment', 'fixed')).'; ';
			echo 'background-position: '.esc_attr(get_theme_mod('powerspeed_background_image_jumbotron_position', 'center')).'; }';
		}
		if( esc_attr(get_theme_mod('powerspeed_margin_jumbotron_top', 0)) != 0 ){
			echo '#powerspeed-jumbotron { margin-top:'.esc_attr(get_theme_mod('powerspeed_margin_jumbotron_top', 0)).'px; } ';
		}
		if( esc_attr(get_theme_mod('powerspeed_margin_jumbotron_bottom', 0)) != 0 ){
			echo '#powerspeed-jumbotron { margin-bottom:'.esc_attr(get_theme_mod('powerspeed_margin_jumbotron_bottom', 0)).'px; } ';
		}
		if( esc_attr(get_theme_mod('powerspeed_margin_slideshow_top', 0)) != 0 ){
			echo '#powerspeed-slideshow { margin-top:'.esc_attr(get_theme_mod('powerspeed_margin_slideshow_top', 0)).'px; } ';
		}
		if( esc_attr(get_theme_mod('powerspeed_margin_slideshow_bottom', 0)) != 0 ){
			echo '#powerspeed-slideshow { margin-bottom:'.esc_attr(get_theme_mod('powerspeed_margin_slideshow_bottom', 0)).'px; } ';
		}
    if( esc_attr(get_theme_mod('powerspeed_margin_featured_top', 0)) != 0 ){
			echo '.powerspeed-featured-posts { margin-top:'.esc_attr(get_theme_mod('powerspeed_margin_featured_top', 0)).'px; } ';
		}
		if( esc_attr(get_theme_mod('powerspeed_margin_featured_bottom', 0)) != 0 ){
			echo '.powerspeed-featured-posts { margin-bottom:'.esc_attr(get_theme_mod('powerspeed_margin_featured_bottom', 0)).'px; } ';
		}

	?>

	.jumbotron,
	.jumbotron-heading {
		background-color:<?php echo esc_attr(get_theme_mod('powerspeed_frontpage_jumbotron_color', '#FFFFFF'));?>;
		color:<?php echo esc_attr(get_theme_mod('powerspeed_frontpage_jumbotron_text_color', '#000000'));?>;
	}

	a.jumbotron,
	a:link.jumbotron,
	a:visited.jumbotron,
	.jumbotron-link {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_frontpage_jumbotron_link_color', '#000000'));?> !important;
	}

	.carousel-caption,
	h5.carousel-caption,
	.carousel-caption h5 {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_frontpage_slideshow_text_color', '#FFFFFF'));?>;
	}

	a.carousel-caption,
	a:link.carousel-caption,
	a:visited.carousel-caption,
	.powerspeed-slideshow-link {
		color:<?php echo esc_attr(get_theme_mod('powerspeed_frontpage_slideshow_link_color', '#007bff'));?> !important;
	}

	.powerspeed-main-content-container {
		border-width: <?php echo esc_attr(get_theme_mod('powerspeed_border_width_main_content', 1));?>px !important;
	}

	.powerspeed-sidebar-section {
		border-width: <?php echo esc_attr(get_theme_mod('powerspeed_border_width_sidebar', 1));?>px !important;
	}

	.powerspeed-footer-sidebars {
		border-width: <?php echo esc_attr(get_theme_mod('powerspeed_border_width_footer', 1));?>px !important;
	}

	<?php

	if (esc_attr(get_theme_mod('powerspeed_typography_content_font', '')) != '' ) {
		powerspeed_custom_font(esc_attr(get_theme_mod('powerspeed_typography_content_font', '')), '#powerspeed-main-content, .powerspeed-main-content-container, .powerspeed-content-card ');
	}
	if (esc_attr(get_theme_mod('powerspeed_typography_header_font', '')) != '' ) {
		powerspeed_custom_font(esc_attr(get_theme_mod('powerspeed_typography_header_font', '')), 'h1, h2, h3, h4, h5, h6 ');
	}
	if (esc_attr(get_theme_mod('powerspeed_typography_sidebar_content_font', '')) != '' ) {
		powerspeed_custom_font(esc_attr(get_theme_mod('powerspeed_typography_sidebar_content_font', '')), '.widget-wrapper ');
	}
	if (esc_attr(get_theme_mod('powerspeed_typography_menu_font', '')) != '' ) {
		powerspeed_custom_font(esc_attr(get_theme_mod('powerspeed_typography_menu_font', '')), '#powerspeed-main-menu ul li ');
	}
	if (esc_attr(get_theme_mod('powerspeed_typography_sidebar_header_font', '')) != '' ) {
		powerspeed_custom_font(esc_attr(get_theme_mod('powerspeed_typography_sidebar_header_font', '')), '.widget-wrapper h1, .widget-wrapper h2, .widget-wrapper h3, .widget-wrapper h4, .widget-wrapper h5, .widget-wrapper h6 ');
	}
	if (esc_attr(get_theme_mod('powerspeed_typography_footer_widget_content_font', '')) != '' ) {
		powerspeed_custom_font(esc_attr(get_theme_mod('powerspeed_typography_footer_widget_content_font', '')), '.footer-widget-wrapper, #powerspeed-entire-footer ');
	}
	if (esc_attr(get_theme_mod('powerspeed_typography_footer_widget_header_font', '')) != '' ) {
		powerspeed_custom_font(esc_attr(get_theme_mod('powerspeed_typography_footer_widget_header_font', '')), '.footer-widget-wrapper h1, .footer-widget-wrapper h2, .footer-widget-wrapper h3, .footer-widget-wrapper h4, .footer-widget-wrapper h5, .footer-widget-wrapper h6 ');
	}

	?>

	</style><?php

}
add_action( 'wp_footer', 'powerspeed_footer_css', 9999);

/*
 * Theme configuration generic function
 */
function powerspeed_config() {

	/*
	 * Set the content width
	 */
	if ( ! isset( $content_width ) ) $content_width = 1140;

	/*
	 * Internationalization and localization support is added here
	 */
	load_theme_textdomain( 'powerspeed', get_template_directory() . '/languages/' );

	/*
	 * Menus are important and this is where we register them
	 */
	register_nav_menus(
		array(
			'powerspeed_main_menu' => __('Main Menu','powerspeed'),
			'powerspeed_footer' => __('Footer menu','powerspeed')
		)
	);

	/*
	 * Custom header support
	 */
	add_theme_support( 'custom-header', array( 'width' => 1920, 'height' => 220, 'flex-width' => false, 'flex-height' => false ) );

	/*
	 * Post thumbnail support
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Post thumbnail support
	 */
	add_theme_support( 'post-formats', array('video', 'image') );

	/*
	 * Add HTML5 support for everything
	 */
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	/*
	 * Title tag is handled by WordPress
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Automatic feed links
	 */
	add_theme_support( 'automatic-feed-links' );

  /*
	 * Support for Woocommerce
	 */
  add_theme_support( 'woocommerce' );
	add_theme_support( 'wp-product-gallery-zoom' );
	add_theme_support( 'wp-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	/*
	 * Support for a custom logo
	 */
	add_theme_support( 'custom-logo', array('width'=>200,'height'=>200,  'flex-height' => true, 'flex-width'  => true) );

	/*
	 * Add Gutenberg support
	 */
	//add_theme_support( 'align-wide' ); // Nope.  Couldn't make this work in a way that didn't break the sidebar


	/**
	 * Register Custom Navigation Walker
	 */
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

}
add_action( 'after_setup_theme', 'powerspeed_config', 100 );

function powerspeed_remove_product_image_link( $html, $post_id ) {
    return preg_replace( "!<(a|/a).*?>!", '', $html );
}
add_filter( 'woocommerce_single_product_image_thumbnail_html', 'powerspeed_remove_product_image_link', 10, 2 );


if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'PowerSpeed_Customizer_Content' ) ) {
	class PowerSpeed_Customizer_Content extends WP_Customize_Control {

		// Whitelist content parameter
		public $content = '';

		/**
		 * Render the control's content.
		 *
		 * Allows the content to be overriden without having to rewrite the wrapper.
		 *
		 * @since   1.0.0
		 * @return  void
		 */
		public function render_content() {
			if ( isset( $this->label ) ) {
				echo '<hr /><h1 class="customize-control-title" style="font-size:200%;">' . $this->label . '</h1>';
			}
			if ( isset( $this->content ) ) {
				echo $this->content;
			}
			if ( isset( $this->description ) ) {
				echo '<span class="description customize-control-description">' . $this->description . '</span>';
			}
		}
	}
}


/*
 * Returns a string of html output containing the selected featured posts
 */
function powerspeed_featured_posts($posttype='post', $count=3, $style='card', $rows=1, $sort='DESC') {

	$output = '';

  // 1 is the minimum enforced number of rows
  if($rows < 1) {
    $rows = 1;
  }

  // Find our column threshold before starting a new row and use a temporary counter to determine when to create a new row
	$thresh = $count / $rows;
  $tempcount = 0;

	$featured_posts_query = new WP_Query( array( 'post_type'=> $posttype, 'posts_per_page' => $count, 'order' => $sort, 'post_status' => 'publish', 'no_found_rows' => true, 'ignore_sticky_posts' => 1 ) );
	if($featured_posts_query->have_posts() ) {
			$output .='<div class="container-fluid">';
      $output .= '<div class="row">';
	    while ( $featured_posts_query->have_posts() ) {
         if($rows > 1 && ($tempcount >= $thresh)) {
           $output .='</div><div class="row">';
           $tempcount = 0;
         }
				 $featured_posts_query->the_post();
				 $output .= '<div class="col-sm ';
         if($style=='card') {
           $output .= 'card ';
         } elseif ($style=='portfolio') {
           $output .= 'portfolio ';
         }
         $output .= '">';

         if($style=='card') {
           $output .= '<a href="'.get_the_permalink().'">';
  				 if (has_post_thumbnail()  ) {
  				 		$output .= get_the_post_thumbnail(null, 'thumbnail', array( 'class' => 'card-img-top img-fluid mx-auto d-block', 'style' => 'width:'.get_option( 'thumbnail_size_w' ).'px; height: auto;' ));
  		 		 } else {
  					 	$output .= '<img src="'.get_template_directory_uri().'/images/transparent-512x256.png" alt="" class="card-img-top img-fluid" />';
  				 }
  				 $output .= '</a>';
         } elseif ($style=='portfolio') {
  				 if (has_post_thumbnail()  ) {
              $output .= '<a href="'.get_the_permalink().'"><div class="col-sm col-centered text-center portfolio-featured-item" style="background-size: cover; background-image: url(\''.get_the_post_thumbnail_url(null, 'thumbnail').'\');">';
              $output .= '<a href="'.get_the_permalink().'"><h3 class="text-center portfolio-featured-title">'.get_the_title().'</h3></a>';
              $output .= '</div></a>';
  		 		 } else {
              $output .= '<a href="'.get_the_permalink().'"><div class="col-sm col-centered text-center portfolio-featured-item" style="background-size: cover; background-image: url(\''.get_template_directory_uri().'/images/transparent-512x256.png\');">';
              $output .= '<a href="'.get_the_permalink().'"><h3 class="text-center portfolio-featured-title">'.get_the_title().'</h3></a>';
              $output .= '</div></a>';
  				 }

         }

         if ($style=='card') {
	          $output .= '<a href="'.get_the_permalink().'"><h3>'.get_the_title().'</h3></a>';
            $output .= '<div>'.get_the_excerpt().'</div>';
         }
				 $output .= '</div>';
         $tempcount++;
	    }
			$output .= '</div></div>';
	    wp_reset_postdata();
	}

	return $output;

}


/*
 * Returns an array without the selected value
 */

function powerspeed_remove_array_by_value($array, $value)
{
    $array = array_flip($array);
    unset($array[$value]);
    $array = array_flip($array);

    return $array;
}


/*
 * Returns an array for use as the array of values and names for a dropdown control in the Customizer.  Not super optimized, but only called one time when an admin uses the customzier, so it good enough for now.
 */
function powerspeed_array_of_post_types() {
	global $wp_post_types;

  $returnable_array_of_types = array_combine ( array_keys( $wp_post_types ), array_keys( $wp_post_types ) );

  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'attachment');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'revision');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'nav_menu_item');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'custom_css');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'customize_changeset');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'oembed_cache');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'user_request');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'product_variation');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'product');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'shop_order');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'shop_order_refund');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'shop_coupon');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'promo_materials');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'press_releases');
  $returnable_array_of_types = powerspeed_remove_array_by_value($returnable_array_of_types, 'wp_block');

	return $returnable_array_of_types;
}

/*
 * Customize appearance options.
 *
 * There are hundreds of settings, so to make it both easier to scroll through, yet a bit harder to read, I've elected to keep most of these on a single line and use mult-line for new sections for now.
 * @todo
 */
function powerspeed_register_customize_options( $wp_customize ) {

	/*
	 * Link color customization option
	 */
	$wp_customize->add_setting('powerspeed_heading_tag_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_text_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_link_color', array('default' => '#007bff', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_link_hover_color', array('default' => '#004ea3', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_body_bg_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_header_bg_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_topbar_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_topbar_text_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_topbar_link_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_footer_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_footer_text_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_link_color', array('default' => '#007bff', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_bg_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_tags_link_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_categories_link_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_tags_bg_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_categories_bg_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_border_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_hover_color', array('default' => '#AAAAAA', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_widget_link_color', array('default' => '#007bff', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_widget_heading_tag_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_widget_text_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_widget_bg_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_footer_widget_link_color', array('default' => '#007bff', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_footer_widget_heading_tag_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_footer_widget_text_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_mainmenu_footer_widget_bg_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_frontpage_jumbotron_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_frontpage_jumbotron_text_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_frontpage_jumbotron_link_color', array('default' => '#000000', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_frontpage_slideshow_text_color', array('default' => '#FFFFFF', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );
	$wp_customize->add_setting('powerspeed_frontpage_slideshow_link_color', array('default' => '#007bff', 'transport' => 'refresh', 'sanitize_callback'=>'esc_attr' ) );

	/*
	 * Header customization options
	 */
	$wp_customize->add_setting('powerspeed_section_header_show_header', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_header_show_search', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_header_compact_alert', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_header_alert_type', array('sanitize_callback'=>'esc_attr', 'default' => 'primary', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_header_alert', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_header_alert_text', array('sanitize_callback'=>'esc_attr', 'default' => __('You can put important notices and alerts here!', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_header_alert_link', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_header_alert_link_text', array('sanitize_callback'=>'esc_attr', 'default' => __('Learn more...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_menu_big', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
  $wp_customize->add_setting('powerspeed_section_menu_align', array('sanitize_callback'=>'esc_attr', 'default' => 'left', 'transport' => 'refresh' ) );

	/*
	 * Footer customization options
	 */
	$wp_customize->add_setting('powerspeed_section_footer_copyright', array('sanitize_callback'=>'esc_attr', 'default' => __('Copyright &copy; ', 'powerspeed'). date('Y') . ' '. get_bloginfo( 'name' ) .'. '. __('All rights reserved.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_footer_copyright_align', array('sanitize_callback'=>'esc_attr', 'default' => 'left', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_footer_show_widgets', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );


	/*
	 * Border customization options
	 */
	$wp_customize->add_setting('powerspeed_border_main_content_type', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting('powerspeed_border_width_main_content', array('sanitize_callback'=>'esc_attr', 'default' => 1, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_border_sidebar_content_type', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting('powerspeed_border_width_sidebar', array('sanitize_callback'=>'esc_attr', 'default' => 1, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_border_footer_content_type', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'postMessage' ) );
	$wp_customize->add_setting('powerspeed_border_width_footer', array('sanitize_callback'=>'esc_attr', 'default' => 1, 'transport' => 'refresh' ) );

	/*
	 * Margin customization options
	 */
	$wp_customize->add_setting('powerspeed_margin_header_top', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_header_bottom', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_topbar_top', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_topbar_bottom', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_menu_top', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_menu_bottom', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_main_content_top', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_main_content_bottom', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_sidebar_top', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_sidebar_bottom', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_footer_top', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_footer_bottom', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_jumbotron_top', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_jumbotron_bottom', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_slideshow_top', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_slideshow_bottom', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
  $wp_customize->add_setting('powerspeed_margin_featured_top', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_margin_featured_bottom', array('sanitize_callback'=>'esc_attr', 'default' => 0, 'transport' => 'refresh' ) );

	/*
	 * Social media icons customization options
	 */
	$wp_customize->add_setting('powerspeed_section_social_media_icon_width', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_icon_height', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_deviantart', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_email', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_facebook', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_flickr', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_instagram', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_linkedin', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_pinterest', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_rss', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_share', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_tumblr', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_twitter', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_vimeo', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_social_media_youtube', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );

	/*
	 * Layout customization options
	 */
	$wp_customize->add_setting('powerspeed_section_header_fluid_header', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_header_image_fluid_header', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_header_menu_fluid_header', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_jumbotron_fluid', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_fluid', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_main_content_fluid', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_footer_content_fluid', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
  $wp_customize->add_setting('powerspeed_default_template_type', array('sanitize_callback'=>'esc_attr', 'default' => 'rightsidebar', 'transport' => 'refresh' ) );

	/*
	 * Typography customization options
	 */
	$wp_customize->add_setting('powerspeed_typography_header_font', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_typography_content_font', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_typography_menu_font', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_typography_sidebar_header_font', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_typography_sidebar_content_font', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_typography_footer_widget_header_font', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_typography_footer_widget_content_font', array('sanitize_callback'=>'esc_attr', 'default' => '', 'transport' => 'refresh' ) );

	/*
	 * Blog index page customization options
	 */
	$wp_customize->add_setting('powerspeed_section_blog_show_metabox', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_blog_show_author', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_blog_show_categories', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_blog_show_tags', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
  $wp_customize->add_setting('powerspeed_section_page_show_metabox', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
  $wp_customize->add_setting('powerspeed_section_page_show_author', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
  $wp_customize->add_setting('powerspeed_section_page_show_categories', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
  $wp_customize->add_setting('powerspeed_section_page_show_tags', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_blog_pagination_link_type', array('sanitize_callback'=>'esc_attr', 'default' => 'btn btn-primary', 'transport' => 'refresh' ) );

	/*
	 * Front page customization options
	 */
	$wp_customize->add_setting('powerspeed_frontpage_template_type', array('sanitize_callback'=>'esc_attr', 'default' => 'nosidebar', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_frontpage_order', array('sanitize_callback'=>'esc_attr', 'default' => 'default', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_featured_posts', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_featured_posts_heading', array('sanitize_callback'=>'esc_attr', 'default' => __('Featured Posts', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_featured_posts_text', array('sanitize_callback'=>'esc_attr', 'default' => __('Here are some of the best articles on the site.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_featured_posts_style', array('sanitize_callback'=>'esc_attr', 'default' => 'card', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_featured_posts_location', array('sanitize_callback'=>'esc_attr', 'default' => 'top', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_featured_posts_type', array('sanitize_callback'=>'esc_attr', 'default' => 'post', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_featured_posts_amount', array('sanitize_callback'=>'esc_attr', 'default' => 3, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_featured_posts_rows', array('sanitize_callback'=>'esc_attr', 'default' => 1, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_jumbotron', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_jumbotron_heading', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_jumbotron_text', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_jumbotron_subtext', array('sanitize_callback'=>'esc_attr', 'default' => __('Final messages or the first call to action.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_jumbotron_link', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_jumbotron_link_text', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_jumbotron_link_type', array('sanitize_callback'=>'esc_attr', 'default' => 'btn btn-primary', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow', array('sanitize_callback'=>'esc_attr', 'default' => false, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_transition', array('sanitize_callback'=>'esc_attr', 'default' => 'slide', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_arrows', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_indicators', array('sanitize_callback'=>'esc_attr', 'default' => true, 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_class', array('sanitize_callback'=>'esc_attr', 'default' => 'btn btn-primary', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_heading_a', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_text_a', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_a', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_text_a', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_image_url_a', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_heading_b', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_text_b', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_b', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_text_b', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_image_url_b', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_heading_c', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_text_c', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_c', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_text_c', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_image_url_c', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_heading_d', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_text_d', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_d', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_text_d', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_image_url_d', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_heading_e', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_text_e', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_e', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_text_e', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_image_url_e', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_heading_f', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_text_f', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_f', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_text_f', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_image_url_f', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_heading_g', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_text_g', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_g', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_text_g', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_image_url_g', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_heading_h', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_text_h', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_h', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_text_h', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_image_url_h', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_heading_i', array('sanitize_callback'=>'esc_attr', 'default' => __('Attention Grabbing Headline', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_text_i', array('sanitize_callback'=>'esc_attr', 'default' => __('A feature followed by a benefit that solves your problem.', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_i', array('sanitize_callback'=>'esc_url', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_link_text_i', array('sanitize_callback'=>'esc_attr', 'default' => __('Click here now...', 'powerspeed'), 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_section_frontpage_slideshow_image_url_i', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );

	$wp_customize->add_setting('powerspeed_background_image_body', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_body_repeat', array('sanitize_callback'=>'esc_attr', 'default' => 'no-repeat', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_body_attachment', array('sanitize_callback'=>'esc_attr', 'default' => 'fixed', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_body_position', array('sanitize_callback'=>'esc_attr', 'default' => 'center', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_header', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_header_repeat', array('sanitize_callback'=>'esc_attr', 'default' => 'no-repeat', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_header_attachment', array('sanitize_callback'=>'esc_attr', 'default' => 'fixed', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_header_position', array('sanitize_callback'=>'esc_attr', 'default' => 'center', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_topbar', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_topbar_repeat', array('sanitize_callback'=>'esc_attr', 'default' => 'no-repeat', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_topbar_attachment', array('sanitize_callback'=>'esc_attr', 'default' => 'fixed', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_topbar_position', array('sanitize_callback'=>'esc_attr', 'default' => 'center', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_menu', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_menu_repeat', array('sanitize_callback'=>'esc_attr', 'default' => 'no-repeat', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_menu_attachment', array('sanitize_callback'=>'esc_attr', 'default' => 'fixed', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_menu_position', array('sanitize_callback'=>'esc_attr', 'default' => 'center', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_maincontent', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_maincontent_repeat', array('sanitize_callback'=>'esc_attr', 'default' => 'no-repeat', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_maincontent_attachment', array('sanitize_callback'=>'esc_attr', 'default' => 'fixed', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_maincontent_position', array('sanitize_callback'=>'esc_attr', 'default' => 'center', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_sidebar', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_sidebar_repeat', array('sanitize_callback'=>'esc_attr', 'default' => 'no-repeat', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_sidebar_attachment', array('sanitize_callback'=>'esc_attr', 'default' => 'fixed', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_sidebar_position', array('sanitize_callback'=>'esc_attr', 'default' => 'center', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_jumbotron', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_jumbotron_repeat', array('sanitize_callback'=>'esc_attr', 'default' => 'no-repeat', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_jumbotron_attachment', array('sanitize_callback'=>'esc_attr', 'default' => 'fixed', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_jumbotron_position', array('sanitize_callback'=>'esc_attr', 'default' => 'center', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_footer', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_footer_repeat', array('sanitize_callback'=>'esc_attr', 'default' => 'no-repeat', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_footer_attachment', array('sanitize_callback'=>'esc_attr', 'default' => 'fixed', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_footer_position', array('sanitize_callback'=>'esc_attr', 'default' => 'center', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_footerwidget', array('sanitize_callback'=>'esc_url_raw', 'default' => '', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_footerwidget_repeat', array('sanitize_callback'=>'esc_attr', 'default' => 'no-repeat', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_footerwidget_attachment', array('sanitize_callback'=>'esc_attr', 'default' => 'fixed', 'transport' => 'refresh' ) );
	$wp_customize->add_setting('powerspeed_background_image_footerwidget_position', array('sanitize_callback'=>'esc_attr', 'default' => 'center', 'transport' => 'refresh' ) );

	/*
	 * Custom Sections
	 */
	$wp_customize->add_section('powerspeed_section_layout', array('title' => __('Basic Layout', 'powerspeed'), 'priority'=>1) );
	$wp_customize->add_section('powerspeed_section_typography', array('title' => __('Typography & Fonts', 'powerspeed'), 'priority'=>2) );
	$wp_customize->add_section('powerspeed_section_bgimg', array('title' => __('Background Images', 'powerspeed'), 'priority'=>3) );
	$wp_customize->add_section('powerspeed_section_borders', array('title' => __('Borders', 'powerspeed'), 'priority'=>4) );
	$wp_customize->add_section('powerspeed_section_header', array('title' => __('Header', 'powerspeed'), 'priority'=>59) );
	$wp_customize->add_section('powerspeed_section_social_media', array('title' => __('Social Media', 'powerspeed'), 'priority'=>61) );
	$wp_customize->add_section('powerspeed_section_frontpage', array('title' => __('Frontpage Options', 'powerspeed'), 'priority'=>121) );
	$wp_customize->add_section('powerspeed_section_blog', array('title' => __('Blog Index, Posts & Archives', 'powerspeed'), 'priority'=>122) );
	$wp_customize->add_section('powerspeed_section_footer', array('title' => __('Footer', 'powerspeed'), 'priority'=>123) );

	/*
	 * The Controls
	 *
	 * The new settings in this block of code are for the labels which have a throw away setting that isn't really used and so is defined down here instead of above
	 */
	$wp_customize->add_setting( 'powerspeed_layout_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_layout_label_control', array(
 		 'section' => 'powerspeed_section_layout',
 		 'settings' => 'powerspeed_layout_label',
 		 'label' => __( 'Fixed or Fluid Width', 'powerspeed' ),
 		 'content' => __( 'You can use PowerSpeed as either a fixed-width theme, a fluid theme or a combination of both using the settings below.  If unchecked, the area will be at maximum 1140px in width.  If checked, the area will be 100% the full-width of the view port.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( 'powerspeed_header_fluid_header_checkbox', array('label'=>__('Fluid width for the top-bar?', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_section_header_fluid_header', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_header_image_fluid_header_checkbox', array('label'=>__('Fluid width for the header image?', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_section_header_image_fluid_header', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_header_menu_fluid_header_checkbox', array('label'=>__('Fluid width for the main menu and logo area?', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_section_header_menu_fluid_header', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_jumbotron_fluid', array('label'=>__('Fluid width for the front page jumbotron?', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_section_frontpage_jumbotron_fluid', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_fluid', array('label'=>__('Fluid width for the front page slideshow?', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_section_frontpage_slideshow_fluid', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_main_content_fluid_checkbox', array('label'=>__('Fluid width for the main content area?', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_section_main_content_fluid', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_footer_content_fluid_checkbox', array('label'=>__('Fluid width for the footer area?', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_section_footer_content_fluid', 'type'=>'checkbox' )  );
	$wp_customize->add_setting( 'powerspeed_default_template_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_default_template_label_control', array(
 		 'section' => 'powerspeed_section_layout',
 		 'settings' => 'powerspeed_default_template_label',
 		 'label' => __( 'Default Template', 'powerspeed' ),
 		 'content' => __( 'You can use PowerSpeed with a left sidebar, a right sidebar or no sidebar by default.  You can over-ride this setting on any individual page, post or custom post type by selecting a different template in the editor.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( 'powerspeed_default_template_type_dropdown', array('label'=>__('Where do you want your sidebar by default?', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_default_template_type', 'type'=>'select', 'choices' => array('leftsidebar' => __('Left Sidebar', 'powerspeed'), 'rightsidebar' => __('Right Sidebar', 'powerspeed'), 'nosidebar' => __('No Sidebar', 'powerspeed') )));

	$wp_customize->add_setting( 'powerspeed_margins_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_default_template_label_control', array(
 		 'section' => 'powerspeed_section_layout',
 		 'settings' => 'powerspeed_margins_label',
 		 'label' => __( 'Margins', 'powerspeed' ),
 		 'content' => __( 'You can increase or decrease top and bottom margins between all the main PowerSpeed components.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( 'powerspeed_margin_header_top_control', array('label'=>__('Header Top Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_header_top', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_header_bottom_control', array('label'=>__('Header Bottom Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_header_bottom', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_topbar_top_control', array('label'=>__('Topbar Top Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_topbar_top', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_topbar_bottom_control', array('label'=>__('Topbar Bottom Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_topbar_bottom', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_menu_top_control', array('label'=>__('Menu Top Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_menu_top', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_menu_bottom_control', array('label'=>__('Menu Bottom Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_menu_bottom', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_main_content_top_control', array('label'=>__('Article Top Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_main_content_top', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_main_content_bottom_control', array('label'=>__('Article Bottom Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_main_content_bottom', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_sidebar_top_control', array('label'=>__('Sidebar Widgets Top Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_sidebar_top', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_sidebar_bottom_control', array('label'=>__('Sidebar Widgets Bottom Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_sidebar_bottom', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_footer_top_control', array('label'=>__('Footer Widgets Top Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_footer_top', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_footer_bottom_control', array('label'=>__('Footer Widgets Bottom Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_footer_bottom', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_jumbotron_top_control', array('label'=>__('Frontpage Jumbotron Top Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_jumbotron_top', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_jumbotron_bottom_control', array('label'=>__('Frontpage Jumbotron Bottom Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_jumbotron_bottom', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_slideshow_top_control', array('label'=>__('Frontpage Slideshow Top Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_slideshow_top', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_slideshow_bottom_control', array('label'=>__('Frontpage Slideshow Bottom Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_slideshow_bottom', 'type'=>'number' )  );
  $wp_customize->add_control( 'powerspeed_margin_featured_top_control', array('label'=>__('Frontpage Featured Posts Top Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_featured_top', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_margin_featured_bottom_control', array('label'=>__('Frontpage Featured Posts Bottom Margin', 'powerspeed'), 'section' => 'powerspeed_section_layout', 'settings' => 'powerspeed_margin_featured_bottom', 'type'=>'number' )  );


	$wp_customize->add_setting( 'powerspeed_typography_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_typography_label_control', array(
 		 'section' => 'powerspeed_section_typography',
 		 'settings' => 'powerspeed_typography_label',
 		 'label' => __( 'Change Fonts', 'powerspeed' ),
 		 'content' => __( 'For performance, you should always use a web-safe font that requires no download.  However, sacrificing performance for typography is a valid choice.  PowerSpeed has 90 fonts included with the theme in addition to the web-safe fonts.  Font size is included so that you understand the performance penalty for each one.', 'powerspeed' ),
 	) ) );

	$powerspeed_font_selection_array =	array(
			'' => __('Default (No performance penalty)', 'powerspeed'),
			'arial' => __('Arial, Helvetica (Web Safe)', 'powerspeed'),
			'arialblack' => __('Arial Black, Gadget (Web Safe)', 'powerspeed'),
			'comicsans' => __('Comic Sans (Web Safe)', 'powerspeed'),
			'courier' => __('Courier New, Courier (Web Safe)', 'powerspeed'),
			'georgia' => __('Georgia (Web Safe)', 'powerspeed'),
			'impact' => __('Impact, Charcoal (Web Safe)', 'powerspeed'),
			'lucidaconsole' => __('Lucida Console, Monaco (Web Safe)', 'powerspeed'),
			'lucida' => __('Lucida San, Lucida Grande (Web Safe)', 'powerspeed'),
			'palatino' => __('Palatino, Book Antiqua (Web Safe)', 'powerspeed'),
			'tahoma' => __('Tahoma, Geneva (Web Safe)', 'powerspeed'),
			'times' => __('Times New Roman (Web Safe)', 'powerspeed'),
			'trebuchet' => __('Trebuchet, Helvetica (Web Safe)', 'powerspeed'),
			'verdana' => __('Verdana, Geneva (Web Safe)', 'powerspeed'),
			'0xa000' => __('0xA000 (63 KB)', 'powerspeed'),
			'aardvark' => __('Aardvark Fixed (390 KB)', 'powerspeed'),
			'abibas' => __('Abibas (90 KB)', 'powerspeed'),
			'acarisans' => __('Acari Sans (167 KB)', 'powerspeed'),
			'amaranth' => __('Amaranth (78 KB)', 'powerspeed'),
			'amaticsc' => __('Amatic SC (167 KB)', 'powerspeed'),
			'amburegul' => __('Amburegul (29 KB)', 'powerspeed'),
			'anonymouspro' => __('Anonymous Pro (155 KB)', 'powerspeed'),
			'bretan' => __('Bretan (39 KB)', 'powerspeed'),
			'cabin' => __('Cabin (96 KB)', 'powerspeed'),
			'cambay' => __('Cambay Devanagari (223 KB)', 'powerspeed'),
			'carlito' => __('Carlito (622 KB)', 'powerspeed'),
			'clickuper' => __('Clickuper (89 KB)', 'powerspeed'),
			'comfortaa' => __('Comfortaa (192 KB)', 'powerspeed'),
			'comicrelief' => __('ComicRelief (69 KB)', 'powerspeed'),
			'constructium' => __('Constructium (598 KB)', 'powerspeed'),
			'cormorant' => __('Cormorant (421 KB)', 'powerspeed'),
			'coval' => __('Coval (514 KB)', 'powerspeed'),
			'crimson' => __('Crimson (229 KB)', 'powerspeed'),
			'crosterian' => __('Crosterian (153 KB)', 'powerspeed'),
			'crusoetext' => __('Crusoe Text (81 KB)', 'powerspeed'),
			'didactgothic' => __('Didact Gothic (850 KB)', 'powerspeed'),
			'elmessiri' => __('El Messiri (118 KB)', 'powerspeed'),
			'evolventa' => __('Evolventa (95 KB)', 'powerspeed'),
			'ezarion' => __('Ezarion (113 KB)', 'powerspeed'),
			'fairfaxhd' => __('Fairfax HD (1.59 MB)', 'powerspeed'),
			'fantasquesansmono' => __('FantasqueSansMono (165 KB)', 'powerspeed'),
			'firacode' => __('Fira Code (161 KB)', 'powerspeed'),
			'firamono' => __('Fira Mono (171 KB)', 'powerspeed'),
			'fyodor' => __('Fyodor (56 KB)', 'powerspeed'),
			'gapsans' => __('Gap Sans (29 KB)', 'powerspeed'),
			'gentium' => __('Gentium (355 KB)', 'powerspeed'),
			'gfsartemisia' => __('GFS Artemisia (609 KB)', 'powerspeed'),
			'gfsdidot' => __('GFS Didot (323 KB)', 'powerspeed'),
			'gfsneohellenic' => __('GFS Neohellenic (472 KB)', 'powerspeed'),
			'go' => __('Go (132 KB)', 'powerspeed'),
			'granapadano' => __('Grana Padano (86 KB)', 'powerspeed'),
			'gratiasans' => __('Gratia Sans (208 KB)', 'powerspeed'),
			'hebertsans' => __('Hebert Sans (525 KB)', 'powerspeed'),
			'helvetiaverbundene' => __('Helvetia Verbundene (404 KB)', 'powerspeed'),
			'heraclito' => __('Heraclito (287 KB)', 'powerspeed'),
			'hussar' => __('Hussar (43 KB)', 'powerspeed'),
			'inconsolata' => __('Inconsolata (79 KB)', 'powerspeed'),
			'indictionunicode' => __('Indiction Unicode (313 KB)', 'powerspeed'),
			'iosevka' => __('Iosevka Extended (532 KB)', 'powerspeed'),
			'isabellasans' => __('Isabella Sans (463 KB)', 'powerspeed'),
			'iunito' => __('Iunito (132 KB)', 'powerspeed'),
			'jost' => __('Jost (68 KB)', 'powerspeed'),
			'jozsika' => __('Jozsika (272 KB)', 'powerspeed'),
			'jura' => __('Jura (356 KB)', 'powerspeed'),
			'kawkabmono' => __('Kawkab Mono (259 KB)', 'powerspeed'),
			'lato' => __('Lato (642 KB)', 'powerspeed'),
			'liberationmono' => __('Liberation Mono (307 KB)', 'powerspeed'),
			'liberationsans' => __('Liberation Sans (342 KB)', 'powerspeed'),
			'liberationserif' => __('Liberation Serif (380 KB)', 'powerspeed'),
			'libertinage' => __('Libertinage (499 KB)', 'powerspeed'),
			'lierasans' => __('Liera Sans (223 KB)', 'powerspeed'),
			'lmcv2mono' => __('Love Me Chain V2 Mono (114 KB)', 'powerspeed'),
			'lobster' => __('Lobster (420 KB)', 'powerspeed'),
			'luculent' => __('Luculent (93 KB)', 'powerspeed'),
			'marapfhont' => __('Marapfhont (133 KB)', 'powerspeed'),
			'miamanueva' => __('Miama Nueva (389 KB)', 'powerspeed'),
			'monoid' => __('Monoid (81 KB)', 'powerspeed'),
			'naturalmono' => __('Natural Mono (100 KB)', 'powerspeed'),
			'neocyr' => __('Neocyr (27 KB)', 'powerspeed'),
			'newscycle' => __('News Cycle (189 KB)', 'powerspeed'),
			'oldstandard' => __('Old Standard (308 KB)', 'powerspeed'),
			'osifont' => __('Osifont (51 KB)', 'powerspeed'),
			'petrasans' => __('Petra Sans (99 KB)', 'powerspeed'),
			'piazzolla' => __('Piazzolla (235 KB)', 'powerspeed'),
			'playfairdisplay' => __('Playfair Display (194 KB)', 'powerspeed'),
			'prata' => __('Prata (106 KB)', 'powerspeed'),
			'raleway' => __('Raleway (173 KB)', 'powerspeed'),
			'risingsun' => __('Rising Sun (143 KB)', 'powerspeed'),
			'rubik' => __('Rubik (216 KB)', 'powerspeed'),
			'russischsans' => __('Russisch Sans (121 KB)', 'powerspeed'),
			'sanitrixiesans' => __('Sani Trixie Sans (24 KB)', 'powerspeed'),
			'semyonsoviet' => __('Semyon Soviet (22 KB)', 'powerspeed'),
			'sourcecodepro' => __('Source Code Pro (194 KB)', 'powerspeed'),
			'taylorsans' => __('Taylor Sans (164 KB)', 'powerspeed'),
			'tipotype' => __('Tipotype (117 KB)', 'powerspeed'),
			'trujillo' => __('Trujillo (494 KB)', 'powerspeed'),
			'tt2020base' => __('TT2020Base (161 KB)', 'powerspeed'),
			'vds' => __('VDS New (189 KB)', 'powerspeed'),
			'venrynsans' => __('Venryn Sans (108 KB)', 'powerspeed'),
			'veranosans' => __('Verano Sans (694 KB)', 'powerspeed'),
			'vollkorn' => __('Vollkorn (115 KB)', 'powerspeed'),
			'winston' => __('Winston (211 KB)', 'powerspeed'),
			'xolonium' => __('Xolonium (225 KB)', 'powerspeed'),
			'zapussans' => __('Zapus Sans (1.02 MB)', 'powerspeed')
		);

	$wp_customize->add_control( 'powerspeed_typography_header_font_dropdown', array('label'=>__('Header Tags (H1, H2, etc.)', 'powerspeed'),'section' => 'powerspeed_section_typography','settings' => 'powerspeed_typography_header_font','type'=>'select','choices' => $powerspeed_font_selection_array));
	$wp_customize->add_control( 'powerspeed_typography_content_font_dropdown', array('label'=>__('Main Content', 'powerspeed'),'section' => 'powerspeed_section_typography','settings' => 'powerspeed_typography_content_font','type'=>'select','choices' => $powerspeed_font_selection_array));
	$wp_customize->add_control( 'powerspeed_typography_menu_font_dropdown', array('label'=>__('Main Menu', 'powerspeed'),'section' => 'powerspeed_section_typography','settings' => 'powerspeed_typography_menu_font','type'=>'select','choices' => $powerspeed_font_selection_array));
	$wp_customize->add_control( 'powerspeed_typography_sidebar_font_dropdown', array('label'=>__('Sidebar Header', 'powerspeed'),'section' => 'powerspeed_section_typography','settings' => 'powerspeed_typography_sidebar_header_font','type'=>'select','choices' => $powerspeed_font_selection_array));
	$wp_customize->add_control( 'powerspeed_typography_sidebar_content_font_dropdown', array('label'=>__('Sidebar Content', 'powerspeed'),'section' => 'powerspeed_section_typography','settings' => 'powerspeed_typography_sidebar_content_font','type'=>'select','choices' => $powerspeed_font_selection_array));
	$wp_customize->add_control( 'powerspeed_typography_widget_font_dropdown', array('label'=>__('Footer Widget Header', 'powerspeed'),'section' => 'powerspeed_section_typography','settings' => 'powerspeed_typography_footer_widget_header_font','type'=>'select','choices' => $powerspeed_font_selection_array));
	$wp_customize->add_control( 'powerspeed_typography_widget_content_font_dropdown', array('label'=>__('Footer Content', 'powerspeed'),'section' => 'powerspeed_section_typography','settings' => 'powerspeed_typography_footer_widget_content_font','type'=>'select','choices' => $powerspeed_font_selection_array));


	$wp_customize->add_setting( 'powerspeed_bgimg_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label',
 		 'label' => __( 'Background Images', 'powerspeed' ),
 		 'content' => __( 'You can choose background images for all of the repeating areas of your site such as the header, sidebar and other sections.  You can use transparent png images in order to use the background color you configure in the Colors Customizer section.', 'powerspeed' ),
 	) ) );

	$wp_customize->add_setting( 'powerspeed_bgimg_label_body', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control_body', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label_body',
 		 'label' => __( 'Body Background', 'powerspeed' ),
 		 'content' => __( 'This background image is applied directly to the body tag, the root element of all pages.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_background_image_body', array('label'=>__('The background image for the entire body of the site.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_body', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_background_image_body_repeat', array('label'=>__('Repeat settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_body_repeat', 'type'=>'select', 'choices' => array('repeat' => __('Horizontal and vertical repeating.', 'powerspeed'), 'repeat-x' => __('Horizontal only repeating.', 'powerspeed'), 'repeat-y' => __('Vertical only repeating.', 'powerspeed'), 'no-repeat' => __('No repeating.', 'powerspeed'), 'space' => __('Repeat without clipping.', 'powerspeed'), 'round' => __('Stretch or shrink to fit.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_body_attachment', array('label'=>__('Attachment settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_body_attachment', 'type'=>'select', 'choices' => array('scroll' => __('Scroll with the page.', 'powerspeed'), 'fixed' => __('Fixed position, no scroll.', 'powerspeed'), 'local' => __('Scroll inside local element only.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_body_position', array('label'=>__('Position settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_body_position', 'type'=>'select', 'choices' => array('left top' => __('Top left.', 'powerspeed'), 'center top' => __('Top center.', 'powerspeed'), 'right top' => __('Top right.', 'powerspeed'), 'left center' => __('Center left.', 'powerspeed'), 'center' => __('Center.', 'powerspeed'), 'right center' => __('Center right.', 'powerspeed'), 'left bottom' => __('Bottom left.', 'powerspeed'), 'center bottom' => __('Bottom center.', 'powerspeed'), 'right bottom' => __('Bottom right.', 'powerspeed')  ) ) );

	$wp_customize->add_setting( 'powerspeed_bgimg_label_header', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control_header', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label_header',
 		 'label' => __( 'Header Background', 'powerspeed' ),
 		 'content' => __( 'This background image is applied to the header area at the top.  This is the background image.  Note that there is an optional dedicated header image area as well.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_background_image_header', array('label'=>__('The background image for the header of the site.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_header', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_background_image_header_repeat', array('label'=>__('Repeat settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_header_repeat', 'type'=>'select', 'choices' => array('repeat' => __('Horizontal and vertical repeating.', 'powerspeed'), 'repeat-x' => __('Horizontal only repeating.', 'powerspeed'), 'repeat-y' => __('Vertical only repeating.', 'powerspeed'), 'no-repeat' => __('No repeating.', 'powerspeed'), 'space' => __('Repeat without clipping.', 'powerspeed'), 'round' => __('Stretch or shrink to fit.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_header_attachment', array('label'=>__('Attachment settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_header_attachment', 'type'=>'select', 'choices' => array('scroll' => __('Scroll with the page.', 'powerspeed'), 'fixed' => __('Fixed position, no scroll.', 'powerspeed'), 'local' => __('Scroll inside local element only.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_header_position', array('label'=>__('Position settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_header_position', 'type'=>'select', 'choices' => array('left top' => __('Top left.', 'powerspeed'), 'center top' => __('Top center.', 'powerspeed'), 'right top' => __('Top right.', 'powerspeed'), 'left center' => __('Center left.', 'powerspeed'), 'center' => __('Center.', 'powerspeed'), 'right center' => __('Center right.', 'powerspeed'), 'left bottom' => __('Bottom left.', 'powerspeed'), 'center bottom' => __('Bottom center.', 'powerspeed'), 'right bottom' => __('Bottom right.', 'powerspeed')  ) ) );

	$wp_customize->add_setting( 'powerspeed_bgimg_label_topbar', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control_topbar', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label_topbar',
 		 'label' => __( 'Topbar Background', 'powerspeed' ),
 		 'content' => __( 'This background image is applied to the optional topbar area in the header.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_background_image_topbar', array('label'=>__('The background image for the topbar of the site.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_topbar', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_background_image_topbar_repeat', array('label'=>__('Repeat settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_topbar_repeat', 'type'=>'select', 'choices' => array('repeat' => __('Horizontal and vertical repeating.', 'powerspeed'), 'repeat-x' => __('Horizontal only repeating.', 'powerspeed'), 'repeat-y' => __('Vertical only repeating.', 'powerspeed'), 'no-repeat' => __('No repeating.', 'powerspeed'), 'space' => __('Repeat without clipping.', 'powerspeed'), 'round' => __('Stretch or shrink to fit.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_topbar_attachment', array('label'=>__('Attachment settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_topbar_attachment', 'type'=>'select', 'choices' => array('scroll' => __('Scroll with the page.', 'powerspeed'), 'fixed' => __('Fixed position, no scroll.', 'powerspeed'), 'local' => __('Scroll inside local element only.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_topbar_position', array('label'=>__('Position settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_topbar_position', 'type'=>'select', 'choices' => array('left top' => __('Top left.', 'powerspeed'), 'center top' => __('Top center.', 'powerspeed'), 'right top' => __('Top right.', 'powerspeed'), 'left center' => __('Center left.', 'powerspeed'), 'center' => __('Center.', 'powerspeed'), 'right center' => __('Center right.', 'powerspeed'), 'left bottom' => __('Bottom left.', 'powerspeed'), 'center bottom' => __('Bottom center.', 'powerspeed'), 'right bottom' => __('Bottom right.', 'powerspeed')  ) ) );

	$wp_customize->add_setting( 'powerspeed_bgimg_label_menu', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control_menu', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label_menu',
 		 'label' => __( 'Main Menu Background', 'powerspeed' ),
 		 'content' => __( 'This background image is applied to the main menu area in the header.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_background_image_menu', array('label'=>__('The background image for the main menu of the site.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_menu', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_background_image_menu_repeat', array('label'=>__('Repeat settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_menu_repeat', 'type'=>'select', 'choices' => array('repeat' => __('Horizontal and vertical repeating.', 'powerspeed'), 'repeat-x' => __('Horizontal only repeating.', 'powerspeed'), 'repeat-y' => __('Vertical only repeating.', 'powerspeed'), 'no-repeat' => __('No repeating.', 'powerspeed'), 'space' => __('Repeat without clipping.', 'powerspeed'), 'round' => __('Stretch or shrink to fit.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_menu_attachment', array('label'=>__('Attachment settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_menu_attachment', 'type'=>'select', 'choices' => array('scroll' => __('Scroll with the page.', 'powerspeed'), 'fixed' => __('Fixed position, no scroll.', 'powerspeed'), 'local' => __('Scroll inside local element only.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_menu_position', array('label'=>__('Position settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_menu_position', 'type'=>'select', 'choices' => array('left top' => __('Top left.', 'powerspeed'), 'center top' => __('Top center.', 'powerspeed'), 'right top' => __('Top right.', 'powerspeed'), 'left center' => __('Center left.', 'powerspeed'), 'center' => __('Center.', 'powerspeed'), 'right center' => __('Center right.', 'powerspeed'), 'left bottom' => __('Bottom left.', 'powerspeed'), 'center bottom' => __('Bottom center.', 'powerspeed'), 'right bottom' => __('Bottom right.', 'powerspeed')  ) ) );

	$wp_customize->add_setting( 'powerspeed_bgimg_label_maincontent', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control_maincontent', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label_maincontent',
 		 'label' => __( 'Main Content Background', 'powerspeed' ),
 		 'content' => __( 'This background image is applied to the main content area that displays pages, posts, archives and more.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_background_image_maincontent', array('label'=>__('The background image for the main content area of the site.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_maincontent', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_background_image_maincontent_repeat', array('label'=>__('Repeat settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_maincontent_repeat', 'type'=>'select', 'choices' => array('repeat' => __('Horizontal and vertical repeating.', 'powerspeed'), 'repeat-x' => __('Horizontal only repeating.', 'powerspeed'), 'repeat-y' => __('Vertical only repeating.', 'powerspeed'), 'no-repeat' => __('No repeating.', 'powerspeed'), 'space' => __('Repeat without clipping.', 'powerspeed'), 'round' => __('Stretch or shrink to fit.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_maincontent_attachment', array('label'=>__('Attachment settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_maincontent_attachment', 'type'=>'select', 'choices' => array('scroll' => __('Scroll with the page.', 'powerspeed'), 'fixed' => __('Fixed position, no scroll.', 'powerspeed'), 'local' => __('Scroll inside local element only.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_maincontent_position', array('label'=>__('Position settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_maincontent_position', 'type'=>'select', 'choices' => array('left top' => __('Top left.', 'powerspeed'), 'center top' => __('Top center.', 'powerspeed'), 'right top' => __('Top right.', 'powerspeed'), 'left center' => __('Center left.', 'powerspeed'), 'center' => __('Center.', 'powerspeed'), 'right center' => __('Center right.', 'powerspeed'), 'left bottom' => __('Bottom left.', 'powerspeed'), 'center bottom' => __('Bottom center.', 'powerspeed'), 'right bottom' => __('Bottom right.', 'powerspeed')  ) ) );

	$wp_customize->add_setting( 'powerspeed_bgimg_label_sidebar', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control_sidebar', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label_sidebar',
 		 'label' => __( 'Sidebar Background', 'powerspeed' ),
 		 'content' => __( 'This background image is applied to the main sidebar area.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_background_image_sidebar', array('label'=>__('The background image for the main sidebar area of the site.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_sidebar', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_background_image_sidebar_repeat', array('label'=>__('Repeat settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_sidebar_repeat', 'type'=>'select', 'choices' => array('repeat' => __('Horizontal and vertical repeating.', 'powerspeed'), 'repeat-x' => __('Horizontal only repeating.', 'powerspeed'), 'repeat-y' => __('Vertical only repeating.', 'powerspeed'), 'no-repeat' => __('No repeating.', 'powerspeed'), 'space' => __('Repeat without clipping.', 'powerspeed'), 'round' => __('Stretch or shrink to fit.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_sidebar_attachment', array('label'=>__('Attachment settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_sidebar_attachment', 'type'=>'select', 'choices' => array('scroll' => __('Scroll with the page.', 'powerspeed'), 'fixed' => __('Fixed position, no scroll.', 'powerspeed'), 'local' => __('Scroll inside local element only.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_sidebar_position', array('label'=>__('Position settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_sidebar_position', 'type'=>'select', 'choices' => array('left top' => __('Top left.', 'powerspeed'), 'center top' => __('Top center.', 'powerspeed'), 'right top' => __('Top right.', 'powerspeed'), 'left center' => __('Center left.', 'powerspeed'), 'center' => __('Center.', 'powerspeed'), 'right center' => __('Center right.', 'powerspeed'), 'left bottom' => __('Bottom left.', 'powerspeed'), 'center bottom' => __('Bottom center.', 'powerspeed'), 'right bottom' => __('Bottom right.', 'powerspeed')  ) ) );

	$wp_customize->add_setting( 'powerspeed_bgimg_label_footer', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control_footer', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label_footer',
 		 'label' => __( 'Footer Background', 'powerspeed' ),
 		 'content' => __( 'This background image is applied to the footer.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_background_image_footer', array('label'=>__('The background image for the footer of the site.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_footer', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_background_image_footer_repeat', array('label'=>__('Repeat settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_footer_repeat', 'type'=>'select', 'choices' => array('repeat' => __('Horizontal and vertical repeating.', 'powerspeed'), 'repeat-x' => __('Horizontal only repeating.', 'powerspeed'), 'repeat-y' => __('Vertical only repeating.', 'powerspeed'), 'no-repeat' => __('No repeating.', 'powerspeed'), 'space' => __('Repeat without clipping.', 'powerspeed'), 'round' => __('Stretch or shrink to fit.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_footer_attachment', array('label'=>__('Attachment settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_footer_attachment', 'type'=>'select', 'choices' => array('scroll' => __('Scroll with the page.', 'powerspeed'), 'fixed' => __('Fixed position, no scroll.', 'powerspeed'), 'local' => __('Scroll inside local element only.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_footer_position', array('label'=>__('Position settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_footer_position', 'type'=>'select', 'choices' => array('left top' => __('Top left.', 'powerspeed'), 'center top' => __('Top center.', 'powerspeed'), 'right top' => __('Top right.', 'powerspeed'), 'left center' => __('Center left.', 'powerspeed'), 'center' => __('Center.', 'powerspeed'), 'right center' => __('Center right.', 'powerspeed'), 'left bottom' => __('Bottom left.', 'powerspeed'), 'center bottom' => __('Bottom center.', 'powerspeed'), 'right bottom' => __('Bottom right.', 'powerspeed')  ) ) );

	$wp_customize->add_setting( 'powerspeed_bgimg_label_footerwidget', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control_footerwidget', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label_footerwidget',
 		 'label' => __( 'Footer Sidebars Background', 'powerspeed' ),
 		 'content' => __( 'This background image is applied to the footer sidebar areas.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_background_image_footerwidget', array('label'=>__('The background image for the footer sidebar areas of the site.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_footerwidget', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_background_image_footerwidget_repeat', array('label'=>__('Repeat settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_footerwidget_repeat', 'type'=>'select', 'choices' => array('repeat' => __('Horizontal and vertical repeating.', 'powerspeed'), 'repeat-x' => __('Horizontal only repeating.', 'powerspeed'), 'repeat-y' => __('Vertical only repeating.', 'powerspeed'), 'no-repeat' => __('No repeating.', 'powerspeed'), 'space' => __('Repeat without clipping.', 'powerspeed'), 'round' => __('Stretch or shrink to fit.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_footerwidget_attachment', array('label'=>__('Attachment settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_footerwidget_attachment', 'type'=>'select', 'choices' => array('scroll' => __('Scroll with the page.', 'powerspeed'), 'fixed' => __('Fixed position, no scroll.', 'powerspeed'), 'local' => __('Scroll inside local element only.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_footerwidget_position', array('label'=>__('Position settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_footerwidget_position', 'type'=>'select', 'choices' => array('left top' => __('Top left.', 'powerspeed'), 'center top' => __('Top center.', 'powerspeed'), 'right top' => __('Top right.', 'powerspeed'), 'left center' => __('Center left.', 'powerspeed'), 'center' => __('Center.', 'powerspeed'), 'right center' => __('Center right.', 'powerspeed'), 'left bottom' => __('Bottom left.', 'powerspeed'), 'center bottom' => __('Bottom center.', 'powerspeed'), 'right bottom' => __('Bottom right.', 'powerspeed')  ) ) );

	$wp_customize->add_setting( 'powerspeed_bgimg_label_jumbotron', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_bgimg_label_control_jumbotron', array(
 		 'section' => 'powerspeed_section_bgimg',
 		 'settings' => 'powerspeed_bgimg_label_jumbotron',
 		 'label' => __( 'Frontpage Jumbotron Background', 'powerspeed' ),
 		 'content' => __( 'This background image is applied to the optional jumbotron on the frontpage.', 'powerspeed' ),
 	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_background_image_jumbotron', array('label'=>__('The background image for the jumbotron on the front page.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_jumbotron', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_background_image_jumbotron_repeat', array('label'=>__('Repeat settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_jumbotron_repeat', 'type'=>'select', 'choices' => array('repeat' => __('Horizontal and vertical repeating.', 'powerspeed'), 'repeat-x' => __('Horizontal only repeating.', 'powerspeed'), 'repeat-y' => __('Vertical only repeating.', 'powerspeed'), 'no-repeat' => __('No repeating.', 'powerspeed'), 'space' => __('Repeat without clipping.', 'powerspeed'), 'round' => __('Stretch or shrink to fit.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_jumbotron_attachment', array('label'=>__('Attachment settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_jumbotron_attachment', 'type'=>'select', 'choices' => array('scroll' => __('Scroll with the page.', 'powerspeed'), 'fixed' => __('Fixed position, no scroll.', 'powerspeed'), 'local' => __('Scroll inside local element only.', 'powerspeed') ) ) );
	$wp_customize->add_control( 'powerspeed_background_image_jumbotron_position', array('label'=>__('Position settings.', 'powerspeed'), 'section' => 'powerspeed_section_bgimg', 'settings' => 'powerspeed_background_image_jumbotron_position', 'type'=>'select', 'choices' => array('left top' => __('Top left.', 'powerspeed'), 'center top' => __('Top center.', 'powerspeed'), 'right top' => __('Top right.', 'powerspeed'), 'left center' => __('Center left.', 'powerspeed'), 'center' => __('Center.', 'powerspeed'), 'right center' => __('Center right.', 'powerspeed'), 'left bottom' => __('Bottom left.', 'powerspeed'), 'center bottom' => __('Bottom center.', 'powerspeed'), 'right bottom' => __('Bottom right.', 'powerspeed')  ) ) );


	$wp_customize->add_setting( 'powerspeed_borders_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
 	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_borders_label_control', array(
 		 'section' => 'powerspeed_section_borders',
 		 'settings' => 'powerspeed_borders_label',
 		 'label' => __( 'Borders', 'powerspeed' ),
 		 'content' => __( 'You can mix and match different border types for different common sections.', 'powerspeed' ),
 	) ) );

	$wp_customize->add_control( 'powerspeed_border_main_content_type_control', array('label'=>__('Main Content: Select a border style to use.', 'powerspeed'), 'section' => 'powerspeed_section_borders', 'settings' => 'powerspeed_border_main_content_type', 'type'=>'select', 'choices' => array('rounded-0 border-0' => __('No borders', 'powerspeed'), 'border rounded-0' => __('Border', 'powerspeed'), 'rounded-sm' => __('Small Rounded', 'powerspeed'), 'rounded' => __('Medium Rounded', 'powerspeed'), 'rounded-lg' => __('Large Rounded', 'powerspeed'), 'rounded-circle' => __('Rounded Circle', 'powerspeed'), 'rounded-pill' => __('Rounded Pill', 'powerspeed') )));
	$wp_customize->add_control( 'powerspeed_border_width_main_content_control', array('label'=>__('Border Width', 'powerspeed'), 'section' => 'powerspeed_section_borders', 'settings' => 'powerspeed_border_width_main_content', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_border_sidebar_content_type_control', array('label'=>__('Sidebar: Select a border style to use.', 'powerspeed'), 'section' => 'powerspeed_section_borders', 'settings' => 'powerspeed_border_sidebar_content_type', 'type'=>'select', 'choices' => array('rounded-0 border-0' => __('No borders', 'powerspeed'), 'border rounded-0' => __('Border', 'powerspeed'), 'rounded-sm' => __('Small Rounded', 'powerspeed'), 'rounded' => __('Medium Rounded', 'powerspeed'), 'rounded-lg' => __('Large Rounded', 'powerspeed'), 'rounded-circle' => __('Rounded Circle', 'powerspeed'), 'rounded-pill' => __('Rounded Pill', 'powerspeed') )));
	$wp_customize->add_control( 'powerspeed_border_width_sidebar_control', array('label'=>__('Border Width', 'powerspeed'), 'section' => 'powerspeed_section_borders', 'settings' => 'powerspeed_border_width_sidebar', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_border_footer_content_type_control', array('label'=>__('Footer: Select a border style to use.', 'powerspeed'), 'section' => 'powerspeed_section_borders', 'settings' => 'powerspeed_border_footer_content_type', 'type'=>'select', 'choices' => array('rounded-0 border-0' => __('No borders', 'powerspeed'), 'border rounded-0' => __('Border', 'powerspeed'), 'rounded-sm' => __('Small Rounded', 'powerspeed'), 'rounded' => __('Medium Rounded', 'powerspeed'), 'rounded-lg' => __('Large Rounded', 'powerspeed'), 'rounded-circle' => __('Rounded Circle', 'powerspeed'), 'rounded-pill' => __('Rounded Pill', 'powerspeed') )));
	$wp_customize->add_control( 'powerspeed_border_width_footer_control', array('label'=>__('Border Width', 'powerspeed'), 'section' => 'powerspeed_section_borders', 'settings' => 'powerspeed_border_width_footer', 'type'=>'number' )  );

	$wp_customize->add_setting( 'powerspeed_default_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_default_label_control', array(
		 'section' => 'colors',
		 'settings' => 'powerspeed_default_label',
		 'label' => __( 'Defaults', 'powerspeed' ),
		 'content' => __( 'The core text, link, and background colors.', 'powerspeed' ),
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_body_bg_color_control', array('label'=>__('Main Body Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_body_bg_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_heading_tag_color_control', array('label'=>__('Heading Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_heading_tag_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_text_color_control', array('label'=>__('Default Text Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_text_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_link_color_control', array('label'=>__('Default Link Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_link_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_link_hover_color_control', array('label'=>__('Default Link Hover Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_link_hover_color' ) ) );

	$wp_customize->add_setting( 'powerspeed_header_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_header_label_control', array(
	 'section' => 'colors',
	 'settings' => 'powerspeed_header_label',
	 'label' => __( 'Header', 'powerspeed' ),
	 'content' => __( 'General color options for the header.  Other parts of the header including the top-bar and main menu have sections of their own below.', 'powerspeed' ),
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_header_color_control', array('label'=>__('Header Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_header_bg_color' ) ) );

	$wp_customize->add_setting( 'powerspeed_topbar_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_topbar_label_control', array(
	 'section' => 'colors',
	 'settings' => 'powerspeed_topbar_label',
	 'label' => __( 'Top Bar', 'powerspeed' ),
	 'content' => __( 'The optional top bar.  If you do not see any changes in the preview, you probably have it disabled.', 'powerspeed' ),
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_topbar_color_control', array('label'=>__('Top Bar Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_topbar_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_topbar_text_color_control', array('label'=>__('Top Bar Text Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_topbar_text_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_topbar_link_color_control', array('label'=>__('Top Bar Link Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_topbar_link_color' ) ) );

	$wp_customize->add_setting( 'powerspeed_mainmenu_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_mainmenu_label_control', array(
	 'section' => 'colors',
	 'settings' => 'powerspeed_mainmenu_label',
	 'label' => __( 'Main Menu & Logo', 'powerspeed' ),
	 'content' => __( 'The main menu and logo area of the header.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_link_color_control', array('label'=>__('Main Menu & Site Title Text Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_link_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_hover_color_control', array('label'=>__('Main Menu Hover Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_hover_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_bg_color_control', array('label'=>__('Main Menu Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_bg_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_border_color_control', array('label'=>__('Main Menu Border Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_border_color' ) ) );

	$wp_customize->add_setting( 'powerspeed_sidebar_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_sidebar_label_control', array(
	 'section' => 'colors',
	 'settings' => 'powerspeed_sidebar_label',
	 'label' => __( 'Main Sidebar', 'powerspeed' ),
	 'content' => __( 'The main sidebar and widgets.  Other widget areas have their own colors.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_widget_link_color_control', array('label'=>__('Sidebar Widget Link Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_widget_link_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_widget_heading_tag_color_control', array('label'=>__('Sidebar Widget Heading Tag Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_widget_heading_tag_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_widget_text_color_control', array('label'=>__('Sidebar Widget Text Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_widget_text_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_widget_bg_color_control', array('label'=>__('Sidebar Widget Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_widget_bg_color' ) ) );

	$wp_customize->add_setting( 'powerspeed_tagcolor_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_tagcolor_label_control', array(
	 'section' => 'colors',
	 'settings' => 'powerspeed_tagcolor_label',
	 'label' => __( 'Tags &amp; Categories', 'powerspeed' ),
	 'content' => __( 'Wherever tags or categories are displayed, these colors apply.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_tags_link_color_control', array('label'=>__('Tag Link Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_tags_link_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_tags_bg_color_control', array('label'=>__('Tag Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_tags_bg_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_categories_link_color_control', array('label'=>__('Categories Link Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_categories_link_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_categories_bg_color_control', array('label'=>__('Categories Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_categories_bg_color' ) ) );

	$wp_customize->add_setting( 'powerspeed_footer_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_footer_label_control', array(
	 'section' => 'colors',
	 'settings' => 'powerspeed_footer_label',
	 'label' => __( 'Footer', 'powerspeed' ),
	 'content' => __( 'The core colors used in the footer.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_footer_color_control', array('label'=>__('Footer Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_footer_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_footer_text_color_control', array('label'=>__('Footer Text Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_footer_text_color' ) ) );

	$wp_customize->add_setting( 'powerspeed_footerwidget_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_footerwidget_label_control', array(
	 'section' => 'colors',
	 'settings' => 'powerspeed_footerwidget_label',
	 'label' => __( 'Footer Widgets', 'powerspeed' ),
	 'content' => __( 'The colors used in the footer widgets.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_footer_widget_link_color_control', array('label'=>__('Footer Widget Link Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_footer_widget_link_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_footer_widget_heading_tag_color_control', array('label'=>__('Footer Widget Heading Tag Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_footer_widget_heading_tag_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_footer_widget_text_color_control', array('label'=>__('Footer Widget Text Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_footer_widget_text_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_mainmenu_footer_widget_bg_color_control', array('label'=>__('Footer Widget Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_mainmenu_footer_widget_bg_color' ) ) );

	$wp_customize->add_setting( 'powerspeed_frontpage_jumbotron_color_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_frontpage_jumbotron_color_label_control', array(
	 'section' => 'colors',
	 'settings' => 'powerspeed_frontpage_jumbotron_color_label',
	 'label' => __( 'Front-Page Jumbotron', 'powerspeed' ),
	 'content' => __( 'The colors used in the optional jumbotron on the front-page.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_frontpage_jumbotron_color_control', array('label'=>__('Jumbotron Background Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_frontpage_jumbotron_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_frontpage_jumbotron_text_color_control', array('label'=>__('Jumbotron Text Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_frontpage_jumbotron_text_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_frontpage_jumbotron_link_color_control', array('label'=>__('Jumbotron Link Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_frontpage_jumbotron_link_color' ) ) );

	$wp_customize->add_setting( 'powerspeed_frontpage_slideshow_color_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_frontpage_slideshow_color_label_control', array(
	 'section' => 'colors',
	 'settings' => 'powerspeed_frontpage_slideshow_color_label',
	 'label' => __( 'Front-Page Slideshow', 'powerspeed' ),
	 'content' => __( 'The colors used in the optional slideshow on the front-page.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_frontpage_slideshow_text_color_control', array('label'=>__('Slideshow Text Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_frontpage_slideshow_text_color' ) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'powerspeed_frontpage_slideshow_link_color_control', array('label'=>__('Slideshow Link Color', 'powerspeed'), 'section' => 'colors', 'settings' => 'powerspeed_frontpage_slideshow_link_color' ) ) );


	$wp_customize->add_setting( 'powerspeed_top_bar_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_top_bar_label_control', array(
		 'section' => 'powerspeed_section_header',
		 'settings' => 'powerspeed_top_bar_label',
		 'label' => __( 'Top Bar', 'powerspeed' ),
		 'content' => __( 'The optional top-bar is a row above the header image, logo, and menu.  The top-bar can display your social media icons, a search box and/or an alert message to your visitors.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( 'powerspeed_header_show_header_checkbox', array('label'=>__('Display the top-bar that contains the social media icons, alert, and search box?', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_header_show_header', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_header_show_header_search', array('label'=>__('Display the search box in the top-bar?', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_header_show_search', 'type'=>'checkbox' )  );

	$wp_customize->add_setting( 'powerspeed_top_bar_alert_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_top_bar_alert_label_control', array(
		 'section' => 'powerspeed_section_header',
		 'settings' => 'powerspeed_top_bar_alert_label',
		 'label' => __( 'Alert in the Top Bar', 'powerspeed' ),
		 'content' => __( 'The optional alert allows you to put a message to your visitors at the top of every page.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( 'powerspeed_header_show_header_alert', array('label'=>__('Display the alert in the top-bar?', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_header_alert', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_header_show_header_compact_alert', array('label'=>__('Place the alert in the same row as the social media icons and search bar?  This will help to reduce the size of the top-bar.  If unchecked, the alert will have a row to itself below the search and social media icons.', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_header_compact_alert', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_header_show_header_alert_type', array('label'=>__('What style or type of alert is this?', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_header_alert_type', 'type'=>'select', 'choices' => array('unstyled' => __('Unstyled Alert', 'powerspeed'), 'primary' => __('Primary', 'powerspeed'), 'secondary' => __('Secondary', 'powerspeed'), 'success' => __('Success', 'powerspeed'), 'danger' => __('Danger', 'powerspeed'), 'warning' => __('Warning', 'powerspeed'), 'info' => __('Info', 'powerspeed'), 'light' => __('Light', 'powerspeed'), 'dark' => __('Dark', 'powerspeed'), 'noalert' => __('No alert', 'powerspeed'))));
	$wp_customize->add_control( 'powerspeed_header_show_header_alert_text', array('label'=>__('The text inside of the alert.', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_header_alert_text', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_header_show_header_alert_link', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_header_alert_link', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_header_show_header_alert_link_text', array('label'=>__('The text for the link inside of the alert.', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_header_alert_link_text', 'type'=>'text' ));
	$wp_customize->add_setting( 'powerspeed_header_menu_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_header_menu_label_control', array(
		 'section' => 'powerspeed_section_header',
		 'settings' => 'powerspeed_header_menu_label',
		 'label' => __( 'Menu', 'powerspeed' ),
		 'content' => __( 'Settings that effect the main menu.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( 'powerspeed_header_menu_big', array('label'=>__('Give the main menu an entire full row to itself.', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_menu_big', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_header_menu_align', array('label'=>__('Should the menu align to the left, center, or right?', 'powerspeed'), 'section' => 'powerspeed_section_header', 'settings' => 'powerspeed_section_menu_align', 'type'=>'select', 'choices' => array('left' => __('Left', 'powerspeed'), 'center' => __('Center', 'powerspeed'), 'right' => __('Right', 'powerspeed') )));

	$wp_customize->add_control( 'powerspeed_footer_copyright_text', array('label'=>__('The copyright notice in the footer.', 'powerspeed'), 'section' => 'powerspeed_section_footer', 'settings' => 'powerspeed_section_footer_copyright', 'type'=>'text' )  );
	$wp_customize->add_control( 'powerspeed_footer_copyright_text_align', array('label'=>__('Should the footer copyright notice align to the left, center, or right?', 'powerspeed'), 'section' => 'powerspeed_section_footer', 'settings' => 'powerspeed_section_footer_copyright_align', 'type'=>'select', 'choices' => array('left' => __('Left', 'powerspeed'), 'center' => __('Center', 'powerspeed'), 'right' => __('Right', 'powerspeed') )));
	$wp_customize->add_control( 'powerspeed_header_show_footer_widget_checkbox', array('label'=>__('Display the 3 widget columns in the footer.', 'powerspeed'), 'section' => 'powerspeed_section_footer', 'settings' => 'powerspeed_section_footer_show_widgets', 'type'=>'checkbox' )  );


	$wp_customize->add_control( 'powerspeed_section_social_media_icon_width_number', array('label'=>__('Social Media Icon Width', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_icon_width', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_icon_height_number', array('label'=>__('Social Media Icon Height', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_icon_height', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_deviantart_url', array('label'=>__('DeviantArt URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_deviantart', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_facebook_url', array('label'=>__('Facebook URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_facebook', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_flickr_url', array('label'=>__('Flickr URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_flickr', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_instagram_url', array('label'=>__('Instagram URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_instagram', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_linkedin_url', array('label'=>__('LinkedIn URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_linkedin', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_pinterest_url', array('label'=>__('Pinterest URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_pinterest', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_tumblr_url', array('label'=>__('Tumblr URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_tumblr', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_twitter_url', array('label'=>__('Twitter URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_twitter', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_vimeo_url', array('label'=>__('Vimeo URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_vimeo', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_youtube_url', array('label'=>__('YouTube Channel URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_youtube', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_email_url', array('label'=>__('Email', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_email', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_section_social_media_rss_url', array('label'=>__('RSS Feed URL', 'powerspeed'), 'section' => 'powerspeed_section_social_media', 'settings' => 'powerspeed_section_social_media_rss', 'type'=>'url' )  );


	$wp_customize->add_setting( 'powerspeed_section_blog_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_blog_label_control', array(
		 'section' => 'powerspeed_section_blog',
		 'settings' => 'powerspeed_section_blog_label',
		 'label' => __( 'Posts & Archives Pages', 'powerspeed' ),
		 'content' => __( 'These settings effect the page that shows off all blog entries as well as search results and other archives.  It is recommended that you switch to one of those pages in the preview area while editing these settings.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( 'powerspeed_section_blog_metabox_checkbox', array('label'=>__('Display the metabox that contains the published date, author, categories and tags?', 'powerspeed'), 'section' => 'powerspeed_section_blog', 'settings' => 'powerspeed_section_blog_show_metabox', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_section_blog_author_checkbox', array('label'=>__('Display the published date and author in the metabox?', 'powerspeed'), 'section' => 'powerspeed_section_blog', 'settings' => 'powerspeed_section_blog_show_author', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_section_blog_categories_checkbox', array('label'=>__('Display the categories in the metabox?', 'powerspeed'), 'section' => 'powerspeed_section_blog', 'settings' => 'powerspeed_section_blog_show_categories', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_section_blog_tags_checkbox', array('label'=>__('Display the tags in the metabox?', 'powerspeed'), 'section' => 'powerspeed_section_blog', 'settings' => 'powerspeed_section_blog_show_tags', 'type'=>'checkbox' )  );

  $wp_customize->add_setting( 'powerspeed_section_page_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_blog_label_control', array(
		 'section' => 'powerspeed_section_blog',
		 'settings' => 'powerspeed_section_page_label',
		 'label' => __( 'Page Settings', 'powerspeed' ),
		 'content' => __( 'These settings effect pages.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( 'powerspeed_section_page_metabox_checkbox', array('label'=>__('Display the metabox that contains the published date, author, categories and tags?', 'powerspeed'), 'section' => 'powerspeed_section_blog', 'settings' => 'powerspeed_section_page_show_metabox', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_section_page_author_checkbox', array('label'=>__('Display the published date and author in the metabox?', 'powerspeed'), 'section' => 'powerspeed_section_blog', 'settings' => 'powerspeed_section_page_show_author', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_section_page_categories_checkbox', array('label'=>__('Display the categories in the metabox?', 'powerspeed'), 'section' => 'powerspeed_section_blog', 'settings' => 'powerspeed_section_page_show_categories', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_section_page_tags_checkbox', array('label'=>__('Display the tags in the metabox?', 'powerspeed'), 'section' => 'powerspeed_section_blog', 'settings' => 'powerspeed_section_page_show_tags', 'type'=>'checkbox' )  );


	$wp_customize->add_setting( 'powerspeed_section_blog_pagination_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
  $wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_blog_pagination_label_control', array(
		 'section' => 'powerspeed_section_blog',
		 'settings' => 'powerspeed_section_blog_pagination_label',
		 'label' => __( 'Pagination Style', 'powerspeed' ),
		 'content' => __( 'The links between pages, posts, and other pagination can be styled here.  Sites with no content will not trigger many instances of these links.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( 'powerspeed_section_blog_pagination_link_type_control', array('label'=>__('What style or type of link for next &amp; previous posts, pages, and other pagination?', 'powerspeed'), 'section' => 'powerspeed_section_blog', 'settings' => 'powerspeed_section_blog_pagination_link_type', 'type'=>'select', 'choices' => array('' => 'Unstyled', 'btn btn-primary' => 'Primary Button', 'btn btn-secondary' => 'Secondary Button', 'btn btn-success' => 'Success Button', 'btn btn-danger' => 'Danger Button', 'btn btn-warning' => 'Warning Button', 'btn btn-info' => 'Info Button', 'btn btn-light' => 'Light Button', 'btn btn-dark' => 'Dark Button')));



	$wp_customize->add_setting( 'powerspeed_section_frontpage_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_label_control', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_label',
		 'label' => __( 'Frontpage Settings', 'powerspeed' ),
		 'content' => __( 'You should switch to your front page while editing these settings.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( 'powerspeed_frontpage_template_type_dropdown', array('label'=>__('Do you want no sidebar or one on the left or right on the front page?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_frontpage_template_type', 'type'=>'select', 'choices' => array('leftsidebar' => __('Left Sidebar', 'powerspeed'), 'rightsidebar' => __('Right Sidebar', 'powerspeed'), 'nosidebar' => __('No Sidebar', 'powerspeed') )));
	$wp_customize->add_control( 'powerspeed_frontpage_order_dropdown', array('label'=>__('What order should the frontpage elements appear?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_frontpage_order', 'type'=>'select', 'choices' => array('default' => __('Slideshow, Jumbotron, then Frontpage', 'powerspeed'), 'default-reverse' => __('Slideshow, Frontpage, then Jumbotron', 'powerspeed'), 'jumbotron' => __('Jumbotron, Slideshow, then Frontpage', 'powerspeed'), 'jumbotron-reverse' => __('Jumbotron, Frontpage, then Slideshow', 'powerspeed'), 'frontpage' => __('Frontpage, Jumbotron, then Slideshow', 'powerspeed'), 'frontpage-reverse' => __('Frontpage, Slideshow, then Jumbotron', 'powerspeed') )));

	$wp_customize->add_setting( 'powerspeed_section_frontpage_featured_posts_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_featured_posts_label_control', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_featured_posts_label',
		 'label' => __( 'Featured Posts Settings', 'powerspeed' ),
		 'content' => __( 'The featured posts allows you to promote specific pages, posts, or categories.  This appears at the top or bottom of the page you have selected to be the frontpage.', 'powerspeed' ) ,
	) ) );

	$wp_customize->add_control( 'powerspeed_frontpage_show_featured_posts', array('label'=>__('Display the featured posts?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_featured_posts', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_featured_posts_location_dropdown', array('label'=>__('Do you want the featured posts at the top or bottom of the main page?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_featured_posts_location', 'type'=>'select', 'choices' => array('top' => __('Top of the main page area', 'powerspeed'), 'bottom' => __('Bottom of the main page area', 'powerspeed') )));
	$wp_customize->add_control( 'powerspeed_frontpage_show_featured_posts_heading', array('label'=>__('The heading text for the featured posts.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_featured_posts_heading', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_featured_posts_text', array('label'=>__('Some text to introduce the featured posts.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_featured_posts_text', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_featured_posts_style_dropdown', array('label'=>__('Change how the featured posts are presented.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_featured_posts_style', 'type'=>'select', 'choices' => array('card' => __('Card (image, title, description)', 'powerspeed'), 'portfolio' => __('Portfolio (image only with title on hover)', 'powerspeed') )));
	$wp_customize->add_control( 'powerspeed_frontpage_featured_posts_type_dropdown', array('label'=>__('What post type do you want to feature?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_featured_posts_type', 'type'=>'select', 'choices' => powerspeed_array_of_post_types() ));
	$wp_customize->add_control( 'powerspeed_frontpage_featured_posts_amount_control', array('label'=>__('Number of posts to feature.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_featured_posts_amount', 'type'=>'number' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_featured_posts_rows_control', array('label'=>__('Number of rows to display.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_featured_posts_rows', 'type'=>'number' )  );



	$wp_customize->add_setting( 'powerspeed_section_frontpage_jumbotron_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_jumbotron_label_control', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_jumbotron_label',
		 'label' => __( 'Jumbotron Settings', 'powerspeed' ),
		 'content' => __( 'This is a big block on the front page that you can use to communicate your main message and call to action.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( 'powerspeed_frontpage_show_jumbotron', array('label'=>__('Display the jumbotron?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_jumbotron', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_jumbotron_heading', array('label'=>__('The heading text inside of the jumbotron.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_jumbotron_heading', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_jumbotron_text', array('label'=>__('The top text inside of the jumbotron.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_jumbotron_text', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_jumbotron_subtext', array('label'=>__('The bottom text inside of the jumbotron.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_jumbotron_subtext', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_jumbotron_link', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_jumbotron_link', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_jumbotron_link_text', array('label'=>__('The text for the link inside of the jumbotron.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_jumbotron_link_text', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_jumbotron_link_type', array('label'=>__('What style or type of link?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_jumbotron_link_type', 'type'=>'select', 'choices' => array('' => 'Unstyled', 'btn btn-primary' => 'Primary Button', 'btn btn-secondary' => 'Secondary Button', 'btn btn-success' => 'Success Button', 'btn btn-danger' => 'Danger Button', 'btn btn-warning' => 'Warning Button', 'btn btn-info' => 'Info Button', 'btn btn-light' => 'Light Button', 'btn btn-dark' => 'Dark Button')));

	$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_slideshow_label',
		 'label' => __( 'Slideshow Settings', 'powerspeed' ),
		 'content' => __( 'A slideshow featuring at a minimum 1 slide and at a maximum 9.  To make a slide appear in the slideshow you must add an image to it.   If you want to remove a slide from the slideshow, remove the image for the slide to hide it.  The 1st slide is special and will show even if there is no image.', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow', array('label'=>__('Display the slideshow?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_transition_dropdown', array('label'=>__('What type of transition do you want to use when changing slides?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_transition', 'type'=>'select', 'choices' => array(' ' => __('No transition', 'powerspeed'), 'slide' => __('Slide', 'powerspeed'), 'slide carousel-fade' => __('Crossfade', 'powerspeed') )));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_arrows', array('label'=>__('Display the left and right arrows on the slideshow?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_arrows', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_indicators', array('label'=>__('Display the bottom slide indicator? This displays on the bottom of slides and shows the current position and allows users to click on each slide in the slideshow to view it.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_indicators', 'type'=>'checkbox' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_class', array('label'=>__('What button style for the slideshow links?', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_class', 'type'=>'select', 'choices' => array(' ' => __('Unstyled', 'powerspeed'), 'btn btn-primary' => __('Primary', 'powerspeed'), 'btn btn-secondary' => __('Secondary', 'powerspeed'), 'btn btn-success' => __('Success', 'powerspeed'), 'btn btn-danger' => __('Danger', 'powerspeed'), 'btn btn-warning' => __('Warning', 'powerspeed'), 'btn btn-info' => __('Info', 'powerspeed'), 'btn btn-light' => __('Light', 'powerspeed'), 'btn btn-dark' => __('Dark', 'powerspeed'))));

	$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label_a', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control_a', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_slideshow_label_a',
		 'label' => ' ',
		 'content' => __( 'Slide #1:', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_section_frontpage_slideshow_image_url_a', array('label'=>__('The image for this slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_image_url_a', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_heading_a', array('label'=>__('The heading text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_heading_a', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_text_a', array('label'=>__('The text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_text_a', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_a', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_a', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_text_a', array('label'=>__('The text for the link inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_text_a', 'type'=>'text' ));

	$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label_b', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control_b', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_slideshow_label_b',
		 'label' => ' ',
		 'content' => __( 'Slide #2:', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_section_frontpage_slideshow_image_url_b', array('label'=>__('The image for this slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_image_url_b', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_heading_b', array('label'=>__('The heading text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_heading_b', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_text_b', array('label'=>__('The text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_text_b', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_b', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_b', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_text_b', array('label'=>__('The text for the link inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_text_b', 'type'=>'text' ));

	$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label_c', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control_c', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_slideshow_label_c',
		 'label' => ' ',
		 'content' => __( 'Slide #3:', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_section_frontpage_slideshow_image_url_c', array('label'=>__('The image for this slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_image_url_c', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_heading_c', array('label'=>__('The heading text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_heading_c', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_text_c', array('label'=>__('The text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_text_c', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_c', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_c', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_text_c', array('label'=>__('The text for the link inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_text_c', 'type'=>'text' ));

	$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label_d', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control_d', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_slideshow_label_d',
		 'label' => ' ',
		 'content' => __( 'Slide #4:', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_section_frontpage_slideshow_image_url_d', array('label'=>__('The image for this slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_image_url_d', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_heading_d', array('label'=>__('The heading text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_heading_d', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_text_d', array('label'=>__('The text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_text_d', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_d', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_d', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_text_d', array('label'=>__('The text for the link inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_text_d', 'type'=>'text' ));

	$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label_e', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control_e', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_slideshow_label_e',
		 'label' => ' ',
		 'content' => __( 'Slide #5:', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_section_frontpage_slideshow_image_url_e', array('label'=>__('The image for this slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_image_url_e', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_heading_e', array('label'=>__('The heading text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_heading_e', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_text_e', array('label'=>__('The text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_text_e', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_e', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_e', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_text_e', array('label'=>__('The text for the link inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_text_e', 'type'=>'text' ));

	$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label_f', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
	$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control_f', array(
		 'section' => 'powerspeed_section_frontpage',
		 'settings' => 'powerspeed_section_frontpage_slideshow_label_f',
		 'label' => ' ',
		 'content' => __( 'Slide #6:', 'powerspeed' ) ,
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_section_frontpage_slideshow_image_url_f', array('label'=>__('The image for this slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_image_url_f', 'type'=>'image' )));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_heading_f', array('label'=>__('The heading text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_heading_f', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_text_f', array('label'=>__('The text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_text_f', 'type'=>'text' ));
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_f', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_f', 'type'=>'url' )  );
	$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_text_f', array('label'=>__('The text for the link inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_text_f', 'type'=>'text' ));

		$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label_g', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
		$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control_g', array(
			 'section' => 'powerspeed_section_frontpage',
			 'settings' => 'powerspeed_section_frontpage_slideshow_label_g',
			 'label' => ' ',
			 'content' => __( 'Slide #7:', 'powerspeed' ) ,
		) ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_section_frontpage_slideshow_image_url_g', array('label'=>__('The image for this slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_image_url_g', 'type'=>'image' )));
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_heading_g', array('label'=>__('The heading text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_heading_g', 'type'=>'text' ));
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_text_g', array('label'=>__('The text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_text_g', 'type'=>'text' ));
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_g', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_g', 'type'=>'url' )  );
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_text_g', array('label'=>__('The text for the link inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_text_g', 'type'=>'text' ));

		$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label_h', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
		$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control_h', array(
			 'section' => 'powerspeed_section_frontpage',
			 'settings' => 'powerspeed_section_frontpage_slideshow_label_h',
			 'label' => ' ',
			 'content' => __( 'Slide #8:', 'powerspeed' ) ,
		) ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_section_frontpage_slideshow_image_url_h', array('label'=>__('The image for this slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_image_url_h', 'type'=>'image' )));
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_heading_h', array('label'=>__('The heading text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_heading_h', 'type'=>'text' ));
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_text_h', array('label'=>__('The text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_text_h', 'type'=>'text' ));
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_h', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_h', 'type'=>'url' )  );
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_text_h', array('label'=>__('The text for the link inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_text_h', 'type'=>'text' ));

		$wp_customize->add_setting( 'powerspeed_section_frontpage_slideshow_label_i', array('sanitize_callback'=>'esc_attr', 'default' => 42, 'transport' => 'refresh' ) );
		$wp_customize->add_control( new PowerSpeed_Customizer_Content( $wp_customize, 'powerspeed_section_frontpage_slideshow_label_control_i', array(
			 'section' => 'powerspeed_section_frontpage',
			 'settings' => 'powerspeed_section_frontpage_slideshow_label_i',
			 'label' => ' ',
			 'content' => __( 'Slide #9:', 'powerspeed' ) ,
		) ) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'powerspeed_section_frontpage_slideshow_image_url_i', array('label'=>__('The image for this slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_image_url_i', 'type'=>'image' )));
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_heading_i', array('label'=>__('The heading text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_heading_i', 'type'=>'text' ));
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_text_i', array('label'=>__('The text inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_text_i', 'type'=>'text' ));
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_i', array('label'=>__('The URL you want to link to for more information.  Leave blank for no link.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_i', 'type'=>'url' )  );
		$wp_customize->add_control( 'powerspeed_frontpage_show_slideshow_link_text_i', array('label'=>__('The text for the link inside of the slide.', 'powerspeed'), 'section' => 'powerspeed_section_frontpage', 'settings' => 'powerspeed_section_frontpage_slideshow_link_text_i', 'type'=>'text' ));


}
add_action('customize_register','powerspeed_register_customize_options');

/*
 * Sidebars and footer widget areas
 */
function powerspeed_sidebars() {
	$sidebar_border_style = esc_attr(get_theme_mod('powerspeed_border_sidebar_content_type'));
	$footer_border_style = esc_attr(get_theme_mod('powerspeed_border_footer_content_type'));

	register_sidebar(array('name'=>__('Main Sidebar', 'powerspeed'), 'id'=>'powerspeed_main_sidebar', 'description'=>__('This sidebar appears on any page that has the sidebar enabled.', 'powerspeed'), 'before_widget'=>'<section class="powerspeed-sidebar-section widget-wrapper card '.$sidebar_border_style.'"><div class="card-body">', 'after_widget'=>'</div></section><br />', 'before_title'=>'<h2 class="widget-title card-title">', 'after_title'=>'</h2>'));
	register_sidebar(array('name'=>__('Footer Left Column', 'powerspeed'), 'id'=>'powerspeed_footer_left_col_sidebar', 'description'=>__('This sidebar appears in the left 3rd of the footer.', 'powerspeed'), 'before_widget'=>'<section class="powerspeed-footer-sidebars footer-widget-wrapper card '.$footer_border_style.'"><div class="card-body">', 'after_widget'=>'</div></section><br />', 'before_title'=>'<h2 class="footer-widget-title card-title">', 'after_title'=>'</h2>'));
	register_sidebar(array('name'=>__('Footer Center Column', 'powerspeed'), 'id'=>'powerspeed_footer_center_col_sidebar', 'description'=>__('This sidebar appears in the center column of the footer.', 'powerspeed'), 'before_widget'=>'<section class="powerspeed-footer-sidebars footer-widget-wrapper card '.$footer_border_style.'"><div class="card-body">', 'after_widget'=>'</div></section><br />', 'before_title'=>'<h2 class="footer-widget-title card-title">', 'after_title'=>'</h2>'));
	register_sidebar(array('name'=>__('Footer Right Column', 'powerspeed'), 'id'=>'powerspeed_footer_right_col_sidebar', 'description'=>__('This sidebar appears in the right 3rd of the footer.', 'powerspeed'), 'before_widget'=>'<section class="powerspeed-footer-sidebars footer-widget-wrapper card '.$footer_border_style.'"><div class="card-body">', 'after_widget'=>'</div></section><br />', 'before_title'=>'<h2 class="footer-widget-title card-title">', 'after_title'=>'</h2>'));
}
add_action('widgets_init','powerspeed_sidebars', 9999);


/*
 * Echoes out the configured social media icons
 */
function powerspeed_social_media_output($image_width = null, $image_height = null) {
	/* This file has images in BASE64 inside of a function.  Mainly used for social media icons right now */
	require_once get_template_directory() . '/inc/embedded-images.php';
	$powerspeed_section_social_media_deviantart = esc_attr(get_theme_mod('powerspeed_section_social_media_deviantart',''));
	$powerspeed_section_social_media_email = esc_attr(get_theme_mod('powerspeed_section_social_media_email',''));
	$powerspeed_section_social_media_facebook = esc_attr(get_theme_mod('powerspeed_section_social_media_facebook',''));
	$powerspeed_section_social_media_flickr = esc_attr(get_theme_mod('powerspeed_section_social_media_flickr',''));
	$powerspeed_section_social_media_instagram = esc_attr(get_theme_mod('powerspeed_section_social_media_instagram',''));
	$powerspeed_section_social_media_linkedin = esc_attr(get_theme_mod('powerspeed_section_social_media_linkedin',''));
	$powerspeed_section_social_media_pinterest = esc_attr(get_theme_mod('powerspeed_section_social_media_pinterest',''));
	$powerspeed_section_social_media_rss = esc_attr(get_theme_mod('powerspeed_section_social_media_rss',''));
	$powerspeed_section_social_media_tumblr = esc_attr(get_theme_mod('powerspeed_section_social_media_tumblr',''));
	$powerspeed_section_social_media_twitter = esc_attr(get_theme_mod('powerspeed_section_social_media_twitter',''));
	$powerspeed_section_social_media_vimeo = esc_attr(get_theme_mod('powerspeed_section_social_media_vimeo',''));
	$powerspeed_section_social_media_youtube = esc_attr(get_theme_mod('powerspeed_section_social_media_youtube',''));
	if(trim($powerspeed_section_social_media_deviantart) != '') {
		echo '<a href="'.$powerspeed_section_social_media_deviantart.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-deviantart', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_facebook) != '') {
		echo '<a href="'.$powerspeed_section_social_media_facebook.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-facebook', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_flickr) != '') {
		echo '<a href="'.$powerspeed_section_social_media_flickr.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-flickr', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_instagram) != '') {
		echo '<a href="'.$powerspeed_section_social_media_instagram.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-instagram', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_linkedin) != '') {
		echo '<a href="'.$powerspeed_section_social_media_linkedin.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-linkedin', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_pinterest) != '') {
		echo '<a href="'.$powerspeed_section_social_media_pinterest.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-pinterest', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_tumblr) != '') {
		echo '<a href="'.$powerspeed_section_social_media_tumblr.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-tumblr', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_twitter) != '') {
		echo '<a href="'.$powerspeed_section_social_media_twitter.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-twitter', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_vimeo) != '') {
		echo '<a href="'.$powerspeed_section_social_media_vimeo.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-vimeo', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_youtube) != '') {
		echo '<a href="'.$powerspeed_section_social_media_youtube.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-youtube', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_email) != '') {
		echo '<a href="'.$powerspeed_section_social_media_email.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-email', $image_width, $image_height).'</a>';
	}
	if(trim($powerspeed_section_social_media_rss) != '') {
		echo '<a href="'.$powerspeed_section_social_media_rss.'" class="powerspeed-social-icon">'.powerspeed_image('flat-social-media-icons-rss', $image_width, $image_height).'</a>';
	}
}

/*
 * The .woocommerce class was only being applied on WooCommerce pages, which meant that putting a WooCommerce widget into the sidebar or footer didn't look right except on WooCommerce pages.
 */
function powerspeed_fix_woo_body_class($classes) {
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if ( is_plugin_active( 'woocommerce/woocommerce.php') ) {
      $classes[] = 'woocommerce';
  }
  return $classes;
}
add_filter('body_class', 'powerspeed_fix_woo_body_class');

/*
 * Only enqueues the javascript for threaded comments when necessary
 */
function powerspeed_enqueue_comments_reply() {
	if( get_option( 'thread_comments' ) )  {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'comment_form_before', 'powerspeed_enqueue_comments_reply' );

/**
 * Add Bootstrap form styling to WooCommerce fields
 *
 * @refer  http://bit.ly/2zWFMiq
 */
function powerspeed_wc_bootstrap_form_field_args ($args, $key, $value) {
  $args['input_class'][] = 'form-control';
  return $args;
}
add_filter('woocommerce_form_field_args','powerspeed_wc_bootstrap_form_field_args', 10, 3);

/**
 * Add classes to the next and previous posts links
 */
function powerspeed_posts_link_attributes() {
  return 'class="'.esc_attr(get_theme_mod('powerspeed_section_blog_pagination_link_type','btn btn-primary')).'"';
}
add_filter('next_posts_link_attributes', 'powerspeed_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'powerspeed_posts_link_attributes');

/**
 * Add classes to the next post links
 */
function powerspeed_add_class_next_post_link($html){
    $html = str_replace('<a','<a class="'.esc_attr(get_theme_mod('powerspeed_section_blog_pagination_link_type','btn btn-primary')).'"',$html);
    return $html;
}
add_filter('next_post_link','powerspeed_add_class_next_post_link',10,1);

/**
 * Add classes to the previous post links
 */
function powerspeed_add_class_previous_post_link($html){
    $html = str_replace('<a','<a class="'.esc_attr(get_theme_mod('powerspeed_section_blog_pagination_link_type','btn btn-primary')).'"',$html);
    return $html;
}
add_filter('previous_post_link','powerspeed_add_class_previous_post_link',10,1);

/**
 * Add classes to the tags links
 */
function powerspeed_add_class_the_tags($html){
    $html = str_replace('<a','<a class="badge badge-secondary powerspeed-tag"',$html);
    return $html;
}
add_filter('the_tags','powerspeed_add_class_the_tags',10,1);

/**
 * Add classes to the category links
 */
function powerspeed_add_class_to_category( $thelist, $separator, $parents){
    return str_replace('<a href="', '<a class="badge badge-primary powerspeed-category" href="', $thelist);
}
add_filter('the_category','powerspeed_add_class_to_category',10,3);

/**
 * Pingback in the header
 */
function powerspeed_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'powerspeed_pingback_header' );

/**
 * Custom post type: Portfolio
 */
function powerspeed_create_portfolio_post_type() {
	 register_post_type( 'powerspeed-portfolio',
		 array(
			 'labels' => array(
				 'name' => __( 'Portfolio', 'powerspeed' ),
				 'singular_name' => __( 'Portfolios', 'powerspeed' ),
				 'add_new'            => __( 'Add New', 'powerspeed' ),
		     'add_new_item'       => __( 'Add New Portfolio', 'powerspeed' ),
		     'edit_item'          => __( 'Edit Portfolio', 'powerspeed' ),
		     'new_item'           => __( 'New Portfolio', 'powerspeed' ),
		     'all_items'          => __( 'All Portfolios', 'powerspeed' ),
		     'view_item'          => __( 'View Portfolio', 'powerspeed' ),
		     'search_items'       => __( 'Search Portfolios', 'powerspeed' ),
		     'not_found'          => __( 'No Portfolios found', 'powerspeed' ),
		     'not_found_in_trash' => __( 'No Portfolios found in the Trash', 'powerspeed' )
				 ),
			 'public' => true,
			 'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'categories' ),
			 'description'   => '',
			 'has_archive' => true,
			 'rewrite' => array(
				 'slug' => 'portfolio'
			 )
		 )
	 );
}
add_action( 'init', 'powerspeed_create_portfolio_post_type' );

/**
 * Categories for the Custom post type: Portfolio
 */
function powerspeed_taxonomies_portfolio() {
  $labels = array(
    'name'              => __( 'Portfolio Categories', 'powerspeed' ),
    'singular_name'     => __( 'Portfolio Category', 'powerspeed' ),
    'search_items'      => __( 'Search Portfolio Categories', 'powerspeed' ),
    'all_items'         => __( 'All Portfolio Categories', 'powerspeed' ),
    'parent_item'       => __( 'Parent Portfolio Category', 'powerspeed' ),
    'parent_item_colon' => __( 'Parent Portfolio Category:', 'powerspeed' ),
    'edit_item'         => __( 'Edit Portfolio Category', 'powerspeed' ),
    'update_item'       => __( 'Update Portfolio Category', 'powerspeed' ),
    'add_new_item'      => __( 'Add New Portfolio Category', 'powerspeed' ),
    'new_item_name'     => __( 'New Portfolio Category', 'powerspeed' ),
    'menu_name'         => __( 'Portfolio Categories', 'powerspeed' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
		'rewrite' => array(
			'slug' => 'portfolio-categories'
		)
  );
  register_taxonomy( 'powerspeed_portfolio_category', 'powerspeed-portfolio', $args );
}
add_action( 'init', 'powerspeed_taxonomies_portfolio' );


/*
 * Customizer Preview javascript
 */
function powerspeed_customize_preview_js(){
		wp_enqueue_script( 'powerspeed-customizer-preview', get_template_directory_uri() . '/js/customizer-preview.js', array( 'jquery', 'customize-preview' ), wp_get_theme()->get('Version'), true );
}
add_action( 'customize_preview_init', 'powerspeed_customize_preview_js' );
