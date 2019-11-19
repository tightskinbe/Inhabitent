<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="find-us-content">

		
		<main id="main" class="site-main" role="main">
			<div class="find-us">
				<h1>Find Us</h1>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1301.8442547106217!2d-123.13922214183236!3d49.263349645197835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac4fb%3A0x7edde857c28340ba!2sRED%20Academy!5e0!3m2!1sen!2sca!4v1574117743551!5m2!1sen!2sca" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
			<div class="camping">
				<h2>We Take Camping Very Seriously</h2>
				<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
			</div>
			<div class="camping">
				<h2>Send Us Email!</h2>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
