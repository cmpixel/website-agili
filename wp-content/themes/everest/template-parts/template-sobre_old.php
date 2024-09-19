<?php

/**
 * Template Name: Ever Template Sobre Nós - Old
 *
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
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class=""><?php the_field('titulo_sobre_nos_secao_1') ?></h2>
                    <P><?php the_field('descricao_sobre_nos_secao_1') ?></P>
                </div>
                <div class="uk-width-1-2@m">
                    <img src="<?php the_field('imagem_sobre_nos_secao_1') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="uk-section uk-text-left" dir="rtl">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class=""><?php the_field('titulo_sobre_nos_secao_2') ?></h2>
                    <P><?php the_field('descricao_sobre_nos_secao_2') ?></P>
                </div>
                <div class="uk-width-1-2@m">
                    <img src="<?php the_field('imagem_sobre_nos_secao_2') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="uk-section uk-section-muted">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class=""><?php the_field('titulo_sobre_nos_secao_3') ?></h2>
                    <P><?php the_field('descricao_sobre_nos_secao_3') ?></P>
                </div>
                <div class="uk-width-1-2@m">
                    <img src="<?php the_field('imagem_sobre_nos_secao_3') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="uk-section uk-section-large">
        <div class="uk-container uk-container-large">
            <div class="uk-flex uk-flex-center">
                <div class="uk-width-1@s uk-width-2-3@m uk-text-center">
                    <h2>Assessoria e Consultoria</h2>
                    <p>A assessoria e consultoria é um serviço dedicado a solucionar as demandas e dúvidas do cliente, a partir disso é elaborado um plano de ação. A atuação da assessoria e consultoria é composta por alguns pilares conforme descrito abaixo.</p>
                </div>
            </div>
            <div class="uk-flex uk-flex-center uk-margin-medium" uk-grid>
                <div class="uk-width-1@s uk-width-1-3@m uk-width-1-5@l uk-padding uk-text-center">
                    <span class="uk-icon uk-icon-image" style="background-image: url(<?php the_field('sobre_nos_secao_imagem_1') ?>); height:140px; width:130px;"></span>
                    <h3><?php the_field('sobre_nos_secao_titulo_1') ?></h3>
                    <p><?php the_field('sobre_nos_secao_descricao_1') ?></p>
                </div>
                <div class="uk-width-1@s uk-width-1-3@m uk-width-1-5@l uk-padding uk-text-center">
                    <span class="uk-icon uk-icon-image" style="background-image: url(<?php the_field('sobre_nos_secao_imagem_2') ?>); height:140px; width:130px;"></span>
                    <H3><?php the_field('sobre_nos_secao_titulo_2') ?></H3>
                    <p><?php the_field('sobre_nos_secao_descricao_2') ?></p>
                </div>
                <div class="uk-width-1@s uk-width-1-3@m uk-width-1-5@l uk-padding uk-text-center">
                    <span class="uk-icon uk-icon-image" style="background-image: url(<?php the_field('sobre_nos_secao_imagem_3') ?>); height:140px; width:130px;"></span>
                    <h3><?php the_field('sobre_nos_secao_titulo_3') ?></h3>
                    <p><?php the_field('sobre_nos_secao_descricao_3') ?></p>
                </div>
                <div class="uk-width-1@s uk-width-1-3@m uk-width-1-5@l uk-padding uk-text-center">
                    <span class="uk-icon uk-icon-image" style="background-image: url(<?php the_field('sobre_nos_secao_imagem_4') ?>); height:140px; width:130px;"></span>
                    <h3><?php the_field('sobre_nos_secao_titulo_4') ?></h3>
                    <p><?php the_field('sobre_nos_secao_descricao_4') ?></p>
                </div>
                <div class="uk-width-1@s uk-width-1-3@m uk-width-1-5@l uk-padding uk-text-center">
                    <span class="uk-icon uk-icon-image" style="background-image: url(<?php the_field('sobre_nos_secao_imagem_5') ?>); height:140px; width:130px;"></span>
                    <h3><?php the_field('sobre_nos_secao_titulo_5') ?></h3>
                    <p><?php the_field('sobre_nos_secao_descricao_5') ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-muted">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class=""><?php the_field('titulo_sobre_nos_secao_5') ?></h2>
                    <P><?php the_field('descricao_sobre_nos_secao_5') ?></P>
                </div>
                <div class="uk-width-1-2@m">
                    <img src="<?php the_field('imagem_sobre_nos_secao_5') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>