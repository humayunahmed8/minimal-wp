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
	'label'       => esc_html__( 'Banner Heading Typography', 'minimal' ),
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
	'label'       => esc_html__( 'Feature Section Heading Typography', 'minimal' ),
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
	'label'       => esc_html__( 'Feature List', 'minimal' ),
	'section'     => 'feature_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Feature', 'minimal' ),
		'field' => 'feature_title',
	],
	'button_label' => esc_html__('Add new feature', 'minimal' ),
	'settings'     => 'feature_repeater',
	'choices' => [
		'limit' => 3
	],
	'default'      => [
		[
			'feature_title' => esc_html__( 'What we do', 'minimal' ),
			'feature_desc'  => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
		],
		[
			'feature_title' => esc_html__( 'Meet our team', 'minimal' ),
			'feature_desc'  => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores',
		],
	],
	'fields' => [
		'feature_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Feature icon', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default'     => 'lni-users',
			'choices'     => [
				'lni-microphone' => 'Microphone',
				'lni-users' => 'Users',
				'lni-medall-alt' => 'Award',
			]
		],
		'feature_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Feature title', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default'     => '',
		],
		'feature_desc'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Feature description', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default'     => '',
		],
	]
] );
// Service Section
Kirki::add_section( 'service_section', array(
    'title'          => esc_html__( 'Service Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the service section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Service Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'checkbox',
	'settings' => 'service_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Service Section?', 'minimal' ),
	'section'  => 'service_section',
	'default'  => true,
] );
// Service Section Title
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'service_section_title',
	'label'    => esc_html__( 'Service Section Title', 'minimal' ),
	'section'  => 'service_section',
	'default'  => esc_html__( 'Our Services' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.section-title',
			'function' => 'html',
		]
	]
] );
// Service Section Description
Kirki::add_field( 'minimal_config', [
	'type'     => 'textarea',
	'settings' => 'service_section_desc',
	'label'    => esc_html__( 'Service Section Description', 'minimal' ),
	'section'  => 'service_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.section-header p',
			'function' => 'html',
		]
	]
] );
// Service Item Repeater 
Kirki::add_field( 'minimal_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Service Items', 'minimal' ),
	'section'     => 'service_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Service', 'minimal' ),
		'field' => 'service_title',
	],
	'button_label' => esc_html__('Add Service', 'minimal' ),
	'settings'     => 'service_item_repeater',
	'choices' => [
		'limit' => 6
	],
	'default'      => [
		[
			'service_icon' => 'lni-pencil',
			'service_title' => esc_html__( 'Service Title', 'minimal' ),
			'service_desc'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...',
		],
	],
	'fields' => [
		'service_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Service icon', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default'     => 'lni-users',
			'choices'     => [
				'lni-pencil' => 'Pencil',
				'lni-briefcase' => 'Briefcase',
				'lni-cog' => 'Setting',
				'lni-mobile' => 'Mobile',
				'lni-layers' => 'Layer',
				'lni-rocket' => 'Rocket',
			]
		],
		'service_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Service title', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
		],
		'service_desc'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Service description', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
		],
	]
] );
// Service Column Select 
Kirki::add_field( 'minimal_config', [
	'type'        => 'select',
	'settings'    => 'service_item_column',
	'label'       => esc_html__( 'Service Item Column', 'minimal' ),
	'section'     => 'service_section',
	'default'     => 'col-lg-4',
	'choices'     => [
		'col-lg-6'   => esc_html__( 'Column 2', 'minimal' ),
		'col-lg-4' => esc_html__( 'Column 3', 'minimal' ),
		'col-lg-3'  => esc_html__( 'Column 4', 'minimal' ),
	],
	'output' => [
		[
			'element' => '.services-item',
			'property' => 'text-align'
		]
	]
] );
// Service Item Alignment
Kirki::add_field( 'minimal_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'service_item_alignment',
	'label'       => esc_html__( 'Service Item Alignment', 'minimal' ),
	'section'     => 'service_section',
	'default'     => 'Left',
	'choices'     => [
		'Left'   => esc_html__( 'Left', 'minimal' ),
		'Center' => esc_html__( 'Center', 'minimal' ),
		'Right'  => esc_html__( 'Right', 'minimal' ),
	],
	'output' => [
		[
			'element' => '.services-item',
			'property' => 'text-align'
		]
	]
] );

