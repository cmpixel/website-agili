<?php get_header(); ?>

<header id="section_header hero-header">
    <div>
        <div class="uk-background-blend-overlay uk-background-secondary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="uk-container uk-container-medium">
                <h1 class="uk-article-title uk-light uk-text-center"><?php the_title_attribute(); ?></h1>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="uk-section uk-section-default">
        <div class="uk-container uk-container-large">
            <?php while ((have_posts())) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" class="uk-article" <?php post_class(); ?>>

                    <h3 class="uk-card-title uk-margin-bottom-small uk-text-warning"><?php the_title(); ?></h3>

                    <p class="uk-article-meta uk-text-small">Escrito por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?>.
                        <br />
                        <?php if (has_category()) : ?>
                            Assunto: <?php the_category(', ') ?>
                        <?php endif; ?>
                        <br />
                        <?php if (has_tag()) : ?>
                            Tag: <?php the_tags('', ', ') ?>
                        <?php endif; ?>
                    </p>

                    <!-- <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p> -->

                    <p>
                        <?php the_content(); ?>
                    </p>

                </article>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>