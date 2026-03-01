<?php
/**
 * MyCourseID Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'MCID_VERSION', '2.0.0' );
define( 'MCID_DIR', get_template_directory() );
define( 'MCID_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function mcid_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );

    register_nav_menus( array(
        'primary'  => __( 'Primary Menu', 'mycourseid' ),
        'footer'   => __( 'Footer Menu', 'mycourseid' ),
    ) );
}
add_action( 'after_setup_theme', 'mcid_setup' );

/**
 * Enqueue Styles & Scripts
 */
function mcid_scripts() {
    wp_enqueue_style(
        'mcid-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style( 'mcid-style', get_stylesheet_uri(), array(), MCID_VERSION );
    wp_enqueue_script( 'mcid-main', MCID_URI . '/assets/js/main.js', array(), MCID_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'mcid_scripts' );

/**
 * Custom nav walker for clean markup
 */
class MCID_Nav_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $is_current = in_array( 'current-menu-item', $classes ) || in_array( 'current_page_item', $classes );
        $class_attr = $is_current ? ' class="active"' : '';
        $output .= '<a href="' . esc_url( $item->url ) . '"' . $class_attr . '>' . esc_html( $item->title ) . '</a>';
    }
    function end_el( &$output, $item, $depth = 0, $args = null ) {}
    function start_lvl( &$output, $depth = 0, $args = null ) {}
    function end_lvl( &$output, $depth = 0, $args = null ) {}
}

/**
 * Customizer settings
 */
function mcid_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'mcid_options', array(
        'title'    => __( 'MyCourseID Settings', 'mycourseid' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'mcid_cta_url', array(
        'default'           => '/demo/',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'mcid_cta_url', array(
        'label'   => __( 'Demo/CTA Button URL', 'mycourseid' ),
        'section' => 'mcid_options',
        'type'    => 'url',
    ) );

    // Hero background image
    $wp_customize->add_setting( 'mcid_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mcid_hero_image', array(
        'label'   => __( 'Hero Background Image', 'mycourseid' ),
        'section' => 'mcid_options',
    ) ) );
}
add_action( 'customize_register', 'mcid_customize_register' );

/**
 * Remove default WordPress emoji scripts for performance
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
