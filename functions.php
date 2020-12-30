<?php
/**
 * add font and style
 * 
 * enque styles and scripts methodologically based on the front end design so that there's no issue in page load. :-) 
 * @since 1.0.0
 */


 function ultra_load_scripts () {

    //stylesheets
    // some styles  written affected the admin pages so they are all hooked up with a condition.
    if (! is_admin()) {
     wp_enqueue_style('ultra_default', get_stylesheet_uri(), array(), 1.0, 'all');
     wp_enqueue_style('ultra_google-font', 'https://fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800|Nunito+Sans:400,400i,600,600i,700,700i', array(), false, 'all');
     wp_enqueue_style('ultra_font-awesome', get_template_directory_uri().'/css/fontawesome-all.min.css', array(), false, 'all');
     wp_enqueue_style('ultra_raratheme', get_template_directory_uri(). '/css/raratheme-companion-public.css', array(), 1.0, 'all');
     //scripts
     wp_enqueue_script('ultra_jquery-1.12', get_template_directory_uri() . '/js/jquery-1.12.0.js', array(), 1.12, true);
     wp_enqueue_script('ultra_custom_script', get_template_directory_uri() . '/js/custom.js', array(), 1.12, true);
    }
     
 }

 add_action('wp_enqueue_scripts', ultra_load_scripts());

 /**
  * Theme support
  * 
  * Add various theme support options required for the theme to operate
  * @since 1.0
  */

 if (! function_exists('ultra_theme_support')) {
     function ultra_theme_support(){
         load_theme_textdomain('superUltraTheme', get_template_directory() . './languages');

         //add theme support for automatic feed links for rss purposes
         add_theme_support('automatic-feed-links');

         //enable post thumbnails
         add_theme_support('post-thumbnails');

         //add support for custom header in pages
         $args = array (
             'height'   => 450,
             'width'    => 1920
         );

         add_theme_support('custom-header', $args);

         //title tag
         add_theme_support('title-tag');

         add_theme_support('custom-logo', array (
             'height'   => 480,
             'width'    => 720
         ));

         register_nav_menus ( array (
             'primary'      => __('Primary Menu', 'superUltraTheme'),
             'social'       => __('Social Menu', 'superUltraTheme')
         ));
        
         $post_args = array (
             'gallery', 'quote', 'image', 'video', 'audio'
         );
         add_theme_support('post-formats', $post_args);
     }
 }
 
add_action('after-setup-theme', ultra_theme_support());

/**
 * customize
 * @package ultra theme
 */

 function ultra_add_admin_page () {

    //generate ultra admin page
    add_menu_page('ultraThemeOption', 'Website Setting', 'manage_options', 'ultra_setting', 'ultra_create_admin_page', 'dashicons-admin-users', 12);
    //generate ultra sub-admin pages
    //same as main menu to reduce redundancy
    add_submenu_page('ultra_setting','ultraPageOption', 'Settings', 'manage_options','ultra_setting', 'ultra_create_admin_page', 1 );
    add_submenu_page('ultra_setting','ultraCSSOption', 'CUSTOM CSS', 'manage_options','ultra_setting_css', 'ultra_create_admin_page_css', 1 );

 }

 add_action('admin_menu', 'ultra_add_admin_page');

function ultra_create_admin_page(){
    include_once(get_template_directory().'/includes/templates/ultra_setting_page.php');
}

function ultra_create_admin_page_css () {
    include_once(get_template_directory().'/includes/templates/ultra_setting_page_css.php');
}



/**
 * homepage featured widget
 * 
 * widget for homepage showing with title, description and picture of the page owner
 */

    add_action('widgets_init', 'ultra_sidebars');
 function ultra_sidebars() {
     register_sidebar(array(
         'name'     => "HomePage Featured",
         'id'       => 'sidebar-featured',
         'description'  => 'sidebar for featured section',
         'before_widget'    => '<div class="container">',
         'after_widget'     => '</div>',
         'before_title'     => '<div class="text-holder">',
         'after_title'      => '</div>',
         'before_sidebar'   => '<section class="about-section">',
         'after_sidebar'    => '</section>'
     ));
 }
