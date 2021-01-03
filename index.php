<?php get_header();?>

<?php
if (have_posts()) :
      while (have_posts()) : the_post();

      ?>
      <article>
            <a href="<?php echo get_permalink($id);?>">
            <h2><?php echo get_the_title();?></h2></a>
      </article>


<?php




endwhile;

echo paginate_links();

endif;

wp_reset_postdata();

?>

<?php get_footer();?>