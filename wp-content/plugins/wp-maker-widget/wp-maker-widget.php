<?php
/**
 * Plugin Name: WP Maker Widget
 * Description: A custom Elementor widget that displays "Hello World"
 * Version: 1.0
 * Author: Andrei
 * Author URI: https://wpmkr.com
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function register_custom_widget_final() {
    require_once plugin_dir_path( __FILE__ ) . 'widget.php';
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new My_Custom_Widget_Final() );
}
add_action( 'elementor/widgets/widgets_registered', 'register_custom_widget_final' );
