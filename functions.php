<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */

if ( ! function_exists( 'twentytwentytwo_support' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return void
     */
    function twentytwentytwo_support() {

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style.css' );

        // Add featured image support.
        add_theme_support( 'post-thumbnails' );
    }

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

    /**
     * Enqueue styles.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return void
     */
    function twentytwentytwo_styles() {
        // Register theme stylesheet.
        $theme_version = wp_get_theme()->get( 'Version' );

        $version_string = is_string( $theme_version ) ? $theme_version : false;
        wp_register_style(
            'twentytwentytwo-style',
            get_template_directory_uri() . '/style.css',
            array(),
            $version_string
        );

        // Enqueue theme stylesheet.
        wp_enqueue_style( 'twentytwentytwo-style' );

        // Enqueue Bootstrap 5 CSS from CDN.
        wp_enqueue_style(
            'bootstrap-css',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
            array(),
            null
        );

        // Enqueue Tailwind CSS from CDN.
        wp_enqueue_style(
            'tailwind-css',
            'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css',
            array(),
            null
        );
    }

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

if ( ! function_exists( 'twentytwentytwo_scripts' ) ) :

    /**
     * Enqueue scripts.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return void
     */
    function twentytwentytwo_scripts() {
        // Enqueue Bootstrap 5 JavaScript bundle from CDN.
        wp_enqueue_script(
            'bootstrap-js',
            'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
            array(),
            null,
            true
        );

        // Enqueue GSAP JavaScript from CDN.
        wp_enqueue_script(
            'gsap-js',
            'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js',
            array(),
            null,
            true
        );
    }

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_scripts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Custom excerpt length and more text
function custom_excerpt_length($length) {
    return 10; // Limit excerpt to 10 words
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return '...'; // Add ellipses to the end of excerpts
}
add_filter('excerpt_more', 'custom_excerpt_more');
