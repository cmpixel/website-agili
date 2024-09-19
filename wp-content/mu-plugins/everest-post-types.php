<?php
// add services type posts
function everest_post_types() {

        $args = array(
        
            'show_in_rest'  => 'true',
            'menu_position' => 5, // Defina a posição desejada no menu
            'menu_icon' => 'dashicons-coffee', // define icone do menu
          //'supports'      => array('title', 'editor', 'excerpt', 'custom-fields'),
            'supports'      => array('title', 'editor', 'excerpt','thumbnail', 'page-attributes'),
            'rewrite'       => array('slug','events'),
            'has_archive'   => true,
            'public'        => true,
            'labels'        => array(
                            'name'          => 'Serviços',
                            'singular_name' => 'Serviço',
                            'add_new_item'  => 'Adicionar Novo Serviço',
                            'edit_item'     => 'Editar Serviço',
                            'all_items'     => 'Todos os Serviços',
        ),
        'menu_icon' => 'dashicons-coffee',
        'hierarchical' => false,


        );
    
        register_post_type( 'services', $args );

}

add_action('init', 'everest_post_types');