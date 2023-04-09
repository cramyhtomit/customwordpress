<?php

function university_files(){
    wp_enqueue_style("university_googlefonts", 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,400;1,700&display=swap');
    wp_enqueue_style("university_fontawesome", 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_style("university_main_styles", get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style("university_extra_styles", get_theme_file_uri('/build/index.css'));
    wp_enqueue_style("university_styles.css", get_stylesheet_uri('styles.css'));


    
}

add_action( "wp_enqueue_scripts", "university_files");

?>  