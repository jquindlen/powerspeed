( function( $ ) {

  wp.customize( 'powerspeed_border_main_content_type', function( value ) {
    value.bind(function(newval){
      if (newval != '') {
        var the_main_container = $( '.powerspeed-main-content-container' );
        the_main_container.removeClass('rounded-0 border-0 border rounded-sm rounded rounded-lg rounded-circle rounded-pill');
        the_main_container.addClass( newval );
      }
    } );
  } );


  wp.customize( 'powerspeed_border_sidebar_content_type', function( value ) {
    value.bind(function(newval){
      var the_sidebar = $( '.powerspeed-sidebar-section' );
      the_sidebar.removeClass();
      the_sidebar.addClass( 'powerspeed-sidebar-section' );
      the_sidebar.addClass( 'widget-wrapper' );
      the_sidebar.addClass( 'card' );
      the_sidebar.addClass( newval );
    } );
  } );

  wp.customize( 'powerspeed_border_footer_content_type', function( value ) {
    value.bind(function(newval){
      var footer_sidebar = $( '.powerspeed-footer-sidebars' );
      footer_sidebar.removeClass();
      footer_sidebar.addClass( 'powerspeed-footer-sidebars' );
      footer_sidebar.addClass( 'footer-widget-wrapper' );
      footer_sidebar.addClass( 'card' );
      footer_sidebar.addClass( newval );
    } );
  } );

} )( jQuery );
