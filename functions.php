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

register_nav_menus([
    // ID => WP Admin String
    'primary' => 'Primary Navigation'
]);

