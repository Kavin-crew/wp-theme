<?php

////////////////////////////////////
// Load scripts, stylesheets, and fonts
////////////////////////////////////
function splace_files()
{
    // add the style.css to the list of files from university_files
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',array(),'6.7.2');
    wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',array(),'5.3.3');
    wp_enqueue_style('main_css', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('reset_css',get_theme_file_uri('/css/reset.css'),array('bootstrap'),filemtime(get_theme_file_path('/css/reset.css')));
    wp_enqueue_script('bootstrap-bundle','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',array(),'5.3.3',true);
}
// hook to load the files in the theme from university_files()
add_action('wp_enqueue_scripts', 'splace_files');

////////////////////////////////////
// Enable adding page title in address bar of the browser
////////////////////////////////////
function splace_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'splace_features');