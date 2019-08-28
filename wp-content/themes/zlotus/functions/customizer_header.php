<?php
// Header Customizer Settings

// Add section
$wp_customize->add_section( 'zlotus_new_section_logo_header' , array(
	'title'      => esc_html__( 'Header & Logo Settings', 'zlotus' ),
	'panel'       => 'theme_options',
	'priority'   => 91,
) );

// Add Settings
$wp_customize->add_setting(
	'zlotus_logo',
	array(
		'sanitize_callback'     => 'esc_url_raw'
	)
);
$wp_customize->add_setting(
	'zlotus_header_padding_top',
	array(
		'default'     => '65',
		'sanitize_callback'     => 'zlotus_sanitize_number'
	)
);
$wp_customize->add_setting(
	'zlotus_header_padding_bottom',
	array(
		'default'     => '65',
		'sanitize_callback'     => 'zlotus_sanitize_number'
	)
);
$wp_customize->add_setting(
	'zlotus_header_hide_social',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'zlotus_header_hide_search',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);

// Add Control
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'upload_logo',
		array(
			'label'      => esc_html__( 'Upload Logo', 'zlotus' ),
			'section'    => 'zlotus_new_section_logo_header',
			'settings'   => 'zlotus_logo',
			'priority'	 => 1
		)
	)
);

$wp_customize->add_control(
	new Customize_Number_Control(
		$wp_customize,
		'header_padding_top',
		array(
			'label'      => esc_html__( 'Header Logo Padding Top', 'zlotus' ),
			'section'    => 'zlotus_new_section_logo_header',
			'settings'   => 'zlotus_header_padding_top',
			'type'		 => 'number',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new Customize_Number_Control(
		$wp_customize,
		'header_padding_bottom',
		array(
			'label'      => esc_html__( 'Header Logo Padding Bottom', 'zlotus' ),
			'section'    => 'zlotus_new_section_logo_header',
			'settings'   => 'zlotus_header_padding_bottom',
			'type'		 => 'number',
			'priority'	 => 7
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'header_hide_social',
		array(
			'label'      => esc_html__( 'Hide Social Icons', 'zlotus' ),
			'section'    => 'zlotus_new_section_logo_header',
			'settings'   => 'zlotus_header_hide_social',
			'type'		 => 'checkbox',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'header_hide_search',
		array(
			'label'      => esc_html__( 'Hide Search Icon', 'zlotus' ),
			'section'    => 'zlotus_new_section_logo_header',
			'settings'   => 'zlotus_header_hide_search',
			'type'		 => 'checkbox',
			'priority'	 => 13
		)
	)
);