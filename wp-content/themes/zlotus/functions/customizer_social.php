<?php
// Social Media Customizer Settings

// Add section
$wp_customize->add_section( 'zlotus_new_section_social' , array(
	'title'      => esc_html__( 'Social Media Settings', 'zlotus' ),
	'panel'       => 'theme_options',
	'priority'   => 95,
) );

// Add Settings
$wp_customize->add_setting(
	'zlotus_facebook',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_twitter',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_instagram',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_pinterest',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_tumblr',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_bloglovin',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_tumblr',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_google',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_youtube',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_dribbble',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_soundcloud',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_vimeo',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_linkedin',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_snapchat',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_rss',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'facebook',
		array(
			'label'      => esc_html__( 'Facebook', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_facebook',
			'type'		 => 'text',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'twitter',
		array(
			'label'      => esc_html__( 'Twitter', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_twitter',
			'type'		 => 'text',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram',
		array(
			'label'      => esc_html__( 'Instagram', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_instagram',
			'type'		 => 'text',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'pinterest',
		array(
			'label'      => esc_html__( 'Pinterest', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_pinterest',
			'type'		 => 'text',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bloglovin',
		array(
			'label'      => esc_html__( 'Bloglovin', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_bloglovin',
			'type'		 => 'text',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'google',
		array(
			'label'      => esc_html__( 'Google Plus', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_google',
			'type'		 => 'text',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'tumblr',
		array(
			'label'      => esc_html__( 'Tumblr', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_tumblr',
			'type'		 => 'text',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'youtube',
		array(
			'label'      => esc_html__( 'Youtube', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_youtube',
			'type'		 => 'text',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'dribbble',
		array(
			'label'      => esc_html__( 'Dribbble', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_dribbble',
			'type'		 => 'text',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'soundcloud',
		array(
			'label'      => esc_html__( 'Soundcloud', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_soundcloud',
			'type'		 => 'text',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'vimeo',
		array(
			'label'      => esc_html__( 'Vimeo', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_vimeo',
			'type'		 => 'text',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'linkedin',
		array(
			'label'      => esc_html__( 'Linkedin (Use full URL to your Linkedin profile)', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_linkedin',
			'type'		 => 'text',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'snapchat',
		array(
			'label'      => esc_html__( 'Snapchat', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_snapchat',
			'type'		 => 'text',
			'priority'	 => 13
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'rss',
		array(
			'label'      => esc_html__( 'RSS Link', 'zlotus' ),
			'section'    => 'zlotus_new_section_social',
			'settings'   => 'zlotus_rss',
			'type'		 => 'text',
			'priority'	 => 14
		)
	)
);
