<?php

if (!class_exists('bones_theme')) {

    class bones_theme {

        CONST VERSION = '1.0.0';

        public function __construct()
        {
            $this->load_classes();
            $this->set_hooks();
            $this->set_theme_support();
        }

        public function load_classes() {
            require BONES_DIR . 'classes/class-bones_blocks.php';
            new bones_blocks();
        }

        public function set_hooks() {
            add_action( 'wp_enqueue_scripts', [$this, 'get_assets'] );
        }

        public function get_assets() {
            wp_enqueue_style('main', get_theme_root_uri('assets/css/main.css'), [], $this->get_version(), 'all');
        }

        public function get_version() {
            return self::VERSION;
        }

        public function set_theme_support() {
            add_theme_support( 'title-tag' );
        }

    }

}