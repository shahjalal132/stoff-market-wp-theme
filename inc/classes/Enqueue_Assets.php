<?php

/**
 * Enqueue Assets Class
 */

class Enqueue_Assets {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_css'] );
        // add_action( 'wp_enqueue_scripts', [$this, 'enqueue_js'] );
    }

    public function enqueue_css() {
        // Register Style
        wp_register_style( "stoff-style", THEME_DIR_URI . "/assets/css/style.css", [], false, "all" );

        // Enqueue Style
        wp_enqueue_style( "stoff-style" );

    }

    /* public function enqueue_js() {
        // Register scripts
        wp_register_script( "handle", dir . "src", [deps], version, true );

        // Enqueue Script
        wp_enqueue_script( "handle" );
    } */
}