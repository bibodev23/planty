<?php
// on ajoute une action à WP en utilisant la fonction add_action
//Quand WP génère le head l'action fonction wp_enqueue_script est appelé et utilise la fonction theme_enqueue_styles
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
//je déclara ma fonction
function theme_enqueue_styles()
{
    //j'apelle le style parent pour hériter du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    //j'apelle mon fichier css pour les modfis apportées
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}

add_action('wp_enqueue_scripts', 'enqueue_custom_js');
function enqueue_custom_js() 
{
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/commande.js', array('jquery'), '1.0', true);
}

// j'indique que ma fonction add_admin_link prend 2 paramètres qui sont $items et $args
add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );
function add_admin_link( $items, $args ) {
    //je vérifie le statut de l'utilisateur et le menu utilisé
    if (is_user_logged_in() && $args->theme_location == 'main_menu') {
        //je divise les éléments du menu en un tableau pour y inserer le lien en deuxieme position
        $menu_items = explode('</li>', $items);
        if (count($menu_items) >= 2) {
            // j'nsére le lien "Admin" entre les deux parties
            $admin_link = '<li class="lien_admin"><a href="' . get_admin_url() . '">Admin</a></li>';
            $items = $menu_items[0] . $admin_link . $menu_items[1];
        }
    }
    return $items;

}

?>