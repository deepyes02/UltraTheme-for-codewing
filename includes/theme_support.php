<?php


/**
 * is_admin() - checks whether the person is logged in before executing scripts.
 *
 * @see general theme support options
 *
 * @param array array of various options
 * @param string $values
 */
add_action('after_setup_theme', 'ultra_theme_support');

    function ultra_theme_support()
    {
        load_theme_textdomain('superUltraTheme', get_template_directory() . './languages');

        //add theme support for automatic feed links for rss purposes
        add_theme_support('automatic-feed-links');

        //enable post thumbnails
        add_theme_support('post-thumbnails');

        //add support for custom header in pages
        $args = array(
            'height'   => 450,
            'width'    => 1920
        );

        add_theme_support('custom-header', $args);

        //title tag
        add_theme_support('title-tag');

        add_theme_support('custom-logo', array(
            'height'   => 480,
            'width'    => 720
        ));

        register_nav_menus(array(
            'primary'      => __('Primary Menu', 'superUltraTheme'),
            'social'       => __('Social Menu', 'superUltraTheme')
        ));

        $post_args = array(
            'gallery', 'quote', 'image', 'video', 'audio'
        );
        add_theme_support('post-formats', $post_args);
    }

?>