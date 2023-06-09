<?php  
function saasup_theme_setup(){
    // Theme Support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
};
add_action('after_setup_theme','saasup_theme_setup');

function saasup_Widgets(){
    register_sidebar(array(
        'id' => 'footer-sideber-1',
        'name' => 'Footer Widgets 1',
        'description' => 'Set Your Footer Widgets',
        'before_widget' => '<div class="pages">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'id' => 'footer-sideber-2',
        'name' => 'Footer Widgets 2',
        'description' => 'Set Your Footer Widgets',
        'before_widget' => '<div class="pages">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'id' => 'footer-sideber-3',
        'name' => 'Footer Widgets 3',
        'description' => 'Set Your Footer Widgets',
        'before_widget' => '<div class="downlod_area">',
        'after_widget' => '</div>',
    ));
}
add_action('widgets_init','saasup_Widgets');

// CodeStar Famework
require_once('inc/theme-options/codestar-framework.php');
require_once('inc/theme-options/options.php');

