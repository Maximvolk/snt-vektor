<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1539155411,
    'checksum' => 'a759aed01beb355bae40f6724a95f68a',
    'files' => [
        'templates/jl_minix_free/custom/config/11' => [
            'index' => [
                'file' => 'templates/jl_minix_free/custom/config/11/index.yaml',
                'modified' => 1539155355
            ],
            'layout' => [
                'file' => 'templates/jl_minix_free/custom/config/11/layout.yaml',
                'modified' => 1539155355
            ]
        ]
    ],
    'data' => [
        'index' => [
            'name' => '11',
            'timestamp' => 1539155355,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'default',
                'timestamp' => 1539151380
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
                'logo' => [
                    'logo-7657' => 'Logo'
                ],
                'menu' => [
                    'menu-5263' => 'Menu'
                ],
                'messages' => [
                    'system-messages-4126' => 'System Messages'
                ],
                'content' => [
                    'system-content-1246' => 'Page Content'
                ],
                'branding' => [
                    'branding-7652' => 'Branding'
                ],
                'custom' => [
                    'custom-2638' => 'Contact Info',
                    'custom-2821' => 'Link',
                    'custom-8134' => 'Social'
                ],
                'mobile-menu' => [
                    'mobile-menu-7330' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'navigation' => 'navigation',
                    'logo-7657' => 'logo-7657',
                    'menu-5263' => 'menu-5263',
                    'sidebar' => 'sidebar',
                    'mainbar' => 'mainbar',
                    'system-messages-4126' => 'system-messages-4126',
                    'system-content-1246' => 'system-content-1246',
                    'aside' => 'aside',
                    'footer' => 'footer',
                    'branding-7652' => 'branding-4929',
                    'custom-2638' => 'custom-2130',
                    'custom-2821' => 'custom-1567',
                    'custom-8134' => 'custom-4939',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-7330' => 'mobile-menu-7330'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'default',
                'timestamp' => 1539151380
            ],
            'layout' => [
                'navigation' => [
                    
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'sidebar 14' => [
                                
                            ]
                        ],
                        1 => [
                            'mainbar 72' => [
                                
                            ]
                        ],
                        2 => [
                            'aside 14' => [
                                
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
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'sidebar' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'mainbar' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'aside' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-horizontal-paddings',
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
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
