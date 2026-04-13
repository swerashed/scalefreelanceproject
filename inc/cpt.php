<?php
// Register Custom Post Type: Case Study
function create_case_study_cpt()
{
    $labels = array(
        'name'                  => _x('Case Studies', 'Post Type General Name', 'textdomain'),
        'singular_name'         => _x('Case Study', 'Post Type Singular Name', 'textdomain'),
        'menu_name'             => __('Case Studies', 'textdomain'),
        'name_admin_bar'        => __('Case Study', 'textdomain'),
        'archives'              => __('Case Study Archives', 'textdomain'),
        'attributes'            => __('Case Study Attributes', 'textdomain'),
        'parent_item_colon'     => __('Parent Case Study:', 'textdomain'),
        'all_items'             => __('All Case Studies', 'textdomain'),
        'add_new_item'          => __('Add New Case Study', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'new_item'              => __('New Case Study', 'textdomain'),
        'edit_item'             => __('Edit Case Study', 'textdomain'),
        'update_item'           => __('Update Case Study', 'textdomain'),
        'view_item'             => __('View Case Study', 'textdomain'),
        'view_items'            => __('View Case Studies', 'textdomain'),
        'search_items'          => __('Search Case Study', 'textdomain'),
        'not_found'             => __('Not found', 'textdomain'),
        'not_found_in_trash'    => __('Not found in Trash', 'textdomain'),
        'featured_image'        => __('Featured Image', 'textdomain'),
        'set_featured_image'    => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image'    => __('Use as featured image', 'textdomain'),
        'insert_into_item'      => __('Insert into case study', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this case study', 'textdomain'),
        'items_list'            => __('Case Studies list', 'textdomain'),
        'items_list_navigation' => __('Case Studies list navigation', 'textdomain'),
        'filter_items_list'     => __('Filter case studies list', 'textdomain'),
    );
    $args = array(
        'label'                 => __('Case Study', 'textdomain'),
        'description'           => __('Post Type for Case Studies', 'textdomain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('case_study_category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true, // Enables Gutenberg editor
    );
    register_post_type('case_study', $args);
}
add_action('init', 'create_case_study_cpt');

// Register Taxonomy: Categories for Case Study
function create_case_study_taxonomy()
{
    $labels = array(
        'name'                       => _x('Categories', 'Taxonomy General Name', 'textdomain'),
        'singular_name'              => _x('Category', 'Taxonomy Singular Name', 'textdomain'),
        'menu_name'                  => __('Categories', 'textdomain'),
        'all_items'                  => __('All Categories', 'textdomain'),
        'parent_item'                => __('Parent Category', 'textdomain'),
        'parent_item_colon'          => __('Parent Category:', 'textdomain'),
        'new_item_name'              => __('New Category Name', 'textdomain'),
        'add_new_item'               => __('Add New Category', 'textdomain'),
        'edit_item'                  => __('Edit Category', 'textdomain'),
        'update_item'                => __('Update Category', 'textdomain'),
        'view_item'                  => __('View Category', 'textdomain'),
        'separate_items_with_commas' => __('Separate categories with commas', 'textdomain'),
        'add_or_remove_items'        => __('Add or remove categories', 'textdomain'),
        'choose_from_most_used'      => __('Choose from the most used', 'textdomain'),
        'popular_items'              => __('Popular Categories', 'textdomain'),
        'search_items'               => __('Search Categories', 'textdomain'),
        'not_found'                  => __('Not Found', 'textdomain'),
        'no_terms'                   => __('No categories', 'textdomain'),
        'items_list'                 => __('Categories list', 'textdomain'),
        'items_list_navigation'      => __('Categories list navigation', 'textdomain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true, // Set to true for parent/child relationship
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true, // Enables Gutenberg editor
    );
    register_taxonomy('case_study_category', array('case_study'), $args);
}
add_action('init', 'create_case_study_taxonomy');
