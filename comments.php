<?php
/**
 * The comment template file
 *
 * Used exclusively for displaying comments.  Copied and slightly edited from twentyseventeen theme
 *
 * @package PowerSpeed
 */


/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if ( post_password_required() ) {
	return;
}
?>
<br />
<div id="comments" class="card  powerspeed-main-content-container comments-area <?php echo esc_attr(get_theme_mod('powerspeed_border_main_content_type', '')); ?>"><div class="card-body">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: Post title. */
				printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'powerspeed' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s thought on &ldquo;%2$s&rdquo;',
						'%1$s thoughts on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'powerspeed'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 42,
					)
				);
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'powerspeed' ); ?></p>
	<?php endif; ?>

	<div class="form-group">
	<?php
		comment_form(
			array(
				'title_reply_before' => '<br class="clearboth" /><h2 id="reply-title" class="comment-reply-title">',
				'title_reply_after'  => '</h2>',
				'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control"></textarea></p>',
			  'fields' => apply_filters( 'comment_form_default_fields', array(

			    'author' =>
			      '<p class="comment-form-author">' .
			      '<label for="author">' . __( 'Name', 'powerspeed' ) . '</label> ' .
			      ( $req ? '<span class="required">*</span>' : '' ) .
			      '<input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) .
			      '" size="30" aria-required="true" /></p>',

			    'email' =>
			      '<p class="comment-form-email"><label for="email">' . __( 'Email', 'powerspeed' ) . '</label> ' .
			      ( $req ? '<span class="required">*</span>' : '' ) .
			      '<input id="email" name="email" type="text" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) .
			      '" size="30" aria-required="true" /></p>',

			    'url' =>
			      '<p class="comment-form-url"><label for="url">' .
			      __( 'Website', 'powerspeed' ) . '</label>' .
			      '<input id="url" name="url" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) .
			      '" size="30" /></p>'
			    )
			)
		));
		?>
	</div>

</div></div><!-- .comments-area -->
