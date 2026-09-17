<?php

function food4thought_files() {
    wp_enqueue_style(
        'food4thought_main_styles',
        get_theme_file_uri('/style.css')
    );
}

add_action('wp_enqueue_scripts', 'food4thought_files');


function f4t_features() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'f4t_features');