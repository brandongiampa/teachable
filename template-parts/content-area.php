<div class="row mb-5">
    <div class="col-12<?php if ( is_active_sidebar( 'sidebar-right' ) ) { echo " col-lg-9"; } ?>">
        <div class="pr-lg-5">
            <?php 
            if ( have_posts() ): 
                get_template_part( 'template-parts/page-header' );

                if ( is_archive() || is_search() ): ?>
                    <div class="row">
                        <?php while ( have_posts() ): the_post();?>
                            <?php get_template_part( 'template-parts/blog-card' ); ?>
                        <?php endwhile; ?>
                        <?php the_posts_pagination(); ?>
                    </div>
                <?php 
                else: 
                    while( have_posts() ): the_post();
                        get_template_part( 'template-parts/post-content-and-footer' );
                    endwhile;
                    if ( is_single() ) {
                        get_template_part( 'template-parts/related-posts' );
                    }
                    else if ( is_page() ){
                        get_template_part( 'template-parts/latest-posts' );
                    }
                endif; //end if is archive or search 
            else: 
                get_template_part( 'template-parts/page-header' );
                get_template_part( 'template-parts/no-content' );
                get_template_part( 'template-parts/latest-posts' );
            endif; //end if have posts ?>
        </div>
    </div>
    <?php 
    if ( is_active_sidebar( 'sidebar-right' ) ){
        get_template_part( 'template-parts/sidebar-right' );
    }
    ?>
</div>
