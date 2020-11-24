<?php
 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly
 }
 ?><article <?php post_class(); ?>>
	<div class="card powerspeed-content-card powerspeed-main-content-container <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>">
		<a class=" text-center  mx-auto d-block" href="<?php the_permalink();?>"><?php the_post_thumbnail('full',  'thumbnail', array( 'class' => 'card-img-top' )); ?></a>
	  <div class="card-body">
	<header>

		<h1><?php the_title(); ?></h1>

	</header>

	<figure class="figure">
	  <figcaption class="figure-caption"><?php the_content(); ?>
	  </figcaption>
	</figure>

	<div class="card powerspeed-content-card powerspeed-main-content-container meta-info clearboth <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>">
		<div class="card-header">
			<?php _e('Published on', 'powerspeed'); ?> <?php echo get_the_date(); ?> - <?php _e('Authored by', 'powerspeed'); ?> <?php the_author_posts_link(); ?>
		</div>

		<div class="card-footer meta-info clearboth">
			<ul class="list-group list-group-flush">
				<?php $terms = get_the_terms( get_the_ID() , 'powerspeed_portfolio_category' ); if ( $terms && !is_wp_error( $terms ) ) { ?>
					<li class="list-group-item"><?php _e('Categories', 'powerspeed'); ?>: <?php foreach ( $terms as $term ) { ?><a class="badge badge-primary powerspeed-category" href="<?php echo esc_url( get_term_link( $term->slug, 'powerspeed_portfolio_category' ) ); ?>"><?php echo $term->name .'</a>'; } ?></li>
				<?php } ?>
			</ul>
		</div>

	</div>
</div>
</div>
</article>
