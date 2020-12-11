<div id="menu-drawer" class="menu-drawer p-3">
    <div class="close">
        <a id="close-menu" href="#"><span class="dashicons dashicons-no"></span></a>
    </div>
    <h3 class="menu-title"><?php echo get_bloginfo( 'name' ); ?></h3>
    <p><?php echo get_bloginfo( 'description' ); ?></p>
    <hr>
    <!-- <label for="menu-left">Menu</label> -->
    <?php 
        wp_nav_menu(
            array(
                'container'  => '',
                'theme_location' => 'menu-left',
                'menu_id' => 'menu-left'
            )
        );
    ?>
</div>