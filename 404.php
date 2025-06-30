<?php get_header(); ?>

<main>
    <section class="error-404">
        <div class="container">
            <div class="error-content">
                <h1>404</h1>
                <h2>Sayfa Bulunamadı</h2>
                <p>Aradığınız sayfa mevcut değil veya taşınmış olabilir.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">Ana Sayfaya Dön</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
