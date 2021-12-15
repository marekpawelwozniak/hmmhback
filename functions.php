<?php

function car_post_type() {
    $labels = array(
        'name'                => 'Samochody',
        'singular_name'       => 'Samochód',
        'menu_name'           => 'Samochody',
        'all_items'           => 'Wszystkie samochody',
        'view_item'           => 'Widok samochodów',
        'add_new_item'        => 'Dodaj samochód',
        'add_new'             => 'Dodaj nowy samochód',
        'edit_item'           => 'Edytuj samochód',
        'update_item'         => 'Aktualizuj samochód',
        'search_items'        => 'Szukaj samochodu',
        'not_found'           => 'Nie znaleziono',
        'not_found_in_trash'  => 'Nie znaleziono'
    );
    $args = [
        'label' => 'cars',
        'rewrite' => [
            'slug' => 'cars'
        ],
        'description'         => 'Samochód',
        'labels'              => $labels,
        'supports'            => ['thumbnail', 'title', 'editor', 'custom-fields'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon' => 'dashicons-admin-post',
        'capability_type' => 'myposttype',
        'capabilities' => array(
            'publish_posts' => 'publish_myposttypes',
            'edit_posts' => 'edit_myposttypes',
            'edit_others_posts' => 'edit_others_myposttypes',
            'read_private_posts' => 'read_private_myposttypes',
            'edit_post' => 'edit_myposttypes',
            'delete_post' => 'delete_myposttypes',
            'delete_posts' => 'delete_myposttype',
            'read_post' => 'read_myposttypes',
        ),
    ];
    register_post_type( 'car', $args );
}
add_action( 'init', 'car_post_type', 0 );

function xx__update_custom_roles() {
        add_role( 'mech_role', 'Mech', array(
            'read' => true,
            'level_10' => true,
            'edit' => true,
            'delete' => true,
            'publish_myposttypes' => true,
            'edit_myposttypes' => true,
            'edit_others_myposttypes' =>  true,
            'read_private_myposttypes' => true,
            'delete_myposttypes' => true,
            'delete_myposttype' => true,
            'read_myposttypes' => true
        ) );
}
add_action( 'init', 'xx__update_custom_roles' );

remove_role( 'custom_role' );
