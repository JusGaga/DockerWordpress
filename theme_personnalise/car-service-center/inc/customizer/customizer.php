<?php
/**
 * Car Service Center Theme Customizer
 *
 * @package Car Service Center
 */

/**
 * Provide postMessage support for the Theme Customizer's site title and description.
 */
function car_service_center_customize_register( $wp_customize ) {

	// Header Option

	$wp_customize->add_section(
		'car_service_center_header_section',
		array(
			'title'    => esc_html__( 'Header Option', 'car-service-center' ),
		)
	);

	$wp_customize->add_setting(
        'car_service_center_phone_number',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'car_service_center_phone_number',
        array(
            'label'           => sprintf( esc_html__( 'Add Phone Number', 'car-service-center' ), ),
            'section'         => 'car_service_center_header_section',
            'settings'        => 'car_service_center_phone_number' ,
            'type'            => 'text',
        )
    );

	$wp_customize->add_setting(
        'car_service_center_email_address',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'car_service_center_email_address',
        array(
            'label'           => sprintf( esc_html__( 'Add Email Address', 'car-service-center' ), ),
            'section'         => 'car_service_center_header_section',
            'settings'        => 'car_service_center_email_address' ,
            'type'            => 'text',
        )
    );

	// Social Option

	$wp_customize->add_section(
		'car_service_center_social_section',
		array(
			'title'    => esc_html__( 'Social Option', 'car-service-center' ),
		)
	);

    $wp_customize->add_setting(
        'car_service_center_facebook_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'car_service_center_facebook_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Facebook Link', 'car-service-center' ), ),
            'section'         => 'car_service_center_social_section',
            'settings'        => 'car_service_center_facebook_url' ,
            'type'            => 'url',
        )
    );

	$wp_customize->add_setting(
        'car_service_center_twitter_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'car_service_center_twitter_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Twitter Link', 'car-service-center' ), ),
            'section'         => 'car_service_center_social_section',
            'settings'        => 'car_service_center_twitter_url' ,
            'type'            => 'url',
        )
    );

    $wp_customize->add_setting(
        'car_service_center_instagram_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'car_service_center_instagram_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Instagram Link', 'car-service-center' ), ),
            'section'         => 'car_service_center_social_section',
            'settings'        => 'car_service_center_instagram_url' ,
            'type'            => 'url',
        )
    );

    $wp_customize->add_setting(
        'car_service_center_youtube_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'car_service_center_youtube_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Youtube Link', 'car-service-center' ), ),
            'section'         => 'car_service_center_social_section',
            'settings'        => 'car_service_center_youtube_url' ,
            'type'            => 'url',
        )
    );

	$wp_customize->add_setting(
        'car_service_center_whatsapp_url',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

	$wp_customize->add_control(
        'car_service_center_whatsapp_url',
        array(
            'label'           => sprintf( esc_html__( 'Add Whatsapp Link', 'car-service-center' ), ),
            'section'         => 'car_service_center_social_section',
            'settings'        => 'car_service_center_whatsapp_url' ,
            'type'            => 'url',
        )
    );
	
	// Banner Option

	$wp_customize->add_section(
		'car_service_center_banner_section',
		array(
			'title'    => esc_html__( 'Banner Option', 'car-service-center' ),
		)
	);

	$wp_customize->add_setting(
	    'car_service_center_slider',
	    array(
	        'default'           => '',
	        'sanitize_callback' => 'car_service_center_sanitize_number',
	    )
	);

	$wp_customize->add_control(
	    'car_service_center_slider',
	    array(
	        'label'       => esc_html__( 'No of banner', 'car-service-center' ),
	        'section'     => 'car_service_center_banner_section',
	        'settings'    => 'car_service_center_slider',
	        'type'        => 'number',
	        'input_attrs' => array(
	            'min' => 1,
	            'max' => 3,
	        ),
	    )
	);

	$car_service_center_banner = get_theme_mod( 'car_service_center_slider');
	for ( $i = 1; $i <= $car_service_center_banner; $i++ ){
		$wp_customize->add_setting(
			'car_service_center_banner_short_heading'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'car_service_center_banner_short_heading'.$i,
				array(
				'label'           => sprintf( esc_html__( 'Banner Short Heading 0', 'car-service-center' ).$i, ),
				'section'         => 'car_service_center_banner_section',
				'settings'        => 'car_service_center_banner_short_heading'.$i,
				'type'            => 'text',
			)
		);

		$wp_customize->add_setting(
			'car_service_center_banner_heading'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'car_service_center_banner_heading'.$i,
			array(
				'label'           => sprintf( esc_html__( 'Banner Heading 0', 'car-service-center' ).$i, ),
				'section'         => 'car_service_center_banner_section',
				'settings'        => 'car_service_center_banner_heading'.$i,
				'type'            => 'text',
			)
		);

        $wp_customize->add_setting(
            'car_service_center_banner_btn'.$i,
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'car_service_center_banner_btn'.$i,
            array(
                'label'           => sprintf( esc_html__( 'Banner Button 0', 'car-service-center' ).$i, ),
                'section'         => 'car_service_center_banner_section',
                'settings'        => 'car_service_center_banner_btn'.$i,
                'type'            => 'text',
            )
        );

		$wp_customize->add_setting(
			'car_service_center_banner_button_link'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'car_service_center_banner_button_link'.$i,
			array(
				'label'           => sprintf( esc_html__( 'Banner Button Link 0', 'car-service-center' ).$i, ),
				'section'         => 'car_service_center_banner_section',
				'settings'        => 'car_service_center_banner_button_link'.$i,
				'type'            => 'url',
			)
		);
		
		$wp_customize->add_setting(
			'car_service_center_banner_image'.$i,
			array(
	        	'default'           => '',
	        	'sanitize_callback' => 'car_service_center_sanitize_image',

	    	)
	    );
	    
	    $wp_customize->add_control(
	     	new WP_Customize_Image_Control(
	    		$wp_customize, 'car_service_center_banner_image'.$i, 
	    		array(
	    			'label'           => sprintf( esc_html__( 'Banner Image 0', 'car-service-center' ).$i, ),
			        'settings'  => 'car_service_center_banner_image'.$i,
			        'section'   => 'car_service_center_banner_section'
	    		) 
	    	)
	    );
	}

    // Team Option

	$wp_customize->add_section(
		'car_service_center_team_section',
		array(
			'title'    => esc_html__( 'Team Options', 'car-service-center' ),
		)
	);

	$wp_customize->add_setting(
        'car_service_center_team_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

	$wp_customize->add_control(
        'car_service_center_team_heading',
        array(
            'label'           => sprintf( esc_html__( 'Team Heading', 'car-service-center' ), ),
            'section'         => 'car_service_center_team_section',
            'settings'        => 'car_service_center_team_heading' ,
            'type'            => 'text',
        )
    );

	$wp_customize->add_setting(
	    'car_service_center_team',
	    array(
	        'default'           => '',
	        'sanitize_callback' => 'car_service_center_sanitize_number',
	    )
	);

	$wp_customize->add_control(
	    'car_service_center_team',
	    array(
	        'label'       => esc_html__( 'No of Team', 'car-service-center' ),
	        'section'     => 'car_service_center_team_section',
	        'settings'    => 'car_service_center_team',
	        'type'        => 'number',
	        'input_attrs' => array(
	            'min' => 1,
	            'max' => 6,
	        ),
	    )
	);

	$car_service_center_team = get_theme_mod( 'car_service_center_team');
	for ( $i = 1; $i <= $car_service_center_team; $i++ ){
		$wp_customize->add_setting(
			'car_service_center_team_title'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'car_service_center_team_title'.$i,
				array(
				'label'           => sprintf( esc_html__( 'Team Heading 0', 'car-service-center' ).$i, ),
				'section'         => 'car_service_center_team_section',
				'settings'        => 'car_service_center_team_title'.$i,
				'type'            => 'text',
			)
		);

        $wp_customize->add_setting(
            'car_service_center_team_designation'.$i,
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'car_service_center_team_designation'.$i,
                array(
                'label'           => sprintf( esc_html__( 'Team Designation', 'car-service-center' ).$i, ),
                'section'         => 'car_service_center_team_section',
                'settings'        => 'car_service_center_team_designation'.$i,
                'type'            => 'text',
            )
        );

		$wp_customize->add_setting(
			'car_service_center_team_facebook_url'.$i,
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'car_service_center_team_facebook_url'.$i,
			array(
				'label'           => sprintf( esc_html__( 'Team Facebook Link 0', 'car-service-center' ).$i, ),
				'section'         => 'car_service_center_team_section',
				'settings'        => 'car_service_center_team_facebook_url'.$i,
				'type'            => 'url',
			)
		);

        $wp_customize->add_setting(
            'car_service_center_team_twitter_url'.$i,
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'car_service_center_team_twitter_url'.$i,
            array(
                'label'           => sprintf( esc_html__( 'Team Twitter Link 0', 'car-service-center' ).$i, ),
                'section'         => 'car_service_center_team_section',
                'settings'        => 'car_service_center_team_twitter_url'.$i,
                'type'            => 'url',
            )
        );

		$wp_customize->add_setting(
            'car_service_center_team_instagram_url'.$i,
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'car_service_center_team_instagram_url'.$i,
            array(
                'label'           => sprintf( esc_html__( 'Team Instagram Link 0', 'car-service-center' ).$i, ),
                'section'         => 'car_service_center_team_section',
                'settings'        => 'car_service_center_team_instagram_url'.$i,
                'type'            => 'url',
            )
        );

        $wp_customize->add_setting(
            'car_service_center_team_youtube_url'.$i,
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'car_service_center_team_youtube_url'.$i,
            array(
                'label'           => sprintf( esc_html__( 'Team Youtube Link 0', 'car-service-center' ).$i, ),
                'section'         => 'car_service_center_team_section',
                'settings'        => 'car_service_center_team_youtube_url'.$i,
                'type'            => 'url',
            )
        );

        $wp_customize->add_setting(
            'car_service_center_team_whatsapp_url'.$i,
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'car_service_center_team_whatsapp_url'.$i,
            array(
                'label'           => sprintf( esc_html__( 'Team Whatsapp Link 0', 'car-service-center' ).$i, ),
                'section'         => 'car_service_center_team_section',
                'settings'        => 'car_service_center_team_whatsapp_url'.$i,
                'type'            => 'url',
            )
        );

		$wp_customize->add_setting(
			'car_service_center_team_image'.$i,
			array(
	        	'default'           => '',
	        	'sanitize_callback' => 'car_service_center_sanitize_image',
	    	)
	    );
	    
	    $wp_customize->add_control(
	     	new WP_Customize_Image_Control(
	    		$wp_customize, 'car_service_center_team_image'.$i, 
	    		array(
	    			'label'           => sprintf( esc_html__( 'Team Image 0', 'car-service-center' ).$i, ),
			        'settings'  => 'car_service_center_team_image'.$i,
			        'section'   => 'car_service_center_team_section'
	    		)
	    	)
	    );

        $wp_customize->add_setting(
            'car_service_center_facebook_url',
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'car_service_center_facebook_url',
            array(
                'label'           => sprintf( esc_html__( 'Add Facebook Link', 'car-service-center' ), ),
                'section'         => 'car_service_center_social_section',
                'settings'        => 'car_service_center_facebook_url' ,
                'type'            => 'url',
            )
        );

        $wp_customize->add_setting(
            'car_service_center_twitter_url',
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'car_service_center_twitter_url',
            array(
                'label'           => sprintf( esc_html__( 'Add Twitter Link', 'car-service-center' ), ),
                'section'         => 'car_service_center_social_section',
                'settings'        => 'car_service_center_twitter_url' ,
                'type'            => 'url',
            )
        );

        $wp_customize->add_setting(
            'car_service_center_instagram_url',
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'car_service_center_instagram_url',
            array(
                'label'           => sprintf( esc_html__( 'Add Instagram Link', 'car-service-center' ), ),
                'section'         => 'car_service_center_social_section',
                'settings'        => 'car_service_center_instagram_url' ,
                'type'            => 'url',
            )
        );

        $wp_customize->add_setting(
            'car_service_center_youtube_url',
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'car_service_center_youtube_url',
            array(
                'label'           => sprintf( esc_html__( 'Add Youtube Link', 'car-service-center' ), ),
                'section'         => 'car_service_center_social_section',
                'settings'        => 'car_service_center_youtube_url' ,
                'type'            => 'url',
            )
        );

        $wp_customize->add_setting(
            'car_service_center_whatsapp_url',
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );

        $wp_customize->add_control(
            'car_service_center_whatsapp_url',
            array(
                'label'           => sprintf( esc_html__( 'Add Whatsapp Link', 'car-service-center' ), ),
                'section'         => 'car_service_center_social_section',
                'settings'        => 'car_service_center_whatsapp_url' ,
                'type'            => 'url',
            )
        );
	}

}
add_action( 'customize_register', 'car_service_center_customize_register' );

/**
 * Create the site title for the partial selective refresh.
 *
 * @return void
 */
function car_service_center_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Create the website's slogan for the partial selective refresh.
 *
 * @return void
 */
function car_service_center_customize_partial_blogdescription() {
	bloginfo( 'description' );
}