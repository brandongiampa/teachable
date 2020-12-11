<div class="text-muted meta categories">
    By 
    <span class="author">
        <a class="text-primary" href="<?php echo get_author_posts_url( get_the_author_id() ); ?>"><?php the_author(); ?></a>
    </span>
    in 
    <?php 
        $categories = get_the_category();
        if ( $categories ){
            for ( $i = 0; $i < sizeof( $categories ); $i++ ) { 
                if ( $i < sizeof( $categories ) - 1 ) {
                    $addon = ", ";
                }
                else {
                    $addon = ".";
                }
                echo '<a href="' . get_category_link( $categories[ $i ] ) . '" class="text-primary category-link">';
                    echo $categories[ $i ]->name;
                echo '</a>' . $addon;
            }
        }
    ?>
</div>