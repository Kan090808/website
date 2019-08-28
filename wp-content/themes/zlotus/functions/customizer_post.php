<?php
// General Customizer Settings

// Add section
$wp_customize->add_section( 'zlotus_new_section_post' , array(
	'title'      => esc_html__( 'Post Settings', 'zlotus' ),
	'panel'       => 'theme_options',
	'priority'   => 96,
) );

// Add Settings

$wp_customize->add_setting(
	'zlotus_post_layout',
	array(
		'default'     => 'post_sidebar',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'zlotus_post_thumb',
	array(
		'default'     => 'display',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'zlotus_post_cat',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_post_date',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_post_share_author',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_post_share',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_post_comment_link',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_post_tags',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);


$wp_customize->add_setting(
	'zlotus_post_related',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);
$wp_customize->add_setting(
	'zlotus_post_pagination_hide',
	array(
		'default'     => false,
		'sanitize_callback'     => 'zlotus_sanitize_checkbox'
	)
);

// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_layout',
		array(
			'label'          => esc_html__( 'Set default post layout', 'zlotus' ),
			'section'        => 'zlotus_new_section_post',
			'settings'       => 'zlotus_post_layout',
			'type'           => 'radio',
			'priority'	 => 1,
			'choices'        => array(
				'post_sidebar'   => esc_html__( 'Post w/ Sidebar', 'zlotus' ),
				'post_fullwidth'   => esc_html__( 'Full Width Post', 'zlotus' ),
			)
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_thumb',
		array(
			'label'          => esc_html__( 'Featured Image (On Top of Post)', 'zlotus' ),
			'section'        => 'zlotus_new_section_post',
			'settings'       => 'zlotus_post_thumb',
			'type'           => 'radio',
			'priority'	 => 2,
			'choices'        => array(
				'display'   => esc_html__( 'Display Featured Image', 'zlotus' ),
				'no_display'  => esc_html__( 'Hide Featured Image', 'zlotus' ),
				'ho_display'  => esc_html__( 'Hide Featured Image only on single post pages', 'zlotus' ),
			)
		)
	)
);


$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_cat',
		array(
			'label'      => esc_html__( 'Hide Category', 'zlotus' ),
			'section'    => 'zlotus_new_section_post',
			'settings'   => 'zlotus_post_cat',
			'type'		 => 'checkbox',
			'priority'	 => 3
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_date',
		array(
			'label'      => esc_html__( 'Hide Date', 'zlotus' ),
			'section'    => 'zlotus_new_section_post',
			'settings'   => 'zlotus_post_date',
			'type'		 => 'checkbox',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_share_author',
		array(
			'label'      => esc_html__( 'Hide Author Name', 'zlotus' ),
			'section'    => 'zlotus_new_section_post',
			'settings'   => 'zlotus_post_share_author',
			'type'		 => 'checkbox',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_share',
		array(
			'label'      => esc_html__( 'Hide Share Buttons', 'zlotus' ),
			'section'    => 'zlotus_new_section_post',
			'settings'   => 'zlotus_post_share',
			'type'		 => 'checkbox',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_comment_link',
		array(
			'label'      => esc_html__( 'Hide Comment Link', 'zlotus' ),
			'section'    => 'zlotus_new_section_post',
			'settings'   => 'zlotus_post_comment_link',
			'type'		 => 'checkbox',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_tags',
		array(
			'label'      => esc_html__( 'Hide Tags', 'zlotus' ),
			'section'    => 'zlotus_new_section_post',
			'settings'   => 'zlotus_post_tags',
			'type'		 => 'checkbox',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_related',
		array(
			'label'      => esc_html__( 'Hide Related Posts Box', 'zlotus' ),
			'section'    => 'zlotus_new_section_post',
			'settings'   => 'zlotus_post_related',
			'type'		 => 'checkbox',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'post_pagination_hide',
		array(
			'label'      => esc_html__( 'Hide Post Pagination', 'zlotus' ),
			'section'    => 'zlotus_new_section_post',
			'settings'   => 'zlotus_post_pagination_hide',
			'type'		 => 'checkbox',
			'priority'	 => 11
		)
	)
);