<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/jl_minix_free/blueprints/styles/accent.yaml',
    'modified' => 1539151379,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the Minix theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'default' => '#171717'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'default' => '#10c9c3'
                ]
            ]
        ]
    ]
];
