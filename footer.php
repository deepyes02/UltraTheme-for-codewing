<section class="newsletter-section">
	<img src="<?php echo get_template_directory_uri(); ?>/images/newsletter-section.jpg" alt="">
</section> <!-- .newsletter-section -->

<footer class="site-footer">
	<div class="top-footer">
		<div class="container">
			<div class="col">
				<?php get_sidebar('col_1'); ?>
			</div>
			<div class="col">
				<?php get_sidebar('col_2'); ?>
			</div>
			<div class="col">
				<?php get_sidebar('col_3'); ?>
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