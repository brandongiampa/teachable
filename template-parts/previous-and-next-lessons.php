<?php
/**
 * This is the template for links to previous and next posts.
 * In a later version, I will likely set up custom fields for the author to choose which blogs to link, but at the moment, WordPress chooses.
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */
?>

<nav class="previous-next-post text-center p-4">
    <div class="row mb-4">
        <div class="col-6 border py-3">
            Previous Lesson:<br>
            <?php 
            if ( get_previous_post_link() ) {
                previous_post_link();
            }
            else {
                echo '---';
            }
            ?>
        </div>
        <div class="col-6 border py-3">
            Next Lesson:<br>
            <?php 
            if ( get_next_post_link() ) {
                next_post_link();
            }
            else {
                echo '---';
            }
            ?>
        </div>
    </div>
</nav>