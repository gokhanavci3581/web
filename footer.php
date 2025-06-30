<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
            </div>
            <div class="footer-info">
                <p><?php echo get_theme_mod('footer_address', 'İstanbul, Türkiye'); ?></p>
                <p>Tel: <?php echo get_theme_mod('footer_phone', '+90 555 123 4567'); ?></p>
                <p>E-mail: <?php echo get_theme_mod('footer_email', 'info@example.com'); ?></p>
            </div>
            <div class="footer-social">
                <a href="<?php echo get_theme_mod('social_facebook', '#'); ?>"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo get_theme_mod('social_twitter', '#'); ?>"><i class="fab fa-twitter"></i></a>
                <a href="<?php echo get_theme_mod('social_instagram', '#'); ?>"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo get_theme_mod('social_linkedin', '#'); ?>"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php echo get_theme_mod('copyright_text', 'Tüm hakları saklıdır.'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
