<?php get_header();?>

<div id="content" class="site-content">
	<header class="page-header">
		<div class="container">
			<h1 class="page-title">Read our blog to sharpen your business and SEO skills.</h1>
			<div class="page-desc">
				Get evidence-based collection of articles on a topic sent directly to you in one email.
			</div>
		</div>
	</header>

      <div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
<?php
if (have_posts()) :
      while (have_posts()) : the_post();

      ?>
     <article class="post">
							<figure class="post-thumbnail">
								<?php the_post_thumbnail(array(759, 427)); ?>
							</figure>
							<div class="post-content-wrap">
								<header class="entry-header">
									<div class="entry-meta">
										<span class="posted-on" itemprop="datePublished">
											<time datetime="2017-12-21"><?php echo get_the_date(); ?></time>
										</span>
										<span class="category">
											<?php the_category(',') ?>
										</span>
									</div>
									<h2 class="entry-title" itemprop="headline"><a href="<?php echo get_permalink($id); ?>"><?php echo get_the_title(); ?></a></h2>
								</header>
								<div class="entry-content">
									<p>
										<?php
										$content = get_the_content();
										echo mb_strimwidth($content, 0, 190, '..');
										?>
										<p>
								</div>
								<footer class="entry-footer">
									<a href="<?php echo get_permalink($id); ?>">Continue Reading</a>
								</footer>
							</div>
						</article>


<?php




endwhile;
wp_reset_postdata();
?>

<nav class="navigation pagination">
			<div class="nav-links">
                  <?php echo paginate_links();?>
			</div>
		</nav>
<?php



endif;

wp_reset_postdata();

?>
</div> <!-- #primary -->
		<aside id="secondary" class="widget-area">
			<section class="widget widget_search">
				<h2 class="widget-title" itemprop="name">Search</h2>
				<?php get_search_form();?>
			</section>

			<section class="widget widget_archive">
				<h2 class="widget-title" itemprop="name">Archives</h2>
				<ul>
					<?php wp_get_archives(array('type' => 'monthly', 'show_post_count' => true, 'limit' => 5)); ?>
				</ul>
			</section>
			<section class="widget widget_categories">
				<h2 class="widget-title" itemprop="name">Categories</h2>
				<ul>
					<?php
					$args = array(
						'show_count' => true,
						'title_li'	=> ''
					);
					wp_list_categories($args);
					?>
				</ul>
			</section>

			<section class="widget widget_pages">
				<h2 class="widget-title" itemprop="name">Pages</h2>
				<ul>
					<?php
					wp_list_pages(array(
						'title_li' => ''
					));
					?>
				</ul>
			</section>

			<section class="widget widget_recent_comments">
				<h2 class="widget-title" itemprop="name">Recent Comments</h2>
				<ul>
					<li class="recentcomments">
						<span class="comment-author-link">
							<span itemprop="name">wordpress</span>
						</span> on
						<a href="#">Exploring Untravelled Destinations</a>
					</li>
					<li class="recentcomments">
						<span class="comment-author-link">
							<span itemprop="name">
								<a href="#" class="url" itemprop="url">A WordPress Commenter</a>
							</span>
						</span> on
						<a href="#">Hello world!</a>
					</li>
				</ul>
			</section>

			<section class="widget widget_recent_entries">
				<h2 class="widget-title" itemprop="name">Recent Posts</h2>
				<ul>
				<?php
					$thequery = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 4
					));

					if ($thequery->have_posts()){
						while ($thequery->have_posts()){
							$thequery->the_post();
							?>
							<li><a href="<?php echo get_the_permalink($id);?>"><?php echo the_title();?></a><br/>
							<span><?php echo get_the_date();?></span>
						</li>
							<?php
							}
					}
					wp_reset_postdata();
					?>
				</ul>
			</section>

			<section class="widget widget_tag_cloud">
				<h2 class="widget-title" itemprop="name">Tag Cloud</h2>
				<div class="tagcloud">
					<?php
					$ultra_tags = get_tags();
					foreach ($ultra_tags as $tag) {
						$tag_link = get_tag_link($tag->term_id);
					?>
						<a href="<?php echo $tag_link ?>" class="tag-cloud-link" style='font-size:8pt;'><?php echo $tag->name; ?><span class="tag-link-count"> <?php echo "($tag->count)"; ?></span></a>

					<?php
					}
					?>
				</div>
			</section>
		</aside> <!-- #secondary -->
	</div> <!-- .container -->
</div> <!-- .site-content -->


<?php get_footer();?>