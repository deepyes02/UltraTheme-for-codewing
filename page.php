<?php get_header(); ?>
<div id="content" class="site-content">
      <div class="container">
            <div id="primary" class="content-area">
                  <main id="main" class="site-main">
                        <header class="page-header">
                              <a href="<?php get_the_permalink($id) ?>">
                                    <h1 class="page-title"><?php echo get_the_title();?></h1>
                              </a>
                        </header>
                        <div class="entry-content">
                              <?php echo get_the_content();?>
                        </div>
                  </main> <!-- .site-main -->
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

<?php get_footer(); ?>