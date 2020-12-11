<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ) . " - " . get_bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!--screen blackout for when opening navbar--> 
    <div id="blackout-screen" class="blackout-screen"></div>
    <!--hidden menu drawer at left of screen, position fixed-->
    <?php  if ( has_nav_menu( 'menu-left' ) ): ?>
        <?php get_template_part( 'template-parts/menu-drawer' ); ?>
    <?php endif; ?>
    <!--main navbar-->
    <header class="header-main bg-dark text-light">
        <div class="container">
            <!--branding-->
            <div class="navbar-top">
                <div class="branding">
                    <a class="text-light" href="<?php echo get_bloginfo( 'url' ); ?>">
                        <?php if ( has_custom_logo() ) {
                            the_custom_logo();
                        }
                        else {
                            echo get_bloginfo( 'name' );
                        } ?>                    
                    </a>
                </div>
                <!--toggle button for menu drawer-->
                <?php  if ( has_nav_menu( 'menu-left' ) ): ?>
                    <div id="menu-toggle" class="menu-toggle">
                        <a class="text-light" href="#" rel="nofollow">
                            <span class="dashicons dashicons-menu"></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <div class="header-sidebar">
        <div class="container">
            <?php 
            if ( is_archive() || is_singular() ) {
                dynamic_sidebar( 'sidebar-header' );
            }
            ?>
        </div>
    </div>
    
