<?php 
  get_header(); 
  the_post(); 
  // call file attachments
  $files = get_posts([
    'post_type' => 'attachment', 
    'numberposts' => -1, 
    'post_parent' => $post->ID  
  ]);
?>

  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>

<!--   Example of how to attach a list of files -->
  <h2> List of Attachments </h2>
  <ul class="files">
      <?php foreach ($files as $file) : ?>
      <li>
          <a href="<?php echo wp_get_attachment_url($file->ID); ?>" rel="enclosure">
              <?php echo $file->post_title; ?>
          </a>
      </li>
      <?php endforeach; ?>
  </ul>
<!--   End of Example of how to attach a list of files -->


<!--   Example of how to attach the first file attachment -->
<h2> Single Attachment </h2>
<figure>
    <img src="<?php echo wp_get_attachment_url($files[0]->ID); ?>" alt="">
    <figcaption><?php echo $files[0]->post_title; ?></figcaption>
</figure>
<!--  End of example of how to attach the first file attachment -->


<?php get_footer(); ?>








