<?php

function load_styleSheets()
{
    wp_enqueue_style('bootstrap','https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css');
    wp_enqueue_style( 'load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
    wp_register_style('style-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('style-css'); 
}
add_action('wp_enqueue_scripts', 'load_styleSheets');

function load_js()
{
    wp_enqueue_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js', array(), 1, true);
    wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), 1, true);
    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js', array(), 1, true);
    wp_enqueue_script('ScrollTrigger-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js', array(), 1, true);
    wp_enqueue_script('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js', array(), 1, true);
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), 1, true);
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'arsha'),
    )
);

function theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Widget Area' ),
        'id' => 'footer-sidebar',
        'description' => __( 'Appears in the footer' ),
        'before_widget' => '<aside id="%1$s" class="w-100 widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

function theme_support_options_logo()
{
    $defaults = array(
        'height'      => 400,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'theme_support_options_logo');


function theme_setup_site_title()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup_site_title');

