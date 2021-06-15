<?php
/**
 * This is the template for how hashtags appear above the title of a blog page. 
 * There are defaults to keep the blog pages stylistically consistent in null cases.
 * The user can choose these defaults in the customizer.
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */
?>

<span class="tags" id="post-tags">     
    <?php 
    $tags = get_the_tags( get_the_id() ); 
    if ( $tags ) {
        foreach ( $tags as $tag ) { ?>
            <span class="badge badge-primary tag">
                <a class="text-light font-italic" href="<?php echo get_tag_link( $tag->term_id ); ?>">
                    --<?php echo $tag->name; ?>--
                </a>
            </span>
        <?php }
    }
    else { ?>
        <span class="badge badge-primary text-light tag nolink">
            --<?php echo get_theme_mod( 'default_tag_1', "Teachable" ); ?>--
        </span>
        <span class="badge badge-primary text-light tag nolink">
            --<?php echo get_theme_mod( 'default_tag_2', "Education" ); ?>--
        </span>
    <?php }
    ?>
</span><br>