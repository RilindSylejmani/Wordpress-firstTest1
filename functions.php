<?php

function enqueue_custom_styles() {
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/dist/index.css');
    wp_enqueue_style('custom-styles-admin', get_template_directory_uri() . '/dist/index.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
add_action('admin_enqueue_scripts', 'enqueue_custom_styles'); 



function register_blocks() {
    if( ! function_exists('acf_register_block') )
            return;
    acf_register_block( array(
            'name' => 'sign-up-bubble', 
            'title' => __( 'sign-up-bubble', 'dayshiftdigital' ), 
            'render_template' => 'partials/sign-up-bubble.php', 
            'category' => 'widgets', 
            'icon' => 'marker', 
            'mode' => 'edit', 
            'keywords' => array( 'newsletter', 'form', 'sun' ), 
            
    ));
}
add_action('acf/init', 'register_blocks' );