<?php
/**
 * Template Name: Home Page
 *
 *  @package WordPress_Demo
 */

get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!--      home page hero      -->
	<div class="hero" style="background-image: url(<?php the_field('hero_background_image'); ?>);">
    <h1><?php the_field('hero_headline')?></h1>
    <p><?php the_field('hero_subheadline')?></p>
</div>
            
            
            
    <!--  Services Section-->
<div class="services">
    <div class="row">
        
    <?php
    $args = array( 
        'post_type' => 'service',
        'posts_per_page' => 3
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>    
        
        
        <div class="column one-third">
    <img class="service-icon" src="<?php the_field('service_icon'); ?>">
    <h2 class="service-title"><?php the_title(); ?></h2>
    <p class="service-description"><?php the_field('service_description'); ?></p>
</div>

        
        <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
        
        
        </div>
    </div>
    
             
            
    <!-- Widgets -->
    <div id="sidebar" class="widgets"
         
	<div<h2 class="column one-third">			
		
</div></h2><!-- .widget-area -->
   <?php dynamic_sidebar( 'home-page-widgets' ); ?>     
         </div>
            
        
    
    <!-- Portfolio -->
<div class="portfolio">
    <h3 class="portfolio-headline">Recent Work</h3>

    <div class="row">

    <?php
        $args = array( 
            'post_type' => 'portfolio',
            'posts_per_page' => 3
    
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
    ?>

        <div class="column one-third" style="background-image: url(<?php the_field('portfolio_feature_image_'); ?>);">
            
            <h3><?php the_title(); ?></h3>
            <a href="<?php the_permalink(); ?>">➞</a>
        
        </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    </div>

    <a href="">View More<span>➞</span></a>
</div>
<!-- End Portfolio -->
    
    
            <!-- Blog -->
<div class="recent-blog">
    <h4 class="blog-headline">Blog</h4>

    <div class="row">

    <?php
        $args = array( 
            'post_type' => 'post',
            'posts_per_page' => 3
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
    ?>

        <div class="blog-post">
            <h3><?php the_title(); ?></h3>
            <div class="meta">
                <?php gschool_demo_posted_on(); ?>
            </div> 
<!-- Don't forget to change the slug -->
            <p><?php the_excerpt(); ?></p>
            <a class="read-more"href="<?php the_permalink(); ?>">Read More ➞</a>
        </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    </div>
</div>
    
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
