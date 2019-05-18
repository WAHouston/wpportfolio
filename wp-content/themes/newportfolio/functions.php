<?php

function portfolio_files() {
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Oswald');
    wp_enqueue_style('portfolio_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'portfolio_files');

function portfolio_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'portfolio_features');