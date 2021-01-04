<?php
/*
Template Name: Blog List View
*/

get_header('list'); ?>
<div class="site-banner">
	<div class="banner-item">
		<img src="<?php echo get_template_directory_uri(); ?>/images/banner-img.jpg" alt="banner">
		<div class="banner-caption left">
			<div class="container">
			<h1 class="title">
					<?php
					$cta_title = esc_attr(get_option('cta_title'));
					echo $cta_title;

					?>
				</h1>
				<div class="item-desc">
					<?php
						$cta_description = esc_attr(get_option('cta_description'));
						echo $cta_description;
					?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/banner-newsletter-form.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div> <!-- .site-banner -->

<section class="about-section">
	<div class="container">
		<section class="widget widget_raratheme_featured_page_widget">
			<div class="widget-featured-holder right">
				<p class="section-subtitle">
					<span>About Us</span>
				</p>
				<div class="text-holder">
					<?php
					$description = esc_attr(get_option('description'));
					$full_name = esc_attr(get_option('full_name'));
					$profile_picture_url = esc_attr(get_option('profile_picture'));
					?>
					<h2 class="widget-title">Hi, I'm <?php echo $full_name;?>.</h2>
					<div class="featured_page_content">
						<p>
							<?php echo $description;?>
						</p>
						<a href="#" target="_blank" class="btn-readmore">Know more about me</a>
					</div>
				</div>
				<div class="img-holder">
						<img src="<?php echo $profile_picture_url;?>" alt="<?php echo $full_name?> profile picture">
				</div>
			</div>
		</section>
	</div>
</section> <!-- .about-section -->

<section class="client-section">
	<div class="container">
		<section class="widget widget_raratheme_client_logo_widget">
			<div class="raratheme-client-logo-holder">
				<div class="raratheme-client-logo-inner-holder">
					<h2 class="widget-title" itemprop="name"><?php echo $full_name?> has been featured on:</h2>
					<div class="image-holder-wrap">
						<!-- yo wrap plugin ko filter bata rakhnu parxa -->
						<div class="image-holder black-white">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/dashlane.svg" alt="">
							</a>
						</div>
						<div class="image-holder black-white">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/get-satisfaction.svg" alt="">
							</a>
						</div>
						<div class="image-holder black-white">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/khan_academy.svg" alt="">
							</a>
						</div>
						<div class="image-holder black-white">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/mixpanel.svg" alt="">
							</a>
						</div>
						<div class="image-holder black-white">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/deviantart.svg" alt="">
							</a>
						</div>
						<div class="image-holder black-white">
							<a href="#" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/amazon.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section> <!-- .client-section -->

<?php get_sidebar('home'); ?>

<section class="service-section">
	<div class="container">
		<section class="widget widget_text">
			<h2 class="widget-title">What do you need help with now?</h2>
			<div class="textwidget">
				<p>We have been trusted by our partners and clients for numerous of reasons. Here's why you should choose us too.</p>
			</div>
		</section>
		<?php
		$the_query = new WP_Query((array(
			'post_type'		=> 'Offering',
			'posts_per_page'	=> 6
		)));

		if ($the_query->have_posts()) {
			while ($the_query->have_posts()) {
				$the_query->the_post();
		?>
				<section class="widget widget_rrtc_icon_text_widget">
					<div class="rtc-itw-holder">
						<div class="rtc-itw-inner-holder">
							<div class="text-holder">
								<a href="<?php echo get_permalink($id); ?>">
									<h2 class="widget-title" itemprop="name"><?php echo get_the_title(); ?></h2>
								</a>
								<div class="content">
									<p><?php
										$content = get_the_content();
										echo mb_strimwidth($content, 0, 160, '...'); ?>
									</p>
								</div>
								<a class="btn-readmore" href="<?php echo get_permalink($id); ?>" target="_blank">Learn More</a>
							</div>
							<figure class="icon-holder">
								<?php the_post_thumbnail(); ?>
							</figure>
						</div>
					</div>
				</section>

		<?php
			}
			echo paginate_links();

		}
		wp_reset_postdata(); //reset the post query data everytime the loop is called.
		?>
	</div>
</section> <!-- .service-section -->

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
				$the_query = new WP_Query((array(
					'post_type'	=> 'post',
					'posts_per_page'	=> 2,
					'paged' => $paged

				)));

				if ($the_query->have_posts()) {
					while ($the_query->have_posts()) {
						$the_query->the_post();
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
					}


					?>
			</main><!-- .site-main -->

		<?php
				}
				wp_reset_postdata();

		?>

		<nav class="navigation pagination">
			<div class="nav-links">
				<a class="page-numbers prev" href="#">
					<span>&larr;</span> Prev
				</a>
				<span class="page-numbers current">
					1
				</span>
				<a class="page-numbers" href="#">
					2
				</a>
				<a class="page-numbers" href="#">
					3
				</a>
				<span class="page-numbers dots">...</span>
				<a class="page-numbers" href="#">
					5
				</a>
				<a class="page-numbers next" href="#">
					Next <span>&rarr;</span>
				</a>
			</div>
		</nav>
		</div> <!-- #primary -->
		<aside id="secondary" class="widget-area">
			<section class="widget widget_search">
				<h2 class="widget-title" itemprop="name">Search</h2>
				<form role="search" method="get" class="search-form" action="">
					<label>
						<span class="screen-reader-text">Search for:</span>
						<input class="search-field" placeholder="Search..." value="" name="s" type="search">
					</label>
					<input class="search-submit" value="Search" type="submit">
				</form>
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


