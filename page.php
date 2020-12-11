<?php
/**
 * The single post template file
 *
 * This is the template used for individual blog posts, unless otherwise specified.
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
                <article <?php post_class(); ?>>
                    <?php get_template_part( 'template-parts/content-area' ); ?>
                </article>
            </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
get_footer();