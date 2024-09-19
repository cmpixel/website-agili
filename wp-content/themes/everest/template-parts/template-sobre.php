<?php

/**
 * Template Name: Ever Template Sobre a Agili
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
        <div class="uk-background-blend-overlay uk-background-secondary uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(<?php the_field('about_banner_background') ?>);">
            <div class="uk-container uk-container-medium">
                <h1 class="uk-light uk-text-center"><?php the_field('titulo_banner_about') ?></h1>
                <div class="uk-flex uk-flex-center">
                    <h3 class="uk-light uk-width-1@s uk-width-2-3@m uk-text-center"><?php the_field('subtitulo_banner_about') ?></h3>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
<main>
    <section class="uk-section uk-section-muted">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-center" uk-grid>
                <div class="uk-width-1@m uk-text-center">
                    <h2 class=""><?php the_field('titulo_sobre_nos_secao_1') ?></h2>
                    <hr class="uk-divider-small uk-margin-medium-bottom">
                    <div class="uk-column-1-3@m uk-column-divider uk-text-left">
                        <?php the_field('descricao_sobre_nos_secao_1') ?>
                    </div>
                </div>
                <!-- <div class="uk-width-1-2@m">
                    <img src="<?php the_field('imagem_sobre_nos_secao_1') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div> -->
            </div>
        </div>
        </div>
    </section>

    <section class="uk-section uk-text-left">
        <div class="uk-container uk-container-large">

            <!-- fundadores da equipe -->
            <div class="uk-text-center">
                <h2 class="uk-margin-large-bottom"><?php the_field('titulo_secao_fundadores') ?></h2>
            </div>
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-5@l uk-grid-column-large uk-grid-row-large uk-flex uk-flex-center uk-grid-match" uk-grid>

                <?php

                // Check rows existexists.
                if (have_rows('card_fundadores')) :

                    // Loop through rows.
                    while (have_rows('card_fundadores')) : the_row();

                        // Load sub field value.
                        $foto_fundador = get_sub_field('foto_fundador');
                        $nome_fundador = get_sub_field('nome_fundador');
                        $cargo_fundador = get_sub_field('cargo_fundador');
                        $crc_fundador = get_sub_field('crc_fundador');
                ?>
                        <div>
                            <div class="uk-card uk-text-center">
                                <div class="uk-card-media-top">
                                    <div style="width: 200px; height: 200px; border-radius: 10rem; border: 5px #f8f1ed solid; margin: 0 auto;" class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover" data-src="<?php the_sub_field('foto_fundador') ?>" data-srcset="<?php the_sub_field('foto_fundador') ?>" uk-img></div>
                                </div>
                                <div class="uk-card-body">
                                    <h5 class="uk-margin-small-bottom"><?php the_sub_field('nome_fundador') ?></h5>
                                    <p style="font-size: 1rem; margin-top: 0px;">
                                        <span class="uk-text-muted"><b><?php the_sub_field('cargo_fundador') ?></b></span class="uk-text-muted"> <br />
                                        <span style="font-size: .8rem;"><?php the_sub_field('crc_fundador') ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;

                else : ?>

                    <p>Cadastre os mebros da equipe.</p>

                <?php endif; ?>
            </div>
            <!-- end fundadores -->


            <!-- membros da equipe -->
            <div class="uk-text-center uk-margin-large">
                <h2 class="uk-margin-large"><?php the_field('titulo_secao_contadores') ?></h2>
            </div>
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-5@l uk-grid-column-large uk-grid-row-large uk-flex uk-flex-center uk-grid-match" uk-grid>

                <?php

                // Check rows existexists.
                if (have_rows('card_contadores')) :

                    // Loop through rows.
                    while (have_rows('card_contadores')) : the_row();

                        // Load sub field value.
                        $foto_contador = get_sub_field('foto_contador');
                        $nome_contador = get_sub_field('nome_contador');
                        $cargo_contador = get_sub_field('cargo_contador');
                        $crc_contador = get_sub_field('crc_contador');
                ?>
                        <div>
                            <div class="uk-card uk-text-center">
                                <div class="uk-card-media-top">
                                    <div style="width: 200px; height: 200px; border-radius: 10rem; border: 5px #f8f1ed solid; margin: 0 auto;" class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover" data-src="<?php the_sub_field('foto_contador') ?>" data-srcset="<?php the_sub_field('foto_contador') ?>" uk-img></div>
                                </div>
                                <div class="uk-card-body">
                                    <h5 class="uk-margin-small-bottom"><?php the_sub_field('nome_contador') ?></h5>
                                    <p style="font-size: 1rem; margin-top: 0px;">
                                        <span class="uk-text-muted"><b><?php the_sub_field('cargo_contador') ?></b></span class="uk-text-muted"> <br />
                                        <span style="font-size: .8rem;"><?php the_sub_field('crc_contador') ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;

                else : ?>

                    <p>Cadastre os mebros da equipe.</p>

                <?php endif; ?>
            </div>
        </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>