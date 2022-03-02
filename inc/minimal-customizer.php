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
	'default'  => esc_attr__( '#3d60f4', 'minimal'),
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

// Section Overlay
Kirki::add_field( 'minimal_config', [
	'type'        => 'color',
	'settings'    => 'section_overlay',
	'label'       => esc_html__( 'Section Overlay', 'minimal' ),
	'description' => esc_html__( 'Add section overlay from here.', 'minimal' ),
	'section'     => 'minimal_color_set_section',
	'default'  => esc_attr__( 'rgba(15, 17, 27, 0.8)', 'minimal'),
	'choices'     => [
		'alpha' => true,
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.overlay',
			'property' => 'background',
		],
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
	'default'  => esc_attr__( '#', 'minimal' ),
	'priority' => 10,
	'transport' => 'postMessage',
] );
// Banner Button Background Color 
// Kirki::add_field( 'minimal_config', [
// 	'type'     => 'color', // color,color-palette 
// 	'settings' => 'banner_button_color',
// 	'label'    => esc_html__( 'Banner Button Color', 'minimal' ),
// 	'section'  => 'banner_section',
// 	'default'  => esc_attr__( '#3d60f4', 'minimal' ),
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
	'default'  => esc_attr__( '#', 'minimal' ),
] );
// Feature Content Button Background Color
// Kirki::add_field( 'minimal_config', [
// 	'type'     => 'color', 
// 	'settings' => 'feature_content_btn_color',
// 	'label'    => esc_html__( 'Feature Content Button Color', 'minimal' ),
// 	'section'  => 'feature_section',
// 	'default'  => esc_attr__( '#3d60f4', 'minimal' ),
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
// ## Service Section
// ==========================
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
			'element' => '#services .section-title',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'service_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Service Section Description
Kirki::add_field( 'minimal_config', [
	'type'     => 'textarea',
	'settings' => 'service_section_desc',
	'label'    => esc_html__( 'Service Section Description', 'minimal' ),
	'section'  => 'service_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'minimal' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#services .section-header p',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'service_section_show_hide',
			'operator' => '==',
			'value'    => true,
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
			'service_desc'  => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'minimal'),
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
	],
	'active_callback' => [
		[
			'setting'  => 'service_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
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
	], 
	'active_callback' => [
		[
			'setting'  => 'service_section_show_hide',
			'operator' => '==',
			'value'    => true,
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
	],
	'active_callback' => [
		[
			'setting'  => 'service_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );

// ## Video Section
// ==========================
Kirki::add_section( 'video_section', array(
    'title'          => esc_html__( 'Video Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the video section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Video Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'checkbox',
	'settings' => 'video_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Video Section?', 'minimal' ),
	'section'  => 'video_section',
	'default'  => true,
] );
// Video Title
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'video_title',
	'label'    => esc_html__( 'Video Title', 'minimal' ),
	'section'  => 'video_section',
	'default'  => esc_html__( 'Watch Video' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.video-promo-content h2',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'video_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Video Link/URL
Kirki::add_field( 'minimal_config', [
	'type'     => 'link',
	'settings' => 'video_link',
	'label'    => esc_html__( 'Video Link/URL', 'minimal' ),
	'section'  => 'video_section',
	'default'  => esc_attr__( 'https://www.youtube.com/watch?v=ScMzIvxBSi4', 'minimal'),
	'transport' => 'postMessage',
	'active_callback' => [
		[
			'setting'  => 'video_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Video Section Background
Kirki::add_field( 'minimal_config', [
	'type'        => 'background',
	'settings'    => 'video_section_bg',
	'label'       => esc_html__( 'Video Section Background', 'minimal' ),
	'description' => esc_html__( 'Add section background from here.', 'minimal' ),
	'section'     => 'video_section',
	'default'     => [
		'background-color'      => 'rgba(15,17,27,0.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.video-promo',
		],
	], 
	'active_callback' => [
		[
			'setting'  => 'video_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// ## Team Section
// ==========================
Kirki::add_section( 'team_section', array(
    'title'          => esc_html__( 'Team Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the team section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Team Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'checkbox',
	'settings' => 'team_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Team Section?', 'minimal' ),
	'section'  => 'team_section',
	'default'  => true,
] );
// Team Section Title
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'team_section_title',
	'label'    => esc_html__( 'Team Section Title', 'minimal' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'Meet our team' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#team .section-title',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'team_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Team Section Description
Kirki::add_field( 'minimal_config', [
	'type'     => 'textarea',
	'settings' => 'team_section_desc',
	'label'    => esc_html__( 'Team Section Description', 'minimal' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'minimal' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#team .section-header p',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'team_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]	
] );
// Team Member Repeater 
Kirki::add_field( 'minimal_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Team Members', 'minimal' ),
	'section'     => 'team_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Team Member', 'minimal' ),
		'field' => 'team_member_title',
	],
	'button_label' => esc_html__('Add Member', 'minimal' ),
	'settings'     => 'team_item_repeater',
	'choices' => [
		'limit' => 4
	],
	'fields' => [
		'team_member_profile_picture' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Member Profile Picture', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
		],
		'team_member_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Member Title', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => esc_html__( 'Team Member Title', 'minimal' ),
		],
		'team_member_designation'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Team Member Designation', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => esc_html__( 'CEO', 'minimal' ),
		],
		'team_member_facebook_url'  => [
			'type'        => 'link',
			'label'       => esc_html__( 'Team Member Facebook Link', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => esc_attr__( '#', 'minimal' ),
		],
		'team_member_twitter_url'  => [
			'type'        => 'link',
			'label'       => esc_html__( 'Team Member Twitter Link', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => esc_attr__( '#', 'minimal' ),
		],
		'team_member_instagram_url'  => [
			'type'        => 'link',
			'label'       => esc_html__( 'Team Member Instagram Link', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => esc_attr__( '#', 'minimal' ),
		],
	],
	'active_callback' => [
		[
			'setting'  => 'team_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

// ## Counter Up Section
// ==========================
Kirki::add_section( 'counter_up_section', array(
    'title'          => esc_html__( 'Counter Up Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the counter up section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Couter Up Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'checkbox',
	'settings' => 'counter_up_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Counter Up Section?', 'minimal' ),
	'section'  => 'counter_up_section',
	'default'  => true,
] );
// Counter Up Section Background
Kirki::add_field( 'minimal_config', [
	'type'        => 'background',
	'settings'    => 'counter_up_section_bg',
	'label'       => esc_html__( 'Counter Up Section Background', 'minimal' ),
	'description' => esc_html__( 'Add section background from here.', 'minimal' ),
	'section'     => 'counter_up_section',
	'default'     => [
		'background-color'      => '#000',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#counter',
		],
	], 
	'active_callback' => [
		[
			'setting'  => 'counter_up_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );

// Counter Up Repeater 
Kirki::add_field( 'minimal_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Counter Up Item', 'minimal' ),
	'section'     => 'counter_up_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Counter Up', 'minimal' ),
		'field' => 'counter_up_title',
	],
	'button_label' => esc_html__('Add Counter', 'minimal' ),
	'settings'     => 'counter_up_item_repeater',
	'choices' => [
		'limit' => 4
	],
	'fields' => [
		'counter_up_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Member Profile Picture', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => 'lni-users',
			'choices' => [
				'lni-users' => 'User',
				'lni-emoji-smile' => 'Smile',
				'lni-download' => 'Download',
				'lni-thumbs-up' => 'Thumbs Up',
			]
		],
		'counter_up_number' => [
			'type'        => 'number',
			'label'       => esc_html__( 'Counter Number', 'minimal' ),
		],
		'counter_up_title'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Counter up title', 'minimal' ),
			'default' => esc_html__( 'Users', 'minimal' ),
		],
	],
	'active_callback' => [
		[
			'setting'  => 'counter_up_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

// ## Pricing Section
// ==========================
Kirki::add_section( 'pricing_section', array(
    'title'          => esc_html__( 'Pricing Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the pricing section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Pricing Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'checkbox',
	'settings' => 'pricing_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Pricing Section?', 'minimal' ),
	'section'  => 'pricing_section',
	'default'  => true,
] );
// Pricing Section Title
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'pricing_section_title',
	'label'    => esc_html__( 'Pricing Section Title', 'minimal' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( 'Best pricing' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#pricing .section-title',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'pricing_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Pricing Section Description
Kirki::add_field( 'minimal_config', [
	'type'     => 'textarea',
	'settings' => 'pricing_section_desc',
	'label'    => esc_html__( 'Pricing Section Description', 'minimal' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'minimal' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#pricing .section-header p',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'pricing_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]	
] );
// Pricing Repeater 
Kirki::add_field( 'minimal_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Pricing Item', 'minimal' ),
	'section'     => 'pricing_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Pricing', 'minimal' ),
		'field' => 'pricing_plan_title',
	],
	'button_label' => esc_html__('Add Pricing', 'minimal' ),
	'settings'     => 'pricing_item_repeater',
	'choices' => [
		'limit' => 3
	],
	'fields' => [
		'featured_plan' => [
			'type'        => 'checkbox',
			'label'       => esc_html__( 'Featured?', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => false
		],
		'pricing_plan_title'  => [
			'type'    => 'text',
			'label'   => esc_html__( 'Pricing Plan Title', 'minimal' ),
			'default' => esc_html__( 'Basic', 'minimal' ),
		],
		'pricing_plan_sub' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Select Plan Subscription', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => 'Month',
			'choices' => [
				'Year' => esc_html__('Yearly'),
				'Month' => esc_html__('Monthly'),
			]
		],
		'plan_price' => [
			'type'       => 'number',
			'label'      => esc_html__( 'Plan Price', 'minimal' ),
			'default'	 => esc_html__( '00.00', 'minimal' ),
		],
		'plan_feature_1' => [
			'type'      => 'text',
			'label'     => esc_html__( 'Plan Features', 'minimal' ),
			'default'	=> esc_html__( 'Business Analyzing', 'minimal' )
		],
		'plan_feature_2' => [
			'type'      => 'text',
			'label'     => esc_html__( 'Plan Features', 'minimal' ),
			'default'	=> esc_html__( '24/7 Tech Suport', 'minimal' )
		],
		'plan_feature_3' => [
			'type'      => 'text',
			'label'     => esc_html__( 'Plan Features', 'minimal' ),
			'default'	=> esc_html__( 'Operational Excellence', 'minimal' )
		],
		'plan_feature_4' => [
			'type'      => 'text',
			'label'     => esc_html__( 'Plan Features', 'minimal' ),
			'default'	=> esc_html__( 'Business Idea Ready', 'minimal' )
		],
		'plan_feature_5' => [
			'type'      => 'text',
			'label'     => esc_html__( 'Plan Features', 'minimal' ),
			'default'	=> esc_html__( '2 Database', 'minimal' )
		],
		'plan_feature_6' => [
			'type'      => 'text',
			'label'     => esc_html__( 'Plan Features', 'minimal' ),
			'default'	=> esc_html__( 'Customer Support', 'minimal' )
		],
		'plan_purchase_btn_label' => [
			'type'       => 'text',
			'label'      => esc_html__( 'Purchase Button Label', 'minimal' ),
			'default'	 => esc_html__( 'Get it', 'minimal' ),
		],
		'plan_purchase_btn_link' => [
			'type'       => 'text',
			'label'      => esc_html__( 'Purchase Button Link', 'minimal' ),
			'default'	 => esc_attr__( '#', 'minimal' ),
		],
		'plan_animation' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Select Animation', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => 'fadeInUp',
			'choices' => [
				'fadeInLeft' => esc_html__('Fade Left'),
				'fadeInUp' => esc_html__('Fade Up'),
				'fadeInRight' => esc_html__('Fade Right'),
			]
		],
	],
	'active_callback' => [
		[
			'setting'  => 'pricing_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	],
] );



// ## Skills Section
// ==========================
Kirki::add_section( 'skills_section', array(
    'title'          => esc_html__( 'Skills Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the skills section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Skills Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'checkbox',
	'settings' => 'skills_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Skills Section?', 'minimal' ),
	'section'  => 'skills_section',
	'default'  => true,
] );
// Skills Image
Kirki::add_field( 'minimal_config', [
	'type'        => 'image',
	'settings'    => 'skills_image',
	'label'       => esc_html__( 'Skills Image', 'minimal' ),
	'description' => esc_html__( 'Add Skills Image Here.', 'minimal' ),
	'section'     => 'skills_section',
	'active_callback' => [
		[
			'setting'  => 'skills_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Skills Title
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'skills_content_title',
	'label'    => esc_html__( 'Skills Content Title', 'minimal' ),
	'section'  => 'skills_section',
	'default'  => esc_html__( 'Our skills' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.skill-area .site-heading .section-title',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'skills_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Skills Content Description
Kirki::add_field( 'minimal_config', [
	'type'     => 'textarea',
	'settings' => 'skills_content_desc',
	'label'    => esc_html__( 'Skills Content Description', 'minimal' ),
	'section'  => 'skills_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'minimal' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '.skill-area .site-heading p',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'skills_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]	
] );
// Skills Bar Repeater 
Kirki::add_field( 'minimal_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Skills Progress Bar', 'minimal' ),
	'section'     => 'skills_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Skills', 'minimal' ),
		'field' => 'skills_bar_title',
	],
	'button_label' => esc_html__('Add Skills', 'minimal' ),
	'settings'     => 'skills_progress_bar_repeater',
	'choices' => [
		'limit' => 3
	],
	'fields' => [
		'skills_bar_title'  => [
			'type'    => 'text',
			'label'   => esc_html__( 'Progress Bar Title', 'minimal' ),
			'default' => esc_html__( 'Strategy & Analysis', 'minimal' ),
		],
		'skills_bar_percentage' => [
			'type'        => 'number',
			'label'       => esc_html__( 'Skills Percentage', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default' => '88',
		],
	],
	'active_callback' => [
		[
			'setting'  => 'skills_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	],
] );


// ## Portfolio Section
// ==========================
Kirki::add_section( 'portfolio_section', array(
    'title'          => esc_html__( 'Portfolio Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the skills section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Portfolio Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'switch',
	'settings' => 'portfolio_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Portfolio Section?', 'minimal' ),
	'section'  => 'portfolio_section',
	'default'  => 'show',
	'choices' => [
		'show'  => esc_html__( 'Show', 'minimal' ),
		'hide' => esc_html__( 'Hide', 'minimal' ),
	]
] );
// Portfolio Section Title
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'portfolio_section_title',
	'label'    => esc_html__( 'Portfolio Section Title', 'minimal' ),
	'section'  => 'portfolio_section',
	'default'  => esc_html__( 'Our works' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#portfolios .section-header .section-title',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'portfolio_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Portfolio Section Description
Kirki::add_field( 'minimal_config', [
	'type'     => 'textarea',
	'settings' => 'portfolio_section_desc',
	'label'    => esc_html__( 'Portfolio Title Description', 'minimal' ),
	'section'  => 'portfolio_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'minimal' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#portfolios .section-header p',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'portfolio_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]	
] );
// Portfolio Repeater 
Kirki::add_field( 'minimal_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Your Portfolios', 'minimal' ),
	'section'     => 'portfolio_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Portfolio', 'minimal' ),
	],
	'button_label' => esc_html__('Add portfolio', 'minimal' ),
	'settings'     => 'portfolio_repeater',
	'choices' => [
		'limit' => 6
	],
	'fields' => [
		'portfolio_thumbnail'  => [
			'type'    => 'image',
			'label'   => esc_html__( 'Portfolio Thumbnail', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
		],
		'portfolio_preview' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Portfolio Preview Image', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
		],
		'portfolio_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Portfolio Preview Image', 'minimal' ),
			'default'       => esc_html__( 'Portfolio Title', 'minimal' ),
		],
	],
	'active_callback' => [
		[
			'setting'  => 'portfolio_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

// ## Testimonial Section
// ==========================
Kirki::add_section( 'testimonial_section', array(
    'title'          => esc_html__( 'Testimonial Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the testimonial section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Testimonial Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'switch',
	'settings' => 'testimonial_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Testimonial Section?', 'minimal' ),
	'section'  => 'testimonial_section',
	'default'  => 'show',
	'choices' => [
		'show'  => esc_html__( 'Show', 'minimal' ),
		'hide' => esc_html__( 'Hide', 'minimal' ),
	]
] );
// Testimonial Section Background 
Kirki::add_field( 'minimal_config', [
	'type'        => 'background',
	'settings'    => 'testimonial_section_bg',
	'label'       => esc_html__( 'Testimonial Section Background', 'minimal' ),
	'description' => esc_html__( 'Add section background from here.', 'minimal' ),
	'section'     => 'testimonial_section',
	'default'     => [
		'background-color'      => 'rgba(15,17,27,0.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.testimonial',
		],
	], 
	'active_callback' => [
		[
			'setting'  => 'testimonial_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Testimonial Repeater 
Kirki::add_field( 'minimal_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Testimonials', 'minimal' ),
	'section'     => 'testimonial_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Testimonial', 'minimal' ),
	],
	'button_label' => esc_html__('Add testimonial', 'minimal' ),
	'settings'     => 'testimonial_repeater',
	'choices' => [
		'limit' => 6
	],
	'fields' => [
		'testimonial_author_thumb'  => [
			'type'    => 'image',
			'label'   => esc_html__( 'Testimonial Author Thumbnail', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
		],
		'testimonial_author_name' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Testimonial Author Name', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
			'default'       => esc_html__( 'Domeni GEsson', 'minimal' ),
		],
		'testimonial_author_designation' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Testimonial Author Designation', 'minimal' ),
			'default'       => esc_html__( 'UI/UX Designer', 'minimal' ),
		],
		'testimonial_author_comments' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Testimonial Author Comments', 'minimal' ),
			'default'       => esc_html__( 'Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness.', 'minimal' ),
		],
	],
	'active_callback' => [
		[
			'setting'  => 'testimonial_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	],
] );

// ## Blog Section
// ==========================
Kirki::add_section( 'blog_section', array(
    'title'          => esc_html__( 'Blog Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the blog section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Blog Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'switch',
	'settings' => 'blog_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Blog Section?', 'minimal' ),
	'section'  => 'blog_section',
	'default'  => 'show',
	'choices' => [
		'show'  => esc_html__( 'Show', 'minimal' ),
		'hide' => esc_html__( 'Hide', 'minimal' ),
	]
] );
// Blog Section Title
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'blog_section_title',
	'label'    => esc_html__( 'Blog Section Title', 'minimal' ),
	'section'  => 'blog_section',
	'default'  => esc_html__( 'Latest blog' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#blog .section-header .section-title',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'blog_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Blog Section Description
Kirki::add_field( 'minimal_config', [
	'type'     => 'textarea',
	'settings' => 'blog_section_title_desc',
	'label'    => esc_html__( 'Blog Title Description', 'minimal' ),
	'section'  => 'blog_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'minimal' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#blog .section-header p',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'blog_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]	
] );


// ## Client Section
// ==========================
Kirki::add_section( 'client_section', array(
    'title'          => esc_html__( 'Client Section', 'minimal' ),
    'description'    => esc_html__( 'Customize the client section form here.', 'minimal' ),
    'panel'          => 'stack_panel',
) );
// Client Section Show and Hide 
Kirki::add_field( 'minimal_config', [
	'type'     => 'switch',
	'settings' => 'client_section_show_hide',
	'label'    => esc_html__( 'Show/Hide Client Section?', 'minimal' ),
	'section'  => 'client_section',
	'default'  => 'show',
	'choices' => [
		'show'  => esc_html__( 'Show', 'minimal' ),
		'hide' => esc_html__( 'Hide', 'minimal' ),
	]
] );
// Client Section Title
Kirki::add_field( 'minimal_config', [
	'type'     => 'text',
	'settings' => 'client_section_title',
	'label'    => esc_html__( 'Client Section Title', 'minimal' ),
	'section'  => 'client_section',
	'default'  => esc_html__( 'Notable clients' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#clients .section-header .section-title',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'client_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]
] );
// Client Section Description
Kirki::add_field( 'minimal_config', [
	'type'     => 'textarea',
	'settings' => 'client_section_title_desc',
	'label'    => esc_html__( 'Client Title Description', 'minimal' ),
	'section'  => 'client_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'minimal' ),
	'transport' => 'postMessage',
	'js_vars' 	=> [
		[
			'element' => '#clients .section-header p',
			'function' => 'html',
		]
	],
	'active_callback' => [
		[
			'setting'  => 'client_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	]	
] );
// Clients Repeater 
Kirki::add_field( 'minimal_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Our clients', 'minimal' ),
	'section'     => 'client_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Clients', 'minimal' ),
	],
	'button_label' => esc_html__('Add Clients', 'minimal' ),
	'settings'     => 'client_item_repeater',
	'choices' => [
		'limit' => 5
	],
	'fields' => [
		'client_thumb'  => [
			'type'    => 'image',
			'label'   => esc_html__( 'Client Logo', 'minimal' ),
			'description' => esc_html__( '', 'minimal' ),
		],
	],
	'active_callback' => [
		[
			'setting'  => 'client_section_show_hide',
			'operator' => '==',
			'value'    => true,
		]
	],
] );