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
            <!-- end of shop Stuff -->
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
                            <a class="read-more" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
                        </article>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
                </section>
                <!-- end of Inhabitent Journal -->
            <section>
               <h2 class="latest-adventures">Latest Adventures</h2>
               <!-- grid content -->
               <div class="grid-adventures">
                  <div class="one">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/imgs/adventure-photos/canoe-girl.jpg" width="100%" height="100%"alt="" />   
                     <div class="adventure-meta">
                        <h3>Getting Back to Nature in a Canoe</h3>
                        <a href="/inhabitent">Read More</a>
                     </div>
                  </div>
                  <div class="two">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/imgs/adventure-photos/beach-bonfire.jpg" width="100%" height="50%"alt="" />
                     <div class="adventure-meta">
                        <h3>A Night with Friends at the Beach</h3>
                        <a href="/inhabitent">Read More</a>
                     </div>
                  </div>
                  <div class="three">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/imgs/adventure-photos/mountain-hikers.jpg" width="100%" height="50%"alt="" />
                     <div class="adventure-meta">
                        <h3>Taking in the View at Big Mountain</h3>
                        <a href="/inhabitent">Read More</a>
                     </div>
                  </div>
                  <div class="four">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/imgs/adventure-photos/night-sky.jpg" width="100%" height="50%"alt="" />
                     <div class="adventure-meta">
                        <h3>Star-Gazing at the Night Sky</h3>
                        <a href="/inhabitent">Read More</a>
                     </div>
                  </div>
               </div><!-- .grid-adventures -->
                  <div>
                     <h2><a href="/inhabitent">More Adventures</a></h3>
                  </div>
            </section> 
            <!-- end of Latest Adventures -->

            
      
      
      
      
      
      </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
