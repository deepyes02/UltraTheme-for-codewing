<?php get_header();
?>
<p>The content</p>
<?php
if (have_posts()) {
      while (have_posts()) {
            the_post();
?>
            <a href="<?php echo get_permalink($id);?>"><h2><?php echo the_title(); ?></h2></a>
            <p><?php echo the_excerpt(); ?><p>
            <?php

      }
}




            ?>

            <?php get_footer(); ?>