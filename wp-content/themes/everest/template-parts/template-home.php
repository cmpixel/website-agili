<?php

/**
 * Template Name: Ever Página Inicial
 * 
 * The template for the Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Everest Design Theme
 */
get_header();
?>

<header id="section_header hero-header">
    <div class="uk-section-secondary">
        <!-- change her the bg image + The overlay color/opacity/direction (under style="") -->
        <div style="background-image: url('<?php the_field('home_banner_background') ?>')" id="change-her-the-bg-image" class="uk-position-relative uk-background-norepeat uk-background-cover uk-background-center-center uk-flex uk-flex-middle" uk-parallax="bgx: 0,-100" uk-height-viewport="offset-top: true">

            <div id="overlay" class="uk-overlay uk-position-cover"></div>

            <div class="uk-width-1-1 uk-position-z-index">
                <!-- hero container -->
                <div class="uk-container uk-container-large">
                    <!-- Heading: Add margin top for h1 - like this the text looks more center v beacuse the navbar is transpernt -->
                    <img src="<?php the_field('image_banner_home') ?>" alt="Agili Contabilidade" width="400px">
                    <h2 class="uk-margin-small uk-margin-medium-top uk-width-large@m uk-text-left@m uk-text-center uk-h6 uk-heading-line" data-uk-parallax="opacity: 1,0;viewport: 0.95;media: @s">
                        <!-- extra span for uk-heading-line -->
                        <span><?php the_field('descricao_banner_home') ?></span>
                    </h2>
                    <h1 class="uk-margin-small uk-text-left@m uk-text-center uk-heading-small uk-h2" data-uk-parallax="y: 0,60;opacity: 1,0; easing: 0.8;viewport: 0.95;media: @s">
                        <?php the_field('titulo_banner_home') ?>
                    </h1>
                    <!-- Arrow: With link to #main section + uk-scroll="" for smooth scrolling + offset (Beacuse the nav is sticky)-->
                    <div class="uk-margin uk-text-left@m uk-text-center" data-uk-parallax="y: 0,450;opacity: 1,0;easing: 0.3;target: .uk-section;">
                        <a uk-icon="icon: arrow-down;ratio: 1.5" class="uk-icon-link uk-icon" href="#sobre_nos" data-uk-scroll="offset: 100"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- content -->
<main id="sobre_nos" class="section_main">

    <section class="uk-section">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class=""><?php the_field('titulo_home_secao_1') ?></h2>
                    <P><?php the_field('descricao_secao_1') ?></P>
                </div>
                <div class="uk-width-1-2@m">
                    <img src="<?php the_field('imagem_home-secao_1') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="uk-section uk-text-left">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <img class="uk-align-center" src="<?php the_field('imagem_home-secao_2') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
                <div class="uk-width-1-2@m">
                    <h2><?php the_field('titulo_home_secao_2') ?></h2>
                    <?php the_field('descricao_secao_2') ?></>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="servicos" class="uk-section uk-section-secondary">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class=""><?php the_field('titulo_home_secao_3') ?></h2>
                    <P><?php the_field('descricao_secao_3') ?></P>
                </div>

                <div class="uk-width-1-2@m">
                    <img class=" uk-align-center" src="<?php the_field('imagem_home-secao_3') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="uk-section uk-text-left" dir="rtl">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class=""><?php the_field('titulo_home_secao_4') ?></h2>
                    <P><?php the_field('descricao_secao_4') ?></P>
                </div>

                <div class="uk-width-1-2@m">
                    <img class="uk-align-center" src="<?php the_field('imagem_home-secao_4') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </section> -->

    <section class="uk-section uk-section-muted">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class=""><?php the_field('titulo_home_secao_5') ?></h2>
                    <P><?php the_field('descricao_secao_5') ?></P>
                </div>

                <div class="uk-width-1-2@m">
                    <img class="uk-align-center" src="<?php the_field('imagem_home-secao_5') ?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-secondary">
        <div class="uk-container uk-container-large">
            <h2><?php the_field('titulo_home_secao_6') ?></h2>
            <div><?php the_field('descricao_secao_6') ?></div>
        </div>
    </section>

    <section class="uk-section uk-section-muted">
        <div class="uk-container uk-container-large">
            <div class="uk-grid-column-large uk-grid-row-large uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-3-5@m">
                    <h2 class=""><?php the_field('titulo_home_secao_7') ?></h2>
                    <P><?php the_field('descricao_secao_7') ?></P>
                </div>

                <div class="uk-width-2-5@m">
                    <img class="uk-align-center" src="<?php the_field('imagem_home-secao_7') ?>" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="uk-section">
        <div class="uk-container uk-container-large">
            <button class="uk-button uk-margin uk-button-default uk-margin-small-right uk-align-right" type="button" uk-toggle="target: #offcanvas-nav-primary">Solicite um Orçamento</button>
        </div>
    </section> -->

    <!-- blog slider -->
    <?php // get_template_part('blog-slider'); 
    ?>
    <!-- end blog slider -->

    <!-- to top -->
    <!-- <section class="uk-section uk-section-xsmall">
        <div class="uk-container uk-container-large">
            <a uk-icon="icon: arrow-up;ratio: 1.5" class="uk-icon-link uk-icon uk-align-right uk-button uk-button-text" href="#top" uk-scroll=""></a>
        </div>
    </section> -->

</main>
<!-- end uikit -->
<?php get_footer(); ?>