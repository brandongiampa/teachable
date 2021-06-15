<?php
/**
 * This is the template for the sidebar which, if activated, appears on the right of every page except the index / front pages.
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */
?>

<div class="col-12 col-lg-3 pt-lg-5 mb-5">
    <aside class="p-4 d-flex flex-column align-items-center sidebar sidebar-right">
        <?php dynamic_sidebar( 'sidebar-right' ); ?>
    </aside>
</div>

