<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<?php 
			$args = array(
				'post-type' => 'product',
				'order' => 'RAND');
			
					$products = new WP_Query($args);
			?>

			<?php if ($products->have_posts() ) :?>
			<?php while ($products->have_posts() ) : $products->the_post(); ?>
			<?php the_title()?>
			<?php the_content()?>
			<?php endwhile; ?>
   			<?php wp_reset_postdata(); ?>
			<?php else : ?>
      			<h2>Nothing found!</h2>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
