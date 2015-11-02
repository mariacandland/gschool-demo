<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress_Demo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
       <div class="row">
    <div class="column half"></div>
    <div class="column half"></div>
</div> 
        
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <img id="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/logo-header.png" alt="Your Image Description Here" />
</a>    
        
        
        <div class="site-info">
	<p>Copyright  <?php echo date("Y"); ?> <?php bloginfo('url'); ?> All Rights Reserved.</p>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'gschool-demo' ), 'gschool-demo', '<a href="http://Maria.Candland" rel="designer">Maria Candland</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="footer">
  <h2>&#060; Maria &#047; &#062;</h2> 
</a> 



</body>
</html>


