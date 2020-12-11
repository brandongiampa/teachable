<?php
/**
 * The search template file
 *
 * This page will display search results.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Teachable
 * @since Teachable 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
				<?php get_template_part( 'template-parts/content-area' ); ?> 
            </div><!--container-->
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
get_footer();

					