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


function pt_add_async_defer_attributes( $tag, $handle ) {
	// Busco el valor "async"
	if( strpos( $handle, "async" ) ):
		$tag = str_replace(' src', ' async src', $tag);
	endif;
	// Busco el valor "defer"
	if( strpos( $handle, "defer" ) ):
		$tag = str_replace(' src', ' defer src', $tag);
	endif;

    // Busco el valor "preload"
	if( strpos( $handle, "preload" ) ):
		$tag = str_replace(' rel="stylesheet"', ' rel="preload" as="style"', $tag);
	endif;

	return $tag;
}
add_filter('script_loader_tag', 'pt_add_async_defer_attributes', 10, 2);


/* CSS Y JS */

function punto401_script_enqueue() {

    wp_enqueue_style( 'app-css', get_template_directory_uri() .'/assets/css/app.css' );

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
    require get_template_directory() . '/inc/members-cpt.php';
    require get_template_directory() . '/inc/websites-cpt.php';
    //require get_template_directory() . '/inc/photos-cpt.php';
    require get_template_directory() . '/inc/foto-inmob-cpt.php';
    require get_template_directory() . '/inc/design-cpt.php';
    require get_template_directory() . '/inc/video-cpt.php';
    require get_template_directory() . '/inc/socialmedia-cpt.php';


    function check_post_type_and_remove_media_buttons() {
        global $current_screen;
        // Replace following array items with your own custom post types
        $post_types = array('messages, website', 'photos', 'design', 'video', 'social');
        if (in_array($current_screen->post_type,$post_types)) {
        remove_action('media_buttons', 'media_buttons');
        }
    }

    function p401_get_photo_category($postID, $taxonomy){
        
        $terms_list = array_reverse(wp_get_post_terms( $postID, $taxonomy ) );

        if ( ! empty( $terms_list ) && ! is_wp_error( $terms_list ) ) {
            foreach ( $terms_list as $term ) {
                return $term->name;
            }
        }
    }
    
    add_action('admin_head','check_post_type_and_remove_media_buttons');


?>