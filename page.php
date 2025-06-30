<?php get_header(); ?>

<main>
    <section class="page-content">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
