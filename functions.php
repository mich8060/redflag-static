<?php
/**
 * Theme Setup
 */
function mytheme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'elementor' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mytheme' ),
        'footer'  => __( 'Footer Menu', 'mytheme' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );


/**
 * Enqueue Theme Styles and Scripts
 */
function mytheme_enqueue_assets() {
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );

    wp_enqueue_script(
        'menu-toggle',
        get_template_directory_uri() . '/menu-toggle.js',
        [],
        filemtime( get_template_directory() . '/menu-toggle.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_assets' );


/**
 * Hide Admin Bar on Frontend
 */
add_filter( 'show_admin_bar', '__return_false' );



/**
 * Count and annotate how many children each menu item has
 */
function redflag_add_child_count_to_items($items, $args) {
    $counts = [];

    foreach ($items as $item) {
        if ($item->menu_item_parent) {
            $counts[$item->menu_item_parent] = ($counts[$item->menu_item_parent] ?? 0) + 1;
        }
    }

    foreach ($items as &$item) {
        $item->child_count = $counts[$item->ID] ?? 0;
    }

    return $items;
}
add_filter('wp_nav_menu_objects', 'redflag_add_child_count_to_items', 10, 2);


/**
 * Custom Walker to generate nav structure
 */
class Redflag_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $submenu_class = $depth === 0 ? 'nav--submenu' : 'nav--column';
        $output .= "\n$indent<ul class=\"$submenu_class\">\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= str_repeat("\t", $depth) . "</ul>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
        $indent = str_repeat("\t", $depth);
        $classes = [];

        if ($depth === 0) {
            $classes[] = 'nav--item';
            if (!empty($item->child_count)) {
                $classes[] = 'nav--column_' . $item->child_count;
            }
        } elseif ($depth === 1) {
            $classes[] = 'nav--group';
        } elseif ($depth === 2) {
            $classes[] = 'nav--child';
        }

        $class_names = implode(' ', $classes);
        $output .= "$indent<li class=\"$class_names\">";

        $attrs = ' href="' . esc_attr($item->url) . '"';
        if (in_array('current-menu-item', $item->classes)) {
            $attrs .= ' aria-current="page"';
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $icon_svg = '';

        if(!empty($item->classes[0])) {
            $icon_svg = '<i class="ph-duotone ph-' . esc_attr($item->classes[0]) . ' lg"></i>';
            $has_icon = true;
        }


        $caret_svg = (!empty($item->child_count) && $depth === 0) ? '<i class="ph-bold ph-caret-down sm"></i>' : '';
        $output .= "<a$attrs>$icon_svg$title $caret_svg</a>";
    }

    function end_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
        $output .= "</li>\n";
    }
}
