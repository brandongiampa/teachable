<?php
/**
 * This is the template for the latest posts footers attached to pages without blog content.
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */
?>

<?php 

$lp_query = new WP_Query( array(
    'posts_per_page' => 2,
    'order' => 'DESC'
    ) );
?>

<section class="related-posts mb-5">
    <h1 class="text-center mt-5 mb-4">Latest Lessons</h1>
    <?php 
    if ( $lp_query->have_posts() ): ?>
        <div class="row">
        <?php while ( $lp_query->have_posts() ): $lp_query->the_post(); ?>
                <?php get_template_part( 'template-parts/blog-card' ); ?>
        <?php endwhile; ?>
        </div>
        
        <?php wp_reset_postdata();
    else: 
        get_template_part( 'template-parts/no-posts-found' );
    endif;
    ?>
</section>