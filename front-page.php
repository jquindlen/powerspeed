<?php
/**
 * The front page
 *
 * Used for displaying the front page
 *
 * @package PowerSpeed
 */

 /**
  * Used to display the chosen page for the front page
  */

  if ( ! defined( 'ABSPATH' ) ) {
  	exit; // Exit if accessed directly
  }

function powerspeed_frontpage_content() {
  ?>
    <div class="container<?php if(esc_attr(get_theme_mod('powerspeed_section_main_content_fluid', false)) == true) { echo '-fluid'; }?>">
      <div class="row">

        <?php if(esc_attr(get_theme_mod('powerspeed_frontpage_template_type', 'nosidebar')) == 'leftsidebar') { get_sidebar(); } ?>
        <div id="powerspeed-main-content" class="powerspeed-general-template powerspeed-main-content <?php if( is_active_sidebar('powerspeed_main_sidebar')  && esc_attr(get_theme_mod('powerspeed_frontpage_template_type', 'nosidebar')) != 'nosidebar' ) { ?>col-md-9<?php } else {?>col-12<?php } ?>">
          <?php
            if(esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts', false)) == true && esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_location', 'top')) == 'top') {
              ?><div class="powerspeed-featured-posts <?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_style', 'card')); ?> powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>"><div class="card-body"><?php
              if(esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_heading', __('Featured Posts', 'powerspeed'))) != '') {
                echo '<h2 class="powerspeed-featured-posts-header">'.get_theme_mod('powerspeed_section_frontpage_featured_posts_heading', __('Featured Posts', 'powerspeed')).'</h2>';
              }
              if(esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_text', __('Here are some of the best articles on the site.', 'powerspeed'))) != '') {
                echo '<p class="powerspeed-featured-posts-text">'.get_theme_mod('powerspeed_section_frontpage_featured_posts_text', __('Here are some of the best articles on the site.', 'powerspeed')).'</p>';
              }
              echo powerspeed_featured_posts( esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_type', 'post')), esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_amount', 3)), esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_style', 'card')), esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_rows', 1)) );
              ?></div></div><?php
            }
            // If we have post, lets loop
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();
                ?>
                <article <?php post_class(); ?>>
                  <div class="card<?php if(is_sticky()) { echo ' bg-light';} ?> powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('full', 'thumbnail', array( 'class' => 'card-img-top' )); ?></a>
                    <div class="card-body">
                      <h2><?php the_title(); ?></h2>
                      <p><?php the_content(); ?></p>
                    </div>
                  </div>
                </article>
                <?php
              }
            } else { //No posts
              ?><p><?php _e('There are no posts to display.', 'powerspeed'); ?></p><?php
            }
            if(esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts', false)) == true && esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_location', 'top')) == 'bottom') {
              ?><div class="powerspeed-featured-posts <?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_style', 'card')); ?> powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>"><div class="card-body"><?php
              if(esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_heading', __('Featured Posts', 'powerspeed'))) != '') {
                echo '<h2 class="powerspeed-featured-posts-header">'.get_theme_mod('powerspeed_section_frontpage_featured_posts_heading', __('Featured Posts', 'powerspeed')).'</h2>';
              }
              if(esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_text', __('Here are some of the best articles on the site.', 'powerspeed'))) != '') {
                echo '<p class="powerspeed-featured-posts-text">'.get_theme_mod('powerspeed_section_frontpage_featured_posts_text', __('Here are some of the best articles on the site.', 'powerspeed')).'</p>';
              }
              echo powerspeed_featured_posts( esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_type', 'post')), esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_amount', 3)), esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_style', 'card')), esc_attr(get_theme_mod('powerspeed_section_frontpage_featured_posts_rows', 1)) );
              ?></div></div><?php
            }
          ?>
        </div>
        <?php if(esc_attr(get_theme_mod('powerspeed_frontpage_template_type', 'nosidebar')) == 'rightsidebar') { get_sidebar(); } ?>
      </div>
    </div><!-- end .container div -->
  <?php
}

/**
 * Used to display the jumbotron on the front page
 *
 * @param string $id Just in case someone wants to output more than one of these on a page they can specify an id to append to the overall div to make a unique id tags.
 */
 function powerspeed_jumbotron($id='') {
   // Jumbotron section
   if(esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron', false)) == true) {
     echo '<div id="powerspeed-jumbotron'.$id.'" class="jumbotron'; if(esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_fluid', false)) == false) { echo ' jumbotron-fluid"><div class="container">';} else { echo '">';}
       if (trim(esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_heading', __('Attention Grabbing Headline', 'powerspeed'))) ) != '' ) {
         echo '<h2 class="display-4 jumbotron-heading">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_heading', __('Attention Grabbing Headline', 'powerspeed'))).'</h2>';
       }
       if (trim(esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_text', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))) ) != '' ) {
         echo '<p class="lead">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_text', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))).'</p>';
       }
       if (trim(esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_subtext', __('Final messages or the first call to action.', 'powerspeed'))) ) != '' ) {
         echo '<hr class="my-4">';
         echo '<p>'.esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_subtext', __('Final messages or the first call to action.', 'powerspeed'))).'</p>';
       }
       if (trim(esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_link', '')) ) != '' ) {
         echo '<a class="'.esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_link_type')).' jumbotron-link" href="'.esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_link', '')).'" role="button">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_link_text')).'</a>';
       }
     echo '</div>'; if(esc_attr(get_theme_mod('powerspeed_section_frontpage_jumbotron_fluid', false)) == false) { echo '</div>'; }
   }
 }

 /**
  * Used to display the slideshow on the front page
  *
  * @param string $id Just in case someone wants to output more than one of these on a page they can specify an id to append to the overall div to make a unique id tags.
  */
 function powerspeed_slider($id='') {
   if(esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow', false)) == true) {
     $powerspeed_slideshow_link_class = esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_class', 'btn btn-primary'));
     if(esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_fluid', false)) == false) {
       echo '<div class="container"><div class="row"><div class="col-12">';
     }
     ?>
    	 <div id="powerspeed-slideshow<?php echo $id; ?>" class="carousel <?PHP echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_transition', 'slide'));?>" data-ride="carousel">
         <?php if(esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_indicators')) == true) { ?>
      	   <ol class="carousel-indicators">
      	     <li data-target="#powerspeed-slideshow<?php echo $id; ?>" data-slide-to="0" class="active"></li>
      	     <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_b', '')) ) != '' ) { ?><li data-target="#powerspeed-slideshow<?php echo $id; ?>" data-slide-to="1"></li><?php } ?>
      	     <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_c', '')) ) != '' ) { ?><li data-target="#powerspeed-slideshow<?php echo $id; ?>" data-slide-to="2"></li><?php } ?>
      	     <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_d', '')) ) != '' ) { ?><li data-target="#powerspeed-slideshow<?php echo $id; ?>" data-slide-to="3"></li><?php } ?>
      	     <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_e', '')) ) != '' ) { ?><li data-target="#powerspeed-slideshow<?php echo $id; ?>" data-slide-to="4"></li><?php } ?>
      	     <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_f', '')) ) != '' ) { ?><li data-target="#powerspeed-slideshow<?php echo $id; ?>" data-slide-to="5"></li><?php } ?>
      	     <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_g', '')) ) != '' ) { ?><li data-target="#powerspeed-slideshow<?php echo $id; ?>" data-slide-to="6"></li><?php } ?>
      	     <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_h', '')) ) != '' ) { ?><li data-target="#powerspeed-slideshow<?php echo $id; ?>" data-slide-to="7"></li><?php } ?>
      	     <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_i', '')) ) != '' ) { ?><li data-target="#powerspeed-slideshow<?php echo $id; ?>" data-slide-to="8"></li><?php } ?>
      	   </ol>
         <?php } ?>
    	   <div class="carousel-inner">
    	     <div class="carousel-item active">
    	       <img src="<?php echo esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_a', '')); ?>" class="d-block w-100" alt="...">
    	       <div class="carousel-caption d-none d-md-block">
    	         <h5><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_heading_a', __('Attention Grabbing Headline', 'powerspeed'))); ?></h5>
    	         <p><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_text_a', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))); ?> <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_a', '')) ) != '') { echo '<a class="powerspeed-slideshow-link '.$powerspeed_slideshow_link_class.'" href="'.esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_a', '')).'">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_text_a', __('Click here now...', 'powerspeed'))).'</a>'; } ?></p>
    	       </div>
    	     </div>
           <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_b')) ) != '' ) { ?>
        	     <div class="carousel-item">
        	       <img src="<?php echo esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_b', '')); ?>" class="d-block w-100" alt="...">
        	       <div class="carousel-caption d-none d-md-block">
        	         <h5><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_heading_b', __('Attention Grabbing Headline', 'powerspeed'))); ?></h5>
        	         <p><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_text_b', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))); ?> <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_b', '')) ) != '') { echo '<a class="powerspeed-slideshow-link '.$powerspeed_slideshow_link_class.'" href="'.esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_b', '')).'">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_text_b', __('Click here now...', 'powerspeed'))).'</a>'; } ?></p>
        	       </div>
        	     </div>
           <?php } ?>
           <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_c', '')) ) != '' ) { ?>
        	     <div class="carousel-item">
        	       <img src="<?php echo esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_c', '')); ?>" class="d-block w-100" alt="...">
        	       <div class="carousel-caption d-none d-md-block">
        	         <h5><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_heading_c', __('Attention Grabbing Headline', 'powerspeed'))); ?></h5>
        	         <p><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_text_c', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))); ?> <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_c', '')) ) != '') { echo '<a class="powerspeed-slideshow-link '.$powerspeed_slideshow_link_class.'" href="'.esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_c', '')).'">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_text_c', __('Click here now...', 'powerspeed'))).'</a>' ; } ?></p>
        	       </div>
        	     </div>
           <?php } ?>
           <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_d', '')) ) != '' ) { ?>
        	     <div class="carousel-item">
        	       <img src="<?php echo esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_d', '')); ?>" class="d-block w-100" alt="...">
        	       <div class="carousel-caption d-none d-md-block">
        	         <h5><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_heading_d', __('Attention Grabbing Headline', 'powerspeed'))); ?></h5>
        	         <p><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_text_d', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))); ?> <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_d', '')) ) != '') { echo '<a class="powerspeed-slideshow-link '.$powerspeed_slideshow_link_class.'" href="'.esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_d', '')).'">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_text_d', __('Click here now...', 'powerspeed'))).'</a>' ; } ?></p>
        	       </div>
        	     </div>
           <?php } ?>
           <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_e', '')) ) != '' ) { ?>
        	     <div class="carousel-item">
        	       <img src="<?php echo esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_e', '')); ?>" class="d-block w-100" alt="...">
        	       <div class="carousel-caption d-none d-md-block">
        	         <h5><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_heading_e', __('Attention Grabbing Headline', 'powerspeed'))); ?></h5>
        	         <p><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_text_e', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))); ?> <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_e', '')) ) != '') { echo '<a class="powerspeed-slideshow-link '.$powerspeed_slideshow_link_class.'" href="'.esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_e', '')).'">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_text_e', __('Click here now...', 'powerspeed'))).'</a>' ; } ?></p>
        	       </div>
        	     </div>
           <?php } ?>
           <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_f', '')) ) != '' ) { ?>
        	     <div class="carousel-item">
        	       <img src="<?php echo esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_f', '')); ?>" class="d-block w-100" alt="...">
        	       <div class="carousel-caption d-none d-md-block">
        	         <h5><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_heading_f', __('Attention Grabbing Headline', 'powerspeed'))); ?></h5>
        	         <p><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_text_f', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))); ?> <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_f', '')) ) != '') { echo '<a class="powerspeed-slideshow-link '.$powerspeed_slideshow_link_class.'" href="'.esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_f', '')).'">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_text_f', __('Click here now...', 'powerspeed'))).'</a>' ; } ?></p>
        	       </div>
        	     </div>
           <?php } ?>
           <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_g', '')) ) != '' ) { ?>
        	     <div class="carousel-item">
        	       <img src="<?php echo esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_g', '')); ?>" class="d-block w-100" alt="...">
        	       <div class="carousel-caption d-none d-md-block">
        	         <h5><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_heading_g', __('Attention Grabbing Headline', 'powerspeed'))); ?></h5>
        	         <p><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_text_g', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))); ?> <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_g', '')) ) != '') { echo '<a class="powerspeed-slideshow-link '.$powerspeed_slideshow_link_class.'" href="'.esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_g', '')).'">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_text_g', __('Click here now...', 'powerspeed'))).'</a>' ; } ?></p>
        	       </div>
        	     </div>
           <?php } ?>
           <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_h', '')) ) != '' ) { ?>
        	     <div class="carousel-item">
        	       <img src="<?php echo esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_h', '')); ?>" class="d-block w-100" alt="...">
        	       <div class="carousel-caption d-none d-md-block">
        	         <h5><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_heading_h', __('Attention Grabbing Headline', 'powerspeed'))); ?></h5>
        	         <p><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_text_h', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))); ?> <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_h', '')) ) != '') { echo '<a class="powerspeed-slideshow-link '.$powerspeed_slideshow_link_class.'" href="'.esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_h', '')).'">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_text_h', __('Click here now...', 'powerspeed'))).'</a>' ; } ?></p>
        	       </div>
        	     </div>
           <?php } ?>
           <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_i', '')) ) != '' ) { ?>
        	     <div class="carousel-item">
        	       <img src="<?php echo esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_image_url_i', '')); ?>" class="d-block w-100" alt="...">
        	       <div class="carousel-caption d-none d-md-block">
        	         <h5><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_heading_i', __('Attention Grabbing Headline', 'powerspeed'))); ?></h5>
        	         <p><?php echo esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_text_i', __('A feature followed by a benefit that solves your problem.', 'powerspeed'))); ?> <?php if (trim(esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_i', '')) ) != '') { echo '<a class="powerspeed-slideshow-link '.$powerspeed_slideshow_link_class.'" href="'.esc_url_raw(get_theme_mod('powerspeed_section_frontpage_slideshow_link_i', '')).'">'.esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_link_text_i', __('Click here now...', 'powerspeed'))).'</a>' ; } ?></p>
        	       </div>
        	     </div>
           <?php } ?>
    	   </div>
         <?php if(esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_arrows', true)) == true) { ?>
      	   <a class="carousel-control-prev" href="#powerspeed-slideshow<?php echo $id; ?>" role="button" data-slide="prev">
      	     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      	     <span class="sr-only"><?php echo __('Previous', 'powerspeed'); ?></span>
      	   </a>
      	   <a class="carousel-control-next" href="#powerspeed-slideshow<?php echo $id; ?>" role="button" data-slide="next">
      	     <span class="carousel-control-next-icon" aria-hidden="true"></span>
      	     <span class="sr-only"><?php echo __('Next', 'powerspeed'); ?></span>
      	   </a>
         <?php } ?>
    	 </div>
     <?php
       if(esc_attr(get_theme_mod('powerspeed_section_frontpage_slideshow_fluid', false)) == false) {
         echo '</div></div></div>';
       }
   }
 }

?>
<?php get_header(); ?>
	<div class="powerspeed-content-area">
		<main>
			<section class="powerspeed-middle-area">
				<?php

          switch ( esc_attr(get_theme_mod('powerspeed_frontpage_order', 'default')) ) {
              case 'default':
                  powerspeed_slider();
                  powerspeed_jumbotron();
                  powerspeed_frontpage_content();
                  break;
              case 'default-reverse':
                  powerspeed_slider();
                  powerspeed_frontpage_content();
                  powerspeed_jumbotron();
                  break;
              case 'jumbotron':
                  powerspeed_jumbotron();
                  powerspeed_slider();
                  powerspeed_frontpage_content();
                  break;
              case 'jumbotron-reverse':
                  powerspeed_jumbotron();
                  powerspeed_frontpage_content();
                  powerspeed_slider();
                  break;
              case 'frontpage':
                  powerspeed_frontpage_content();
                  powerspeed_jumbotron();
                  powerspeed_slider();
                  break;
              case 'frontpage-reverse':
                  powerspeed_frontpage_content();
                  powerspeed_slider();
                  powerspeed_jumbotron();
                  break;
          }

				?>
			</section>
		</main>

	</div>
<?php get_footer(); ?>
