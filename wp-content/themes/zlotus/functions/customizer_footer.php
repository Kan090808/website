<?php
// General Customizer Settings

// Add section
$wp_customize->add_section( 'zlotus_new_section_footer' , array(
	'title'      => esc_html__( 'Footer Settings', 'zlotus' ),
	'panel'       => 'theme_options',
	'priority'   => 97,
) );

// Add Settings
$wp_customize->add_setting(
	'zlotus_footer_copyright_text_left',
	array(
		'default'     => esc_html__( '(C) COPYRIGHT 2017 - ALL RIGHTS RESERVED', 'zlotus' ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_footer_copyright_text_right',
	array(
		'default'     => esc_html__( 'Design by <a href="https://zthemes.net/">ZThemes Studio</a>', 'zlotus' ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_footer_share',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);

// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_copyright_text_left',
		array(
			'label'      => esc_html__( 'Footer Text Left', 'zlotus' ),
			'section'    => 'zlotus_new_section_footer',
			'settings'   => 'zlotus_footer_copyright_text_left',
			'type'		 => 'text',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_copyright_text_right',
		array(
			'label'      => esc_html__( 'Footer Text Right', 'zlotus' ),
			'section'    => 'zlotus_new_section_footer',
			'settings'   => 'zlotus_footer_copyright_text_right',
			'type'		 => 'text',
			'priority'	 => 1
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_share',
		array(
			'label'      => esc_html__( 'Hide Footer Social Links', 'zlotus' ),
			'section'    => 'zlotus_new_section_footer',
			'settings'   => 'zlotus_footer_share',
			'type'		 => 'checkbox',
			'priority'	 => 2
		)
	)
);