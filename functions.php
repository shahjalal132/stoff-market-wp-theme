<?php
/**
 * Main Function template
 */

// Define theme directory path
if ( !defined( 'THEME_DIR_PATH' ) ) {
    define( 'THEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

// Define theme directory uri
if ( !defined( 'THEME_DIR_URI' ) ) {
    define( 'THEME_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

// Include Autoloader
if ( file_exists( __DIR__ ) . '/inc/helpers/Autoloader.php' ) {
    require_once __DIR__ . '/inc/helpers/Autoloader.php';
}

// Include custom template tags template
if ( file_exists( __DIR__ ) . '/inc/helpers/Template-Tags.php' ) {
    require_once __DIR__ . '/inc/helpers/Template-Tags.php';
}