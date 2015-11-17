<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress_Demo
 */

get_header(); ?>

<div id="primary" class="content-area portfolio"></div>
<main id="main" class="site-main" role="main">         



<?php if ( have_posts() ) : ?>

<h2 class="portfolio-headline underline">Work</h2>

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

            
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
