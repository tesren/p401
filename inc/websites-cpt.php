<?php
add_action( 'init', 'websites_register_post_type' );

function websites_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Websites' ,
        'name_admin_bar'     =>  'Website' ,
        'add_new'            =>  'Agregar Website' ,
        'add_new_item'       =>  'Agregar Website' ,
        'new_item'           =>  'Nuevo Website' ,
        'edit_item'          =>  'Editar Website' ,
        'view_item'          =>  'Ver Website' ,
        'update_item'        =>  'Actualizar Website' ,
        'all_items'          =>  'Todos los Websites' ,
        'search_items'       =>  'Buscar Websites' ,
        'parent_item_colon'  =>  'Padre Website' ,
        'not_found'          =>  'No se encontraron Websites' ,
        'not_found_in_trash' =>  'No hay websites en la papelera' ,
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
            //'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-html',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('website', $args);

}

add_action('init', 'websites_register_post_type');

add_filter( 'rwmb_meta_boxes', 'websites_register_meta_boxes' );

function websites_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'   => 'Info del Website' ,
        'post_types' => 'website',
        
        'fields'  => [
            [
                'id'               => 'logo',
                'name'             => 'Logo del sitio web',
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
                'max_file_uploads' => 8,
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
                'id'          => 'link',
                'desc'        => 'Pegue el link del sitio web sin modificar',
                'type'        => 'text',
                'placeholder' => 'https://punto401.com/',
                'required'    => true,
            ],
        ],
    ];

    return $meta_boxes;
}