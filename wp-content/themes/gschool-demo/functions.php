
<?php
    // The Arguments
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 10
    );
    // Start Loop
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>

        <!-- The Content - This will repeat 10 times -->
        <div class="product">
            <h1><?php the_title(); ?></h1>
            <div class="entry-content"><?php the_content(); ?></div>
        </div>

<?php
    // End Loop
    endwhile;
    wp_reset_postdata();
?>