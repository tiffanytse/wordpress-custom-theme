<!DOCTYPE html>
<html lang="en-ca">
<head>
  <meta charset="utf-8">
  <meta name="handheldfriendly" content="true">
  <meta name="mobileoptimized" content="240">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php wp_title(); ?></title>
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>

  <header role="banner">
    <h1 id="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php sd(); ?>/images/logo.svg" alt="<?php _e("Benny's Bakery"); ?>"></a></h1>
    <nav role="navigation">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary', // The ID from functions.php
          'container' => '', // Delete the extra <div>
          'menu_class' => '' // Delete the extra class on the <ul>
        ]);
      ?>
    </nav>
  </header>

  <main class="content">