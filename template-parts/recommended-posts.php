<?php
/**
 * This is the template for the recommended posts section at the end of blogs.
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */
?>

<?php 

$cats = wp_get_post_categories( get_the_id() );

$rp_query = new WP_Query( array(
    'cat' => $cats[0],
    'posts_per_page' => 2,
    "post__not_in" => array( get_the_id() )
    ) );
?>

<section class="related-posts mb-5">
    <h1 class="text-center mt-5 mb-4">Related Lessons</h1>
    <?php 
    if ( $rp_query->have_posts() ): ?>
        <div class="row">
        <?php while ( $rp_query->have_posts() ): $rp_query->the_post(); ?>
                <?php get_template_part( 'template-parts/blog-card' ); ?>
        <?php endwhile; ?>
        </div>
        
        <?php wp_reset_postdata();
    else: 
        get_template_part( 'template-parts/no-posts-found' );
    endif;
    ?>
</section>