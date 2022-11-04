<?php
add_action( 'init', 'design_register_post_type' );

function design_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Diseño' ,
        'name_admin_bar'     =>  'Diseño' ,
        'add_new'            =>  'Agregar Proyecto de Diseño' ,
        'add_new_item'       =>  'Agregar Proyecto de Diseño' ,
        'new_item'           =>  'Nuevo Proyecto de Diseño' ,
        'edit_item'          =>  'Editar Proyecto de Diseño' ,
        'view_item'          =>  'Ver Proyecto de Diseño' ,
        'update_item'        =>  'Actualizar Proyecto de Diseño' ,
        'all_items'          =>  'Todos los Proyectos de Diseño' ,
        'search_items'       =>  'Buscar Proyectos de Diseño' ,
        'parent_item_colon'  =>  'Padre Diseño' ,
        'not_found'          =>  'No se encontraron Proyectos de Diseño' ,
        'not_found_in_trash' =>  'No hay Proyectos de Diseño en la papelera' ,
        'name'               =>  'Diseño' ,
        'singular_name'      =>  'Diseño Gráfico' ,

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
        'menu_icon' => 'dashicons-admin-appearance',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('design', $args);

}

add_action('init', 'design_register_post_type');

add_filter( 'rwmb_meta_boxes', 'design_register_meta_boxes' );

function design_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'   => 'Info del proyecto de Foto' ,
        'post_types' => 'design',
        
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
                'id'               => 'images',
                'name'             => 'Imagenes',
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 11,
                'max_status'       => true,
                'image_size'       => 'thumbnail',
            ],
        ],
    ];

    return $meta_boxes;
}