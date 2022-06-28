<?php
add_action( 'init', 'websites_register_post_type' );

function websites_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Websites' ,
        'name_admin_bar'     =>  'Website' ,
        'add_new'            =>  'Add Website' ,
        'add_new_item'       =>  'Add new Website' ,
        'new_item'           =>  'New Website' ,
        'edit_item'          =>  'Edit Website' ,
        'view_item'          =>  'View Website' ,
        'update_item'        =>  'View Website' ,
        'all_items'          =>  'All Websites' ,
        'search_items'       =>  'Search Websites' ,
        'parent_item_colon'  =>  'Parent Website' ,
        'not_found'          =>  'No Websites found' ,
        'not_found_in_trash' =>  'No Websites found in Trash' ,
        'name'               =>  'Websites' ,
        'singular_name'      =>  'Website' ,

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' =>  true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            //'excerpt',
            'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-admin-site-alt3',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('website', $args);

}

add_action('init', 'websites_register_post_type');

add_filter( 'rwmb_meta_boxes', 'websites_register_meta_boxes' );

function websites_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'   => 'Info del Website de contacto' ,
        'post_types' => 'website',
        
        'fields'  => [
            [
                'type'          =>   'text',
                'name'          =>   'Enlace del sitio web',
                'id'            =>   'link',
                'placeholder'   =>   'www.example.com',
            ],
            [
                'type'          =>   'number',
                'name'          =>   'Año',
                'id'            =>   'year',
                'min'           =>   1,
                'max'           =>   3000,
                'placeholder'   =>   'Año de finalización',
            ],
            [
                'type' =>   'textarea',
                'name' =>   'Concepto',
                'id'   =>   'concept',
            ],
            [
                'type' =>   'textarea',
                'name' =>   'Desarrollo',
                'id'   =>   'development',
            ],
            [
                'id'               => 'images',
                'name'             => 'Imagenes',
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 4,
                'max_status'       => false,
                'image_size'       => 'thumbnail',
            ],
        ],
    ];

    return $meta_boxes;
}