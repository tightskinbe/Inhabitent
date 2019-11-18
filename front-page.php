<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="shop-container">
         <div>
            <h2>Shop Stuff</h2>
         </div>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/imgs/product-type-icons/' . $term->slug; ?>.svg" 
                       width="100px" height="100px" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </section>
         <div>
         <section>
                <h2 class="Inhabitent-Journal">Inhabitent Journal</h2>
                <?php
                $args = array('post_type'=> 'post', 'order' => 'ASC', 'posts_per_page' => 3 );
                $posts_query = get_posts( $args );
                ?>
                <div class="flex-journals">
                    <?php foreach ( $posts_query as $post ) : setup_postdata($post) ?>
                        <article class="front-journal">
                            <?php the_post_thumbnail('medium'); ?>
                            <h3><?php the_title();?></h3>
                            <a href="<?php echo get_the_permalink(); ?>">Read Entry</a>
                        </article>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </section>
      
      
      
      
      
      </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
