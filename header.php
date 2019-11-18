<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<div class="tent-logo">
				<a href="/inhabitent">
				<img src="<?php echo get_template_directory_uri(); ?>/images/imgs/logos/inhabitent-logo-tent-white.svg" width="50px" height="50px" alt="tent logo" />
				</a>
				</div>
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<!-- Php code to add the thumbnail and the logo -->

			<?php if ( has_post_thumbnail() ) { ?>
				
				<?php if ( is_front_page() ) { ?>

					<div class="front-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/imgs/logos/inhabitent-logo-full.svg" width="275px" height="275px" alt="tent logo" />
					</div>

					<?php the_post_thumbnail(); ?>

				<?php } elseif ( is_page() ) { ?>

					<h2><?php the_title(); ?></h2>

					<?php the_post_thumbnail(); ?>
					
					<?php  } else { ?>
						<!-- do nothing -->
					<?php  }?>
				<?php } //end of if for the thumbnail img?>
				 <div id="header-scroll">
					 
				 </div>

			<!-- end of tumbnail php -->
			

			<div id="content" class="site-content">
