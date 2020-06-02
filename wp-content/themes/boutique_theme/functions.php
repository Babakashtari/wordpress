<?php
function style_and_scripts_loader(){
    // parameters after a location: dependencies, version, whether script loads in the header or top of the body closing tag 
    wp_enqueue_script('javascript_loader', get_theme_file_uri("/js/scripts-bundled.js"), null, microtime(), true);
    // font downloaded from google:
    wp_enqueue_style('external_font_from_google', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // font awesome:
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // 
    wp_enqueue_style('header_styles', get_stylesheet_uri(), null, microtime());
}
add_action('wp_enqueue_scripts', 'style_and_scripts_loader');

function title_loader(){
    register_nav_menu('header_menu', 'Header Menu Location');
    register_nav_menu('footer_menu1', 'footer Menu Location1');
    register_nav_menu('footer_menu2', 'footer Menu Location2');


    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'title_loader');