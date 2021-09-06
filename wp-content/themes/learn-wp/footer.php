</main>
    <div class="container">
        <footer>
            <hr>
            <div class="container">
                <div class="row">
                    <?php if(is_active_sidebar('sidebar-footer-1')) : ?>
                        <div class="col col-4">
                            <?php dynamic_sidebar('sidebar-footer-1') ?>
                        </div>
                    <?php endif; ?>
                    <?php if(is_active_sidebar('sidebar-footer-2')) : ?>
                        <div class="col col-4">
                            <?php dynamic_sidebar('sidebar-footer-2') ?>
                        </div>
                    <?php endif; ?>
                    <?php if(is_active_sidebar('sidebar-footer-3')) : ?>
                        <div class="col col-4">
                            <?php dynamic_sidebar('sidebar-footer-3') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php wp_nav_menu( [
		            'theme_location' => 'footer_menu',
                    'container'      => false,
                    'menu_class'    => 'menu wp-learn-menu-footer'
	            ] ); ?>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>