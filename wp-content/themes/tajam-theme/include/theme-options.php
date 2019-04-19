<?php

$main_page_args = array(
    'page_title' => 'Theme options',
    'menu_title' => 'Theme options',
    'menu_slug' => 'theme-option',
    'icon_url' => 'dashicons-admin-generic',
    'redirect' => true
);

if (function_exists('acf_add_options_page')) {
    acf_add_options_page($main_page_args);

    acf_add_options_sub_page(array(
        'page_title' => 'Header',
        'menu_title' => 'Header',
        'menu_slug' => 'theme-option-header',
        'parent_slug' => 'theme-option',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer',
        'menu_slug' => 'theme-option-footer',
        'parent_slug' => 'theme-option',
    ));
}