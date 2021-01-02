<?php get_header();
?>
<p>The content</p>
<?php
$thequery = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => 6
));

if ($thequery->have_posts()){
      while ($thequery->have_posts()){
            $thequery->the_post();
            ?>
            <h2><?php echo the_title();?></h2>
            <p><?php echo the_content();?><p>
            <?php
      }
}



?>

<?php get_footer();?>