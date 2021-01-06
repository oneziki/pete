<?php


function onesmus_theme_support(){
// This adds Dynamic Title Tags
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'onesmus_theme_support');




// This is the primary menu
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));


function onesmus_register_styles(){
    wp_enqueue_style('onesmus-style', get_template_directory_uri() . "/style.css", array('onesmus-bootstrap'), 'all');
    wp_enqueue_style('onesmus-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('onesmus-owl-1', get_template_directory_uri() . "/assets/css/owl.carousel.min.css", array(), '1.0', 'all');
    wp_enqueue_style('onesmus-owl-2', get_template_directory_uri() . "/assets/css/owl.theme.default.min.css", array(), '1.0', 'all');
    wp_enqueue_style('onesmus-iconmoon', get_template_directory_uri() . "/assets/css/icomoon.css", array(), '1.0', 'all');
    wp_enqueue_style('onesmus-responsive', get_template_directory_uri() . "/assets/css/responsive.css", array(), '1.0', 'all');
    wp_enqueue_style('favicon', get_template_directory_uri() . "/inc/images/favicon.ico", array(), '1.0', 'all');
    wp_enqueue_style('onesmus-owl-2', "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap", array(), '1.0', 'all');
    
}

add_action('wp_enqueue_scripts', 'onesmus_register_styles');


function onesmus_register_scripts(){

    wp_enqueue_script('onesmus-lib-js', get_template_directory_uri() . "/assets/js/lib.min.js", array(), '1.0', 'all',true);
    wp_enqueue_script('onesmus-custom-js', get_template_directory_uri() . "/assets/js/custom.js", array(), '1.0', 'all',true);
    
}

add_action('wp_enqueue_scripts', 'onesmus_register_scripts');

?>

