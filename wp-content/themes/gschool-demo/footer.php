<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maria.candland
 */

?>

    <footer id="colophon" class="site-nav" role="contentinfo">
<div class="row">
    <div class="column half"><h2>&#060; Maria &#047; &#062;</h2></div>
    <div class="column half"><p>Copyright  <?php echo date("F,d,Y"); ?> <?php bloginfo('Maria'); ?> - All Rights Reserved.</p></div>
    
  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>  
    
</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->






