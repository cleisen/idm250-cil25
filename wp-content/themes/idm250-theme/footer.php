<?php wp_footer(); ?>

<footer>
    <nav class="foot-menu">
        <?php
        wp_nav_menu(['theme_location' => 'footer-menu']);
        ?>
    </nav>
    <div class="center">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/insta-icon.png" class="insta-icon">
    </div>
    <div class="center">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>
</body>
</html>