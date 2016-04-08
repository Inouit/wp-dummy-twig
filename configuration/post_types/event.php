<?php
/**
 ** Register post type
 **/
register_post_type('event', array(
    'capability_type' => 'post',
    'label'  => __( 'Événements', 'dummy-wordpress' ),
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'rewrite' => array( 'slug' => 'agenda' ),
    'public' => true,
    'has_archive' => true,
    'with_front' => true
));
