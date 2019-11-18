
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<div class="product-meta">
            <h2><?php the_title(); ?></h2>
            $<?php the_field('price'); ?>
    
        </div><!-- .product-meta -->
		
	</header><!-- .entry-header -->


</article><!-- #post-## -->