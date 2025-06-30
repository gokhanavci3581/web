<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php echo get_theme_mod('hero_title', 'SİZE KALİTELİ HİZMET SAĞLIYORUZ'); ?></h1>
                <p><?php echo get_theme_mod('hero_description', 'Kaliteli hizmet anlayışımızla size en iyi çözümleri sunuyoruz'); ?></p>
                <a href="<?php echo get_theme_mod('hero_button_url', '#'); ?>" class="btn"><?php echo get_theme_mod('hero_button_text', 'DAHA FAZLA BİLGİ'); ?></a>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="features-grid">
                <?php
                for ($i = 1; $i <= 3; $i++) {
                    ?>
                    <div class="feature-card">
                        <img src="<?php echo get_theme_mod('feature_image_' . $i, get_template_directory_uri() . '/assets/img/icon' . $i . '.png'); ?>" alt="Feature <?php echo $i; ?>">
                        <h3><?php echo get_theme_mod('feature_title_' . $i, 'Özellik ' . $i); ?></h3>
                        <p><?php echo get_theme_mod('feature_description_' . $i, 'Bu alanda hizmetlerimiz hakkında detaylı bilgi verilmektedir.'); ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="about-content">
                <h2><?php echo get_theme_mod('about_title', 'HAKKIMIZDA'); ?></h2>
                <p><?php echo get_theme_mod('about_description', 'Firmamız uzun yıllardır sektörde hizmet vermektedir. Müşteri memnuniyeti odaklı çalışmalarımızla öne çıkıyoruz.'); ?></p>
                <a href="<?php echo get_theme_mod('about_button_url', '#'); ?>" class="btn"><?php echo get_theme_mod('about_button_text', 'DAHA FAZLA'); ?></a>
            </div>
            <div class="about-image">
                <img src="<?php echo get_theme_mod('about_image', get_template_directory_uri() . '/assets/img/about.jpg'); ?>" alt="About Us">
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2><?php echo get_theme_mod('testimonials_title', 'MÜŞTERİ YORUMLARI'); ?></h2>
            <div class="testimonial-slider">
                <?php
                for ($i = 1; $i <= 3; $i++) {
                    ?>
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p><?php echo get_theme_mod('testimonial_text_' . $i, 'Bu firmadan aldığım hizmetten çok memnun kaldım. Kesinlikle tavsiye ediyorum!'); ?></p>
                            <h4><?php echo get_theme_mod('testimonial_name_' . $i, 'Müşteri İsmi ' . $i); ?></h4>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2><?php echo get_theme_mod('contact_title', 'BİZE ULAŞIN'); ?></h2>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="1" title="İletişim Formu"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
