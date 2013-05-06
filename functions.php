<?php
// Register Navigation Menus
register_nav_menus( array(
	'primary_navigation' => 'Primary Navigation Menu',
	'footer_menu' => 'Footer Navigation Menu'
) );

// Register sidebar widget areas
register_sidebar(array(
  'name' => __( 'Footer Widget Area' ),
  'id' => 'footer-widget',
  'description' => __( 'Widgets in this area will appear in the left of the footer area.' ),
  'before-widget' => '',
  'after-widget' => '',
  'before_title' => '<h3 class="footer-title">',
  'after_title' => '</h3>'
));
?>