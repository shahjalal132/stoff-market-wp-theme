<?php

class Register_Nav_Menu {

    public function __construct() {
        // Setup Hooks
        $this->setup_hooks();
    }

    public function setup_hooks() {
        // Instance Hooks
        add_action( 'init', [$this, 'menu_registering'] );
    }

    public function menu_registering() {
        // Register Nav Menu
        register_nav_menus( [
            'primary_menu' => esc_html__( 'Primary Menu', 'text-domain' ),
            'footer_menu'  => esc_html__( 'Footer Menu', 'text-domain' ),
        ] );

    }
}