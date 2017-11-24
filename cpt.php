<?php

/**
 * CUSTOM POST TYPES
 *
 * All Custom Post Types go in here (none in Themes please!)
 */


function hdml_post_types() {

  // Endorsements
  $labels = array(
    'name'                  => _x( 'Endorsements', 'Post Type General Name', 'hdml' ),
    'singular_name'         => _x( 'Endorsement', 'Post Type Singular Name', 'hdml' ),
    'menu_name'             => __( 'Endorsements', 'hdml' ),
    'name_admin_bar'        => __( 'Endorsements', 'hdml' ),
    'archives'              => __( 'Item Archives', 'hdml' ),
    'attributes'            => __( 'Endorsement Attributes', 'hdml' ),
    'parent_item_colon'     => __( '', 'hdml' ),
    'all_items'             => __( 'All Endorsements', 'hdml' ),
    'add_new_item'          => __( 'Add New Endorsements', 'hdml' ),
    'add_new'               => __( 'Add New', 'hdml' ),
    'new_item'              => __( 'New Endorsement', 'hdml' ),
    'edit_item'             => __( 'Edit Endorsement', 'hdml' ),
    'update_item'           => __( 'Update Endorsement', 'hdml' ),
    'view_item'             => __( 'View Endorsement', 'hdml' ),
    'view_items'            => __( 'View Endorsements', 'hdml' ),
    'search_items'          => __( 'Search Endorsement', 'hdml' ),
    'not_found'             => __( 'Not found', 'hdml' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'hdml' ),
    'featured_image'        => __( 'Endorsement Photo', 'hdml' ),
    'set_featured_image'    => __( 'Set endorsement photo', 'hdml' ),
    'remove_featured_image' => __( 'Remove endorsement photo', 'hdml' ),
    'use_featured_image'    => __( 'Use as endorsement photo', 'hdml' ),
    'insert_into_item'      => __( 'Insert into endorsement', 'hdml' ),
    'uploaded_to_this_item' => __( 'Uploaded to this endorsement', 'hdml' ),
    'items_list'            => __( 'Endorsements list', 'hdml' ),
    'items_list_navigation' => __( 'Endorsements list navigation', 'hdml' ),
    'filter_items_list'     => __( 'Filter endorsements list', 'hdml' ),
  );
  $args = array(
    'label'                 => __( 'Endorsement', 'hdml' ),
    'description'           => __( 'Endorsement List', 'hdml' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 25,
    'menu_icon'             => 'dashicons-thumbs-up',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'endorsement', $args );

  // Peoples
  $labels = array(
    'name'                  => _x( 'People', 'Post Type General Name', 'hdml' ),
    'singular_name'         => _x( 'Person', 'Post Type Singular Name', 'hdml' ),
    'menu_name'             => __( 'People', 'hdml' ),
    'name_admin_bar'        => __( 'People', 'hdml' ),
    'archives'              => __( 'People Archives', 'hdml' ),
    'attributes'            => __( 'People Attributes', 'hdml' ),
    'parent_item_colon'     => __( '', 'hdml' ),
    'all_items'             => __( 'All People', 'hdml' ),
    'add_new_item'          => __( 'Add New Person', 'hdml' ),
    'add_new'               => __( 'Add New', 'hdml' ),
    'new_item'              => __( 'New Person', 'hdml' ),
    'edit_item'             => __( 'Edit Person', 'hdml' ),
    'update_item'           => __( 'Update Person', 'hdml' ),
    'view_item'             => __( 'View Person', 'hdml' ),
    'view_items'            => __( 'View Person', 'hdml' ),
    'search_items'          => __( 'Search Person', 'hdml' ),
    'not_found'             => __( 'Not found', 'hdml' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'hdml' ),
    'featured_image'        => __( 'Persopn Photo', 'hdml' ),
    'set_featured_image'    => __( 'Set person photo', 'hdml' ),
    'remove_featured_image' => __( 'Remove person photo', 'hdml' ),
    'use_featured_image'    => __( 'Use as person photo', 'hdml' ),
    'insert_into_item'      => __( 'Insert into person', 'hdml' ),
    'uploaded_to_this_item' => __( 'Uploaded to this person', 'hdml' ),
    'items_list'            => __( 'People list', 'hdml' ),
    'items_list_navigation' => __( 'People list navigation', 'hdml' ),
    'filter_items_list'     => __( 'Filter people list', 'hdml' ),
  );
  $args = array(
    'label'                 => __( 'People', 'hdml' ),
    'description'           => __( 'People List', 'hdml' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 25,
    'menu_icon'             => 'dashicons-groups',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'people', $args );

}

add_action( 'init', 'hdml_post_types', 0 );

?>