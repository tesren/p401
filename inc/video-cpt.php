<?php
add_action( 'init', 'video_register_post_type' );

function video_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Video' ,
        'name_admin_bar'     =>  'Video' ,
        'add_new'            =>  'Agregar Proyecto de Video' ,
        'add_new_item'       =>  'Agregar Proyecto de Video' ,
        'new_item'           =>  'Nuevo Proyecto de Video' ,
        'edit_item'          =>  'Editar Proyecto de Video' ,
        'view_item'          =>  'Ver Proyecto de Video' ,
        'update_item'        =>  'Actualizar Proyecto de Video' ,
        'all_items'          =>  'Todos los Proyectos de Video' ,
        'search_items'       =>  'Buscar Proyectos de Video' ,
        'parent_item_colon'  =>  'Padre Video' ,
        'not_found'          =>  'No se encontraron Proyectos de Video' ,
        'not_found_in_trash' =>  'No hay Proyectos de Video en la papelera' ,
        'name'               =>  'Video' ,
        'singular_name'      =>  'Video' ,

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
            //'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-video-alt',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('video', $args);

}

add_action('init', 'video_register_post_type');

add_filter( 'rwmb_meta_boxes', 'video_register_meta_boxes' );

function video_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'   => 'Info del proyecto de Foto' ,
        'post_types' => 'video',
        
        'fields'  => [
            [
                'id'               => 'logo',
                'name'             => 'Logo de la empresa',
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 1,
                'max_status'       => true,
                'image_size'       => 'thumbnail',
                'desc'      => 'Suba el logo en formato PNG y en color blanco de preferencia'
            ],
            [
                'name'          => 'Color de fondo',
                'id'            => 'background_color',
                'type'          => 'color',
                'alpha_channel' => true,
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
                'name'             => 'Videos Horizontales',
                'id'               => 'horizontal_videos',
                'type'             => 'video',
                'max_file_uploads' => 3,
                'force_delete'     => false,
                'max_status'       => true,
                'desc'      => 'Suba solamente videos horizontales'
            ],
            [
                'name'             => 'Videos Verticales',
                'id'               => 'vertical_videos',
                'type'             => 'video',
                'max_file_uploads' => 3,
                'force_delete'     => false,
                'max_status'       => true,
                'desc'      => 'Suba solamente videos verticales como Reels'
            ],
        ],
    ];

    return $meta_boxes;
}