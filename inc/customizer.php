<?php
/**
 * grit Theme Customizer
 *
 * @package grit
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function grit_customize_register( $wp_customize ) {
        $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
        $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

            if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'grit_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'grit_customize_partial_blogdescription',
        ) );
        }


        $wp_customize->remove_control('blogdescription');
        $wp_customize->remove_section('header_image');
        $wp_customize->remove_section('background_image');

        $wp_customize->get_section('title_tagline')->title = __( 'Branding' );  


    
/********* header intro **********/

        $wp_customize->add_section('grit_header', array(
            'title'                     => __('Header Intro', 'grit'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 99,

        ));

        $wp_customize->add_setting( 'bck_ground_image', array(
            'default'                   => '',
            'type'                      => 'theme_mod',
            'capability'                => 'edit_theme_options',
            'sanitize_callback'         => 'esc_url_raw',
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,'bck_ground_image', array(
            'label'                     => __( 'Background Image', '' ),
            'section'                   => 'grit_header',
            'settings'                  => 'bck_ground_image',
            'context'                   => 'bck_ground_image',
            'priority'                  => 20,
            ) 
        ) );

        $wp_customize->add_setting( 'grit_heder_text', array(      
            'default'                   => 'Create your own website with our free themes.' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'dblogger_heder_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Heading', 'grit' ),
            'section'  					=> 'grit_header',
            'priority' 					=> 2,
        ) );	
}
add_action( 'customize_register', 'grit_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function grit_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function grit_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function grit_customize_preview_js() {
	wp_enqueue_script( 'grit-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'grit_customize_preview_js' );
