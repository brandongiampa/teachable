<footer id="footer-main" class="footer-main">
    <section class="text-light p-4 footer-top">
        <div class="container">
            <div class="footer-top-sidebar-wrap">
                <?php if ( is_active_sidebar( 'sidebar-footer' ) ) {
                    dynamic_sidebar( 'sidebar-footer' );
                } ?>
            </div>
        </div>
    </section>
    <section class="bg-dark text-light font-italic text-center py-2 footer-bottom">
        <div class="container">
            &copy;2020 esl4u
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>