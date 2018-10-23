<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/jl_minix_free/custom/config/default/layout.yaml',
    'modified' => 1539160055,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/home.png',
            'name' => 'default',
            'timestamp' => 1539151380
        ],
        'layout' => [
            '/navigation/' => [
                0 => [
                    0 => 'logo-7657 25',
                    1 => 'menu-5263 75'
                ]
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 14' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 72' => [
                            0 => [
                                0 => 'system-messages-4126'
                            ],
                            1 => [
                                0 => 'system-content-1246'
                            ]
                        ]
                    ],
                    2 => [
                        'aside 14' => [
                            
                        ]
                    ]
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'branding-4929 30',
                    1 => 'custom-2130 25',
                    2 => 'custom-1567 30',
                    3 => 'custom-4939 15'
                ]
            ],
            'offcanvas' => [
                0 => [
                    0 => 'mobile-menu-7330'
                ]
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
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
                    'class' => 'section-horizontal-paddings',
                    'extra' => [
                        
                    ]
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'section-horizontal-paddings'
                ]
            ]
        ],
        'content' => [
            'logo-7657' => [
                'attributes' => [
                    'image' => 'gantry-media://logo.png'
                ]
            ],
            'menu-5263' => [
                'attributes' => [
                    'mobileTarget' => '1'
                ],
                'block' => [
                    'variations' => 'align-right'
                ]
            ],
            'branding-4929' => [
                'attributes' => [
                    'content' => '<h2>Minix Design.inc </h2>
&copy; 2018 by <a href="http://joomlead.com/" title="JoomLead" class="g-powered-by">JoomLead</a>. All rights reserved.'
                ]
            ],
            'custom-2130' => [
                'title' => 'Contact Info',
                'attributes' => [
                    'html' => '<div class="contact-ft">
  <div class="ct-mail">
    <a href="https://joomlead.com/">demo@joomlead.com</a>
  </div>
  <div class="phone">
    +8 123 456 789
  </div>
</div>
'
                ]
            ],
            'custom-1567' => [
                'title' => 'Link',
                'attributes' => [
                    'html' => '<div class="links-list">
  <ul>
    <li><a href="#home">Главная</a></li>
    <li><a href="#info">Информация</a></li>
    <li><a href="#doc">Документы</a></li>
    <li><a href="#contact">Контакты</a></li>
  </ul>  
</div>
'
                ]
            ],
            'custom-4939' => [
                'title' => 'Social',
                'attributes' => [
                    'enabled' => 0,
                    'html' => '<div class="links-list">
  <ul>
    <li><a href="#">Facebook</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Instagram</a></li>
    <li><a href="#">Dribbble</a></li>
  </ul>
</div>
'
                ]
            ],
            'mobile-menu-7330' => [
                'title' => 'Mobile Menu'
            ]
        ]
    ]
];
