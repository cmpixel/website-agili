<?php

require_once get_template_directory() . '/assets/inc/customizer.php';

function everest_register_styles()  {

    $version = wp_get_theme()-> get('Version');
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.16.5/dist/css/uikit.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'everest', get_template_directory_uri() . '/assets/css/uikit-ever.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/mobile.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/style.css', array(), $version, 'all' );
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700&display=swap', array(), '1.0', 'all' );


}

add_action('wp_enqueue_scripts' , 'everest_register_styles');

function everest_register_scripts()  {
    
    wp_enqueue_script( 'uikit-js', 'https://cdn.jsdelivr.net/npm/uikit@3.16.5/dist/js/uikit.min.js', array( 'jquery' ), '3.0.0.30', true );
    wp_enqueue_script( 'uikit-icons', 'https://cdn.jsdelivr.net/npm/uikit@3.16.5/dist/js/uikit-icons.min.js', array( 'jquery' ), '3.0.0.30', true );
    wp_enqueue_script('uikit', get_template_directory_uri() . '/assets/js/uikit-ever.js', array(), '1.0-alpha1', true );
    wp_enqueue_script('everest-js', get_template_directory_uri() . '/assets/js/everest.js', array(), '1.0-alpha1', true );

}

add_action('wp_enqueue_scripts' , 'everest_register_scripts');

function everest_theme_suport(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('ever-blog-img', 960, 640, array('center', 'center'));
    if (! isset($content_width)) {
        $content_width = 600;
    };

    add_theme_support('custom-logo' , array(

		'height'               => 75,
		'width'                => 180,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),

    )

    );
}
add_action('after_setup_theme' , 'everest_theme_suport');

function everest_menus(){

    $locations = array(
        'primary_menu'      => 'Menu Principal',
        'footer_menu'       => 'Rodapé',
        'offcanvas_menu'    => 'Aba Lateral',
        'mobile_menu'       => 'Menu Celular',
        
    );

    register_nav_menus($locations);
}

add_action( 'after_setup_theme', 'everest_menus' );

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

require_once( get_template_directory() . '/assets/inc/class-wp-uikit-navwalker.php' );

function custom_login_logo() {
    $logo_url = 'https://contabilidadeagili.com.br/wp-content/uploads/2023/03/agili-logo.png';
    echo '<style type="text/css">
        #login h1 a {
            background-image: url(' . $logo_url . ');
            background-size: contain;
            width: 300px; // Largura personalizada da logo
            height: 99px; // Altura personalizada da logo
        }
    </style>';
}
add_action('login_enqueue_scripts', 'custom_login_logo');

function custom_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'custom_login_logo_url');
function custom_login_logo_url_title() {
    return 'Acessar Painel';
}
add_filter('login_headertitle', 'custom_login_logo_url_title');
function custom_login_footer() {
    echo '<p style="text-align:center;">&copy; ' . date('Y') . ' Contabilidade AGILÍ. Todos os direitos reservados.<br/>Desenvolvido por <a href="http://everestdesign.com.br" title="Everest Design" target="_blank">Everest Design</a></p>';
}
add_action('login_footer', 'custom_login_footer');
function remove_login_back_to_link() {
    return '';
}
add_filter('login_site_html_link', 'remove_login_back_to_link');
function remove_back_to_site_link_css() {
    ?>
    <style type="text/css">
        .login #backtoblog {
            display: none;
        }
    </style>
    <?php
}
add_action('login_head', 'remove_back_to_site_link_css');
function remove_language_selector_css() {
    ?>
    <style type="text/css">
        .login #language-switcher {
            display: none;
        }
    </style>
    <?php
}
add_action('login_head', 'remove_language_selector_css');
function custom_lost_password_text($translated_text, $text, $domain) {
    if ($text === 'Lost your password?') {
        $translated_text = 'Esqueci minha senha!';
    }
    return $translated_text;
}
add_filter('gettext', 'custom_lost_password_text', 20, 3);
function custom_login_css() {
    ?>
    <style type="text/css">
        body.login {
            color: #fff;
            background: #141E30;
            background: -webkit-linear-gradient(to right, #243B55, #141E30);
            background: linear-gradient(to right, #243B55, #141E30);

        }
        body a {
            color: #00cccc;
            text-decoration: none;
            transition:.3s;
        }
        body a:hover {
            color: #00ffff;
            text-decoration: none;
            transition:.3s;
        }
        .login form {
            background-color: transparent;
            border: 1px solid #fff;
        }
        .login form .input, .login form input[type=checkbox], .login input[type=text] {
            color: #fff;
            background: transparent;
        }
        .wp-core-ui .button, .wp-core-ui .button-secondary {
            color: #fff;
            border-color: #fff;
            background: #f6f7f7;
            vertical-align: top;
        }
        .wp-core-ui .button, .wp-core-ui .button-secondary {
            color: #fff;
            border-color: #fff;
            background: transparent;
            vertical-align: top;
        }
        .login #login_error, .login .message {
            border-left: 4px solid #00a0d2;
        }
        .login #nav a {
            color: #cccccc;
            text-decoration: none;
            transition:.3s;
        }
        .login #nav a:hover {
            color: #fff;
            text-decoration: none;
            transition:.3s;
        }
        }
    </style>
    <?php
}
add_action('login_head', 'custom_login_css');