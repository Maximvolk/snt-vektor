<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/jl_minix_free/custom/config/_error/layout.yaml',
    'modified' => 1539151631,
    'data' => [
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
];
