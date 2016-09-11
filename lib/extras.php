<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' ...';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/*
 * add thumbnail 300x185, excerpt limited
 */
add_action( 'after_setup_theme', __NAMESPACE__ . '\\wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'homepage-thumb', 300, 185, true ); // (cropped)
}
function custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\custom_excerpt_length', 999 );