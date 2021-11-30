<?php
/**
 * astromag Theme Customizer
 *
 * @package astromag
 */

// init kirki theme option
 Kirki::add_config('astromag_theme_config', array(
     'capability'   =>  'edit_theme_options',
     'option_type'  =>  'theme_mod',
 ));

 // adding theme option panel
 Kirki::add_panel( 'astromag_panel', array(
     'priority' => 10,
     'title'    =>  esc_html__( 'Astromag Theme Options', 'astromag' ),
     'description'  =>  esc_html__( 'Get all the customization, theme options of Astromag theme here.', 'astromag' )
 ) );

/*----------------------------
Header setup
----------------------------*/

 // section for Header customization
 Kirki::add_section( 'astromag_header_setup', array(
    'title'    =>  esc_html__( 'Header Customization', 'astromag' ),
    'description'    =>  esc_html__( 'Customize all the settings related to Header', 'astromag' ),
    'panel' =>  'astromag_panel'
) );

// menu font size
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( 'Menu Font Size', 'astromag' ),
    'type' =>  'dimension',
    'settings' =>  'header_font_size',
    'section' =>  'astromag_header_setup',
    'default'   => '14px',
    'transport' =>  'postMessage',
    'js_vars'   =>  [
        [
            'element'   =>  '.nav-collapse a',
            'function'  =>  'css',
            'property'  =>  'font-size',
        ]
    ]
) );

// menu hover border color
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( 'Menu Hover Border Color', 'astromag' ),
    'type' =>  'color',
    'settings' =>  'header_hover_border_color',
    'section' =>  'astromag_header_setup',
    'default'   => '#df2021',
    'transport' =>  'postMessage',
    'js_vars'   =>  [
        [
            'element'   =>  '.menu-items > li:hover > a::before',
            'function'  =>  'css',
            'property'  =>  'background-color',
        ]
    ]
) );

// header divider one
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'header_divider_one',
	'section'     => 'astromag_header_setup',
	'default'     => '<hr>',
] );

// enable disable social handle
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'enable_social_handle',
	'label'       => esc_html__( 'Enable Social Handle?', 'astromag' ),
	'section'     => 'astromag_header_setup',
	'default'     => '0',
] );

// Social links repeater
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Social Links', 'astromag' ),
	'section'     => 'astromag_header_setup',
	'settings'     => 'header_social_handle',
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Social Link', 'astromag' ),
	],
	'button_label' => esc_html__('Add new social handle', 'astromag' ),
	'fields' => [
		'header_icon_icons' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Select an Icon', 'astromag' ),
            'placeholder' => esc_html__( 'Select an icon...', 'astromag' ),
            'choices'     => [
                'fa-brands fa-facebook-square' => esc_html__( 'Facebook', 'astromag' ),
                'fa-brands fa-google-plus-square' => esc_html__( 'Google Plus', 'astromag' ),
                'fa-brands fa-instagram' => esc_html__( 'Instagram', 'astromag' ),
                'fa-brands fa-twitter-square' => esc_html__( 'Twitter', 'astromag' ),
                'fa-brands fa-linkedin' => esc_html__( 'LinkedIn', 'astromag' ),
                'fa-brands fa-patreon' => esc_html__( 'Patreon', 'astromag' ),
                'fa-brands fa-paypal' => esc_html__( 'Paypal', 'astromag' ),
                'fa-brands fa-qq' => esc_html__( 'QQ', 'astromag' ),
                'fa-brands fa-behance-square' => esc_html__( 'Behance', 'astromag' ),
                'fa-brands fa-dribbble-square' => esc_html__( 'Dribble', 'astromag' ),
                'fa-brands fa-discord' => esc_html__( 'Discord', 'astromag' ),
                'fa-brands fa-facebook-messenger' => esc_html__( 'Messenger', 'astromag' ),
                'fa-brands fa-flickr' => esc_html__( 'Flickr', 'astromag' ),
                'fa-brands fa-github-square' => esc_html__( 'GitHub', 'astromag' ),
                'fa-brands fa-google-play' => esc_html__( 'Google Play', 'astromag' ),
                'fa-brands fa-app-store-ios' => esc_html__( 'App Store', 'astromag' ),
                'fa-brands fa-reddit-square' => esc_html__( 'Reddit', 'astromag' ),
                'fa-brands fa-pinterest-square' => esc_html__( 'Pinterest', 'astromag' ),
                'fa-brands fa-shopify' => esc_html__( 'Shopify', 'astromag' ),
                'fa-brands fa-snapchat-square' => esc_html__( 'Snapchat', 'astromag' ),
                'fa-brands fa-skype' => esc_html__( 'Skype', 'astromag' ),
                'fa-brands fa-soundcloud' => esc_html__( 'Soundcloud', 'astromag' ),
                'fa-brands fa-spotify' => esc_html__( 'Spotify', 'astromag' ),
                'fa-brands fa-stack-exchange' => esc_html__( 'Stack-exchange', 'astromag' ),
                'fa-brands fa-stack-overflow' => esc_html__( 'Stack-overflow', 'astromag' ),
                'fa-brands fa-telegram' => esc_html__( 'Telegram', 'astromag' ),
                'fa-brands fa-tiktok' => esc_html__( 'TikTok', 'astromag' ),
                'fa-brands fa-tumblr-square' => esc_html__( 'Tumblr', 'astromag' ),
                'fa-brands fa-twitch' => esc_html__( 'Twitch', 'astromag' ),
                'fa-brands fa-vimeo-square' => esc_html__( 'Vimeo', 'astromag' ),
                'fa-brands fa-vk' => esc_html__( 'VK', 'astromag' ),
                'fa-brands fa-whatsapp-square' => esc_html__( 'Whatsapp', 'astromag' ),
                'fa-brands fa-wordpress' => esc_html__( 'WordPress', 'astromag' ),
                'fa-brands fa-yahoo' => esc_html__( 'Yahoo', 'astromag' ),
                'fa-brands fa-youtube' => esc_html__( 'Youtube', 'astromag' ),
            ],
            'default'     => 'fa-brands fa-wordpress',
		],
		'header_icons_color'  => [
			'type'        => 'color',
			'label'       => esc_html__( 'Icon Color', 'astromag' ),
			'default'     => '#065dbf',
		],
		'header_icon_title'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Title', 'astromag' ),
			'default'     => 'WordPress',
		],
		'header_icon_link'  => [
			'type'        => 'link',
			'label'       => esc_html__( 'Social Link', 'astromag' ),
			'default'     => esc_url_raw( 'https://wordpress.org' ),
		],
	],
    'choices'   => [
        'limit' => 4,
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'enable_social_handle',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

/*----------------------------
Typography setup
----------------------------*/
Kirki::add_section( 'astromag_typography', array(
    'title'    =>  esc_html__( 'Typography', 'astromag' ),
    'description'    =>  esc_html__( 'Site wide typography settings', 'astromag' ),
    'panel' =>  'astromag_panel'
) );

// Body Typography
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( 'Body typography', 'astromag' ),
    'type'  =>  'typography',
    'settings'  => 'body_typography',
    'section'   =>  'astromag_typography',
    'default'   =>  [
        'font-family'   =>  'Poppins',
        'variant'       =>  'regular',
        'font-size'     =>  '14px',
        'line-height'   =>  '1.5',
        'letter-spacing'    =>  '0',
        'color'         =>  '#333333',
        'text-transform'    =>  'none',
    ],
    'choices'       => [
        'fonts' =>  [
            'google'    =>  [ 'popularity', 50 ],
            'standard'  =>  [ 'sans-serif' ],
        ]
    ],
    'transport'     =>  'auto',
    'output'        =>  [
        [
            'element'   =>  'body'
        ],
    ],
) );

// Section divider one
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section__divider_one_typo',
	'section'     => 'astromag_typography',
	'default'     => '<hr>',
] );

// Heading Typography
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( 'Heading typography', 'astromag' ),
    'type'  =>  'typography',
    'settings'  => 'heading_typography',
    'section'   =>  'astromag_typography',
    'default'   =>  [
        'font-family'   =>  'Poppins',
        'variant'       =>  '600',
        'line-height'   =>  'inherit',
        'letter-spacing'    =>  'inherit',
        'text-transform'    =>  'none',
        'subsets'       => array( 'latin' ),
    ],
    'choices'       => [
        'variant' => array(
            'regular',
            '300',
            '500',
            '600',
            '700',
        ),
        'fonts' =>  [
            'google'    =>  [ 
                'Poppins', 
                'Titillium Web',
                'Mukta',
                'Lato', 
                'Oswald',
                'Hind Siliguri',
                'Montserrat',
                'Raleway',
                'PT Sans',
                'Roboto', 
                'Open Sans',
                'Noto Serif', 
                'Noto Sans',
            ],
            'standard'  =>  [ 'sans-serif' ],
        ]
    ],
    'transport'     =>  'auto',
    'output'        =>  [
        [
            'element'   =>  'h1, h2, h3, h4, h5, h6'
        ],
    ],
) );


 /*-------------
 # Page Background section
 -------------*/
 // section for background color and image for 404, archive, search, index, page
 Kirki::add_section( 'page_title_bg_customization', array(
     'title'    =>  esc_html__( 'Page Title Customization', 'astromag' ),
     'description'    =>  esc_html__( 'Customize all the pages background color and images', 'astromag' ),
     'panel' =>  'astromag_panel'
 ) );

 // change background color / image for Blog/Index page
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( 'Blog page title background', 'astromag' ),
    'type' =>  'background',
    'settings' =>  'blog_page_bg',
    'section' =>  'page_title_bg_customization',
    'default'   => [
        'background-color'  =>  'rgba(51, 50, 51, 1)',
        'background-image'  =>  '',
        'background-repeat' =>  'no-repeat',
        'background-position'   =>  'center center',
        'background-size'   => 'cover',
        'background-attachment' =>  'scroll',
    ],
    'transport' =>  'auto',
    'output'    =>  [
        [
            'element'   =>  '.astromag-page-title-area.blog-title',
        ],
    ],
) );

// Section divider one
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section__divider_one',
	'section'     => 'page_title_bg_customization',
	'default'     => '<hr>',
] );

 // change background color / image for Archive page
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( 'Archive page title background', 'astromag' ),
    'type' =>  'background',
    'settings' =>  'archive_page_bg',
    'section' =>  'page_title_bg_customization',
    'default'   => [
        'background-color'  =>  'rgba(51, 50, 51, 1)',
        'background-image'  =>  '',
        'background-repeat' =>  'no-repeat',
        'background-position'   =>  'center center',
        'background-size'   => 'cover',
        'background-attachment' =>  'scroll',
    ],
    'transport' =>  'auto',
    'output'    =>  [
        [
            'element'   =>  '.astromag-page-title-area.archive-title',
        ],
    ],
) );

// Section divider two
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section__divider_two',
	'section'     => 'page_title_bg_customization',
	'default'     => '<hr>',
] );

 // change background color / image for Search page
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( 'Search page title background', 'astromag' ),
    'type' =>  'background',
    'settings' =>  'search_page_bg',
    'section' =>  'page_title_bg_customization',
    'default'   => [
        'background-color'  =>  'rgba(51, 50, 51, 1)',
        'background-image'  =>  '',
        'background-repeat' =>  'no-repeat',
        'background-position'   =>  'center center',
        'background-size'   => 'cover',
        'background-attachment' =>  'scroll',
    ],
    'transport' =>  'auto',
    'output'    =>  [
        [
            'element'   =>  '.astromag-page-title-area.search-title',
        ],
    ],
) );

// Section divider three
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section__divider_three',
	'section'     => 'page_title_bg_customization',
	'default'     => '<hr>',
] );

 // change background color / image for 404 page
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( '404 page title background', 'astromag' ),
    'type' =>  'background',
    'settings' =>  'notfound_page_bg',
    'section' =>  'page_title_bg_customization',
    'default'   => [
        'background-color'  =>  'rgba(51, 50, 51, 1)',
        'background-image'  =>  '',
        'background-repeat' =>  'no-repeat',
        'background-position'   =>  'center center',
        'background-size'   => 'cover',
        'background-attachment' =>  'scroll',
    ],
    'transport' =>  'auto',
    'output'    =>  [
        [
            'element'   =>  '.astromag-page-title-area.nfound-title',
        ],
    ],
) );

/*----------------------------
Astromag home setup
----------------------------*/

 // section for Astromag home template
 Kirki::add_section( 'astromag_home_setup', array(
    'title'    =>  esc_html__( 'Astromag Home Setup', 'astromag' ),
    'description'    =>  esc_html__( 'Customize all the sections of Astromag home', 'astromag' ),
    'panel' =>  'astromag_panel'
) );

// Section Custom Title
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_one_custom_heading',
	'section'     => 'astromag_home_setup',
	'default'     => '<h3 style="padding:13px 20px; background:#ffffff; color:#000000; margin:0; border-radius:20px;">' . esc_html__( 'Section 1 Post settings', 'astromag' ) . '</h3>',
] );

// show section one?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'show_home_post_section_one',
	'label'       => esc_html__( 'Show Section One?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
] );

// Title
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( 'Title', 'astromag' ),
    'type' =>  'text',
    'settings' =>  'section_one_title',
    'section' =>  'astromag_home_setup',
    'default'   => esc_html__( 'Latest Posts', 'astromag' ),
    'transport' =>  'postMessage',
    'js_vars'   =>  [
        [
            'element'   =>  'h3.home-category',
            'function'  =>  'html',
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

// Title bar color
Kirki::add_field( 'astromag_theme_config', array(
    'label' =>  esc_html__( 'Title Bar Color', 'astromag' ),
    'type' =>  'color',
    'settings' =>  'section_one_title_bar_color',
    'section' =>  'astromag_home_setup',
    'default'   => '#6270fe',
    'transport' =>  'postMessage',
    'js_vars'   =>  [
        [
            'element'   =>  '.home-category:before',
            'function'  =>  'css',
            'property'  =>  'background-color',
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
) );

// Section divider one
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_one_divider_one',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Show post category
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'section_one_show_post_category',
	'label'       => esc_html__( 'Show Post Category?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Post category background color
Kirki::add_field( 'astromag_theme_config', [
	'label'       => esc_html__( 'Category Background Color', 'astromag' ),
	'type'        => 'color',
	'settings'    => 'section_one_post_category_background_color',
	'section'     => 'astromag_home_setup',
	'default'     => '#5664ff',
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.post-image span',
            'function'  =>  'css',
            'property'  =>  'background-color',
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_one_show_post_category',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider before No thumbnail
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_one_divider_no_thumb',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// No thumbnail Text
Kirki::add_field( 'astromag_theme_config', [
	'label'       => esc_html__( 'No thumbnail Text', 'astromag' ),
	'type'        => 'text',
	'settings'    => 'section_one_no_thumb_background_text',
	'section'     => 'astromag_home_setup',
	'default'     => esc_html__('No thumbnail', 'astromag'),
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// No thumbnail background color
Kirki::add_field( 'astromag_theme_config', [
	'label'       => esc_html__( 'No thumbnail Background Color', 'astromag' ),
	'type'        => 'color',
	'settings'    => 'section_one_no_thumb_background_color',
	'section'     => 'astromag_home_setup',
	'default'     => '#333333',
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.no-thumb',
            'function'  =>  'css',
            'property'  =>  'background-color',
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider two
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_one_divider_two',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// show published date
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'section_one_show_published_date',
	'label'       => esc_html__( 'Show Published Date?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// show post comment
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'section_one_show_post_comments',
	'label'       => esc_html__( 'Show Post Comments?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider before post type
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_one_divider_post_type',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Show post type
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'select',
	'settings'    => 'section_one_post_type',
	'label'       => esc_html__( 'Post Type', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => 'DESC',
	'placeholder' => esc_html__( 'Select an option...', 'astromag' ),
	'multiple'    => 0,
	'choices'     => [
		'DESC' => esc_html__( 'Latest Posts', 'astromag' ),
		'rand' => esc_html__( 'Random Posts', 'astromag' ),
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );



// Show post type
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'select',
	'settings'    => 'section_one_post_category',
	'label'       => esc_html__( 'Post Type', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '',
	'placeholder' => esc_html__( 'Select a Category...', 'astromag' ),
	'multiple'    => 100,
	'choices'     => Kirki_Helper::get_terms( array('taxonomy' => 'category') ),
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// posts show count
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'number',
	'settings'    => 'section_one_post_count',
	'label'       => esc_html__( 'Post Count', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => 5,
	'choices'     => [
		'min'  => 2,
		'step' => 1,
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section One Read More Text
Kirki::add_field( 'astromag_theme_config', [
	'label'       => esc_html__( 'Read More Text', 'astromag' ),
	'type'        => 'text',
	'settings'    => 'section_one_read_more_text',
	'section'     => 'astromag_home_setup',
	'default'     => esc_html__('Read full article', 'astromag'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.read-more-home a span:first-child',
            'function'  =>  'html',
            
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider three
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_one_divider_three',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Read more hover background settings
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'background',
	'settings'    => 'section_one_post_read_more_background',
	'label'       => esc_html__( 'Read More Hover Background', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => [
		'background-color'      => '#5664ff',
		'background-image'      => get_template_directory_uri().'/assets/images/Card_Background.png',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.read-more-home',
		],
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider four
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_one_divider_four',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_post_section_one',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

/*----------------------------
Section 2 Promotion settings
----------------------------*/

// Section 2 heading
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_two_custom_heading',
	'section'     => 'astromag_home_setup',
	'default'     => '<h3 style="padding:13px 20px; background:#ffffff; color:#000000; margin:0; border-radius:20px;">' . esc_html__( 'Section 2 Promotion settings', 'astromag' ) . '</h3>',
] );

// show promotion section?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'show_home_promotion_section',
	'label'       => esc_html__( 'Show Promotion Section?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
] );

// promotion background settings
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'background',
	'settings'    => 'section_two_promotion_background',
	'label'       => esc_html__( 'Promotion Background Settings', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => [
		'background-color'      => '#606efc',
		'background-image'      => get_template_directory_uri().'/assets/images/Banner_section_2.png',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.single-tutorial',
		],
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// Section divider one
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_two_divider_one',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// promotion title
Kirki::add_field( 'astromag_theme_config', [
	'label'       => esc_html__( 'Promotion Title', 'astromag' ),
	'type'        => 'text',
	'settings'    => 'section_two_promotion_title',
	'section'     => 'astromag_home_setup',
	'default'     => esc_html('Develop a complete blog website yourself easily'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.single-tutorial h2',
            'function'  =>  'html',
            
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// promotion description
Kirki::add_field( 'astromag_theme_config', [
	'label'       => esc_html__( 'Promotion Description', 'astromag' ),
	'type'        => 'textarea',
	'settings'    => 'section_two_promotion_desc',
	'section'     => 'astromag_home_setup',
	'default'     => esc_html('You can add sponsored promotions directly form this special promotion section easily. Hope it helps you a lot to grow.'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.single-tutorial p',
            'function'  =>  'html',
            
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );
// promotion image
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'image',
	'settings'    => 'section_two_promotion_img',
	'label'       => esc_html__( 'Promotion Image', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => get_template_directory_uri().'/assets/images/no-thumbnail.jpg',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// Section divider two
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_two_divider_two',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// show video hrs section?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'section_two_video_hrs',
	'label'       => esc_html__( 'Show Video Hours Text?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// Video text
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'section_two_video_text',
	'label'       => esc_html__( 'Video Text', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => esc_html('20hrs video'),
] );

// Section divider time
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_two_divider_before_access_time',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// show access section?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'section_two_access_time',
	'label'       => esc_html__( 'Show Time Text?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// Time text
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'section_two_time_text',
	'label'       => esc_html__( 'Time Text', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => esc_html('Lifetime access'),
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_two_access_time',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider pricing
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_two_divider_before_pricing',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// show pricing section?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'section_two_pricing',
	'label'       => esc_html__( 'Show Pricing Text?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// Pricing text
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'section_two_price_text',
	'label'       => esc_html__( 'Pricing Text', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => esc_html('Price - Free'),
    'transport'   => 'auto',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_two_pricing',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider four
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_two_divider_four',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Promotion link text
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
    'label'       => esc_html__('Promotion Link Text', 'astromag'),
	'settings'    => 'section_two_enroll_text',
	'section'     => 'astromag_home_setup',
	'default'     => esc_html('Enroll now'),
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Promotion link
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'link',
    'label'       => esc_html__('Promotion Link', 'astromag'),
	'settings'    => 'section_two_enroll_link',
	'section'     => 'astromag_home_setup',
	'default'     => esc_url('https://google.com'),
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider five
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_two_divider_five',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_promotion_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

/*----------------------------
Section 3 All posts
----------------------------*/

// Section 3 heading
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_three_custom_heading',
	'section'     => 'astromag_home_setup',
	'default'     => '<h3 style="padding:13px 20px; background:#ffffff; color:#000000; margin:0; border-radius:20px;">' . esc_html__( 'Section 3 All post settings', 'astromag' ) . '</h3>',
] );

// show all post section?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'show_home_all_post_section',
	'label'       => esc_html__( 'Show All Post Section?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
] );

// Post per page
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'number',
	'settings'    => 'section_three_post_per_page',
	'label'       => esc_html__( 'Number of Posts to Show on load', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => 6,
	'choices'     => [
		'min'  => 1,
		'step' => 1,
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// Post per row
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'number',
	'settings'    => 'section_three_post_per_row',
	'label'       => esc_html__( 'Number of Posts to Show in a Row', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => 3,
	'choices'     => [
		'min'  => 1,
        'max'  => 3,
		'step' => 1,
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider one
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_three_divider_one',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// No thumbnail text
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'section_three_no_thumb_background_text',
	'label'       => esc_html__( 'No thumbnail text', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => esc_html__('No Thumbnail', 'astromag'),
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// No thumbnail background color
Kirki::add_field( 'astromag_theme_config', [
	'label'       => esc_html__( 'No thumbnail Background Color', 'astromag' ),
	'type'        => 'color',
	'settings'    => 'section_three_no_thumb_background_color',
	'section'     => 'astromag_home_setup',
	'default'     => '#333333',
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.single-post-home.astromag-all-post-list .no-thumb',
            'function'  =>  'css',
            'property'  =>  'background-color',
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// Section divider two
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_three_divider_two',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// show all post category?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'section_three_show_post_category',
	'label'       => esc_html__( 'Show Post Category?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ]
    ],
] );

// Post category background color
Kirki::add_field( 'astromag_theme_config', [
	'label'       => esc_html__( 'Category Background Color', 'astromag' ),
	'type'        => 'color',
	'settings'    => 'section_three_post_category_background_color',
	'section'     => 'astromag_home_setup',
	'default'     => '#5664ff',
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.single-post-home.astromag-all-post-list .post-image span',
            'function'  =>  'css',
            'property'  =>  'background-color',
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_three_show_post_category',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );
// Section divider three
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_three_divider_three',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// show all post date?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'section_three_show_published_date',
	'label'       => esc_html__( 'Show Published Date?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// show all post comment?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'section_three_show_post_comments',
	'label'       => esc_html__( 'Show Comments?', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => '1',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider four
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_three_divider_four',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Read more text
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'section_three_read_more_text',
	'label'       => esc_html__( 'Read More text', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => esc_html__('Read full article', 'astromag'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.single-post-home.astromag-all-post-list .read-more-home a span:first-child',
            'function'  =>  'html',
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Read more hover background settings
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'background',
	'settings'    => 'section_three_post_read_more_background',
	'label'       => esc_html__( 'Read More Hover Background', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => [
		'background-color'      => '#5664ff',
		'background-image'      => get_template_directory_uri().'/assets/images/Card_Background.png',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.single-post-home.astromag-all-post-list .read-more-home',
		],
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Section divider five
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_three_divider_five',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// enable pagination
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'section_three_enable_pagination',
	'label'       => esc_html__( 'Enable Post Pagination', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => 'enable',
	'choices'     => [
		'enable'   => esc_html__( 'Enable', 'astromag' ),
		'disable' => esc_html__( 'Disable', 'astromag' ),
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// pagination visibility
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'section_three_pagination_visibility',
	'label'       => esc_html__( 'Pagination Visibility', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => 'visible-nav',
	'choices'     => [
		'visible-nav'   => esc_html__( 'Visible', 'astromag' ),
		'hide-nav' => esc_html__( 'Hidden', 'astromag' ),
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_three_enable_pagination',
            'operator'  =>  '===',
            'value'     =>  'enable',
        ],
    ],
] );

// Section divider six
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_three_divider_six',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// enable infinite scroll
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'radio-buttonset',
	'settings'    => 'section_three_enable_inf_scroll',
	'label'       => esc_html__( 'Enable Infinite Post Scroll', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => 'enable',
	'choices'     => [
		'enable'   => esc_html__( 'Enable', 'astromag' ),
		'disable' => esc_html__( 'Disable', 'astromag' ),
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_three_enable_pagination',
            'operator'  =>  '===',
            'value'     =>  'enable',
        ],
    ],
] );

// infinite scroll behavior
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'select',
	'settings'    => 'section_three_scroll_behavior',
	'label'       => esc_html__( 'Infinite Scroll Behavior', 'astromag' ),
	'section'     => 'astromag_home_setup',
    'multiple'    => 0,
	'default'     => 'scroll',
	'choices'     => [
		'scroll'   => esc_html__( 'Scroll', 'astromag' ),
		'button' => esc_html__( 'Button', 'astromag' ),
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_three_enable_pagination',
            'operator'  =>  '===',
            'value'     =>  'enable',
        ],
    ],
] );

// infinite scroll button text
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'section_three_scroll_btn_text',
	'label'       => esc_html__( 'Infinite Scroll Button Text', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => esc_html__('Load more post', 'astromag'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '#infinite-load-btn',
            'function'  =>  'html',
        ]
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_three_enable_pagination',
            'operator'  =>  '===',
            'value'     =>  'enable',
        ],
        [
            'setting'   =>  'section_three_scroll_behavior',
            'operator'  =>  '===',
            'value'     =>  'button',
        ],
    ],
] );

// Section divider seven
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_three_divider_seven',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// infinite scroll loading status texts
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'section_three_inf_scroll_loading_text',
	'label'       => esc_html__( 'Infinite Scroll Loading Status Text', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => esc_html__('Loading...', 'astromag'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.page-load-status p.infinite-scroll-request',
            'function'  =>  'html',
        ],
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_three_enable_inf_scroll',
            'operator'  =>  '===',
            'value'     =>  'enable',
        ],
    ],
] );

// infinite scroll end status texts
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'section_three_inf_scroll_end_text',
	'label'       => esc_html__( 'Infinite Scroll Content End Status Text', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => esc_html__('You reached the last page', 'astromag'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.page-load-status p.infinite-scroll-last',
            'function'  =>  'html',
        ],
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_three_enable_inf_scroll',
            'operator'  =>  '===',
            'value'     =>  'enable',
        ],
    ],
] );

// infinite scroll error status texts
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'section_three_inf_scroll_error_text',
	'label'       => esc_html__( 'Infinite Scroll Error Status Text', 'astromag' ),
	'section'     => 'astromag_home_setup',
	'default'     => esc_html__('Could not load new post', 'astromag'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.page-load-status p.infinite-scroll-error',
            'function'  =>  'html',
        ],
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
        [
            'setting'   =>  'section_three_enable_inf_scroll',
            'operator'  =>  '===',
            'value'     =>  'enable',
        ],
    ],
] );

// Section divider eight
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'custom',
	'settings'    => 'section_three_divider_eight',
	'section'     => 'astromag_home_setup',
	'default'     => '<hr>',
    'active_callback'   =>  [
        [
            'setting'   =>  'show_home_all_post_section',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );


/*----------------------------
Footer section
----------------------------*/

 // section for Astromag home template
 Kirki::add_section( 'astromag_footer_setup', array(
    'title'    =>  esc_html__( 'Footer Section', 'astromag' ),
    'description'    =>  esc_html__( 'Customize footer copyright texts', 'astromag' ),
    'panel' =>  'astromag_panel'
) );

// edit footer copyright?
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'toggle',
	'settings'    => 'change_footer_copyright_text',
	'label'       => esc_html__( 'Change Copyright Text?', 'astromag' ),
	'section'     => 'astromag_footer_setup',
	'default'     => '0',
] );

// copyright text
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'text',
	'settings'    => 'footer_copyright_text',
	'label'       => esc_html__( 'Copyright Text', 'astromag' ),
	'section'     => 'astromag_footer_setup',
	'default'     => esc_html__('&copy; Your Website', 'astromag'),
    'transport'   => 'postMessage',
    'js_vars'     => [
        [
            'element'   =>  '.site-info p',
            'function'  =>  'html',
        ],
    ],
    'active_callback'   =>  [
        [
            'setting'   =>  'change_footer_copyright_text',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );

// Copyright alignment
Kirki::add_field( 'astromag_theme_config', [
	'type'        => 'select',
	'settings'    => 'copyright_alignment',
	'label'       => esc_html__( 'Copyright Text Alignment', 'astromag' ),
	'section'     => 'astromag_footer_setup',
	'default'     => 'text-center',
	'placeholder' => esc_html__( 'Select an option...', 'astromag' ),
	'multiple'    => 0,
	'choices'     => [
		'text-left' => esc_html__( 'Left', 'astromag' ),
		'text-center' => esc_html__( 'Center', 'astromag' ),
		'text-right' => esc_html__( 'Right', 'astromag' ),
	],
    'active_callback'   =>  [
        [
            'setting'   =>  'change_footer_copyright_text',
            'operator'  =>  '===',
            'value'     =>  true,
        ],
    ],
] );