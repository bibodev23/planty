<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}

function enqueue_custom_js() 
{
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/commande.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_js');



add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'main_menu') {
        $menu_items = explode('</li>', $items);
        if (count($menu_items) >= 2) {
            // Insérez le lien "Admin" entre les deux parties
            $admin_link = '<li class="lien_admin"><a href="' . get_admin_url() . '">Admin</a></li>';
            $items = $menu_items[0] . $admin_link . '</li>' . $menu_items[1] . '</li>';
        }
    }

    return $items;

}

?>