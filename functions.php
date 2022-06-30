<?php
// enregistrer le menu
register_nav_menus(array(
    'menu' => 'principal'
));
// fin

function monstyle()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'monstyle');

// afficher image à la une
add_theme_support('post-thumbnails');


add_action('after_setup_theme', 'wpdocs_theme_setup', 'customize_register', 'wpc_customize_register');
function wpdocs_theme_setup()
{
    add_image_size('home', 1280, 744, false);
    add_image_size('blogpage_thumb', 300, 300, false);
    add_image_size('singleposthumbnail', 500, 500, false);
    add_image_size('singleposthumbnail2', 500, 500, true); // L'image sera tronquée exactement à la dimension indiquée
    add_image_size('recentpost-thumb', 200, 200, false);
    add_image_size('couv', 1536, 1536, false);
    add_theme_support('custom-logo', array(
        'flex-height' => true,
        'flex-width'  => true,
    ));
}

register_sidebar(array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
));

function new_excerpt_more($more)
{
    global $post;
    return '… <a href="' . get_permalink($post->ID) . '">' . 'Lire plus &raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//this is suposed to make the pagination

// Include better comments file from a Parent theme