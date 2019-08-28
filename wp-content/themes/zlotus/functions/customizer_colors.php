<?php
// General Customizer Settings

// Add section

$wp_customize->add_section( 'zlotus_new_section_custom_css' , array(
	'title'      => esc_html__( 'Custom CSS', 'zlotus' ),
	'description'=> esc_html__( 'Add your custom CSS which will overwrite the theme CSS', 'zlotus' ),
	'priority'   => 101,
	'panel'       => 'theme_options',
) );

$wp_customize->add_panel( 'panel_color', array(
	'priority'       => 999,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'ZLOTUS: Color and Style Settings', 'zlotus' ),
) );
	
	$wp_customize->add_section( 'zlotus_new_section_color_topbar' , array(
		'title'      => esc_html__( 'Top Bar Colors', 'zlotus' ),
		'description'=> '',
		'priority'   => 2,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'zlotus_new_section_color_mobile_menu' , array(
		'title'      => esc_html__( 'Mobile Menu Colors', 'zlotus' ),
		'description'=> '',
		'priority'   => 3,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'zlotus_new_section_color_header' , array(
		'title'      => esc_html__( 'Header Colors', 'zlotus' ),
		'description'=> '',
		'priority'   => 4,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'zlotus_new_section_color_featured' , array(
		'title'      => esc_html__( 'Featured Area Colors', 'zlotus' ),
		'description'=> '',
		'priority'   => 8,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'zlotus_new_section_color_post' , array(
		'title'      => esc_html__( 'Post/Page Colors', 'zlotus' ),
		'description'=> '',
		'priority'   => 9,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'zlotus_new_section_color_sidebar' , array(
		'title'      => esc_html__( 'Sidebar Colors', 'zlotus' ),
		'description'=> '',
		'priority'   => 10,
		'panel'  => 'panel_color',
	) );
	
	$wp_customize->add_section( 'zlotus_new_section_color_footer' , array(
		'title'      => esc_html__( 'Footer Colors', 'zlotus' ),
		'description'=> '',
		'priority'   => 11,
		'panel'  => 'panel_color',
	) );
	$wp_customize->add_section( 'zlotus_new_section_color_newsletter_color' , array(
		'title'      => esc_html__( 'Newsletter Colors', 'zlotus' ),
		'description'=> '',
		'priority'   => 12,
		'panel'  => 'panel_color',
	) );
	$wp_customize->add_section( 'zlotus_new_section_color_misc' , array(
		'title'      => esc_html__( 'MISC Colors', 'zlotus' ),
		'description'=> '',
		'priority'   => 13,
		'panel'  => 'panel_color',
	) );
	
	
// Add Settings

// Top Bar
$wp_customize->add_setting(
	'zlotus_topbar_border_color',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_topbar_bg_color',
	array(
		'default'     => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_menu_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_menu_color_hover',
	array(
		'default'     => '#777777',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_menu_dropdown_arrow',
	array(
		'default'     => '#757575',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_menu_dropdown_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_menu_dropdown_border',
	array(
		'default'     => '#f5f5f5',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_menu_dropdown_text_color',
	array(
		'default'     => '#888',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_menu_dropdown_text_hover_bg',
	array(
		'default'     => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_menu_dropdown_text_hover_color',
	array(
		'default'     => '#333',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_setting(
	'zlotus_header_social_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_header_social_color_hover',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_header_search_icon',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_header_search_icon_hover',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_header_search_input_text',
	array(
		'default'     => '#757575',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Mobile menu
$wp_customize->add_setting(
	'zlotus_mobile_show',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_mobile_show_hover',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_mobile_burger',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_setting(
	'zlotus_mobile_dropdown_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_mobile_dropdown_border',
	array(
		'default'     => '#f5f5f5',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_mobile_dropdown_text',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_mobile_dropdown_text_hover',
	array(
		'default'     => '#333333',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_mobile_dropdown_text_bg_hover',
	array(
		'default'     => '#f5f5f5',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Header
$wp_customize->add_setting(
	'zlotus_header_bg_color',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_header_bg_image',
	array(
	'sanitize_callback'     => 'esc_url_raw'
	)
);

$wp_customize->add_setting(
	'zlotus_header_bg_repeat',
	array(
		'default'     => 'repeat',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'zlotus_header_bg_size',
	array(
		'default'     => 'auto',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'zlotus_header_bg_position',
	array(
		'default'     => 'center center',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

$wp_customize->add_setting(
	'zlotus_header_bg_attachment',
	array(
		'default'     => 'scroll',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

// Featured Area
$wp_customize->add_setting(
	'zlotus_featured_color_title',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_featured_color_cat',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Posts
$wp_customize->add_setting(
	'zlotus_post_color_title',
	array(
		'default'     => '#313131',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_color_cat',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_color_date',
	array(
		'default'     => '#999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_color_text',
	array(
		'default'     => '#222222',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_color_text_heading',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_color_more_text',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_color_more_text_hover',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_tag_bg',
	array(
		'default'     => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_tag_text',
	array(
		'default'     => '#656565',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_tag_bg_hover',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_tag_text_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_share_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_share_color_hover',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_comment_link_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_comment_link_color_hover',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_author_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_author_color_hover',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_quote_border',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_quote_text',
	array(
		'default'     => '#666666',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_setting(
	'zlotus_post_comment_button_bg',
	array(
		'default'     => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_comment_button_text',
	array(
		'default'     => '#505050',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_comment_button_bg_hover',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_post_comment_button_text_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Sidebar Colors
$wp_customize->add_setting(
	'zlotus_sidebar_color_title',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_sidebar_social_color',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_sidebar_social_color_hover',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_sidebar_cate_hover_bg',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_sidebar_cate_hover_color',
	array(
		'default'     => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Footer Colors
$wp_customize->add_setting(
	'zlotus_footer_color_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_footer_color_text',
	array(
		'default'     => '#333333',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_footer_border_color',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Newsletter colors
$wp_customize->add_setting(
	'zlotus_newsletter_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_newsletter_title',
	array(
		'default'     => '#222222',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_newsletter_text',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_newsletter_input_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_newsletter_input_text',
	array(
		'default'     => '#999999',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_newsletter_submit_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_newsletter_submit_text',
	array(
		'default'     => '#333333',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_newsletter_submit_bg_hover',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_newsletter_submit_text_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

// Misc
$wp_customize->add_setting(
	'zlotus_misc_color_accent',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_misc_pagination_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_misc_pagination_text',
	array(
		'default'     => '#333333',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_misc_pagination_bg_hover',
	array(
		'default'     => '#a5cccb',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_misc_pagination_text_hover',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_misc_archive_bg',
	array(
		'default'     => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_misc_archive_border',
	array(
		'default'     => '#eeeeee',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_misc_archive_title',
	array(
		'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_setting(
	'zlotus_misc_archive_subtitle',
	array(
		'default'     => '#b5b5b5',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);


// Custom CSS
$wp_customize->add_setting(
	'zlotus_custom_css',
	array(
		'sanitize_callback'     => 'wp_kses_post'
	)
);


// Add Control

// Top Bar
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'topbar_border_color',
		array(
			'label'      => esc_html__( 'Top Bar Border Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_topbar_border_color',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'topbar_bg_color',
		array(
			'label'      => esc_html__( 'Top Bar BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_topbar_bg_color',
			'priority'	 => 1
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'menu_color',
		array(
			'label'      => esc_html__( 'Menu Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_menu_color',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'menu_color_hover',
		array(
			'label'      => esc_html__( 'Menu Text Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_menu_color_hover',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'menu_dropdown_arrow',
		array(
			'label'      => esc_html__( 'Menu Dropdown Arrow Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_menu_dropdown_arrow',
			'priority'	 => 4
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'menu_dropdown_bg',
		array(
			'label'      => esc_html__( 'Menu Dropdown BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_menu_dropdown_bg',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'menu_dropdown_border',
		array(
			'label'      => esc_html__( 'Menu Dropdown Border Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_menu_dropdown_border',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'menu_dropdown_text_color',
		array(
			'label'      => esc_html__( 'Menu Dropdown Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_menu_dropdown_text_color',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'menu_dropdown_text_hover_bg',
		array(
			'label'      => esc_html__( 'Menu Dropdown Text Hover BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_menu_dropdown_text_hover_bg',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'menu_dropdown_text_hover_color',
		array(
			'label'      => esc_html__( 'Menu Dropdown Text Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_menu_dropdown_text_hover_color',
			'priority'	 => 9
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_social_color',
		array(
			'label'      => esc_html__( 'Top Bar Social Icon Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_header_social_color',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_social_color_hover',
		array(
			'label'      => esc_html__( 'Top Bar Social Icon Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_header_social_color_hover',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_search_icon',
		array(
			'label'      => esc_html__( 'Top Bar Search Icon Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_header_search_icon',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_search_icon_hover',
		array(
			'label'      => esc_html__( 'Top Bar Search Icon Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_header_search_icon_hover',
			'priority'	 => 13
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_search_input_text',
		array(
			'label'      => esc_html__( 'Top Bar Search Input Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_topbar',
			'settings'   => 'zlotus_header_search_input_text',
			'priority'	 => 14
		)
	)
);

// Mobile menu
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_show',
		array(
			'label'      => esc_html__( 'Show Menu Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_mobile_menu',
			'settings'   => 'zlotus_mobile_show',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_show_hover',
		array(
			'label'      => esc_html__( 'Show Menu Text Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_mobile_menu',
			'settings'   => 'zlotus_mobile_show_hover',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_burger',
		array(
			'label'      => esc_html__( 'Mobile Menu Toggle Icon Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_mobile_menu',
			'settings'   => 'zlotus_mobile_burger',
			'priority'	 => 3
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_bg',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_mobile_menu',
			'settings'   => 'zlotus_mobile_dropdown_bg',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_border',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown Border Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_mobile_menu',
			'settings'   => 'zlotus_mobile_dropdown_border',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_text',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_mobile_menu',
			'settings'   => 'zlotus_mobile_dropdown_text',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_text_hover',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown Text Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_mobile_menu',
			'settings'   => 'zlotus_mobile_dropdown_text_hover',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'mobile_dropdown_text_bg_hover',
		array(
			'label'      => esc_html__( 'Mobile Menu Dropdown Text BG Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_mobile_menu',
			'settings'   => 'zlotus_mobile_dropdown_text_bg_hover',
			'priority'	 => 8
		)
	)
);

// Header
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'header_bg_color',
		array(
			'label'      => esc_html__( 'Header BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_header',
			'settings'   => 'zlotus_header_bg_color',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'2header_bg_image',
		array(
			'label'      => esc_html__( 'Background Image', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_header',
			'settings'   => 'zlotus_header_bg_image',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'2header_bg_repeat',
		array(
			'label'          => esc_html__( 'Background Repeat', 'zlotus' ),
			'section'        => 'zlotus_new_section_color_header',
			'settings'       => 'zlotus_header_bg_repeat',
			'type'           => 'select',
			'priority'	 => 3,
			'choices'        => array(
				'repeat'   => esc_html__( 'Repeat', 'zlotus' ),
				'no-repeat'  => esc_html__( 'No Repeat', 'zlotus' ),
				'repeat-y'  => esc_html__( 'Repeat Y', 'zlotus' ),
				'repeat-x'  => esc_html__( 'Repeat X', 'zlotus' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'2header_bg_size',
		array(
			'label'          => esc_html__( 'Background Size', 'zlotus' ),
			'section'        => 'zlotus_new_section_color_header',
			'settings'       => 'zlotus_header_bg_size',
			'type'           => 'select',
			'priority'	 => 5,
			'choices'        => array(
				'auto'   => esc_html__( 'Auto', 'zlotus' ),
				'cover'  => esc_html__( 'Cover', 'zlotus' ),
				'contain'  => esc_html__( 'Contain', 'zlotus' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'2header_bg_position',
		array(
			'label'          => esc_html__( 'Background Position', 'zlotus' ),
			'section'        => 'zlotus_new_section_color_header',
			'settings'       => 'zlotus_header_bg_position',
			'type'           => 'select',
			'priority'	 => 6,
			'choices'        => array(
				'center center'   => esc_html__( 'Center Center', 'zlotus' ),
				'center top'  => esc_html__( 'Center Top', 'zlotus' ),
				'center bottom'  => esc_html__( 'Center Bottom', 'zlotus' ),
				'right center'  => esc_html__( 'Right Center', 'zlotus' ),
				'right top'  => esc_html__( 'Right Top', 'zlotus' ),
				'right bottom'  => esc_html__( 'Right Bottom', 'zlotus' ),
				'left center'  => esc_html__( 'Left Center', 'zlotus' ),
				'left top'  => esc_html__( 'Left Top', 'zlotus' ),
				'left bottom'  => esc_html__( 'Left Bottom', 'zlotus' ),
			)
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'2header_bg_attachment',
		array(
			'label'          => esc_html__( 'Background Attachment', 'zlotus' ),
			'section'        => 'zlotus_new_section_color_header',
			'settings'       => 'zlotus_header_bg_attachment',
			'type'           => 'select',
			'priority'	 => 7,
			'choices'        => array(
				'scroll'   => esc_html__( 'Scroll', 'zlotus' ),
				'fixed'  => esc_html__( 'Fixed', 'zlotus' ),
			)
		)
	)
);

// Featured Area Colors
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'featured_color_title',
		array(
			'label'      => esc_html__( 'Featured Area Post Title Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_featured',
			'settings'   => 'zlotus_featured_color_title',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'featured_color_cat',
		array(
			'label'      => esc_html__( 'Featured Area Post Category Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_featured',
			'settings'   => 'zlotus_featured_color_cat',
			'priority'	 => 2
		)
	)
);

// Post Colors
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_title',
		array(
			'label'      => esc_html__( 'Post/Page Title Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_color_title',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_cat',
		array(
			'label'      => esc_html__( 'Post Category Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_color_cat',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_date',
		array(
			'label'      => esc_html__( 'Post Date Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_color_date',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_text',
		array(
			'label'      => esc_html__( 'Post/Page Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_color_text',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_text_heading',
		array(
			'label'      => esc_html__( 'Post/Page Headings (H1-H6) Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_color_text_heading',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_more_text',
		array(
			'label'      => esc_html__( 'Continue Reading Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_color_more_text',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_color_more_text_hover',
		array(
			'label'      => esc_html__( 'Continue Reading Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_color_more_text_hover',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_tag_bg',
		array(
			'label'      => esc_html__( 'Tag BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_tag_bg',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_tag_text',
		array(
			'label'      => esc_html__( 'Tag Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_tag_text',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_tag_bg_hover',
		array(
			'label'      => esc_html__( 'Tag BG Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_tag_bg_hover',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_tag_text_hover',
		array(
			'label'      => esc_html__( 'Tag Text Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_tag_text_hover',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_share_color',
		array(
			'label'      => esc_html__( 'Post/Page Share Icon Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_share_color',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_share_color_hover',
		array(
			'label'      => esc_html__( 'Post/Page Share Icon Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_share_color_hover',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_link_color',
		array(
			'label'      => esc_html__( 'Post/Page Comment Link Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_comment_link_color',
			'priority'	 => 13
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_link_color_hover',
		array(
			'label'      => esc_html__( 'Post/Page Comment Link Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_comment_link_color_hover',
			'priority'	 => 14
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_author_color',
		array(
			'label'      => esc_html__( 'Post/Page Author Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_author_color',
			'priority'	 => 15
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_author_color_hover',
		array(
			'label'      => esc_html__( 'Post/Page Author Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_author_color_hover',
			'priority'	 => 16
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_quote_border',
		array(
			'label'      => esc_html__( 'Post/Page Blockquote Border Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_quote_border',
			'priority'	 => 17
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_quote_text',
		array(
			'label'      => esc_html__( 'Post/Page Blockquote Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_quote_text',
			'priority'	 => 18
		)
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_button_bg',
		array(
			'label'      => esc_html__( 'Comment Button BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_comment_button_bg',
			'priority'	 => 19
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_button_text',
		array(
			'label'      => esc_html__( 'Comment Button Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_comment_button_text',
			'priority'	 => 20
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_button_bg_hover',
		array(
			'label'      => esc_html__( 'Comment Button BG Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_comment_button_bg_hover',
			'priority'	 => 21
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'post_comment_button_text_hover',
		array(
			'label'      => esc_html__( 'Comment Button Text Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_post',
			'settings'   => 'zlotus_post_comment_button_text_hover',
			'priority'	 => 22
		)
	)
);

// Sidebar
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_color_title',
		array(
			'label'      => esc_html__( 'Sidebar Widget Title Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_sidebar',
			'settings'   => 'zlotus_sidebar_color_title',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_social_color',
		array(
			'label'      => esc_html__( 'Sidebar Social Widget Icon Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_sidebar',
			'settings'   => 'zlotus_sidebar_social_color',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_social_color_hover',
		array(
			'label'      => esc_html__( 'Sidebar Social Widget Icon Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_sidebar',
			'settings'   => 'zlotus_sidebar_social_color_hover',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_cate_hover_bg',
		array(
			'label'      => esc_html__( 'Sidebar Widget Categories Items BG Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_sidebar',
			'settings'   => 'zlotus_sidebar_cate_hover_bg',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'sidebar_cate_hover_color',
		array(
			'label'      => esc_html__( 'Sidebar Widget Categories Items Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_sidebar',
			'settings'   => 'zlotus_sidebar_cate_hover_color',
			'priority'	 => 5
		)
	)
);

// Footer colors
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color_bg',
		array(
			'label'      => esc_html__( 'Footer BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_footer',
			'settings'   => 'zlotus_footer_color_bg',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_color_text',
		array(
			'label'      => esc_html__( 'Footer Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_footer',
			'settings'   => 'zlotus_footer_color_text',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'footer_border_color',
		array(
			'label'      => esc_html__( 'Footer Bottom Border Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_footer',
			'settings'   => 'zlotus_footer_border_color',
			'priority'	 => 3
		)
	)
);


// Newsletter Colors
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_bg',
		array(
			'label'      => esc_html__( 'Newsletter BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_newsletter_color',
			'settings'   => 'zlotus_newsletter_bg',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_title',
		array(
			'label'      => esc_html__( 'Newsletter Title Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_newsletter_color',
			'settings'   => 'zlotus_newsletter_title',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_text',
		array(
			'label'      => esc_html__( 'Newsletter Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_newsletter_color',
			'settings'   => 'zlotus_newsletter_text',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_input_bg',
		array(
			'label'      => esc_html__( 'Newsletter Input BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_newsletter_color',
			'settings'   => 'zlotus_newsletter_input_bg',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_input_text',
		array(
			'label'      => esc_html__( 'Newsletter Input Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_newsletter_color',
			'settings'   => 'zlotus_newsletter_input_text',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_submit_bg',
		array(
			'label'      => esc_html__( 'Newsletter Submit BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_newsletter_color',
			'settings'   => 'zlotus_newsletter_submit_bg',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_submit_text',
		array(
			'label'      => esc_html__( 'Newsletter Submit Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_newsletter_color',
			'settings'   => 'zlotus_newsletter_submit_text',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_submit_bg_hover',
		array(
			'label'      => esc_html__( 'Newsletter Submit BG Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_newsletter_color',
			'settings'   => 'zlotus_newsletter_submit_bg_hover',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'newsletter_submit_text_hover',
		array(
			'label'      => esc_html__( 'Newsletter Submit Text Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_newsletter_color',
			'settings'   => 'zlotus_newsletter_submit_text_hover',
			'priority'	 => 9
		)
	)
);

// Misc
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_color_accent',
		array(
			'label'      => esc_html__( 'Accent Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_misc',
			'settings'   => 'zlotus_misc_color_accent',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_pagination_bg',
		array(
			'label'      => esc_html__( 'Pagination BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_misc',
			'settings'   => 'zlotus_misc_pagination_bg',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_pagination_text',
		array(
			'label'      => esc_html__( 'Pagination Text Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_misc',
			'settings'   => 'zlotus_misc_pagination_text',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_pagination_bg_hover',
		array(
			'label'      => esc_html__( 'Pagination BG Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_misc',
			'settings'   => 'zlotus_misc_pagination_bg_hover',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_pagination_text_hover',
		array(
			'label'      => esc_html__( 'Pagination Text Hover Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_misc',
			'settings'   => 'zlotus_misc_pagination_text_hover',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_archive_bg',
		array(
			'label'      => esc_html__( 'Category/Archive Box BG Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_misc',
			'settings'   => 'zlotus_misc_archive_bg',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_archive_border',
		array(
			'label'      => esc_html__( 'Category/Archive Box Border Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_misc',
			'settings'   => 'zlotus_misc_archive_border',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_archive_title',
		array(
			'label'      => esc_html__( 'Category/Archive Box Title Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_misc',
			'settings'   => 'zlotus_misc_archive_title',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'misc_archive_subtitle',
		array(
			'label'      => esc_html__( 'Category/Archive Box Sub-Title Color', 'zlotus' ),
			'section'    => 'zlotus_new_section_color_misc',
			'settings'   => 'zlotus_misc_archive_subtitle',
			'priority'	 => 9
		)
	)
);

// Custom CSS
$wp_customize->add_control(
	new Customize_CustomCss_Control(
		$wp_customize,
		'custom_css',
		array(
			'label'      => esc_html__( 'Custom CSS', 'zlotus' ),
			'section'    => 'zlotus_new_section_custom_css',
			'settings'   => 'zlotus_custom_css',
			'type'		 => 'custom_css',
			'priority'	 => 1
		)
	)
);