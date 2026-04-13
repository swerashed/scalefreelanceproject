<?php

/**
 * Carbon field functions
 */
function getData()
{
    return get_query_var('component_data', []);
}

function setData($data)
{
    return set_query_var('component_data', $data);
}


// get all posts key should be post id and value should be post title
function getPosts($post_type = 'post')
{
    $posts = get_posts([
        'post_type' => $post_type,
        'numberposts' => -1,
    ]);

    $data = [];
    foreach ($posts as $post) {
        $data[$post->ID] = $post->post_title;
    }

    return $data;
}

// get all categories key should be category id and value should be category name
function getCategories($taxonomy = 'category')
{
    $categories = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
    ]);

    $data = [];
    foreach ($categories as $category) {
        $data[$category->term_id] = $category->name;
    }

    return $data;
}
