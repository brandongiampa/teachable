<?php
$args = array(
    'post_type' => 'post',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'featured'
        ),
    ),
    'posts_per_page' => '1',
    'orderby' => 'date'
);
$feat_query = new WP_Query( $args );

if ( $feat_query->have_posts() ): 
    while ( $feat_query->have_posts() ): $feat_query->the_post();  ?>
        <div class="showcase container-fluid position-relative" style="background-image: url( <?php echo get_the_post_thumbnail_url(); ?> );">
            <div class="container py-5">
                <div class="showcase-text position-relative my-5 p-4">
                    <span class="badge badge-primary font-italic">--Featured Lesson--</span>
                    <h1 class=""><?php the_title(); ?></h1>
                    <br>
                    <p class="font-italic">by <span class="author"><a href="<?php echo get_author_posts_url( get_the_author_id() ); ?>"><?php the_author(); ?></a></span>, in <?php the_category( ", " ); ?></p>
                    <hr class="my-4">
                    <div class="showcase-excerpt"><?php the_excerpt(); ?></div>
                    <a class="btn btn-primary text-light btn-lg" href="<?php the_permalink(); ?>" role="button">Go</a>  
                </div>
            </div>
        </div>
<?php 
    endwhile;
else: ?>
    <div class="showcase container-fluid position-relative" style="background-color: black;">
            <div class="container py-5">
                <div class="showcase-text position-relative my-5 p-4">
                    <span class="badge badge-primary font-italic">--Welcome--</span>
                    <h1 class=""><?php echo get_bloginfo( 'name' ); ?></h1>
                    <br>
                    <hr class="my-4">
                    <p class="showcase-excerpt">This site has no posts at the moment, but when they get some, we're sure they will be great!</p> 
                </div>
            </div>
        </div>
    <?php
endif; 
wp_reset_postdata(); ?>