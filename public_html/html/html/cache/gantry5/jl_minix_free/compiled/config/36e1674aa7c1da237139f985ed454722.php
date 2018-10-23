<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1539151442,
    'checksum' => '74e102a4bb07c64853aa093234d7829c',
    'files' => [
        'templates/jl_minix_free/custom/config/_error' => [
            'index' => [
                'file' => 'templates/jl_minix_free/custom/config/_error/index.yaml',
                'modified' => 1539151381
            ],
            'layout' => [
                'file' => 'templates/jl_minix_free/custom/config/_error/layout.yaml',
                'modified' => 1539151379
            ]
        ],
        'templates/jl_minix_free/custom/config/default' => [
            'index' => [
                'file' => 'templates/jl_minix_free/custom/config/default/index.yaml',
                'modified' => 1539151381
            ],
            'layout' => [
                'file' => 'templates/jl_minix_free/custom/config/default/layout.yaml',
                'modified' => 1539151381
            ],
            'styles' => [
                'file' => 'templates/jl_minix_free/custom/config/default/styles.yaml',
                'modified' => 1539151423
            ]
        ],
        'templates/jl_minix_free/config/default' => [
            'page/assets' => [
                'file' => 'templates/jl_minix_free/config/default/page/assets.yaml',
                'modified' => 1539151379
            ],
            'page/body' => [
                'file' => 'templates/jl_minix_free/config/default/page/body.yaml',
                'modified' => 1539151379
            ],
            'page/head' => [
                'file' => 'templates/jl_minix_free/config/default/page/head.yaml',
                'modified' => 1539151379
            ],
            'particles/branding' => [
                'file' => 'templates/jl_minix_free/config/default/particles/branding.yaml',
                'modified' => 1539151379
            ],
            'particles/copyright' => [
                'file' => 'templates/jl_minix_free/config/default/particles/copyright.yaml',
                'modified' => 1539151379
            ],
            'particles/logo' => [
                'file' => 'templates/jl_minix_free/config/default/particles/logo.yaml',
                'modified' => 1539151379
            ],
            'particles/social' => [
                'file' => 'templates/jl_minix_free/config/default/particles/social.yaml',
                'modified' => 1539151379
            ],
            'styles' => [
                'file' => 'templates/jl_minix_free/config/default/styles.yaml',
                'modified' => 1539151379
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'offcanvas-toggle' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'icon' => 'fa fa-bars'
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'content' => '&copy; 2017 by <a href="http://joomlead.com/" title="JoomLead" class="g-powered-by">JoomLead</a>. All rights reserved.',
                'css' => [
                    'class' => ''
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => '2015',
                    'end' => 'now'
                ],
                'owner' => 'JoomLead Team',
                'link' => '',
                'target' => '_blank',
                'css' => [
                    'class' => ''
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'JoomLead',
                'class' => 'g-logo'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'target' => '_blank',
                'display' => 'both',
                'title' => '',
                'items' => [
                    0 => [
                        'icon' => 'fa fa-facebook-square fa-fw',
                        'text' => '',
                        'link' => 'https://www.facebook.com/JoomLead',
                        'name' => 'Facebook'
                    ],
                    1 => [
                        'icon' => 'fa fa-twitter-square fa-fw',
                        'text' => '',
                        'link' => 'http://www.twitter.com/JoomLead',
                        'name' => 'Twitter'
                    ]
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'backtotop' => [
                'enabled' => true,
                'icon' => 'fa fa-angle-double-up'
            ],
            'sticky' => [
                'enabled' => true,
                'spacing' => 0
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => false
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '3'
                ],
                'body_top' => '',
                'body_bottom' => ''
            ],
            'assets' => [
                'favicon' => '',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
                'atoms' => [
                    0 => [
                        'id' => 'sticky-6179',
                        'type' => 'sticky',
                        'title' => 'Sticky',
                        'attributes' => [
                            'enabled' => '1',
                            'id' => 'g-navigation',
                            'spacing' => '0'
                        ]
                    ],
                    1 => [
                        'id' => 'backtotop-6547',
                        'type' => 'backtotop',
                        'title' => 'Back To Top',
                        'attributes' => [
                            'enabled' => '1',
                            'css' => [
                                'class' => ''
                            ],
                            'icon' => 'fa fa-angle-double-up'
                        ]
                    ],
                    2 => [
                        'type' => 'frameworks',
                        'title' => 'JavaScript Frameworks',
                        'attributes' => [
                            'enabled' => '1',
                            'jquery' => [
                                'enabled' => '1',
                                'ui_core' => '1',
                                'ui_sortable' => '0'
                            ],
                            'bootstrap' => [
                                'enabled' => '0'
                            ],
                            'mootools' => [
                                'enabled' => '0',
                                'more' => '0'
                            ]
                        ],
                        'id' => 'frameworks-6684'
                    ],
                    3 => [
                        'id' => 'assets-9384',
                        'type' => 'assets',
                        'title' => 'Custom CSS / JS',
                        'attributes' => [
                            'enabled' => '1',
                            'css' => [
                                
                            ],
                            'javascript' => [
                                0 => [
                                    'location' => 'gantry-assets://js/theme.js',
                                    'inline' => '',
                                    'in_footer' => '0',
                                    'extra' => [
                                        
                                    ],
                                    'priority' => '0',
                                    'name' => 'Theme Js'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#171717',
                'color-2' => '#10c9c3'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#222222',
                'text-active-color' => '#232529'
            ],
            'breadcrumbs' => [
                'background' => '#282828',
                'text-color' => '#ffffff'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '51rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '51rem'
            ],
            'font' => [
                'family-default' => 'family=Nunito:300,700,400',
                'family-title' => 'family=Montserrat:700,400'
            ],
            'footer' => [
                'background' => '#141414',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#3C3C3C'
            ],
            'menu' => [
                'col-width' => '200px',
                'animation' => 'g-fade'
            ],
            'menustyle' => [
                'text-color' => '#5f5f5f',
                'text-color-active' => '#10c9c3',
                'sublevel-text-color' => '#c5c5c5',
                'sublevel-text-color-active' => '#ffffff',
                'sublevel-background' => '#252525'
            ],
            'navigation' => [
                'background' => '#ffffff',
                'text-color' => '#000000'
            ],
            'offcanvas' => [
                'background' => '#282828',
                'text-color' => '#ffffff',
                'toggle-color' => '#282828',
                'width' => '14rem',
                'toggle-visibility' => '2'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => '_error',
            'timestamp' => 1539151379,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => '_error',
                'timestamp' => 1503514829
            ],
            'positions' => [
                
            ],
            'sections' => [
                'navigation' => 'Navigation',
                'sidebar' => 'Sidebar',
                'mainbar' => 'Mainbar',
                'aside' => 'Aside',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'custom' => [
                    'custom-8525' => 'Custom HTML',
                    'custom-5592' => 'Custom HTML',
                    'custom-1522' => 'Contact Info',
                    'custom-9788' => 'Link',
                    'custom-1524' => 'Social'
                ],
                'messages' => [
                    'system-messages-6091' => 'System Messages'
                ],
                'content' => [
                    'system-content-3910' => 'Page Content'
                ],
                'logo' => [
                    'logo-9627' => 'Logo'
                ],
                'menu' => [
                    'menu-6412' => 'Menu'
                ],
                'branding' => [
                    'branding-6112' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-2831' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'navigation' => 'navigation',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'logo-9627' => 'logo-2063',
                    'menu-6412' => 'menu-5879',
                    'branding-6112' => 'branding-7444',
                    'custom-1522' => 'custom-6279',
                    'custom-9788' => 'custom-6787',
                    'custom-1524' => 'custom-5679',
                    'mobile-menu-2831' => 'mobile-menu-8742'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => '_error',
                'timestamp' => 1503514829
            ],
            'layout' => [
                'navigation' => [
                    
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'sidebar 20' => [
                                
                            ]
                        ],
                        1 => [
                            'mainbar 60' => [
                                0 => [
                                    0 => 'custom-8525'
                                ],
                                1 => [
                                    0 => 'system-messages-6091'
                                ],
                                2 => [
                                    0 => 'system-content-3910'
                                ],
                                3 => [
                                    0 => 'custom-5592'
                                ]
                            ]
                        ],
                        2 => [
                            'aside 20' => [
                                
                            ]
                        ]
                    ]
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'sidebar' => [
                    'type' => 'section'
                ],
                'mainbar' => [
                    'type' => 'section'
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-horizontal-paddings section-vertical-paddings',
                        'extra' => [
                            
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'custom-8525' => [
                    'title' => 'Custom HTML',
                    'attributes' => [
                        'html' => '<h2 class="error-txt">Sorry!</h2>'
                    ]
                ],
                'custom-5592' => [
                    'title' => 'Custom HTML',
                    'attributes' => [
                        'html' => 'IT SEEMS THAT PAGE YOU ARE LOOKING FOR NO LONGER EXISTS.
PLEASE GO TO HOMEPAGE'
                    ]
                ]
            ]
        ]
    ]
];
