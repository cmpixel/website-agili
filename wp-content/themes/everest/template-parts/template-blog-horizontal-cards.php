<?php

/**
 * Template Name: Ever Template Blog Horizontal
 * The template for the Blog Horizontal
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Everest Design Theme
 */

// load header
get_header();
?>


<!-- header -->
<header id="section_header hero-header">
    <div>
        <div class="uk-background-blend-overlay uk-background-secondary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(<?php the_field('blog_banner_background') ?>);">
            <div class="uk-container uk-container-medium">
                <h1 class="uk-light uk-text-center"><?php the_field('titulo_banner_blog') ?></h1>
            </div>
        </div>
    </div>
</header>
<!-- end header -->


<!-- blog cards carousel -->
<section class="uk-section uk-section-default uk-padding-small-bottom">

    <div class="uk-container uk-container-large">
        <h2 class="uk-margin-large"><?php the_field('titulo_carousel_blog') ?></h2>
        <div class="uk-slider-container-offset" uk-slider>

            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m" uk-height-match="target: > li > article > .uk-card" uk-grid>
                    <!-- start loop articles -->
                    <?php

                    $args = array(
                        'post_type'         => 'post',
                        'posts_per_page'     => '5'
                    );

                    $blog_slider = new WP_Query($args);
                    
                    if ($blog_slider->have_posts()) :
                        while ($blog_slider->have_posts()) : $blog_slider->the_post();
                    ?>

                            <!-- start card for loop -->
                            <li>
                                <article <?php post_class(); ?>>
                                    <div class="uk-card uk-card-small uk-card-default uk-card-hover">
                                        <div class="uk-card-media-top">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <div class="uk-height-medium uk-background-cover" data-srcset="<?php the_post_thumbnail_url(); ?>" uk-img loading="lazy"></div>
                                            </a>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title uk-margin-bottom-small"><a class="uk-text-warning" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                            <p class="post_date uk-text-small uk-margin-small">Por <span class="uk-buton-text"><?php the_author_posts_link(); ?></span>, <span class="uk-text"><?php echo get_the_date(); ?></span>
                                                <br />
                                                <?php if (has_category()) : ?>
                                                    Assunto: <?php the_category(', ') ?>
                                                <?php endif; ?>
                                                <br />
                                                <?php if (has_tag()) : ?>
                                                    Tag: <?php the_tags('', ', ') ?>
                                                <?php endif; ?>
                                            </p>
                                            <p>
                                                <?php if (has_excerpt()) {
                                                    the_excerpt();
                                                } else {
                                                    echo wp_trim_words(get_the_content(), 18);
                                                }
                                                ?>
                                            </p>
                                            <div class="uk-text-right">
                                                <a href="<?php the_permalink() ?>" class="uk-button uk-button-text">Leia mais <span uk-icon="icon:arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </li>

                        <?php
                        endwhile;
                    else :
                        ?>
                        <p class="uk-text-meta">Nenhum artigo encontrado.</p>
                    <?php
                    endif;
                    ?>
                    <?php wp_reset_query(); ?>
                </ul>

                <a style="color:#999;" class="uk-position-center-left-out" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a style="color:#999;" class="uk-position-center-right-out" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium"></ul>
        </div>
    </div>
</section>
<!-- end cards carousel -->

<!-- horizontal card blog -->
<section class="uk-section uk-section-large uk-padding-remove-top">
    <div class="uk-container uk-container-large uk-margin-large">
        <h2><?php the_field('titulo_todos_posts_blog') ?></h2>
    </div>
    <div class="uk-child-width-1 uk-grid-large" uk-height-match="target: > article > .uk-card" uk-grid>

        <?php

        $args = array(
            'posts_per_page'     => '',
            'post_type'         => 'post',
            'paged' => $paged
        );

        $blog_horizontal = new WP_Query($args);

        if ($blog_horizontal->have_posts()) :
            while ($blog_horizontal->have_posts()) : $blog_horizontal->the_post(); ?>

                <article <?php post_class(); ?>>

                    <div class="uk-container uk-container-large">
                        <div class="uk-card uk-card-defaul uk-card-hover uk-grid-collapse uk-margin" uk-grid>
                            <div class="uk-width-1@s uk-width-1-3@m uk-card-media-left uk-cover-container">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" uk-cover>
                                <canvas width="600" height="400"></canvas>
                            </div>
                            <div class="uk-width-1@s uk-width-expand@m uk-card-body uk-padding-small">
                                <h3 class="uk-card-title uk-margin-bottom-small"><a class="uk-text-warning" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                <p class="post_date uk-text-small uk-margin-small">Por <span class="uk-buton-text"><?php the_author_posts_link(); ?></span>, <span class="uk-text"><?php echo get_the_date(); ?></span>
                                    <br />
                                    <?php if (has_category()) : ?>
                                        Assunto: <?php the_category(', ') ?>
                                    <?php endif; ?>
                                    <br />
                                    <?php if (has_tag()) : ?>
                                        Tag: <?php the_tags('', ', ') ?>
                                    <?php endif; ?>
                                </p>
                                <p>
                                    <?php if (has_excerpt()) {
                                        the_excerpt();
                                    } else {
                                        echo wp_trim_words(get_the_content(), 50);
                                    }
                                    ?>
                                </p>
                                <div class="uk-text-left">
                                    <a href="<?php the_permalink() ?>" class="uk-button uk-button-text">Leia mais <span uk-icon="icon:arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </article>
            <?php
            endwhile;
        else :
            ?>
            <p class="uk-text-meta">Nenhum artigo encontrado.</p>
        <?php
        endif;
        ?>
    </div>
</section>
<!-- end horizontal card blog -->

<?php get_footer(); ?>