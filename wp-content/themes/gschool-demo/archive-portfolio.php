<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress_Demo
 */

get_header(); ?>

<div id="primary" class="content-area portfolio">
<main id="main" class="site-main" role="main">         



<?php if ( have_posts() ) : ?>

<h1 class="portfolio-headline underline">Portfolio: Archive</h1>

 <?php           
the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
                    


<div class="row"> <!-- Start Row -->
    <?php while ( have_posts() ) : the_post(); ?> <!-- Start Loop -->
                
    <div class="column one-third" style="background-image: url(<?php the_field('portfolio_feature_image_'); ?>);">
    <div class="portfolio-color-overlay"></div>
    <h3 class="portfolio-title"><?php the_title(); ?></h3>
    <a class="portfolio-link" href="<?php the_permalink(); ?>"><span class="dashicons dashicons-arrow-right-alt"></span></a>
</div>


    <!-- Content goes here -->

    <?php endwhile; ?> <!-- End Loop -->
</div> <!-- End Row --> 

            

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
