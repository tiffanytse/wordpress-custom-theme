<?php get_header(); ?>

  <h1>Posts</h1>

  <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
  ?>
    
    <article>
      <header>
        <h2><?php the_title(); ?></h2>
      </header>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More</a>
    </article>

  <?php
      endwhile;
    endif;
  ?>

<?php get_footer(); ?>




