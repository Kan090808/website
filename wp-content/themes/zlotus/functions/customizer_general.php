<?php
// General Customizer Settings

// Add section
$wp_customize->add_section( 'zlotus_new_section_general' , array(
	'title'      => esc_html__( 'General Settings', 'zlotus' ),
	'panel'       => 'theme_options',
	'priority'   => 90,
) );

// Add Settings
$wp_customize->add_setting(
	'zlotus_responsive',
	array(
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'zlotus_home_layout',
	array(
		'default'     => 'full',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'zlotus_archive_layout',
	array(
		'default'     => 'full',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'zlotus_sidebar_homepage',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'zlotus_sidebar_archive',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);

$wp_customize->add_setting(
	'zlotus_post_summary',
	array(
		'default'     => 'excerpt',
		'sanitize_callback'     => 'wp_kses_post'
	)
);


// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'responsive',
		array(
			'label'      => esc_html__( 'Disable Responsive', 'zlotus' ),
			'section'    => 'zlotus_new_section_general',
			'settings'   => 'zlotus_responsive',
			'type'		 => 'checkbox',
			'priority'	 => 2
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'home_layout',
		array(
			'label'          => esc_html__( 'Homepage Layout', 'zlotus' ),
			'section'        => 'zlotus_new_section_general',
			'settings'       => 'zlotus_home_layout',
			'type'           => 'radio',
			'priority'	 => 3,
			'choices'        => array(
				'full'   => esc_html__( 'Full Post Layout', 'zlotus' ),
				'grid'  => esc_html__( 'Grid Layout', 'zlotus' ),
				'full_grid'  => esc_html__( '1 Full then Grid', 'zlotus' ),
				'list'  => esc_html__( 'List Layout', 'zlotus' ),
				'full_list'  => esc_html__( '1 Full then List', 'zlotus' ),
			)
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'archive_layout',
		array(
			'label'          => esc_html__( 'Archive Layout', 'zlotus' ),
			'section'        => 'zlotus_new_section_general',
			'settings'       => 'zlotus_archive_layout',
			'type'           => 'radio',
			'priority'	 => 4,
			'choices'        => array(
				'full'   => esc_html__( 'Full Post Layout', 'zlotus' ),
				'grid'  => esc_html__( 'Grid Layout', 'zlotus' ),
				'full_grid'  => esc_html__( '1 Full then Grid', 'zlotus' ),
				'list'  => esc_html__( 'List Layout', 'zlotus' ),
				'full_list'  => esc_html__( '1 Full then List', 'zlotus' ),
			)
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'sidebar_homepage',
		array(
			'label'      => esc_html__( 'Disable Sidebar on Homepage', 'zlotus' ),
			'section'    => 'zlotus_new_section_general',
			'settings'   => 'zlotus_sidebar_homepage',
			'type'		 => 'checkbox',
			'priority'	 => 5
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'sidebar_archive',
		array(
			'label'      => esc_html__( 'Disable Sidebar on Archive Pages', 'zlotus' ),
			'section'    => 'zlotus_new_section_general',
			'settings'   => 'zlotus_sidebar_archive',
			'type'		 => 'checkbox',
			'priority'	 => 6
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_summary',
		array(
			'label'          => esc_html__( 'Homepage/Archive Post Summary Type', 'zlotus' ),
			'section'        => 'zlotus_new_section_general',
			'settings'       => 'zlotus_post_summary',
			'type'           => 'radio',
			'priority'	 => 8,
			'choices'        => array(
				'excerpt'  => esc_html__( 'Use Excerpt', 'zlotus' ),
				'full'   => esc_html__( 'Use Read More Tag', 'zlotus' ),
			)
		)
	)
);