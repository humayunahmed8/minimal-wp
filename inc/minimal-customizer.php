<?php 
// Kirki Config
Kirki::add_config( 'minimal_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

// Theme Settings Panel
Kirki::add_panel( 'stack_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Minimal Theme Settings', 'minimal' ),
    'description' => esc_html__( 'Customize minimal theme', 'minimal' ),
) );

// Banner Section 
Kirki::add_section( 'banner_section', array(
    'title'          => esc_html__( 'Banner Section', 'minimal' ),
    'description'    => esc_html__( 'Banner Section Description', 'minimal' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

// Banner Section Field 
Kirki::add_field( 'minimal_config', [
	'type'     	=> 'text',
	'settings' 	=> 'banner_heading',
	'label'    	=> esc_html__( 'Banner heading', 'minimal' ),
	'section'  	=> 'banner_section',
	'default'  	=> esc_html__( 'We discover, design & build digital <br> presence of businesses', 'minimal' ),
	'priority' 	=> 10,
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.head-title',
			'function' => 'html',
		]
	]
] );
Kirki::add_field( 'minimal_config', [
	'type'        => 'typography',
	'settings'    => 'banner_heading_tpg',
	'label'       => esc_html__( 'Banner heading typography', 'kirki' ),
	'section'     => 'banner_section',
	'default'     => [
		'font-family'    => 'Titillium Web',
		'variant'        => '700',
		'font-size'      => '30px',
		'line-height'    => '48px',
		'letter-spacing' => '0',
		'color'          => '#585b60',
		'text-transform' => 'uppercase',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#hero-area .contents .head-title',
		],
	],
] );
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'banner_button_text',
	'label'    => esc_html__( 'Banner button label', 'minimal' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'Explore' ),
	'priority' => 10,
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.btn-common',
			'function' => 'html',
		]
	]
] );
Kirki::add_field( 'minimal_config', [
	'type'     => 'link',
	'settings' => 'banner_button_url',
	'label'    => esc_html__( 'Banner button URL', 'minimal' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( '#' ),
	'priority' => 10,
	'transport' => 'postMessage',
] );
Kirki::add_field( 'minimal_config', [
	'type'     => 'color', // color,color-palette 
	'settings' => 'banner_button_color',
	'label'    => esc_html__( 'Banner button color', 'minimal' ),
	'section'  => 'banner_section',
	'default'  => esc_attr__( '#3d60f4' ),
	// 'choices'     => [
	// 	'colors' => Kirki_Helper::get_material_design_colors( 'primary' ), // primary,all,array
	// 	// 'colors' => [ '#000000', '#222222', '#444444',],
	// 	'size'   => 20, // 10,15,20...
	// 	'style'   => 'square', // square,round
	// ],
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.btn-common',
			'function' => 'css',
			'property' => 'background-color'
		]
	]
] );


Kirki::add_field( 'minimal_config', [
	'type'        => 'image',
	'settings'    => 'banner_image',
	'label'       => esc_html__( 'Banner image', 'minimal' ),
	'description' => esc_html__( 'Add banner image here.', 'minimal' ),
	'section'     => 'banner_section',
	'default'     => '',
] );