<?php

function csScripts(){
    
    
    if(strstr($_SERVER['SERVER_NAME'], 'constructionsite.local')){
        wp_enqueue_script('cs__main-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    }else{
        wp_enqueue_script('cs-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
        wp_enqueue_script('cs__main-js', get_theme_file_uri('/bundled-assets/scripts.8b4dd560981b1be8e901.js'), NULL, '1.0', true);
        wp_enqueue_style('cs__main-styles', get_theme_file_uri('/bundled-assets/styles.8b4dd560981b1be8e901.css'));
    }
}

add_action('wp_enqueue_scripts', 'csScripts');