<?php

function everest_customizer($wp_customize) {

    // Copyright Section
    $wp_customize->add_section(

        'sec_copyright', array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Section'
        )
    );

        // Field 1 - Copyright Text Box
        $wp_customize->add_setting(

            'sec_copyright', array(
                'type'              => 'theme_mod',
                'default'           => 'teste default',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        // Copyright Section
        $wp_customize->add_control(

            'sec_copyright', array(
                'label' => 'Copyright',
                'description' => 'Plase, add your copyright information here.',
                'section' => 'sec_copyright',
                'type' => 'text',
            )
        );
}
add_action( 'customize_register' , 'everest_customizer' );
