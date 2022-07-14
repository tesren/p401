<?php
add_action( 'init', 'members_register_post_type' );

function members_register_post_type(){

    $labels = array(
        'menu_name'          =>  'Equipo' ,
        'name_admin_bar'     =>  'Equipo' ,
        'add_new'            =>  'Agregar miembro' ,
        'add_new_item'       =>  'Agregar nuevo miembro' ,
        'new_item'           =>  'Nuevo miembro' ,
        'edit_item'          =>  'Editar Miembro' ,
        'view_item'          =>  'Ver miembro del equipo' ,
        'update_item'        =>  'Actualizar miembro' ,
        'all_items'          =>  'Todos los miembros del equipo' ,
        'search_items'       =>  'Buscar miembros' ,
        'parent_item_colon'  =>  'Miembro Padre' ,
        'not_found'          =>  'No se encontró nada' ,
        'not_found_in_trash' =>  'No hay nada en la papelera' ,
        'name'               =>  'Equipo' ,
        'singular_name'      =>  'Equipo' ,

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
            //'editor',
            //'excerpt',
            //'thumbnail',
            'revisions',
        ),
        //'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-groups',
        'menu_positions' => 7,
        'exclude_from_search' => false

    );

    register_post_type('members', $args);

}

add_action('init', 'members_register_post_type');

add_filter( 'rwmb_meta_boxes', 'members_register_meta_boxes' );

function members_register_meta_boxes( $meta_boxes ) {

    $meta_boxes[] = [
        'title'   => 'Información general' ,
        'post_types' => 'members',
        
        'fields'  => [
            [
                'type' => 'text',
                'name' => 'Cargo',
                'id'   => 'position',
                'desc' => 'Posición o cargo',
            ],
            [
                'id'               => 'icon',
                'name'             => 'Icono',
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 1,
                'max_status'       => false,
                'desc' => 'Suba un icono relacionado con el cargo de la persona',
                'image_size'       => 'thumbnail',
            ],
            [
                'id'               => 'profile_pic',
                'name'             => 'Foto',
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 1,
                'max_status'       => false,
                'desc' => 'Suba la foto de la persona',
                'image_size'       => 'thumbnail',
                'required'         => true,
            ],
        ],
    ];

    return $meta_boxes;
}