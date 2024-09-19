<!-- load header -->
<?php get_header(); ?>

<!-- header -->
<header id="section_header hero-header">
    <div>
        <div class="uk-background-blend-overlay uk-background-secondary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(/agili/wp-content/uploads/2023/03/bg-analise.jpg);">
            <div class="uk-container uk-container-medium">
                <h1 class="uk-light uk-text-center">Informativo Agili Contabilidade</h1>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- blog cards carousel -->
<section class="uk-section">
    <div class="uk-container uk-container-large uk-padding-remove-bottom">
        <h2 class="uk-margin-medium">Últimas Notícias</h2>
        <div class="uk-slider-container-offset" uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

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
                                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                                <div class="uk-height-medium uk-background-cover" data-srcset="<?php the_post_thumbnail_url(); ?>" uk-img loading="lazy"></div>
                                            </a>
                                        </div>
                                        <div class="uk-card-body">
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


<!-- blog cards vertical -->
<div class="uk-section uk-section-large uk-padding-remove-top">
    <div class="uk-container uk-container-large">
        <h2 class="uk-margin-medium">Todas as Notícias</h2>
        <div class="uk-child-width-1 uk-child-width-1-3@m uk-grid-large" uk-height-match="target: > article > .uk-card" uk-grid>
            <!-- start loop articles -->
            <?php

            $args = array(
                'post_type'         => 'post',
                'posts_per_page'     => '',
            );

            $blog_posts = new WP_Query($args);

            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
            ?>
                    <!-- start card for loop -->
                    <article <?php post_class(); ?>>
                        <div class="uk-card uk-card-small uk-card-default uk-card-hover">
                            <div class="uk-card-media-top">
                                <!-- post thumbnail -->
                                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                    <div class="uk-height-medium uk-background-cover" data-srcset="<?php the_post_thumbnail_url(); ?>" uk-img loading="lazy"></div>
                                </a>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title uk-margin-bottom-small"><a class="uk-text-warning" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                <p class="post_date uk-text-small uk-margin-small">Por <span class="uk-buton-text"><?php the_author_posts_link(); ?></span>, <span class="uk-text"><?php echo get_the_date(); ?></span>
                                    <br />
                                    <?php if (has_category()) : ?>
                                        Assunto: <?php the_category(', ') ?>
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

                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p class="uk-text-meta">Nenhum artigo encontrado.</p>
            <?php
            endif;
            ?>
            <?php wp_reset_query(); ?>

        </div>
    </div>
</div>
<!-- end blog card -->

<!-- load footer -->
<?php get_footer(); ?>