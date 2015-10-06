  </main>

  <footer role="contentinfo">
      <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'container' => false,
          'menu_class' => ''
        ]);
      ?>
    <p><?php _e('Copyright'); ?> © <?php echo date('Y'); ?> <?php _e("Benny's Bakery"); ?>. <?php _e('All Rights Reserved.'); ?></p>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>