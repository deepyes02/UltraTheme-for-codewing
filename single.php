<?php get_header(); ?>

<div id="content" class="site-content">
      <header class="page-header">
            <div class="container">
                  <?php
                  while (have_posts()) {
                        the_post();
                  }
                  ?>
                  <h1 class="page-title"><?php echo the_title() ?></h1>
            </div>
      </header>

      <div class="container">
            <div id="primary" class="content-area sticky-meta">
                  <main id="main" class="site-main">
                        <div class="entry-meta">
                              <div class="sticky-inner">
                                    <div class="sidebar__inner">
                                          <span class="byline" itemprop="author">
                                                <span class="meta-title">Written By</span>
                                                <span class="author">
                                                      <a href="#" class="url fn" itemprop="name"><?php the_author_posts_link(); ?></a>
                                                </span>
                                          </span>
                                          <span class="posted-on" itemprop="datePublished">
                                                <span class="meta-title">Published on</span>
                                                <a href="#">
                                                      <time datetime="2017-12-21"><?php echo get_the_date(); ?></time>
                                                </a>
                                          </span>
                                          <span class="category">
                                                <span class="meta-title">Category</span>
                                                <?php the_category(','); ?>
                                          </span>
                                          <div class="sticky-social">
                                                <div class="post-favourite">
                                                      <span class="fav-count">525</span>
                                                      <a href="#" class="fav-icon"><i class="fas fa-heart"></i></a>
                                                </div>
                                                <ul class="social-list">
                                                      <li><a data-title="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                      <li><a data-title="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                      <li><a data-title="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                      <li><a data-title="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                      <li><a data-title="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="entry-content">
                              <?php the_content(); ?>
                        </div>
                        <footer class="entry-footer">
                              <div class="tags">
                                    <?php the_tags(NULL, ',') ?>
                              </div>
                        </footer>
                  </main> <!-- .site-main -->
                  <div class="author-profile">
                        <div class="author-img">
                              <img alt="" src="images/about-img.jpg" class="avatar">
                        </div>
                        <div class="author-content-wrap">
                              <h1 class="page-title">
                                    <?php the_author_posts_link(); ?>
                              </h1>
                              <div class="author-desc">
                                    <?php
                                    $authorDesc = the_author_meta('description');
                                    echo $authorDesc;

                                    ?>
                              </div>
                              <ul class="social-list">
                                    <li><a data-title="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a data-title="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a data-title="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a data-title="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a data-title="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
                              </ul>
                        </div>
                  </div>
                  <nav class="navigation posts-navigation">
                        <div class="nav-links">
                              <?php
                              // Previous/next post navigation.
                              the_post_navigation(array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . '</span> ' .
                                          '<span class="screen-reader-text">' . __('Next post:', 'superUltraTheme') . '</span> ' .
                                          '<span class="post-title">Next Article</span>',
                                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . '</span> ' .
                                          '<span class="screen-reader-text">' . __('Previous post:', 'superUltraTheme') . '</span> ' .
                                          '<span class="post-title">Previous Article</span>',
                              ));
                              ?>
                        </div>
                  </nav>
                  <div class="additional-posts">
                        <h3 class="title">
                              Recommended Articles
                        </h3>
                        <div class="block-wrap">
                              <div class="block clearfix">
                                    <div class="entry-meta">
                                          <span class="posted-on" itemprop="datePublished">
                                                <a href="#">
                                                      <time datetime="2017-12-21">Feb 18, 2018</time>
                                                </a>
                                          </span>
                                    </div>
                                    <header class="entry-header">
                                          <h3 class="entry-title">
                                                <a href="#">This Start-Up Will Actually Downsize Your Closet</a>
                                          </h3>
                                    </header><!-- .entry-header -->
                                    <figure class="post-thumbnail">
                                          <a href="#">
                                                <img src="images/blog-img1.jpg" alt="">
                                          </a>
                                    </figure><!-- .post-thumbnail -->
                              </div>
                              <div class="block clearfix">
                                    <div class="entry-meta">
                                          <span class="posted-on" itemprop="datePublished">
                                                <a href="#">
                                                      <time datetime="2017-12-21">Feb 18, 2018</time>
                                                </a>
                                          </span>
                                    </div>
                                    <header class="entry-header">
                                          <h3 class="entry-title">
                                                <a href="#">Tesla Ramps Up Model 3 Production and Predicts Profitability</a>
                                          </h3>
                                    </header><!-- .entry-header -->
                                    <figure class="post-thumbnail">
                                          <a href="#">
                                                <img src="images/blog-img2.jpg" alt="">
                                          </a>
                                    </figure><!-- .post-thumbnail -->
                              </div>
                              <div class="block clearfix">
                                    <div class="entry-meta">
                                          <span class="posted-on" itemprop="datePublished">
                                                <a href="#">
                                                      <time datetime="2017-12-21">Feb 18, 2018</time>
                                                </a>
                                          </span>
                                    </div>
                                    <header class="entry-header">
                                          <h3 class="entry-title">
                                                <a href="#">7 Off-Duty Outfits That Will Reinvent Your Spring Wardrobe</a>
                                          </h3>
                                    </header><!-- .entry-header -->
                                    <figure class="post-thumbnail">
                                          <a href="#">
                                                <img src="images/blog-img3.jpg" alt="">
                                          </a>
                                    </figure><!-- .post-thumbnail -->
                              </div>
                        </div><!-- .block-wrap -->
                  </div>
                  <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
                  <div class="comments-area" itemscope="" itemtype="http://schema.org/Comment">
                        <h2 class="comment-title">3 Comments</h2>
                        <ol class="comment-list">
                              <li class="comment even parent">
                                    <article class="comment-body">
                                          <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                      <img src="images/test-img1.jpg" alt="commenter image" class="avatar photo">
                                                      <b class="fn">
                                                            <a href="#" class="url">Sudina Manandhar</a>
                                                            <span class="says">says:</span>
                                                      </b>
                                                </div>
                                                <div class="comment-metadata">
                                                      <a href="#">
                                                            <time>May 18, 2017 at 2:15 am</time>
                                                      </a>
                                                </div>
                                                <p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p>
                                          </footer>
                                          <div class="comment-content">
                                                <p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
                                          </div>
                                          <div class="reply">
                                                <a class="comment-reply-link" href="#">Reply</a>
                                          </div>
                                    </article>
                                    <ol class="children" itemscope="" itemtype="http://schema.org/Answer">
                                          <li class="comment">
                                                <article class="comment-body">
                                                      <footer class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                  <img src="images/test-img2.jpg" alt="commenter image" class="avatar photo">
                                                                  <b class="fn">
                                                                        <a href="#" class="url">Anup Shakya</a>
                                                                        <span class="says">says:</span>
                                                                  </b>
                                                            </div>
                                                            <div class="comment-metadata">
                                                                  <a href="#">
                                                                        <time>May 18, 2017 at 2:15 am</time>
                                                                  </a>
                                                            </div>
                                                      </footer>
                                                      <div class="comment-content">
                                                            <p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
                                                      </div>
                                                      <div class="reply">
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                      </div>
                                                </article>
                                                <ol class="children" itemscope="" itemtype="http://schema.org/Answer">
                                                      <li class="comment even parent bypostauthor">
                                                            <article class="comment-body">
                                                                  <footer class="comment-meta">
                                                                        <div class="comment-author vcard">
                                                                              <img src="images/author-square.jpg" alt="commenter image" class="avatar photo">
                                                                              <b class="fn">
                                                                                    <a href="#" class="url">Sirapa Manandhar</a>
                                                                                    <span class="says">says:</span>
                                                                              </b>
                                                                        </div>
                                                                        <div class="comment-metadata">
                                                                              <a href="#">
                                                                                    <time>May 18, 2017 at 2:15 am</time>
                                                                              </a>
                                                                        </div>
                                                                  </footer>
                                                                  <div class="comment-content">
                                                                        <p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
                                                                  </div>
                                                                  <div class="reply">
                                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                                  </div>
                                                            </article>
                                                      </li>
                                                </ol>
                                          </li>
                                    </ol>
                              </li>
                              <li class="comment even parent bypostauthor">
                                    <article class="comment-body">
                                          <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                      <img src="images/author-square.jpg" alt="commenter image" class="avatar photo">
                                                      <b class="fn">
                                                            <a href="#" class="url">Sirapa Manandhar</a>
                                                            <span class="says">says:</span>
                                                      </b>
                                                </div>
                                                <div class="comment-metadata">
                                                      <a href="#">
                                                            <time>May 18, 2017 at 2:15 am</time>
                                                      </a>
                                                </div>
                                          </footer>
                                          <div class="comment-content">
                                                <p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
                                          </div>
                                          <div class="reply">
                                                <a class="comment-reply-link" href="#">Reply</a>
                                          </div>
                                    </article>
                                    <ol class="children" itemscope="" itemtype="http://schema.org/Answer">
                                          <li class="comment">
                                                <article class="comment-body">
                                                      <footer class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                  <img src="images/test-img2.jpg" alt="commenter image" class="avatar photo">
                                                                  <b class="fn">
                                                                        <a href="#" class="url">Anup Shakya</a>
                                                                        <span class="says">says:</span>
                                                                  </b>
                                                            </div>
                                                            <div class="comment-metadata">
                                                                  <a href="#">
                                                                        <time>May 18, 2017 at 2:15 am</time>
                                                                  </a>
                                                            </div>
                                                      </footer>
                                                      <div class="comment-content">
                                                            <p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
                                                      </div>
                                                      <div class="reply">
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                      </div>
                                                </article>
                                          </li>
                                    </ol>
                              </li>
                        </ol>

                        <div class="comment-respond">
                              <h3 class="comment-reply-title">
                                    Leave a Comment
                                    <small>
                                          <a id="cancel-comment-reply-link" href="#">Cancel reply</a>
                                    </small>
                              </h3>
                              <form class="comment-form">
                                    <p class="comment-notes">
                                          <span id="email-notes">Your email address will not be published.</span>
                                    </p>
                                    <p class="comment-form-comment">
                                          <label for="comment">Comment</label>
                                          <textarea id="comment" name="comment" cols="40" rows="8" required="required" placeholder="Comment*"></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                          <label for="author">Name<span class="required">*</span></label>
                                          <input id="author" name="author" required="required" placeholder="Name*" type="text">
                                    </p>
                                    <p class="comment-form-email">
                                          <label for="email">Email<span class="required">*</span></label>
                                          <input id="email" name="email" required="required" placeholder="Email*" type="email">
                                    </p>
                                    <p class="comment-form-url">
                                          <label for="url">Website</label>
                                          <input id="url" name="url" placeholder="Website" type="url">
                                    </p>
                                    <p class="comment-form-cookies-consent">
                                          <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"><label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                          <input name="submit" class="submit" value="Post Comments" type="submit">
                                    </p>
                              </form>
                        </div>
                  </div>
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
                              <li><a href="#">February 2018</a>&nbsp;(2)</li>
                              <li><a href="#">November 2017</a>&nbsp;(1)</li>
                        </ul>
                  </section>

                  <section class="widget widget_categories">
                        <h2 class="widget-title" itemprop="name">Categories</h2>
                        <ul>
                              <li class="cat-item"><a href="#">Entertainment</a> (1)</li>
                              <li class="cat-item"><a href="#">Finance</a> (2)</li>
                              <li class="cat-item"><a href="#">Politics</a> (2)</li>
                              <li class="cat-item"><a href="#">Uncategorized</a> (3)</li>
                        </ul>
                  </section>

                  <section class="widget widget_pages">
                        <h2 class="widget-title" itemprop="name">Pages</h2>
                        <ul>
                              <li class="page_item"><a href="#">About Us</a></li>
                              <li class="page_item"><a href="#">CHECKOUT</a></li>
                              <li class="page_item"><a href="#">Contact Us</a></li>
                              <li class="page_item"><a href="#">Enquiry Thankyou Page</a></li>
                              <li class="page_item"><a href="#">Our Team</a></li>
                              <li class="page_item"><a href="#">Portfolio</a></li>
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
                              <li>
                                    <a href="#">Exploring Untravelled Destinations</a>
                                    <span class="post-date">February 12, 2018</span>
                              </li>
                              <li>
                                    <a href="#">This theme recommends the following plugins</a>
                                    <span class="post-date">February 12, 2018</span>
                              </li>
                              <li>
                                    <a href="#">Hello world!</a>
                                    <span class="post-date">November 22, 2017</span>
                              </li>
                        </ul>
                  </section>

                  <section class="widget widget_tag_cloud">
                        <h2 class="widget-title" itemprop="name">Tag Cloud</h2>
                        <div class="tagcloud">
                              <a href="#" class="tag-cloud-link" style="font-size: 8pt;">Entertainment<span class="tag-link-count"> (1)</span></a>
                              <a href="#" class="tag-cloud-link" style="font-size: 16.4pt;">Finance<span class="tag-link-count"> (2)</span></a>
                              <a href="#" class="tag-cloud-link" style="font-size: 16.4pt;">Politics<span class="tag-link-count"> (2)</span></a>
                              <a href="#" class="tag-cloud-link" style="font-size: 22pt;">Uncategorized<span class="tag-link-count"> (3)</span></a>
                        </div>
                  </section>
            </aside> <!-- #secondary -->
      </div> <!-- .container -->
</div> <!-- .site-content -->


<?php get_footer(); ?>