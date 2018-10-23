<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/jl_minix_free/gantry/theme.yaml',
    'modified' => 1539151380,
    'data' => [
        'details' => [
            'name' => 'Minix Free',
            'version' => '1.0.1',
            'icon' => 'paper-plane',
            'date' => 'April 05, 2018',
            'author' => [
                'name' => 'JoomLead Team',
                'email' => 'support@joomlead.com',
                'link' => 'https://joomlead.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'updates' => [
                'link' => NULL
            ],
            'copyright' => '(C) 2015 - 2018 JoomLead. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Minix Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'joomla',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'jl_minix_free',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://include/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'roboto' => [
                    400 => 'gantry-theme://fonts/roboto_regular_macroman/Roboto-Regular-webfont',
                    500 => 'gantry-theme://fonts/roboto_medium_macroman/Roboto-Medium-webfont',
                    700 => 'gantry-theme://fonts/roboto_bold_macroman/Roboto-Bold-webfont'
                ],
                'Montserrat' => [
                    100 => 'gantry-theme://fonts/Montserrat/Montserrat-thin/Montserrat-Thin',
                    200 => 'gantry-theme://fonts/Montserrat/Montserrat-ExtraLight/Montserrat-ExtraLight',
                    300 => 'gantry-theme://fonts/Montserrat/Montserrat-Light/Montserrat-Light',
                    400 => 'gantry-theme://fonts/Montserrat/Montserrat-Regular/Montserrat-Regular',
                    500 => 'gantry-theme://fonts/Montserrat/Montserrat-Medium/Montserrat-Medium',
                    600 => 'gantry-theme://fonts/Montserrat/Montserrat-SemiBold/Montserrat-SemiBold',
                    700 => 'gantry-theme://fonts/Montserrat/Montserrat-Bold/Montserrat-Bold',
                    800 => 'gantry-theme://fonts/Montserrat/Montserrat-ExtraBold/Montserrat-ExtraBold'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'minix',
                    1 => 'minix-joomla',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'minix'
                ],
                'overrides' => [
                    0 => 'minix-joomla',
                    1 => 'custom'
                ]
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title3' => 'Title 3',
                    'title4' => 'Title 4',
                    'title5' => 'Title 5',
                    'title6' => 'Title 6',
                    'title-grey' => 'Title Grey',
                    'title-pink' => 'Title Pink',
                    'title-red' => 'Title Red',
                    'title-purple' => 'Title Purple',
                    'title-orange' => 'Title Orange',
                    'title-blue' => 'Title Blue',
                    'title-underline' => 'Title Underline',
                    'title-rounded' => 'Title Rounded'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box3' => 'Box 3',
                    'box4' => 'Box 4',
                    'box5' => 'Box 5',
                    'box6' => 'Box 6',
                    'box-white' => 'Box White',
                    'box-grey' => 'Box Grey',
                    'box-pink' => 'Box Pink',
                    'box-red' => 'Box Red',
                    'box-purple' => 'Box Purple',
                    'box-orange' => 'Box Orange',
                    'box-blue' => 'Box Blue'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'bordered' => 'Bordered',
                    'shadow' => 'Shadow 1',
                    'shadow2' => 'Shadow 2',
                    'rounded' => 'Rounded',
                    'square' => 'Square'
                ],
                'Utility' => [
                    'equal-height' => 'Equal Height',
                    'g-outer-box' => 'Outer Box',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'title-center' => 'Centered Title',
                    'center' => 'Center',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.4.0'
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent'
                ],
                'section' => [
                    0 => 'navigation',
                    1 => 'breadcrumbs',
                    2 => 'main',
                    3 => 'footer',
                    4 => 'aside',
                    5 => 'sidebar',
                    6 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
