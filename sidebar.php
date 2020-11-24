<?php
/**
 * The main sidebar
 *
 * Used for displaying the main sidebar
 *
 * @package PowerSpeed
 */

  if ( ! defined( 'ABSPATH' ) ) {
  	exit; // Exit if accessed directly
  }
  
if( is_active_sidebar('powerspeed_main_sidebar') ) {
	?>
	<aside class="powerspeed-sidebar col-md-3 h-100"><?php
	dynamic_sidebar('powerspeed_main_sidebar');
	?></aside><?php
} else {
	return;
}
