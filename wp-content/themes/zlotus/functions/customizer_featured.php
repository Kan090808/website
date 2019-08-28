<?php
// Header Customizer Settings

// Add section
$wp_customize->add_section( 'zlotus_new_section_featured' , array(
	'title'      => esc_html__( 'Featured Area Settings', 'zlotus' ),
	'panel'       => 'theme_options',
	'priority'   => 94,
) );

// Add Settings
$wp_customize->add_setting(
	'zlotus_featured_slider',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_featured_cat',
	array(
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_featured_id',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_featured_cat_hide',
	array(
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);


// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_slider',
		array(
			'label'      => esc_html__( 'Enable Featured Area', 'zlotus' ),
			'section'    => 'zlotus_new_section_featured',
			'settings'   => 'zlotus_featured_slider',
			'type'		 => 'checkbox',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Category_Control(
		$wp_customize,
		'featured_cat',
		array(
			'label'    => esc_html__( 'Select Featured Category', 'zlotus' ),
			'settings' => 'zlotus_featured_cat',
			'section'  => 'zlotus_new_section_featured',
			'priority'	 => 2
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_id',
		array(
			'label'      => esc_html__( 'Select featured post/page IDs', 'zlotus' ),
			'section'    => 'zlotus_new_section_featured',
			'settings'   => 'zlotus_featured_id',
			'type'		 => 'text',
			'priority'	 => 4
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'featured_cat_hide',
		array(
			'label'      => esc_html__( 'Hide Categories', 'zlotus' ),
			'section'    => 'zlotus_new_section_featured',
			'settings'   => 'zlotus_featured_cat_hide',
			'type'		 => 'checkbox',
			'priority'	 => 5
		)
	)
);
