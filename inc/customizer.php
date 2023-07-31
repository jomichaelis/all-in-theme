<?php
/**
 * all-in-theme Theme Customizer
 *
 * @package all-in-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function all_in_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// HEADER BACKGROUND COLOR
	$wp_customize->add_setting( 'header_backgroundcolor', array(
		'default' => '#FF0ACE',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_header_backgroundcolor_control', array(
		'label' => __( 'Header Background Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'header_backgroundcolor',
	) ) );

	// HEADER MENU LINK COLOR
	$wp_customize->add_setting( 'header_menu_linkcolor', array(
		'default' => '#FFFE45',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_header_menu_linkcolor_control', array(
		'label' => __( 'Header Linkcolor', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'header_menu_linkcolor',
	) ) );

	// HEADER MENU BUTTON COLOR
	$wp_customize->add_setting( 'header_menu_buttoncolor', array(
		'default' => '#FFFE45',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_header_menu_buttoncolor_control', array(
		'label' => __( 'Menu Button Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'header_menu_buttoncolor',
	) ) );

	// HEADER MENU BUTTON COLOR HOVER
	$wp_customize->add_setting( 'header_menu_buttoncolor_hover', array(
		'default' => '#E0E000',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_header_menu_buttoncolor_hover_control', array(
		'label' => __( 'Menu Button Hover Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'header_menu_buttoncolor_hover',
	) ) );

	// MENU BACKGROUND COLOR
	$wp_customize->add_setting( 'menu_backgroundcolor', array(
		'default' => '#FF0ACE',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_menu_backgroundcolor_control', array(
		'label' => __( 'Menu Background Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'menu_backgroundcolor',
	) ) );

	// MENU SUBMENU BACKGROUND COLOR
	$wp_customize->add_setting( 'submenu_backgroundcolor', array(
		'default' => '#DDDDDD',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_submenu_backgroundcolor_control', array(
		'label' => __( 'Submenu Background Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'submenu_backgroundcolor',
	) ) );

	// MENU SUBMENU BACKGROUND COLOR HOVER
	$wp_customize->add_setting( 'submenu_backgroundcolor_hover', array(
		'default' => '#BBBBBB',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_submenu_backgroundcolor_hover_control', array(
		'label' => __( 'Submenu Background Hover Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'submenu_backgroundcolor_hover',
	) ) );

	// FOOTER BACKGROUND COLOR
	$wp_customize->add_setting( 'footer_backgroundcolor', array(
		'default' => '#FFFE45',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_footer_backgroundcolor', array(
		'label' => __( 'Footer Background Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'footer_backgroundcolor',
	) ) );

	// FOOTER TEXT COLOR
	$wp_customize->add_setting( 'footer_textcolor', array(
		'default' => '#FF0ACE',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_footer_textcolor', array(
		'label' => __( 'Footer Text Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'footer_textcolor',
	) ) );

	// FOOTER LINK COLOR
	$wp_customize->add_setting( 'footer_linkcolor', array(
		'default' => '#FF0ACE',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_footer_linkcolor', array(
		'label' => __( 'Footer Link Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'footer_linkcolor',
	) ) );

	// PAGE TITLE COLOR
	$wp_customize->add_setting( 'page_title_color', array(
		'default' => '#FF0ACE',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ait_page_title_color_control', array(
		'label' => __( 'Pagetitle Color', 'all-in-theme' ),
		'section' => 'colors',
		'settings' => 'page_title_color',
	) ) );


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'all_in_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'all_in_theme_customize_partial_blogdescription',
			)
		);
	}


}
add_action( 'customize_register', 'all_in_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function all_in_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function all_in_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function all_in_theme_customize_preview_js() {
	wp_enqueue_script( 'all-in-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'all_in_theme_customize_preview_js' );
