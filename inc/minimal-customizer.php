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

// ## Color Setting
//==========================
Kirki::add_section( 'minimal_color_set_section', array(
    'title'          => esc_html__( 'Color Setting', 'minimal' ),
    'description'    => esc_html__( 'Change the theme default color from here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );

// Banner Button Background Color 
Kirki::add_field( 'minimal_config', [
	'type'     => 'color', // color,color-palette 
	'settings' => 'minimal_color_setting',
	'label'    => esc_html__( 'Theme Primary Color', 'minimal' ),
	'section'  => 'minimal_color_set_section',
	'default'  => esc_attr__( '#3d60f4' ),
	'choices'     => [
		'alpha' => true,
	],
	'transport'   => 'auto',
	'output' => [
		[
			'element'  => ':root',
			'property' => '--primary-color',
		]
	],
] );

// ## Banner Section
//==========================
Kirki::add_section( 'banner_section', array(
    'title'          => esc_html__( 'Banner Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the banner section from here.', 'minimal' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );
// Banner Heading 
Kirki::add_field( 'minimal_config', [
	'type'     	=> 'text',
	'settings' 	=> 'banner_heading',
	'label'    	=> esc_html__( 'Banner Heading', 'minimal' ),
	'section'  	=> 'banner_section',
	'default'  	=> esc_html__( 'We discover, design & build digital presence of businesses', 'minimal' ),
	'priority' 	=> 10,
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.head-title',
			'function' => 'html',
		]
	]
] );
// Banner Heading Typography
Kirki::add_field( 'minimal_config', [
	'type'        => 'typography',
	'settings'    => 'banner_heading_tpg',
	'label'       => esc_html__( 'Banner Heading Typography', 'kirki' ),
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
// Banner Button Text
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'banner_button_label',
	'label'    => esc_html__( 'Banner Button Label', 'minimal' ),
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
// Banner Button URL/Link 
Kirki::add_field( 'minimal_config', [
	'type'     => 'link',
	'settings' => 'banner_button_url',
	'label'    => esc_html__( 'Banner Button URL', 'minimal' ),
	'section'  => 'banner_section',
	'default'  => esc_attr__( '#' ),
	'priority' => 10,
	'transport' => 'postMessage',
] );
// Banner Button Background Color 
// Kirki::add_field( 'minimal_config', [
// 	'type'     => 'color', // color,color-palette 
// 	'settings' => 'banner_button_color',
// 	'label'    => esc_html__( 'Banner Button Color', 'minimal' ),
// 	'section'  => 'banner_section',
// 	'default'  => esc_attr__( '#3d60f4' ),
// 	'choices'     => [
// 		'alpha' => true,
// 	],
// 	// 'choices'     => [
// 	// 	'colors' => Kirki_Helper::get_material_design_colors( 'primary' ), // primary,all,array
// 	// 	// 'colors' => [ '#000000', '#222222', '#444444',],
// 	// 	'size'   => 20, // 10,15,20...
// 	// 	'style'   => 'square', // square,round
// 	// ],
// 	'transport'   => 'auto',
// 	'output' => [
// 		[
// 			'element'  => '.btn-common',
// 			'property' => 'background-color',
// 		]
// 	],
// ] );
// Banner Image
Kirki::add_field( 'minimal_config', [
	'type'        => 'image',
	'settings'    => 'banner_image',
	'label'       => esc_html__( 'Banner Image', 'minimal' ),
	'description' => esc_html__( 'Add Banner Image Here.', 'minimal' ),
	'section'     => 'banner_section',
] );


// ## Feature Section
//==========================
Kirki::add_section( 'feature_section', array(
    'title'          => esc_html__( 'Feature Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the feature section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );
// Feature Content Heading 
Kirki::add_field( 'minimal_config', [
	'type'     	=> 'text',
	'settings' 	=> 'feature_content_heading',
	'label'    	=> esc_html__( 'Feature Section Heading', 'minimal' ),
	'section'  	=> 'feature_section',
	'default'  	=> esc_html__( 'We are helping to grow your business.', 'minimal' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.text-wrapper h2',
			'function' => 'html',
		]
	]
] );
// Feature Content Heading Typography
Kirki::add_field( 'minimal_config', [
	'type'        => 'typography',
	'settings'    => 'feature_content_heading_tpg',
	'label'       => esc_html__( 'Feature Section Heading Typography', 'kirki' ),
	'section'     => 'feature_section',
	'default'     => [
		'font-family'    => 'Titillium Web',
		'variant'        => '700',
		'font-size'      => '30px',
		'line-height'    => '48px',
		'letter-spacing' => '0',
		'color'          => '#222222',
		'text-transform' => 'capitalize',
		'text-align'     => 'left',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.title-hl',
		],
	],
] );
// Feature Content Heading Description
Kirki::add_field( 'minimal_config', [
	'type'     	=> 'textarea',
	'settings' 	=> 'feature_content_heading_desc',
	'label'    	=> esc_html__( 'Feature Section Heading Description', 'minimal' ),
	'section'  	=> 'feature_section',
	'default'  	=> esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'minimal' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#feature .text-wrapper p',
			'function' => 'html',
		]
	]
] );
// Feature Content Button Label
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'feature_content_btn_label',
	'label'    => esc_html__( 'Feature Content Button Label', 'minimal' ),
	'section'  => 'feature_section',
	'default'  => esc_html__( 'More about us' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.btn-common',
			'function' => 'html',
		]
	]
] );
// Feature Content Button URL/Link
Kirki::add_field( 'minimal_config', [
	'type'     => 'link',
	'settings' => 'feature_content_btn_url',
	'label'    => esc_html__( 'Feature Content Button URL', 'minimal' ),
	'section'  => 'feature_section',
	'default'  => esc_attr__( '#' ),
] );
// Feature Content Button Background Color
// Kirki::add_field( 'minimal_config', [
// 	'type'     => 'color', 
// 	'settings' => 'feature_content_btn_color',
// 	'label'    => esc_html__( 'Feature Content Button Color', 'minimal' ),
// 	'section'  => 'feature_section',
// 	'default'  => esc_attr__( '#3d60f4' ),
// 	'choices'     => [
// 		'alpha' => true,
// 	],
// 	'transport'   => 'auto',
// 	'output' => [
// 		[
// 			'element'  => '.text-wrapper .btn-common',
// 			'property' => 'background-color',
// 		]
// 	],
// ] );


// Feature List Repeater 
Kirki::add_field( 'minimal_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Feature List', 'kirki' ),
	'section'     => 'feature_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Feature', 'kirki' ),
		'field' => 'feature_title',
	],
	'button_label' => esc_html__('Add new feature', 'kirki' ),
	'settings'     => 'feature_repeater',
	'choices' => [
		'limit' => 3
	],
	'default'      => [
		[
			'feature_title' => esc_html__( 'What we do', 'kirki' ),
			'feature_desc'  => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
		],
		[
			'feature_title' => esc_html__( 'Meet our team', 'kirki' ),
			'feature_desc'  => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
		],
	],
	'fields' => [
		'feature_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Feature icon', 'kirki' ),
			'description' => esc_html__( '', 'kirki' ),
			'default'     => 'lni-users',
			'choices'     => [
				'lni-microphone' => 'Microphone',
				'lni-users' => 'Users',
				'lni-medall-alt' => 'Award',
			]
		],
		'feature_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Feature title', 'kirki' ),
			'description' => esc_html__( '', 'kirki' ),
			'default'     => '',
		],
		'feature_desc'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Feature description', 'kirki' ),
			'description' => esc_html__( '', 'kirki' ),
			'default'     => '',
		],
	]
] );

