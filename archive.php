<?php get_header(); ?>

<main>
    <section class="archive-section">
        <div class="container">
            <header class="page-header">
                <?php the_archive_title('<h1>', '</h1>'); ?>
                <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
            </header>

            <?php if (have_posts()) : ?>
                <div class="posts-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="post-content">
                                <header>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="post-meta">
                                        <span class="post-date"><?php echo get_the_date(); ?></span>
                                    </div>
                                </header>

                                <div class="post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="read-more">Devamını Oku →</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="pagination">
                    <?php echo paginate_links(array(
                        'prev_text' => '← Önceki',
                        'next_text' => 'Sonraki →',
                    )); ?>
                </div>
            <?php else : ?>
                <p>Sonuç bulunamadı.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
