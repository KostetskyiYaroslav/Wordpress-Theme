<?php

//allow thumbnails on site
function wp_thumbnails_theme_setup(){
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_thumbnails_theme_setup' );

//footer, left and right widget area
function add_widgets_areas() {
    register_sidebar( array(
        'name' => 'Left widget area',
        'id' => 'left_widget_area_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Right widget area',
        'id' => 'right_widget_area_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer widget area',
        'id' => 'footer_widget_area_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'add_widgets_areas' );



