<?php
add_action( 'init', 'foto_register_post_type' );

function foto_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Fotografía Inmobiliaria' ,
        'name_admin_bar'     =>  'Fotografía Inmobiliaria' ,
        'add_new'            =>  'Agregar Proyecto de Foto' ,
        'add_new_item'       =>  'Agregar Proyecto de Foto' ,
        'new_item'           =>  'Nuevo Proyecto de Fotografía' ,
        'edit_item'          =>  'Editar Proyecto de Fotografía' ,
        'view_item'          =>  'Ver Proyecto de Fotografía' ,
        'update_item'        =>  'Actualizar Proyecto de Fotografía' ,
        'all_items'          =>  'Todos los Proyectos de Fotografías' ,
        'search_items'       =>  'Buscar Proyectos de Fotografías' ,
        'parent_item_colon'  =>  'Padre Fotografía' ,
        'not_found'          =>  'No se encontraron Proyectos de Fotografías' ,
        'not_found_in_trash' =>  'No hay Proyectos de Foto en la papelera' ,
        'name'               =>  'Fotografía' ,
        'singular_name'      =>  'Fotografía' ,

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
        'menu_icon' => 'dashicons-camera',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('foto-inmobiliaria', $args);

}

add_action('init', 'foto_register_post_type');


add_filter( 'rwmb_meta_boxes', 'foto_register_meta_boxes' );

function foto_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'   => 'Info del proyecto de Foto' ,
        'post_types' => 'foto-inmobiliaria',
        
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
                'max_file_uploads' => 30,
                'max_status'       => true,
                'image_size'       => 'thumbnail',
            ],
            [
                'type' => 'heading',
                'name' => 'Redes Sociales',
                'desc' => 'Redes Sociales del Cliente',
            ],
            [
                'name'        => 'Facebook',
                'id'          => 'facebook_url',
                'desc'        => 'Pegue el link del perfil de Facebook sin modificar',
                'type'        => 'text',
                'placeholder' => 'https://www.facebook.com/nombre-de-usuario',
            ],
            [
                'name'        => 'Instagram',
                'id'          => 'instagram_url',
                'desc'        => 'Pegue el link del perfil de Instagram sin modificar',
                'type'        => 'text',
                'placeholder' => 'https://www.instagram.com/nombre_de_usuario/',
            ],
            [
                'name'        => 'Sitio web',
                'id'          => 'website_url',
                'desc'        => 'Pegue el link del sitio web sin modificar',
                'type'        => 'text',
                'placeholder' => 'https://punto401.com/',
            ],
        ],
    ];

    return $meta_boxes;
}