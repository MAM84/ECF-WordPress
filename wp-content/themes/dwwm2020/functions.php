<?php

    //support du title dans le header
    add_theme_support( 'title-tag' );

    //chargement des feuilles de style et des scripts
    function chargementFiles() {
        wp_enqueue_style( 'base', get_stylesheet_directory_uri() . '/css/base.css', array(), '1.8', 'all' );
        wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.7', 'all' );

        wp_enqueue_script('nav', get_stylesheet_directory_uri() . '/js/nav.js', array(),'1.0', true);

    }
    add_action('wp_enqueue_scripts', 'chargementFiles');

    //Menus
    register_nav_menus(
        array(
            'menu-du-header' => 'Mon menu dans le header',
            'menu-du-footer' => 'Mon menu dans le footer',
        )
    );

    // Pages d'options ACF
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Paramétrages du thème',
            'menu_title'	=> 'Options',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_others_posts',
            'redirect'		=> false
        ));
    }

    //Affichage des post-type
    function be_change_event_posts_per_page( $query ) {
        //actualités
        if( $query->is_main_query() && !is_admin() && is_home() ) {
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'ASC' );
        }
        //formations
        if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'formation' ) ) {
            $query->set( 'orderby', 'title' );
            $query->set( 'order', 'ASC' );
        }
        //étudiants
        if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'student' ) ) {
            $query->set( 'posts_per_page', '16' );
            $query->set( 'orderby', 'title' );
            $query->set( 'order', 'ASC' );
        }
    }
    add_action( 'pre_get_posts', 'be_change_event_posts_per_page' );

    //Enlever les balises <p> du formulaire de contact
    add_filter('wpcf7_autop_or_not', '__return_false');