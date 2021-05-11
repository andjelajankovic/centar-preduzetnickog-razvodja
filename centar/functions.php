<?php 

function center_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'centar' )
) );
}
add_action('after_setup_theme', 'center_theme_support');

function center_theme_styles(){
    wp_enqueue_style('style_css', get_template_directory_uri(). '/style.css');
}
add_action('wp_enqueue_scripts', 'center_theme_styles');


function widgeti(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init','widgeti');