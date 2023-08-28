<?php 
    function register_cases_post_type() {
        $labels = array(
            'name'                  => _x('Cases', 'Post type general name', 'computols'),
            'singular_name'         => _x('Cases', 'Post type singular name', 'computols'),
            'menu_name'             => _x('Cases', 'Admin Menu text', 'computols'),
            'name_admin_bar'        => _x('Cases', 'Add New on Toolbar', 'computols'),
            'add_new'               => __('Add New', 'computols'),
            'add_new_item'          => __('Add New Case', 'computols'),
            'new_item'              => __('New Case', 'computols'),
            'edit_item'             => __('Edit Case', 'computols'),
            'view_item'             => __('View Case', 'computols'),
            'all_items'             => __('All Cases', 'computols'),
            'search_items'          => __('Search Cases', 'computols'),
            'parent_item_colon'     => __('Parent Cases:', 'computols'),
            'not_found'             => __('No cases found.', 'computols'),
            'not_found_in_trash'    => __('No cases found in Trash.', 'computols'),
        );

        $args = array(
            'labels'             => $labels,
            'description'        => '',
            'menu_icon'			=> 'dashicons-portfolio',
            'public'             => true,
            'publicly_queryable' => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array('title', 'editor', 'thumbnail'),
        );

        register_post_type('cases', $args);
    }

    add_action('init', 'register_cases_post_type');