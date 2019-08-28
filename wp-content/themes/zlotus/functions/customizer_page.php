<?php
// General Customizer Settings

// Add section
$wp_customize->add_section( 'zlotus_new_section_page' , array(
	'title'      => esc_html__( 'Page Settings', 'zlotus' ),
	'panel'       => 'theme_options',
	'priority'   => 97,
) );

// Add Settings
$wp_customize->add_setting(
	'zlotus_page_title',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_page_share',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_page_author',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);

// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'page_title',
		array(
			'label'      => esc_html__( 'Hide Page Title', 'zlotus' ),
			'section'    => 'zlotus_new_section_page',
			'settings'   => 'zlotus_page_title',
			'type'		 => 'checkbox',
			'priority'	 => 1
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'page_share',
		array(
			'label'      => esc_html__( 'Hide Page Share', 'zlotus' ),
			'section'    => 'zlotus_new_section_page',
			'settings'   => 'zlotus_page_share',
			'type'		 => 'checkbox',
			'priority'	 => 2
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'page_author',
		array(
			'label'      => esc_html__( 'Hide Page Author Name', 'zlotus' ),
			'section'    => 'zlotus_new_section_page',
			'settings'   => 'zlotus_page_author',
			'type'		 => 'checkbox',
			'priority'	 => 3
		)
	)
);