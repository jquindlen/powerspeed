<?php
 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }
 ?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card powerspeed-content-card powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>">
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail('full',  'thumbnail', array( 'class' => 'card-img-top' )); ?></a>
	  <div class="card-body">
	<header>

		<h1><?php the_title(); ?></h1>

	</header>

	<div class="content">
		<p><?php  the_content(); ?></p>
	</div>

	<div class="card-footer meta-info clearboth">

		<div class="">
			<?php _e('Published on', 'powerspeed'); ?> <?php echo get_the_date(); ?> - <?php _e('Authored by', 'powerspeed'); ?> <?php the_author_posts_link(); ?>
		</div>
		<?php if ( !is_page() ) { ?>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><?php _e('Categories', 'powerspeed'); ?>: <?php the_category(' '); ?></li>
				<?php if ( has_tag() ) { ?>
					<li class="list-group-item"><?php the_tags(__('Tags: ', 'powerspeed'), ' '); ?></li>
				<?php } ?>
			</ul>
		<?php } ?>
	</div>
	</div>
		</div>
</article>
