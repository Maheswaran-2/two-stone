<?php
/**
 * Two stone Theme Customizer
 *
 * @package Two_stone
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function two_stone_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// 
	$wp_customize->add_section('ts_home_section',array(
		'title'=>'Logo',
		'description'=>'Update Logo'
	));
	$wp_customize->add_setting('ts_header_logo_settings',array(

	));
	$wp_customize->add_control(new wp_Customize_Image_Control($wp_customize,'ts_header_logo_control',array(
		'label'=>'Header Logo',
		'settings'=>'ts_header_logo_settings',
		'section'=>'ts_home_section'
	)));
	$wp_customize->add_setting('ts_stickyheader_logo_settings',array(

	));
	$wp_customize->add_control(new wp_Customize_Image_Control($wp_customize,'ts_stickyheader_logo_control',array(
		'label'=>'Sticky Header Logo',
		'settings'=>'ts_stickyheader_logo_settings',
		'section'=>'ts_home_section'
	)));
	$wp_customize->add_setting('ts_Footer_logo_settings',array(

	));
	$wp_customize->add_control(new wp_Customize_Image_Control($wp_customize,'ts_Footer_logo_control',array(
		'label'=>'Footer Logo',
		'settings'=>'ts_Footer_logo_settings',
		'section'=>'ts_home_section'
	)));
	// 
	
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'two_stone_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'two_stone_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'two_stone_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function two_stone_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function two_stone_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function two_stone_customize_preview_js() {
	wp_enqueue_script( 'two-stone-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'two_stone_customize_preview_js' );