<?php

if ( ! function_exists( 'vzero_setup' ) ) :

    $theme = wp_get_theme();
    define( 'THEME_VERSION', $theme->get('Version') );

    /**
     * Sets up theme defaults and registers support for various
     * WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme
     * hook, which runs before the init hook. The init hook is too late
     * for some features, such as indicating support post thumbnails.
     */
    function vzero_setup() {

        /**
         * Check if the current PHP version is supported
         */
        if (version_compare(phpversion(), '8.0.0', '<=')) {
            echo 'This theme requires PHP 8.0.0 or higher. You are running ' . phpversion() . '. Please upgrade you PHP version.';
            exit;
        }
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'vzero', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );

        /**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support( 'title-tag' );

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
                                'primary'   => __( 'Primary Menu', 'vzero' ),
                                'secondary' => __( 'Secondary Menu', 'vzero' ),
                            ) );

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
endif;
add_action( 'after_setup_theme', 'vzero_setup' );

/**
 * Enqueue scripts and styles.
 */
function vzero_scripts() {
    wp_enqueue_style( 'vzero-style', get_stylesheet_uri(), array(), THEME_VERSION );

    wp_enqueue_script( 'vzero-footer-js', get_template_directory_uri() . '/dist/js/scripts-footer.min.js', array( 'jquery' ), THEME_VERSION, true );
    wp_enqueue_script( 'vzero-header-js', get_template_directory_uri() . '/dist/js/scripts-header.min.js', array( 'jquery' ), THEME_VERSION, false );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'vzero_scripts' );

foreach ( glob(get_template_directory() . '/inc/*.php') as $inc ) {
    require $inc;
}