<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/templates/jl_minix_free/custom/particles/sticky.yaml',
    'modified' => 1539151379,
    'data' => [
        'name' => 'Sticky',
        'description' => 'Show a back to top button',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                'id' => [
                    'type' => 'input.text',
                    'label' => 'Sticky element',
                    'description' => 'Sticky element id'
                ],
                'spacing' => [
                    'type' => 'input.number',
                    'label' => 'Spacing',
                    'default' => 0,
                    'description' => 'Enter spacing to top(px).'
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Developed and maintained by <a href="https://www.joomlead.com/" target="_blank">JoomLead.com</a><br><strong>Version: 1.0.0</strong>'
                ]
            ]
        ]
    ]
];
