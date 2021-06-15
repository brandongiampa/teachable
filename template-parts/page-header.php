<?php
/**
 * This is the template for the header of each different type of page.
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */
?>

<?php

global $wp_query;
$title = "Teachable";

if ( is_archive() ) {
    $title = get_the_archive_title();
}
else if ( is_singular() ) {
    $title = get_the_title();
}
else if ( is_404() ) {
    $title = "Error";
}
else if ( is_search() ) {
    $title = "Query: " . get_search_query();
}

?>

<header class="post-header mt-5 py-4">
    <!-- <hr class="page-header-top"> -->
    <?php get_template_part( 'template-parts/tags' ); ?>
    <h1 class="mb-5"><?php echo $title; ?></h1>
    <?php
        if ( is_single() ) {
            get_template_part( 'template-parts/author-categories' );
        }
        else if ( is_search() || is_archive() ) { ?>
            <div class="text-muted">
                <?php echo teachable_make_posts_shown_string(); ?>
            </div>
        <?php 
        }
    ?>
    <?php 
    if ( is_single() ) {
        get_template_part( 'template-parts/share-buttons' );
    } ?>
    <!-- <hr>
    <br> -->
</header>
<br>