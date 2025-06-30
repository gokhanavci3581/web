<?php get_header(); ?>

<main>
    <section class="single-post">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <div class="post-meta">
                            <span class="post-date"><?php echo get_the_date(); ?></span>
                            <span class="post-author">by <?php the_author(); ?></span>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <footer>
                        <div class="post-categories">
                            Categories: <?php the_category(', '); ?>
                        </div>
                        
                        <?php if (has_tag()) : ?>
                            <div class="post-tags">
                                Tags: <?php the_tags('', ', ', ''); ?>
                            </div>
                        <?php endif; ?>
                    </footer>
                </article>

                <div class="post-navigation">
                    <?php previous_post_link('<div class="nav-previous">%link</div>', '← Previous Post'); ?>
                    <?php next_post_link('<div class="nav-next">%link</div>', 'Next Post →'); ?>
                </div>

                <?php if (comments_open() || get_comments_number()) : ?>
                    <div class="post-comments">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
                
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
