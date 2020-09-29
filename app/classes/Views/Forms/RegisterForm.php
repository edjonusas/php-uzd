<?php

namespace App\Views\Forms;

use Core\Views\Form;

class RegisterForm extends Form
{

    public function __construct()
    {
        $form = [
            'attr' => [
                'method' => 'POST',
                'id' => 'register'
            ],
            'fields' => [
                'user_name' => [
                    'label' => 'User name',
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                            'validate_user_unique',
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter Your User name'
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                        ],
                ],
                'password_repeat' => [
                    'label' => 'Repeat Password',
                    'type' => 'password',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                        ],
                ],
            ],
            'buttons' => [
                'register' => [
                    'title' => 'Register',
                ],
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ],
            ],
        ];

        parent::__construct($form);
    }
}