<?php



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