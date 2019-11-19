<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="side-bar">
<div id="secondary" class="widget-area" role="complementary">
<h2>CONTACT INFO</h2>
<p><i class="fas fa-phone-alt"></i> 778-456-7891</p>
<p><i class="fas fa-envelope"></i> info@inhabitent.com</p>
<p><i class="fas fa-map-marker-alt"></i> 1490 W Broadway
Vancouver, BC V6H 1H5</p>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

</div>