<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/jl_minix_free/blueprints/styles/main.yaml',
    'modified' => 1539151379,
    'data' => [
        'name' => 'Main Styles',
        'description' => 'Main content styles for the Minix theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#3C3C3C'
                ]
            ]
        ]
    ]
];
