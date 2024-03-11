<?php
/**
 * Theme Support Template
 *
 * @package oop
 */

class Theme_Support {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'after_setup_theme', [$this, 'theme_support'] );
    }

    public function theme_support() {
        // Theme Support
        add_theme_support( 'title-tag' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'woocommerce' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Load theme text-domain
         */
        load_theme_textdomain( 'text-domain', THEME_DIR_PATH . '/languages' );

        /**
         * Support Custom Logo
         */
        add_theme_support( 'custom-logo', [
            'header-text' => ['site title', 'site description'],
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ] );

        /**
         * Support HTML format
         */

        add_theme_support( 'html5', [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script',
        ] );

        /**
         * Support Post format
         */

        add_theme_support( 'post-formats', [
            'aside',
            'gallery',
            'audio',
            'video',
            'quote',
        ] );

        /**
         * Support Editor style for gutenberg editor
         */
        add_editor_style();

        /**
         * Support Custom background
         */

        add_theme_support( 'custom-background', [
            'default-image'  => '',
            'default-color'  => '#ffffff',
            'default-repeat' => 'no-repeat',
        ] );

        /**
         * Global content width set 1200 px
         * it will be apply to container
         */
        global $content_width;
        if ( !isset( $content_width ) ) {
            $content_width = 1200;
        }
    }
}