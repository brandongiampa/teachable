<?php
/**
 * This is the template for content and what links beneath it (comments, pagination, etc.).
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */
?>

<div class="post-body">
    <?php the_content();?>
</div>
<hr>
<footer class="post-footer">
    <?php 
    if ( is_single() ) {
        if ( get_post_meta( get_the_id(), 'quiz_link' ) ): ?>
            <a href="<?php echo get_post_meta( get_the_id(), 'quiz_link' ); ?>" class="btn btn-primary btn-lg my-4 quiz-link" style="width: 100%;">
                <span class="dashicons dashicons-edit"></span>
                Take Quiz
            </a>
        <?php 
        endif;   //end if has meta 

        get_template_part( 'template-parts/previous-and-next-lessons' ); 
        ?>
        <div class="py-4">
            <?php if ( comments_open() || get_comments_number() ) {
                comments_template();
            } ?>
        </div>
    <?php } // end if is single 
    else if ( is_archive() || is_search() ) { 
        the_posts_pagination();
    } ?> 
    <hr>
</footer>