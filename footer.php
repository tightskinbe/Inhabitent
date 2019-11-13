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
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
				<div>
					<h3><i class="fas fa-envelope"></i> Contact Info</h3>
					<p><i class="fas fa-phone-alt"></i> 778-456-7891</p>
					<p><i class="fab fa-facebook-square"></i><i class="fab fa-twitter-square"></i><i class="fab fa-google-plus-square"></i></p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
