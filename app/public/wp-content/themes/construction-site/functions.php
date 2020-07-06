<?php

function csScripts(){
    wp_enqueue_script('cs__main-js', get_theme_file_uri('/assets/js/App.js'), NULL, '1.0', true);
    wp_enqueue_style('cs__style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'csScripts');