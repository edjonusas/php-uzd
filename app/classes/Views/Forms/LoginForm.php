<?php

namespace App\Views\Forms;

use Core\Views\Form;

    class LoginForm extends Form
    {

        private array $form = [
            'attr' => [
                'method' => 'POST',
                'id' => 'login'
            ],
            'fields' => [
                'user_name' => [
                    'label' => 'User Name',
                    'type' => 'text',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter Your User Name'
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'value' => '',
                    'validators' =>
                        [
                            'validate_field_not_empty',
                        ],
                ],
            ],
            'buttons' => [
                'login' => [
                    'title' => 'Login',
                ],
            ],
            'validators' => [
                'validate_login' => [
                    'user_name',
                    'password'
                ]
            ],
        ];

        public function __construct(array $form = [])
        {
            parent::__construct($this->form);
        }

    }