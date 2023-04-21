<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://localhost:8888/ECF_WP/
 * @since             1.0.0
 * @package           My_Custom_Post_Type
 *
 * @wordpress-plugin
 * Plugin Name:       My Custom Post Type
 * Plugin URI:        http://localhost:8888/ECF_WP/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Marion
 * Author URI:        http://localhost:8888/ECF_WP/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       my-custom-post-type
 * Domain Path:       /languages
 */

// Création d'un custom post type : Etudiants
function post_type_student() {
    $args = array(
        'public'        => true,
        'label'         => "Etudiants",
        'show_in_rest'  => true,
        'supports'      => array('title'),
        'has_archive'   => true,
        'menu_icon' => 'dashicons-groups',
    );
    register_post_type( 'student' , $args );
}
add_action('init', 'post_type_student');

// Création d'un custom post type : Formations
function post_type_formation() {
    $args = array(
        'public'        => true,
        'label'         => "Formations",
        'show_in_rest'  => true,
        'supports'      => array('title', 'editor'),
        'has_archive'   => true,
        'menu_icon' => 'dashicons-book-alt',
    );
    register_post_type( 'formation' , $args );
}
add_action('init', 'post_type_formation');
