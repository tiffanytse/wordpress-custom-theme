<?php
/*
  The functions file is a special file
    that WordPress will automatically execute.
  It holds things like our menus, our widgets, etc.
  Even our own functions we want to share throughout our theme.
*/
// Small utility function to shorten bloginfo('stylesheet_directory')
function sd () {
  bloginfo('stylesheet_directory');
}

// Register theme location placeholders for menus
register_nav_menus([
  // ID => WP Admin String
  'primary' => 'Primary Navigation',
  'social' => 'Social Navigation', 
  'footer' => 'Footer Navigation'
]);


// Add theme support for featured images
add_theme_support('post-thumbnails');












