<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/jl_minix_free/config/default/page/head.yaml',
    'modified' => 1539151379,
    'data' => [
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
];
