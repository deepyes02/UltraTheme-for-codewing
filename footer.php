<section class="newsletter-section">
	<img src="<?php echo get_template_directory_uri(); ?>/images/newsletter-section.jpg" alt="">
</section> <!-- .newsletter-section -->

<footer class="site-footer">
	<div class="top-footer">
		<div class="container">
			<div class="col">
				<section class="widget widget_text">
					<h2 class="widget-title">About</h2>
					<div class="textwidget">
						<p>All seven continents by 30, I wrote. I wanted to be the person that could say that. On December 16th...</p>
					</div>
				</section>
			</div>
			<div class="col">
				<section class="widget widget_recent_entries">
					<h2 class="widget-title" itemprop="name">Recent Posts</h2>
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

				</section>
			</div>
			<div class="col">
				<section class="widget widget_categories">
					<h2 class="widget-title" itemprop="name">Categories</h2>
					<?php
					$args = array(
						'show_count' => true,
						'title_li'	=> ''
					);
					wp_list_categories($args);
					?>
				</section>
			</div>
		</div>
	</div> <!-- .top-footer -->
	<div class="bottom-footer">
		<div class="container">
			<div class="copyright">
				<span>© 2018 <a href="#">Super Ultra Light</a> - All Rights Reserved. </span><a href="#" target="_blank"> Super Ultra Light</a> by Rara Themes. Powered by <a href="#" target="_blank">WordPress</a>. <a class="privacy-policy-link" href="#">Privacy Policy</a>
			</div>
			<div class="footer-social">
				<nav class="social-list">
					<?php wp_nav_menu(array('theme_location' => 'social')) ?>
				</nav>
			</div>
		</div>
	</div>
</footer> <!-- .site-footer -->
</div> <!-- #page -->


<?php wp_footer(); ?>
</body>

</html>