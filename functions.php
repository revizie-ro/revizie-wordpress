<?php
/**
 * Revizie.ro Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

define('REVIZIE_THEME_VERSION', '1.0.0');
define('REVIZIE_THEME_DIR', get_template_directory());
define('REVIZIE_THEME_URI', get_template_directory_uri());

function revizie_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'main-menu'   => __('Main Menu', 'revizie'),
        'footer-menu' => __('Footer Menu', 'revizie'),
    ));
}
add_action('after_setup_theme', 'revizie_theme_setup');

function revizie_enqueue_scripts() {
    wp_enqueue_style('google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null);
    wp_enqueue_style('revizie-main-style', REVIZIE_THEME_URI . '/assets/css/main.css', array('google-fonts-inter'), REVIZIE_THEME_VERSION);
    wp_enqueue_style('revizie-style', get_stylesheet_uri(), array(), REVIZIE_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'revizie_enqueue_scripts');

function revizie_get_logo_url() {
    if (has_custom_logo()) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_image = wp_get_attachment_image_src($custom_logo_id, 'full');
        return $logo_image[0];
    }
    return REVIZIE_THEME_URI . '/assets/img/logo.png';
}

function revizie_main_menu_fallback() {
    ?>
    <nav class="hidden md:flex items-center gap-8">
        <a href="<?php echo home_url('/despre-noi/'); ?>" class="text-gray-600 hover:text-gray-900 transition-colors text-sm font-medium">Despre Noi</a>
        <a href="<?php echo home_url('/cum-functioneaza/'); ?>" class="text-gray-600 hover:text-gray-900 transition-colors text-sm font-medium">Cum Functioneaza</a>
        <a href="<?php echo home_url('/pentru-parteneri/'); ?>" class="text-gray-600 hover:text-gray-900 transition-colors text-sm font-medium">Pentru Parteneri</a>
    </nav>
    <?php
}

function revizie_custom_menu_walker($items, $args) {
    if ($args->theme_location == 'main-menu') {
        $output = '<nav class="hidden md:flex items-center gap-8">';
        foreach ($items as $item) {
            $output .= '<a href="' . esc_url($item->url) . '" class="text-gray-600 hover:text-gray-900 transition-colors text-sm font-medium">' . esc_html($item->title) . '</a>';
        }
        $output .= '</nav>';
        return $output;
    }
    return $items;
}

function revizie_display_main_menu() {
    if (has_nav_menu('main-menu')) {
        $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['main-menu']);
        if ($menu_items) {
            echo '<nav class="hidden md:flex items-center gap-8">';
            foreach ($menu_items as $item) {
                if ($item->menu_item_parent == 0) {
                    echo '<a href="' . esc_url($item->url) . '" class="text-gray-600 hover:text-gray-900 transition-colors text-sm font-medium">' . esc_html($item->title) . '</a>';
                }
            }
            echo '</nav>';
        }
    } else {
        revizie_main_menu_fallback();
    }
}

function revizie_body_class($classes) {
    $classes[] = 'min-h-screen bg-white';
    return $classes;
}
add_filter('body_class', 'revizie_body_class');

add_filter('show_admin_bar', '__return_false');
