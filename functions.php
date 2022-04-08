<?php

/* TITULOS */
function punto401_theme_support(){

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','punto401_theme_support');

/* LOGO */
function punto401_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
add_action('after_setup_theme','punto401_custom_logo_setup');

/* MENU */
function punto401_theme_setup(){

    add_theme_support('menus');

    register_nav_menu('primary','Menu del Header');
    register_nav_menu('secundary','Menu del Footer');
}
add_action('init', 'punto401_theme_setup');

/* CSS Y JS */

function punto401_script_enqueue() {
    wp_enqueue_style( 'bootstrap-cdn-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    wp_enqueue_style('lightslider', get_template_directory_uri() . '/assets/css/lightslider.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/p401-style.css', array(), '1.0.0', 'all');


    wp_enqueue_script( 'jqeury', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js' );
    wp_enqueue_script( 'jsdelivr', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' );
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js' );
    wp_enqueue_script( 'bootstrap-cdn-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' );
    wp_enqueue_script( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js' );
    wp_enqueue_script('lightslider', get_template_directory_uri() . '/assets/js/lightslider.js', array(), '1.0.0', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/p401-scripts.js', array(), '1.0.0', true);

}


    add_action('wp_enqueue_scripts', 'punto401_script_enqueue');

    function punto401_widget_areas(){

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar Widget Area'
            )
        );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Footer Area',
                'id' => 'foter-1',
                'description' => 'Footer Widget Area'
            )
        );
    }
    add_action ('widgets_init', 'punto401_widget_areas');


    
    require get_template_directory() . '/inc/messages-cpt.php';


    function check_post_type_and_remove_media_buttons() {
        global $current_screen;
        // Replace following array items with your own custom post types
        $post_types = array('messages');
        if (in_array($current_screen->post_type,$post_types)) {
        remove_action('media_buttons', 'media_buttons');
        }
    }
    
    add_action('admin_head','check_post_type_and_remove_media_buttons');


?>