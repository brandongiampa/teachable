<?php
/**
 * This is the HTML for the searchbar.
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */
?>

<div class="searchbar py-3 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="form-wrap position-relative">
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_search_link(); ?>">
                <input class="form-control" value="<?php get_search_query(); ?>" placeholder="Search lessons..." type="text" id="s" name="s">
                <button type="submit" id="searchsubmit">
                    <div class="dashicons dashicons-search"></div>
                </button>
            </form>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="searchsubmit">
                    <div class="dashicons dashicons-search"></div>
                </button>
            </div>
        </div>
    </div>
</div>