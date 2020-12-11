<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
			<?php get_template_part( 'template-parts/showcase' ); ?>
			<div class="container">
				<div class="row">
					<div class="col-12 <?php if ( is_active_sidebar( 'sidebar-right' ) ) { echo " col-lg-9"; } ?> home-content">
						<?php
						if ( have_posts() ): ?>
						<h1 class="text-center mb-3 pr-lg-5">Recent Posts</h1>
						<div class="row pr-lg-5">
							<?php while ( have_posts() ): the_post();?>
								<?php get_template_part( 'template-parts/blog-card' ); ?>
							<?php endwhile; ?>
						</div><?php
						
						// Previous/next page navigation.
						the_posts_pagination();

						else: 
						get_template_part( 'template-parts/no-posts-found' );
						endif; ?>
					</div><!--content-col-->
					<?php if ( is_active_sidebar( 'sidebar-right' ) ): ?>
						<?php get_template_part( 'template-parts/sidebar-right' ); ?>
					<?php endif; ?>
				</div><!--row-->
			</div><!--container-->
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
get_footer();
