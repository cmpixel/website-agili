<!doctype html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G5ZT9L06LT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '<?php the_field('google_tag_manager') ?>');
    </script>
    <!-- end Google tag (gtag.js) -->

</head>

<body <?php body_class(); ?>>



    <section class="uk-position-top">

        <div uk-sticky="start: 0; animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light">
            <nav class="uk-navbar-container">

                <div class="uk-container uk-container-large">

                    <div class="uk-navbar" uk-navbar>

                        <div class="uk-navbar-left">
                            <div class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home">
                                <?php if (has_custom_logo()) : ?>
                                    <?php the_custom_logo(); ?>
                                <?php else : ?>
                                    <a href="<?php echo home_url('/') ?>">
                                        <p class="site-title"><?php bloginfo('title') ?></p>
                                        <span><?php bloginfo('description') ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>

                        </div>
                        <div class="uk-navbar-right">
                            <div>
                                <?php $ever_top_menu = array(
                                    'menu'              => 'menu_principal',
                                    'theme_location'    => 'primary_menu',
                                    'depth'             => 2,
                                    'container'         => '',
                                    'container_id'      => 'ever_conyainer_id',
                                    'menu_class'        => 'uk-navbar-nav uk-visible@m',
                                    'items_wrap'        => '<ul id="" class="uk-navbar-nav uk-visible@m">%3$s</ul>',
                                    //'link_after'        => '<span uk-icon="chevron-down"> </span>',
                                    'fallback_cb'       => 'ever_top_menu_drop::fallback',
                                    'walker'            => new ever_top_menu_drop(''),
                                );
                                wp_nav_menu($ever_top_menu);
                                ?>
                            </div>

                            <div>
                                <!-- show only on medium screens & above -->
                                <ul class="uk-navbar-nav uk-visible@m">

                                    <div class="uk-navbar-item" role="menuitem">
                                        <a class="uk-icon" href="https://www.instagram.com/contabilidade_agili/" title="Seguir no Instagram" target="_blank">
                                            <span uk-icon="instagram"></span>
                                        </a>
                                    </div>
                                    <div class="uk-navbar-item" role="menuitem">
                                        <a class="uk-icon" href="https://www.facebook.com/contabilidadeagili" title="Seguir no Facebook" target="_blank">
                                            <span uk-icon="facebook"></span>
                                        </a>
                                    </div>
                                    <!-- <div class="uk-navbar-item" role="menuitem">
                                        <a class="uk-button uk-button-primary uk-icon" href="#">Get Started
                                            <span uk-icon="arrow-right"></span>
                                        </a>
                                    </div> -->

                                </ul>
                            </div>
                            <!--off-canvas btn show only on MOBILE -->
                            <!-- toogle icon visible only on phones -->
                            <a class="uk-navbar-toggle uk-hidden@m" href="#" uk-toggle="target: #offcanvas-nav-primary">
                                <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                            </a>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <?php do_action('uikit_top_menu'); ?>

    </section>