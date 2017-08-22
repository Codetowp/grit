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
    
    $pages  =  get_pages();
	$option_pages = array();
	$option_pages[0] = esc_html__( 'Select page', 'grit' );
	foreach( $pages as $p ){
		$option_pages[ $p->ID ] = $p->post_title;
	}
    
    
    require get_template_directory() . '/inc/lib/fo-to-range.php';
    require get_template_directory() . '/inc/lib/theme-info.php';   

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
        //$wp_customize->remove_section('header_image');
        $wp_customize->remove_section('background_image');

        $wp_customize->get_section('title_tagline')->title = __( 'Branding' );
        $wp_customize->get_section('header_image')->title = __( 'Blog Settings' );  
    
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
                'selector'        => '#about-us-block .section-title h2',
                'render_callback' => 'grit_customize_partial_about_header',
            ) ); 

        $wp_customize->selective_refresh->add_partial( 'grit_about_description', array(
                'selector'        => '#about-us-block .section-title  p',
                'render_callback' => 'grit_customize_partial_about_description',
            ) ); 

        $wp_customize->selective_refresh->add_partial( 'grit_contact_header', array(
                'selector'        => '#home-contact-block  p',
                'render_callback' => 'grit_customize_partial_contact_header',
            ) ); 
      
        $wp_customize->selective_refresh->add_partial( 'grit_work_header', array(
                'selector'        => '#our-work-block .section-title  h2',
                'render_callback' => 'grit_customize_partial_work_header',
            ) ); 

        $wp_customize->selective_refresh->add_partial( 'grit_about_header', array(
                'selector'        => '#about-us-block h2',
                'render_callback' => 'grit_customize_partial_about_header',
            ) ); 

        $wp_customize->selective_refresh->add_partial( 'grit_about_description', array(
                'selector'        => '#about-us-block .section-title  p',
                'render_callback' => 'grit_customize_partial_about_description',
            ) ); 

        $wp_customize->selective_refresh->add_partial( 'grit_contact_header', array(
                'selector'        => '#home-contact-block  p',
                'render_callback' => 'grit_customize_partial_contact_header',
            ) ); 
      
        $wp_customize->selective_refresh->add_partial( 'grit_work_header', array(
                'selector'        => '#our-work-block .section-title  h2',
                'render_callback' => 'grit_customize_partial_work_header',
            ) ); 
      
        $wp_customize->selective_refresh->add_partial( 'grit_process_header', array(
                'selector'        => '#process-block .section-title h2',
                'render_callback' => 'grit_customize_partial_process_header',
            ) ); 
      
        $wp_customize->selective_refresh->add_partial( 'grit_latest_news_header', array(
                'selector'        => '#latest-news-block .section-title h2',
                'render_callback' => 'grit_customize_partial_latest_news_header',
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
            'transport'                 => 'postMessage',               
        ) );    

        $wp_customize->add_control( 'grit_header_description', array(
            'type'						=> 'textarea',
            'label' 					=> __( 'Description', 'grit' ),
            'section'  					=> 'grit_header',
            'priority' 					=> 3,
        ) );	

        $wp_customize->add_setting( 'grit_header_background_color', array(
            'default'                   => '#ff4a5d', 
            'transport'                 => 'postMessage', 
            'sanitize_callback'         => 'sanitize_hex_color', 
        ) );
    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'grit_header_background_color', array(
            'label'                     => esc_attr__( 'Background Color', 'grit' ),
            'description'               => esc_attr__( 'Add a background ocolor', 'grit' ),
            'section'                   => 'grit_header',
            'priority' 					=> 4,
        ) ) );

        $wp_customize->add_setting( 'grit_transparnt', array( 
           'default'                    => __( '0.7', 'grit' ),
           'transport'                  => 'postMessage',
           'sanitize_callback'          => 'sanitize_text_field',
         ) );
        $wp_customize->add_control( 'grit_transparnt', array(
            'type'                      => 'text',
            'section'                   => 'grit_header',
            'label'                     => esc_attr__( "Background Transparency", 'grit' ),
            'description'               => esc_attr__( 'Change the opacity of the above background color.', 'grit' ),
            'priority' 					=> 5,
            ) );


/********* about us **********/
        
        $wp_customize->add_section('grit_about_section', array(
            'title'                     => __('About Section', 'grit'),

            'priority'                  => 101,

        ));

       
        $wp_customize->add_setting( 'grit_about_header', array(      
            'default'                   => 'About us' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    
    

        $wp_customize->add_control( 'grit_about_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'grit' ),
            'section'  					=> 'grit_about_section',
            'priority' 					=> 2,
        ) );
    
    
        $wp_customize->add_setting( 'grit_about_description', array(      
            'default'                   => 'Creating websites from the web Studio "Ui Team" as a tool for business starts   with Analytics. Goals and the ways to achieve them are defined. The goal is to encourage visitors to use the service or to buy goods in your company instead of the competitor.' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
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
    
    
         // Dropdown pages control
    
    $wp_customize->add_setting(
			'grit_about_boxes',
			array(
				//'default' => '',
				'sanitize_callback' => 'grit_sanitize_repeatable_data_field',
				'transport' => 'refresh', // refresh or postMessage
			) );


			$wp_customize->add_control(
				new Grit_Customize_Repeatable_Control(
					$wp_customize,
					'grit_about_boxes',
					array(
						'label' 		=> esc_html__('About content page', 'grit'),
						'description'   => '',
						'section'       => 'grit_about_section',
						'live_title_id' => 'content_page', // apply for unput text and textarea only
						'title_format'  => esc_html__('[live_title]', 'grit'), // [live_title]
						'max_item'      => 4, // Maximum item can add
                       /* 'limited_msg' 	=> wp_kses_post( 'Upgrade to <a target="_blank" href="https://www.famethemes.com/plugins/onepress-plus/?utm_source=theme_customizer&utm_medium=text_link&utm_campaign=onepress_customizer#get-started">OnePress Plus</a> to be able to add more items and unlock other premium features!', 'grit' ),*/
						//'allow_unlimited' => false, // Maximum item can add
                            
						'fields'    => array(
							'content_page'  => array(
								'title' => esc_html__('Select a page', 'grit'),
								'type'  =>'select',
								'options' => $option_pages
							),
                            'icon'  => array(
                                'title' => esc_html__('Icon', 'grit'),
                                'type'  =>'icon',
                                'required' => array( 'icon_type', '=', 'icon' ),
                            ),
                     
						),

					)
				)
			);
    /*
    
    
/********* contact us **********/    
      
        $wp_customize->add_section('grit_contact_section', array(
            'title'                     => __('Contact Section', 'grit'),
            'priority'                  => 101,

        ));


        $wp_customize->add_setting( 'grit_contact_header', array(      
            'default'                   => 'Increase leads, build a professional website and be awesome..' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
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
            'title'                     => __('Portfolio Section', 'grit'),
            'priority'                  => 104,

        ));
    
        $wp_customize->add_setting( 'grit_work_header', array(      
            'default'                   => 'Our work' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    


        $wp_customize->add_control( 'grit_work_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'grit' ),
            'section'  					=> 'grit_work_section',
            'priority' 					=> 2,
        ) );

        $wp_customize->add_setting( 'grit_work_button_text', array(      
            'default'                   => 'GO TO PORTFOLIO' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'grit_work_button_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Text', 'grit' ),
            'section'  					=> 'grit_work_section',
            'priority' 					=> 3,
        ) );	


        $wp_customize->add_setting( 'grit_work_button_url', array(      
            'default'                   => 'www.burstfly.com' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage',               
        ) );    

        $wp_customize->add_control( 'grit_work_button_url', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Url', 'grit' ),
            'section'  					=> 'grit_work_section',
            'priority' 					=> 5
        ) );	
    
       $wp_customize->add_setting( 'grit_work_portfolio_count', array(
            'default'                   => '6',
            'sanitize_callback'         => 'grit_sanitize_integer'
            )
        );
        $wp_customize->add_control( 'grit_work_portfolio_count', array(
            'type'                      => 'integer',
            'label'                     => __('Number Of Blog To Show - i.e 10 (default is 6)','grit'),
            'section'                   => 'grit_work_section',

            )
        );
            
     $wp_customize->add_setting( 'grit_portfolio_bck_ground_image', array(
            'default'                   => '',
            'type'                      => 'theme_mod',
            'capability'                => 'edit_theme_options',
            'sanitize_callback'         => 'esc_url_raw',
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,'grit_portfolio_bck_ground_image', array(
            'label'                     => __( 'Portfolio Page Background Image', '' ),
            'section'                   => 'grit_work_section',
            'settings'                  => 'grit_portfolio_bck_ground_image',
            'context'                   => 'grit_portfolio_bck_ground_image',
            'priority'                  => 1,
            ) 
        ) );
    
    
/********* process block **********/    
      
        $wp_customize->add_section('grit_process_section', array(
            'title'                     => __('Process Section', 'grit'),
            'priority'                  => 104,

        ));
    
        $wp_customize->add_setting( 'grit_process_header', array(      
            'default'                   => 'The process' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    


        $wp_customize->add_control( 'grit_process_header', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'grit' ),
            'section'  					=> 'grit_process_section',
            'priority' 					=> 2,
        ) );
    
    
        // Dropdown pages control
    
        $wp_customize->add_setting(
			'grit_process_boxes',
			array(
				//'default' => '',
				'sanitize_callback' => 'grit_sanitize_repeatable_data_field',
				'transport' => 'refresh', // refresh or postMessage
			) );


			$wp_customize->add_control(
				new Grit_Customize_Repeatable_Control(
					$wp_customize,
					'grit_process_boxes',
					array(
						'label' 		=> esc_html__('process content page', 'grit'),
						'description'   => '',
						'section'       => 'grit_process_section',
						'live_title_id' => 'content_page', // apply for unput text and textarea only
						'title_format'  => esc_html__('[live_title]', 'grit'), // [live_title]
						'max_item'      => 4, // Maximum item can add
                       /* 'limited_msg' 	=> wp_kses_post( 'Upgrade to <a target="_blank" href="https://www.famethemes.com/plugins/onepress-plus/?utm_source=theme_customizer&utm_medium=text_link&utm_campaign=onepress_customizer#get-started">OnePress Plus</a> to be able to add more items and unlock other premium features!', 'grit' ),*/
						//'allow_unlimited' => false, // Maximum item can add
                            
						'fields'    => array(
							'content_page'  => array(
								'title' => esc_html__('Select a page', 'grit'),
								'type'  =>'select',
								'options' => $option_pages
							),
                            'icon'  => array(
                                'title' => esc_html__('Icon', 'grit'),
                                'type'  =>'icon',
                                'required' => array( 'icon_type', '=', 'icon' ),
                            ),
                            'title' => array(
                                'title' => esc_html__('Title', 'grit'),
                                'type'  =>'text',
                                'default' => wp_kses_post('Creating', 'grit'),
                            ),
						),

					)
				)
			);
    /*
    
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

        $wp_customize->add_setting( 'grit_counter_bck_ground_image', array(
            'default'                   => '',
            'type'                      => 'theme_mod',
            'capability'                => 'edit_theme_options',
            'sanitize_callback'         => 'esc_url_raw',
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,'grit_counter_bck_ground_image', array(
            'label'                     => __( 'Background Image', '' ),
            'section'                   => 'grit_counter_section',
            'settings'                  => 'grit_counter_bck_ground_image',
            'context'                   => 'grit_counter_bck_ground_image',
            'priority'                  => 20,
            ) 
        ) );

        $wp_customize->add_setting( 'grit_counter_background_color', array(
            'default'                   => '#ff4a5d', 
            'transport'                 => 'refresh', 
            'sanitize_callback'         => 'sanitize_hex_color', 
        ) );
    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'grit_counter_background_color', array(
            'label'                     => esc_attr__( 'Background Color', 'grit' ),
            'description'               => esc_attr__( 'Add a background ocolor', 'grit' ),
            'section'                   => 'grit_counter_section',
            'priority' 					=> 21,
        ) ) );
    
        $wp_customize->add_setting( 'grit_counter_transparnt', array( 
           'default'                    => __( '0.7', 'grit' ),
           'transport'                  => 'refresh',
           'sanitize_callback'          => 'sanitize_text_field',
         ) );
        $wp_customize->add_control( 'grit_counter_transparnt', array(
            'type'                      => 'text',
            'section'                   => 'grit_counter_section',
            'label'                     => esc_attr__( "Background Transparency", 'grit' ),
            'description'               => esc_attr__( 'Change the opacity of the above background color.', 'grit' ),
            'priority' 					=> 25,
            ) );
    
 /********* Testimonial page **********/   

        $wp_customize->add_section('grit_testimonial_section', array(
            'title'                     => __('Testimonial Section', 'grit'),
            'priority'                  => 107,

        ));
    
        $wp_customize->add_setting( 'grit_testimonial_bck_ground_image', array(
            'default'                   => '',
            'type'                      => 'theme_mod',
            'capability'                => 'edit_theme_options',
            'sanitize_callback'         => 'esc_url_raw',
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,'grit_testimonial_bck_ground_image', array(
            'label'                     => __( 'testimonial Page Background Image', '' ),
            'section'                   => 'grit_testimonial_section',
            'settings'                  => 'grit_testimonial_bck_ground_image',
            'context'                   => 'grit_testimonial_bck_ground_image',
            'priority'                  => 1,
            ) 
        ) );    
    
      $wp_customize->add_setting( 'grit_testimonial_count', array(
            'default'                   => '3',
            'sanitize_callback'         => 'grit_sanitize_integer'
            )
        );
        $wp_customize->add_control( 'grit_testimonial_count', array(
            'type'                      => 'integer',
            'label'                     => __('Number Of Testimonial To Show - i.e 10 (default is 3)','grit'),
            'section'                   => 'grit_testimonial_section',

            )
        );
      
    
/********* Latest news section **********/   

        $wp_customize->add_section('grit_latest_news_section', array(
            'title'                     => __('Latest News Section', 'grit'),
            'priority'                  => 108,

        ));
    
        $wp_customize->add_setting( 'grit_latest_news_header', array(      
            'default'                   => 'Latest news' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
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

        $wp_customize->add_setting( 'grit_blog_post_count', array(
            'default'                   => '4',
            'sanitize_callback'         => 'grit_sanitize_integer'
            )
        );
        $wp_customize->add_control( 'grit_blog_post_count', array(
            'type'                      => 'integer',
            'label'                     => __('Number Of Blog To Show - i.e 10 (default is 4)','grit'),
            'section'                   => 'grit_latest_news_section',

            )
        );
 

=======
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,'grit_portfolio_bck_ground_image', array(
            'label'                     => __( 'Background Image', '' ),
            'section'                   => 'grit_portfolio_section',
            'settings'                  => 'grit_portfolio_bck_ground_image',
            'context'                   => 'grit_portfolio_bck_ground_image',
            'priority'                  => 1,
            ) 
        ) );

/********* Testimonial page **********/   

        $wp_customize->add_section('grit_testimonial_section', array(
            'title'                     => __('blogPage', 'grit'),
            'priority'                  => 108,

        ));
    
        $wp_customize->add_setting( 'grit_testimonial_bck_ground_image', array(
            'default'                   => '',
            'type'                      => 'theme_mod',
            'capability'                => 'edit_theme_options',
            'sanitize_callback'         => 'esc_url_raw',
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,'grit_testimonial_bck_ground_image', array(
            'label'                     => __( 'Background Image', '' ),
            'section'                   => 'grit_testimonial_section',
            'settings'                  => 'grit_testimonial_bck_ground_image',
            'context'                   => 'grit_testimonial_bck_ground_image',
            'priority'                  => 1,
            ) 
        ) );    
    
/******************fonts*****************/

        $wp_customize->add_section('grit_font', array(
                'title'                     => __('Font', 'grit'),
                'description'               => 'Easily edit your body section',
                'priority'                  => 109,

        ));
    
    
        /*** paragraph ****/
    
        $font_choices = customizer_library_get_font_choices();

        $wp_customize->add_setting( 'grit_paragraph_font', array(
            'default'        => 'Open Sans',
        ) );

        $wp_customize->add_control( 'grit_paragraph_font', array(
            'label'   => 'Grit Paragragh Font Family',
            'section' => 'grit_font',
            'type'    => 'select',
            'choices' => $font_choices,
            'priority' => 1,
            ));
    
        $wp_customize->add_setting( 'grit_paragraph_font_color', 
                array(
                    'default' => '#9C9C9C', 
                    'transport' => 'refresh', 
                    'sanitize_callback' => 'sanitize_hex_color', 
                ) );
         $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'grit_paragraph_font_color', 
               array(
                'label'      => esc_attr__( 'Paragraph Font Color', 'grit' ),
                'section'    => 'grit_font',
                   'priority'   => 2,
            ) ) );    


    

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

function grit_customize_partial_header_description() {
    echo get_theme_mod('grit_header_description');
}

function grit_customize_partial_about_header() {
    echo get_theme_mod('grit_about_header');
}

function grit_customize_partial_about_description() {
     echo get_theme_mod('grit_about_description');
}

function grit_customize_partial_contact_header() {
    echo get_theme_mod('grit_contact_header');
}

function grit_customize_partial_work_header() {
    echo get_theme_mod('grit_work_header');
}

function grit_customize_partial_process_header() {
    echo get_theme_mod('grit_process_header');
}
    
function grit_customize_partial_latest_news_header() {
    echo get_theme_mod('grit_latest_news_header');
}  

function grit_sanitize_integer( $input ) {
    	if( is_numeric( $input ) ) {
        return intval( $input );
   	}
	}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function grit_customize_preview_js() {
	wp_enqueue_script( 'grit-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'grit_customize_preview_js' );



/**
 * Customizer Icon picker
 */
function grit_customize_controls_enqueue_scripts(){
    wp_localize_script( 'customize-controls', 'C_Icon_Picker',
        apply_filters( 'c_icon_picker_js_setup',
            array(
                'search'    => esc_html__( 'Search', 'grit' ),
                'fonts' => array(
                    'font-awesome' => array(
                        // Name of icon
                        'name' => esc_html__( 'Font Awesome', 'grit' ),
                        // prefix class example for font-awesome fa-fa-{name}
                        'prefix' => 'fa',
                        // font url
                        'url' => esc_url( add_query_arg( array( 'ver'=> '4.7.0' ), get_template_directory_uri() .'/css/font-awesome.min.css' ) ),
                        // Icon class name, separated by |
                        'icons' => 'fa-glass|fa-music|fa-search|fa-envelope-o|fa-heart|fa-star|fa-star-o|fa-user|fa-film|fa-th-large|fa-th|fa-th-list|fa-check|fa-times|fa-search-plus|fa-search-minus|fa-power-off|fa-signal|fa-cog|fa-trash-o|fa-home|fa-file-o|fa-clock-o|fa-road|fa-download|fa-arrow-circle-o-down|fa-arrow-circle-o-up|fa-inbox|fa-play-circle-o|fa-repeat|fa-refresh|fa-list-alt|fa-lock|fa-flag|fa-headphones|fa-volume-off|fa-volume-down|fa-volume-up|fa-qrcode|fa-barcode|fa-tag|fa-tags|fa-book|fa-bookmark|fa-print|fa-camera|fa-font|fa-bold|fa-italic|fa-text-height|fa-text-width|fa-align-left|fa-align-center|fa-align-right|fa-align-justify|fa-list|fa-outdent|fa-indent|fa-video-camera|fa-picture-o|fa-pencil|fa-map-marker|fa-adjust|fa-tint|fa-pencil-square-o|fa-share-square-o|fa-check-square-o|fa-arrows|fa-step-backward|fa-fast-backward|fa-backward|fa-play|fa-pause|fa-stop|fa-forward|fa-fast-forward|fa-step-forward|fa-eject|fa-chevron-left|fa-chevron-right|fa-plus-circle|fa-minus-circle|fa-times-circle|fa-check-circle|fa-question-circle|fa-info-circle|fa-crosshairs|fa-times-circle-o|fa-check-circle-o|fa-ban|fa-arrow-left|fa-arrow-right|fa-arrow-up|fa-arrow-down|fa-share|fa-expand|fa-compress|fa-plus|fa-minus|fa-asterisk|fa-exclamation-circle|fa-gift|fa-leaf|fa-fire|fa-eye|fa-eye-slash|fa-exclamation-triangle|fa-plane|fa-calendar|fa-random|fa-comment|fa-magnet|fa-chevron-up|fa-chevron-down|fa-retweet|fa-shopping-cart|fa-folder|fa-folder-open|fa-arrows-v|fa-arrows-h|fa-bar-chart|fa-twitter-square|fa-facebook-square|fa-camera-retro|fa-key|fa-cogs|fa-comments|fa-thumbs-o-up|fa-thumbs-o-down|fa-star-half|fa-heart-o|fa-sign-out|fa-linkedin-square|fa-thumb-tack|fa-external-link|fa-sign-in|fa-trophy|fa-github-square|fa-upload|fa-lemon-o|fa-phone|fa-square-o|fa-bookmark-o|fa-phone-square|fa-twitter|fa-facebook|fa-github|fa-unlock|fa-credit-card|fa-rss|fa-hdd-o|fa-bullhorn|fa-bell|fa-certificate|fa-hand-o-right|fa-hand-o-left|fa-hand-o-up|fa-hand-o-down|fa-arrow-circle-left|fa-arrow-circle-right|fa-arrow-circle-up|fa-arrow-circle-down|fa-globe|fa-wrench|fa-tasks|fa-filter|fa-briefcase|fa-arrows-alt|fa-users|fa-link|fa-cloud|fa-flask|fa-scissors|fa-files-o|fa-paperclip|fa-floppy-o|fa-square|fa-bars|fa-list-ul|fa-list-ol|fa-strikethrough|fa-underline|fa-table|fa-magic|fa-truck|fa-pinterest|fa-pinterest-square|fa-google-plus-square|fa-google-plus|fa-money|fa-caret-down|fa-caret-up|fa-caret-left|fa-caret-right|fa-columns|fa-sort|fa-sort-desc|fa-sort-asc|fa-envelope|fa-linkedin|fa-undo|fa-gavel|fa-tachometer|fa-comment-o|fa-comments-o|fa-bolt|fa-sitemap|fa-umbrella|fa-clipboard|fa-lightbulb-o|fa-exchange|fa-cloud-download|fa-cloud-upload|fa-user-md|fa-stethoscope|fa-suitcase|fa-bell-o|fa-coffee|fa-cutlery|fa-file-text-o|fa-building-o|fa-hospital-o|fa-ambulance|fa-medkit|fa-fighter-jet|fa-beer|fa-h-square|fa-plus-square|fa-angle-double-left|fa-angle-double-right|fa-angle-double-up|fa-angle-double-down|fa-angle-left|fa-angle-right|fa-angle-up|fa-angle-down|fa-desktop|fa-laptop|fa-tablet|fa-mobile|fa-circle-o|fa-quote-left|fa-quote-right|fa-spinner|fa-circle|fa-reply|fa-github-alt|fa-folder-o|fa-folder-open-o|fa-smile-o|fa-frown-o|fa-meh-o|fa-gamepad|fa-keyboard-o|fa-flag-o|fa-flag-checkered|fa-terminal|fa-code|fa-reply-all|fa-star-half-o|fa-location-arrow|fa-crop|fa-code-fork|fa-chain-broken|fa-question|fa-info|fa-exclamation|fa-superscript|fa-subscript|fa-eraser|fa-puzzle-piece|fa-microphone|fa-microphone-slash|fa-shield|fa-calendar-o|fa-fire-extinguisher|fa-rocket|fa-maxcdn|fa-chevron-circle-left|fa-chevron-circle-right|fa-chevron-circle-up|fa-chevron-circle-down|fa-html5|fa-css3|fa-anchor|fa-unlock-alt|fa-bullseye|fa-ellipsis-h|fa-ellipsis-v|fa-rss-square|fa-play-circle|fa-ticket|fa-minus-square|fa-minus-square-o|fa-level-up|fa-level-down|fa-check-square|fa-pencil-square|fa-external-link-square|fa-share-square|fa-compass|fa-caret-square-o-down|fa-caret-square-o-up|fa-caret-square-o-right|fa-eur|fa-gbp|fa-usd|fa-inr|fa-jpy|fa-rub|fa-krw|fa-btc|fa-file|fa-file-text|fa-sort-alpha-asc|fa-sort-alpha-desc|fa-sort-amount-asc|fa-sort-amount-desc|fa-sort-numeric-asc|fa-sort-numeric-desc|fa-thumbs-up|fa-thumbs-down|fa-youtube-square|fa-youtube|fa-xing|fa-xing-square|fa-youtube-play|fa-dropbox|fa-stack-overflow|fa-instagram|fa-flickr|fa-adn|fa-bitbucket|fa-bitbucket-square|fa-tumblr|fa-tumblr-square|fa-long-arrow-down|fa-long-arrow-up|fa-long-arrow-left|fa-long-arrow-right|fa-apple|fa-windows|fa-android|fa-linux|fa-dribbble|fa-skype|fa-foursquare|fa-trello|fa-female|fa-male|fa-gratipay|fa-sun-o|fa-moon-o|fa-archive|fa-bug|fa-vk|fa-weibo|fa-renren|fa-pagelines|fa-stack-exchange|fa-arrow-circle-o-right|fa-arrow-circle-o-left|fa-caret-square-o-left|fa-dot-circle-o|fa-wheelchair|fa-vimeo-square|fa-try|fa-plus-square-o|fa-space-shuttle|fa-slack|fa-envelope-square|fa-wordpress|fa-openid|fa-university|fa-graduation-cap|fa-yahoo|fa-google|fa-reddit|fa-reddit-square|fa-stumbleupon-circle|fa-stumbleupon|fa-delicious|fa-digg|fa-pied-piper-pp|fa-pied-piper-alt|fa-drupal|fa-joomla|fa-language|fa-fax|fa-building|fa-child|fa-paw|fa-spoon|fa-cube|fa-cubes|fa-behance|fa-behance-square|fa-steam|fa-steam-square|fa-recycle|fa-car|fa-taxi|fa-tree|fa-spotify|fa-deviantart|fa-soundcloud|fa-database|fa-file-pdf-o|fa-file-word-o|fa-file-excel-o|fa-file-powerpoint-o|fa-file-image-o|fa-file-archive-o|fa-file-audio-o|fa-file-video-o|fa-file-code-o|fa-vine|fa-codepen|fa-jsfiddle|fa-life-ring|fa-circle-o-notch|fa-rebel|fa-empire|fa-git-square|fa-git|fa-hacker-news|fa-tencent-weibo|fa-qq|fa-weixin|fa-paper-plane|fa-paper-plane-o|fa-history|fa-circle-thin|fa-header|fa-paragraph|fa-sliders|fa-share-alt|fa-share-alt-square|fa-bomb|fa-futbol-o|fa-tty|fa-binoculars|fa-plug|fa-slideshare|fa-twitch|fa-yelp|fa-newspaper-o|fa-wifi|fa-calculator|fa-paypal|fa-google-wallet|fa-cc-visa|fa-cc-mastercard|fa-cc-discover|fa-cc-amex|fa-cc-paypal|fa-cc-stripe|fa-bell-slash|fa-bell-slash-o|fa-trash|fa-copyright|fa-at|fa-eyedropper|fa-paint-brush|fa-birthday-cake|fa-area-chart|fa-pie-chart|fa-line-chart|fa-lastfm|fa-lastfm-square|fa-toggle-off|fa-toggle-on|fa-bicycle|fa-bus|fa-ioxhost|fa-angellist|fa-cc|fa-ils|fa-meanpath|fa-buysellads|fa-connectdevelop|fa-dashcube|fa-forumbee|fa-leanpub|fa-sellsy|fa-shirtsinbulk|fa-simplybuilt|fa-skyatlas|fa-cart-plus|fa-cart-arrow-down|fa-diamond|fa-ship|fa-user-secret|fa-motorcycle|fa-street-view|fa-heartbeat|fa-venus|fa-mars|fa-mercury|fa-transgender|fa-transgender-alt|fa-venus-double|fa-mars-double|fa-venus-mars|fa-mars-stroke|fa-mars-stroke-v|fa-mars-stroke-h|fa-neuter|fa-genderless|fa-facebook-official|fa-pinterest-p|fa-whatsapp|fa-server|fa-user-plus|fa-user-times|fa-bed|fa-viacoin|fa-train|fa-subway|fa-medium|fa-y-combinator|fa-optin-monster|fa-opencart|fa-expeditedssl|fa-battery-full|fa-battery-three-quarters|fa-battery-half|fa-battery-quarter|fa-battery-empty|fa-mouse-pointer|fa-i-cursor|fa-object-group|fa-object-ungroup|fa-sticky-note|fa-sticky-note-o|fa-cc-jcb|fa-cc-diners-club|fa-clone|fa-balance-scale|fa-hourglass-o|fa-hourglass-start|fa-hourglass-half|fa-hourglass-end|fa-hourglass|fa-hand-rock-o|fa-hand-paper-o|fa-hand-scissors-o|fa-hand-lizard-o|fa-hand-spock-o|fa-hand-pointer-o|fa-hand-peace-o|fa-trademark|fa-registered|fa-creative-commons|fa-gg|fa-gg-circle|fa-tripadvisor|fa-odnoklassniki|fa-odnoklassniki-square|fa-get-pocket|fa-wikipedia-w|fa-safari|fa-chrome|fa-firefox|fa-opera|fa-internet-explorer|fa-television|fa-contao|fa-500px|fa-amazon|fa-calendar-plus-o|fa-calendar-minus-o|fa-calendar-times-o|fa-calendar-check-o|fa-industry|fa-map-pin|fa-map-signs|fa-map-o|fa-map|fa-commenting|fa-commenting-o|fa-houzz|fa-vimeo|fa-black-tie|fa-fonticons|fa-reddit-alien|fa-edge|fa-credit-card-alt|fa-codiepie|fa-modx|fa-fort-awesome|fa-usb|fa-product-hunt|fa-mixcloud|fa-scribd|fa-pause-circle|fa-pause-circle-o|fa-stop-circle|fa-stop-circle-o|fa-shopping-bag|fa-shopping-basket|fa-hashtag|fa-bluetooth|fa-bluetooth-b|fa-percent|fa-gitlab|fa-wpbeginner|fa-wpforms|fa-envira|fa-universal-access|fa-wheelchair-alt|fa-question-circle-o|fa-blind|fa-audio-description|fa-volume-control-phone|fa-braille|fa-assistive-listening-systems|fa-american-sign-language-interpreting|fa-deaf|fa-glide|fa-glide-g|fa-sign-language|fa-low-vision|fa-viadeo|fa-viadeo-square|fa-snapchat|fa-snapchat-ghost|fa-snapchat-square|fa-pied-piper|fa-first-order|fa-yoast|fa-themeisle|fa-google-plus-official|fa-font-awesome|fa-handshake-o|fa-envelope-open|fa-envelope-open-o|fa-linode|fa-address-book|fa-address-book-o|fa-address-card|fa-address-card-o|fa-user-circle|fa-user-circle-o|fa-user-o|fa-id-badge|fa-id-card|fa-id-card-o|fa-quora|fa-free-code-camp|fa-telegram|fa-thermometer-full|fa-thermometer-three-quarters|fa-thermometer-half|fa-thermometer-quarter|fa-thermometer-empty|fa-shower|fa-bath|fa-podcast|fa-window-maximize|fa-window-minimize|fa-window-restore|fa-window-close|fa-window-close-o|fa-bandcamp|fa-grav|fa-etsy|fa-imdb|fa-ravelry|fa-eercast|fa-microchip|fa-snowflake-o|fa-superpowers|fa-wpexplorer|fa-meetup'

                        ),
                )

            )
        )
    );
}

add_action( 'customize_controls_enqueue_scripts', 'grit_customize_controls_enqueue_scripts' );



