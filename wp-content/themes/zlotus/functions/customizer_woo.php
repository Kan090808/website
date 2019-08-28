<?php
// WooCommerce Customizer Settings

// Add section
$wp_customize->add_section( 'zlotus_new_section_woo' , array(
	'title'      => esc_html__( 'WooCommerce Settings', 'zlotus' ),
	'description'=> esc_html__( 'WooCommerce theme related settings.', 'zlotus' ),
	'panel'       => 'theme_options',
	'priority'   => 100,
) );

// Add Settings

$wp_customize->add_setting(
	'zlotus_woo_cart_icon',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_woo_layout',
	array(
		'default'     => 'fullwidth',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'zlotus_woo_per_page',
	array(
		'default'     => 9,
		'sanitize_callback'     => 'zlotus_sanitize_number'
	)
);

// Add Control

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'woo_cart_icon',
		array(
			'label'      => esc_html__( 'Hide Cart Icon in Header', 'zlotus' ),
			'section'    => 'zlotus_new_section_woo',
			'settings'   => 'zlotus_woo_cart_icon',
			'type'		 => 'checkbox',
			'priority'	 => 1
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'woo_layout',
		array(
			'label'          => esc_html__( 'Shop Page Layout', 'zlotus' ),
			'section'        => 'zlotus_new_section_woo',
			'settings'       => 'zlotus_woo_layout',
			'type'           => 'radio',
			'priority'	 => 2,
			'choices'        => array(
				'sidebar'   => esc_html__( 'Sidebar Layout', 'zlotus' ),
				'fullwidth'  => esc_html__( 'Full Width Layout', 'zlotus' ),
			)
		)
	)
);

$wp_customize->add_control(
	new Customize_NumberMax_Control(
		$wp_customize,
		'woo_per_page',
		array(
			'label'      => esc_html__( 'Products Per Page', 'zlotus' ),
			'section'    => 'zlotus_new_section_woo',
			'settings'   => 'zlotus_woo_per_page',
			'type'		 => 'numbermax',
			'priority'	 => 3
		)
	)
);