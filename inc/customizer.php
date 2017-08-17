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
    
    require get_template_directory() . '/inc/customizer-controls.php';
    
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

  if ( isset( $wp_customize->selective_refresh ) ) {
      
        $wp_customize->selective_refresh->add_partial( 'grit_header_text', array(
                'selector'        => '.container #head',
                'render_callback' => 'grit_customize_partial_header_text',
            ) ); 

        $wp_customize->selective_refresh->add_partial( 'grit_header_description', array(
                'selector'        => '#home-banner h1',
                'render_callback' => 'grit_customize_partial_header_description',
            ) ); 

        $wp_customize->selective_refresh->add_partial( 'grit_about_header', array(
                'selector'        => '#about-us-block h2',
                'render_callback' => 'grit_customize_partial_grit_about_header',
            ) ); 

        $wp_customize->selective_refresh->add_partial( 'grit_about_description', array(
                'selector'        => '#about-us-block .section-title  p',
                'render_callback' => 'grit_customize_partial_grit_about_description',
            ) ); 

        $wp_customize->selective_refresh->add_partial( 'grit_contact_header', array(
                'selector'        => '#home-contact-block  p',
                'render_callback' => 'grit_customize_partial_grit_contact_header',
            ) ); 
      
        $wp_customize->selective_refresh->add_partial( 'grit_work_header', array(
                'selector'        => '#our-work-block .section-title  h2',
                'render_callback' => 'grit_customize_partial_grit_work_header',
            ) ); 
      
        $wp_customize->selective_refresh->add_partial( 'grit_process_header', array(
                'selector'        => '#process-block  h2',
                'render_callback' => 'grit_customize_partial_grit_process_header',
            ) ); 
     
        $wp_customize->selective_refresh->add_partial( 'grit_latest_news_header', array(
                'selector'        => '#latest-news-block .section-title  h2',
                'render_callback' => 'grit_customize_partial_grit_latest_news_header',
            ) ); 
     
      
  }
    
/********* header intro **********/

        $wp_customize->add_section('grit_header', array(
            'title'                     => __('Header Intro', 'grit'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 100,

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

        $wp_customize->add_setting( 'grit_header_text', array(      
            'default'                   => 'Dcrazed says' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'grit_header_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'grit' ),
            'section'  					=> 'grit_header',
            'priority' 					=> 2,
        ) );
    

        $wp_customize->add_setting( 'grit_header_description', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'grit_header_description', array(
            'type'						=> 'textarea',
            'label' 					=> __( 'Description', 'grit' ),
            'section'  					=> 'grit_header',
            'priority' 					=> 3,
        ) );	
    
/********* about us **********/
        
        $wp_customize->add_section('grit_about_section', array(
            'title'                     => __('About Section', 'grit'),

            'priority'                  => 101,

        ));

       
        $wp_customize->add_setting( 'grit_about_header', array(      
            'default'                   => 'About us' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh', // refresh or postMessage              
        ) );    
    

        $wp_customize->add_control( 'grit_about_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'grit' ),
            'section'  					=> 'grit_about_section',
            'priority' 					=> 2,
        ) );
    
    
        $wp_customize->add_setting( 'grit_about_description', array(      
            'default'                   => '' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh', // refresh or postMessage              
        ) );    
    
        $wp_customize->add_control( 'grit_about_description', array(
            'type'						=> 'textarea',
            'label' 					=> __( 'Description', 'grit' ),
            'section'  					=> 'grit_about_section',
            'priority' 					=> 3,
        ) );
    

        $wp_customize->add_setting( 'grit_about_button_text', array(      
            'default'                   => 'Mission brief' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'grit_about_button_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Text', 'grit' ),
            'section'  					=> 'grit_about_section',
            'priority' 					=> 4,
        ) );	


        $wp_customize->add_setting( 'grit_about_button_url', array(      
            'default'                   => 'www.burstfly.com' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'grit_about_button_url', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Url', 'grit' ),
            'section'  					=> 'grit_about_section',
            'priority' 					=> 5
        ) );	  

/********* contact us **********/    
      
        $wp_customize->add_section('grit_contact_section', array(
            'title'                     => __('Contact Section', 'grit'),
            'priority'                  => 101,

        ));


        $wp_customize->add_setting( 'grit_contact_header', array(      
            'default'                   => 'Increase leads, build a professional website and be awesome..' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh', // refresh or postMessage              
        ) );    


        $wp_customize->add_control( 'grit_contact_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'grit' ),
            'section'  					=> 'grit_contact_section',
            'priority' 					=> 2,
        ) );

        $wp_customize->add_setting( 'grit_contact_button_text', array(      
            'default'                   => 'CONTACT US' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'grit_contact_button_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Text', 'grit' ),
            'section'  					=> 'grit_contact_section',
            'priority' 					=> 3,
        ) );	


        $wp_customize->add_setting( 'grit_contact_button_url', array(      
            'default'                   => 'www.burstfly.com' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'grit_contact_button_url', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Url', 'grit' ),
            'section'  					=> 'grit_contact_section',
            'priority' 					=> 5
        ) );	  

/********* our work **********/    
      
        $wp_customize->add_section('grit_work_section', array(
            'title'                     => __('Work Section', 'grit'),
            'priority'                  => 104,

        ));
    
        $wp_customize->add_setting( 'grit_work_header', array(      
            'default'                   => 'Our work' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh', // refresh or postMessage              
        ) );    


        $wp_customize->add_control( 'grit_work_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'grit' ),
            'section'  					=> 'grit_work_section',
            'priority' 					=> 2,
        ) );
    

    
    

/********* process block **********/    
      
        $wp_customize->add_section('grit_process_section', array(
            'title'                     => __('Process Section', 'grit'),
            'priority'                  => 104,

        ));
    
        $wp_customize->add_setting( 'grit_process_header', array(      
            'default'                   => 'The process' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh', // refresh or postMessage              
        ) );    


        $wp_customize->add_control( 'grit_process_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'grit' ),
            'section'  					=> 'grit_process_section',
            'priority' 					=> 2,
        ) );
    
/********* Counter section **********/   

        $wp_customize->add_section('grit_counter_section', array(
            'title'                     => __('Counter Section', 'grit'),
            'priority'                  => 105,

        ));

        $wp_customize->add_setting( 'grit_counter_setting', 
               array(               
                   'sanitize_callback' => 'grit_sanitize_repeatable_data_field',
                    'transport' => 'refresh', // refresh or postMessage

               ) );    


        $wp_customize->add_control(
                new Grit_Customize_Repeatable_Control(
                    $wp_customize,
                    'grit_counter_setting',
                    array(
                        'label'     => esc_html__('Counter Sections', 'grit'),
                        'description'   => 'Add upto 4 service blocks',
                        'section'       => 'grit_counter_section',
                        //'live_title_id' => 'user_id', // apply for unput text and textarea only
                        'title_format'  => esc_html__( '[live_title]', 'grit'), // [live_title]
                        'max_item'      => 4, // Maximum item can add
                        'limited_msg' 	=> wp_kses_post( 'Contact us through our Support Forum if you need more.', 'grit' ),
                        'fields'    => array(

                         'icon_type'  => array(
                            'title' => esc_html__('Custom icon', 'grit'),
                            'type'  =>'select',
                            'options' => array(
                                'icon' => esc_html__('Icon', 'grit'),
                                'image' => esc_html__('image', 'grit'),
                            ),
                        ),

                        'icon'  => array(
                            'title' => esc_html__('Icon', 'grit'),
                            'type'  =>'icon',
                            'required' => array( 'icon_type', '=', 'icon' ),
                        ),

                        'image'  => array(
                            'title' => esc_html__('Image', 'grit'),
                            'type'  =>'media',
                            'required' => array( 'icon_type', '=', 'image' ),
                        ),

                             'count' => array(
                                'title' => esc_html__('Count', 'grit'),
                                'type'  =>'text',
                                'default' => wp_kses_post('455', 'grit'),
                            ),


                             'title' => array(
                                'title' => esc_html__('Title', 'grit'),
                                'type'  =>'text',
                                'default' => wp_kses_post('CLIENTS'),
                            ),
                        ),

                    )
                )
            );


/********* Latest news section **********/   

        $wp_customize->add_section('grit_latest_news_section', array(
            'title'                     => __('Latest News Section', 'grit'),
            'priority'                  => 106,

        ));
    
        $wp_customize->add_setting( 'grit_latest_news_header', array(      
            'default'                   => 'Latest news' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh', // refresh or postMessage              
        ) );    


        $wp_customize->add_control( 'grit_latest_news_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'grit' ),
            'section'  					=> 'grit_latest_news_section',
            'priority' 					=> 2,
        ) );

        $wp_customize->add_setting( 'grit_latest_news_button_text', array(      
            'default'                   => 'SEE THE BLOG' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'grit_latest_news_button_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Text', 'grit' ),
            'section'  					=> 'grit_latest_news_section',
            'priority' 					=> 3,
        ) );	


        $wp_customize->add_setting( 'grit_latest_news_button_url', array(      
            'default'                   => 'www.burstfly.com' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'grit_latest_news_button_url', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Url', 'grit' ),
            'section'  					=> 'grit_latest_news_section',
            'priority' 					=> 5
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

function grit_customize_partial_header_text() {
    echo get_theme_mod('grit_header_text');
}

function grit_customize_partial_grit_about_header() {
    bloginfo('grit_about_header');
}

function grit_customize_partial_grit_about_description() {
    bloginfo('grit_about_description');
}

function grit_customize_partial_grit_contact_header() {
    bloginfo('grit_contact_header');
}

function grit_customize_partial_grit_work_header() {
    bloginfo('grit_work_header');
}

function grit_customize_partial_grit_process_header() {
    bloginfo('grit_process_header');
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function grit_customize_preview_js() {
	wp_enqueue_script( 'grit-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'grit_customize_preview_js' );




