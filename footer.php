<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
				</div><!-- .site-info -->
				<div class="flex-footer">
				<div>
					<h3>Contact Info</h3>
					<p><i class="fas fa-envelope"></i> info@inhabitent.com</p>
					<p><i class="fas fa-phone-alt"></i> 778-456-7891</p>
					<p><i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i> <i class="fab fa-google-plus-square"> </i></p>
				</div>
				<div class="footer-hours">
					<h3>Business Hours</h3>
					<p>Monday-Friday: 9am - 5pm</p>
					<p>Saturday: 10am - 2pm</p>
					<p>Sunday: Closed</p>
				</div>
				<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/imgs/logos/inhabitent-logo-text-dark.svg" width="70%" height="70%" alt="" />
				<!-- images/imgs/dark-wood.png); -->
					
				</div>
				</div>
				<p class="copy-right">COPYRIGHT &copy 2019 INHABITENT</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/javascript/script.js"></script>
	</body>
</html>
