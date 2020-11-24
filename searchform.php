<?php
/**
 * Template for displaying search forms, copied from Twenty Sixteen
 *
 * @package PowerSpeed
 */

  if ( ! defined( 'ABSPATH' ) ) {
  	exit; // Exit if accessed directly
  }
  
$powerspeed_search_form_id = 'powerspeed-search-form-' . rand(1,1000);
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form-group">
      <div class="form-row">
        <div class="powerspeed-top-bar-search-input-column col-auto" >
          <label for="<?php echo $powerspeed_search_form_id.'-search-input'; ?>" class="screen-reader-text"><?php _e( 'Search', 'powerspeed' ); ?></label>
          <input id="<?php echo $powerspeed_search_form_id.'-search-input'; ?>" type="search" class="form-control search-field powerspeed-top-bar-search-input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'powerspeed' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        </div>
        <div class="powerspeed-search-button-column col-auto">
          <button type="submit" class="btn btn-secondary search-submit powerspeed-top-bar-search-button"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowOTgwMTE3NDA3MjA2ODExOEY2MkRBMzkzRkJDNDRGNCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCRkU5M0UwRDVBQ0QxMUUwOTk4NkMwNkJEQjNDRUE1NSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpCRkU5M0UwQzVBQ0QxMUUwOTk4NkMwNkJEQjNDRUE1NSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjBBODAxMTc0MDcyMDY4MTE4RjYyREEzOTNGQkM0NEY0IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjA5ODAxMTc0MDcyMDY4MTE4RjYyREEzOTNGQkM0NEY0Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+rkBamAAAAMZQTFRFubm5////ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5ubm5QHUVTAAAAEF0Uk5TAAADBgkMDxIVGBseJC0wMzk8P0VLTlFXY2Zpb3J4e36Bio2QlpmipairsbS3ur3DxsnMz9LV297k5+rt8PP2+fzKGCOaAAABG0lEQVQ4y93UW1OCUBSG4Q2bCqMss+yEmaaFhySosIMc3v//p7qAlJq9hRmv6rt+hhnWXt8SRs2IvwjFr2wJT0YRZH7P2QydGUWSvtwAj95Zx7e1cD93H2EMwFzq4BTAawohWnOAGw08BnCLv74D4j01HALe93hMH7hUw1fgcDXHM2CshktYrAduZRCoIRCUXuYTFmoYw9vPL4Zq6APNFewA92rYBZ7MAu5EwJUaOikwMA0hhLAegFQzR2MAELR3hd2JAIa6J5Rhvg7LYi3a2u1pBJQTt7T7aPWTskxO9RvecB/Dl3DiHkwA0vPqzsgpQHZRXa5ccl3dwkLeVtdV5lXrVvc6l16NAyBn8GzXuRTWaGxvf3v+1cXV5QuSjT6lUCZ+EwAAAABJRU5ErkJggg==" alt="<?php _e( 'Search', 'powerspeed' ); ?>" width="32" height="32" /></button>
        </div>
    </div>
  </div>
</form>
<br />
