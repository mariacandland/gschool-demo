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
            <div class="column one-half">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img id="footer-logo"/>
                    <h2>&#060; Maria &#047;&#062;</h2>
                </a>
            </div>
            <div class="column one-half">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </div>
        </div>
        <div class="row copyright">
            <p>Copyright  <?php echo date("Y"); ?> <?php bloginfo('name'); ?> - All Rights Reserved.</p>
        </div>
    
    </footer><!-- #colophon -->
</div><!-- #page -->






