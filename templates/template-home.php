<?php 
/*
Template Name: Home Page Template (or whatever you want to call it)
*/
  get_header();
  the_post();
?>

<!-- Slider -->

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>


<!-- List Three Featured Posts -->
<ol>
  <?php 
    $posts = get_posts([
      'numberposts' => 3, 
      'category_name' => 'featured'
    ]);

    foreach ($posts as $post) :
      setup_postdata($post);
  ?>

  <li>
    <h2><?php the_title(); ?></h2>
    <span><?php the_excerpt(); ?></span>
  </li>

  <?php endforeach; ?>
</ol>

<?php get_footer(); ?>












