<?php
/**
 * add font and style
 * 
 * enque styles and scripts methodologically based on the front end design so that there's no issue in page load. :-) 
 * @since 1.0.0
 */

 function ultra_load_scripts () {

    //stylesheets
     wp_enqueue_style('ultra_default', get_stylesheet_uri(), array(), 1.0, 'all');
     wp_enqueue_style('ultra_google-font', 'https://fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800|Nunito+Sans:400,400i,600,600i,700,700i', array(), false, 'all');
     wp_enqueue_style('ultra_font-awesome', get_template_directory_uri().'/css/fontawesome-all.min.css', array(), false, 'all');
     wp_enqueue_style('ultra_raratheme', get_template_directory_uri(). '/css/raratheme-companion-public.css', array(), 1.0, 'all');

     //scripts
     wp_enqueue_script('ultra_jquery-1.12', get_template_directory_uri() . '/js/jquery-1.12.0.js', array(), 1.12, true);
     wp_enqueue_script('ultra_custom_script', get_template_directory_uri() . '/js/custom.js', array(), 1.12, true);
     wp_enqueue_script('ultra_sticky_sidebar', get_template_directory_uri() . '/js/sticky-sidebar.js', array(), 1.12, true);
 }

 add_action('wp_enqueue_scripts', ultra_load_scripts());

 


/**
 * customize
 * @package ultra theme
 */

 function ultra_add_admin_page () {
     add_menu_page('ultraPageOption', 'Website Setting', 'manage_options', 'ultra_setting', 'ultra_create_admin_page', 'dashicons-admin-users', 12);
 }

 add_action('admin_menu', 'ultra_add_admin_page');

function ultra_create_admin_page(){
    include_once(get_template_directory().'/includes/templates/ultra_setting_page.php');
}
