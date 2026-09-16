<?php

function food4thought_files() {
    wp_enqueue_style(
        'food4thought_main_styles',
        get_theme_file_uri('/style.css')
    );
}

add_action('wp_enqueue_scripts', 'food4thought_files');