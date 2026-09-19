<?php

// Henter CSS og JavaScript ind på hjemmesiden
function food4thought_files() {

    // Henter vores CSS stylesheet
    wp_enqueue_style(
        'food4thought_main_styles',
        get_theme_file_uri('/style.css')
    );

    // Henter vores JavaScript fil
    wp_enqueue_script(
        'food4thought_js',
        get_theme_file_uri('/app.js'),
        array(),
        null,
        true
    );
}

// Kører funktionen når WordPress indlæser CSS og JavaScript
add_action('wp_enqueue_scripts', 'food4thought_files');


// Tilføjer forskellige funktioner til vores tema
function f4t_features() {

    // Gør det muligt for WordPress at håndtere sidens titel
    add_theme_support('title-tag');

    // Gør det muligt at bruge featured images
    add_theme_support('post-thumbnails');

}

// Kører funktionen når temaet bliver indlæst
add_action('after_setup_theme', 'f4t_features');

