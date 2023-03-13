<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * This function is called when the theme is activated. This is where we
 * will add all of our scripts and styles.
 * @return void
 */
function theme_scripts_and_styles()
{
    // Load CSS Reset
    wp_enqueue_style(
        'css-reset',
        'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css',
        [],
        null
    );
    // Load in Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap',
        [],
        null
    );

    // Load in local CSS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_style/}
    wp_enqueue_style(
        'idm250-styles', // name of the stylesheet
        get_template_directory_uri() . '/dist/styles/main.css', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/styles/main.css
        [], // dependencies
        filemtime(get_template_directory() . '/dist/styles/main.css'), // version number
        'all' // media
    );

    // Load in local JS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_script/}
    wp_enqueue_script(
        'idm250-scripts', // name of the script
        get_template_directory_uri() . '/dist/scripts/main.js', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/scripts/main.js
        [], // dependencies
        filemtime(get_template_directory() . '/dist/scripts/main.js'), // version number
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

// Add support for post thumbnails in our theme
add_theme_support('post-thumbnails');

add_post_type_support('page','excerpt');


/**
 * Function to register custom post types
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 */
function register_custom_post_types()
{
    // Register Plants post type
    register_post_type(
        'Plants',
        [
            'labels' => [
                'name' => __('Plants'),
                'singular_name' => __('Plant')
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'Plants'],
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'taxonomies' => ['Plant-categories'],
            'show_in_rest' => true,
        ]
    );
}

add_action('init', 'register_custom_post_types');

/**
 * Register custom taxonomies
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @return void
 */
function register_custom_taxonomies()
{
    $args = [
        'labels' => [
            'name' => 'Plant Categories',
            'singular_name' => 'Plant Category',
            'search_items' => 'Search Plant Categories',
            'all_items' => 'All Plant Categories',
            'parent_item' => 'Parent Plant Category',
            'parent_item_colon' => 'Parent Plant Type:',
            'edit_item' => 'Edit Plant Category',
            'update_item' => 'Update Plant Category',
            'add_new_item' => 'Add New Plant Category',
            'new_item_name' => 'New Plant Type Name',
            'menu_name' => 'Plant Categories',
        ],
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'Plant/categories'],
        'show_in_rest' => true,

    ];

    $taxonomy_name = 'Plant-categories'; // name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
    $taxonomy_association = ['Plants']; // post types to associate with this taxonomy
    register_taxonomy($taxonomy_name, $taxonomy_association, $args);
}
add_action('init', 'register_custom_taxonomies');


function register_theme_menus()
{
    register_nav_menus(
        [
            'primary-menu' => 'Primary Menu',
            'footer-menu' => 'Footer Menu'
        ]
    );
}
add_action('init', 'register_theme_menus');

function register_theme_sidebars()
{
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
    ]);
}
add_action('widgets_init', 'register_theme_sidebars');

function my_acf_json_save_point($path)
{
    // update path
    $path = get_stylesheet_directory() . '/my-custom-folder';

    // return
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');


function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/my-custom-folder';
    
    
    // return
    return $paths;
    
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');


function add_acf_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Theme General Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false,
        ]);
    }
}
add_action('init', 'add_acf_options_page');