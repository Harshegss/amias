<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function register_fields()
{
    register_setting('general', 'vatTax', 'esc_attr');
    add_settings_field('vatTax', '<label for="vatTax">'.__('Vat Tax in %' , 'vatTax' ).'</label>' , 'print_custom_field', 'general');
}

function print_custom_field()
{
    $value = get_option( 'vatTax', '' );
    echo '<input type="number" id="vatTax" name="vatTax" placeholder="25" value="' . $value . '" style="    font-weight: 600; font-size: 15px;"/>';
}

add_filter('admin_init', 'register_fields');