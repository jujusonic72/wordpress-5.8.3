<?php
add_action('customize_register', function (WP_Customize_Manager $manager) {
    $manager->add_section('section_modifier_background', [
        'title' => 'Modification de la couleur des backgrounds',
    ]);
    $manager->add_setting('couleur_background_header', [
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, 'couleur_background_header', [
        'section' => 'section_modifier_background',
        'label' => 'Couleur background du header',
    ]));
    $manager->add_setting('couleur_background_main', [
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, 'couleur_background_main', [
        'section' => 'section_modifier_background',
        'label' => 'Couleur background du main',
    ]));
    $manager->add_setting('couleur_background_footer', [
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, 'couleur_background_footer', [
        'section' => 'section_modifier_background',
        //'setting' => 'couleur_background_body',
        'label' => 'Couleur background du pied de page',
    ]));
});