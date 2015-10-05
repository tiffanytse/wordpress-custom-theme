<?php
  get_header();
  the_post();
?>

<article>
  <header>
    <h1><?php the_title(); ?></h1>
  </header>
  <footer>
    <p>
      Published <?php echo get_the_date('D d , Y'); ?>
      by <?php the_author(); ?>
      &middot; <?php comments_number(); ?>
    </p>
  </footer>
  <?php the_content();?>
</article>
  
<?php comments_template();?>
<?php
  get_footer();
?>















