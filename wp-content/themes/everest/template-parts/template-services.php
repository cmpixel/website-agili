<?php

/**
 * Template Name: Ever Template Services
 * The template for the Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Everest Design Theme
 */

// load header
get_header();
?>
<?php

/**
 * Template Name: Ever UIkit Template
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
        <div style="background-image: url('<?php the_field('servicos_banner_background') ?>')" id="change-her-the-bg-image" class="uk-position-relative uk-background-norepeat uk-background-cover uk-background-center-center uk-flex uk-flex-middle" uk-parallax="bgx: 0,-100" uk-height-viewport="offset-top: true">

            <div id="overlay" class="uk-overlay uk-position-cover"></div>

            <div class="uk-width-1-1 uk-position-z-index">
                <!-- hero container -->
                <div class="uk-container uk-container-large">
                    <!-- Heading: Add margin top for h1 - like this the text looks more center v beacuse the navbar is transpernt -->
                    <img src="<?php the_field('image_banner_servicos')?>" alt="Agili Contabilidade" width="400px">
                    <h2 class="uk-margin-small uk-margin-medium-top uk-width-large@m uk-text-left@m uk-text-center uk-h6 uk-heading-line" data-uk-parallax="opacity: 1,0;viewport: 0.95;media: @s">
                        <!-- extra span for uk-heading-line -->
                        <span><?php the_field('descricao_banner_servicos') ?></span>
                    </h2>
                    <h1 class="uk-margin-small uk-text-left@m uk-text-center uk-heading-small uk-h2" data-uk-parallax="y: 0,60;opacity: 1,0; easing: 0.8;viewport: 0.95;media: @s">
                    <?php the_field('titulo_banner_servicos') ?>
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

    <!-- start card services -->
    <section class="uk-section uk-section-muted">
        <div class="uk-container uk-container-large">

            <h2 class="uk-heading-bullet"><?php the_field('titulo_seção_cards_servicos') ?></h2>
            <p><?php the_field('descricao_seção_cards_servicos') ?></p>
            <hr class="uk-divider-small uk-margin-medium-bottom">

            <div class="uk-child-width-expand@s uk-text-left uk-flex-left" uk-sortable="handle: .ever_draggable" uk-grid="masonry: true">
                <!-- start loop services -->
                <?php

                $EverestServices = new WP_Query (array(
                    'posts_per_page'    => '',
                    'post_type'         => 'services',
                    'order' => 'ASC',
                    'orderby' => 'menu_order'
                ));

                while ($EverestServices->have_posts()) {
                    $EverestServices->the_post(); ?>
                
                    <div class="uk-width-1@s uk-width-4-5@l">
                        <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                            <ul uk-accordion="multiple:false; duration:200;">
                                <li class="service_title">
                                    <a class="uk-accordion-title uk-text-lead" href="#">
                                        <?php the_title(); ?>
                                    </a>
                                    <div class="uk-accordion-content uk-margin-small-bottom uk-margin-small-left">
                                        <?php the_content(); ?>
                                        <hr class="uk-divider-small">
                                        <a class="uk-button uk-button-danger uk-button-small" href="<?php the_field('link_botao_orcamento')?>"><?php the_field('texto_botao_orcamento')?> <span uk-icon="icon: arrow-right"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- endloop services -->

            </div>

        </div>
    </section>
    
    <!-- start CTA
    <section class="uk-section uk-section-small uk-section-secondary">
        <div class="uk-container uk-container-large">
            <div class="uk-child-width-expand@s uk-text-left uk-grid-match uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-card">
                        <h2><?php the_field('titulo_cta_servicos')?></h2>
                        <p><?php the_field('descricao_cta_servicos')?></p>
                        <a href="<?php the_field('servicos_cta_link_button')?>" class="uk-button uk-button-danger uk-button-large" target="_blank"><?php the_field('texto_cta_button_servicos')?><span uk-icon="icon: arrow-right"></span></a>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <img src="<?php the_field('servicos_cta_image')?>?fit=crop&amp;w=900&amp;h=600&amp;q=80" width="600" height="400" alt="" loading="lazy">
                </div>
            </div>
        </div>
        <div class="uk-margin-large uk-container uk-container-large">
            <hr class="uk-divider-icon">
        </div>
    </section>
     end CTA -->

</main>


<!-- <section class="uk-section">
        <div class="uk-container uk-container-large">
            <button class="uk-button uk-margin uk-button-default uk-margin-small-right uk-align-right" type="button" uk-toggle="target: #offcanvas-nav-primary">Solicite um Orçamento</button>
        </div>
    </section> -->

<!-- end uikit -->
<?php get_footer(); ?>