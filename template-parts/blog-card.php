<div class="col-12 col-lg-6 p-lg-3 blog-card-wrap">
    <a href="<?php the_permalink(); ?>">
        <div class="card blog-card">
            <div class="card-header position-relative p-0">
                <img class="card-img-top" alt="thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
            <div class="card-body">
                <h4 class="card-title"><?php the_title(); ?></h4>
                <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
        </div>
    </a>
</div>


