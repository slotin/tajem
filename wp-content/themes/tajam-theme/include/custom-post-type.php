<?php
/**
 * Create custom post types.
 */
add_action('init', 'create_posttype');

function create_posttype()
{
    register_post_type('testimonials',
        array(
            'supports' => array(
                'title',
                'custom-fields',
                'thumbnail',
                'editor'
            ),
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial')
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-format-quote',
            'rewrite' => array(
                'slug' => 'testimonials'
            ),
        )
    );
    register_post_type('our-works',
        array(
            'supports' => array(
                'title',
                'custom-fields',
                'thumbnail',
                'revisions',
                'editor'
            ),
            'labels' => array(
                'name' => __('Our works'),
                'singular_name' => __('Our works')
            ),
            'public' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-images-alt2',
            'rewrite' => array(
                'slug' => 'work'
            ),
        )
    );

    register_post_type('team',
        array(
            'supports' => array(
                'title',
                'thumbnail',
                'custom-fields',
                'revisions',
                'page-attributes'
            ),
            'labels' => array(
                'name' => __('Our Team'),
                'singular_name' => __('Team member')
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-smiley',
            'rewrite' => array(
                'slug' => 'team',
                'with_front' => true
            ),
        )
    );
}
