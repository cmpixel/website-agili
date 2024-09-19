<!-- .
. // Blog Slider Cards
. // Everest Design Theme
. // Card News Slider
. // Modes: slide / cards / news
.
. -->
<!-- blog slider -->
<section class="uk-section uk-section-muted">
        <div class="uk-container uk-container-large">
            <h2 class="uk-margin-medium"><?php the_field('titulo_home_noticias') ?></h2>
            <div class="uk-slider-container-offset" uk-slider>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m  uk-grid uk-grid-match" uk-height-match="target: > li > article > .uk-card" uk-grid>

                        <!-- start loop articles -->

                        <?php

                        $args = array(
                            'post_type'         => 'post',
                            'posts_per_page'     => '5',
                        );

                        $blog_posts = new WP_Query($args);

                        if ($blog_posts->have_posts()) :
                            while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>

                                <!-- start card for loop -->
                                <li>
                                    <article <?php post_class(); ?>>
                                        <div class="uk-card uk-card-small uk-card-default uk-card-hover">
                                            <!-- <div class="uk-card-media-top">
                                            <?php
                                            if (has_post_thumbnail()) :
                                                the_post_thumbnail('ever-blog-img', array('class' => 'uk-height-medium'));
                                            endif;
                                            ?>
                                        </div> -->
                                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                                                <div class="uk-height-medium uk-background-cover" data-srcset="<?php the_post_thumbnail_url(); ?>" uk-img loading="lazy"></div>
                                            </a>
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
                                                <!-- the_content -> full content | the_excerpt -> resume -->
                                                <p class="uk-text-muted"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                                                <div class="uk-text-right">
                                                    <a href="<?php the_permalink() ?>" class="uk-button uk-button-text">Leia mais <span uk-icon="icon:arrow-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>

                            <?php
                            endwhile;
                        else : ?>
                            <p class="uk-text-meta">Nenhum artigo encontrado.</p>
                        <?php endif; ?>

                    </ul>

                    <a style="color:#999;" class="uk-position-center-left-out" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a style="color:#999;" class="uk-position-center-right-out" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium"></ul>

            </div>
        </div>
    </section>
    <!-- end slider -->