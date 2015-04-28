<?php

function naked_register_project_post_type() {
  $project_labels = array(
    'name'               => _x( 'Projects', 'post type general name', 'naked' ),
    'singular_name'      => _x( 'Project', 'post type singular name', 'naked' ),
    'menu_name'          => _x( 'Projects', 'admin menu', 'naked' ),
    'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'naked' ),
    'add_new'            => _x( 'Add New', 'Project', 'naked' ),
    'add_new_item'       => __( 'Add New Project', 'naked' ),
    'new_item'           => __( 'New Project', 'naked' ),
    'edit_item'          => __( 'Edit Project', 'naked' ),
    'view_item'          => __( 'View Project', 'naked' ),
    'all_items'          => __( 'All Projects', 'naked' ),
    'search_items'       => __( 'Search Projects', 'naked' ),
    'parent_item_colon'  => __( 'Parent Projects:', 'naked' ),
    'not_found'          => __( 'No Projects found.', 'naked' ),
    'not_found_in_trash' => __( 'No Projects found in Trash.', 'naked' ),
  );

  $project_args = array(
    'labels'             => $project_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'project' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'project', $project_args );
}

add_action( 'init', 'naked_register_project_post_type' );


?>
