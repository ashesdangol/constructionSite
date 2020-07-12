<?php 

    function csScripts(){
        wp_enqueue_style('g__font','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Raleway:wght@300;400;900&display=swap');
        wp_enqueue_script('font-awesome-js', 'https://kit.fontawesome.com/c1c0a260fa.js', NULL, '1.0', true);
    
        if(strstr($_SERVER['SERVER_NAME'], 'constructionsite.locall')){
            wp_enqueue_script('cs__main-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
        }else{
            wp_enqueue_script('cs-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
            wp_enqueue_script('cs__main-js', get_theme_file_uri('/bundled-assets/scripts.5490b7bae3dfd96d2821.js'), NULL, '1.0', true);
            wp_enqueue_style('cs__main-styles', get_theme_file_uri('/bundled-assets/styles.5490b7bae3dfd96d2821.css'));
        }
    }
    
    add_action('wp_enqueue_scripts', 'csScripts');
    
    require get_theme_file_path('/lib/themesupport.php');
    require get_theme_file_path('/lib/cmb.php');
  
?>