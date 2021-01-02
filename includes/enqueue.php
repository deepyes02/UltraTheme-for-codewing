<?php

/**
 * is_admin() - checks whether the person is logged in before executing scripts.
 *
 * @see error_log()
 *
 * @param string $io Whether input or output
 * @param string $msg Information describing logging reason.
 */
function ultra_load_scripts()
{
    //stylesheets
    // some styles  written affected the admin pages so they are all hooked up with a condition.
    if (!is_admin()) {
        wp_enqueue_style('ultra_default', get_stylesheet_uri(), array(), 1.0, 'all');
        wp_enqueue_style('ultra_google-font', 'https://fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800|Nunito+Sans:400,400i,600,600i,700,700i', array(), false, 'all');
        wp_enqueue_style('ultra_font-awesome', get_template_directory_uri() . '/css/fontawesome-all.min.css', array(), false, 'all');
        wp_enqueue_style('ultra_raratheme', get_template_directory_uri() . '/css/raratheme-companion-public.css', array(), 1.0, 'all');
        //scripts
        wp_enqueue_script('ultra_jquery-1.12', get_template_directory_uri() . '/js/jquery-1.12.0.js', array(), 1.12, true);
        wp_enqueue_script('ultra_sticky_sidebar_js', get_template_directory_uri() . '/js/sticky-sidebar.js', array(), 1.12, false);
        wp_enqueue_script('ultra_custom_script', get_template_directory_uri() . '/js/custom.js', array(), 1.0, true);
    }
}
add_action('wp_enqueue_scripts', 'ultra_load_scripts');

?>