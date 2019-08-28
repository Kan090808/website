<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Custom Styling
//////////////////////////////////////////////////////////////////
function zlotus_customizer_style()
{
	wp_enqueue_style('zlotus-customizer-css', get_stylesheet_directory_uri() . '/functions/css/customizer.css');
}
add_action('customize_controls_print_styles', 'zlotus_customizer_style');

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function zlotus_register_theme_customizer( $wp_customize ) {

	$wp_customize->add_panel( 'theme_options' ,
        array(
            'title'       => esc_html__( 'ZLOTUS: Theme Options', 'zlotus' ),
            'description' => '',
            'priority'       => 998,
        )
    );
 	
	// Include all settings
	
	include( get_template_directory() . '/functions/customizer_general.php');
	include( get_template_directory() . '/functions/customizer_header.php');
	include( get_template_directory() . '/functions/customizer_page.php');
	include( get_template_directory() . '/functions/customizer_social.php');
	include( get_template_directory() . '/functions/customizer_footer.php');
	include( get_template_directory() . '/functions/customizer_colors.php');
	include( get_template_directory() . '/functions/customizer_post.php');
	include( get_template_directory() . '/functions/customizer_featured.php');
	if ( class_exists( 'WooCommerce' ) ) {
	include( get_template_directory() . '/functions/customizer_woo.php');
	}
	
	// Remove Sections
	//$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'nav');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');
	$wp_customize->remove_section( 'custom_css');
 
}
add_action( 'customize_register', 'zlotus_register_theme_customizer' );

/**
 * Sanitize
 */
function zlotus_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}
function zlotus_sanitize_number($input) {
    if ( isset( $input ) && is_numeric( $input ) ) {
        return $input;
    }
}

?>