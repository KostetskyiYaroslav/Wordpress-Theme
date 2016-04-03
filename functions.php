<div class="cyan-text">
    </div>
<?php

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

function wp_kama_theme_setup(){
    // Поддержка миниатюр
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_kama_theme_setup' );

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



