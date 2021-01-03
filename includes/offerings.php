<?php

function custom_post_type_offerings () {
      $labels = array(
            'name'            => 'Offerings',
            'singular_name'   => 'Offering',
            'add_new'         => "Add new Offering",
            'all_items'       => 'All Offerings',
            'add_new_item'    => "Add Offering",
            'edit_item'       => "Edit Offering",
            'new_item'        => "New Offering",
            'search_item'     => 'Search Offering',
            'not_found'       => 'Offering not found',
            'not_found_in_trash'    => 'Offering not found in trash',
            'parent_item_colon'     => ''
      );

      $args = array (
            'labels'          => $labels,
            'public'          => TRUE,
            'has_archive'     => TRUE,
            'show_ui'         => TRUE,
            'menu_icon'       => 'dashicons-lightbulb',
            'publicly_queryable'    => TRUE,
            'query_var'             => TRUE,
            'rewrite'               => TRUE,
            'capability_type'       => 'post',
            'heirarchical'          => FALSE,
            'supports'              => array (
                  'title', 'editor', 'thumbnail'
            ),
            'taxonomies'            => array('category'),
            'menu_position'         => 5,
            'exclude_from_search'   => TRUE
      );
      register_post_type('Offering', $args);
}

add_action('init', 'custom_post_type_offerings');



?>