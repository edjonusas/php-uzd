<?php

namespace App\Views\Forms;

use Core\Views\Form;

class AddForm extends Form
{

    public function __construct()
    {
        $form = [
            'attr' => [
                'method' => 'POST',
                'id' => 'add-pixel'
            ],
            'fields' => [
                'x' => [
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_is_number',
                            'validate_field_range' => [
                                'min' => 0,
                                'max' => 499,
                            ],
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter X coordinates'
                        ]
                    ]
                ],
                'y' => [
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_is_number',
                            'validate_field_range' => [
                                'min' => 0,
                                'max' => 499,
                            ],
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter Y coordinates'
                        ]
                    ]
                ],

                'colour' => [
                    'type' => 'select',
                    'value' => 'red',
                    'validators' => [
                        'validate_selector_value',
                    ],
                    'option' => [
                        'red' => 'Red',
                        'blue' => 'Blue',
                        'green' => 'Green',
                        'black' => 'Black',
                        'yellow' => 'Yellow',
                    ],
                    'extra' => [
                        'attr' => [
                            'class' => 'colour-selector'
                        ]
                    ]
                ],
                'pixel_size' => [
                    'label' => 'Pixel size',
                    'type' => 'range',
                    'value' => '10',
                    'min_value' => '1',
                    'max_value' => '20',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_field_is_number',
                            'validate_field_range' => [
                                'min' => 1,
                                'max' => 20,
                            ],
                        ],
                ],
            ],

            'buttons' => [
                'login' => [
                    'title' => 'Add pixel',
                ],
            ],
            'validators' => [
                'validate_pixel_unique_position' => [
                    'x',
                    'y'
                ],
            ],
        ];

        parent::__construct($form);
    }
}